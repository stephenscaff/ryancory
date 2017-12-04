<?php
/**
* Content: Film Slider
*
* @author    Stephen Scaff
* @package   jumpoff/content/content-posts
* @version   1.0
*/

if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

$title = get_the_title();
$link = get_the_permalink();
$img = jumpoff_ft_img('large');
$excerpt = jumpoff_excerpt('220');
$ft_vid = get_field('featured_video');

?>

<article class="intro -has-vid -slide">
  <div class="grid-xl">
    <a class="intro__grid -link-wrap" href="<?php echo $link; ?>">
      <header class="intro__header slide__header">
        <h2 class="intro__title"><span><?php echo $title; ?></span></h2>
        <p class="intro__text"><span><?php echo $excerpt; ?></span></p>
        <span class="intro__btn btn"><span>View Work</span></span>
      </header>
      <div class="intro__main">
        <section class="vid-card">
          <div class="vid-card__link js-vid-card">
            <figure class="vid-card__bg" style="background-image: url()"></figure>
            <figure class="vid-card__bg-vid bg-vid">
              <span class="bg-vid__transition"></span>
              <div class="vid-card__scaler">
                <video class="bg-vid__vid" playsinline="" loop="" muted poster="">
                  <source type="video/mp4" src="<?php echo $ft_vid['url']; ?>">
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
</article>
