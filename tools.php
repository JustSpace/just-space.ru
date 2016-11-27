<?php
  require_once($_SERVER["DOCUMENT_ROOT"]."/templates/doc_head.php");
?>
<body>
  <header class="header header--tools">
    <div class="header__mask"></div>
    <h1 class="header__title header__title--slice">Наши инструменты</h1>
    <nav class="navigation">
      <a href="javascript:void(0)" class="hamburger">
        <span class="hamburger__line"></span>
        <span class="hamburger__line"></span>
        <span class="hamburger__line"></span>
      </a>
      <a href="/index.php" class="navigation__logo">Just Space</a>
      <span class="navigation__section">Инструменты</span>
    </nav>
  </header>
  <?php
    require_once($_SERVER["DOCUMENT_ROOT"]."/templates/sidebar.php");
  ?>
  <main class="main">
    <article class="tools">
      <div class="tool">
        <h2 class="tool__title">Проверка позиций в поисковой выдаче</h2>
        <div class="tool__text">
          С помощью нашего инструмента вы можете быстро проверить текущие позиции сайта в поисковой выдачи, по любым интересующим вас запросам.
        </div>
        <a href="#" class="button button--underline button--arrow">
          Попробовать
          <svg aria-hidden="true" class="article__icon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 31.5 31.5"><path d="M21.2 5c-0.4-0.4-1.1-0.4-1.6 0 -0.4 0.4-0.4 1.1 0 1.6l8 8H1.1C0.5 14.6 0 15.1 0 15.7c0 0.6 0.5 1.1 1.1 1.1h26.6l-8 8c-0.4 0.4-0.4 1.2 0 1.6 0.4 0.4 1.2 0.4 1.6 0l10-10c0.4-0.4 0.4-1.1 0-1.6L21.2 5z"/>
        </a>
      </div>
      <div class="tool">
        <h2 class="tool__title">Аудит поисковой оптимизации сайта</h2>
        <div class="tool__text">
          С помощью нашего инструмента вы можете быстро проверить текущие позиции сайта в поисковой выдачи, по любым интересующим вас запросам.
        </div>
        <a href="#" class="button button--underline button--arrow">
          Попробовать
          <svg aria-hidden="true" class="article__icon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 31.5 31.5"><path d="M21.2 5c-0.4-0.4-1.1-0.4-1.6 0 -0.4 0.4-0.4 1.1 0 1.6l8 8H1.1C0.5 14.6 0 15.1 0 15.7c0 0.6 0.5 1.1 1.1 1.1h26.6l-8 8c-0.4 0.4-0.4 1.2 0 1.6 0.4 0.4 1.2 0.4 1.6 0l10-10c0.4-0.4 0.4-1.1 0-1.6L21.2 5z"/>
        </a>
      </div>
      <div class="tool">
        <h2 class="tool__title">Анализ текста по закону Ципфа</h2>
        <div class="tool__text">
          С помощью нашего инструмента вы можете быстро проверить текущие позиции сайта в поисковой выдачи, по любым интересующим вас запросам.
        </div>
        <a href="#" class="button button--underline button--arrow">
          Попробовать
          <svg aria-hidden="true" class="article__icon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 31.5 31.5"><path d="M21.2 5c-0.4-0.4-1.1-0.4-1.6 0 -0.4 0.4-0.4 1.1 0 1.6l8 8H1.1C0.5 14.6 0 15.1 0 15.7c0 0.6 0.5 1.1 1.1 1.1h26.6l-8 8c-0.4 0.4-0.4 1.2 0 1.6 0.4 0.4 1.2 0.4 1.6 0l10-10c0.4-0.4 0.4-1.1 0-1.6L21.2 5z"/>
        </a>
      </div>
    </article>
  </main>
<?php
  require_once($_SERVER["DOCUMENT_ROOT"]."/templates/footer.php");
?>
