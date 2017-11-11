<?php
/**
* Content: Posts / News
*
* @author    Stephen Scaff
* @package   content
* @version   1.0
*/

if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly
?>
<article class="<?php echo $next_class; ?>  <?php echo $next_class; ?>--next">  
  <a class="<?php echo $next_class; ?>__link" href="<?php the_permalink($next_post); ?>">
    <figure class="<?php echo $next_class; ?>__figure" style="background-image:url(<?php echo jumpoff_ft_img('full', $next_post); ?>)"></figure>
    <div class="<?php echo $next_class; ?>__content">
      <span class="<?php echo $next_class; ?>__subtitle">
        Read Next
      </span>
      <h3 class="<?php echo $next_class; ?>__title"><?php echo get_the_title($next_post); ?></h3>
      <!-- <p class="next__text"><?php echo jumpoff_excerpt(175); ?></p> -->

    </div>
  </a>
</article>
