<?php
/**
* Content: content-Posts
*
* @author    Stephen Scaff
* @package   jumpoff/content/content-posts
* @version   1.0
*/

if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

$link = get_the_permalink();
$img = jumpoff_ft_img('large');
$title = get_the_title();
?>



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
