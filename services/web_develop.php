<?php
  require_once($_SERVER["DOCUMENT_ROOT"]."/templates/doc_head.php");
?>
<body>
  <header class="header header--1div3">
    <h1 class="header__title header__title--slice header__title--right">Разработка сайтов</h1>
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
          Создание сайтов любой сложности
        </h2>
        <hr class="folder-services-content__line">
        <div class="folder-services-content__text">
          Используем современные технологии и подходы при создании сайтов, наличие настроенных менеджеров задач и системы контроля версий - позволяет быстрей проводить модернизацию сайта.
          Разрабатываем отзывчивые, адаптивные и доступные сайты. Работаем со множеством CMS: 1C Bitrix, WordPress, Joomla, Drupal, ModX, PrestaShop и другие. В зависимости от сложности проекта (лендинг, сайт-визитка, корпоративный портал, интернет-магазин) подбираем оптимальную CMS систему, а также при необходимости создаем собственные решения.
        </div>
      </section>
      <section class="folder-services-content__block folder-services-content__block--2">
        <h2 class="folder-services-content__title">
          Написание кастомных модулей под CMS
        </h2>
        <hr class="folder-services-content__line">
        <div class="folder-services-content__text">
          При возникновении потребности в расширение функционала встроенных возможностей CMS или подключенных модулей - пишем собственные модули, которые решают возникшие проблемы.
        </div>
      </section>
      <section class="folder-services-content__block folder-services-content__block--3">
        <h2 class="folder-services-content__title">
          Техническая поддержка и модернизация сайта
        </h2>
        <hr class="folder-services-content__line">
        <div class="folder-services-content__text">
          Оказываем техническую поддержку, консультацию и внедрение новых технологий и модулей для модернизации сайта - на постоянной основе по выгодной часовой ставке.
        </div>
      </section>
    </article>
  </main>
<?php
  require_once($_SERVER["DOCUMENT_ROOT"]."/templates/footer.php");
?>
