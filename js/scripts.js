'use strict';

var winHeight = document.documentElement.clientHeight;
var winWidth = document.documentElement.clientWidth;
var map;
var XHR = ('onload' in new XMLHttpRequest()) ? XMLHttpRequest : XDomainRequest;


document.addEventListener('DOMContentLoaded',function(){
  var header            = document.querySelector('.header') || document.querySelector('head');
  var headerIndex       = document.querySelector('.header--index') || document.querySelector('head');
  var mainBlog          = document.querySelector('.main-blog') || document.querySelector('head');
  var hamburger         = document.querySelector('.hamburger') || document.querySelector('head');
  var hamburgerLines    = document.querySelectorAll('.hamburger__line') || document.querySelector('head');
  var sidebar           = document.querySelector('.sidebar') || document.querySelector('head');
  var sidebarLinks      = document.querySelectorAll('.sidebar__link') || document.querySelector('head');
  var fileFront         = document.querySelector('#file__front') || document.querySelector('head');
  var fileBack          = document.querySelector('#file__back') || document.querySelector('head');
  var orderSub          = document.querySelector('#order_sub') || document.querySelector('head');
  var windowButtonClose = document.querySelector('.window__button-close') || document.querySelector('head');
  var windowPopup       = document.querySelector('.window') || document.querySelector('head');
  var ajaxAlertPopup    = document.querySelector('.ajax-alert-popup') || document.querySelector('head');
  var arrowIcon         = document.querySelector('.arrow__icon') || document.querySelector('head');
  var sliderArrowLeft   = document.querySelector('.slider__arrow--left') || document.querySelector('head');
  var sliderArrowRight  = document.querySelector('.slider__arrow--right') || document.querySelector('head');

  header.style.height           = winHeight/1.5 + 'px';
  headerIndex.style.height      = winHeight + 'px';
  if(winWidth > 500){
    mainBlog.style.height       = winHeight + 'px';
  }

  hamburger.addEventListener('click',function(){
    for(var i = 0; i < hamburgerLines.length; i++){
      toggleClass(hamburgerLines[i], 'hamburger__line--open');
      toggleClass(sidebar, 'sidebar--open');
    }
  });

  fileFront.addEventListener('click', function(){
    fileBack.click();
  });

  var limitClickSliderArrowLeft = limitExecByInterval(clickSliderArrowLeft, 1000);
  var limitClickSliderArrowRight = limitExecByInterval(clickSliderArrowRight, 1000);

  sliderArrowLeft.addEventListener('click', function(){
    clearInterval(leafInterval);
    limitClickSliderArrowLeft();
  });

  sliderArrowRight.addEventListener('click', function(){
    clearInterval(leafInterval);
    limitClickSliderArrowRight();
  });

  var leafInterval = setInterval(function(){
    clickSliderArrowRight();
  },5000);

  arrowIcon.addEventListener('click', function(e){
    var anchor                    = this;
    var start                     = null;
    var speed                     = 1;
    var currentPositionToTop      = window.pageYOffset;
    var documentPositionToElement = winHeight;

    window.requestAnimationFrame(step);
    function step(time){
      var progress          = 0;
      var finalDestination  = 0;

      if(start === null){
        start = time;
      }

      progress = time - start;

      if(documentPositionToElement - currentPositionToTop < 0){
        finalDestination = Math.max(
          currentPositionToTop - progress/speed,
          documentPositionToElement
        );
      }
      else{
        finalDestination = Math.min(
          currentPositionToTop + progress/speed,
          documentPositionToElement
        );
      }

      window.scrollTo(0, finalDestination);

      if(finalDestination != documentPositionToElement){
        window.requestAnimationFrame(step);
      }
    }

    e.preventDefault();
  });

  for(var i = 0; i < sidebarLinks.length; i++){
    sidebarLinks[i].addEventListener('mouseenter', function(){
      addClass(this, 'sidebar__link--hover');
    });

    sidebarLinks[i].addEventListener('focus', function(){
      addClass(this, 'sidebar__link--hover');
    });

    sidebarLinks[i].addEventListener('mouseleave', function(){
      removeClass(this, 'sidebar__link--hover');
    });

    sidebarLinks[i].addEventListener('blur', function(){
      removeClass(this, 'sidebar__link--hover');
    });
  }

  orderSub.addEventListener('click', function(e){
    var fio    = document.querySelector('#fio').value;
    var tel     = document.querySelector('#tel').value;
    var email = document.querySelector('#email').value;
    var description = document.querySelector('#description').value;

    if(fio != '' && tel != '' && email != '' && description != '') {
      e.preventDefault();
      var xhr = new XHR();
      var parameters = 'fio=' + encodeURIComponent(fio) + '&' + 'tel=' + encodeURIComponent(tel) + '&' + 'email=' + encodeURIComponent(email) + '&' + 'description=' + encodeURIComponent(description);

      xhr.open('POST', '/includes/ajax/order.php', true);
      xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
      xhr.send(parameters);

      xhr.onreadystatechange = function(){
        if(xhr.readyState != 4) return;

        if(xhr.status == 200){
          //success
          addClass(ajaxAlertPopup, 'ajax-alert-popup--open');
          addClass(windowPopup, 'window--done');
          document.querySelector('.window__text--done').style.display = 'block';
        }
        else{
          //error
          addClass(ajaxAlertPopup, 'ajax-alert-popup--open');
          addClass(windowPopup, 'window--error');
          document.querySelector('.window__text--error').style.display = 'block';
        }
      }
    }
  });

  windowButtonClose.addEventListener('click', function(){
    removeClass(ajaxAlertPopup, 'ajax-alert-popup--open');
    removeClass(windowPopup, 'window--done window--error');
    document.querySelector('.window__text--done').style.display = 'none';
    document.querySelector('.window__text--error').style.display = 'none';
  });

});



function addClass(element, strClassesName){
  var arClassesName = strClassesName.split(' ');

  for(var i = 0; i < arClassesName.length; i++){
    element.className += ' ' + arClassesName[i];
  }

  element.className = element.className.trim();

  return element.className;
}

function removeClass(element, strClassesName){
  var arElementClasses  = element.className.trim().split(' ');
  var arClassesName     = strClassesName.trim().split(' ');
  element.className     = '';

  nextClass:  for(var i = 0; i < arElementClasses.length; i++){
    for(var j = 0; j < arClassesName.length; j++){
      if(arElementClasses[i] === arClassesName[j]){
        continue nextClass;
      }

    }
    element.className += ' ' + arElementClasses[i];
  }

  element.className = element.className.trim();

  return element.className;
}

function toggleClass(element, strClassesName){
  var arClassesName = strClassesName.trim().split(' ');


  var isSetClasses = arClassesName.every(function(currentValue, item, arr){
    return hasClass(element, currentValue);
  });

  if(isSetClasses){
    removeClass(element, strClassesName);
  }
  else{
    addClass(element, strClassesName);
  }

  return isSetClasses;
}

function hasClass(element, strClassName){
  var strElementClasses = ' ' + element.className.trim() + ' ';
  strClassName          = strClassName.trim();

  if(~strElementClasses.indexOf(' ' + strClassName + ' ')){
    return true;
  }

  return false;
}

function leaf(func){
  for(var i = 1; i <= 4; i++){
    removeClass(document.querySelector('.slider__slide--' + i), 'slider__slide--back');
    removeClass(document.querySelector('.header__title--' + i), 'header__title--back');
  }
  for(var i = 1; i <= 4; i++){
    if(hasClass(document.querySelector('.slider__slide--' + i), 'slider__slide--active')){
      func(i);
      break;
    }
  }
}

function clickSliderArrowRight(){
  leaf(function(i){
    addClass(document.querySelector('.slider__slide--' + i), 'slider__slide--back');
    addClass(document.querySelector('.header__title--' + i), 'header__title--back');
    removeClass(document.querySelector('.slider__slide--' + i), 'slider__slide--active');
    removeClass(document.querySelector('.header__title--' + i), 'header__title--active');
    i = (i == 4) ? 1:i+1;
    addClass(document.querySelector('.slider__slide--' + i), 'slider__slide--active');
    addClass(document.querySelector('.header__title--' + i), 'header__title--active');
  });
}

function clickSliderArrowLeft(){
  leaf(function(i){
    removeClass(document.querySelector('.slider__slide--' + i), 'slider__slide--active');
    removeClass(document.querySelector('.header__title--' + i), 'header__title--active');
    i = (i == 1) ? 4:i-1;
    addClass(document.querySelector('.slider__slide--' + i), 'slider__slide--active');
    addClass(document.querySelector('.header__title--' + i), 'header__title--active');
    i = (i == 1) ? 4:i-1;
    addClass(document.querySelector('.slider__slide--' + i), 'slider__slide--back');
    addClass(document.querySelector('.header__title--' + i), 'header__title--back');
  });
}

function initMap() {
  var justSpacePosition = {lat: 54.179975, lng: 37.603910};

  map = new google.maps.Map(document.getElementById('map'), {
    center: justSpacePosition,
    scrollwheel: false,
    zoom: 15
  });

  var pinImage = {
    url: '/img/pinLogo.svg',
  }

  var marker = new google.maps.Marker({
    map: map,
    icon: pinImage,
    place: {
      location: justSpacePosition,
      query: 'Just Space, Россия, Тула, пр. Ленина'
    },
    attribution: {
      source: 'Digital-агентство Just Space',
      webUrl: 'http://www.just-space.ru'
    },
    title: 'Тут создают сайты'
  });

  var infoWindow = new google.maps.InfoWindow({
    content: 'Digital-агентство Just Space'
  });

  marker.addListener('click', function() {
    infoWindow.open(map, marker);
  });

  var styles = [
  {
    stylers: [
      { hue: '#0097ba' },
      { saturation: -20 }
    ]
  },{
    featureType: 'road',
    elementType: 'geometry',
    stylers: [
      { lightness: 100 },
      { visibility: 'simplified' }
    ]
  }
];

map.setOptions({styles: styles});

}

function limitExecByInterval(fn, time) {
	var lock, execOnUnlock, args;
	return function() {
		args = arguments;
		if (!lock) {
			lock = true;
			var scope = this;
			setTimeout(function(){
				lock = false;
				if (execOnUnlock) {
					args.callee.apply(scope, args);
					execOnUnlock = false;
				}
			}, time);
			return fn.apply(this, args);
		} else execOnUnlock = true;
	}
}
