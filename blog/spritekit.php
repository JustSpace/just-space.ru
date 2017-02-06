<?php
  require_once($_SERVER["DOCUMENT_ROOT"]."/templates/doc_head.php");
?>
<body>
  <header class="header header--2div3 header--spritekit">
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
        Обзор решений в разработке игры на движке Sprite Kit
      </h2>
      <div class="article__paragraph">
        С появлением iOS 7 мир узрел новый игровой движок от Apple — SpriteKit. В свете того, что появился он недавно об этом движке мало что написано и по этому мы решили написать небольшой обзор наших решений.
        <br>
        Мы не будем описывать процесс создания и настройки игровой сцены или объектов, а постараемся остановиться на более интересных моментах.
      </div>
      <div class="article__paragraph">
        Обратим внимание на некоторые файлы и посмотрим, что в них располагается.
        <br>
        <strong>GameViewController</strong> – происходит инициализация сцены.
        <br>
        <strong>GameScene</strong> – наша основная сцена на которой будут происходить все события, никто не ограничивает нас создавать и другие сцены.
        <br>
        <strong>AppDelegate</strong> – делегат нашего проекта, может понадобится для обработки событий. Например ставить на паузу игру, при сворачивании или входящем звонке.
      </div>
      <div class="article__paragraph">
        Для наполнения сцены объектами требуется создать экземпляр класса нашего объекта. Рекомендуется выносить объекты в отдельные классы, дабы не нагромождать основной файл сцены большим количеством настроек каждого объекта. Основные свойства объекта можно прописать при инициализации, а действия вынести в методы созданного класса.
        О многообразии объектов и их свойствах довольно много информации, поэтому на этом мы решили не останавливаться.
      </div>
<pre class="article__code">
import SpriteKit
class Shot: SKSpriteNode {
    init(image1: UIImage){
        //Настройка свойств
    }
    required init?(coder aDecoder: NSCoder) {
        super.init(coder: aDecoder)
    }
    func Position(_ x1: CGPoint)->CGPoint{
        position = CGPoint(x: x1.x, y: x1.y+100)
        return(position)
    }
}
</pre>
      <div class="article__paragraph">
        Для того чтобы добавить данный объект на сцену мы создаем экземпляр класса в методе нашей GameScene:
      </div>
<pre class="article__code">
override func didMove(to view: SKView) {
  let shut: Shot = Shot(image1: imageShoot[number_shut]!)
  shut.Position(player.position)
  self.addChild(shut)
}
</pre>
      <div class="article__paragraph">
        Если нам требуется, чтобы объект создавался периодически, можно воспользоваться таймером. Инициализируем таймер в методе didMove:
      </div>
      <span class="article__code">
      let gun = Timer.scheduledTimer(timeInterval: 0.6, target: self, selector: #selector(method), userInfo: nil, repeats: true)
      </span>
      <div class="article__paragraph">
        Нам потребуется задать как часто мы будем вызывать метод (timeInterval), какой метод будем вызывать(method) и разрешить повторения (repeats: true). Далее остается лишь поместить инициализацию и добавление спрайта в требуемый метод:
      </div>
<pre class="article__code">
func method(){
  let shut: Shot = Shot(image1: imageShoot[number_shut]!)
  shut.Position(player.position)
  self.addChild(shut)
}
</pre>
      <div class="article__paragraph">
        <strong>Действия над объектами</strong>
        <br>
        Если вам требуется перемещать объект пальцем, понадобится кое-что изменить.
        Во-первых,  объявить объект мы должны не в методе, а полем класса GameScene.
        Во-вторых, добавить вот такой обработчик нашего перемещения пальца.
        Непосредственно в самом методе требуется менять позицию нашего объекта присваивая её равной положению пальца в данный момент.
      </div>
<pre class="article__code">
override func touchesMoved(_ touches: Set<UITouch>, with event: UIEvent?) {
  for touch: AnyObject in touches {
    let location = touch.location(in: self)
    if gameinaction == true {
      shut.position.x = location.x
    }
  }
}
</pre>
      <div class="article__paragraph">
        Возможно и применение акселерометра для перемещения объекта, требуется лишь добавить данные строчки:
      </div>
<pre class="article__code">
var motionManager = CMMotionManager()
var destX : CGFloat  = 0.0

func processUserMotion(forUpdate currentTime: CFTimeInterval) {
  if let data = motionManager.accelerometerData {
    if fabs(data.acceleration.x) > 0.2 {
      shut.physicsBody!.applyForce(CGVector(dx: 100 * CGFloat(data.acceleration.x), dy: 0))
    }
  }
}
</pre>
      <div class="article__paragraph">
        Принцип действия такой, что при наклоне устройства, угол наклона фиксируется обработчиком события и в зависимости от наклона, мы даем импульс нашему физическому телу(масса тела влияет на действие импульса, поэтому для более тонкой подстройки управления может потребоваться менять не только константы)
      </div>
      <div class="article__paragraph">
        На начальном этапе так же может возникнуть проблема реализации паузы. Небольшая рекомендация по данному вопросу:
        <ul>
          <li>
            - Объявляем наш класс GameScene глобально(это не всегда хорошо, зато является простым решением проблемы);
          </li>
          <li>
            - В самом классе GameScene создаем метод паузы, который будет останавливать таймеры и скорость игрового мира(self.speed = 0.0; self.physicsWorld.speed = 0.0);
          </li>
          <li>
            - В AppDelegate нам потребуется лишь вызвать метод паузы класса GameScene;
          </li>
          <li>
            - Не забудьте вернуть скорость мира и возобновить нужные таймеры когда вернетесь на сцену!)))
          </li>
        </ul>
      </div>
      <div class="article__paragraph">
        Мы постарались остановиться на основных моментах, которые вызывают трудности и решения не так просто найти в интернете. Если у вас возникнут какие-либо вопросы, обращайтесь, мы всегда ответим нашим читателям!
      </div>
      <div class="article__footer">
        <div class="article__date">
          <time datetime="2017-01-16">16 января, 2017</time>
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
