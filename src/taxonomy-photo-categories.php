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
      <?php echo jumpoff_filter_items('photo_cat', 'link'); ?>
    </nav>
  </section>
</div>

<?php
if ( have_posts() ) : ?>
<section class="photos">
  <div class="grid">
    <div class="photos__grid">
      <div id="js-photos"></div>
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

<template id ="photo-template">
<article class="photo">
  <a class="photo__link">
      <figure class="photo__figure">
        <span class="photo__scaler">
          <img class="photo__img"/>
        </span>
      </figure>
    <header class="photo__header">
      <h3 class="photo__title"></h3>
      <i class="photo__icon icon-chev-right"></i>
    </header>
  </a>
</article>
</template>
</main>

<!-- Footer  -->
<?php get_footer(); ?>
