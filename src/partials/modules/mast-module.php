<?php
/**
* Content: content-Posts
*
* @author    Stephen Scaff
* @package   jumpoff/content/content-posts
* @version   1.0
*/

if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

$page_title = get_the_title();
$mast_title = get_sub_field('mast_title');
$title = jumpoff_field_fallback($mast_title, $page_title);
$mast_text = get_sub_field('mast_text');
$mast_vid = get_sub_field('mast_video');
$mast_align = get_sub_field('mast_align');
$mast_align_modifier = jumpoff_field_styler($mast_align);

?>

<article class="mast -has-vi <?php echo $mast_align_modifier; ?>">
  <?php if ($mast_vid) : ?>
  <figure class="mast__bg-vid bg-vid">
    <span class="mast__transition"></span>
    <video class="bg-vid__vid" autoplay="" playsinline="" loop="" muted poster="">
      <source type="video/mp4" src="<?php echo $ft_vid['url']; ?>">
      <!-- <source type="video/webm" src=""> -->
    </video>
  </figure>
<?php endif; ?>
<div class="grid">
  <header class="mast__header">
      <h1 class="mast__title"><?php echo $title; ?></h1>
      <?php if ($mast_text) : ?><p class="mast__text"><?php echo $mast_text; ?></p><?php endif; ?>
    </header>
  </div>
</article>
