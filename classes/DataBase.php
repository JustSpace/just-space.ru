<?php
require_once($_SERVER['DOCUMENT_ROOT'] . "/includes/const.php");

class DataBase extends Base
{
    public $pdo;
    public function __construct(){
        parent::__construct();
    }

    public function Add($tableName, $arFieldsName = array(), $arFieldsValue = array()){

      $query_string = "INSERT INTO " . $tableName . " (";

      for($i = 0; $i < count($arFieldsName); $i++){
        if($i < count($arFieldsName) - 1){
          $query_string .= $arFieldsName[$i] . ", ";
        }
        else{
          $query_string .= $arFieldsName[$i];
        }
      }

      $query_string .= ") VALUES (";

      for($i = 0; $i < count($arFieldsName); $i++){
        if($i < count($arFieldsName) - 1){
          $query_string .= ":" . $arFieldsName[$i] . ", ";
        }
        else{
          $query_string .= ":" . $arFieldsName[$i];
        }
      }

      $query_string .= ");";

      $query = $this->pdo->prepare($query_string);

      $execute_array = array();

      for($i = 0; $i < count($arFieldsName); $i++){
        $execute_array[$arFieldsName[$i]] = trim($arFieldsValue[$i]);
      }
      try{
        $query->execute($execute_array);
      }
      catch(Exception $e){
        echo 'Выброшено исключение: ',  $e->getMessage(), "<br>\n";
      }
      return $query;
    }

    public function Get($tableName, $name, $value){
      $query = $this->pdo->prepare('SELECT * FROM ' . $tableName . ' WHERE ' . $name . ' = :' . $name . ';');
      $query->execute(array($name => $value));
      return $query;
    }

    public function GetList($arOrder = array(), $arFilter = array(), $arSelect = array()){

    }
}

?>
