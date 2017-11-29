<?php
/**
 * Post Type Archive: Film
 *
 * @author    Stephen Scaff
 * @package   archive
 * @see       inc/post-types/post-type-film.php
 * @version   1.0.0
 */

if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

get_header();

?>

<!-- MAIN -->
<main role="main" class="">
<?php
$args = array(
 'post_type'        => 'film',
 'posts_per_page'    => get_option('posts_per_page'),
 'paged'             => $paged,
 'order'             => 'DESC',
);
$paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
$wp_query = new WP_Query($args);
$counter = 1;

if (have_posts()) :
  while ( $wp_query->have_posts() ) : $wp_query->the_post();
    if ($counter == 1 ) :
      get_template_part( 'partials/content/content', 'film-mast' );
    else :
      get_template_part( 'partials/content/content', 'film' );
    endif;
    $counter++;
  endwhile;
endif;
wp_reset_postdata()
?>
<!--
 <a class="banner__link" data-popup="video-231294881" data-vimeo-id="231294881" data-vimeo-color="78bc20">HEHEHEHHE</a>


 <section id="video-231294881" class="popup" aria-hidden="true">
  <button class="popup__close js-close-popup" aria-label="Close">
    <div class="popup__x"></div>
  </button>
  <div class='js-vid-wrap flex-vid popup__vid'></div>
</section>
</main>

 -->

</main>


<!-- Footer  -->
<?php get_footer(); ?>
