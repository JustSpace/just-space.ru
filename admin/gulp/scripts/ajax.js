'use strict';

var XHR = ('onload' in new XMLHttpRequest()) ? XMLHttpRequest : XDomainRequest;

document.addEventListener('DOMContentLoaded',function(){

  var addUserSub = document.querySelector('#add_user_sub') || document.querySelector('head');
  var addEmailSub = document.querySelector('#add_email_sub') || document.querySelector('head');
  var addSiteEmailSub = document.querySelector('#add_site_email_sub') || document.querySelector('head');
  var createBackupSub = document.querySelector('#create_backup_sub') || document.querySelector('head');
  var loadBackupSub = document.querySelector('#load_backup_sub') || document.querySelector('head');

  var windowButtonClose = document.querySelector('.window__button-close') || document.querySelector('head');
  var windowPopup       = document.querySelector('.window') || document.querySelector('head');
  var ajaxAlertPopup    = document.querySelector('.ajax-alert-popup') || document.querySelector('head');

  addUserSub.addEventListener('click', function(e){
    var login = document.querySelector('#login').value;
    var password = document.querySelector('#password').value;
    var name = document.querySelector('#name').value;
    var email = document.querySelector('#email').value;
    var rights = document.querySelector('#rights').value;

    if(login != '' && password != '') {
      e.preventDefault();
      var xhr = new XHR();
      var parameters = 'login=' + encodeURIComponent(login) + '&' + 'password=' + encodeURIComponent(password) + '&' + 'name=' + encodeURIComponent(name) + '&' + 'email=' + encodeURIComponent(email) + '&' + 'rights=' + encodeURIComponent(rights);

      xhr.open('POST', '/admin/ajax/add_user.php', true);
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

  addEmailSub.addEventListener('click', function(e){
    var email = document.querySelector('#email').value;

    if(email != '') {
      e.preventDefault();
      var xhr = new XHR();
      var parameters = 'email=' + encodeURIComponent(email);

      xhr.open('POST', '/admin/ajax/add_email.php', true);
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

  addSiteEmailSub.addEventListener('click', function(e){
    var site_email = document.querySelector('#site_email').value;

    if(site_email != '') {
      e.preventDefault();
      var xhr = new XHR();
      var parameters = 'site_email=' + encodeURIComponent(site_email);

      xhr.open('POST', '/admin/ajax/add_site_email.php', true);
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

  createBackupSub.addEventListener('click', function(e){
    var create_backup_filename = document.querySelector('#create_backup_filename').value;

    e.preventDefault();
    var xhr = new XHR();
    var parameters = 'create_backup_filename=' + encodeURIComponent(create_backup_filename);

    xhr.open('POST', '/admin/ajax/create_backup.php', true);
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
  });

  loadBackupSub.addEventListener('click', function(e){
    var load_backup_filename = document.querySelector('#load_backup_filename').value;
    var load_backup_dbname = document.querySelector('#load_backup_dbname').value;

    if(load_backup_filename != '') {
      e.preventDefault();
      var xhr = new XHR();
      var parameters = 'load_backup_filename=' + encodeURIComponent(load_backup_filename) + '&' + 'load_backup_dbname=' + encodeURIComponent(load_backup_dbname);

      xhr.open('POST', '/admin/ajax/load_backup.php', true);
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
