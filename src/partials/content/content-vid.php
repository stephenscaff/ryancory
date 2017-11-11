<?php
/**
* Content: Vid
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
$vid_mp4 = get_field('vid_mp4');
$vid_webm = get_field('vid_webm');

?>

<article class="intro -has-vid -is-vid-archive">
  <div class="grid-xl">
    <div class="intro__grid">
      <header class="intro__header">
        <h2 class="intro__title"><?php echo title; ?></h2>
        <p class="intro__text">
          <?php echo $excerpt; ?>
        </p>
        <a class="intro__btn btn" href="<?php echo $link; ?>">View Work</a>
      </header>
      <div class="intro__main">
        <section class="vid-card">
          <a class="vid-card__link js-vid-card">
            <figure class="vid-card__bg" style="background-image: url()"></figure>
            <figure class="vid-card__bg-vid bg-vid">
              <span class="bg-vid__transition"></span>
              <div class="vid-card__scaler">
                <video class="bg-vid__vid" playsinline="" loop="" muted poster="">
                  <source type="video/mp4" src="<?php echo $vid_mp4['url']; ?>">
                  <!-- <source type="video/mp4" src="<?php echo jumpoff_path(); ?>/videos/tmp-vid.mp4"> -->
                  <?php if ($vid_webm) : ?>
                    <source type="video/mp4" src="<?php echo $vid_webm['url']; ?>" playsinline="" loop="" muted poster="">
                  <?php endif; ?>
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
</article>
