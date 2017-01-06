<?php
  require_once($_SERVER["DOCUMENT_ROOT"]."/includes/meta.php");
  $meta = new Meta($_SERVER["PHP_SELF"]);
?>
<!DOCTYPE html>
<html lang="ru">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <meta name="description" content="<?php echo $meta->GetDescription(); ?>">
  <meta name="keywords"  content="<?php echo $meta->GetKeywords(); ?>">
  <title><?php echo $meta->GetTitle(); ?></title>
  <link rel="shortcut icon" href="/img/favicon.ico" type="image/x-icon">
  <link rel="stylesheet" href="/css/styles.min.css">
</head>
