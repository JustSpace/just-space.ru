<?php
  require_once($_SERVER["DOCUMENT_ROOT"]."/includes/const.php");

  date_default_timezone_set('Europe/Moscow');

  session_start();

  /**
   * Автолоад для классов
   */
  spl_autoload_register(function ($class) {
      require_once($_SERVER['DOCUMENT_ROOT'].'/classes/' . $class . '.php');
  });

  /**
   * @param $url
   * Редирект на страницу
   */
  function redirect_to($url){
      header('Location: '.$url);
  }

  /**
   * @param $user_name
   * @return bool
   * Проверка прав админа
   */
  function access_to_admin_panel($user_name){
      $CUser = new User();
      $arUser = $CUser->GetUser($user_name)->Fetch();
      if($arUser["rights"] == "7"){
          return true;
      }
      else {
          return false;
      }
  }

  /**
   * @param $file_name
   * @param $record
   * Общая функция для записи в логи
   */
  function write_to_log($file_name, $record){
      $file = fopen($_SERVER['DOCUMENT_ROOT'].$file_name, "a+");
      fputs($file, "[".date("d.m.Y H:i:s")."] ".$record);
      fclose($file);
  }

  /**
   * @param $password
   * @return bool|string
   * Обертка над password_hash
   */
  function password_hashing($password){
      return password_hash($password, PASSWORD_DEFAULT);
  }

  /*
  function (){
      //find
      //create
      //delete
  }
  */
?>
