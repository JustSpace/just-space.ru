<?php
  require_once($_SERVER["DOCUMENT_ROOT"]."/templates/doc_head.php");
?>
<body>
  <header class="header header--2div3 header--contacts">
    <div class="header__mask"></div>
    <h1 class="header__title header__title--slice">Наши контакты</h1>
    <nav class="navigation">
      <a href="javascript:void(0)" class="hamburger">
        <span class="hamburger__line"></span>
        <span class="hamburger__line"></span>
        <span class="hamburger__line"></span>
      </a>
      <a href="/index.php" class="navigation__logo">Just Space</a>
      <span class="navigation__section">Контакты</span>
    </nav>
  </header>
  <?php
    require_once($_SERVER["DOCUMENT_ROOT"]."/templates/sidebar.php");
  ?>
  <main class="main">
    <article class="contacts">
      <div class="contact">
        <h2>Телефон</h2>
        <a class="contact__link" href="tel:+79202762950" alt="Телефон приема заявок: +7 (920) 276-29-50">+7 (920) 276-29-50</a>
      </div>
      <div class="contact">
        <h2>Email</h2>
        <a class="contact__link" href="email:info@just-space.ru" alt="Почта приема заявок: info@just-space.ru">info@just-space.ru</a>
      </div>
      <div class="contact">
        <h2>Адрес</h2>
        <span>Россия, г. Тула, пр. Ленина, д. 77, оф 404</span>
      </div>
      <div class="contact center">
        <a class="contact__social-link" href="https://vk.com/justspaceweb" alt="Наша группа в ВКонтакте">
          <svg class="contact__icon contact__icon--vk" aria-hidden="true">
            <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="/img/sprites/sprites.svg#vk"></use>
          </svg>
        </a>
        <a class="contact__social-link" href="https://www.instagram.com/justspaceweb" alt="Наш аккаунт в Instagram">
          <svg class="contact__icon contact__icon--instagram" aria-hidden="true">
            <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="/img/sprites/sprites.svg#instagram"></use>
          </svg>
        </a>
        <a class="contact__social-link" href="https://www.facebook.com/justspaceweb" alt="Наша группа в FaceBook">
          <svg class="contact__icon contact__icon--facebook" aria-hidden="true">
            <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="/img/sprites/sprites.svg#facebook"></use>
          </svg>
        </a>
        <a class="contact__social-link" href="https://www.twitter.com/justspaceweb" alt="Наш аккаунт в Twitter">
          <svg class="contact__icon contact__icon--twitter" aria-hidden="true">
            <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="/img/sprites/sprites.svg#twitter"></use>
          </svg>
        </a>
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
                <button class="order__button order__button--file" type="button" id="file__front" >
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
  <footer class="footer">
    <div class="footer__copyright">
      Copyright &copy; 2013-2016 Just Space
    </div>
  </footer>
  <script src="/js/scripts.min.js"></script>
</body>
</html>
