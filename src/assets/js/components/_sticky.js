/**
 * Sticky Nav Element
 */
var StickyNav = function (options) {
  if (!this || !(this instanceof StickyNav)) {
    return new StickyNav(options);
  }

  if (!options) {
    options = {};
  }

  this.target = options.target;
  this.offset = options.offset;
  this.throttle = options.throttle;

  if (document.querySelector(this.target)) {
    this.init();
  }
};

StickyNav.prototype = {

  /**
   * Init
   */
  init: function() {
    this.bindEvents();
  },
  /**
   * Bind events
   * Handles our primary load and scroll Events
   * @see js/components/_utils for throttle utility
   */
  bindEvents: function () {
    var el = document.querySelector(this.target);

    window.addEventListener('load', function () {
      var elHeight = this.getHeight(el);
      this.addHeight(el, elHeight);
    }.bind(this), false);

    window.addEventListener('scroll', Util.throttle(function() {
      this.sticker(el);
    }.bind(this), this.throttle), false);
  },

  /**
   * Scroll Position detector
   */
  scrollPos: function () {
    if (window.pageYOffset !== undefined) {
        return pageYOffset;
    } else {
      var root = document.documentElement,
          body = document.body,
          scrollY;

      scrollY = root.scrollTop || body.scrollTop || 0;
      return scrollY;
    }
  },

  /**
   * Apply/remove is-sticky
   */
  sticker: function (el) {
    if (this.scrollPos() > this.offset) {
        el.classList.add('is-sticky');
    } else {
        el.classList.remove('is-sticky');
    }
  },
  /**
   * Get El's height
   */
  getHeight: function(el) {
    return el.clientHeight;
  },

  /**
   * Apply height to El
   */
  addHeight: function(el, elHeight) {
    el.parentNode.style.height = elHeight + 'px';
  },
};

/**
 * Let's Do this
 */
new StickyNav({
   target: '.js-sticky',
   offset: 235,
   throttle: 20,
});
