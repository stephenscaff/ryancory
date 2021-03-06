<?php
/**
* Content: Photos
*
* @author    Stephen Scaff
* @package   partials/content
* @version   1.0
*/

if ( ! defined( 'ABSPATH' ) ) exit;

$title = get_the_title();
$img = jumpoff_ft_img('full');
$link = get_the_permalink();
$tax = jumpoff_term_class('photo_cat');

?>
<article class="photo <?php echo $tax ?> ">
  <a class="photo__link js-inview" href="<?php echo $link; ?>">
      <figure class="photo__figure">
        <div>
          <span class="photo__scaler">
            <img class="photo__img" src="<?php echo $img; ?>">
          </span>
      </div>
      </figure>
    <header class="photo__header">
      <h3 class="photo__title">
        <?php echo $title; ?>
      </h3>
      <i class="photo__icon icon-chev-right"></i>
    </header>
  </a>
</article>
