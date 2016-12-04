<?php
  require_once($_SERVER["DOCUMENT_ROOT"]."/templates/doc_head.php");
?>
<body>
  <header class="header header--2div3 header--justspaceshoot">
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
        Создание 8-и битной мобильной игры
      </h1>
      <section class="about__text">
        На данный момент аркадные игры занимают одну из лидирующих позиций App Store,
        поэтому и мы решили попробовать свои силы в данном направлении.

        Основной идеей было воплотить классический шутер в стиле 8-bit на эране соверменного мобильного устройства, вам предлагается управлять различными космическими кораблями с целью убить наибольшее количество противников за неограниченное время, при этом противники в свою очередь препятствуют вашему продвижению.
      </section>
      <section class="about__text">
        <ul>
          <li>
            - Дизайн объектов для наполнения игровой сцены
          </li>
          <li>
            - Поиск звуков
          </li>
          <li>
            - Проектирование интерфейса пользователя
          </li>
          <li>
            - Разработка игровой физики на основе Sprite Kit
          </li>
          <li>
            - Наполнение сцены объектами, подготовленными дизайнером
          </li>
          <li>
            - Дизайн иконки приложения, соответствующие скриншоты для App Store
          </li>
          <li>
            - Подбор ключевых слов для поиска по App Store
          </li>
        </ul>
      </section>
      <section class="about__text">
        При разработке интерфейса и игровых объектов дизайнер подготовил множество различных решений. Выбрав наиболее удачное
        решение, мы выполнили несложное прототипирование интерфейсов.
         Утвержденная задача была представлена iOS разработчику для непосредственного проектирования. В качестве движка был
        выбран Sprite Kit. Поскольку разработчики создавали его заточенным специально для устройств Apple, он существенно выигрывает
        в скорости у других движков.
         Параллельно работе разработчика, дизайнер подготовил звуковые эффекты, иконку для приложения и скриншоты
        для App Store.
         После совмещения работы разработчика и дизайнерского решения оставалось лишь подобрать ключевые слова для более
        успешного продвижения.
      </section>
    </article>
  </main>
  <?php
    require_once($_SERVER["DOCUMENT_ROOT"]."/templates/footer.php");
  ?>
