function whichAnimationEvent(){
  var t,
      el = document.createElement("fakeelement");

  var animations = {
    "animation"      : "animationend",
    "OAnimation"     : "oAnimationEnd",
    "MozAnimation"   : "animationend",
    "WebkitAnimation": "webkitAnimationEnd"
  }

  for (t in animations){
    if (el.style[t] !== undefined){
      return animations[t];
    }
  }
}

var animationEvent = whichAnimationEvent();

/**
 *  Page Transitions
 *  All sexy like page transitions between page loads
 *  Adds 'is-loading' | 'is-loaded' classes for loading
 *  Adds 'is-exiting' class while exiting
 *  Exclude links with 'no-trans' class
 *
 *  @author   Stephen Scaff
 */

// Page Transition
var PageTransition = (function() {

  var s,
      html = document.querySelector('html'),
      siteURL = 'http://' || 'https://' + top.location.host.toString();

  // The no-trans class
  var noTrans = 'no-trans';

  return {

    /**
     * Settings Object
     */
    settings: {
      //transLinks: document.querySelectorAll('a[href^="' + siteURL + '"], a[href^="/"], a[href^="./"], a[href^="../"]'),
      transLinks: document.querySelectorAll('a[href^="' + siteURL + '"], a[href^="/"]'),
      linkLocation: null,
      html_body: document.querySelectorAll('html, body'),
      html: document.querySelector('html'),
      body: document.querySelector('body'),
      exitDuration: 2000,
      entranceDuration: 1000,
      menuCloseDuration: 400,
      isLoaded: false,
      isMenuLink: false,
    },

    /**
     * Init
     */
    init: function() {
      s = this.settings;
      this.isPageLoaded();
      this.entrance();
      this.transitionPage();
      this.unloadWindow();
      this.workaround();
    },

    /**
     * Enter Page
     */
    entrance: function() {
      s.html.classList.add('is-loading');
      // Remove class to prevent any Webkit bugs

      if (s.isLoaded = true) {
        setTimeout(function() {
          s.html.classList.remove('is-loading');
          s.html.classList.add('is-loaded');
        }, s.entranceDuration);
      }
    },

    /**
     * Exit Page
     */
    exit: function() {
      s.html.classList.add('is-exiting');
      // var transTest = document.querySelector('main');
      // transTest.addEventListener("animationend", function(event) {
      //   PageTransition.redirectPage();
      // }, false);
      setTimeout(function() {
        PageTransition.redirectPage();
      }, s.exitDuration);
    },

    /**
     * Is Loaded Check
     */
    isPageLoaded: function() {
      var state = document.readyState;
      if (state === 'interactive' || state === 'complete') {
      s.isLoaded = true;
      }
    },

    /**
     * Transition Page
     */
    transitionPage: function() {

      Util.forEach ( s.transLinks, function (index, transLink) {

        transLink.addEventListener('click', function (e) {

          s.linkLocation = this.href;

          // Bail if body has no-trans class
          if (s.html.classList.contains(noTrans) || this.classList.contains(noTrans)) return
          // Bail if modifer keys (must be before preventDefault)
          if (e.metaKey || e.ctrlKey || e.shiftKey) return;

          e.preventDefault();

          if (this.classList.contains('site-menu__link')) {
            console.log('menu Link')
            //var siteMenu = document.querySelector('.site-menu');
            var transTest = document.querySelector('.site-content');

            SiteMenu.close();

            transTest.addEventListener("transitionend", function(event) {
              PageTransition.exit();
              console.log('done')
            });
          } else {
            console.log('no menu link')
            PageTransition.exit();
          }

        });
      });
    },

    /**
     * Redirect Page
     */
    redirectPage: function() {
      window.location = s.linkLocation;
    },
    /**
     * Unload Window
     * Ensures back button works in FF,
     * @todo  update for jquery 3
     */
    unloadWindow: function() {
      // For back button history
      window.onbeforeunload = null;
    },

    /**
     * Workaround
     * Check the persisted property of the onpageshow event
     * to stop back button cache in Safari
     * @todo  update for jquery 3
     */
    workaround: function() {
      // For Safari browser
      window.onpageshow = function(e) {
        if (e.persisted) window.location.reload();
      };
    }
  }
})();

// Init our Module
PageTransition.init();
