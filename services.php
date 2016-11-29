<?php
  require_once($_SERVER["DOCUMENT_ROOT"]."/templates/doc_head.php");
?>
<body>
  <header class="header header--services">
    <div class="header__mask"></div>
    <h1 class="header__title header__title--slice">Наши услуги</h1>
    <nav class="navigation">
      <a href="javascript:void(0)" class="hamburger">
        <span class="hamburger__line"></span>
        <span class="hamburger__line"></span>
        <span class="hamburger__line"></span>
      </a>
      <a href="/index.php" class="navigation__logo">Just Space</a>
      <span class="navigation__section">Услуги</span>
    </nav>
  </header>
  <?php
    require_once($_SERVER["DOCUMENT_ROOT"]."/templates/sidebar.php");
  ?>
  <main class="main">
    <article class="services">
      <div class="services__text">
        Наше агентство специализируется на разработке уникальных решений в интернете, мы обеспечиваем полный цикл разработки, от продумывания интерфейса и создание эскизов до подбора ключевых слов и SEO оптимизации, все это позволяет воплотить любые выши идеи. Таким образом Just Space охватывает широкий спектр услуг: создание дизайна, разработка сайтов и мобильных приложений, а также продвижение в поисковых системах, гарантируя при этом высокое качество итогового продукта. На этой странице вы можете ознакомиться отдельно со всеми нашими услугами.
      </div>
      <section class="service">
        <svg class="service__svg" aria-hidden="true">
          <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="/img/sprites/sprites-services.svg#mobile"></use>
        </svg>
        <h3 class="service__title">Мобильная разработка</h3>
        Разрабатываем нативные приложения под iOS и Android. Производим интеграцию с вашим сайтом.
        <a href="/services/mobile_develop.php" class="service__button">Подробнее</a>
      </section>
      <section class="service">
        <svg class="service__svg" aria-hidden="true">
          <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="/img/sprites/sprites-services.svg#web"></use>
        </svg>
        <h3 class="service__title">Разработка сайтов</h3>
        Создаем отзывчивые, адаптивные и доступные сайты используя современные технологии и CMS.
        <a href="/services/web_develop.php" class="service__button">Подробнее</a>
      </section>
      <section class="service">
        <svg class="service__svg" aria-hidden="true">
          <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="/img/sprites/sprites-services.svg#seo"></use>
        </svg>
        <h3 class="service__title">Продвижение</h3>
        Занимаемся SEO оптимизацией, подбором ключевиков, рерайтингом, закупкой ссылок и многим другим.
        <a href="/services/seo.php" class="service__button">Подробнее</a>
      </section>
    </article>
    <article class="services">
      <section class="service">
        <svg class="service__svg" aria-hidden="true">
          <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="/img/sprites/sprites-services.svg#design"></use>
        </svg>
        <h3 class="service__title">Дизайн</h3>
        Придумываем уникальный дизайн или качественно подстраиваем под вас готовые шаблонные решения.
        <a href="/services/design.php" class="service__button">Подробнее</a>
      </section>
      <section class="service">
        <svg class="service__svg" aria-hidden="true">
          <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="/img/sprites/sprites-services.svg#advering"></use>
        </svg>
        <h3 class="service__title">Реклама</h3>
        Ведем рекламные кампании в Яндекс.Директ и Google AdWords, занимаемся Social media marketing продвижением.
        <a href="/services/advertising.php" class="service__button">Подробнее</a>
      </section>
    </article>
  </main>
<?php
  require_once($_SERVER["DOCUMENT_ROOT"]."/templates/footer.php");
?>
