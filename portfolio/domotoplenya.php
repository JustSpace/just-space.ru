<?php
  require_once($_SERVER["DOCUMENT_ROOT"]."/templates/doc_head.php");
?>
<body>
  <header class="header header--domotoplenya">
    <div class="header__mask"></div>
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
    <article class="about">
      <h1>
        Контекстная реклама для лендинга
      </h1>
      <section class="about__text">
        Нам была поставленна задача организации и ведения рекламной компании в Яндекс.Директ с выведением качества аккаунта в значение превышающее 8 баллов и соответственным понижением цены клика до приемлимого значения для долгосрочного ведения рекламы. Задача осложнялась тем что для рекламы был выбран лендинг, что гораздо ограничиволо наши возможности, в том числе повышало процент отказа из-за недоверие к ресурсу. В первую очередь мы подобрали более 2-ух тысяч ключевых слов, из которых в дальнейшем утвердили около 700 релевантных ключевиков.
      </section>
    </article>
  </main>
  <?php
    require_once($_SERVER["DOCUMENT_ROOT"]."/templates/footer.php");
  ?>
