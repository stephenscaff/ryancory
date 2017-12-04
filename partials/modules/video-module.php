<?php
/**
 * Inline Video Module with Vimeo and Youtube support
 *
 * @author       Stephen Scaff
 * @package      partials
 * @version      1.0
 */

if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

$vid = get_sub_field('video_file');
$vimeo_id = get_sub_field('vimeo_id');
$youtube_id = get_sub_field('vimeo_id');
$pad_field = get_sub_field('padding');
$pad = jumpoff_field_styler($pad_field);

?>

<section class="vid -full <?php echo $pad; ?>">
  <div class="grid-lg js-plyr">
  <?php if ($vimeo_id) : ?>
    <div class="" data-type="vimeo" data-video-id="<?php echo $vimeo_id; ?>"></div>
  <?php elseif ($youtube_id) : ?>
    <div class="js-plyr" data-type="youtube" data-video-id="<?php echo $youtub_id; ?>" ></div>
  <?php else : ?>
    <video class="vid__video " poster="" controls crossorigin autoplay="" playsinline="" loop="" muted poster="">
      <source type="video/mp4" src="<?php echo $vid['url']; ?>">
    </video>
  <?php endif; ?>
  </div>
</section>
