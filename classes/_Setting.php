<?php
    require_once("/home/users/g/gazeltrafic/domains/just-space.ru/includes/const.php");

    class Setting extends Base
    {
      public $pdo;
      public $emailPattern = "/[\w\d-_]{2,15}@[\w\d-_]{2,20}\.[\w]{2,5}/i";

      public function __construct(){
        parent::__construct();
      }

      public function AddSetting($user){

      }

      public function GetSetting($user){
        $query = $this->pdo->prepare('SELECT * FROM ls_settings WHERE user = :user;');
        $query->execute(array('user' => $user));
        return $query;
      }

      public function ClearSetting($email){
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
          $filter = " WHERE ";

          foreach($arFilter as $key => $value){
            if(is_numeric($key)){
              $logic = " " . $value . " ";
              $filter .= $logic;
              continue;
            }
            $key = explode(".", $key);
            if($value != "NULL"){
              $value = "'" . $value . "'";
            }
            $filter .= $key[0] . " " . $key[1] . " " . $value;
          }
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

      public function UpdateEmailDate($email, $departure_date){
        if(!$this->AddEmail($email, null, 1, $departure_date)){
          $query = $this->pdo->prepare('UPDATE ls_emails SET departure_date=:departure_date WHERE email=:email;');
          $query->execute(array('email' => $email, 'departure_date' => $departure_date));
          return $query;
        }
      }

      public function UpdateSetting($user, $email_delay){
        if(!$this->AddSetting($user)){
          $query = $this->pdo->prepare('UPDATE ls_settings SET email_delay=:email_delay WHERE user=:user;');
          $query->execute(array('user' => $user, 'email_delay' => $email_delay));
          return $query;
        }
      }
    }

?>
