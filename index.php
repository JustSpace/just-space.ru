<?php
  require_once($_SERVER["DOCUMENT_ROOT"]."/templates/doc_head.php");
?>
<body>
  <div class="ajax-alert-popup">
    <div class="window">
      <div class="window__text window__text--done">
        Ваша заявка успешно отправлена, в ближайшее время с вами свяжутся
      </div>
      <div class="window__text window__text--error">
        Произошла ошибка, попробуйте отправить снова
      </div>
      <input class="window__button-close" type="button" value="Ок" autofocus>
    </div>
  </div>
  <header class="header header--index">
    <div class="header__mask"></div>
    <div class="slider">
      <picture>
        <source srcset="/img/index-XL.jpg" media="(min-width: 4000px)">
        <source srcset="/img/index-L.jpg" media="(min-width: 2000px)">
        <source srcset="/img/index-S.jpg" media="(max-width: 1000px)">
        <img class="header__image slider__slide slider__slide--1 slider__slide--active" src="/img/index-M.jpg" alt="Создание сайтов">
      </picture>
      <picture>
        <source srcset="/img/mobile-XL.jpg" media="(min-width: 4000px)">
        <source srcset="/img/mobile-L.jpg" media="(min-width: 2000px)">
        <source srcset="/img/mobile-S.jpg" media="(max-width: 1000px)">
        <img class="header__image slider__slide slider__slide--2" src="/img/mobile-M.jpg" alt="Разработка мобильных приложений">
      </picture>
      <picture>
        <source srcset="/img/seo-XL.jpg" media="(min-width: 4000px)">
        <source srcset="/img/seo-L.jpg" media="(min-width: 2000px)">
        <source srcset="/img/seo-S.jpg" media="(max-width: 1000px)">
        <img class="header__image slider__slide slider__slide--3" src="/img/seo-M.jpg" alt="SEO продвижение">
      </picture>
      <picture>
        <source srcset="/img/design-XL.jpg" media="(min-width: 4000px)">
        <source srcset="/img/design-L.jpg" media="(min-width: 2000px)">
        <source srcset="/img/design-S.jpg" media="(max-width: 1000px)">
        <img class="header__image slider__slide slider__slide--4 slider__slide--back" src="/img/design-M.jpg" alt="Создание дизайна">
      </picture>
      <svg class="slider__arrow slider__arrow--left" aria-hidden="true">
        <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="/img/sprites/sprites.svg#down-arrow"></use>
      </svg>
      <svg class="slider__arrow slider__arrow--right" aria-hidden="true">
        <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="/img/sprites/sprites.svg#down-arrow"></use>
      </svg>
    </div>
    <h2 class="header__title header__title--1 header__title--active">Создаем удобные сайты</h2>
    <h2 class="header__title header__title--2">Разрабатываем мобильные приложения</h2>
    <h2 class="header__title header__title--3">Занимаемся SEO продвижением</h2>
    <h2 class="header__title header__title--4 header__title--back">Разрабатываем уникальный дизайн</h2>
    <nav class="navigation">
      <a href="javascript:void(0)" class="hamburger" alt="Гамбургер меню">
        <span class="hamburger__line"></span>
        <span class="hamburger__line"></span>
        <span class="hamburger__line"></span>
      </a>
      <a href="/index.php" class="navigation__logo" alt="Digital-агентство Just Space">Just Space</a>
    </nav>
    <div class="arrow">
      <svg class="arrow__icon" aria-hidden="true">
        <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="/img/sprites/sprites.svg#down-arrow"></use>
      </svg>
    </div>
  </header>
<?php
  require_once($_SERVER["DOCUMENT_ROOT"]."/templates/sidebar.php");
?>
  <main class="main">
    <article class="about">
      <h1>Digital-агентство Just Space</h1>
      <div class="about__text">
        Мы помогаем вашем бизнесу используя современные технологии.
        Наше агентство предоставляет множество услуг: создание сайтов (лендинги, сайты-визитки, корпоративные порталы, интернет-магазины и др.); аудит, SEO оптимизация и продвижение сайтов; разработка и ведение контекстных рекламных кампаний; SMM продвижение в социальных сетях; разработка уникальных дизайнерских решений; создание мобильных приложений под IOS и Android.
      </div>
      <div class="categories">
        <div class="categories__element categories__element--creative">
          <svg class="categories__icon" aria-hidden="true">
            <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="/img/sprites/sprites-index.svg#fire"></use>
          </svg>
          <h2>Креативность</h2>
          <section class="list">
            <span class="list__element">Нестандартный подход</span>
            <span class="list__element">Большой кругозор</span>
            <span class="list__element">Интересные решения</span>
          </section>
        </div>
        <div class="categories__element categories__element--technology">
          <svg aria-hidden="true">
            <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="/img/sprites/sprites-index.svg#robot"></use>
          </svg>
          <h2>Технологии</h2>
          <section class="list">
            <span class="list__element">Адаптивная верстка</span>
            <span class="list__element">Работа с основными CMS</span>
            <span class="list__element">iOS приложения</span>
          </section>
        </div>
        <div class="categories__element categories__element--design">
          <svg aria-hidden="true">
            <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="/img/sprites/sprites-index.svg#layers"></use>
          </svg>
          <h2>Дизайн</h2>
          <section class="list">
            <span class="list__element">Интерфейсы</span>
            <span class="list__element">Веб-дизайн</span>
            <span class="list__element">Полиграфия</span>
          </section>
        </div>
      </div>
    </article>
    <div class="main-blog">
      <div class="main-blog__wrapper">
        <article class="main-blog__promo">
          <h2>Узнайте нас лучше (<span class="fill-color--first">Just Space</span> изнутри)</h2>
          <div class="main-blog__text">
            Вы также можете познакомиться с нашей работой более детально, это можно сделать на страницах нашего блога, в котором мы пишем обо всех аспектах нашей деятельности: разработке сайтов и мобильных приложений, создание дизайна, продвижение (SEO), рекламе и организации бизнеса в целом.
          </div>
          <div class="main-blog__text">
            Мы стараемся регулярно делиться своими успехами и неудачами, чтобы все заказчики, у которых появится желание обратиться к нам, смогли пронаблюдать нашу работу изнутри и составить свое мнение о нашей компании.
          </div>
          <a href="blog.php" class="button button--full button--rosen button--arrow" alt="Читать наш блог">
            Начать читать
            <svg class="main-blog__icon" aria-hidden="true">
              <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="/img/sprites/sprites.svg#next-arrow"></use>
            </svg>
          </a>
        </article>
      </div>
    </div>
    <article class="clients">
      <h2 class="clients__title">Наши клиенты</h2>
      <div class="client client--1">
      </div>
      <div class="client client--2">
      </div>
      <div class="client client--3">
      </div>
      <div class="client client--4">
      </div>
    </article>
    <article class="order">
      <form class="order__form" action="index.php" method="post">
        <table class="order__table">
          <tr>
            <td colspan="2">
              <h2 class="order__title">Заказать проект</h2>
            </td>
          </tr>
          <tr>
            <td class="order__cell">
              <label class="order__label" for="fio">Ваше имя</label>
            </td>
            <td>
              <input class="order__input" type="text" name="fio" id="fio" placeholder="Ваше имя" required>
            </td>
          </tr>
          <tr>
            <td class="order__cell">
              <label class="order__label" for="tel">Телефон</label>
            </td>
            <td>
              <input class="order__input" type="text" name="tel" id="tel" placeholder="Телефон" required>
            </td>
          </tr>
          <tr>
            <td class="order__cell">
              <label class="order__label" for="email">Email</label>
            </td>
            <td>
              <input class="order__input" type="email" name="email" id="email" placeholder="Email" required>
            </td>
          </tr>
          <tr>
            <td class="order__cell">
              <label class="order__label" for="description">Расскажите о вашем проекте</label>
            </td>
            <td>
              <textarea class="order__textarea" name="description" id="description" placeholder="Расскажите о вашем проекте" required></textarea>
            </td>
          </tr>
          <tr>
            <td class="order__cell">

            </td>
            <td class="center-930px">
              <div class="buttons">
                <button class="order__button order__button--file" type="button" id="file__front">
                  <svg class="order__button-icon" aria-hidden="true">
                    <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="/img/sprites/sprites.svg#metal-paper-clip"></use>
                  </svg>
                  <span>
                    Прикрепить файл
                  </span>
                </button>
                <input class="order__file" type="file" name="file__back" id="file__back">
                <input class="order__button order__submit" type="submit" name="order_sub" id="order_sub" value="Заказать">
              </div>
            </td>
          </tr>
        </table>
      </form>
    </article>
    <div class="map">
      <div id="map"></div>
      <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCFE_Bixd44cRvT7dS9qk8NN92t2Cgkd1I&signed_in=true&callback=initMap">
      </script>
    </div>
  </main>
<?php
  require_once($_SERVER["DOCUMENT_ROOT"]."/templates/footer.php");
?>
