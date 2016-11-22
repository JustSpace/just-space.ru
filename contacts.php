<?php
  require_once($_SERVER["DOCUMENT_ROOT"]."/templates/doc_head.php");
?>
<body>
  <header class="header header__contacts">
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
          <svg aria-hidden="true" class="contact__icon contact__icon--vk" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 304.4 304.4"><path d="M261.9 175.6c10.1 9.9 20.8 19.1 29.8 30 4 4.8 7.8 9.8 10.7 15.4 4.1 8 0.4 16.7-6.7 17.2l-44.3 0c-11.4 0.9-20.6-3.7-28.2-11.5 -6.1-6.3-11.8-12.9-17.7-19.4 -2.4-2.6-5-5.1-8-7.1 -6.1-3.9-11.3-2.7-14.8 3.6 -3.5 6.4-4.3 13.5-4.7 20.7 -0.5 10.4-3.6 13.2-14.1 13.7 -22.4 1.1-43.7-2.3-63.4-13.6 -17.4-10-30.9-24-42.7-40C34.8 153.5 17.3 119.4 1.5 84.4 -2 76.5 0.6 72.2 9.3 72.1c14.5-0.3 28.9-0.3 43.4 0 5.9 0.1 9.8 3.5 12 9 7.8 19.2 17.4 37.6 29.4 54.5 3.2 4.5 6.5 9 11.1 12.2 5.1 3.5 9.1 2.4 11.5-3.4 1.5-3.6 2.2-7.5 2.6-11.4 1.1-13.4 1.3-26.7-0.7-40.1 -1.2-8.3-5.9-13.7-14.2-15.3 -4.2-0.8-3.6-2.4-1.6-4.8 3.6-4.2 6.9-6.8 13.6-6.8h50.1c7.9 1.6 9.6 5.1 10.7 13l0 55.7c-0.1 3.1 1.5 12.2 7.1 14.2 4.4 1.4 7.4-2.1 10-4.9 12-12.7 20.6-27.8 28.2-43.4 3.4-6.9 6.3-14 9.1-21.1 2.1-5.3 5.4-7.9 11.3-7.8l48.2 0c1.4 0 2.9 0 4.3 0.3 8.1 1.4 10.4 4.9 7.8 12.8 -4 12.5-11.6 22.8-19.2 33.3 -8 11.1-16.6 21.9-24.6 33.1C252.3 161.5 252.8 166.7 261.9 175.6L261.9 175.6zM261.9 175.6"/></svg>
        </a>
        <a class="contact__social-link" href="https://www.instagram.com/justspaceweb" alt="Наш аккаунт в Instagram">
          <svg aria-hidden="true" class="contact__icon contact__icon--instagram" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 169.1 169.1"><path d="M122.4 0H46.7C20.9 0 0 20.9 0 46.7v75.8c0 25.7 20.9 46.7 46.7 46.7h75.8c25.7 0 46.7-20.9 46.7-46.7V46.7C169.1 20.9 148.1 0 122.4 0zM154.1 122.4c0 17.5-14.2 31.7-31.7 31.7H46.7C29.2 154.1 15 139.9 15 122.4V46.7C15 29.2 29.2 15 46.7 15h75.8c17.5 0 31.7 14.2 31.7 31.7V122.4z"/><path d="M84.5 41c-24 0-43.6 19.5-43.6 43.6 0 24 19.5 43.6 43.6 43.6s43.6-19.5 43.6-43.6C128.1 60.5 108.6 41 84.5 41zM84.5 113.1c-15.7 0-28.6-12.8-28.6-28.6 0-15.7 12.8-28.6 28.6-28.6s28.6 12.8 28.6 28.6C113.1 100.3 100.3 113.1 84.5 113.1z"/><path d="M129.9 28.3c-2.9 0-5.7 1.2-7.8 3.2 -2.1 2-3.2 4.9-3.2 7.8 0 2.9 1.2 5.7 3.2 7.8 2 2 4.9 3.2 7.8 3.2 2.9 0 5.7-1.2 7.8-3.2 2.1-2 3.2-4.9 3.2-7.8 0-2.9-1.2-5.7-3.2-7.8C135.7 29.4 132.8 28.3 129.9 28.3z"/></svg>
        </a>
        <a class="contact__social-link" href="https://www.facebook.com/justspaceweb" alt="Наша группа в FaceBook">
          <svg aria-hidden="true" class="contact__icon contact__icon--facebook" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 96.1 96.1"><path d="M72.1 0L59.6 0C45.6 0 36.6 9.3 36.6 23.7v10.9H24c-1.1 0-2 0.9-2 2v15.8c0 1.1 0.9 2 2 2h12.5v39.9c0 1.1 0.9 2 2 2h16.4c1.1 0 2-0.9 2-2V54.3h14.7c1.1 0 2-0.9 2-2l0-15.8c0-0.5-0.2-1-0.6-1.4 -0.4-0.4-0.9-0.6-1.4-0.6H56.8v-9.2c0-4.4 1.1-6.7 6.8-6.7l8.4 0c1.1 0 2-0.9 2-2V2C74 0.9 73.2 0 72.1 0z"/></svg>
        </a>
        <a class="contact__social-link" href="https://www.twitter.com/justspaceweb" alt="Наш аккаунт в Twitter">
          <svg aria-hidden="true" class="contact__icon contact__icon--twitter" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 612 612"><path d="M612 116.3c-22.5 10-46.7 16.8-72.1 19.8 25.9-15.5 45.8-40.2 55.2-69.4 -24.3 14.4-51.2 24.8-79.8 30.5 -22.9-24.4-55.5-39.7-91.6-39.7 -69.3 0-125.6 56.2-125.6 125.5 0 9.8 1.1 19.4 3.3 28.6C197.1 206.3 104.6 156.3 42.6 80.4c-10.8 18.5-17 40.1-17 63.1 0 43.6 22.2 82 55.8 104.5 -20.6-0.7-39.9-6.3-56.9-15.8v1.6c0 60.8 43.3 111.6 100.7 123.1 -10.5 2.8-21.6 4.4-33.1 4.4 -8.1 0-15.9-0.8-23.6-2.3 16 49.9 62.3 86.2 117.3 87.2 -42.9 33.7-97.1 53.7-155.9 53.7 -10.1 0-20.1-0.6-29.9-1.7 55.6 35.7 121.5 56.5 192.4 56.5 230.9 0 357.2-191.3 357.2-357.2l-0.4-16.3C573.9 163.5 595.2 141.4 612 116.3z"/></svg>
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
  <footer class="footer">
    <div class="footer__copyright">
      Copyright &copy; 2013-2016 Just Space
    </div>
  </footer>
  <script src="/js/scripts.min.js"></script>
</body>
</html>
