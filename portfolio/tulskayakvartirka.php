<?php
  require_once($_SERVER["DOCUMENT_ROOT"]."/templates/doc_head.php");
?>
<body>
  <header class="header header--2div3 header--tulskayakvartirka">
    <div class="header__mask"></div>
    <nav class="navigation">
      <a href="javascript:void(0)" class="hamburger">
        <span class="hamburger__line"></span>
        <span class="hamburger__line"></span>
        <span class="hamburger__line"></span>
      </a>
      <a href="/index.php" class="navigation__logo">Just Space</a>
      <a href="/portfolio.php" class="navigation__section navigation__section--link">Портфолио</a>
    </nav>
  </header>
  <?php
    require_once($_SERVER["DOCUMENT_ROOT"]."/templates/sidebar.php");
  ?>
  <main class="main">
    <article class="about">
      <h1>
        Создание типового корпоративного сайта
      </h1>
      <section class="about__text">
        Оффлайн рынок не позволяет задействовать всего многообразия различных рычагов, имеющихся в интернете, поэтому клиент пришел к выводу что необходимо представить его фирму в сети. Для этого был разработан бюджетный вариант корпоративного сайта, с использованием настроенного типового решения.
      </section>
      <section class="about__text">
        <ul>
          <li>
            - Подбор и утверждение подходящего типового решения
          </li>
          <li>
            - Настройка и необходимый редизайн типового решения
          </li>
          <li>
            - Копирайтинг текста для страниц сайта
          </li>
          <li>
            - Наполнение сайта основным контентом (квартиры с описанием и фотографиями)
          </li>
          <li>
            - Настройка домена и хостинга
          </li>
        </ul>
      </section>
      <section class="about__text">
        На первых встречах велись долгие переговоры по утверждению шаблона сайта, после утверждения одного из предоставленных макетов, дизайнер стал кастомизировать типовое решение под нужды заказчика. Также наша компания взяла на себя обязательства по контент наполнению. Были подобраны и обработаны множество тематических изображений и проведен копирайт текста. Дальнейшим шагом было размещение готового сайта на хостинге с последующей настройкой.
      </section>
    </article>
  </main>
  <?php
    require_once($_SERVER["DOCUMENT_ROOT"]."/templates/footer.php");
  ?>
