<?php
/**
 * Images / Gallery Module
 *
 * The module for adding image gallery.
 *
 * @author       Stephen Scaff
 * @package      partials
 * @version      1.0
 */

if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

$gallery = 'images';
$vid = get_sub_field('video_file');
$vid_id = $vid['ID'];
$vimeo_id = get_sub_field('vimeo_id');
$width = get_sub_field('grid_width');
$pad_field = get_sub_field('padding');
$pad = jumpoff_field_styler($pad_field);

function vid_class() {
  $class;

  if ($vimeo_id) {
    $class = 'has-vimeo-vid';
  } else {
    $class = 'has-video';
  }
  return $class;
}


?>

<section class="vid-card -full">
  <div class="grid-xl">
    <a class="vid-card__link <?php echo vid_class(); ?>"
      data-popup="video-<?php echo $vid_id; ?>"
      <?php if ($vimeoId ) : ?>
        data-vimeo-id="<?php echo $vimeo_id; ?>"
      <?php endif; ?>
    >
      <figure class="vid-card__bg-vid bg-vid">
        <span class="bg-vid__transition"></span>
        <div class="vid-card__scaler">
          <video class="bg-vid__vid" poster="" controls crossorigin autoplay="" playsinline="" loop="" muted poster="">
            <source type="video/mp4" src="<?php echo $vid['url']; ?>">
          </video>
        </div>
      </figure>
      <div class="vid-card__content">
        <?php get_template_part( 'partials/partial', 'play-btn' ); ?>
      </div>
    </a>
  </div>
</section>
