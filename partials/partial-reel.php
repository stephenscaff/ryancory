<?php
/**
 *  Partial: Reel
 *
 *  Template for displaying the Promoted Reel
 *
 *  @author    Stephen Scaff
 *  @package   jumpoff/partials/partial-products
 *  @version    1.0
 */

if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

//vars

$mast_title = get_field('home_mast_title');
$mast_link = get_field('home_mast_link');
$mast_bg = get_field('home_mast_image');

?>

<section class="vid-card -full">
<div class="grid-xl">
  <a class="vid-card__link">
    <?php if ($reel_img) : ?>
      <figure class="vid-card__bg" style="background-image: url(<?php echo $reel_img; ?>)"></figure>
    <?php endif; ?>
    <figure class="vid-card__bg-vid bg-vid">
      <span class="bg-vid__transition"></span>
      <div class="vid-card__scaler">
        <video class="bg-vid__vid" poster="" controls crossorigin autoplay="" playsinline="" loop="" muted poster="">
          <source type="video/mp4" src="<?php echo $reel_vid['url']; ?>">
        </video>
      </div>
    </figure>
    <div class="vid-card__content">
      <?php get_template_part( 'partials/partial', 'play-btn' ); ?>
    </div>
  </a>
</div>
</section>
