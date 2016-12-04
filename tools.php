<?php
  require_once($_SERVER["DOCUMENT_ROOT"]."/templates/doc_head.php");
?>
<body>
  <header class="header header--2div3 header--tools">
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
          <svg class="article__icon" aria-hidden="true">
            <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="/img/sprites/sprites.svg#next-arrow"></use>
          </svg>
        </a>
      </div>
      <div class="tool">
        <h2 class="tool__title">Аудит поисковой оптимизации сайта</h2>
        <div class="tool__text">
          С помощью нашего инструмента вы можете быстро проверить текущие позиции сайта в поисковой выдачи, по любым интересующим вас запросам.
        </div>
        <a href="#" class="button button--underline button--arrow">
          Попробовать
          <svg class="article__icon" aria-hidden="true">
            <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="/img/sprites/sprites.svg#next-arrow"></use>
          </svg>
        </a>
      </div>
      <div class="tool">
        <h2 class="tool__title">Анализ текста по закону Ципфа</h2>
        <div class="tool__text">
          С помощью нашего инструмента вы можете быстро проверить текущие позиции сайта в поисковой выдачи, по любым интересующим вас запросам.
        </div>
        <a href="#" class="button button--underline button--arrow">
          Попробовать
          <svg class="article__icon" aria-hidden="true">
            <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="/img/sprites/sprites.svg#next-arrow"></use>
          </svg>
        </a>
      </div>
    </article>
  </main>
<?php
  require_once($_SERVER["DOCUMENT_ROOT"]."/templates/footer.php");
?>
