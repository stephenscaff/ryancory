<?php
/**
 * Post Footer
 *
 * The Partial for Post Footers, used on blogposts and the mondalite post type.
 *
 * @author    Stephen Scaff
 * @package   Jumpoff
 * @version   1.0
 */

if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

?>

<footer class="post-footer pad">
  <div class="grid-sm">
    <!-- Post Cats -->
    <!-- <aside class="post-cats">
      <span class="post-cats__title">Posted In : </span>
      <span class="post-cats__item"><?php //the_category('</span><span class="post-cats__item">'); ?></span>
    </aside> -->

    <!-- Post Shares -->
    <aside class="post-shares">
      <hr class="sep-center"/>
      <h5 class="post-shares__title">Share This Story</h5>
      <a class="post-shares__link" href="http://twitter.com/intent/tweet?text=<?php the_title(); ?>+<?php the_permalink(); ?>"><i class="icon-twitter"></i></a>
      <a class="post-shares__link" href="http://www.facebook.com/share.php?u=<?php the_permalink(); ?>/&amp;title=<?php the_title(); ?>"><i class="icon-facebook-f"></i></a>
    </aside>
  </div>
</footer>