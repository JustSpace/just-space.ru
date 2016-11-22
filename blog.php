<?php
  require_once($_SERVER["DOCUMENT_ROOT"]."/templates/doc_head.php");
?>
<body>
  <header class="header header__blog">
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
      <a href="#" class="article__full">
        Читать далее
        <svg aria-hidden="true" class="article__icon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 31.5 31.5"><path d="M21.2 5c-0.4-0.4-1.1-0.4-1.6 0 -0.4 0.4-0.4 1.1 0 1.6l8 8H1.1C0.5 14.6 0 15.1 0 15.7c0 0.6 0.5 1.1 1.1 1.1h26.6l-8 8c-0.4 0.4-0.4 1.2 0 1.6 0.4 0.4 1.2 0.4 1.6 0l10-10c0.4-0.4 0.4-1.1 0-1.6L21.2 5z"/>
      </a>
    </article>
    <article class="article">
      <h2 class="article__title">
        Lorem ipsum dolor sit amet.
      </h2>
      <div class="article__cut">
        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nulla doloremque nemo itaque culpa voluptatum corporis rem beatae officiis sed? Qui libero modi dolor, eos vero non reiciendis officiis, aperiam ducimus laboriosam repellat tempora alias dolore voluptatibus nesciunt iste. Tempore, ex, ullam. Quis ea sequi nostrum itaque nihil, numquam quasi laudantium dolor provident voluptas voluptatem expedita eum consectetur dignissimos hic recusandae quaerat amet laborum unde consequatur quia repellat, autem voluptates natus. Voluptatum facere veritatis ullam, id minus dicta velit magni aperiam odit voluptates saepe ipsam consectetur quibusdam autem totam similique corporis commodi nostrum illum, necessitatibus, cumque accusamus molestias, molestiae eum! Iste quas officiis nobis, error mollitia voluptate fuga voluptatem hic maiores magnam! Molestias veniam iste in suscipit cupiditate obcaecati, provident temporibus eligendi, officiis ut corrupti, quod explicabo sint minus. Harum, eos, expedita. Veniam, accusantium! Reprehenderit ratione inventore ad nemo, praesentium animi deserunt fugiat voluptatibus consectetur quas iure doloremque maxime nulla tempora quibusdam labore recusandae dignissimos quidem dolorum eligendi iste vitae delectus! Nostrum cum laudantium praesentium rem a sit ipsa! Quae vel, nam, minus explicabo non fuga sed nulla nesciunt quo eveniet. Et dolores dolore eaque explicabo asperiores voluptatum cupiditate deleniti molestiae culpa illo, eveniet fuga ad autem ducimus sequi, optio ratione.
      </div>
      <a href="#" class="article__full">
        Читать далее
        <svg aria-hidden="true" class="article__icon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 31.5 31.5"><path d="M21.2 5c-0.4-0.4-1.1-0.4-1.6 0 -0.4 0.4-0.4 1.1 0 1.6l8 8H1.1C0.5 14.6 0 15.1 0 15.7c0 0.6 0.5 1.1 1.1 1.1h26.6l-8 8c-0.4 0.4-0.4 1.2 0 1.6 0.4 0.4 1.2 0.4 1.6 0l10-10c0.4-0.4 0.4-1.1 0-1.6L21.2 5z"/>
      </a>
    </article>
  </main>
<?php
  require_once($_SERVER["DOCUMENT_ROOT"]."/templates/footer.php");
?>
