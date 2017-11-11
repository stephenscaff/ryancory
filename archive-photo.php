<?php
/**
 * Post Type Archive: Photo
 *
 * @author    Stephen Scaff
 * @package   archive
 * @see       inc/post-types/post-type-photo.php
 * @version   1.0.0
 */
if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

get_header(); ?>

<!-- MAIN -->
<main role="main" class="">

<section class="heading">
  <h1 class="heading__title">Say Cheese</h1>
  <p class="heading__text">
    Let’s shoot some photos together.
  </p>
</section>

<?php
/**
 * Partial Filters
 *
 * The Partial for Post Footers, used on blogposts and the mondalite post type.
 *
 * @author    Stephen Scaff
 * @package   Partials
 * @version   1.0
 */

if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly
//jumpoff_categories_list();
?>

<!-- Filters -->
<div class="sticky-wrap">
  <section class="filters js-sticky">
    <nav class="filters__nav">
      <?php echo jumpoff_filter_items('photo_cat'); ?>
    </nav>
  </section>
</div>



<!-- Photos -->
<section class="photos">
  <div class="grid">
    <div class="photos__grid">
      <?php
      $counter = 1;
      if ( have_posts() ): while ( have_posts() ) : the_post();
       include(locate_template('partials/content/content-photo.php'));
       $counter++;
      endwhile; else:
        get_template_part( 'partials/content/content', 'none' );
      endif;
    ?>
    </div>
  </div>
</section>

<!-- Pagination -->
<?php get_template_part( 'partials/posts', 'load-more' );?>

</main>

<!-- Footer  -->
<?php get_footer(); ?>
