<?php
    require_once("/home/users/g/gazeltrafic/domains/just-space.ru/includes/const.php");

    class User extends Base
    {
        public $pdo;
        public function __construct(){
            parent::__construct();
        }

        public function AddUser($login, $password, $name, $email, $rights = 0){
            $hash = password_hashing($password);
            if(!is_int($rights)){
                $rights = 0;
            }
            $query = $this->pdo->prepare('INSERT INTO ls_users (login, password, name, email, rights) VALUES (:login, :password, :name, :email, :rights);');
            $query->execute(array('login' => $login, 'password' => $hash, 'name' => $name, 'email' => $email, 'rights' => $rights));
            return $query;
        }

        public function GetUser($login){
            $query = $this->pdo->prepare('SELECT * FROM ls_users WHERE login = :login;');
            $query->execute(array('login' => $login));
            return $query;
        }

        public function DeleteUser($login){
            $query = $this->pdo->prepare('DELETE FROM ls_users WHERE login = :login;');
            $query->execute(array('login' => $login));
            return $query;
        }

        public function SetRights($login, $rights){
            $query = $this->pdo->prepare('UPDATE ls_users SET rights = :rights WHERE login = :login;');
            $query->execute(array('login' => $login, 'rights' => $rights));
            return $query;
        }

        public function Authorization($login, $password){
            $arUserField = $this->GetUser($login)->Fetch();
            if($login == $arUserField["login"] && password_verify($password, $arUserField["password"])){
                $_SESSION["user"] = $login;
                return true;
            }
            return false;
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
            $query = $this->pdo->prepare("SELECT{$select}FROM ls_users{$filter}{$order};");
            $query->execute();
            return $query;
        }

        public function GetListJson($arOrder = array(), $arFilter = array(), $arSelect = array()){
          $dbRes = $this->GetList($arOrder, $arFilter, $arSelect);

          $resultString = '{"records":[';
          $arJson = [];

          while($arUser = $dbRes->Fetch()){
            $arJson[] = '{"id":' . $arUser["id"] . ',"login":"' . $arUser["login"] . '","name":"' . $arUser["name"] . '","email":"' . $arUser["email"] . '","rights":"' . $arUser["rights"] .'"}';
          }

          for($i = 0; $i < count($arJson); $i++){
            $resultString .= $arJson[$i];
            if($i < count($arJson)-1){
              $resultString .= ",";
            }
          }

          $resultString .= "]}";

          return $resultString;
        }
    }

?>
