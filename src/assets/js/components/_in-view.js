/**
 * We Scrollin'
 * A scroll to target deal via data attributes, that uses the
 * post titles to auto set the data atts and anchors.
 * Includes pushState to deep link to posts via hash
 *
 */
var WeScrollin = (function() {

  //var feedNav = $('.js-nav > a');
  //var feed = $('.app-main > .feed');

  var settings = {
    scrollEl:        document.querySelectorAll('.js-inview'),
    activeClass:    'is-inview',
    scrollOffset:   0,
    scrollSpeed:    600,
    scrollThrottle: 10,
  };

  return {

    /**
     * Init Tags
     */
    init: function () {
      this.bindEvents();
    },

    /**
     * Bind Our Events
     */
    bindEvents: function () {
      settings.scrollEl.forEach(function(el) {
        WeScrollin.scrollTrigger(el);
      });
    },


    /**
     * Handle Scroll
     * Loops over Posts to Build hash and IDs and then set them
     * @see _utils.js for throttle and inview helper
     */
    scrollTrigger: function(el) {

        window.addEventListener('scroll', Util.throttle(function() {
          //console.log('scrolling')

          if ( Util.isInView(el, 5) ) {
            //console.log(el);
            el.classList.add(settings.activeClass);
          }
        }, settings.scrollThrottle), false);
    },
  };
})();

WeScrollin.init();
