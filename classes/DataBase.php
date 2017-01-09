<?php
require_once($_SERVER['DOCUMENT_ROOT'] . "/includes/const.php");

class DataBase extends Base
{
    public $pdo;
    public function __construct(){
        parent::__construct();
    }

    public function GetList($arOrder = array(), $arFilter = array(), $arSelect = array()){

    }
}

?>
