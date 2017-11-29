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

    beginExit: function(callback) {

      SiteMenu.close();

      setTimeout(function() {
        PageTransition.exit();
      }, s.menuCloseDuration);

    },
    /**
     * Exit Page
     */
    exit: function() {
      s.html.classList.add('is-exiting');
      s.html.addEventListener("transitionend", function(event) {
        PageTransition.redirectPage();
      }, false);
      // setTimeout(function() {
      //   PageTransition.redirectPage();
      // }, s.exitDuration);
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
          if (s.html.classList.contains(noTrans) || transLink.classList.contains(noTrans)) return
          // Bail if modifer keys (must be before preventDefault)
          if (e.metaKey || e.ctrlKey || e.shiftKey) return;

          if (e.target.parentElement.classList.contains('.site-menu__link')) {
            s.isMenuLink = true;
          }
          e.preventDefault();

          if (s.isMenuLink = true) {
            var siteMenu = document.querySelector('.site-menu');
            SiteMenu.close();

            siteMenu.addEventListener("transitionend", function(event) {
              PageTransition.exit();
              console.log('done')
            });
          } else {
            //PageTransition.exit();
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
      // window.onbeforeunload = function(e)  {
      //   $(window).unbind('unload');
      // });
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
      // $(window).bind('pageshow', function(e) {
      //   if (e.originalEvent.persisted) window.location.reload();
      // });
      window.onpageshow = function(e) {
        if (e.persisted) window.location.reload();
      };
    }
  }
})();

// Init our Module
PageTransition.init();
