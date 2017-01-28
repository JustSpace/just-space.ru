<?php
require_once("/home/users/g/gazeltrafic/domains/just-space.ru/includes/const.php");

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
