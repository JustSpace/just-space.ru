<?php
  require_once($_SERVER["DOCUMENT_ROOT"]."/includes/meta.php");
  $meta = new Meta();
?>
<!DOCTYPE html>
<html lang="ru">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <meta description="<?php echo $meta->GetDesc($_SERVER["PHP_SELF"]); ?>">
  <meta keywords="<?php echo $meta->GetKey($_SERVER['PHP_SELF']); ?>">
  <title><?php echo $meta->GetTitle($_SERVER['PHP_SELF']); ?></title>
  <link rel="shortcut icon" href="/img/favicon.ico" type="image/x-icon">
  <link rel="stylesheet" href="/css/styles.min.css">
</head>
