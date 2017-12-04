/**
 * Global Utilities
 */

var Util = (function() {

  return {

    /**
     * Is In View?
     * A super simple in viewport check
     * Would probs want to build this out a bit more
     *
     * @param  {el} Element to test
     * @param  {threshold} Integar Amount of threshold
     * @return {boolean}
     */
    isInView: function(el, threshold) {
      // 'sup jquery
      if (typeof jQuery === "function" && el instanceof jQuery) {
        el = el[0];
      }
      var threshold = Math.floor(threshold * 100),
          winY = window.innerHeight - threshold || document.documentElement.clientHeight - threshold,
          bounds = el.getBoundingClientRect(),
          isTopVisible = (bounds.top >= 0) && (bounds.top <= winY);

      return isTopVisible;
    },


    isAtTop: function(el) {
      var distance = $(el).offset().top,
      $window = $(window);

      if ($window.scrollTop() >= distance/1.5) {
        return true;
      }
    },


    /**
     * ForEach Utility
     * Ensure we can loop over a object or nodelist
     * @see https://toddmotto.com/ditch-the-array-foreach-call-nodelist-hack/
     */
    forEach: function (array, callback, scope) {
      for (var i = 0; i < array.length; i++) {
        callback.call(scope, i, array[i]);
      }
    },


    /**
     * Throttle Util
     * Stoopid simple throttle util to control scroll events and so on.
     *
     * @param  {Function}  Function call to throttle.
     * @param  {int}       milliseconds to throttle  method
     * @return {Function}  Returns a throttled function
     */
    throttle: function(callback, ms) {
      var wait = false;
      return function () {
          if (!wait) {
              callback.call();
              wait = true;
              setTimeout(function () {
                  wait = false;
              }, ms);
          }
      };
    },

    hasClass: function(el, className) {
      if (el.classList.contains(className)){
        return true;
      }
    },

  classList: function(el) {
    var list = el.classList;

    return {
        toggle: function(c) { list.toggle(c); return this; },
        add:    function(c) { list.add   (c); return this; },
        remove: function(c) { list.remove(c); return this; }
    };
  },

    /**
     * Hellow Test
     */
     loadJSONP: function(url, callback, context){

       console.log('hi utils')

       var unique = 0;



         console.log('inside')
         // INIT
         var name = "_jsonp_" + unique++;
         if (url.match(/\?/)) url += "&callback="+name;
         else url += "?callback="+name;

         console.log('util url', url)
         // Create script
         var script = document.createElement('script');
         script.type = 'text/javascript';
         script.src = url;

         window[name] = function(data){
           callback.call((context || window), data);
           document.getElementsByTagName('head')[0].removeChild(script);
           script = null;
           delete window[name];
           console.log([name])
         };

         // Load JSON
         document.getElementsByTagName('head')[0].appendChild(script);

     },
  };
 })();
