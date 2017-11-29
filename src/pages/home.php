<?php
/**
 * Template Name: Home
 *
 * @author    Stephen Scaff
 * @package   page
 * @version   1.0.0
 */

get_header();

?>
<main role="main">

<section class="mast -home">
  <figure class="mast__bg" style="background-image:url(<?php echo jumpoff_img(); ?>/home/home-mast-bg-1.jpg)"></figure>
  <div class="grid-lg">
    <h1 class="mast__headline">Hi, I’m Ryan & I love to create cool shit for cool people.</h1>
    <a class="btn">View Work</a>
  </div>
</section>


<section class="vid-card -full">
<div class="grid-xl">
  <a class="vid-card__link">

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
  </a>
</div>
</section>

<!-- <div class="js-plyr">
<div class="grid-lg">
<video poster="https://cdn.plyr.io/static/demo/View_From_A_Blue_Moon_Trailer-HD.jpg" controls crossorigin>
  <!-- Video files -->
  <source src="https://cdn.plyr.io/static/demo/View_From_A_Blue_Moon_Trailer-HD.mp4" type="video/mp4">
  <source src="https://cdn.plyr.io/static/demo/View_From_A_Blue_Moon_Trailer-HD.webm" type="video/webm">
</video>
</div>
</div> -->

<div class="js-plyr">
  <div class="grid-lg">
<div data-type="vimeo" data-video-id="143418951"></div>
</div>
</div>

<section class="intro pad-b-lg">
  <div class="grid">
    <div class="intro__grid">
      <header class="intro__header">
        <h2 class="intro__title">I'm a Creative Solutions Pro</h2>
      </header>
      <div class="intro__main">
        <p>
          Sup playboys? I'm Ryan Cory, crafter of that hot shit till the mutheffen break of dawn, feel me? I bring the ruckus on the legit motion, vid and photo snaps. Harder than a bossman, craftier than a corner kid, hit me up and I'll break you off some of that good good.
        </p>

        <a class="intro__btn btn" href="#">Hit Me Up</a>
      </div>
    </div>
  </div>
</section>



<section class="brands bg-grey-dark pad">
  <header class="heading">
    <div class="grid">
      <h5 class="font-title-sm color-alpha">Some brands I've worked with</h5>
    </div>
  </header>
  <div class="grid-lg">
    <div class="brands__grid">
      <figure class="brand">
        <img src="<?php echo jumpoff_img(); ?>/logos/logo-microsoft.png"/>
      </figure>
      <figure class="brand">
        <img src="<?php echo jumpoff_img(); ?>/logos/logo-gates.png"/>
      </figure>
      <figure class="brand">
        <img src="<?php echo jumpoff_img(); ?>/logos/logo-xbox.png"/>
      </figure>
      <figure class="brand">
        <img src="<?php echo jumpoff_img(); ?>/logos/logo-google.png"/>
      </figure>
      <figure class="brand">
        <img src="<?php echo jumpoff_img(); ?>/logos/logo-espn.png"/>
      </figure>
      <figure class="brand">
        <img src="<?php echo jumpoff_img(); ?>/logos/logo-mda.png"/>
      </figure>
    </div>
  </div>
</section>

<section class="intro -has-vid">
  <div class="grid-xl">
    <div class="intro__grid">
      <header class="intro__header">
        <h2 class="intro__title">Check the latest smoking hot fire</h2>

        <a class="intro__btn btn" href="#">View Work</a>
      </header>
      <div class="intro__main">
        <section class="vid-card">
            <a class="vid-card__link">

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
            </a>
        </section>

      </div>
    </div>
  </div>
</section>
</main>
<!-- Footer -->
<?php get_footer(); ?>
