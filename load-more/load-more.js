/*jshint unused:false */
/*global jQuery */
/*jshint unused:false */
/*jshint -W081 */

var LoadMore = (function() {


    var nextLink = wpLoadMore.nextLink;
    var pageNum = parseInt(wpLoadMore.startPage) + 1;
    var maxPages = parseInt(wpLoadMore.maxPages);
    var link = document.querySelector('#js-load-more');
    var linkContainer = document.querySelector('.load-more');
    var linkBtn = document.querySelector('#js-load-more .btn');
    var postsContainer = document.querySelector('#js-posts');
    var linkText = "Keep Reading";
    var linkLoadingText = 'Loading...';


return{
    /**
     * Init
     */
    init: function() {
      s = this.settings;
      this.bindEvents();
    },

    /**
     * Bind all our events
     */
    bindEvents: function(){

      link.addEventListener('click', function (e) {
        e.preventDefault();
        if (pageNum <= maxPages) {
          LoadMore.animateLoader();
          LoadMore.loadPosts();
        }
      });

      LoadMore.checkLink();
    },

    /**
     * Hide link if no more posts
     */
    checkLink: function() {
      if (pageNum > maxPages) {
        linkContainer.addClass('fade-out');
        //s.linkContainer.delay(500).fadeOut(800);
      }
    },

    /**
     * Updates paginaion pages
     */
    updateText: function(){
      //s.link.text(s.loadingText);
    },

    /**
     * Gets Posts from available pagination
     */
    loadPosts: function(){
      fetch(nextLink)
      .then(function (response) {
        return response.text();
      })
      .then( function (data) {
        LoadMore.displayPosts(data);
      })
      .then ( function () {
        LoadMore.updatePage()
        LoadMore.endAnimation()
      })
      .catch(function(error) {
        console.log(error);
      });




      // $.get(s.nextLink, function(data) {
      //   $(data).find(s.postsContainer).children().appendTo(s.postsContainer).hide().slideDown('400');
      //
      //
      //
      // }).done(function(data) {
      //   LoadMore.endAnimation();
      // });
      // LoadMore.animateLoader();
      //
      // // Update Pagination pages
      // LoadMore.updatePage();
    },

    displayPosts: function(data) {
      var doc = document.createDocumentFragment(),
          div = document.createElement("div");

      div.innerHTML = data;
      doc.appendChild(div);

      var fetchedPosts = doc.querySelector('#js-posts'),
          fetchedPostsHTML = fetchedPosts.innerHTML;
      postsContainer.insertAdjacentHTML('beforeend', fetchedPostsHTML);

    },

    /**
     * Begins animation
     */
    animateLoader: function(){
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
document.addEventListener("DOMContentLoaded", function(event) {
LoadMore.init();
});
