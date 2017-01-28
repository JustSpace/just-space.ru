<?php
  require_once($_SERVER["DOCUMENT_ROOT"]."/templates/doc_head.php");
?>
<body>
  <header class="header header--2div3 header--vnutrennyaya-optimizaciya">
    <div class="header__mask"></div>
    <nav class="navigation">
      <a href="javascript:void(0)" class="hamburger">
        <span class="hamburger__line"></span>
        <span class="hamburger__line"></span>
        <span class="hamburger__line"></span>
      </a>
      <a href="/index.php" class="navigation__logo">Just Space</a>
      <a href="/blog.php" class="navigation__section navigation__section--link">Блог</a>
    </nav>
  </header>
  <?php
    require_once($_SERVER["DOCUMENT_ROOT"]."/templates/sidebar.php");
  ?>
  <main class="main">
    <article class="article">
      <h2 class="article__title">
        Советы по SEO продвижению сайта
      </h2>
      <div class="article__paragraph">
        Давно ловил себя на мысли, что было бы здорово иметь определенный чек-лист в который можно заглянуть и понять что еще нужно сделать. Поэтому решил собственноручно перечислить основные моменты в одном месте, собственно этим чек-листом и является эта статья.
      </div>
      <div class="article__paragraph">
        Первое с чем мы сталкиваемся это индексация сайта, если ничего не предпринять самому, то сайт может индексироваться много месяцев пока не обрастет в достаточной мере внешними ссылками. Нам же надо ускорить индексацию настолько насколько возможно, и для этого мы должны сделать следующее:
        <ul>
          <li>
            - Напрямую написать в <a href="https://webmaster.yandex.ru/addurl.xml" target="_black">Яндекс</a> и <a href="https://www.google.com/webmasters/tools/submit-url" target="_black">Google</a>, так называемый addURL;
          </li>
          <li>
            - Разместить свой сайт на как можно большем количестве сторонник площадках: справочниках, каталогах, блогах и т.д. (<a href="https://yandex.ru/yaca/" target="_black">Яндекс.Каталог</a>, <a href="https://sprav.yandex.ru/" target="_black">Яндекс.Справочник</a>, <a href="https://www.dmoz.org" target="_black">DMOZ</a>)
          </li>
        </ul>
      </div>
      <div class="article__paragraph">
        После того как мы добавили сайт в очередь на индексацию необходимо заняться SEO оптимизацией. Оптимизация делится на два типа: внутренняя (уникальность контента, мета-теги и заголовки, поведенческие факторы, качественная разметка, скорость загрузки) и внешняя (тИЦ и PR).
      </div>
      <div class="article__paragraph">
        Ниже я попытаюсь тезисно описать все основные шаги по внутренней оптимизации, о внешней поговорим в следующей статье.
      </div>
      <div class="article__paragraph">
        <strong>Оптимизация текста</strong>
        <ul>
          <li>
            - Каждая страница должна быть заточена под определенные ключевую фразу и семантически соответствовать ей;
          </li>
          <li>
            - Не должен происходить каннибализм, каждая страница должна быть заточена под уникальные (в рамках сайта) ключевые слова;
          </li>
          <li>
            - Необходимо создавать уникальный контент для сайта, не ниже 90% уникальности;
          </li>
          <li>
            - Приводим весь текст к должному виду: следим за значением тошнотности, текст должен легко читаться (разбиваем на абзацы и выбираем подходящий шрифт).
          </li>
        </ul>
      </div>
      <div class="article__paragraph">
        <strong>Оптимизация заголовков</strong>
        <ul>
          <li>
            - Обязательно на каждой странице должен присутствовать заголовок h1 в <span class="article__marker article__marker--important">единственном экземпляре</span>, включающий в себя ключевую фразу;
          </li>
          <li>
            - Сохраняем вложенность заголовков (h1>h2>h3>…), то есть h1 всегда первый на странице среди всех заголовков, значимость заголовков для ПС уменьшается в порядке от h1 до h6;
          </li>
          <li>
            - По возможности не используем дополнительные теги внутри тегов заголовков.
          </li>
        </ul>
      </div>
      <div class="article__paragraph">
        <strong>Оптимизация изображений</strong>
        <ul>
          <li>
            - Задаем атрибуты alt и по возможности title. Тег alt отображает информацию при выключенном отображение картинок и позволяет поисковым системам эффективней проводить поиск по изображениям;
          </li>
          <li>
            - Оптимизируем изображение, удобный <a href="https://tinypng.com" target="_black">сайт</a> для этого;
          </li>
          <li>
            - По возможности используем уникальные картинки, так поисковые системы будут лучше ранжировать изображения с вашего сайта, а следовательно и ваш сайт.
          </li>
        </ul>
      </div>
      <div class="article__paragraph">
        <strong>Оптимизация кода</strong>
        <ul>
          <li>
            - Проверяем валидность разметки по стандарту <a href="https://validator.w3.org/" target="_black">W3C</a>;
          </li>
          <li>
            - Стараемся подключать как можно меньше сторонних файлов и библиотек, т.к. они увеличивают время загрузки;
          </li>
          <li>
            - Минифицируем все файлы CSS и JavaScript, для увеличения скорость загрузки;
          </li>
          <li>
            - Размещаем весь JavaScript внизу страницы и используем атрибут defer, чтобы не блокировать отрисовку страницы;
          </li>
          <li>
            - Стараемся не применять inline-скрипты, запрещенные/устаревшие теги, большие уровни вложенности.
          </li>
        </ul>
      </div>
      <div class="article__paragraph">
        <strong>Оптимизация стилей</strong>
        <ul>
          <li>
            - Важные элементы выделяем тегами strong и em, главное не переспамить. Не обязательно strong быть жирным или em быть курсивом, в первую очередь эти теги имеют семантическое значение и нужны для голосовых читалок;
          </li>
          <li>
            - Все заголовки h1-h6 должны визуально отличаться по стилю (размером).
          </li>
        </ul>
      </div>
      <div class="article__paragraph">
        <strong>Оптимизация meta тегов</strong>
        <ul>
          <li>
            - Обязательно на каждой странице должен быть задан уникальный тег title и meta теги description и keywords включающие в себя ключевые фразы;
          </li>
          <li>
            - Проверяем максимальную длину тегов: title - 60 символов, description - 170 символов, keywords - 200 символов;
          </li>
          <li>
            - Тег title и заголовок h1 должны быть семантически идентичны;
          </li>
          <li>
            - Если используем стоп-символы, то необходимо учитывать, что ПС разбивают заголовок на части по этому стоп-символу;
          </li>
          <li>
            - Тег keywords разделяем только запятыми и не заспамляем ключевыми словами, не нужно писать в разных склонения, все пишем в инфинитиве.
          </li>
        </ul>
      </div>
      <div class="article__paragraph">
        <strong>Оптимизация URL</strong>
        <ul>
          <li>
            - Используя транслит для URL, можно повысить позиции в поисковой выдаче;
          </li>
          <li>
            - Название URL, ведущего на определенную страницу, должен соответствовать тематике этой странице;
          </li>
          <li>
            - По возможности не делаем большую глубину вложенности (не больше 3).
          </li>
        </ul>
      </div>
      <div class="article__paragraph">
        <strong>Оптимизация ошибок</strong>
        <ul>
          <li>
            - Обязательно наличие всех основных страниц ошибок (401, 403, 404, 405, 500);
          </li>
          <li>
            - Все страницы должны отдавать соответствующий header;
          </li>
          <li>
            - На каждой странице ошибки должна быть ссылка на главную страницу сайта.
          </li>
        </ul>
      </div>
      <div class="article__paragraph">
        <strong>Прочее</strong>
        <ul>
          <li>
            - На сайте обязательно должны присутствовать валидные robots и sitemap;
          </li>
          <li>
            - По возможности выполнить все пункты в <a href="https://developers.google.com/speed/pagespeed/insights/?hl=ru" target="_black">PageSpeed Insights</a>.
          </li>
        </ul>
      </div>
      <div class="article__paragraph">
        После выполнения всех пунктов можно приступить к внешней оптимизации сайта, о ней мы поговорим в следующей статье.
      </div>
      <div class="article__footer">
        <div class="article__date">
          23 января, 2017
        </div>
        <div class="article__share">
          <?php
            require_once($_SERVER["DOCUMENT_ROOT"]."/templates/yandex.social_icon.php");
          ?>
        </div>
        <div class="clear"></div>
      </div>
    </article>
  </main>
<?php
  require_once($_SERVER["DOCUMENT_ROOT"]."/templates/footer.php");
?>