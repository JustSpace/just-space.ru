<?php
  require_once($_SERVER["DOCUMENT_ROOT"]."/templates/doc_head.php");
?>
<body>
  <header class="header header__portfolio">
    <h1 class="header__title header__title--slice">Наши проекты</h1>
    <nav class="navigation">
      <a href="javascript:void(0)" class="hamburger">
        <span class="hamburger__line"></span>
        <span class="hamburger__line"></span>
        <span class="hamburger__line"></span>
      </a>
      <a href="/index.php" class="navigation__logo">Just Space</a>
      <span class="navigation__section">Портфолио</span>
    </nav>
  </header>
  <?php
    require_once($_SERVER["DOCUMENT_ROOT"]."/templates/sidebar.php");
  ?>
  <main class="main">
    <article class="portfolio">
      <article class="portfolio__text">
        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ratione deleniti, sint voluptatum eveniet corporis incidunt repellendus sit mollitia laudantium iste quas fuga nesciunt error distinctio earum doloremque, fugiat iusto odio ipsam quidem at illo recusandae. Laudantium reprehenderit libero, voluptates placeat.
      </article>
      <section class="portfolio__line">
        <a href="/portfolio/domotoplenya.php" class="portfolio__project">
          <img src="/img/CIS_logo_white.png" class="portfolio__logo">
          <div class="portfolio__mask portfolio__mask--1"></div>
          <img src="/img/Portfolio_ЦИС.png" class="portfolio__image" alt="">
        </a>
        <a href="/portfolio/gazeltraffic.php" class="portfolio__project">
          <img src="/img/Gazel-Traffic_logo_white.png" class="portfolio__logo">
          <div class="portfolio__mask portfolio__mask--2"></div>
          <img src="/img/Portfolio_Gazel-Traffic.png" class="portfolio__image" alt="">
        </a>
        <a href="/portfolio/sportlifting.php" class="portfolio__project">
          <img src="/img/SportLifting_logo_white.png" class="portfolio__logo">
          <div class="portfolio__mask portfolio__mask--3"></div>
          <img src="/img/Portfolio_SportLifting.png" class="portfolio__image" alt="">
        </a>
      </section>
      <section class="portfolio__line">
        <a href="/portfolio/domotoplenya.php" class="portfolio__project">
          <img src="/img/CIS_logo_white.png" class="portfolio__logo">
          <div class="portfolio__mask portfolio__mask--4"></div>
          <img src="/img/Portfolio_ЦИС.png" class="portfolio__image" alt="">
        </a>
        <a href="/portfolio/gazeltraffic.php" class="portfolio__project">
          <img src="/img/Gazel-Traffic_logo_white.png" class="portfolio__logo">
          <div class="portfolio__mask portfolio__mask--5"></div>
          <img src="/img/Portfolio_Gazel-Traffic.png" class="portfolio__image" alt="">
        </a>
        <a href="/portfolio/sportlifting.php" class="portfolio__project">
          <img src="/img/SportLifting_logo_white.png" class="portfolio__logo">
          <div class="portfolio__mask portfolio__mask--6"></div>
          <img src="/img/Portfolio_SportLifting.png" class="portfolio__image" alt="">
        </a>
      </section>
    </article>
  </main>
<?php
  require_once($_SERVER["DOCUMENT_ROOT"]."/templates/footer.php");
?>
