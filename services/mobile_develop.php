<?php
  require_once($_SERVER["DOCUMENT_ROOT"]."/templates/doc_head.php");
?>
<body>
  <header class="header header--1div3">
    <h1 class="header__title header__title--slice header__title--right">Мобильная разработка</h1>
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
          Создание iOS и Android приложений
        </h2>
        <hr class="folder-services-content__line">
        <div class="folder-services-content__text">
          Разрабатываем многофункциональные мобильные приложения, проектируем клиент-серверные решения, организуем интеграцию с сайтом и другими сторонними ресурсами. При разработке используем современные паттерны проектирования (MVC, MVVN, VIPER).
        </div>
      </section>
      <section class="folder-services-content__block folder-services-content__block--2">
        <h2 class="folder-services-content__title">
          Доработка существующих приложений
        </h2>
        <hr class="folder-services-content__line">
        <div class="folder-services-content__text">
          При необходимости вносим изменения в существующие приложения: дорабатываем функционал, улучшаем отзывчивость, занимаемся рефакторингом и оптимизацией программного кода, перерабатываем дизайн интерфейсов в соответствие с HIG, внедряем новые технологии и архитектурные решения.
        </div>
      </section>
      <section class="folder-services-content__block folder-services-content__block--3">
        <h2 class="folder-services-content__title">
          Техническая поддержка и продвижение
        </h2>
        <hr class="folder-services-content__line">
        <div class="folder-services-content__text">
          Оказываем техническую поддержку приложений - внедряем новые функции и модули. Поддерживаем и продвигаем мобильные приложения в App Store и Google Play.
        </div>
      </section>
    </article>
  </main>
<?php
  require_once($_SERVER["DOCUMENT_ROOT"]."/templates/footer.php");
?>
