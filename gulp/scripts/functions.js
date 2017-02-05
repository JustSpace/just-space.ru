'use strict';

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

function removeOldClass(element, strClassesName){
  for(var i = 0; i < element.length; i++){
    removeClass(element[i], strClassesName);
  }
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

function clickSliderArrowRightIndex(){
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

function clickSliderArrowLeftIndex(){
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

function clickArrowLeft(carusel, count){
  var sliders = carusel.querySelectorAll(".slider__slide");
  var step = 100/count;

  for(var i = 0; i < sliders.length; i++){
    if(hasClass(sliders[i], 'slider__slide--first')){
      if(i == 0){
        break;
      }
      removeClass(sliders[i], 'slider__slide--first');
      addClass(sliders[i-1], 'slider__slide--first');
      removeClass(sliders[i+count-1], 'slider__slide--last');
      addClass(sliders[i+(count-1)-1], 'slider__slide--last');
      carusel.querySelector(".slider--line").style.transform = "translateX(" + -step*(i-1)  + "%)";
      break;
    }
  }
}

function clickArrowRight(carusel, count){
  var sliders = carusel.querySelectorAll(".slider__slide");
  var step = 100/count;

  for(var i = 0; i < sliders.length; i++){
    if(i == sliders.length-1){
      break;
    }
    if(hasClass(sliders[i], 'slider__slide--last')){
      removeClass(sliders[i-(count-1)], 'slider__slide--first');
      addClass(sliders[i-(count-1)+1], 'slider__slide--first');
      console.log(sliders[i-(count-1)+1]);
      removeClass(sliders[i], 'slider__slide--last');
      addClass(sliders[i+1], 'slider__slide--last');
      carusel.querySelector(".slider--line").style.transform = "translateX(" + -step*(i-(count-1)+1)  + "%)";
      break;
    }
  }
}

function sliderLineInitial(count){
  var carusels = document.querySelectorAll(".carusel--line");

  for(var i = 0; i < carusels.length; i++){
    var sliders = carusels[i].querySelectorAll(".slider__slide");
    addClass(sliders[0], 'slider__slide--first');
    addClass(sliders[count-1], 'slider__slide--last');
  }

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

function openCloseAppMenu(){
  if(hasClass(document.querySelector(".app-menu"),"app-menu--open")){
    removeClass(document.querySelector(".app-menu"),"app-menu--open");
    removeClass(document.querySelector(".blind"), "blind--open");
    removeClass(document.querySelector(".blind__line1"),"blind__line1--open");
    removeClass(document.querySelector(".blind__line2"),"blind__line2--open");
  }
  else{
    addClass(document.querySelector(".app-menu"),"app-menu--open");
    addClass(document.querySelector(".blind"),"blind--open");
    addClass(document.querySelector(".blind__line1"),"blind__line1--open");
    addClass(document.querySelector(".blind__line2"),"blind__line2--open");
  }
}

function getClosest(elem, selector){

    // Element.matches() polyfill
    if (!Element.prototype.matches) {
        Element.prototype.matches =
            Element.prototype.matchesSelector ||
            Element.prototype.mozMatchesSelector ||
            Element.prototype.msMatchesSelector ||
            Element.prototype.oMatchesSelector ||
            Element.prototype.webkitMatchesSelector ||
            function(s) {
                var matches = (this.document || this.ownerDocument).querySelectorAll(s),
                    i = matches.length;
                while (--i >= 0 && matches.item(i) !== this) {}
                return i > -1;
            };
    }

    // Get closest match
    for ( ; elem && elem !== document; elem = elem.parentNode ) {
        if ( elem.matches( selector ) ) return elem;
    }

    return null;

};

function getParents( elem, selector ){

    // Element.matches() polyfill
    if (!Element.prototype.matches) {
        Element.prototype.matches =
            Element.prototype.matchesSelector ||
            Element.prototype.mozMatchesSelector ||
            Element.prototype.msMatchesSelector ||
            Element.prototype.oMatchesSelector ||
            Element.prototype.webkitMatchesSelector ||
            function(s) {
                var matches = (this.document || this.ownerDocument).querySelectorAll(s),
                    i = matches.length;
                while (--i >= 0 && matches.item(i) !== this) {}
                return i > -1;
            };
    }

    // Setup parents array
    var parents = [];

    // Get matching parent elements
    for ( ; elem && elem !== document; elem = elem.parentNode ) {

        // Add matching parents to array
        if ( selector ) {
            if ( elem.matches( selector ) ) {
                parents.push( elem );
            }
        } else {
            parents.push( elem );
        }

    }

    return parents;

};
