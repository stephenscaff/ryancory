<?php
/**
* Content: content-Posts
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
<article class="mast -has-vid">
  <a class="mast__link" href="<?php echo $link; ?>">
    <!-- <figure class="mast__bg" style="background-image: url()"></figure> -->
    <figure class="mast__bg-vid bg-vid">
      <span class="mast__transition"></span>
      <video class="bg-vid__vid" autoplay="" playsinline="" loop="" muted poster="">
        <source type="video/mp4" src="<?php echo $ft_vid['url']; ?>">
        <!-- <source type="video/webm" src=""> -->
      </video>
    </figure>
    <div class="mast__content">
      <?php get_template_part( 'partials/partial', 'play-btn' ); ?>
      <h1 class="mast__title"><?php echo $title; ?></h1>
      <span class="btn -white">Read & Watch</span>
    </div>
  </a>
</article>
