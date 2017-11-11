/**
 * Hellow Test
 */


var VideoCards = (function() {

  var vidCards = document.querySelectorAll('.js-vid-card');

  return{

    /**
     * Init
     */
    init: function(){
      this.bindEvents();
    },

    bindEvents: function() {
      Util.forEach ( vidCards, function (index, vidCard) {
        var video = vidCard.querySelector('video');
        //VideoCards.autoplay(video);
        VideoCards.handleHover(vidCard, video);
      });
    },


    autoPlay: function(vid) {
      if (VidCards.classList.contains('js-vid-autoplay')) {
        vid.play();
      }
    },
    /**
     * Build Link
     * Constructs our nested link from our data attribute
     */
    handleHover: function(el, vid){
      el.addEventListener('mouseover', function() {
          vid.play();
      });

      el.addEventListener('mouseout', function() {
          vid.pause();
      });
    },
  };
 })();
window.onload = function() {
VideoCards.init();
};
