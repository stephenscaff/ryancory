/*jshint -W030*/
/*globals feature: false */
//
//
// /**
//  * Global Site inits
//  */
// var site = {
//   test: function(text) {
//     console.log(text)
//   },
//
//   plyr: function() {
//     // var plyrStops = document.querySelectorAll('.js-plyr-stop');
//     // var plyrs = document.querySelectorAll('.js-plyr');
//     //
//     // //plyr.setup(plyrs);
//     // players = plyr.setup(plyrs);
//     // players;
//     //
//     // var plyrs = plyr.setup({
//     //   // Output to console
//     //   //debug: true
//     // });
//     // console.log(players)
//
//     // Array.from(plyrStops).forEach(function (plyrStop) {
//     //   plyrStop.addEventListener('click', function (e) {
//     //     players.stop();
//     //     console.log('stopeed')
//     //   });
//     // });
//   }
// }
// //
// // if (document.querySelectorAll('js-plyr')) {
// //   console.log('player')
// //   // site.plyr();
// //  }



 (function() {
   var plyrStops = document.querySelectorAll('.js-plyr-stop');
   var players = document.querySelectorAll('.js-plyr');

  plyr.setup(players);

  Array.from(plyrStops).forEach(function (plyrStop) {

    plyrStop.addEventListener('click', function (e) {
          //players.stop();

          var vids = document.querySelectorAll('video');
          Util.forEach ( vids, function (index, vid) {

            vid.pause();

          });

          console.log(plyrStop, plyr, players)
        });
      });

 })();


 //
 // (function() {
 //   // This is the bare minimum JavaScript. You can opt to pass no arguments to setup.
 //   // e.g. just plyr.setup(); and leave it at that if you have no need for events
 //   var instances = plyr.setup({
 //     // Output to console
 //     //debug: true
 //   });
 //
 //   // Get an element
 //   function get(selector) {
 //     return document.querySelector(selector);
 //   }
 //
 //   // Custom event handler (just for demo)
 //   function on(element, type, callback) {
 //     if (!(element instanceof HTMLElement)) {
 //       element = get(element);
 //     }
 //     element.addEventListener(type, callback, false);
 //   }
 //
 //   // Loop through each instance
 //   instances.forEach(function(instance) {
 //     // Play
 //     console.log(instances)
 //     on('.js-play', 'click', function() {
 //       instance.play();
 //     });
 //
 //     // Pause
 //     on('.js-pause', 'click', function() {
 //       instance.pause();
 //     });
 //
 //     // Stop
 //     on('.js-plyr-stop', 'click', function() {
 //       instance.stop();
 //       console.log(instance, 'stop');
 //
 //     });
 //
 //     // Rewind
 //     on('.js-rewind', 'click', function() {
 //       instance.rewind();
 //     });
 //
 //     // Forward
 //     on('.js-forward', 'click', function() {
 //       instance.forward();
 //     });
 //   });
 // })();






//site.test('Yep. _inits are importing!')
//
// window.onload = function() {
//   //var vids = querySelectorAll('.bg-vid__transition');
//  var vid_wrap = document.querySelectorAll('js-video video');
//  for (var i = 0; i < vids.legth; i++) {
//    vids[i].addEventListener( 'mouseover', function(e) {
//      vids[i].play()
//      console.log('yoyoyoy');
//    });
//    vids[i].addEventListener( 'mouseout', function(e) {
//      vids[i].pause()
//    });
//  }
// }

//
// function createNode(element) {
//     return document.createElement(element);
// }
//
// function append(parent, el) {
//   return parent.appendChild(el);
// }
//
// const ul = document.getElementById('js-photos');
// const url = '/ryancory/api/wp/v2/photos?filter[photo-categories]=people';
// fetch(url)
// .then((resp) => resp.json())
// .then(function(data) {
//   let photos = data.results;
//   return photos.map(function(photo) {
//     let li = createNode('li'),
//         img = createNode('img'),
//         span = createNode('span');
//     img.src = photo.picture.medium;
//     span.innerHTML = `${photo.title} ${photo.link}`;
//     append(li, img);
//     append(li, span);
//     append(ul, li);
//   })
// })
// .catch(function(error) {
//   console.log(error);
// });


//
//
// const apiRoot = 'https://api-test.dev/wp-json',
// 			articleContainer = document.querySelector('#js-posts');
// let listPosts = {};
//
// /**
//  * init - Initialize the listing of posts
//  *
//  */
// listPosts.init = function() {
//
// 	fetch(  '/ryancory/api/wp/v2/photos?filter[photo-categories]=people' )
// 		.then( response => {
//       if (response.status !== 200) {
//         console.log('Problem! Status Code: ' +
//           response.status);
//         return;
//       }
// 			response.json().then( posts => {
// 				listPosts.clearPosts();
// 				listPosts.render( posts );
// 			});
// 		})
// 		.catch(function(err) {
// 			console.log('Error: ', err);
// 		});
//
// };
// listPosts.init();
//
//
// /**
//  * renderPost - Display posts on the page
//  *
//  * @param  {Array} posts Array of Posts in JSON
//  */
// listPosts.render = function( posts ) {
// 	for ( let post of posts ) {
// 		listPosts.renderPost( post );
// 	}
// };
//
//
// /**
//  * renderPost - Displays an individual post on the page
//  *
//  * @param  {Object} post Individual post
//  */
// listPosts.renderPost = function( post ) {
//
//   const articleEl = document.createElement( 'article' ),
// 			titleEl = listPosts.getTitleMarkup( post ),
// 			contentEl = listPosts.getContentMarkup( post );
//
// 	articleEl.classList.add('post');
// 	articleEl.appendChild( titleEl );
// 	articleEl.appendChild( contentEl );
// 	articleContainer.appendChild(articleEl);
//
// };
//
//
// /**
//  * getTitleMarkup - Get the markup for a post title
//  *
//  * @param  {Object} post Individual post from the API
//  * @return {Object}      Title markup with link and post title
//  */
// listPosts.getTitleMarkup = function( post ) {
//
// 	const titleEl = document.createElement( 'h2' ),
// 			titleLinkEl = document.createElement( 'a' ),
// 			title = document.createTextNode( post.title.rendered );
//
// 	titleEl.classList.add('entry-title');
// 	titleLinkEl.appendChild( title );
// 	titleLinkEl.href = post.link;
// 	titleLinkEl.target = '_blank';
// 	titleEl.appendChild( titleLinkEl );
//
// 	return titleEl;
//
// };
//
//
// /**
//  * getContentMarkup - Get the markup for post content
//  *
//  * @param  {Object} post Individual post from the API
//  * @return {Object}      Content markup with content
//  */
// listPosts.getContentMarkup = function( post ) {
// 	const contentEl = document.createElement( 'div' ),
// 			content = document.createTextNode('');
//
// 	contentEl.classList.add('entry-content');
// 	contentEl.appendChild( content );
// 	contentEl.innerHTML = post.content.rendered;
//
// 	return contentEl;
//
// };
//
//
// /**
//  * clearPosts - Clear posts from page
//  *
//  */
// listPosts.clearPosts = function() {
// 		articleContainer.innerHTML = '';
// };


// var url = `/ryancory/api/wp/v2/photos?filter[photo-categories]=people`;
// var fetchFeed = options => {
//   url = `/ryancory/api/wp/v2/photos?filter[photo-categories]=people`;
//
//   if (!window.Promise) {
//     window.Promise = Promise;
//   }
//
//   fetchJsonp(url).then(response => response.json()).then(json => {
//     if (json.meta.code === 200) {
//       displayFeed(json, options);
//     } else {
//       console.error(json.meta.error_message);
//     }
//   }).catch(error => {
//     console.error(error);
//   });
// };

//
// var url = `/ryancory/api/wp/v2/photos?filter[photo-categories]=people`;
// fetch(url)
//   .then(response => {
//     if (response.ok) {
//       //return response.json()
//       console.log(response.json())
//       console.log(post.link)
//       displayPhotos()
//     } else {
//       return Promise.reject('something went wrong!')
//     }
//   });
//
//
//   var displayPhotos = (json) => {
//     targetEl = document.getElementById('js-posts');
//
//     console.log('inside')
//     if (!targetEl) {
//       console.error(`No element with id="${targetEl}" was found on the page.`);
//       return;
//     }

    // json.data.forEach(data => {
    //   article = document.createElement('article');
    //   a = document.createElement('a');
    //   a.href = data.link;
    //   a.target = '_blank';
    //   figure = document.createElement('figure');
    //   img = document.createElement('img');
    //   img.src = data.link;
    //
    //   figure.appendChild(img);
    //   a.appendChild(figure);
    //   article.appendChild(a);
    //
    //   targetEl.appendChild(article);
    // });
  // };


  //
  //
  // function createNode(element) {
  //     return document.createElement(element);
  // }
  //
  // function append(parent, el) {
  //   return parent.appendChild(el);
  // }
  //
  // // const ul = document.getElementById('js-posts');
  // // const url = '/ryancory/api/wp/v2/photos?filter[photo-categories]=people';
  // // fetch(url)
  // // .then((resp) => resp.json())
  // // .then(function(data) {
  // //
  // //   console.log(data )
  // //   //var post = data;
  // //   //console.log(post.title)
  // //
  // //   data.filter(key =>{
  // //     console.log(key.date);
  // //   })
  // //   for (var i = 0; i < data.length; i++){
  // //
  // //     console.log(data[i].title)
  // //   };
  // //   // return photos.map(function(author) {
  // //   //   let article = createNode('article'),
  // //   //       img = createNode('img'),
  // //   //       title = createNode('title');
  // //   //   //img.src = photos.picture.medium;
  // //   //   title.innerHTML = `${photos.title}`;
  // //   //
  // //   //   //append(li, img);
  // //   //   append(article, title);
  // //
  // // })
  // // .catch(function(error) {
  // //   console.log(error);
  // // });
