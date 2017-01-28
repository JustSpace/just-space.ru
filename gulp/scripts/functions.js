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

function clickSliderArrowLeftAbout(){
  for(var i = 1; i <= 6; i++){
    if(hasClass(document.querySelector('.slider__slide--' + i), 'slider__slide--first')){
      if(i == 1){
        break;
      }
      removeClass(document.querySelector('.slider__slide--' + i), 'slider__slide--first');
      addClass(document.querySelector('.slider__slide--' + (i-1)), 'slider__slide--first');
      removeClass(document.querySelector('.slider__slide--' + (i+3)), 'slider__slide--last');
      addClass(document.querySelector('.slider__slide--' + (i+2)), 'slider__slide--last');
      document.querySelector(".slider--line").style.transform = "translateX(" + -25*(i-2)  + "%)";
      break;
    }
  }
}

function clickSliderArrowRightAbout(){
  for(var i = 1; i <= 6; i++){
    if(hasClass(document.querySelector('.slider__slide--' + i), 'slider__slide--last')){
      if(i == 6){
        break;
      }
      removeClass(document.querySelector('.slider__slide--' + (i-3)), 'slider__slide--first');
      addClass(document.querySelector('.slider__slide--' + (i-2)), 'slider__slide--first');
      removeClass(document.querySelector('.slider__slide--' + i), 'slider__slide--last');
      addClass(document.querySelector('.slider__slide--' + (i+1)), 'slider__slide--last');
      document.querySelector(".slider--line").style.transform = "translateX(" + -25*(i-3)  + "%)";
      break;
    }
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
