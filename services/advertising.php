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
          Продвижение и таргетинговая реклама в социальных сетях
        </h2>
        <hr class="folder-services-content__line">
        <div class="folder-services-content__text">
          Работаем с группами и рекламными аккаунтами в FaceBook, Вконтакте, Instagram и Twitter - оптимизируем и продвигаем (SMO и SMM).
          Оформляем сообщества в корпоративном стиле, занимаемся созданием контента.
          Настраиваем таргетинговую рекламу в социальных сетях.
        </div>
      </section>
      <section class="folder-services-content__block folder-services-content__block--3">
        <h2 class="folder-services-content__title">
          Другие услуги
        </h2>
        <hr class="folder-services-content__line">
        <div class="folder-services-content__text">
          Занимаемся множеством иных видов рекламы. Поддерживаем спонсорские соглашения.
        </div>
      </section>
    </article>
  </main>
<?php
  require_once($_SERVER["DOCUMENT_ROOT"]."/templates/footer.php");
?>
