<?php
  if(filter_var($_GET["email"], FILTER_VALIDATE_EMAIL)){
    $email = htmlspecialchars($_GET["email"]);
  }
  else{
    $email = "";
  }
?>
<!DOCTYPE html>
<html lang="ru">
<head>
  <meta charset="UTF-8">
	<meta name="description" content="Заказать бесплатный аудит"/>
  <title>Заказать бесплатный аудит</title>
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
        Введите сайт
      </h1>
      <form class="promo__form">
        <input type="hidden" class="promo__email" id="email" value="<?php echo $email;?>">
        <input type="text" class="promo__email" placeholder="www.site.ru" id="site" required>
        <input type="submit" value="Заказать беплатный аудит" class="promo__submit" id="free-audit_sub">
      </form>
    </div>
  </main>
  <script src="/js/functions.min.js" defer></script>
  <script src="/js/ajax.min.js" defer></script>
</body>
</html>
