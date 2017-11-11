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

<article class="search-return">
  <a class="search-return__link" href="<?php the_permalink(); ?>">
    
    <div class="search-return__content">
      <h3 class="search-return__title"><?php the_title(); ?></h3>
      <p class="search-return__text"><?php echo jumpoff_excerpt('250'); ?></p>

      <span class="search-return__btn btn-line">Read More</span>
    </div>
  </a>
</article>