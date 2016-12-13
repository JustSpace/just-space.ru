<?php
  require_once($_SERVER["DOCUMENT_ROOT"]."/templates/doc_head.php");
?>
<body>
  <header class="header header--1div3">
    <h1 class="header__title header__title--slice header__title--right">Реклама</h1>
    <nav class="navigation">
      <a href="javascript:void(0)" class="hamburger" alt="Гамбургер меню">
        <span class="hamburger__line"></span>
        <span class="hamburger__line"></span>
        <span class="hamburger__line"></span>
      </a>
      <a href="/index.php" class="navigation__logo" alt="Digital-агентство Just Space">Just Space</a>
      <a href="/services.php" class="navigation__section navigation__section--link">Услуги</a>
    </nav>
  </header>
<?php
  require_once($_SERVER["DOCUMENT_ROOT"]."/templates/sidebar.php");
?>
  <main class="main">
    <article class="folder-services-content">
      <section class="folder-services-content__block folder-services-content__block--1">
        <h2 class="folder-services-content__title">
          Контекстная реклама в Яндекс.Директ и Google AdWords
        </h2>
        <hr class="folder-services-content__line">
        <div class="folder-services-content__text">
          Создаем рекламные кампании, что включает в себя подбор ключевых слов, настройка таргетинга, копирайтинг и настройка объявлений. Производим дальнейшее сопровождение с повышением качества аккаунта, снижением цены клика и повышением конверсии. А также выводим ранее созданные кампании из пике.
        </div>
      </section>
      <section class="folder-services-content__block folder-services-content__block--2">
        <h2 class="folder-services-content__title">
          Продвижение и таргетинговая реклама в социальных сетях (SMM)
        </h2>
        <hr class="folder-services-content__line">
        <div class="folder-services-content__text">
          Работаем с группами и рекламными аккаунтами в Вконтакте, FaceBook, Instagram и Twitter.
          Оформляем группы в корпоративном стиле, занимаемся созданием контента.
          Настраиваем таргетинговую рекламу в социльных сетях.
        </div>
      </section>
      <section class="folder-services-content__block folder-services-content__block--3">
        <h2 class="folder-services-content__title">
          Lorem ipsum dolor sit amet.
        </h2>
        <hr class="folder-services-content__line">
        <div class="folder-services-content__text">
          Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cupiditate porro, cumque adipisci nostrum libero possimus. Quasi aut, facilis aliquid quo impedit commodi. Sint incidunt dolorem, odit commodi quasi, alias cum quam deserunt ratione error nam non optio explicabo illum cumque.
        </div>
      </section>
    </article>
  </main>
<?php
  require_once($_SERVER["DOCUMENT_ROOT"]."/templates/footer.php");
?>
