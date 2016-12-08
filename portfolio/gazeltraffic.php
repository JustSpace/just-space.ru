<?php
  require_once($_SERVER["DOCUMENT_ROOT"]."/templates/doc_head.php");
?>
<body>
  <header class="header header--2div3 header--gazel-traffic">
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
        Создание сайта лендинга под ключ
      </h1>
      <section class="about__text">
        <ul>
          <li>
            - Разработка дизайна и создание макета
          </li>
          <li>
            - Копирайтинг содержимого сайта
          </li>
          <li>
            - Подбор и обработка изображений
          </li>
          <li>
            - Разработка отзывчивого адаптивного сайта, проработка доступности для людей с ограниченными возможностями
          </li>
          <li>
            - SEO-оптимизация лендинга
          </li>
          <li>
            - Оптимизация всего сайта (Минификация HTML/CSS/JavaSript, оптимизация изображений, настройка сжатия на сервере и кеширования на строне клиента)
          </li>
        </ul>
      </section>
    </article>
  </main>
  <?php
    require_once($_SERVER["DOCUMENT_ROOT"]."/templates/footer.php");
  ?>
