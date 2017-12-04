<?php
/**
 * Posts: Related
 *
 * The section for Related Posts.
 *
 * @author    Stephen Scaff
 * @package   jumpoff/content/posts-related
 * @version     1.0
 */

if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

// Get id of current post
$current_post = get_the_ID();

// Content type logic
$post_type = '';

if (is_post_type('film')){
  $post_type = 'film';
} else {
  $post_type = 'post';
}

?>

<section class="heading pad-t-lg bg-grey-dark">
  <header class="grid-lg">
    <h2 class="heading__title">Keep Reading</h2>
  </header>
</section>

<section class="feeds pad bg-grey-dark">
  <div class="grid-xl">
    <div class="feeds__grid">
<?php
$cat = jumpoff_get_cat_slug();
$args = array(
  //'category_name'    => $cat,
  'post_type'        => $post_type,
  'posts_per_page'   => 2,
  'post__not_in'     => array ($current_post),
  'order'            => 'DESC',
);

$posts = get_posts( $args );
foreach ( $posts as $post ) : setup_postdata( $post );
  get_template_part( 'partials/content/content', 'feed' );
endforeach;
wp_reset_postdata();
?>
    </div>
  </div>
</section>
