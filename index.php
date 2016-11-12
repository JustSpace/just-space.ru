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
  <header class="header header__index">
    <div class="header__mask"></div>
    <div class="slider">
      <div class="progressbar">
        <span class="progressbar__tik"></span>
      </div>
      <img class="header__image slider__slide slider__slide--1 slider__slide--active" src="/img/index.jpg" alt="">
      <img class="header__image slider__slide slider__slide--2" src="/img/bell.jpg" alt="">
      <img class="header__image slider__slide slider__slide--3" src="/img/index2.jpg" alt="">
      <span class="slider__arrow slider__arrow--left">
        <svg aria-hidden="true" class="slider__arrow-icon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 129 129"><path d="m121.3 34.6c-1.6-1.6-4.2-1.6-5.8 0l-51 51.1-51.1-51.1c-1.6-1.6-4.2-1.6-5.8 0-1.6 1.6-1.6 4.2 0 5.8l53.9 53.9c0.8 0.8 1.8 1.2 2.9 1.2 1 0 2.1-0.4 2.9-1.2l53.9-53.9c1.7-1.6 1.7-4.2 0.1-5.8z"/></svg>
      </span>
      <span class="slider__arrow slider__arrow--right">
        <svg aria-hidden="true" class="slider__arrow-icon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 129 129"><path d="m121.3 34.6c-1.6-1.6-4.2-1.6-5.8 0l-51 51.1-51.1-51.1c-1.6-1.6-4.2-1.6-5.8 0-1.6 1.6-1.6 4.2 0 5.8l53.9 53.9c0.8 0.8 1.8 1.2 2.9 1.2 1 0 2.1-0.4 2.9-1.2l53.9-53.9c1.7-1.6 1.7-4.2 0.1-5.8z"/></svg>
      </span>
    </div>
    <nav class="navigation">
      <a href="javascript:void(0)" class="hamburger" alt="Гамбургер меню">
        <span class="hamburger__line"></span>
        <span class="hamburger__line"></span>
        <span class="hamburger__line"></span>
      </a>
      <a href="index.php" class="navigation__logo" alt="Digital-агентство Just Space">Just Space</a>
    </nav>
    <div class="arrow">
      <svg aria-hidden="true" class="arrow__icon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 129 129"><path d="m121.3 34.6c-1.6-1.6-4.2-1.6-5.8 0l-51 51.1-51.1-51.1c-1.6-1.6-4.2-1.6-5.8 0-1.6 1.6-1.6 4.2 0 5.8l53.9 53.9c0.8 0.8 1.8 1.2 2.9 1.2 1 0 2.1-0.4 2.9-1.2l53.9-53.9c1.7-1.6 1.7-4.2 0.1-5.8z"/></svg>
    </div>
  </header>
<?php
  require_once("templates/sidebar.php");
?>
  <main class="main">
    <article class="about">
      <h1>Digital-агентство Just Space</h1>
      <div class="about__text">
        Мы специализируемся на создание качественного продукта: создаем дизайн удоволетворяя все желания заказчика, разрабатываем быстрые и отзывчивые сайты, продвигаем в поисковых системах используя передовые методики SEO оптимизации, создаем уникальные мобильные приложения.
      </div>
      <div class="categories">
        <div class="categories__element categories__element--creative">
          <svg aria-hidden="true" class="categories__icon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><path d="M476.4 154.2c-1.4-3.9-5.1-6.5-9.3-6.5 0 0 0 0 0 0 -4.2 0-7.9 2.7-9.3 6.6 -0.1 0.4-13 37.2-30 73.4 -31 66.1-45.9 67.5-47.5 67.5 -2.3-0.1-7.4-4.8-12.1-22.1C339 165.6 280 8 279.4 6.4c-1.2-3.3-4.1-5.6-7.5-6.2 -3.4-0.6-6.9 0.6-9.2 3.3 -42.3 49.3-93.6 132-120.5 177v-42.6c0-4-2.4-7.6-6.1-9.1 -3.7-1.5-7.9-0.7-10.7 2.1C35.7 220.6-1.3 302 15.4 372.9c23 97.5 138.4 137 143.3 138.6 1 0.3 2.1 0.5 3.1 0.5 3.4 0 6.7-1.8 8.5-4.9 2.3-4 1.5-9.1-1.9-12.3 -0.5-0.4-45.9-41.8-56.1-83.6v0c-5.3-21.8-6.3-43.3-5.5-60.3 5.5 26.6 13.4 39 25.6 41.4 18 3.5 36.3-16.1 67.6-72.5 13-23.4 20-32.2 23.5-35.6 2.3 5.7 4.6 17.8 6.4 27 2.8 14.2 5.9 30.3 11.2 46.3 16.8 50.3 65.9 56.6 98.5 60.7 10 1.3 19.5 2.5 25.9 4.6 1.2 0.4 2.2 1.1 3 3 5.4 13.1-7.6 49.9-18.6 71.8 -1.8 3.6-1.2 7.8 1.4 10.9 2.6 3 6.8 4.1 10.6 2.9 53.4-17.8 92-50.5 114.7-97.1C529.4 305.8 478.6 160.4 476.4 154.2zM458.9 405.7c-17.1 35.1-44.4 61.4-81.4 78.5 8-20.3 16.3-48.7 9.2-65.8 -2.9-7-8.1-11.9-15-14.2 -8.2-2.7-18.6-4.1-29.7-5.5 -32.5-4.1-69.4-8.8-82.3-47.4 -4.9-14.7-7.9-30.2-10.6-43.8 -5-25.5-8.3-42.3-22-44.5 -0.9-0.1-1.7-0.2-2.6-0.2 -11.5 0-22.6 12.7-41.8 47.4 -34.5 62-45.5 62.8-46.6 62.7 -0.3-0.1-8-3.2-13.8-49.3 -1.5-11.8-4-20.2-11.3-23 -4.1-1.5-8.6-0.7-12 2.4C87 313.8 81.8 369 93.2 415.9c5 20.6 16.9 40.6 29 56.7 -5-2.9-10.2-6.1-15.5-9.7 -27.1-18.4-61.6-49.7-72.2-94.6 -14-59.4 15.6-128.6 87.9-206.1v54.4c0 4.5 3 8.4 7.3 9.5 4.3 1.1 8.9-0.8 11.1-4.6 0.7-1.3 69.7-121.7 126-192.2 15.7 42.8 58.8 162.4 82.4 249 2.4 8.9 9.8 35.9 30.4 36.6 12.3 0.4 32.5-7.3 66-78.9 8-17 15-33.9 20.2-47.3 3.8 14.7 8.1 34.4 11 56.7C482.9 289.5 484.5 353.1 458.9 405.7z"/></svg>
          <h2>Креативность</h2>
          <section class="list">
            <span class="list__element">Нестандартный подход</span>
            <span class="list__element">Большой кругозор</span>
            <span class="list__element">Интересные решения</span>
          </section>
        </div>
        <div class="categories__element categories__element--technology">
          <svg aria-hidden="true" class="categories__icon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><path d="M408 224.8V160h0.7c17 0 31.3-14.7 31.3-32s-14.3-32-31.3-32h-35.2c-4.6-9.8-14.9-16-28.1-16h-41.4V44.3C304 19.1 283.5 0 256.3 0h-0.2c-27.5 0-48.2 19.1-48.2 44.3V80h-40.9c-0.9 0-1.7 0-2.5 0 -0.8 0-1.6 0-2.4 0 -5.9 0-11.6 0.2-16.5 2.6 -3.8 1.9-8.2 5.7-9.3 13.4h-33c-17 0-31.3 14.7-31.3 32s14.3 32 31.3 32h0.7v64.8c-14.5 2.8-24 13-24 26.8v60.4c0 13.2 10.8 24 24 24h16c13.2 0 24-10.8 24-24v-60.4c0-13.8-9.5-24.1-24-26.8V160h16.7c2.9 14 14.1 26.3 27.8 29.6l4.5 1.2 13.5 45.5c-13 6.6-22 20.1-22 35.7 0 16.1 9.6 30.1 23.4 36.4v21c-9.3 3.3-16 12.2-16 22.6s6.7 19.3 16 22.6V392c0 0.1 0 0.1 0 0.2 -23.1 1.8-40 18.5-40 40.2V496c-4.4 0-8 3.6-8 8s3.6 8 8 8h96c4.4 0 8-3.6 8-8s-3.6-8-8-8v-63.6c0-22.2-16.6-38.6-40-40.3 0-0.1 0-0.1 0-0.2v-17.4c9.3-3.3 16-12.2 16-22.6s-6.7-19.3-16-22.6v-17.4c0.2 0 0.4 0 0.6 0h31.4c4.4 0 8-3.6 8-8h32c0 4.4 3.6 8 8 8h31.8c0.1 0 0.1 0 0.2 0v17.4c-9.3 3.3-16 12.2-16 22.6s6.7 19.3 16 22.6V392c0 0.1 0 0.1 0 0.2 -23.1 1.8-40 18.5-40 40.2V496c-4.4 0-8 3.6-8 8s3.6 8 8 8h96c4.4 0 8-3.6 8-8s-3.6-8-8-8v-63.6c0-22.2-16.6-38.6-40-40.3 0-0.1 0-0.1 0-0.2v-17.4c9.3-3.3 16-12.2 16-22.6s-6.7-19.3-16-22.6V308.6c14-6.2 23.8-20.3 23.8-36.6 0-15.7-9.1-29.3-22.3-35.9l13.4-45.2 4.7-1.2c13.7-3.3 24.7-15.6 27.6-29.6h16.7v64.7c-14.4 2.7-24 13-24 26.8v44c0 0.2 0 0.3 0 0.5s0 0.3 0 0.5v15.5c0 13.2 10.8 24 24 24h16c13.2 0 24-10.8 24-24v-60.4C432 237.8 422.5 227.5 408 224.8zM120 320H104c-4.4 0-8-3.6-8-8V304h32v8C128 316.4 124.4 320 120 320zM128 251.6V288h-32v-36.4c0-8.5 8.7-11.6 16.1-11.6C114.8 240 128 240.6 128 251.6zM160 496v-16h64v16H160zM224 432.4V464h-64v-31.6c0-11.8 8.9-24.4 28.3-24.4h7.6C215.2 408 224 420.7 224 432.4zM192 360c-4.4 0-8-3.6-8-8s3.6-8 8-8 8 3.6 8 8S196.4 360 192 360zM288 496v-16h64v16H288zM352 432.4V464h-64v-31.6c0-11.8 8.9-24.4 28.3-24.4h7.6C343.2 408 352 420.7 352 432.4zM320 360c-4.4 0-8-3.6-8-8s3.6-8 8-8 8 3.6 8 8S324.4 360 320 360zM424 128c0 8.7-7 16-15.3 16h-32.7v-32h32.7C417 112 424 119.3 424 128zM224 44.3c0-16.4 13.5-28.3 32.2-28.3h0.2c18.3 0 31.6 11.9 31.6 28.3V80h-64V44.3zM88 128c0-8.7 7-16 15.3-16h32.7v32h-32.7C95 144 88 136.7 88 128zM200.6 296c-13.2 0-24-10.8-24-24s10.8-24 24-24h23.4v48H200.6zM240 288v-32h32v32H240zM311.8 296h-23.8v-48h23.8c13.2 0 24 10.8 24 24S325 296 311.8 296zM314 232.1c-0.7 0-1.5-0.1-2.2-0.1h-31.8c-4.4 0-8 3.6-8 8h-32c0-4.4-3.6-8-8-8h-31.4c-0.9 0-1.7 0-2.6 0.1l-10.8-36.5 44.6 11.7c0.1 0 0.1 0 0.2 0 6.6 1.6 15.2 2.4 24.3 2.4 9.2 0 17.9-0.9 24.5-2.4 0.1 0 0.1 0 0.2 0l43.9-11.5L314 232.1zM360 152.9c0 9.4-7.4 19.1-16.2 21.2 -0.1 0-0.1 0-0.2 0l-66.7 17.6c-5.4 1.3-12.9 2-20.7 2 -7.8 0-15.2-0.7-20.6-2l-67.2-17.6c-0.1 0-0.1 0-0.2 0 -8.9-2.1-16.3-11.8-16.3-21.1v-53c0-2.2 0.4-2.9 0.5-2.9 0.5-0.5 2.6-1.1 9.7-1.1 0.8 0 1.6 0 2.4 0 0.9 0 1.7 0 2.6 0h178.3c4.4 0 14.6 1.2 14.6 12V152.9zM399.9 240c7.5 0 16.2 3 16.2 11.6V288h-32v-36.4C384 240.6 397.2 240 399.9 240zM408 320h-16c-4.4 0-8-3.6-8-8V304h32v8C416 316.4 412.4 320 408 320z"/><path d="M285 128.3c-4.3 1.1-6.9 5.5-5.8 9.7 0.5 1.9 0.8 4 0.8 6 0 13.3-10.8 24.1-24.1 24.1s-24.1-10.8-24.1-24.1 10.8-24.1 24.1-24.1c2.1 0 4.1 0.3 6.1 0.8 4.3 1.1 8.6-1.4 9.8-5.7 1.1-4.3-1.4-8.6-5.7-9.8 -3.3-0.9-6.7-1.3-10.2-1.3 -22.1 0-40.1 18-40.1 40.1 0 22.1 18 40.1 40.1 40.1 22.1 0 40.1-18 40.1-40.1 0-3.4-0.4-6.7-1.2-10C293.6 129.7 289.3 127.2 285 128.3z"/><path d="M272 40h-32c-4.4 0-8 3.6-8 8s3.6 8 8 8h32c4.4 0 8-3.6 8-8S276.4 40 272 40z"/></svg>
          <h2>Технологии</h2>
          <section class="list">
            <span class="list__element">Адаптивная верстка</span>
            <span class="list__element">Работа с основными CMS</span>
            <span class="list__element">iOS приложения</span>
          </section>
        </div>
        <div class="categories__element categories__element--design">
          <svg aria-hidden="true" class="categories__icon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 55 55"><circle cx="45" cy="26" r="1"/><circle cx="9" cy="26" r="1"/><circle cx="12" cy="29" r="1"/><circle cx="18" cy="29" r="1"/><circle cx="15" cy="32" r="1"/><circle cx="21" cy="32" r="1"/><circle cx="24" cy="35" r="1"/><circle cx="30" cy="35" r="1"/><circle cx="33" cy="32" r="1"/><circle cx="27" cy="38" r="1"/><circle cx="36" cy="29" r="1"/><circle cx="42" cy="29" r="1"/><circle cx="39" cy="32" r="1"/><path d="M45.6 32.8l9.4-5.4 -9.7-5.5 9.7-5.5L27.5 0.8 0 16.4l9.7 5.5L0 27.4l9.7 5.5L0 38.4l27.5 15.7 27.5-15.7 -9.7-5.5 0.1 0C45.4 32.9 45.5 32.8 45.6 32.8zM27.5 3.1l23.4 13.3 -7.6 4.4 0 0 -15.8 9L4 16.4 27.5 3.1zM11.1 23.4c0.2 0.3 0.5 0.6 0.9 0.6 0.3 0 0.5-0.1 0.7-0.3l2.3 1.3c-0.5 0-1 0.5-1 1 0 0.6 0.4 1 1 1s1-0.4 1-1c0-0.2-0.1-0.3-0.1-0.5l10.3 5.9c-0.1 0.2-0.2 0.4-0.2 0.6 0 0.6 0.4 1 1 1s1-0.4 1-1c0-0.1 0-0.1 0-0.1l10.1-5.7c0.1 0.5 0.5 0.9 1 0.9 0.6 0 1-0.4 1-1 0-0.3-0.2-0.6-0.4-0.8l2.2-1.3c0.1 0 0.1 0 0.2 0 0.4 0 0.8-0.3 0.9-0.7l0.3-0.2 7.6 4.3 -2 1.1c-0.2-0.3-0.5-0.6-0.9-0.6 -0.6 0-1 0.4-1 1 0 0.2 0.1 0.4 0.2 0.6l-3.9 2.3 0 0 -6.4 3.7c0.1-0.1 0.1-0.3 0.1-0.5 0-0.6-0.4-1-1-1s-1 0.4-1 1c0 0.5 0.4 1 1 1l-2.3 1.3c-0.2-0.2-0.4-0.3-0.7-0.3 -0.6 0-1 0.4-1 1 0 0.1 0 0.2 0 0.2l-4.6 2.6 -5.5-3.2c-0.1-0.4-0.5-0.7-0.9-0.7 -0.1 0-0.1 0-0.2 0l-2.2-1.3c0.2-0.2 0.4-0.5 0.4-0.8 0-0.6-0.4-1-1-1 -0.5 0-0.9 0.4-1 0.9L7 29.1c0 0 0-0.1 0-0.1 0-0.6-0.4-1-1-1 -0.2 0-0.4 0.1-0.6 0.2l-1.4-0.8L11.1 23.4zM50.9 38.4l-23.4 13.4L4 38.4l7.6-4.3 15.8 9 15.8-9L50.9 38.4z"/></svg>
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
          <a href="blog.php" class="main-blog__button" alt="Читать наш блог">
            Начать читать
            <svg aria-hidden="true" class="main-blog__icon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 31.5 31.5"><path d="M21.2 5c-0.4-0.4-1.1-0.4-1.6 0 -0.4 0.4-0.4 1.1 0 1.6l8 8H1.1C0.5 14.6 0 15.1 0 15.7c0 0.6 0.5 1.1 1.1 1.1h26.6l-8 8c-0.4 0.4-0.4 1.2 0 1.6 0.4 0.4 1.2 0.4 1.6 0l10-10c0.4-0.4 0.4-1.1 0-1.6L21.2 5z"/></svg>
          </a>
        </article>
      </div>
    </div>
    <article class="clients">
      <h2 class="clients__title">Наши клиенты</h2>
      <div class="client">
        <img class="client__img" src="/img/цис.png" alt="Центр инженерных систем">
      </div>
      <div class="client">
        <img class="client__img" src="/img/sportlifting.png" alt="SportLifting">
      </div>
      <div class="client">
        <img class="client__img" src="/img/ТЦН.png" alt="Тульский Центр Недвижимости">
      </div>
      <div class="client">
        <img class="client__img" src="/img/Gazel-Traffic.png" alt="Gazel-Traffic">
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
            <td>

            </td>
            <td>
              <div class="buttons">
                <button class="order__button order__button--file" type="button" id="file__front" >
                  <span>
                    <svg aria-hidden="true" class="order__button-icon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><path d="M97.3 482.2c-23.3 0-45.2-9.1-61.7-25.6 -34-34-34-89.4 0-123.4L305.3 63.5c21.7-21.7 50.6-33.7 81.4-33.7 30.8 0 59.7 12 81.4 33.7 21.7 21.7 33.7 50.6 33.7 81.4 0 30.8-12 59.7-33.7 81.4L255.8 438.6c-6.4 6.4-16.7 6.4-23.1 0 -6.4-6.4-6.4-16.7 0-23.1l212.3-212.3c15.6-15.6 24.2-36.3 24.2-58.3 0-22-8.6-42.7-24.2-58.3 -15.6-15.6-36.3-24.2-58.3-24.2 -22 0-42.7 8.6-58.3 24.2L58.7 356.3c-21.3 21.3-21.3 55.9 0 77.2 20.6 20.6 56.6 20.6 77.2 0l181.1-181.1c4.9-4.9 7.7-11.7 7.7-18.7 0-7-2.8-13.7-7.8-18.7 -10.3-10.3-27.1-10.3-37.4 0L156 338.8c-6.4 6.4-16.7 6.4-23.1 0 -6.4-6.4-6.4-16.7 0-23.1l123.7-123.7c23-23 60.5-23 83.5 0 11.2 11.2 17.3 26 17.3 41.8 0 15.5-6.3 30.8-17.3 41.8L159 456.6C142.6 473.1 120.7 482.2 97.3 482.2z"/></svg>
                  </span>
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
