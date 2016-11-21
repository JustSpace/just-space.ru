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
      <a href="/index.php" class="navigation__logo">Just Space</a>
      <span class="navigation__section">Услуги</span>
    </nav>
  </header>
  <?php
    require_once($_SERVER["DOCUMENT_ROOT"]."/templates/sidebar.php");
  ?>
  <main class="main">
    <article class="services">
      <h1 class="services__title">Наши услуги</h1>
      <div class="services__text">
        Наше агентство специализируется на разработке уникальных решений в интернете, мы обеспечиваем полный цикл разработки, от продумывания интерфейса и создание эскизов до подбора ключевых слов и SEO оптимизации, все это позволяет воплотить любые выши идеи. Таким образом Just Space охватывает широкий спектр услуг: создание дизайна, разработка сайтов и мобильных приложений, а также продвижение в поисковых системах, обеспечивая при этом высокое качество итогового продукта. На этой странице вы можете ознакомиться отдельно со всеми нашими услугами.
      </div>
      <section class="service">
        <svg class="service__svg" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 100"><style>.phone-a{fill:#FFF;}.phone-b{fill:#464655;}.phone-c{fill:#FF6469;}.phone-d{fill:#00DCCD;}.phone-e{fill:#FFDC69;}.phone-f{fill:#468CBE;}</style><g fill="none"><circle cx="50" cy="50" r="50" fill="currentColor"/><path d="M63.3 20.6L36.7 20.6C34.9 20.6 33.4 21.9 33.4 23.6L33.4 76.5C33.4 78.2 34.9 79.6 36.7 79.6L63.3 79.6C65.1 79.6 66.6 78.2 66.6 76.5L66.6 23.6C66.6 21.9 65.1 20.6 63.3 20.6L63.3 20.6ZM45.6 24.6C45.6 24.1 46.1 23.6 46.7 23.6L53.3 23.6C53.9 23.6 54.4 24.1 54.4 24.6L54.4 24.6C54.4 25.2 53.9 25.6 53.3 25.6L46.7 25.6C46.1 25.6 45.6 25.2 45.6 24.6L45.6 24.6 45.6 24.6ZM42.3 23.6C42.9 23.6 43.4 24.1 43.4 24.6 43.4 25.2 42.9 25.6 42.3 25.6 41.6 25.6 41.2 25.2 41.2 24.6 41.2 24.1 41.6 23.6 42.3 23.6L42.3 23.6ZM50 77.5C48.8 77.5 47.8 76.6 47.8 75.5 47.8 74.4 48.8 73.5 50 73.5 51.2 73.5 52.2 74.4 52.2 75.5 52.2 76.6 51.2 77.5 50 77.5L50 77.5ZM64.4 59.2L64.4 71.4 35.6 71.4 35.6 59.2 35.6 28.7 64.4 28.7 64.4 59.2 64.4 59.2Z" fill="#0097BA"/><path d="M35.6 59.2L44.5 59.2C44.5 58.7 45 58.2 45.6 58.2 46.2 58.2 46.7 58.7 46.7 59.2L48.9 59.2C48.9 58.7 49.4 58.2 50 58.2 50.6 58.2 51.1 58.7 51.1 59.2L53.3 59.2C53.3 58.7 53.8 58.2 54.4 58.2 55 58.2 55.5 58.7 55.5 59.2L64.4 59.2 64.4 28.7 35.6 28.7 35.6 59.2 35.6 59.2ZM55.5 33.8C55.5 33.2 56 32.8 56.6 32.8L61.1 32.8C61.7 32.8 62.2 33.2 62.2 33.8L62.2 37.8C62.2 38.4 61.7 38.9 61.1 38.9L56.6 38.9C56 38.9 55.5 38.4 55.5 37.8L55.5 33.8 55.5 33.8ZM55.5 41.9C55.5 41.4 56 40.9 56.6 40.9L61.1 40.9C61.7 40.9 62.2 41.4 62.2 41.9L62.2 46C62.2 46.5 61.7 47 61.1 47L56.6 47C56 47 55.5 46.5 55.5 46L55.5 41.9 55.5 41.9ZM55.5 50.1C55.5 49.5 56 49 56.6 49L61.1 49C61.7 49 62.2 49.5 62.2 50.1L62.2 54.1C62.2 54.7 61.7 55.1 61.1 55.1L56.6 55.1C56 55.1 55.5 54.7 55.5 54.1L55.5 50.1 55.5 50.1ZM46.7 33.8C46.7 33.2 47.2 32.8 47.8 32.8L52.2 32.8C52.8 32.8 53.3 33.2 53.3 33.8L53.3 37.8C53.3 38.4 52.8 38.9 52.2 38.9L47.8 38.9C47.2 38.9 46.7 38.4 46.7 37.8L46.7 33.8 46.7 33.8ZM46.7 41.9C46.7 41.4 47.2 40.9 47.8 40.9L52.2 40.9C52.8 40.9 53.3 41.4 53.3 41.9L53.3 46C53.3 46.5 52.8 47 52.2 47L47.8 47C47.2 47 46.7 46.5 46.7 46L46.7 41.9 46.7 41.9ZM46.7 50.1C46.7 49.5 47.2 49 47.8 49L52.2 49C52.8 49 53.3 49.5 53.3 50.1L53.3 54.1C53.3 54.7 52.8 55.1 52.2 55.1L47.8 55.1C47.2 55.1 46.7 54.7 46.7 54.1L46.7 50.1 46.7 50.1ZM37.8 33.8C37.8 33.2 38.3 32.8 38.9 32.8L43.4 32.8C44 32.8 44.5 33.2 44.5 33.8L44.5 37.8C44.5 38.4 44 38.9 43.4 38.9L38.9 38.9C38.3 38.9 37.8 38.4 37.8 37.8L37.8 33.8 37.8 33.8ZM37.8 41.9C37.8 41.4 38.3 40.9 38.9 40.9L43.4 40.9C44 40.9 44.5 41.4 44.5 41.9L44.5 46C44.5 46.5 44 47 43.4 47L38.9 47C38.3 47 37.8 46.5 37.8 46L37.8 41.9 37.8 41.9ZM37.8 50.1C37.8 49.5 38.3 49 38.9 49L43.4 49C44 49 44.5 49.5 44.5 50.1L44.5 54.1C44.5 54.7 44 55.1 43.4 55.1L38.9 55.1C38.3 55.1 37.8 54.7 37.8 54.1L37.8 50.1 37.8 50.1Z" class="phone-a"/><path d="M54.4 60.2C53.8 60.2 53.3 59.8 53.3 59.2L51.1 59.2C51.1 59.8 50.6 60.2 50 60.2 49.4 60.2 48.9 59.8 48.9 59.2L46.7 59.2C46.7 59.8 46.2 60.2 45.6 60.2 45 60.2 44.5 59.8 44.5 59.2L35.6 59.2 35.6 71.4 64.4 71.4 64.4 59.2 55.5 59.2C55.5 59.8 55 60.2 54.4 60.2L54.4 60.2ZM44.5 67.4C44.5 67.9 44 68.4 43.4 68.4L38.9 68.4C38.3 68.4 37.8 67.9 37.8 67.4L37.8 63.3C37.8 62.7 38.3 62.3 38.9 62.3L43.4 62.3C44 62.3 44.5 62.7 44.5 63.3L44.5 67.4 44.5 67.4ZM53.3 67.4C53.3 67.9 52.8 68.4 52.2 68.4L47.8 68.4C47.2 68.4 46.7 67.9 46.7 67.4L46.7 63.3C46.7 62.7 47.2 62.3 47.8 62.3L52.2 62.3C52.8 62.3 53.3 62.7 53.3 63.3L53.3 67.4 53.3 67.4ZM56.6 62.3L61.1 62.3C61.7 62.3 62.2 62.7 62.2 63.3L62.2 67.4C62.2 67.9 61.7 68.4 61.1 68.4L56.6 68.4C56 68.4 55.5 67.9 55.5 67.4L55.5 63.3C55.5 62.7 56 62.3 56.6 62.3L56.6 62.3Z" class="phone-a"/><g class="phone-b"><path d="M46.7 25.6L53.3 25.6C53.9 25.6 54.4 25.2 54.4 24.6L54.4 24.6C54.4 24.1 53.9 23.6 53.3 23.6L46.7 23.6C46.1 23.6 45.6 24.1 45.6 24.6L45.6 24.6C45.6 25.2 46.1 25.6 46.7 25.6L46.7 25.6Z"/></g><path d="M52.2 62.3L47.8 62.3C47.2 62.3 46.7 62.7 46.7 63.3L46.7 67.4C46.7 67.9 47.2 68.4 47.8 68.4L52.2 68.4C52.8 68.4 53.3 67.9 53.3 67.4L53.3 63.3C53.3 62.7 52.8 62.3 52.2 62.3L52.2 62.3ZM50 67.4C48.8 67.4 47.8 66.4 47.8 65.3 47.8 64.2 48.8 63.3 50 63.3 51.2 63.3 52.2 64.2 52.2 65.3 52.2 66.4 51.2 67.4 50 67.4L50 67.4Z" fill="#63AFDB"/><path d="M55.5 67.4C55.5 67.9 56 68.4 56.6 68.4L61.1 68.4C61.7 68.4 62.2 67.9 62.2 67.4L62.2 63.3C62.2 62.7 61.7 62.3 61.1 62.3L56.6 62.3C56 62.3 55.5 62.7 55.5 63.3L55.5 67.4 55.5 67.4Z" class="phone-c"/><path d="M43.4 62.3L38.9 62.3C38.3 62.3 37.8 62.7 37.8 63.3L37.8 67.4C37.8 67.9 38.3 68.4 38.9 68.4L43.4 68.4C44 68.4 44.5 67.9 44.5 67.4L44.5 63.3C44.5 62.7 44 62.3 43.4 62.3L43.4 62.3Z" class="phone-d"/><path d="M47.8 55.1L52.2 55.1C52.8 55.1 53.3 54.7 53.3 54.1L53.3 50.1C53.3 49.5 52.8 49 52.2 49L47.8 49C47.2 49 46.7 49.5 46.7 50.1L46.7 54.1C46.7 54.7 47.2 55.1 47.8 55.1L47.8 55.1Z" class="phone-e"/><path d="M56.6 55.1L61.1 55.1C61.7 55.1 62.2 54.7 62.2 54.1L62.2 50.1C62.2 49.5 61.7 49 61.1 49L56.6 49C56 49 55.5 49.5 55.5 50.1L55.5 54.1C55.5 54.7 56 55.1 56.6 55.1L56.6 55.1ZM56.6 52.1C56.6 51.5 57.1 51.1 57.7 51.1L60 51.1C60.6 51.1 61.1 51.5 61.1 52.1L61.1 52.1C61.1 52.7 60.6 53.1 60 53.1L57.7 53.1C57.1 53.1 56.6 52.7 56.6 52.1L56.6 52.1 56.6 52.1Z" class="phone-a"/><path d="M38.9 55.1L43.4 55.1C44 55.1 44.5 54.7 44.5 54.1L44.5 50.1C44.5 49.5 44 49 43.4 49L38.9 49C38.3 49 37.8 49.5 37.8 50.1L37.8 54.1C37.8 54.7 38.3 55.1 38.9 55.1L38.9 55.1ZM38.9 52.1C38.9 51.5 39.4 51.1 40 51.1L42.3 51.1C42.9 51.1 43.4 51.5 43.4 52.1L43.4 52.1C43.4 52.7 42.9 53.1 42.3 53.1L40 53.1C39.4 53.1 38.9 52.7 38.9 52.1L38.9 52.1 38.9 52.1Z" class="phone-f"/><path d="M47.8 47L52.2 47C52.8 47 53.3 46.5 53.3 46L53.3 41.9C53.3 41.4 52.8 40.9 52.2 40.9L47.8 40.9C47.2 40.9 46.7 41.4 46.7 41.9L46.7 46C46.7 46.5 47.2 47 47.8 47L47.8 47ZM47.8 44C47.8 43.4 48.3 42.9 48.9 42.9L51.1 42.9C51.7 42.9 52.2 43.4 52.2 44L52.2 44C52.2 44.5 51.7 45 51.1 45L48.9 45C48.3 45 47.8 44.5 47.8 44L47.8 44 47.8 44Z" class="phone-b"/><path d="M56.6 47L61.1 47C61.7 47 62.2 46.5 62.2 46L62.2 41.9C62.2 41.4 61.7 40.9 61.1 40.9L56.6 40.9C56 40.9 55.5 41.4 55.5 41.9L55.5 46C55.5 46.5 56 47 56.6 47L56.6 47Z" fill="#FFA055"/><path d="M38.9 47L43.4 47C44 47 44.5 46.5 44.5 46L44.5 41.9C44.5 41.4 44 40.9 43.4 40.9L38.9 40.9C38.3 40.9 37.8 41.4 37.8 41.9L37.8 46C37.8 46.5 38.3 47 38.9 47L38.9 47ZM41.2 41.9C42.4 41.9 43.4 42.8 43.4 44 43.4 45.1 42.4 46 41.2 46 39.9 46 38.9 45.1 38.9 44 38.9 42.8 39.9 41.9 41.2 41.9L41.2 41.9Z" fill="#A0D778"/><path d="M47.8 38.9L52.2 38.9C52.8 38.9 53.3 38.4 53.3 37.8L53.3 33.8C53.3 33.2 52.8 32.8 52.2 32.8L47.8 32.8C47.2 32.8 46.7 33.2 46.7 33.8L46.7 37.8C46.7 38.4 47.2 38.9 47.8 38.9L47.8 38.9Z" class="phone-c"/><path d="M56.6 38.9L61.1 38.9C61.7 38.9 62.2 38.4 62.2 37.8L62.2 33.8C62.2 33.2 61.7 32.8 61.1 32.8L56.6 32.8C56 32.8 55.5 33.2 55.5 33.8L55.5 37.8C55.5 38.4 56 38.9 56.6 38.9L56.6 38.9ZM58.8 33.8C60.1 33.8 61.1 34.7 61.1 35.8 61.1 36.9 60.1 37.8 58.8 37.8 57.6 37.8 56.6 36.9 56.6 35.8 56.6 34.7 57.6 33.8 58.8 33.8L58.8 33.8Z" class="phone-d"/><g class="phone-e"><path d="M38.9 38.9L43.4 38.9C44 38.9 44.5 38.4 44.5 37.8L44.5 33.8C44.5 33.2 44 32.8 43.4 32.8L38.9 32.8C38.3 32.8 37.8 33.2 37.8 33.8L37.8 37.8C37.8 38.4 38.3 38.9 38.9 38.9L38.9 38.9Z"/></g><path d="M48.9 45L51.1 45C51.7 45 52.2 44.5 52.2 44L52.2 44C52.2 43.4 51.7 42.9 51.1 42.9L48.9 42.9C48.3 42.9 47.8 43.4 47.8 44L47.8 44C47.8 44.5 48.3 45 48.9 45L48.9 45Z" class="phone-f"/><path d="M57.7 53.1L60 53.1C60.6 53.1 61.1 52.7 61.1 52.1L61.1 52.1C61.1 51.5 60.6 51.1 60 51.1L57.7 51.1C57.1 51.1 56.6 51.5 56.6 52.1L56.6 52.1C56.6 52.7 57.1 53.1 57.7 53.1L57.7 53.1Z" class="phone-c"/><path d="M40 53.1L42.3 53.1C42.9 53.1 43.4 52.7 43.4 52.1L43.4 52.1C43.4 51.5 42.9 51.1 42.3 51.1L40 51.1C39.4 51.1 38.9 51.5 38.9 52.1L38.9 52.1C38.9 52.7 39.4 53.1 40 53.1L40 53.1Z" class="phone-a"/></g></svg>
        <h3 class="service__title">Мобильная разработка</h3>
        Разрабатываем нативные приложения под iOS и Android. Производим интеграцию с вашим сайтом.
        <a href="/services/mobile_develop.php" class="service__button">Подробнее</a>
      </section>
      <section class="service">
        <svg class="service__svg" xmlns="http://www.w3.org/2000/svg" width="100" height="100" viewBox="0 0 100 100"><style>.web-a{fill:#FFF;}.web-b{fill:#DD748A;}</style><g fill="none"><circle cx="50" cy="50" r="50" fill="currentColor"/><path d="M15.8 74.1C15.8 74.4 16.1 74.7 16.4 74.7L83.6 74.7C83.9 74.7 84.2 74.4 84.2 74.1L84.2 34.5 15.8 34.5 15.8 74.1Z" class="web-a"/><path d="M84.2 35L84.2 28.3C84.2 26.3 82.6 24.8 80.7 24.8L19.3 24.8C17.4 24.8 15.8 26.3 15.8 28.3L15.8 35 84.2 35 84.2 35Z" fill="#0097BA"/><path d="M22.9 32.4C21.5 32.4 20.4 31.3 20.4 29.9 20.4 28.5 21.5 27.4 22.9 27.4L56.4 27.4C57.7 27.4 58.9 28.5 58.9 29.9 58.9 31.3 57.7 32.4 56.4 32.4L22.9 32.4Z" class="web-a"/><g fill="#324A5E"><path d="M23 30.8L22.5 30.8 21.9 29.1 22.4 29.1 22.8 30.1 23.1 29.1 23.6 29.1 23.9 30.1 24.3 29.1 24.8 29.1 24.2 30.8 23.7 30.8 23.3 29.9 23 30.8 23 30.8Z"/><path d="M25.9 30.8L25.4 30.8 24.9 29.1 25.3 29.1 25.7 30.1 26 29.1 26.5 29.1 26.8 30.1 27.2 29.1 27.7 29.1 27.1 30.8 26.6 30.8 26.3 29.9 25.9 30.8 25.9 30.8Z"/><path d="M28.8 30.8L28.3 30.8 27.7 29.1 28.2 29.1 28.6 30.1 28.9 29.1 29.4 29.1 29.7 30.1 30.1 29.1 30.6 29.1 30 30.8 29.5 30.8 29.1 29.9 28.8 30.8 28.8 30.8Z"/></g><g fill="#ACB3BA"><path d="M25.9 47.9L24.1 47.9 22 41.7 23.8 41.7 25 45.4 26.2 41.7 27.9 41.7 29.2 45.4 30.4 41.7 32.2 41.7 30.1 47.9 28.3 47.9 27.1 44.5 25.9 47.9 25.9 47.9Z"/><path d="M36.5 47.9L34.6 47.9 32.5 41.7 34.3 41.7 35.5 45.4 36.8 41.7 38.5 41.7 39.7 45.4 40.9 41.7 42.8 41.7 40.6 47.9 38.8 47.9 37.6 44.5 36.5 47.9 36.5 47.9Z"/><path d="M47 47.9L45.2 47.9 43 41.7 44.9 41.7 46.1 45.4 47.3 41.7 49 41.7 50.3 45.4 51.5 41.7 53.3 41.7 51.2 47.9 49.3 47.9 48.2 44.5 47 47.9 47 47.9Z"/></g><path d="M73.5 67.9L77.1 64.3 71.1 58.3 76.6 54.4 59.8 50.7 63.5 67.4 67.5 61.9 73.5 67.9Z" class="web-b"/><path d="M17 74.7L16.4 74.7 16.4 74.3 16.4 34.9 16.4 34.6 17.2 34.6 17.2 34.9 17.2 74 82.8 74 82.8 34.9 82.8 34.6 83.6 34.6 83.6 34.9 83.6 74.3 83.6 74.5 83.6 74 83.2 74 82.8 74ZM82.8 74.7L83.6 74.7 83.6 74.5Z" style="fill:#0097BA;stroke:#0097BA"/></g></svg>
        <h3 class="service__title">Разработка сайтов</h3>
        Создаем отзывчивые, адаптивные и доступные сайты используя современные технологии и CMS.
        <a href="/services/web_develop.php" class="service__button">Подробнее</a>
      </section>
      <section class="service">
        <svg class="service__svg" xmlns="http://www.w3.org/2000/svg" width="100" height="100" viewBox="0 0 100 100"><g fill="none"><circle cx="50" cy="50" r="50" fill="currentColor"/><path d="M77.7 78.5L22.3 78.5C21.8 78.5 21.5 78.2 21.5 77.7L21.5 22.3C21.5 21.8 21.8 21.5 22.3 21.5L77.7 21.5C78.2 21.5 78.5 21.8 78.5 22.3L78.5 77.7C78.5 78.2 78.2 78.5 77.7 78.5L77.7 78.5Z" fill="#0097BA"/><rect x="26.2" y="26.2" width="47.7" height="47.7" fill="#FFF"/><path d="M73.8 36.1L73.8 35.3 64.7 35.3 64.7 26.2 63.9 26.2 63.9 35.3 55.1 35.3 55.1 26.2 54.4 26.2 54.4 35.3 45.6 35.3 45.6 26.2 44.9 26.2 44.9 35.3 36.1 35.3 36.1 26.2 35.3 26.2 35.3 35.3 26.2 35.3 26.2 36.1 35.3 36.1 35.3 44.9 26.2 44.9 26.2 45.6 35.3 45.6 35.3 54.4 26.2 54.4 26.2 55.1 35.3 55.1 35.3 63.9 26.2 63.9 26.2 64.7 35.3 64.7 35.3 73.8 36.1 73.8 36.1 64.7 44.9 64.7 44.9 73.8 45.6 73.8 45.6 64.7 54.4 64.7 54.4 73.8 55.1 73.8 55.1 64.7 63.9 64.7 63.9 73.8 64.7 73.8 64.7 64.7 73.8 64.7 73.8 63.9 64.7 63.9 64.7 55.1 73.8 55.1 73.8 54.4 64.7 54.4 64.7 45.6 73.8 45.6 73.8 44.9 64.7 44.9 64.7 36.1 73.8 36.1 73.8 36.1 73.8 36.1ZM44.9 63.9L36.1 63.9 36.1 55.1 44.9 55.1 44.9 63.9 44.9 63.9ZM44.9 54.4L36.1 54.4 36.1 45.6 44.9 45.6 44.9 54.4 44.9 54.4ZM44.9 44.9L36.1 44.9 36.1 36.1 44.9 36.1 44.9 44.9 44.9 44.9ZM54.4 63.9L45.6 63.9 45.6 55.1 54.4 55.1 54.4 63.9 54.4 63.9ZM54.4 54.4L45.6 54.4 45.6 45.6 54.4 45.6 54.4 54.4 54.4 54.4ZM54.4 44.9L45.6 44.9 45.6 36.1 54.4 36.1 54.4 44.9 54.4 44.9ZM63.9 63.9L55.1 63.9 55.1 55.1 63.9 55.1 63.9 63.9 63.9 63.9 63.9 63.9ZM63.9 54.4L55.1 54.4 55.1 45.6 63.9 45.6 63.9 54.4 63.9 54.4 63.9 54.4ZM63.9 44.9L55.1 44.9 55.1 36.1 63.9 36.1 63.9 44.9 63.9 44.9 63.9 44.9Z" fill="#E6E9EE"/><g fill="#DD748A"><path d="M63 43.7L45.3 62 36.6 43 26.1 52.7 26.1 56.9 35.6 48.2 44.4 67.4 65.2 45.9 63 43.7Z"/><path d="M68.9 39.4L58.5 41.9 66.4 49.9 68.9 39.4Z"/></g></g></svg>
        <h3 class="service__title">Продвижение</h3>
        Занимаемся SEO оптимизацией, подбором ключевиков, рерайтингом, закупкой ссылок и многим другим.
        <a href="/services/seo.php" class="service__button">Подробнее</a>
      </section>
    </article>
    <article class="services">
      <section class="service">
        <svg class="service__svg" xmlns="http://www.w3.org/2000/svg" width="100" height="100" viewBox="0 0 100 100"><style>.design-a{fill:#94A5A6;}.design-b{fill:#DD748A;}</style><g fill="none"><circle cx="50" cy="50" r="50" fill="currentColor"/><path d="M51.8 70.9C50.8 70.9 50 70.1 50 69.1L50 57.1 15.9 47.8C15.2 47.6 14.6 46.9 14.6 46.1L14.6 29.3C14.6 28.3 15.5 27.5 16.5 27.5L83.5 27.5C84.5 27.5 85.3 28.3 85.3 29.3 85.3 30.3 84.5 31.1 83.5 31.1L18.2 31.1 18.2 44.7 52.2 54.1C53 54.3 53.5 55 53.5 55.8L53.5 69.1C53.5 70.1 52.7 70.9 51.8 70.9L51.8 70.9Z" fill="#BDC3C7"/><rect x="19.1" y="27.5" width="6.1" height="3.5" class="design-a"/><path d="M65.8 31.7C60.4 31.7 60.4 27.8 55 27.8 49.6 27.8 49.6 31.7 44.1 31.7 38.7 31.7 38.7 27.8 33.3 27.8 27.9 27.8 27.8 31.7 22.4 31.7 21.9 31.7 21.5 31.7 20.9 31.6L20.9 32C20.9 35.3 23.6 37.9 26.9 37.9L77.2 37.9C80.5 37.9 83 35.3 83 32L83 30.5C81.3 29.4 80 27.8 76.6 27.8 71.2 27.8 71.2 31.7 65.8 31.7L65.8 31.7Z" fill="#006780"/><path d="M77.2 20.3L26.9 20.3C23.6 20.3 20.9 22.9 20.9 26.2L20.9 31.6C21.5 31.7 21.9 31.7 22.4 31.7 27.8 31.7 27.9 27.8 33.3 27.8 38.7 27.8 38.7 31.7 44.1 31.7 49.5 31.7 49.6 27.8 55 27.8 60.4 27.8 60.4 31.7 65.8 31.7 71.2 31.7 71.2 27.8 76.6 27.8 80 27.8 81.3 29.4 83 30.5L83 26.2C83 22.9 80.5 20.3 77.2 20.3L77.2 20.3Z" fill="#0097BA"/><rect x="50" y="59.4" width="3.5" height="6.6" class="design-a"/><path d="M54 61.9L52 61.9 50.1 61.9C49 61.9 48 62.8 48 63.9L48 85.9C48 87 49 87.9 50.1 87.9L52 87.9 54 87.9C55.1 87.9 55.9 87 55.9 85.9L55.9 63.9C55.9 62.8 55.1 61.9 54 61.9L54 61.9Z" class="design-b"/><path d="M54 61.9L52 61.9 52 87.9 54 87.9C55.1 87.9 55.9 87 55.9 85.9L55.9 63.9C55.9 62.8 55.1 61.9 54 61.9L54 61.9Z" class="design-b"/></g></svg>
        <h3 class="service__title">Дизайн</h3>
        Придумываем уникальный дизайн или качественно подстраиваем под вас готовые шаблонные решения.
        <a href="/services/design.php" class="service__button">Подробнее</a>
      </section>
      <section class="service">
        <svg class="service__svg" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 100"><style>.advering-a{fill:#0097BA;}.advering-b{fill:#E5F2E6;}.advering-c{fill:#F3ED73;}.advering-d{fill:#996B39;}.advering-e{fill:#E3B071;}.advering-f{fill:#A6D0EE;}.advering-g{fill:#FFF;}.h{opacity:0.2;}</style><g fill="none"><circle cx="50" cy="50" r="50" fill="currentColor"/><path d="M58.5 67.7C58.5 66.1 57.6 64.7 56.5 64.7L49.9 64.7 49.9 100C49.9 100 50 100 50 100 51.5 100 53 99.9 54.5 99.8L54.5 73.2C54.5 73.2 58.5 69.4 58.5 67.7L58.5 67.7Z" fill="#A6D0EE"/><path d="M49.9 64.7L43.4 64.7C42.2 64.7 41.3 66.1 41.3 67.7 41.3 69.4 45.3 73.2 45.3 73.2L45.3 99.8C46.8 99.9 48.4 100 49.9 100L49.9 64.7 49.9 64.7Z" class="advering-a"/><g class="advering-b"><path d="M29.3 25C28.7 25 28.3 25.4 28.3 26L28.3 57.1C28.9 57.4 29.6 57.8 30.3 58.2L30.3 26C30.3 25.4 29.8 25 29.3 25L29.3 25Z"/><path d="M70.5 25C70 25 69.5 25.4 69.5 26L69.5 58.3C70.2 57.9 70.9 57.6 71.5 57.2L71.5 26C71.5 25.4 71.1 25 70.5 25L70.5 25Z"/><path d="M49.9 25C49.4 25 48.9 25.4 48.9 26L48.9 60.5C49.2 60.5 49.6 60.6 49.9 60.6 50.2 60.6 50.6 60.5 50.9 60.5L50.9 26C50.9 25.4 50.5 25 49.9 25L49.9 25Z"/></g><rect x="16.8" y="30.9" width="65.4" height="35.6" fill="#A2D4DE"/><path d="M46.3 50C60 49.3 72.6 49.9 82 52.3L82 51.5C73.7 49.3 62.5 48.2 50.1 48.2 36.9 48.2 25 49.5 16.6 52.1L16.6 54.8C24 52.3 34.5 50.7 46.3 50L46.3 50Z" fill="#69C6D4"/><path d="M50.1 51.8C62.5 51.8 73.7 52.8 82 55.1L82 52.3C72.6 49.9 60 49.3 46.3 50 34.5 50.7 24 52.3 16.6 54.8L16.6 55.6C25 53 36.9 51.8 50.1 51.8L50.1 51.8Z" fill="#70BFC8"/><path d="M16.6 55.6L16.6 56.1C25.8 53.7 38.4 52.9 52.1 53.5 63.9 54 74.4 55.4 82 57.8L82 55.1C73.7 52.8 62.5 51.8 50.1 51.8 36.9 51.8 25 53 16.6 55.6L16.6 55.6Z" class="advering-c"/><path d="M46.9 56.4C60.1 55.4 72.5 55.8 82 57.9L82 57.8C74.4 55.4 63.9 54 52.1 53.5 38.4 52.9 25.8 53.7 16.6 56.1L16.6 61.4C18.4 60.9 20.3 60.5 22.3 60.2 29 58.3 37.5 57.1 46.9 56.4L46.9 56.4Z" fill="#F3EA83"/><path d="M82 62.2L82 57.9C72.5 55.8 60.1 55.4 46.9 56.4 37.5 57.1 29 58.3 22.3 60.2 29.7 58.8 38.7 58.2 48.3 58.2 61.6 58.3 73.6 59.6 82 62.2L82 62.2Z" fill="#E7DD7F"/><g class="advering-c"><path d="M22.3 60.2C20.2 60.5 18.4 60.9 16.6 61.4L16.6 62C18.3 61.4 20.2 60.7 22.3 60.2L22.3 60.2Z"/><path d="M48.3 58.2C38.7 58.2 29.7 58.8 22.3 60.2 20.2 60.7 18.3 61.4 16.6 62L16.6 66.6 82 66.6 82 62.2C73.6 59.6 61.6 58.3 48.3 58.2L48.3 58.2Z"/></g><path d="M82.9 68.1L16 68.1C15.3 68.1 14.8 67.5 14.8 66.9L14.8 30.5C14.8 29.8 15.3 29.3 16 29.3L82.9 29.3C83.6 29.3 84.1 29.8 84.1 30.5L84.1 66.9C84.1 67.5 83.6 68.1 82.9 68.1L82.9 68.1ZM17.2 65.7L81.8 65.7 81.8 31.6 17.2 31.6 17.2 65.7 17.2 65.7Z" class="advering-a"/><path d="M67.1 56.6C66.9 56.6 66.8 56.5 66.8 56.4L65.5 51.7C65.4 51.6 65.5 51.4 65.6 51.4 65.8 51.4 65.9 51.4 65.9 51.6L67.3 56.3C67.3 56.4 67.3 56.6 67.1 56.6 67.1 56.6 67.1 56.6 67.1 56.6L67.1 56.6Z" class="advering-d"/><path d="M59.8 60.7C59.8 60.7 59.7 60.7 59.7 60.7 59.5 60.6 59.5 60.4 59.6 60.3L69.8 44.8C69.9 44.6 70.1 44.6 70.2 44.7 70.3 44.8 70.3 44.9 70.2 45L60 60.6C60 60.7 59.9 60.7 59.8 60.7L59.8 60.7Z" class="advering-e"/><g class="advering-d"><path d="M74.1 58.5C74 58.5 73.9 58.5 73.9 58.4L69.7 45C69.7 44.9 69.8 44.8 69.9 44.7 70 44.7 70.2 44.8 70.2 44.9L74.4 58.2C74.4 58.3 74.3 58.5 74.2 58.5 74.2 58.5 74.2 58.5 74.1 58.5L74.1 58.5Z"/><path d="M74.8 58.7C74.7 58.7 74.7 58.7 74.7 58.7L66.8 56.7C66.7 56.6 66.6 56.5 66.6 56.4 66.7 56.2 66.8 56.1 66.9 56.2L74.8 58.2C75 58.2 75 58.4 75 58.5 75 58.6 74.9 58.7 74.8 58.7L74.8 58.7Z"/></g><path d="M74.1 58.5C74.1 58.5 74.1 58.5 74.1 58.5L66.7 56.9C66.5 56.8 66.4 56.7 66.5 56.6 66.5 56.4 66.6 56.3 66.8 56.4L74.2 58C74.3 58.1 74.4 58.2 74.4 58.3 74.4 58.4 74.3 58.5 74.1 58.5L74.1 58.5Z" fill="#AA7243"/><g fill="#B17B48"><path d="M67.8 62.4C67.8 62.4 67.7 62.4 67.7 62.4L59.8 60.3C59.7 60.3 59.6 60.1 59.7 60 59.7 59.9 59.8 59.8 60 59.8L67.8 61.9C68 61.9 68.1 62 68 62.2 68 62.3 67.9 62.4 67.8 62.4L67.8 62.4Z"/><path d="M67.2 57C67.1 57 67.1 57 67.1 57L59.8 55.1C59.7 55.1 59.6 55 59.6 54.8 59.6 54.7 59.8 54.6 59.9 54.7L67.2 56.5C67.4 56.5 67.4 56.7 67.4 56.8 67.4 56.9 67.3 57 67.2 57L67.2 57Z"/></g><path d="M69.7 45.3C67.5 54.4 63.3 55.2 61.2 55L60 54.7 59.9 55.2 66.4 56.8 66.7 56.4 71 57.4C75.9 56.1 76.8 46.2 76.8 46.2L69.7 45.3 69.7 45.3Z" fill="#D1E8F8"/><g class="advering-f"><path d="M65.4 56.5L66.4 56.8 66.7 56.4 71 57.4C75.9 56.1 76.8 46.2 76.8 46.2L75.2 46C75 58.7 65.4 56.5 65.4 56.5L65.4 56.5Z"/><path d="M69.7 45.3C67.5 54.4 63.3 55.2 61.2 55L60 54.7 59.9 55.2 61.4 55.6C61.4 55.6 68.4 57.4 71.1 45.5L69.7 45.3 69.7 45.3Z"/></g><path d="M67.4 62.9C67.4 62.9 67.4 62.9 67.3 62.9 67.2 62.8 67.2 62.7 67.2 62.5L76.8 45.8C76.9 45.7 77 45.7 77.1 45.7 77.3 45.8 77.3 46 77.2 46.1L67.7 62.8C67.6 62.9 67.5 62.9 67.4 62.9L67.4 62.9Z" class="advering-e"/><path d="M72.5 45.7L73.9 45.8C73.9 45.8 73.4 56.7 64.4 56.3L63.1 56C63.1 56 71.5 56.1 72.5 45.7L72.5 45.7Z" class="advering-f"/><circle cx="26.8" cy="40" r="5.2" fill="#F8D12E"/><circle cx="27" cy="39.8" r="4" fill="#F8D958"/><g class="advering-g"><path d="M61.1 64.2L38.8 64.2 44.8 25.5 55.1 25.5 61.1 64.2Z" class="h"/><path d="M61.1 64.2L44.8 25.5 55.1 25.5 61.1 64.2Z" class="h"/><path d="M38.8 64.2L44.8 25.5 55.1 25.5 38.8 64.2Z" class="h"/></g><g class="advering-g"><path d="M83.3 62.5L59.4 62.5 65.4 25.5 75.7 25.5 83.3 62.5Z" class="h"/><path d="M83.3 62.5L65.4 25.5 75.7 25.5 83.3 62.5Z" class="h"/><path d="M59.4 62.5L65.4 25.5 75.7 25.5 59.4 62.5Z" class="h"/></g><g class="advering-g"><path d="M40.4 62.5L15.6 62.5 24.1 25.5 34.4 25.5 40.4 62.5Z" class="h"/><path d="M40.4 62.5L24.1 25.5 34.4 25.5 40.4 62.5Z" class="h"/><path d="M15.6 62.5L24.1 25.5 34.4 25.5 15.6 62.5Z" class="h"/></g></g></svg>
        <h3 class="service__title">Реклама</h3>
        Ведем рекламные компании в Яндекс.Директе и Google AdWords, занимаемся Social media marketing продвижением.
        <a href="/services/advertising.php" class="service__button">Подробнее</a>
      </section>
    </article>
  </main>
<?php
  require_once($_SERVER["DOCUMENT_ROOT"]."/templates/footer.php");
?>
