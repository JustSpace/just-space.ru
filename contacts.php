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
    <article class="contacts" itemscope itemtype="http://schema.org/Organization">
      <h2 class="contacts__title">Digital-agency <span itemprop="name">Just Space</span></h2>
      <div class="contact">
        <h2>Телефон</h2>
        <a class="contact__link" href="tel:+79202762950" itemprop="telephone">+7 (920) 276-29-50</a>
      </div>
      <div class="contact">
        <h2>Email</h2>
        <a class="contact__link" href="mailto:info@just-space.ru" itemprop="email">info@just-space.ru</a>
      </div>
      <div class="contact" itemprop="address" itemscope itemtype="http://schema.org/PostalAddress">
        <h2>Адрес</h2>
        <span>
          <span itemprop="addressLocality">Россия, г. Тула</span>,
          <span itemprop="streetAddress">пр. Ленина, д. 77, оф 404</span>
        </span>
      </div>
      <div class="contact center">
        <a class="contact__social-link" href="https://vk.com/justspaceweb">
          <svg class="contact__icon contact__icon--vk" aria-hidden="true">
            <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="/img/sprites/sprites.svg#vk"></use>
          </svg>
        </a>
        <a class="contact__social-link" href="https://www.instagram.com/justspaceweb">
          <svg class="contact__icon contact__icon--instagram" aria-hidden="true">
            <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="/img/sprites/sprites.svg#instagram"></use>
          </svg>
        </a>
        <a class="contact__social-link" href="https://www.facebook.com/justspaceweb">
          <svg class="contact__icon contact__icon--facebook" aria-hidden="true">
            <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="/img/sprites/sprites.svg#facebook"></use>
          </svg>
        </a>
        <a class="contact__social-link" href="https://www.twitter.com/justspaceweb">
          <svg class="contact__icon contact__icon--twitter" aria-hidden="true">
            <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="/img/sprites/sprites.svg#twitter"></use>
          </svg>
        </a>
        <a class="contact__social-link" href="https://telegram.me/justspaceweb">
          <svg class="contact__icon contact__icon--telegram" aria-hidden="true">
            <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="/img/sprites/sprites.svg#telegram"></use>
          </svg>
        </a>
      </div>
    </article>
    <article class="order">
      <form class="order__form" method="post">
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
    <?php
      require_once($_SERVER["DOCUMENT_ROOT"]."/templates/google_map.php");
    ?>
  </main>
  <footer class="footer">
    <div class="footer__copyright">
      Copyright &copy; 2013-2016 Just Space
    </div>
  </footer>
  <script src="/js/functions.min.js" defer></script>
  <script src="/js/ajax.min.js" defer></script>
  <script src="/js/scripts.min.js" defer></script>
  <!-- Yandex.Metrika counter --> <script type="text/javascript"> (function (d, w, c) { (w[c] = w[c] || []).push(function() { try { w.yaCounter41958054 = new Ya.Metrika({ id:41958054, clickmap:true, trackLinks:true, accurateTrackBounce:true, webvisor:true }); } catch(e) { } }); var n = d.getElementsByTagName("script")[0], s = d.createElement("script"), f = function () { n.parentNode.insertBefore(s, n); }; s.type = "text/javascript"; s.async = true; s.src = "https://mc.yandex.ru/metrika/watch.js"; if (w.opera == "[object Opera]") { d.addEventListener("DOMContentLoaded", f, false); } else { f(); } })(document, window, "yandex_metrika_callbacks"); </script> <noscript><div><img src="https://mc.yandex.ru/watch/41958054" style="position:absolute; left:-9999px;" alt="" /></div></noscript> <!-- /Yandex.Metrika counter -->
</body>
</html>
