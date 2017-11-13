/**
 * Hellow Test
 */
var PopUps = (function() {

  var html = document.querySelector('html'),
      popUps = document.querySelectorAll('[data-popup]'),
      closeLinks = document.querySelectorAll('.js-close-popup')
      isOpen = false;

  return{

    /**
     * Init
     */
    init: function(){
      this.bindEvents();
    },

    /**
     * Bind Events
     */
    bindEvents: function() {
      Util.forEach ( popUps, function (index, popUp) {
        popUp.addEventListener('click', function(e) {
          e.preventDefault();

          var targetPopup = popUp.dataset.popup,
              targetPopupId = document.querySelector('#' + targetPopup),
              vidWrap = targetPopupId.querySelector('.js-vid-wrap');

          PopUps.open(targetPopupId);

          if (popUp.hasAttribute('data-vimeo-id') ) {
            PopUps.playVimeoVideo(popUp, targetPopupId, vidWrap);
          }

          if (isOpen = true) {
            Util.forEach ( closeLinks, function (index, closeLink) {
              closeLink.addEventListener('click', function(e) {
                e.preventDefault();
                PopUps.close(targetPopupId);
              });
            });
            window.onkeydown = function(e) {
              if (e.keyCode === 27) {
                PopUps.close(targetPopupId);
                PopUps.stopVideo(targetPopupId, vidWrap);
              }
            }
          }
        });
      });
    },

    /**
     * Open Modal
     */
    open: function(el){
      html.classList.remove('popup-is-closed');
      html.classList.add('popup-is-opening');
      el.classList.remove('is-closed');
      el.classList.add('is-open');

      setTimeout(function(){
        html.classList.remove('popup-is-opening');
        html.classList.add('popup-is-open');
        isOpen = true;
      }, 200);
    },

    /**
     * Close Modal
     */
    close: function(el){
      html.classList.add('popup-is-closing');
      el.classList.add('is-closing');

      setTimeout(function(){
        html.classList.remove('popup-is-open');
        el.classList.remove('is-open');
        html.classList.remove('popup-is-closing');
        html.classList.add('popup-is-closed');
        el.classList.remove('is-closing');
        el.classList.add('is-closed');

        isOpen = false;
      }, 1000);
    },

    /**
     * Play Vimeo Video
     * Launched Vimeo vid in wrapper via api call
     */
    playVimeoVideo: function(popUp, targetPopupId, vidWrap) {

      var vimeoID = popUp.dataset.vimeoId,
          vimeoColor = popUp.dataset.vimeoColor
          vimeoPlayer = 'https://player.vimeo.com/video/',
          vimeoApi =    'http://www.vimeo.com/api/oembed.json?url=',
          vimeoPlayerId = vimeoPlayer + vimeoID,
          vimeoRequest = 'http://www.vimeo.com/api/oembed.json?url=' + encodeURIComponent(vimeoPlayerId) + '&color=' + vimeoColor + '&autoplay=1&callback=?';

      Util.loadJSONP(vimeoRequest, function(data) {
        console.log(data);
        vidWrap.innerHTML = unescape(data.html);
      });
    },

    /**
     * Stop Vid
     */
    stopVideo: function(targetPopupId, vidWrap) {
      while(vidWrap.firstChild) {
        vidWrap.removeChild(vidWrap.firstChild)
      }
    },
  };
 })();

window.addEventListener('load', function() {
  PopUps.init();
});
