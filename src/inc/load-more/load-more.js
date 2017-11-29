/*jshint unused:false */
/*jshint -W081 */


var FetchMore = (function() {


  var nextLink = wpFetchMore.nextLink,
      pageNum = parseInt(wpFetchMore.startPage) + 1,
      maxPages = parseInt(wpFetchMore.maxPages),
      link = document.querySelector('#js-load-more'),
      linkContainer = document.querySelector('.load-more'),
      linkBtn = document.querySelector('#js-load-more .btn'),
      postsContainer = document.querySelector('#js-posts'),
      linkText = "Keep Reading",
      linkLoadingText = 'Loading...';

  return{

    /**
     * Init
     */
    init: function() {
      s = this.settings;
      this.bindEvents();
    },

    /**
     * Bind our events
     */
    bindEvents: function(){

      // Main click event
      link.addEventListener('click', function (e) {
        e.preventDefault();
        if (pageNum <= maxPages) {
          FetchMore.startAnimation();
          FetchMore.loadPosts();
          FetchMore.checkLink();
        }
      });

      FetchMore.checkLink();
    },

    /**
     * Hide link if no more posts
     */
    checkLink: function() {
      console.log('check check')
      console.log(pageNum, maxPages)
      if (pageNum >= maxPages) {
        linkContainer.classList.add('fade-out');
      }
    },

    /**
     * Gets Posts from available pagination
     */
    loadPosts: function(){
      fetch(nextLink)
      .then( function (response) {
        return response.text();
      })
      .then( function (data) {
        FetchMore.displayPosts(data);
      })
      .then ( function () {
        FetchMore.updatePage()
        FetchMore.endAnimation()
      })
      .catch( function(error) {
        console.log(error);
      });
    },

    /**
     * Display posts
     * Uses a doc fragment to store and add
     * our fetched text() (html) response
     */
    displayPosts: function(data) {
      var docFrag = document.createDocumentFragment(),
          fragDiv = document.createElement("div");

      fragDiv.innerHTML = data;
      docFrag.appendChild(fragDiv);

      var fetchedPosts = docFrag.querySelector('#js-posts'),
          fetchedPostsHTML = fetchedPosts.innerHTML;

      postsContainer.insertAdjacentHTML('beforeend', fetchedPostsHTML);

    },

    /**
     * Begins animation
     */
    startAnimation: function(){
      linkContainer.classList.add('is-animating');
      linkBtn.innerHTML = 'loading...';
    },

    /**
     * Ends our animation
     */
    endAnimation: function(){
      setTimeout(function() {
       linkContainer.classList.remove('is-animating');
       linkBtn.innerText = 'Keep Reading';
      }, 900);
    },

    /**
     * Updates paginaion pages
     */
    updatePage: function(){
      pageNum++;
      nextLink = nextLink.replace(/\/page\/[0-9]*/, '/page/' + pageNum);
      console.log(nextLink, pageNum);
    },
  };
})();

if (document.querySelector('.load-more')) {
  document.addEventListener("DOMContentLoaded", function(event) {
    FetchMore.init();
  });
}
