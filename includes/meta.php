<?php
  class Meta{
    public $titleEnd = " | Digital-агентство Just Space"; //31 chars

    public function GetTitle($UrlPhpSelf){
      switch($UrlPhpSelf){

        // /
        case '/index.php':
          return "Разрабатываем сайты и мобильные приложения" . $this->titleEnd; // 69 chars
        case '/services.php':
          return "Создание и продвижение сайтов и мобильных приложений" . $this->titleEnd; // 82 chars
        case '/portfolio.php':
          return "Наше портфолио в создание сайтов и приложений" . $this->titleEnd; // 76 chars
        case '/blog.php':
          return "Блог о разработке и не только" . $this->titleEnd;
        case '/vacancies.php':
          return "Присоединяйтесь к нашей команде" . $this->titleEnd; // 60 chars
        case '/contacts.php':
          return "Закажите создания сайта или приложения" . $this->titleEnd; // 76 chars
        case '/tools.php':
          return "Инструментарий" . $this->titleEnd; // 76 chars

        // /SERVICES/
        case '/services/advertising.php':
          return "Контекстная реклама и Social media marketing" . $this->titleEnd;
        case '/services/design.php':
          return "Разрабатываем дизайн сайтов и приложений" . $this->titleEnd;
        case '/services/mobile_develop.php':
          return "Разработка мобильных приложений на iOS и Android" . $this->titleEnd;
        case '/services/seo.php':
          return "SEO продвижение сайтов и мобильных приложений" . $this->titleEnd; // 75 chars
        case '/services/web_develop.php':
          return "Разработка отзывчивых и адаптивных сайтов" . $this->titleEnd;

        // /PORTFOLIO/
        case '/portfolio/domotoplenya.php':
          return "Контекстная реклама для лендинга" . $this->titleEnd;
        case '/portfolio/sportlifting.php':
          return "Техническая поддержка и SEO оптимизация интернет-магазина" . $this->titleEnd;
        case '/portfolio/gazeltraffic.php':
          return "Создание сайта лендинга под ключ" . $this->titleEnd;
        case '/portfolio/doly-tula.php':
          return "Создание сайта визитки под ключ" . $this->titleEnd;
        case '/portfolio/justspaceshoot.php':
          return "Создание 8-ми битной мобильной игры" . $this->titleEnd;
        case '/portfolio/tulskayakvartirka.php':
          return "Создание типового корпоративного сайта" . $this->titleEnd;

        // /BLOG/
        case '/blog/jqueryin2017.php':
          return "Стоит ли в 2017 году использовать jQuery?" . $this->titleEnd;

        // UNDEFINED
        default:
          return "Digital-агентство Just Space" . $this->titleEnd;
      }
    }

    public function GetDesc($UrlPhpSelf){
      switch($UrlPhpSelf){
        case '/index.php':
          return "Разрабатываем и продвигаем сайты и мобильные приложения, обеспечиваем высокий уровень качества, имеем своих представителей в Москве и Туле";
        case '/design.php':
        return "Разрабатываем уникальный дизайн для сайтов, мобильных приложений, а также для любой полиграфической продукции";
        case '/develop.php':
          return "Мы занимаемся созданием сайтов, а также обеспечиваем техническую поддержку готовых решений";
        case '/seo.php':
          return "Предоставляем SEO продвижение и оптимизацию сайтов для посиковых систем, контекстную рекламу и все виды продвижения сайтов в сети";
        case '/portfolio/domotoplenya.php':
          return "Domotople";
        case '/portfolio/sportlifting.php':
          return "SportLifting";
        default:
          return "Мы создаем сайты | Just Space";
      }
    }

    public function GetKey($UrlPhpSelf){
      switch($UrlPhpSelf){
        case '/index.php':
          return "веб студия, создание сайтов, сайт визитка, разработка сайтов, создать интернет магазин, создание сайта визитки, продвижение сайтов, дизайн сайта, веб сайт, создать визитку, создание сайта цена, создать сайт быстро, раскрутка сайта, оптимизация сайта, seo продвижение, поисковое продвижение, поисковая оптимизация, продвинуть сайт, контекстная реклама, seo сайта, сео продвижение, seo продвижение сайта, продвижение сайта цена, продвижение веб сайтов, заказать продвижение сайта, стоимость продвижения сайта, качественное продвижение сайтов";
        case '/design.php':
          return "веб студия, веб дизайн, шаблоны сайтов, разработка сайтов, создание сайтов, дизайн студия, сайт дизайнера, разработать дизайн, создать макет, web дизайн, красивый дизайн сайта, дизайн сайта цена, хороший дизайн, создать визитку, дизайн сайта, заказать дизайн сайта, веб дизайн сайтов, дизайн сайта Тула, создание дизайна сайта, дизайн интернет сайта";
        case '/develop.php':
          return "веб студия, создание сайтов, сайт визитка, разработка сайтов, создать интернет магазин, создание сайта визитки, веб сайт, создание сайта цена, создать сайт быстро, оптимизация сайта";
        case '/seo.php':
          return "веб студия, продвижение сайтов, раскрутка сайта, оптимизация сайта, разработка сайтов, seo продвижение, поисковое продвижение, поисковая оптимизация, продвинуть сайт, контекстная реклама, seo сайта, сео продвижение, seo продвижение сайта, продвижение сайта цена, продвижение веб сайтов, заказать продвижение сайта, стоимость продвижения сайта, качественное продвижение сайтов";
        case '/portfolio/domotoplenya.php':
          return "Domotople";
        case '/portfolio/sportlifting.php':
          return "SportLifting";
        default:
          return "Мы создаем сайты | Just Space";
      }
    }

  }
?>
