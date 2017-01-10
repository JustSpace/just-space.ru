<?php
    require_once($_SERVER['DOCUMENT_ROOT'] . "/includes/const.php");

    class Email extends Base
    {
        public $pdo;
        public function __construct(){
            parent::__construct();
        }

        public function AddEmail($email){
            if(!$this->GetEmail($email)->Fetch()){
              $query = $this->pdo->prepare('INSERT INTO ls_emails (email) VALUES (:email);');
              $query->execute(array('email' => $email));
              return $query;
            }
        }

        public function GetEmail($email){
            $query = $this->pdo->prepare('SELECT * FROM ls_emails WHERE email = :email;');
            $query->execute(array('email' => $email));
            return $query;
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
                foreach($arFilter as $key => $value){
                    $arStorage[] = $key . " = '" . $value . "'";
                }
                $filter = " WHERE " . implode(" AND ", $arStorage);
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
    }

?>
