<?php
  class Meta{
    public $titleEnd = " | Digital-агентство Just Space"; //31 chars

    public function GetTitle($UrlPhpSelf){
      switch($UrlPhpSelf){
        case '/index.php':
          return "Создаем сайты и мобильные приложения" . $this->titleEnd; // 69 chars
        case '/design.php':
          return "Дизайн веб страниц и мобильных приложений" . $this->titleEnd; // 71 chars
        case '/develop.php':
          return "Разработка сайтов и мобильных приложений" . $this->titleEnd; // 70 chars
        case '/seo.php':
          return "SEO продвижение сайтов и мобильных приложений" . $this->titleEnd; // 75 chars
        case '/services.php':
          return "Создание и продвижение сайтов и мобильных приложений" . $this->titleEnd; // 82 chars
        case '/portfolio.php':
          return "Наше портфолио в создание сайтов и приложений" . $this->titleEnd; // 76 chars
        case '/blog.php':
          return "Узнайте о Just Space больше на страницах нашего блога" . $this->titleEnd; // 83 chars
        case '/vacancies.php':
          return "Присоединяйтесь к нашей команде" . $this->titleEnd; // 60 chars
        case '/contacts.php':
          return "Свяжитесь с нами для дальнейшего сотрудничества" . $this->titleEnd; // 76 chars

        case '/portfolio/domotoplenya.php':
          return "Контекстная-реклама для ДомОтопления" . $this->titleEnd;
        case '/portfolio/sportlifting.php':
          return "SEO-оптимизация для SportLifting" . $this->titleEnd;
        case '/portfolio/gazeltraffic.php':
          return "Создание сайта с нуля для Gazel-Traffic" . $this->titleEnd;
        case '/portfolio/doly-tula.php':
          return "Создание сайта с нуля для ТЦН" . $this->titleEnd;
        default:
          return "Создаем сайты и мобильные приложения" . $this->titleEnd;
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
          # code...
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
          # code...
          return "Мы создаем сайты | Just Space";
      }
    }

  }
?>
