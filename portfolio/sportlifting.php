<?php
  require_once($_SERVER["DOCUMENT_ROOT"]."/templates/doc_head.php");
?>
<body>
  <header class="header header--2div3 header--sportlifting">
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
        Техническая поддержка и SEO сопровождение интернет-магазина
      </h1>
      <section class="about__text">
        <ul>
          <li>
            - SEO-оптимизация каталогов и карточек товаров
          </li>
          <li>
            - Глубокий рерайтинг описания каталогов и карточек товаров
          </li>
          <li>
            - Оптимизация изображений и ускорение загрузки страниц
          </li>
          <li>
            - Создание дизайна и разработка коммерческого email письма
          </li>
          <li>
            - Подбор и обработка изображений для страниц сайта
          </li>
          <li>
            - Обработка изображений для карточек товара
          </li>
        </ul>
      </section>
    </article>
  </main>
  <?php
    require_once($_SERVER["DOCUMENT_ROOT"]."/templates/footer.php");
  ?>
