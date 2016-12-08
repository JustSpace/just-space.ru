<?php
  require_once($_SERVER["DOCUMENT_ROOT"]."/templates/doc_head.php");
?>
<body>
  <header class="header header--2div3 header--doly-tula">
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
        Создание сайта корпоративного сайта под ключ
      </h1>
      <section class="about__text">
        <ul>
          <li>
            - Разработка дизайна, подбор цветовой темы и создание макета
          </li>
          <li>
            - Копирайтинг текста для каждой страницы на сайте
          </li>
          <li>
            - Подбор и обработка изображений
          </li>
          <li>
            - Разработка отзывчивого адаптивного сайта
          </li>
          <li>
            - SEO-оптимизация страниц сайта
          </li>
        </ul>
      </section>
    </article>
  </main>
  <?php
    require_once($_SERVER["DOCUMENT_ROOT"]."/templates/footer.php");
  ?>
