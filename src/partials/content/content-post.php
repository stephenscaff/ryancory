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

?>
<article class="post">
  <a class="post__link" href="<?php the_permalink(); ?>">
    <figure class="post__bg">
      <span class="post__scaler">
        <div class="post__img" style="background-image:url(<?php echo $img; ?>)"></div>
      </span>
    </figure>
    <div class="post__content">
      <!-- <span class="post__date"><?php the_time('m/d/y'); ?></span> -->
      <h2 class="post__title"><?php echo $title; ?></h2>
      <p class="post__excerpt"><?php echo $excerpt ?></p>
      <span class="btn -white">Read On</span>
    </div>
  </a>
</article>
