<?php
  require_once($_SERVER["DOCUMENT_ROOT"]."/templates/doc_head.php");
?>
<body>
  <header class="header header--1div3">
    <h1 class="header__title header__title--slice header__title--right">Дизайн</h1>
    <nav class="navigation">
      <a href="javascript:void(0)" class="hamburger">
        <span class="hamburger__line"></span>
        <span class="hamburger__line"></span>
        <span class="hamburger__line"></span>
      </a>
      <a href="/index.php" class="navigation__logo">Just Space</a>
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
          Создание дизайна для сайтов и мобильных приложений
        </h2>
        <hr class="folder-services-content__line">
        <div class="folder-services-content__text">
          Разрабатываем уникальные макеты сайтов (лендинги, сайты-визитки, корпоративные порталы, интернет-магазины), проектируем мобильные версии страниц. Более бюджетный вариант предусматривает использование типового решения (шаблона), который настраивается и дополняется индивидуально для каждого проекта. Также проектируем интерфейсы мобильных приложений.
        </div>
      </section>
      <section class="folder-services-content__block folder-services-content__block--2">
        <h2 class="folder-services-content__title">
          Графический дизайн
        </h2>
        <hr class="folder-services-content__line">
        <div class="folder-services-content__text">
          Создание корпоративного стиля, что включает в себя разработку логотипа, подбор фирменных цветов, а также соответствующее оформление в едином стиле визиток, буклетов, коммерческих предложений и прочего. Верстка и оформление рекламных объявлений, баннеров, постеров, стикеров и любой другой полиграфической продукции.
        </div>
      </section>
      <section class="folder-services-content__block folder-services-content__block--3">
        <h2 class="folder-services-content__title">
          Другие услуги
        </h2>
        <hr class="folder-services-content__line">
        <div class="folder-services-content__text">
          Обработка и подготовка фотографий и изображений, создание иных вещей необходимых для фирмы и корпоративного стиля.
        </div>
      </section>
    </article>
  </main>
<?php
  require_once($_SERVER["DOCUMENT_ROOT"]."/templates/footer.php");
?>
