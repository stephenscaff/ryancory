<?php
/**
 * Post Type Archive: Film
 *
 * @author    Stephen Scaff
 * @package   archive
 * @see       inc/post-types/post-type-film.php
 * @version   1.0.0
 */

if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

get_header(); ?>

<!-- MAIN -->
<main role="main" class="">


<section class="mast -has-vid">
  <a class="mast__link">

    <figure class="mast__bg" style="background-image: url()"></figure>
    <figure class="mast__bg-vid bg-vid">
      <span class="mast__transition"></span>
      <video class="bg-vid__vid" autoplay="" playsinline="" loop="" muted poster="">
        <source type="video/mp4" src="<?php echo jumpoff_path(); ?>/videos/tmp-vid.mp4">
        <!-- <source type="video/webm" src=""> -->
      </video>
    </figure>
    <div class="mast__content">
      <?php get_template_part( 'partials/partial', 'play-btn' ); ?>

      <h1 class="mast__title">The Title Standard</h1>

      <span class="btn -white">Read & Watch</span>
    </div>
  </a>
</section>

<section class="intro -has-vid -is-vid-archive">
  <div class="grid-xl">
    <a class="intro__grid -link-wrap">
      <header class="intro__header">
        <h2 class="intro__title">Woodshed Production</h2>
        <p class="intro__text">
          This is a story all about how my life got twisted upside down. And, I'd like to take a min, just sit right there, and I'll tell you how I became the prince of Belaire.
        </p>
        <span class="intro__btn btn" href="#">View Work</span>
      </header>
      <div class="intro__main">
        <section class="vid-card">
          <div class="vid-card__link js-vid-card">
            <figure class="vid-card__bg" style="background-image: url()"></figure>
            <figure class="vid-card__bg-vid bg-vid">
              <span class="bg-vid__transition"></span>
              <div class="vid-card__scaler">
                <video class="bg-vid__vid" playsinline="" loop="" muted poster="">
                  <source type="video/mp4" src="<?php echo jumpoff_path(); ?>/videos/tmp-vid.mp4">
                  <!-- <source type="video/webm" src=""> -->
                </video>
              </div>
            </figure>
            <div class="vid-card__content">
              <?php get_template_part( 'partials/partial', 'play-btn' ); ?>
            </div>
          </div>
        </section>
      </div>
    </a>
  </div>
</section>

<section class="intro -has-vid -is-vid-archive">
  <div class="grid-xl">
    <a class="intro__grid -link-wrap">
      <header class="intro__header">
        <h2 class="intro__title">Jonatho Kessler Creative</h2>
        <p class="intro__text">
          This is a story all about how my life got twisted upside down. And, I'd like to take a min, just sit right there, and I'll tell you how I became the prince of Belaire.
        </p>
        <span class="intro__btn btn" href="#">View Work</span>
      </header>
      <div class="intro__main">
        <section class="vid-card">
          <div class="vid-card__link js-vid-card">
            <figure class="vid-card__bg" style="background-image: url()"></figure>
            <figure class="vid-card__bg-vid bg-vid">
              <span class="bg-vid__transition"></span>
              <div class="vid-card__scaler">
                <video class="bg-vid__vid"  playsinline="" loop="" muted poster="">
                  <source type="video/mp4" src="<?php echo jumpoff_path(); ?>/videos/tmp-vid.mp4">
                  <!-- <source type="video/webm" src=""> -->
                </video>
              </div>
            </figure>
            <div class="vid-card__content">
              <?php get_template_part( 'partials/partial', 'play-btn' ); ?>
            </div>
          </div>
        </section>
      </div>
    </div>
  </div>
</section>

<section class="intro -has-vid -is-vid-archive">
  <div class="grid-xl">
    <a class="intro__grid -link-wrap">
      <header class="intro__header">
        <h2 class="intro__title">Inside the Makers Space: A virtual Tour</h2>
        <p class="intro__text">
          This is a story all about how my life got twisted upside down. And, I'd like to take a min, just sit right there, and I'll tell you how I became the prince of Belaire.
        </p>
        <span class="intro__btn btn" href="#">View Work</span>
      </header>
      <div class="intro__main">
        <section class="vid-card">
          <div class="vid-card__link js-vid-card js-vid-autoplay">
            <figure class="vid-card__bg" style="background-image: url()"></figure>
            <figure class="vid-card__bg-vid bg-vid">
              <span class="bg-vid__transition"></span>
              <div class="vid-card__scaler">
                <video class="bg-vid__vid" autoplay="" playsinline="" loop="" muted poster="">
                  <source type="video/mp4" src="<?php echo jumpoff_path(); ?>/videos/tmp-vid.mp4">
                  <!-- <source type="video/webm" src=""> -->
                </video>
              </div>
            </figure>
            <div class="vid-card__content">
              <?php get_template_part( 'partials/partial', 'play-btn' ); ?>
            </div>
          </div>
        </section>
      </div>
    </div>
  </div>
</section>

<a class="panel-card__link js-popup" data-popup="test-popup">Open Popup</a>
<section id="test-popup" class="popup" aria-hidden="true">

  <button class="popup__close js-close-popup" aria-label="Close">
    <div class="u-close-x"></div>
  </button>

  <div class="popup__content">
    <h3>Some Popup</h3>
  </div>
</section>



<a class="banner__link" data-popup="video-238384639" data-vimeo-id="238384639" data-vimeo-color="78bc20">238384639</a>


<section id="video-238384639" class="popup" aria-hidden="true">
 <button class="popup__close js-close-popup" aria-label="Close">
   <div class="popup__x"></div>
 </button>
 <div class='js-vid-wrap flex-vid popup__vid'></div>
</section>




 <a class="banner__link" data-popup="video-231294881" data-vimeo-id="231294881" data-vimeo-color="78bc20">HEHEHEHHE</a>


 <section id="video-231294881" class="popup" aria-hidden="true">
  <button class="popup__close js-close-popup" aria-label="Close">
    <div class="popup__x"></div>
  </button>
  <div class='js-vid-wrap flex-vid popup__vid'></div>
</section>
</main>



</main>


<!-- Footer  -->
<?php get_footer(); ?>
