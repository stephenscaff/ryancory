
/**
 * Menu
 * Allows for links nested inside a block level link wrap
 * via a data attribute of the link location.
 * @author Stephen Scaff
 */
var SiteMenu = (function() {

  var html = document.querySelector('html');
  //var site_menu = document.querySelector('.site-menu');
  var menuToggle = document.querySelector('.js-menu-toggle');
  var isOpen = false;


  return{

    /**
     * Init
     */
    init: function() {
      this.bind();
    },

    bind:function() {

      menuToggle.addEventListener('click', function (e) {
        SiteMenu.transitionState();
        e.preventDefault();
      });

      window.onkeydown = function(e) {
        if (isOpen && e.keyCode === 27) {
          SiteMenu.transitionState();
          e.preventDefault();
        }
      }
    },

    /**
     * Build Link
     * Constructs our nested link from our data attribute
     */
    toggleMenu: function(){
      //MenuNav.transitionState('.site-menu');
    },

    transitionState: function(elem){

      if (isOpen) {
          SiteMenu.closeMenu();
      } else {
        SiteMenu.openMenu();
      }
    },

    closeMenu: function(){
      html.classList.add('menu-is-closing');

      setTimeout(function(){
        html.classList.remove('menu-is-open');
        html.classList.add('menu-is-closed');
        html.classList.remove('menu-is-closing');
        isOpen = false;
      }, 1000);
    },

    openMenu: function(){
      html.classList.add('menu-is-opening');
      setTimeout(function(){
        html.classList.remove('menu-is-closed');
        html.classList.add('menu-is-open');
        html.classList.remove('menu-is-opening');
        isOpen = true;
      }, 0);
    },
  };
 })();
SiteMenu.init();









// var menu_toggle = document.querySelector('.js-menu-toggle');

//   var toggleState = function (elem, one, two) {
//     var elem = document.querySelector(elem);
//     elem.setAttribute('data-state', elem.getAttribute('data-state') === one ? two : one);
//   };

// menu_toggle.addEventListener('click', function (e) {

//     console.log('ypypypy');
//     toggleState('.site-menu', 'closed', 'open');
//     e.preventDefault();
//   });
