<?php
  require_once($_SERVER["DOCUMENT_ROOT"]."/templates/doc_head.php");
?>
<body>
  <div class="ajax-alert-popup">
    <div class="window">
      <div class="window__text window__text--done">
        Ваша заявка успешно отправлена, в ближайшее время с вами свяжутся
      </div>
      <div class="window__text window__text--error">
        Произошла ошибка, попробуйте отправить снова
      </div>
      <input class="window__button-close" type="button" value="Ок" autofocus>
    </div>
  </div>
  <header class="header header__index">
    <h1 class="folder-services-header__title">Дизайн</h1>
    <nav class="navigation">
      <a href="javascript:void(0)" class="hamburger" alt="Гамбургер меню">
        <span class="hamburger__line"></span>
        <span class="hamburger__line"></span>
        <span class="hamburger__line"></span>
      </a>
      <a href="/index.php" class="navigation__logo" alt="Digital-агентство Just Space">Just Space</a>
    </nav>
  </header>
<?php
  require_once($_SERVER["DOCUMENT_ROOT"]."/templates/sidebar.php");
?>
  <main class="main">

  </main>
<?php
  require_once($_SERVER["DOCUMENT_ROOT"]."/templates/footer.php");
?>
