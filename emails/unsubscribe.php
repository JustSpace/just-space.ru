<?php
  if(filter_var($_GET["email"], FILTER_VALIDATE_EMAIL)){
    $unsibscribe_email = htmlspecialchars($_GET["email"]);
  }
  else{
    $unsibscribe_email = "";
  }
?>
<!DOCTYPE html>
<html lang="ru">
<head>
  <meta charset="UTF-8">
	<meta name="description" content="Отписаться от рассылки"/>
  <title>Отписаться от рассылки</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="shortcut icon" href="/img/favicon.ico" type="image/x-icon">
  <link rel="stylesheet" href="/css/style-error.min.css">
</head>
<body>
  <?php
    require_once($_SERVER["DOCUMENT_ROOT"]."/templates/ajax_alert_popup.php");
  ?>
  <main class="wrapper">
    <div class="promo">
      <h1 class="promo__title">
        Введите email
      </h1>
      <form class="promo__form">
        <input type="email" class="promo__input" placeholder="your@mail.ru" id="email" value="<?php echo $unsibscribe_email;?>" required>
        <input type="submit" value="Отписаться" class="promo__submit" id="unsubscribe_sub">
      </form>
    </div>
  </main>
  <script src="/js/functions.min.js" defer></script>
  <script src="/js/ajax.min.js" defer></script>
</body>
</html>
