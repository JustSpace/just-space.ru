<?php
require_once($_SERVER['DOCUMENT_ROOT'] . "/includes/const.php");

class File extends Base
{
    public $pdo;
    public function __construct(){
        parent::__construct();
    }

    public function GetFile($filename, $path){
        $arAllFiles = scandir($path);
        foreach($arAllFiles as $file) {
            if ($file == "." || $file == ".." || is_dir($path.$file) || $file[0] == ".") {
                continue;
            }
            if($file == $filename) {
                $arFile = array(
                    "NAME" => $file,
                    "SIZE" => round(filesize($path . $file) / 1024, 1),
                    "TIME" => date("d.m.Y H:i:s", filemtime($path . $file)),
                    "TYPE" => filetype($path . $file),
                );
            }
        }
        return $arFile;
    }

    public function GetList($path, $arOrder = array(), $arFilter = array(), $arSelect = array()){
        $arAllFiles = scandir($path);
        foreach($arAllFiles as $file) {
            if ($file == "." || $file == ".." || is_dir($path.$file) || $file[0] == ".") {
                continue;
            }
            $arFiles[] = array(
                "NAME" => $file,
                "SIZE" => round(filesize($path . $file)/1024,1),
                "TIME" => date("d.m.Y H:i:s",filemtime($path. $file)),
                "TYPE" => filetype($path . $file),
                );
        }
        return $arFiles;
    }
}

?>
