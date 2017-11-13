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
<main role="main" class="has-header-offset">

<section class="heading pad">
  <h1 class="heading__title">Say Cheese</h1>
  <p class="heading__text">
    Let’s shoot some photos together.
  </p>
</section>

<!-- Filters -->
<div class="sticky-wrap">
  <section class="filters js-sticky">
    <nav class="filters__nav">
      <?php echo jumpoff_filter_items('photo_cat'); ?>
    </nav>
  </section>
</div>


<?php
if ( have_posts() ) : ?>
<section class="photos">
  <div class="grid">
    <div class="photos__grid">
      <?php   while ( have_posts() ) : the_post(); ?>
      <?php get_template_part( 'partials/content/content', 'photo' ); ?>
    <?php endwhile; ?>
    </div>
  </div>
</section>
<?php
else :
  get_template_part( 'partials/content/content', 'none' );
endif;
?>

<!-- Pagination -->
<?php get_template_part( 'partials/posts', 'load-more' );?>

</main>

<!-- Footer  -->
<?php get_footer(); ?>
