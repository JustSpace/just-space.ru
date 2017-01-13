<?php
    require_once($_SERVER['DOCUMENT_ROOT'] . "/includes/const.php");
    require_once ($_SERVER['DOCUMENT_ROOT'] . "/libs/simplehtmldom_1_5/simple_html_dom.php");

    class Email extends Base
    {
        public $pdo;
        public $emailPattern = "/[\w\d-_]{2,15}@[\w\d-_]{2,20}\.[\w]{2,5}/i";

        public function __construct(){
            parent::__construct();
        }

        public function AddEmail($email, $site = null, $availability_date = null){
            $email = trim($email);

            $site = make_correct_url($site);

            if(!$this->GetEmail($email)->Fetch() && filter_var($email, FILTER_VALIDATE_EMAIL)){
              $query = $this->pdo->prepare('INSERT INTO ls_emails (email, site) VALUES (:email, :site);');
              $query->execute(array('email' => $email, 'site' => $site));
              return $query;
            }
        }

        public function AddSiteEmail($url){
          $arEmail = $this->GetSiteEmail($url);

          foreach($arEmail as $email){
            $this->AddEmail($email, $url);
          }

        }

        public function GetEmail($email){
            $query = $this->pdo->prepare('SELECT * FROM ls_emails WHERE email = :email;');
            $query->execute(array('email' => $email));
            return $query;
        }

        public function GetSiteEmail($url, $findpages = true){
          $url = make_correct_url($url);

          $arLinks = [];
          $arResEmail = [];
          $arContent = [];
          $arEmailOnLink = [];
          $arLinks[] = $url;

          try{
            $data = file_get_html($url);

            if(!is_object($data)){
              rm_from_array($url,$arLinks);
              throw new Exception("Невозможно извлечь данные с " . $url);
            }

            foreach($data->find('script,link,comment') as $tmp){
              $tmp->outertext = '';
            }

            if($findpages && count($data->find('a'))){
              foreach($data->find('a') as $a){
                if(preg_match('#(javascript:void\(0\))#', $a->href)
                  || preg_match('#tel:[+].[0-9]*#', $a->href)
                  || preg_match('#mailto:#', $a->href)
                  || preg_match('#^https*://#', $a->href)
                  || preg_match('#\##', $a->href)
                ){
                  continue;
                }

                if(!preg_match('#^http*://#', $a->href)){
                  if(preg_match('#^/#', $a->href)){
                    $a->href = $url . $a->href;
                  }
                  else{
                    $a->href = $url . "/" . $a->href;
                  }
                }

                $a->href = str_replace('&amp;', '&', $a->href);

                $arLinks[] = $a->href;
                $this->GetSiteEmail($a->href, false);
              }
            }
            $data->clear();
            unset($data);
          }
          catch(Exception $e){
            echo $e->getMessage();
          }
          foreach($arLinks as $link){
            $content = file_get_contents($link);
            $arContent = array_unique(preg_split("#[\s<>,\"\'\\\/:=]#", $content));

            $arEmailOnLink[] = array_unique(preg_grep($this->emailPattern, $arContent));
          }

          foreach($arEmailOnLink as $arEmail){
            foreach($arEmail as $email){
              $arResEmail[] = $email;
            }
          }

          return array_unique($arResEmail);
        }

        public function DeleteEmail($email){
            $query = $this->pdo->prepare('DELETE FROM ls_emails WHERE email = :email;');
            $query->execute(array('email' => $email));
            return $query;
        }

        public function GetList($arOrder = array(), $arFilter = array(), $arSelect = array()){
            /* Set order */
            if(!empty($arOrder)){
                $arStorage = [];
                foreach($arOrder as $key => $value){
                    $arStorage[] = $key . " " . $value;
                }
                $order = " ORDER BY " . implode(", ", $arStorage);
            }
            else{
                $order = " ORDER BY id ASC";
            }

            /* Set filter */
            if(!empty($arFilter)){
                $arStorage = [];
                $logic = "AND";

                foreach($arFilter as $key => $value){
                  if($key == "LOGIC"){
                    $logic = $value;
                    continue;
                  }
                  $key = explode(".",$key);
                  if($value != "NULL"){
                    $value = "'" . $value . "'";
                  }
                  $arStorage[] = $key[0] . " " . $key[1] . " " . $value;
                }
                
                $filter = " WHERE " . implode(" " . $logic . " ", $arStorage);
            }
            else{
                $filter = "";
            }

            /* Set select */
            if(!empty($arSelect)){
                $select = " " . implode(", ", $arSelect) . " ";
            }
            else{
                $select = "*";
            }
            $query = $this->pdo->prepare("SELECT{$select}FROM ls_emails{$filter}{$order};");
            $query->execute();
            return $query;
        }

        public function UpdateEmailDate($email, $availability_date){
          if(!$this->AddEmail($email, null, $availability_date)){
            $query = $this->pdo->prepare('UPDATE ls_emails SET availability_date=:availability_date WHERE email=:email;');
            $query->execute(array('email' => $email, 'availability_date' => $availability_date));
            return $query;
          }
        }
    }

?>
