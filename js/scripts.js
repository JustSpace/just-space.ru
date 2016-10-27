'use strict';

var winHeight = document.documentElement.clientHeight;
var winWidth = document.documentElement.clientWidth;


document.addEventListener('DOMContentLoaded',function(){
  var header = document.querySelector('.header');
  var hamburger = document.querySelector('.hamburger');
  var hamburgerLines = document.querySelectorAll('.hamburger__line');
  var sidebar = document.querySelector('.sidebar');
  var sidebarLinks = document.querySelectorAll(".sidebar__link");
  var fileFront = document.querySelector("#file__front");
  var fileBack = document.querySelector("#file__back");



  header.style.height = winHeight + 'px';

  hamburger.addEventListener('click',function(){
    for(var i = 0; i < hamburgerLines.length; i++){
      toggleClass(hamburgerLines[i], 'hamburger__line--open');
      toggleClass(sidebar, 'sidebar--open');
    }
  });

  fileFront.addEventListener("click", function(){
    fileBack.click();
  });

  for(var i = 0; i < sidebarLinks.length; i++){
    sidebarLinks[i].addEventListener("mouseenter", function(){
      addClass(this, "sidebar__link--hover");
    });

    sidebarLinks[i].addEventListener("focus", function(){
      addClass(this, "sidebar__link--hover");
    });

    sidebarLinks[i].addEventListener("mouseleave", function(){
      removeClass(this, "sidebar__link--hover");
    });

    sidebarLinks[i].addEventListener("blur", function(){
      removeClass(this, "sidebar__link--hover");
    });
  }

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
