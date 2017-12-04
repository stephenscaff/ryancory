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

get_header();

$class;

if (is_post_type_archive()) {
  $class = 'is-active';
}

?>

<main role="main" class="has-header-offset">

  <?php get_template_part( 'partials/partial', 'page-heading' ); ?>

  <div class="sticky-wrap">
    <section class="filters js-sticky">
      <nav class="filters__nav">
        <a class="<?php echo $class; ?>" href="<?php echo jumpoff_page_url('photo', true); ?>">All</a>
        <?php echo jumpoff_filter_items('photo_cat', 'link'); ?>
      </nav>
    </section>
  </div>

<?php if ( have_posts() ) : ?>
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

<?php get_template_part( 'partials/posts', 'load-more' );?>

</main>

<?php get_footer(); ?>
