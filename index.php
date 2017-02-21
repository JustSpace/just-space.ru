<?php
  require_once($_SERVER["DOCUMENT_ROOT"]."/templates/doc_head.php");
?>
<body>
  <header class="header header--index">
    <div class="header__mask"></div>
    <div class="slider slider--header">
      <picture>
        <source srcset="/img/index-XL.jpg" media="(min-width: 4000px)">
        <source srcset="/img/index-L.jpg" media="(min-width: 2000px)">
        <source srcset="/img/index-S.jpg" media="(max-width: 1000px)">
        <img class="header__image slider__slide slider__slide--1 slider__slide--active" src="/img/index-M.jpg" alt="Разработка сайта">
      </picture>
      <picture>
        <source srcset="/img/mobile-XL.jpg" media="(min-width: 4000px)">
        <source srcset="/img/mobile-L.jpg" media="(min-width: 2000px)">
        <source srcset="/img/mobile-S.jpg" media="(max-width: 1000px)">
        <img class="header__image slider__slide slider__slide--2" src="/img/mobile-M.jpg" alt="Мобильные технологии">
      </picture>
      <picture>
        <source srcset="/img/seo-XL.jpg" media="(min-width: 4000px)">
        <source srcset="/img/seo-L.jpg" media="(min-width: 2000px)">
        <source srcset="/img/seo-S.jpg" media="(max-width: 1000px)">
        <img class="header__image slider__slide slider__slide--3" src="/img/seo-M.jpg" alt="Профессиональное продвижение">
      </picture>
      <picture>
        <source srcset="/img/design-XL.jpg" media="(min-width: 4000px)">
        <source srcset="/img/design-L.jpg" media="(min-width: 2000px)">
        <source srcset="/img/design-S.jpg" media="(max-width: 1000px)">
        <img class="header__image slider__slide slider__slide--4 slider__slide--back" src="/img/design-M.jpg" alt="Интересный дизайн">
      </picture>
      <div class="arrow__wrapper arrow__wrapper--left arrow__wrapper--left-index">
        <svg class="slider__arrow slider__arrow--left slider__arrow--left-index" aria-hidden="true">
          <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="/img/sprites/sprites.svg#down-arrow"></use>
        </svg>
      </div>
      <div class="arrow__wrapper arrow__wrapper--right arrow__wrapper--right-index">
        <svg class="slider__arrow slider__arrow--right slider__arrow--right-index" aria-hidden="true">
          <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="/img/sprites/sprites.svg#down-arrow"></use>
        </svg>
      </div>
    </div>
    <div class="header__title header__title--const">
      Мы можем
    </div>
    <h2 class="header__title header__title--1 header__title--active">
      Создать сайт
    </h2>
    <h2 class="header__title header__title--2">
      Разработать мобильное приложение
    </h2>
    <h2 class="header__title header__title--3">
      Провести SEO продвижение
    </h2>
    <h2 class="header__title header__title--4 header__title--back">
      Разработать дизайн
    </h2>
    <nav class="navigation">
      <a href="javascript:void(0)" class="hamburger">
        <span class="hamburger__line"></span>
        <span class="hamburger__line"></span>
        <span class="hamburger__line"></span>
      </a>
      <a href="/index.php" class="navigation__logo">Just Space</a>
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
      <h1>Создание и продвижение сайтов в Туле</h1>
      <div class="about__text">
          Наше агентство специализируется на создание сайтов, дальнейшей технической поддержкой и SEO продвижением уже разработанных сайтов. Создаем сайты под ключ используя большинство современных CMS - 1С-Битрикс, ModX, WordPress. Являемся сертифицированными разработчиками продуктов на основе 1С-Битрикс. Настраиваем контекстную рекламу в Яндекс.Директ и Google AdWords. Обладаем сертификатами Яндекса подтверждающими нашу компетенцию в работе с Директом и Метрикой. Также разрабатываем связанные с сайтом нативные мобильные приложения под iOS и Android.
      </div>
      <div class="categories">
        <div class="categories__element categories__element--creative">
          <svg class="categories__icon" aria-hidden="true">
            <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="/img/sprites/sprites-index.svg#fire"></use>
          </svg>
          <h3 class="big">Креативность</h3>
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
          <h3 class="big">Технологии</h3>
          <section class="list">
            <span class="list__element">Адаптивная и доступная верстка</span>
            <span class="list__element">Специализируемся на 1С-Битрикс</span>
            <span class="list__element">Разрабатываем iOS приложения</span>
          </section>
        </div>
        <div class="categories__element categories__element--design">
          <svg aria-hidden="true">
            <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="/img/sprites/sprites-index.svg#professional"></use>
          </svg>
          <h3 class="big">Профессионализм</h3>
          <section class="list">
            <span class="list__element">Детальный анализ</span>
            <span class="list__element">Уникальный подход</span>
            <span class="list__element">Искусное планирование</span>
          </section>
        </div>
      </div>
    </article>
    <div class="page-image page-image--about">
      <div class="page-image__promo">
        <div class="page-image__text page-image__text--about">
          <a href="http://www.cmsmagazine.ru/mobile/?sk=_apps&so=desc&mp=&c=&cc=56&cpp=40" class="page-image__title page-image__title--top page-image__title--mask-1 no-underline" target="_blank">
            <svg class="page-image__icon page-image__icon--top page-image__icon--mask-1" aria-hidden="true">
              <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="/img/sprites/sprites-services.svg#mobile"></use>
            </svg>
            Топ-3 по мобильной разработке
          </a>
          <a href="http://www.cmsmagazine.ru/creators/tula/" class="page-image__title page-image__title--top page-image__title--mask-2 no-underline" target="_blank">
            <svg class="page-image__icon page-image__icon--top page-image__icon--mask-2" aria-hidden="true">
              <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="/img/sprites/sprites-services.svg#web"></use>
            </svg>
            Топ-30 среди веб-студий
          </a>
          <a href="http://www.cmsmagazine.ru/seo/tula/" class="page-image__title page-image__title--top page-image__title--mask-3 no-underline" target="_blank">
            <svg class="page-image__icon page-image__icon--top page-image__icon--mask-3" aria-hidden="true">
              <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="/img/sprites/sprites-services.svg#seo"></use>
            </svg>
            Топ-15 по SEO продвижению
          </a>
        </div>
      </div>
      <div class="page-image__promo page-image__promo--image">
        <img src="/img/cmsmagazine.png" class="page-image__image" alt="cmsmagazine аналитический портал веб-разработок">
      </div>
    </div>
    <article class="certificates">
      <div class="certificates__text">
        <h2>Создание сайтов на 1С-Битрикс</h2>
        Just Space - официальный партнер компании 1С-Битрикс, которая занимает первое место на российском рынке среди коммерческих CMS. Специализируемся на создание интернет-магазинов и технической поддержкой высоко нагруженных систем. Наши программисты являются сертифицированными специалистами по созданию сайтов на основе 1С-Битрикс и имеют соответствующие сертификаты.
      </div>
      <div class="certificates__content">
        <img src="/img/cert/BXS-CM.png" class="certificates__cert" alt="Сертификат 1С Битрикс - Контент-менеджер">
        <img src="/img/cert/BXS-ADM-Base.png" class="certificates__cert" alt="Сертификат 1С Битрикс - Администратор Базовый">
        <img src="/img/cert/BXS-ADM-Mod.png" class="certificates__cert" alt="Сертификат 1С Битрикс - Администратор Модули">
        <img src="/img/cert/BXS-ADM-Bus.png" class="certificates__cert" alt="Сертификат 1С Битрикс - Администратор Бизнес">
        <img src="/img/cert/BX24-US.png" class="certificates__cert" alt="Сертификат 1С Битрикс - Пользователь Битрикс24">
        <img src="/img/cert/BXP-ADM.png" class="certificates__cert" alt="Сертификат 1С Битрикс - Администратор 1С-Битрикс Корпоративный портал">
        <img src="/img/cert/BX-Host.png" class="certificates__cert" alt="Сертификат 1С Битрикс - Курс для хостеров">
        <img src="/img/cert/BX-Dev.png" class="certificates__cert" alt="Сертификат 1С Битрикс - Разработчик Bitrix Framework">
      </div>
    </article>
    <div class="page-image page-image--blog">
      <div class="page-image__wrapper">
        <article class="page-image__promo">
          <h3 class="big">Блог <span class="fill-color--first">Just Space</span></h3>
          <div class="page-image__text">
            На страницах нашего блога мы выкладываем интересные на наш взгляд кейсы, стараясь рассказать о том, как создать сайт и разработать мобильное приложение. Раскрываем методики и секреты применяемые в SEO продвижение сайтов.
          </div>
          <div class="page-image__text">
            В наших планы входит, регулярно описывать корпоративные успехи и неудачи, рассказывать о предпринимаемых экспериментах и всецело делиться опытом с нашими читателями.
          </div>
          <a href="blog.php" class="button button--full button--rosen button--arrow">
            Начать читать
            <svg class="article__icon" aria-hidden="true">
              <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="/img/sprites/sprites.svg#next-arrow"></use>
            </svg>
          </a>
        </article>
      </div>
    </div>
    <article class="page">
      <div class="page__video">
        <?php
          require_once($_SERVER["DOCUMENT_ROOT"]."/templates/youtube.php");
        ?>
      </div>
      <div class="page__text">
        <h2>Для чего стоит заказать создание и продвижение сайтов в Туле</h2>
        Создание сайта обеспечивает охват широкой аудитории интернет пользователей, это позволяет привлечь новых клиентов, которые раньше не могли узнать о ваших услугах в других источниках. При правильном проведении SEO продвижения сайта вы получите дополнительный источник постоянных клиентов. Также если вы хотите улучшить репутацию своей организации, то собственный сайт - удобная стартовая площадка для этого, а в совокупности с проведением SMM кампании в социальных сетях (Facebook, Instagram, Вконтакте) вы достигните значительных изменений в короткий срок.
      </div>
    </article>
    <div class="clients carusel carusel--line">
      <h3 class="clients__title big">Кейсы</h3>
      <div class="slider slider--line">
        <a href="/portfolio/domotoplenya.php" class="client client--1 slider__slide slider__slide--line">
        </a><!--
        --><a href="/portfolio/sportlifting.php" class="client client--2 slider__slide slider__slide--line">
        </a><!--
        --><a href="/portfolio/tulskayakvartirka.php" class="client client--3 slider__slide slider__slide--line">
        </a><!--
        --><a href="/portfolio/gazeltraffic.php" class="client client--4 slider__slide slider__slide--line">
        </a><!--
        --><a href="/portfolio/doly-tula.php" class="client client--5 slider__slide slider__slide--line">
        </a><!--
        --><a href="/portfolio/justspaceshoot.php" class="client client--6 slider__slide slider__slide--line">
        </a><!--
      --></div>
      <div class="arrow__wrapper arrow__wrapper--left">
        <svg class="slider__arrow slider__arrow--left" aria-hidden="true">
          <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="/img/sprites/sprites.svg#down-arrow"></use>
        </svg>
      </div>
      <div class="arrow__wrapper arrow__wrapper--right">
        <svg class="slider__arrow slider__arrow--right" aria-hidden="true">
          <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="/img/sprites/sprites.svg#down-arrow"></use>
        </svg>
      </div>
    </div>
    <article class="order">
      <form class="order__form" method="post">
        <table class="order__table">
          <tr>
            <td colspan="2">
              <h3 class="order__title big">Заказать проект</h3>
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
    <?php
      require_once($_SERVER["DOCUMENT_ROOT"]."/templates/google_map.php");
    ?>
  </main>
<?php
  require_once($_SERVER["DOCUMENT_ROOT"]."/templates/footer.php");
?>
