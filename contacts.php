<?php
  require_once($_SERVER["DOCUMENT_ROOT"]."/templates/doc_head.php");
?>
<body>
  <header class="header header__contacts">
    <nav class="navigation">
      <a href="javascript:void(0)" class="hamburger">
        <span class="hamburger__line"></span>
        <span class="hamburger__line"></span>
        <span class="hamburger__line"></span>
      </a>
      <a href="index.php" class="navigation__logo">Just Space</a>
      <span class="navigation__section">Контакты</span>
    </nav>
  </header>
  <?php
    require_once("templates/sidebar.php");
  ?>
  <main class="main">
    <div class="map">
      <div id="map"></div>
      <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCFE_Bixd44cRvT7dS9qk8NN92t2Cgkd1I&signed_in=true&callback=initMap">
      </script>
    </div>
  </main>
  <footer class="footer">
    <div class="footer__copyright">
      Copyright &copy; 2013-2016 Just Space
    </div>
  </footer>
  <script src="/js/scripts.min.js"></script>
</body>
</html>
