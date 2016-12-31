<?php
  require_once($_SERVER["DOCUMENT_ROOT"]."/templates/doc_head.php");
?>
<body>
  <header class="header header--1div3">
    <h1 class="header__title header__title--slice header__title--right">Продвижение</h1>
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
          SEO-оптимизация
        </h2>
        <hr class="folder-services-content__line">
        <div class="folder-services-content__text">
          Проводим первоначальный аудит сайта и выявляем слабые места которые необходимо доработать. Составляем семантическое ядро (подбираем релевантные ключевые фразы для каждой страницы). Проводим внутреннюю оптимизацию сайта - создание заголовков в соответствие с подобранными ключевыми словами, настройка meta-тегов, оптимизация скорости загрузки, оптимизация изображений и рерайтинг. Проводим внешнюю оптимизацию - закупаем ссылки, создаем рекламные статьи в блогах, добавляем сайт в основные интернет-каталоги.
        </div>
      </section>
      <section class="folder-services-content__block folder-services-content__block--2">
        <h2 class="folder-services-content__title">
          Копирайт и рерайт текстов
        </h2>
        <hr class="folder-services-content__line">
        <div class="folder-services-content__text">
          Занимаемся глубоким рерайтингом уже написанных текстов, с учетом сео-оптимизации и подобранных ключевых слов. Пишем на 100% уникальные тексты и статьи для размещения на ваших сайтах или сайтах и блогах ваших партнеров.
        </div>
      </section>
      <section class="folder-services-content__block folder-services-content__block--3">
        <h2 class="folder-services-content__title">
          Увеличение ссылочной массы
        </h2>
        <hr class="folder-services-content__line">
        <div class="folder-services-content__text">
          Настраиваем и ведем сервис Rookee для наращивание ссылочной массы. По своим каналам производим подбор площадок для размещения постоянных ссылок и рекламных статей.
        </div>
      </section>
    </article>
  </main>
<?php
  require_once($_SERVER["DOCUMENT_ROOT"]."/templates/footer.php");
?>
