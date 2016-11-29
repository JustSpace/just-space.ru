<?php
  require_once($_SERVER["DOCUMENT_ROOT"]."/templates/doc_head.php");
?>
<body>
  <header class="header header--blog">
    <div class="header__mask"></div>
    <h1 class="header__title header__title--slice">Наш блог</h1>
    <nav class="navigation">
      <a href="javascript:void(0)" class="hamburger">
        <span class="hamburger__line"></span>
        <span class="hamburger__line"></span>
        <span class="hamburger__line"></span>
      </a>
      <a href="/index.php" class="navigation__logo">Just Space</a>
      <span class="navigation__section">Блог</span>
    </nav>
  </header>
  <?php
    require_once($_SERVER["DOCUMENT_ROOT"]."/templates/sidebar.php");
  ?>
  <main class="main">
    <article class="article">
      <h2 class="article__title">
        Lorem ipsum dolor sit amet.
      </h2>
      <div class="article__cut">
        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nulla doloremque nemo itaque culpa voluptatum corporis rem beatae officiis sed? Qui libero modi dolor, eos vero non reiciendis officiis, aperiam ducimus laboriosam repellat tempora alias dolore voluptatibus nesciunt iste. Tempore, ex, ullam. Quis ea sequi nostrum itaque nihil, numquam quasi laudantium dolor provident voluptas voluptatem expedita eum consectetur dignissimos hic recusandae quaerat amet laborum unde consequatur quia repellat, autem voluptates natus. Voluptatum facere veritatis ullam, id minus dicta velit magni aperiam odit voluptates saepe ipsam consectetur quibusdam autem totam similique corporis commodi nostrum illum, necessitatibus, cumque accusamus molestias, molestiae eum! Iste quas officiis nobis, error mollitia voluptate fuga voluptatem hic maiores magnam! Molestias veniam iste in suscipit cupiditate obcaecati, provident temporibus eligendi, officiis ut corrupti, quod explicabo sint minus. Harum, eos, expedita. Veniam, accusantium! Reprehenderit ratione inventore ad nemo, praesentium animi deserunt fugiat voluptatibus consectetur quas iure doloremque maxime nulla tempora quibusdam labore recusandae dignissimos quidem dolorum eligendi iste vitae delectus! Nostrum cum laudantium praesentium rem a sit ipsa! Quae vel, nam, minus explicabo non fuga sed nulla nesciunt quo eveniet. Et dolores dolore eaque explicabo asperiores voluptatum cupiditate deleniti molestiae culpa illo, eveniet fuga ad autem ducimus sequi, optio ratione.
      </div>
      <a href="#" class="button button--underline button--arrow">
        Читать далее
        <svg class="article__icon" aria-hidden="true">
          <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="/img/sprites/sprites.svg#next-arrow"></use>
        </svg>
      </a>
    </article>
    <article class="article">
      <h2 class="article__title">
        Lorem ipsum dolor sit amet.
      </h2>
      <div class="article__cut">
        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nulla doloremque nemo itaque culpa voluptatum corporis rem beatae officiis sed? Qui libero modi dolor, eos vero non reiciendis officiis, aperiam ducimus laboriosam repellat tempora alias dolore voluptatibus nesciunt iste. Tempore, ex, ullam. Quis ea sequi nostrum itaque nihil, numquam quasi laudantium dolor provident voluptas voluptatem expedita eum consectetur dignissimos hic recusandae quaerat amet laborum unde consequatur quia repellat, autem voluptates natus. Voluptatum facere veritatis ullam, id minus dicta velit magni aperiam odit voluptates saepe ipsam consectetur quibusdam autem totam similique corporis commodi nostrum illum, necessitatibus, cumque accusamus molestias, molestiae eum! Iste quas officiis nobis, error mollitia voluptate fuga voluptatem hic maiores magnam! Molestias veniam iste in suscipit cupiditate obcaecati, provident temporibus eligendi, officiis ut corrupti, quod explicabo sint minus. Harum, eos, expedita. Veniam, accusantium! Reprehenderit ratione inventore ad nemo, praesentium animi deserunt fugiat voluptatibus consectetur quas iure doloremque maxime nulla tempora quibusdam labore recusandae dignissimos quidem dolorum eligendi iste vitae delectus! Nostrum cum laudantium praesentium rem a sit ipsa! Quae vel, nam, minus explicabo non fuga sed nulla nesciunt quo eveniet. Et dolores dolore eaque explicabo asperiores voluptatum cupiditate deleniti molestiae culpa illo, eveniet fuga ad autem ducimus sequi, optio ratione.
      </div>
      <a href="#" class="button button--underline button--arrow">
        Читать далее
        <svg class="article__icon" aria-hidden="true">
          <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="/img/sprites/sprites.svg#next-arrow"></use>
        </svg>
      </a>
    </article>
  </main>
<?php
  require_once($_SERVER["DOCUMENT_ROOT"]."/templates/footer.php");
?>
