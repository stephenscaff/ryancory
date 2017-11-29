
/**
 * Menu
 * Allows for links nested inside a block level link wrap
 * via a data attribute of the link location.
 * @author Stephen Scaff
 */
var FetchFilters = (function() {

  const ul = document.getElementById('js-posts');
  const taxFilters = document.querySelectorAll('[data-filter]');
  const api = '/ryancory/api/wp/v2/';
  const photoCats = 'photos?filter[photo_cat]';
  const withImage = '&_embed';
  const photoCatsApi = api + photoCats;
  const targetEl = document.getElementById('js-photos');
  //const url = '/ryancory/api/wp/v2/photos?filter[photo-categories]=people';

  return{

    /**
     * Init
     */
    init = () => {
      this.bind();
    },

    bind = () => {

      Array.from(taxFilters).forEach(function (taxFilter) {
        taxFilter.addEventListener('click', function (e) {
          let slug = this.dataset.filter;
          let url =  photoCatsApi + '=' + slug + withImage;
          console.log(url);
          FetchFilters.getFilters(url);
        });
      });
    },

    /**
     * Build Link
     * Constructs our nested link from our data attribute
     */
    getFilters = (url) => {
      fetch(url)
      .then((res) => res.json())
      .then((data) => {
        //console.log(data )
        FetchFilters.displayFilters(data)
        // data.filter(key =>{
        // console.log(key.date);
        // })
        // for (var i = 0; i < data.length; i++){
        // console.log(data[i].title)
        // };
        // return photos.map(function(author) {
        //   let article = createNode('article'),
        //       img = createNode('img'),
        //       title = createNode('title');
        //   //img.src = photos.picture.medium;
        //   title.innerHTML = `${photos.title}`;
        //
        //   //append(li, img);
        //   append(article, title);

      })
      .catch(function(error) {
      //  console.log(error);
      });
    },

    displayFilters = (data) => {
      data.filter(key => {

        console.log(key.date);
        console.log(key.title.rendered)
        console.log(key._embedded['wp:featuredmedia'][0].source_url);


        var tmpl = document.getElementById('photo-template').content.cloneNode(true);
        tmpl.querySelector('.photo__link').href = key.link;
        tmpl.querySelector('.photo__img').src = key._embedded['wp:featuredmedia'][0].source_url;
        tmpl.querySelector('.photo__title').innerHTML = key.title.rendered;
        console.log(tmpl)
// tmpl.querySelector('.photo__title').innerText = key.title;
// //tmpl.querySelector('.photo__img').innerText = key.featuredmedia.source_url;
        targetEl.appendChild(tmpl);

      })
    },

    transitionState: function(elem){
    },

    closeMenu = () => {
      html.classList.add('menu-is-closing');

      setTimeout(function(){
        html.classList.remove('menu-is-open');
        html.classList.add('menu-is-closed');
        html.classList.remove('menu-is-closing');
        isOpen = false;
      }, 1000);
    },
  };
 })();
FetchFilters.init();
//
//
//
//
//
// const ul = document.getElementById('js-posts');
// const url = '/ryancory/api/wp/v2/photos?filter[photo-categories]=people';
// fetch(url)
// .then((resp) => resp.json())
// .then(function(data) {
//
//   console.log(data )
//   //var post = data;
//   //console.log(post.title)
//
//   data.filter(key =>{
//     console.log(key.date);
//   })
//   for (var i = 0; i < data.length; i++){
//
//     console.log(data[i].title)
//   };
//   // return photos.map(function(author) {
//   //   let article = createNode('article'),
//   //       img = createNode('img'),
//   //       title = createNode('title');
//   //   //img.src = photos.picture.medium;
//   //   title.innerHTML = `${photos.title}`;
//   //
//   //   //append(li, img);
//   //   append(article, title);
//
// })
// .catch(function(error) {
//   console.log(error);
// });
