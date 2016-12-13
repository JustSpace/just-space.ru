<?php
  require_once($_SERVER["DOCUMENT_ROOT"]."/templates/doc_head.php");
?>
<body>
  <header class="header header--2div3 header--domotoplenya">
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
        Контекстная реклама для лендинга
      </h1>
      <section class="about__text">
        <ul>
          <li>
            - Выбор более 2000 релеваных ключевых фраз
          </li>
          <li>
            - Согласование и утверждение фраз по которым будет проходить кампания
          </li>
          <li>
            - Создание и первоначальная настройка таргетинга рекламной кампании
          </li>
          <li>
            - Создание релевантных объявление под утвержденные ключевые слова
          </li>
          <li>
            - Дальнейшая поддержка, настройка и расширение контекстных объявлений
          </li>
        </ul>
      </section>
      <section class="about__text">
        Нам была поставленна задача организации и ведения рекламной компании в Яндекс.Директ с выведением качества аккаунта в значение превышающее 8 баллов и соответственным понижением цены клика до приемлимого значения для долгосрочного ведения рекламы. Задача осложнялась тем что для рекламы был выбран лендинг, что гораздо ограничиволо наши возможности, в том числе повышало процент отказа из-за недоверие к ресурсу. В первую очередь мы подобрали более 2-ух тысяч ключевых слов, из которых в дальнейшем утвердили около 700 релевантных ключевиков.
      </section>
    </article>
  </main>
  <?php
    require_once($_SERVER["DOCUMENT_ROOT"]."/templates/footer.php");
  ?>
