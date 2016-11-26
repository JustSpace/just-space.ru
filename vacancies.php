<?php
  require_once($_SERVER["DOCUMENT_ROOT"]."/templates/doc_head.php");
?>
<body>
  <header class="header header--vacancies">
    <div class="header__mask"></div>
    <h1 class="header__title header__title--slice">Наши вакансии</h1>
    <nav class="navigation">
      <a href="javascript:void(0)" class="hamburger">
        <span class="hamburger__line"></span>
        <span class="hamburger__line"></span>
        <span class="hamburger__line"></span>
      </a>
      <a href="/index.php" class="navigation__logo">Just Space</a>
      <span class="navigation__section">Вакансии</span>
    </nav>
  </header>
  <?php
    require_once($_SERVER["DOCUMENT_ROOT"]."/templates/sidebar.php");
  ?>
  <main class="main">
    <article class="vacancies">
      <article class="vacancies__text">
        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ratione deleniti, sint voluptatum eveniet corporis incidunt repellendus sit mollitia laudantium iste quas fuga nesciunt error distinctio earum doloremque, fugiat iusto odio ipsam quidem at illo recusandae. Laudantium reprehenderit libero, voluptates placeat.
      </article>
      <section class="vacancies__line">
        <a href="#" class="vacancy">
          <h2 class="vacancy__title">Front-End разработчик</h2>
          <div class="vacancy__description">
            <span>Мы предлагаем</span>
            <ul class="vacancy__list">
              <li class="vacancy__list-element">- Уровень зарплаты от 20 тыс. руб.</li>
              <li class="vacancy__list-element">- Свободный график</li>
            </ul>
          </div>
          <div class="vacancy__requirements">
            <span>Наши требования</span>
            <ul class="vacancy__list">
              <li class="vacancy__list-element">- Git</li>
              <li class="vacancy__list-element">- HTML/CSS/JavaScript</li>
              <li class="vacancy__list-element">- Less/Sass</li>
              <li class="vacancy__list-element">- Grunt/Gulp</li>
            </ul>
          </div>
        </a>
        <a href="#" class="vacancy">
          <h2 class="vacancy__title">Дизайнер</h2>
          <div class="vacancy__description">
            <span>Мы предлагаем</span>
            <ul class="vacancy__list">
              <li class="vacancy__list-element">- Уровень зарплаты от 20 тыс. руб.</li>
              <li class="vacancy__list-element">- Свободный график</li>
            </ul>
          </div>
          <div class="vacancy__requirements">
            <span>Наши требования</span>
            <ul class="vacancy__list">
              <li class="vacancy__list-element">- Photoshop/Illustrator/Sketch</li>
              <li class="vacancy__list-element">- Разработка макетов сайтов и приложений</li>
            </ul>
          </div>
        </a>
        <a href="#" class="vacancy">
          <h2 class="vacancy__title">SEO специалист</h2>
          <div class="vacancy__description">
            <span>Мы предлагаем</span>
            <ul class="vacancy__list">
              <li class="vacancy__list-element">- Уровень зарплаты от 20 тыс. руб.</li>
              <li class="vacancy__list-element">- Свободный график</li>
            </ul>
          </div>
          <div class="vacancy__requirements">
            <span>Наши требования</span>
            <ul class="vacancy__list">
              <li class="vacancy__list-element">- Базовые знания HTML</li>
              <li class="vacancy__list-element">- Знание принципов аудита сайта</li>
              <li class="vacancy__list-element">- Опыт работы с сервисами Google и Яндекс</li>
            </ul>
          </div>
        </a>
      </section>
    </article>
  </main>
<?php
  require_once($_SERVER["DOCUMENT_ROOT"]."/templates/footer.php");
?>
