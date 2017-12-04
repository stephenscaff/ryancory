<?php
/**
 * Video Loop Module
 *
 * Module that created a looping bg vid, with support for full screen popup.
 *
 * @author       Stephen Scaff
 * @package      partials
 * @version      1.0
 */

if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

$gallery = 'images';
$vid = get_sub_field('vl_video_file');
$vid_id = $vid['ID'];
$vimeo_id = get_sub_field('vl_vimeo_id');
$has_vid_popup = get_sub_field('vl_has_video_popup');
//$width = get_sub_field('grid_width');
$pad_field = get_sub_field('padding');
$pad = jumpoff_field_styler($pad_field);

$bg_color_field = get_sub_field('bg_color', true);
$bg_color = jumpoff_field_styler($bg_color_field);
?>

<?php if ($has_vid_popup == false) : ?>

  <section class="vid-card -full  <?php echo $bg_color; ?>">
    <div class="grid-lg">
      <span class="vid-card__wrap <?php echo vidClass(); ?> js-inview"
        data-popup="video-<?php echo $vid_id; ?>"
        <?php if ($vimeoId ) : ?>
          data-vimeo-id="<?php echo $vimeo_id; ?>"
        <?php endif; ?>>
        <figure class="vid-card__bg-vid bg-vid">
          <span class="bg-vid__transition"></span>
          <div class="vid-card__scaler">
            <video class="bg-vid__vid" poster="" controls crossorigin autoplay="" playsinline="" loop="" muted poster="">
              <source type="video/mp4" src="<?php echo $vid['url']; ?>">
            </video>
          </div>
        </figure>
      </span>
    </div>
  </section>

<?php else : ?>
  <section class="vid-card -full">
    <div class="grid-lg">
      <a class="vid-card__link <?php echo vidClass(); ?> js-inview"
        data-popup="video-<?php echo $vid_id; ?>"
        <?php if ($vimeoId ) : ?>
          data-vimeo-id="<?php echo $vimeo_id; ?>"
        <?php endif; ?>>
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

  <section id="video-<?php echo $vid_id; ?>" class="popup" aria-hidden="true">
   <button class="popup__close js-close-popup js-plyr-stop" aria-label="Close">
     <div class="u-close-x"></div>
   </button>
   <?php if ($vimeo_id) : ?>
     <div class='js-vid-wrap flex-vid popup__vid'></div>
   <?php else : ?>
     <div class='js-vid-wrap popup__vid js-plyr'>
       <video controls poster="">
         <source type="video/mp4" src="<?php echo $vid['url']; ?>">
       </video>
     </div>
  <?php endif; ?>
  </section>


<?php endif; ?>
