<?php
  require_once($_SERVER["DOCUMENT_ROOT"]."/templates/doc_head.php");
?>
<body>
  <header class="header header--2div3 header--about">
    <div class="header__mask"></div>
    <h1 class="header__title header__title--slice">Just space</h1>
    <nav class="navigation">
      <a href="javascript:void(0)" class="hamburger">
        <span class="hamburger__line"></span>
        <span class="hamburger__line"></span>
        <span class="hamburger__line"></span>
      </a>
      <a href="/index.php" class="navigation__logo">Just Space</a>
      <span class="navigation__section">О нас</span>
    </nav>
  </header>
  <?php
    require_once($_SERVER["DOCUMENT_ROOT"]."/templates/sidebar.php");
  ?>
  <main class="main">
    <article class="about">
      <div class="about__text">
        Наше агентство специализируется на разработке уникальных решений в интернете, мы обеспечиваем полный цикл разработки от продумывания интерфейса и создания эскизов до подбора ключевых слов и SEO оптимизации, все это позволяет воплотить любые ваши идеи. Таким образом Just Space охватывает широкий спектр услуг: создание дизайна, разработка сайтов и мобильных приложений, а также продвижение в поисковых системах, гарантируя при этом высокое качество итогового продукта. На этой странице вы можете ознакомиться отдельно со всеми нашими услугами.
      </div>
    </article>
    <div class="page-image page-image--about">
      <article class="page-image__promo">
        <div class="page-image__text page-image__text--about">
          <a href="http://www.cmsmagazine.ru/creators/tula/" class="page-image__title page-image__title--top page-image__title--mask-1 no-underline" target="_blank">
            <svg class="page-image__icon page-image__icon--top page-image__icon--mask-1" aria-hidden="true">
              <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="/img/sprites/sprites-services.svg#mobile"></use>
            </svg>
            Топ-3 по мобильной разработке
          </a>
          <a href="http://www.cmsmagazine.ru/seo/tula/" class="page-image__title page-image__title--top page-image__title--mask-2 no-underline" target="_blank">
            <svg class="page-image__icon page-image__icon--top page-image__icon--mask-2" aria-hidden="true">
              <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="/img/sprites/sprites-services.svg#web"></use>
            </svg>
            Топ-30 среди веб-студий
          </a>
          <a href="http://www.cmsmagazine.ru/mobile/?sk=_apps&so=desc&mp=&c=&cc=56&cpp=40" class="page-image__title page-image__title--top page-image__title--mask-3 no-underline" target="_blank">
            <svg class="page-image__icon page-image__icon--top page-image__icon--mask-3" aria-hidden="true">
              <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="/img/sprites/sprites-services.svg#seo"></use>
            </svg>
            Топ-15 по SEO продвижению
          </a>
        </div>
      </article>
      <article class="page-image__promo">
        <img src="/img/cmsmagazine.png" alt="cmsmagazine аналитический портал веб-разработок">
      </article>
    </div>
    <div class="carusel">
      <div class="slider slider--line">
        <a href="/img/cert/cert_bitrix-compoz.jpg" target="_black" class="slider__slide slider__slide--line slider__slide--1 slider__slide--first">
          <img src="/img/cert/cert_bitrix-compoz.jpg" class="slide__image" alt="">
        </a><!--
        --><a href="/img/cert/cert_bitrix-content.jpg" target="_black" class="slider__slide slider__slide--line slider__slide--2">
          <img src="/img/cert/cert_bitrix-content.jpg" class="slide__image" alt="">
        </a><!--
        --><a href="/img/cert/cert_bitrix-dev.jpg" target="_black" class="slider__slide slider__slide--line slider__slide--3">
          <img src="/img/cert/cert_bitrix-dev.jpg" class="slide__image" alt="">
        </a><!--
        --><a href="/img/cert/cert_bitrix-compoz.jpg" target="_black" class="slider__slide slider__slide--line slider__slide--4 slider__slide--last">
          <img src="/img/cert/cert_bitrix-compoz.jpg" class="slide__image" alt="">
        </a><!--
        --><a href="/img/cert/cert_bitrix-compoz.jpg" target="_black" class="slider__slide slider__slide--line slider__slide--5">
          <img src="/img/cert/cert_bitrix-compoz.jpg" class="slide__image" alt="">
        </a><!--
        --><a href="/img/cert/cert_bitrix-compoz.jpg" target="_black" class="slider__slide slider__slide--line slider__slide--6">
          <img src="/img/cert/cert_bitrix-compoz.jpg" class="slide__image" alt="">
        </a>
      </div>
      <svg class="slider__arrow slider__arrow--left slider__arrow--left-about" aria-hidden="true">
        <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="/img/sprites/sprites.svg#down-arrow"></use>
      </svg>
      <svg class="slider__arrow slider__arrow--right slider__arrow--right-about" aria-hidden="true">
        <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="/img/sprites/sprites.svg#down-arrow"></use>
      </svg>
    </div>
  </main>
<?php
  require_once($_SERVER["DOCUMENT_ROOT"]."/templates/footer.php");
?>
