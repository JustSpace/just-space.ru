<?php
  require_once($_SERVER["DOCUMENT_ROOT"]."/templates/doc_head.php");
?>
<body>
  <header class="header header--2div3 header--blog">
    <div class="header__mask"></div>
    <h1 class="header__title header__title--slice">Наш блог</h1>
    <nav class="navigation">
      <a href="javascript:void(0)" class="hamburger">
        <span class="hamburger__line"></span>
        <span class="hamburger__line"></span>
        <span class="hamburger__line"></span>
      </a>
      <a href="/index.php" class="navigation__logo">Just Space</a>
      <span class="navigation__section">Блог</span>
    </nav>
  </header>
  <?php
    require_once($_SERVER["DOCUMENT_ROOT"]."/templates/sidebar.php");
  ?>
  <main class="main">
    <article class="article">
      <h2 class="article__title">
        <a href="/blog/vnutrennyaya-optimizaciya.php" class="no-underline">Советы по SEO продвижению сайта</a>
      </h2>
      <div class="article__cut">
        Давно ловил себя на мысли, что было бы здорово иметь определенный чек-лист в который можно заглянуть и понять что еще нужно сделать. Поэтому решил собственноручно перечислить основные моменты в одном месте, собственно этим чек-листом и является эта статья.
      </div>
      <a href="/blog/vnutrennyaya-optimizaciya.php" class="button button--underline button--arrow">
        Читать далее
        <svg class="article__icon" aria-hidden="true">
          <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="/img/sprites/sprites.svg#next-arrow"></use>
        </svg>
      </a>
    </article>
    <article class="article">
      <h2 class="article__title">
        <a href="/blog/spritekit.php" class="no-underline">Обзор решений в разработке игры на движке Sprite Kit</a>
      </h2>
      <div class="article__cut">
        С появлением iOS 7 мир узрел новый игровой движок от Apple — SpriteKit. В свете того, что появился он недавно об этом движке мало что написано и по этому мы решили написать небольшой обзор наших решений.
        <br>
        Мы не будем описывать процесс создания и настройки игровой сцены или объектов, а постараемся остановиться на более интересных моментах.
      </div>
      <a href="/blog/spritekit.php" class="button button--underline button--arrow">
        Читать далее
        <svg class="article__icon" aria-hidden="true">
          <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="/img/sprites/sprites.svg#next-arrow"></use>
        </svg>
      </a>
    </article>
    <article class="article">
      <h2 class="article__title">
        <a href="/blog/jqueryin2017.php" class="no-underline">Стоит ли в 2017 году использовать jQuery?</a>
      </h2>
      <div class="article__cut">
        Более двух лет назад я уже обращал внимание на эту проблему в <a href="https://habrahabr.ru/post/247029/">переводе статьи "Is jQuery Too Big For Mobile?"</a> за авторством VanToll'а.
        <br>
        Прошло два года, мобильный интернет стал гораздо доступней, даже в провинциальных российских городах почти везде можно включить 3G и не ждать загрузки сайта по 2-3 минуты (при условии конечно, что это не костыльное single page application с подключаемым скриптом на несколько мегабайт, но это уже тема для другой статьи). Значит ли все это, что можно использовать jQuery для любых проектов без оглядки?
      </div>
      <a href="/blog/jqueryin2017.php" class="button button--underline button--arrow">
        Читать далее
        <svg class="article__icon" aria-hidden="true">
          <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="/img/sprites/sprites.svg#next-arrow"></use>
        </svg>
      </a>
    </article>
  </main>
<?php
  require_once($_SERVER["DOCUMENT_ROOT"]."/templates/footer.php");
?>
