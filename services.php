<?php
  require_once($_SERVER["DOCUMENT_ROOT"]."/templates/doc_head.php");
?>
<body>
  <header class="header header__services">
    <nav class="navigation">
      <a href="javascript:void(0)" class="hamburger">
        <span class="hamburger__line"></span>
        <span class="hamburger__line"></span>
        <span class="hamburger__line"></span>
      </a>
      <a href="index.php" class="navigation__logo">Just Space</a>
      <span class="navigation__section">Услуги</span>
    </nav>
  </header>
  <?php
    require_once("templates/sidebar.php");
  ?>
  <main class="main">
    <article class="services">
      <h1 class="services__title">Что мы делаем?</h1>
      <section class="service">
        <h2 class="service__title">Дизайн</h2>
        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Qui veritatis amet error, sequi atque sunt repellendus commodi, iure ullam eos cupiditate cumque odit alias consectetur excepturi, sed praesentium ipsa sapiente.
      </section>
      <section class="service">
        <h2 class="service__title">Разработка сайтов</h2>
        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Unde provident nulla culpa, omnis incidunt enim aliquam rem inventore deleniti eaque corrupti velit. Pariatur, neque praesentium nisi consequatur nobis dolorum molestias.
      </section>
      <section class="service">
        <h2 class="service__title">Мобильная разработка</h2>
        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Exercitationem nemo sint, aliquid aperiam voluptatibus id facilis accusantium vel minima quas doloribus aut tenetur, nam cum fugiat repellendus molestiae unde in!
      </section>
      <section class="service">
        <h2 class="service__title">Продвижение</h2>
        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Exercitationem nemo sint, aliquid aperiam voluptatibus id facilis accusantium vel minima quas doloribus aut tenetur, nam cum fugiat repellendus molestiae unde in!
      </section>
    </article>
  </main>
<?php
  require_once($_SERVER["DOCUMENT_ROOT"]."/templates/footer.php");
?>
