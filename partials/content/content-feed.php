<?php
/**
* Content: Feed (many missions, etc)
*
* @author    Stephen Scaff
* @package   content
* @version   1.0
*/

if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

?>

<article class="feed">
  <a class="feed__link" href="<?php the_permalink(); ?>">
    <figure class="feed__figure has-preloader">
      <img class="feed__img js-lazy" data-src="<?php echo jumpoff_ft_img('large'); ?>">
      <span class="preloader preloader--white"></span>
    </figure>
    <div class="feed__content" data-scroll="stagger-in">
      <h3 class="feed__title"><?php the_title(); ?></h3>
      <p class="feed__text"><?php echo jumpoff_excerpt('150'); ?></p>
      <span class="feed__btn btn-line btn-line--white">Read Post</span>
    </div>
  </a>
</article>