'use strict';

var winHeight = document.documentElement.clientHeight;
var winWidth = document.documentElement.clientWidth;


document.addEventListener('DOMContentLoaded',function(){
  var header            = document.querySelector('.header') || document.querySelector('head');
  var header2div3       = document.querySelector('.header--2div3') || document.querySelector('head');
  var headerIndex       = document.querySelector('.header--index') || document.querySelector('head');
  var mainBlog          = document.querySelector('.page-image') || document.querySelector('head');
  var hamburger         = document.querySelector('.hamburger') || document.querySelector('head');
  var hamburgerLines    = document.querySelectorAll('.hamburger__line') || document.querySelector('head');
  var sidebar           = document.querySelector('.sidebar') || document.querySelector('head');
  var sidebarLinks      = document.querySelectorAll('.sidebar__link') || document.querySelector('head');
  var fileFront         = document.querySelector('#file__front') || document.querySelector('head');
  var fileBack          = document.querySelector('#file__back') || document.querySelector('head');
  var arrowIcon         = document.querySelector('.arrow__icon') || document.querySelector('head');
  var sliderArrowLeftIndex = document.querySelector('.slider__arrow--left-index') || document.querySelector('head');
  var sliderArrowRightIndex = document.querySelector('.slider__arrow--right-index') || document.querySelector('head');
  var sliderArrowLeftAbout = document.querySelector('.slider__arrow--left-about') || document.querySelector('head');
  var sliderArrowRightAbout = document.querySelector('.slider__arrow--right-about') || document.querySelector('head');
  var appMenu           = document.querySelector(".app-menu") || document.querySelector('head');
  var blind             = document.querySelector(".blind") || document.querySelector('head');
  var allElem           = document.querySelectorAll('*') || document.querySelector('head');


  header2div3.style.height      = winHeight/1.5 + 'px';
  headerIndex.style.height      = winHeight + 'px';
  appMenu.style.height          = "100%";
  if(winWidth > 500){
    mainBlog.style.height       = winHeight + 'px';
  }

  hamburger.addEventListener('click',function(){
    for(var i = 0; i < hamburgerLines.length; i++){
      toggleClass(hamburgerLines[i], 'hamburger__line--open');
      toggleClass(sidebar, 'sidebar--open');
    }
  });

  for(var i = 0; i < allElem.length; i++){
    allElem[i].addEventListener('touchstart', function(e){
      e.target.mouseenter();
    });
  }

  blind.addEventListener('click', openCloseAppMenu);

  fileFront.addEventListener('click', function(){
    fileBack.click();
  });

  var limitClickSliderArrowLeftIndex = limitExecByInterval(clickSliderArrowLeftIndex, 1000);
  var limitClickSliderArrowRightIndex = limitExecByInterval(clickSliderArrowRightIndex, 1000);

  sliderArrowLeftIndex.addEventListener('click', function(){
    clearInterval(leafInterval);
    limitClickSliderArrowLeftIndex();
  });

  sliderArrowRightIndex.addEventListener('click', function(){
    clearInterval(leafInterval);
    limitClickSliderArrowRightIndex();
  });

  sliderArrowLeftAbout.addEventListener('click', function(){
    clickSliderArrowLeftAbout();
  });

  sliderArrowRightAbout.addEventListener('click', function(){
    clickSliderArrowRightAbout();
  });

  if(hasClass(header, 'header--index')){
    var leafInterval = setInterval(function(){
      clickSliderArrowRightIndex();
    },5000);
  }

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
      removeOldClass(sidebarLinks, 'sidebar__link--hover')
      toggleClass(this, 'sidebar__link--hover');
    });

    sidebarLinks[i].addEventListener('focus', function(){
      removeOldClass(sidebarLinks, 'sidebar__link--hover')
      toggleClass(this, 'sidebar__link--hover');
    });

    sidebarLinks[i].addEventListener('mouseleave', function(){
      removeOldClass(sidebarLinks, 'sidebar__link--hover')
      toggleClass(this, 'sidebar__link--hover');
    });

    sidebarLinks[i].addEventListener('blur', function(){
      removeOldClass(sidebarLinks, 'sidebar__link--hover')
      toggleClass(this, 'sidebar__link--hover');
    });
  }

});
