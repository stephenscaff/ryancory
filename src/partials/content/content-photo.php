<?php
/**
* Content: Photos
*
* @author    Stephen Scaff
* @package   partials/content
* @version   1.0
*/

if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

$title = get_the_title();
$img = jumpoff_ft_img('large');
$link = get_the_permalink()

?>
<article class="photo">
  <a class="photo__link" href="<?php echo $link; ?>">
    <figure class="work-feed__figure">
      <img class="work-feed__img" src="<?php echo $img; ?>">
    </figure>
    <header class="work-feed__header">
      <h3 class="work-feed__title">
        <?php echo $title; ?>
      </h3>
      <i class="photo__icon icon-chev-right"></i>
    </header>
  </a>
</article>
