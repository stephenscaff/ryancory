<?php
/**
* Content: Feed / Posts
*
* @author    Stephen Scaff
* @package   jumpoff/content/content-posts
* @version   1.0
*/

if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

$link = get_the_permalink();
$img = jumpoff_ft_img('large');
$title = get_the_title();
$ft_vid = get_field('featured_video');

if (is_post_type('film')) :

?>

<article class="feed">
  <a class="feed__link" href="<?php echo $link; ?>">
    <section class="vid-card">
      <span class="vid-card__link js-vid-card">
        <figure class="vid-card__bg-vid bg-vid">
          <span class="bg-vid__transition"></span>
          <div class="vid-card__scaler">
            <video class="bg-vid__vid" playsinline="" loop="" muted poster="">
              <source type="video/mp4" src="<?php echo $ft_vid['url']; ?>">
              <?php if ($ft_vid_webm) : ?>
                <source type="video/mp4" src="<?php echo $ft_vid_webm['url']; ?>" playsinline="" loop="" muted poster="">
              <?php endif; ?>
            </video>
          </div>
        </figure>
        <div class="vid-card__content">
          <?php get_template_part( 'partials/partial', 'play-btn' ); ?>
        </div>
      </span>
    </section>
    <header class="feed__header">
      <h3 class="feed__title">
        <?php echo $title; ?>
      </h3>
    </header>
  </a>
</article>

<?php else : ?>

<article class="feed">
  <a class="feed__link" href="<?php echo $link; ?>">
    <figure class="feed__figure">
      <span class="feed__scaler">
        <img class="feed__img" src="<?php echo $img; ?>">
      </span>
    </figure>
    <header class="feed__header">
      <h3 class="feed__title">
        <?php echo $title; ?>
      </h3>
    </header>
  </a>
</article>

<?php endif; ?>
