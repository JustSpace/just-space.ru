<?php
  header("HTTP/1.1 401 Unauthorized");
?>
<!DOCTYPE html>
<html lang="ru">
<head>
  <meta charset="UTF-8">
	<meta name="description" content="Ошибка 401 Авторизация не пройдена"/>
  <title>Ошибка 401 Авторизация не пройдена</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="shortcut icon" href="/img/favicon.ico" type="image/x-icon">
  <link rel="stylesheet" href="/css/style-error.min.css">
</head>
<body>
  <main class="wrapper">
    <div class="content">
      <h1 class="content__title">
        Ошибка 401
        <br>
        Авторизация не пройдена
      </h1>
      <a href="/" class="content__link">Вернуться на сайт</a>
    </div>
  </main>
</body>
</html>
