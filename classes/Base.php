<?php
    require_once($_SERVER['DOCUMENT_ROOT'] . "/includes/const.php");

    abstract class Base
    {
        protected $pdo;

        public function __construct(){
            $dsn = "mysql:host=".DB_HOST.";dbname=".DB_NAME;"charset=UTF8";
            $opt = array(
                PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
                PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
            );
            $this->pdo = new PDO($dsn, DB_USER, DB_PASSWORD, $opt);
            $this->pdo->exec('SET NAMES utf8');
        }

        abstract public function GetList($arOrder, $arFilter, $arSelect);
    }
?>
