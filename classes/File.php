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

    public function GetList($path, $strOrder = "", $arFilter = array(), $arSelect = array()){
      /* Set order */
      if(!empty($strOrder)){
        if($strOrder == "DEC"){
          $order = SCANDIR_SORT_DESCENDING;
        }
        else{
          $order = SCANDIR_SORT_NONE;
        }
      }
      else{
        $order = null;
      }

      /* Set filter */
      if(!empty($arFilter)){
          foreach($arFilter as $key => $value){
            $filter[$key] = $value;
          }
      }
      else{
        $filter["SHOW_DIR"] = "Y";
        $filter["SHOW_HIDDEN"] = "Y";
      }

      $arAllFiles = scandir($path, $order);

      foreach($arAllFiles as $file) {
          if ($file == "." || $file == "..") {
              continue;
          }
          if($filter["SHOW_DIR"] == "N" && is_dir($path.$file)){
            continue;
          }
          if($filter["SHOW_HIDDEN"] == "N" && $file[0] == "."){
            continue;
          }

          $file .= (is_dir($path.$file)) ? DIR_ROOT : "";

          $arFiles[] = array(
              "NAME" => $file,
              "SIZE" => round(filesize($path . $file)/1024,1),
              "TIME" => date("d.m.Y H:i:s",filemtime($path. $file)),
              "TYPE" => filetype($path . $file),
              );
      }
      return $arFiles;
    }

    public function GetListJson($path, $strOrder = "", $arFilter = array(), $arSelect = array()){
      $arFile = $this->GetList($path, $arOrder, $arFilter, $arSelect);

      $resultString = '{"records":[';
      $arJson = [];

      foreach($arFile as $id => $file){
        $arJson[] = '{"id":' . ($id+1) . ',"name":"' . $file["NAME"] . '","size":"' . $file["SIZE"] . '","time":"' . $file["TIME"] . '"}';
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
