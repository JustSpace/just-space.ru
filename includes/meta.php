<?php
  class Meta{
    const TITLE_END = ' | Just Space';
    const MAX_TITLE_LENGTH = 75;
    const MAX_DESCRIPTION_LENGTH = 150;
    const MAX_KEYWORDS_LENGTH = 200;
    const STRING_MAX_WARNING = "Exceeded the maximum length of the string";
    private $UrlPhpSelf;

    public function __construct($UrlPhpSelf){
      $this->UrlPhpSelf = $UrlPhpSelf;
    }

    public function GetTitle(){
      $str = $this->ChooseTitle();
      if($this->LengthWarning($str, $this::MAX_TITLE_LENGTH)){
        $this->WriteLog($this::STRING_MAX_WARNING . " (" . (mb_strlen($str,'UTF-8')  - $this::MAX_TITLE_LENGTH) . " chars)");
      }
      return $str;
    }

    public function GetDescription(){
      $str = $this->ChooseDescription();
      if($this->LengthWarning($str, $this::MAX_DESCRIPTION_LENGTH)){
        $this->WriteLog($this::STRING_MAX_WARNING . " (" . (mb_strlen($str,'UTF-8')  - $this::MAX_DESCRIPTION_LENGTH) . " chars)");
      }
      return $str;
    }

    public function GetKeywords(){
      $str = $this->ChooseKeywords();
      if($this->LengthWarning($str, $this::MAX_KEYWORDS_LENGTH)){
        $this->WriteLog($this::STRING_MAX_WARNING . " (" . (mb_strlen($str,'UTF-8')  - $this::MAX_KEYWORDS_LENGTH) . " chars)");
      }
      return $str;
    }

    private function LengthWarning($str, $len){
      if(mb_strlen($str,'UTF-8') > $len){
        return true;
      }
      return false;
    }

    private function WriteLog($warning){
      $file = fopen($_SERVER["DOCUMENT_ROOT"] . "/logs/logs.txt", "a+");
      fwrite($file, debug_backtrace()[1]["function"] . " is warning about '". $warning ."' in the " . $_SERVER["PHP_SELF"] . "\n");
    }

    private function ChooseTitle(){
      switch($this->UrlPhpSelf){

        // /
        case '/index.php':
          return "Разрабатываем сайты и мобильные приложения" . $this::TITLE_END;
        case '/services.php':
          return "Создание и продвижение сайтов и мобильных приложений" . $this::TITLE_END;
        case '/portfolio.php':
          return "Наше портфолио в создание сайтов и приложений" . $this::TITLE_END;
        case '/blog.php':
          return "Блог о разработке и не только" . $this::TITLE_END;
        case '/vacancies.php':
          return "Присоединяйтесь к нашей команде" . $this::TITLE_END;
        case '/contacts.php':
          return "Закажите создания сайта или приложения" . $this::TITLE_END;
        case '/tools.php':
          return "Инструментарий" . $this::TITLE_END;

        // /SERVICES/
        case '/services/advertising.php':
          return "Контекстная реклама и Social media marketing" . $this::TITLE_END;
        case '/services/design.php':
          return "Разрабатываем дизайн сайтов и приложений" . $this::TITLE_END;
        case '/services/mobile_develop.php':
          return "Разработка мобильных приложений на iOS и Android" . $this::TITLE_END;
        case '/services/seo.php':
          return "SEO продвижение сайтов и мобильных приложений" . $this::TITLE_END;
        case '/services/web_develop.php':
          return "Разработка отзывчивых и адаптивных сайтов" . $this::TITLE_END;

        // /PORTFOLIO/
        case '/portfolio/domotoplenya.php':
          return "Контекстная реклама для лендинга" . $this::TITLE_END;
        case '/portfolio/sportlifting.php':
          return "Техническая поддержка и SEO оптимизация интернет-магазина" . $this::TITLE_END;
        case '/portfolio/gazeltraffic.php':
          return "Создание сайта лендинга под ключ" . $this::TITLE_END;
        case '/portfolio/doly-tula.php':
          return "Создание сайта визитки под ключ" . $this::TITLE_END;
        case '/portfolio/justspaceshoot.php':
          return "Создание 8-ми битной мобильной игры" . $this::TITLE_END;
        case '/portfolio/tulskayakvartirka.php':
          return "Создание типового корпоративного сайта" . $this::TITLE_END;

        // /BLOG/
        case '/blog/jqueryin2017.php':
          return "Стоит ли в 2017 году использовать jQuery?" . $this::TITLE_END;

        // UNDEFINED
        default:
          return "Digital-агентство Just Space" . $this::TITLE_END;
      }
    }

    public function ChooseDescription(){
      switch($this->UrlPhpSelf){

        // /
        case '/index.php':
          return "Мы создаем, поддерживаем и дорабатываем высокотехнологичные проекты (от небольших сайтов до масштабных клиент-серверных приложений)";
        case '/services.php':
          return "Занимается созданием, оптимизацией и SEO продвижением сайтов и мобильных приложений, разрабатываем дизайн и создаем рекламные кампании";
        case '/portfolio.php':
          return "Наше портфолио в создание сайтов и приложений";
        case '/blog.php':
          return "";
        case '/vacancies.php':
          return "Присоединяйтесь к нашей команде";
        case '/contacts.php':
          return "Закажите создания сайта или приложения";
        case '/tools.php':
          return "Инструментарий";

        // /SERVICES/
        case '/services/advertising.php':
          return "Контекстная реклама и Social media marketing";
        case '/services/design.php':
          return "Разрабатываем дизайн сайтов и приложений";
        case '/services/mobile_develop.php':
          return "Разработка мобильных приложений на iOS и Android";
        case '/services/seo.php':
          return "SEO продвижение сайтов и мобильных приложений";
        case '/services/web_develop.php':
          return "Разработка отзывчивых и адаптивных сайтов";

        // /PORTFOLIO/
        case '/portfolio/domotoplenya.php':
          return "Контекстная реклама для лендинга";
        case '/portfolio/sportlifting.php':
          return "Техническая поддержка и SEO оптимизация интернет-магазина";
        case '/portfolio/gazeltraffic.php':
          return "Создание сайта лендинга под ключ";
        case '/portfolio/doly-tula.php':
          return "Создание сайта визитки под ключ";
        case '/portfolio/justspaceshoot.php':
          return "Создание 8-ми битной мобильной игры";
        case '/portfolio/tulskayakvartirka.php':
          return "Создание типового корпоративного сайта";

        // /BLOG/
        case '/blog/jqueryin2017.php':
          return "Стоит ли в 2017 году использовать jQuery?";

        // UNDEFINED
        default:
          return "Digital-агентство Just Space";
      }
    }

    public function ChooseKeywords(){
      switch($this->UrlPhpSelf){
        // /
        case '/index.php':
          return "just space, веб студия, digital агентство, создание сайта, создание мобильного приложения, продвижение сайта, продвижение мобильного приложения, дизайн сайта, дизайн мобильного приложения, реклама";
        case '/services.php':
          return "создание сайта, создание мобильного приложения, продвижение сайта, продвижение мобильного приложения, дизайн сайта, дизайн мобильного приложения, реклама";
        case '/portfolio.php':
          return "разработка лендинга, создание интернет-магазина, разработка мобильного приложения, продвижение сайта, разработка дизайна, контекстная реклама";
        case '/blog.php':
          return "just space, веб студия, digital агентство, блог компании, веб технологии";
        case '/vacancies.php':
          return "just space, веб студия, digital агентство, работа в компании, вакансия, стажировка";
        case '/contacts.php':
          return "just space, веб студия, digital агентство, телефон, адрес, почта, социальная сеть";
        case '/tools.php':
          return "just space, веб студия, digital агентство, инструменты компании, framework, разработка";

        // /SERVICES/
        case '/services/advertising.php':
          return "контекстная реклама, social media marketing, реклама, smm, smo";
        case '/services/design.php':
          return "дизайн сайта, дизайн мобильного приложения, веб-дизайн, полиграфический дизайн, брендинг, корпоративный дизайн";
        case '/services/mobile_develop.php':
          return "создание мобильного приложения, разработка мобильного приложения, разработка под ios, разработка под android";
        case '/services/seo.php':
          return "seo, продвижение, продвижние сайта, продвижение мобильного приложения, ключевые слова, сео, оптимизация";
        case '/services/web_develop.php':
          return "создание сайта, разработка сайта, адаптивный сайт, отзывчивый сайт, доступный сайт, cms";

        // /PORTFOLIO/
        case '/portfolio/domotoplenya.php':
          return "лендинг, контекстная реклама, яндекс директ";
        case '/portfolio/sportlifting.php':
          return "техническая поддержка, seo, продвижение, оптимизация";
        case '/portfolio/gazeltraffic.php':
          return "создание лендинга, seo, продвижение, оптимизация, копирайт";
        case '/portfolio/doly-tula.php':
          return "создание сайта визитки, seo, продвижение, оптимизация, копирайт";
        case '/portfolio/justspaceshoot.php':
          return "создание мобильного приложения, продвижение, оптимизация";
        case '/portfolio/tulskayakvartirka.php':
          return "создание корпоративного сайта, типовое решение";

        // /BLOG/
        case '/blog/jqueryin2017.php':
          return "just space, блог компании, jquery, framework";

        // UNDEFINED
        default:
          return "Digital-агентство Just Space";
      }
    }

  }
?>
