<?php
/**
* The default template for single blog posts.
*
* @author    Stephen Scaff
* @package   jumpoff
* @version   1.0.0
*/

if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

get_header();

$title = get_the_title();
$film_title = get_field('film_title');
$subtitle = get_field('subtitle');
?>

<!-- MAIN-->
<main role="main" class="has-header-offset">

<?php while (have_posts()) : the_post(); ?>

<article class="film-single -has-modules">

<section class="mast-film">
  <div class="grid">
    <h1 class="mast-film__pretitle oh">><span><?php echo $title; ?></span></h1>
    <h2 class="mast-film__title oh"><span><?php echo $film_title; ?></span></h2>
    <?php if ($subtitle) : ?>
      <p class="mast-film__text">
      <?php echo $subtitle; ?>
      </p>
    <?php endif; ?>
  </div>
</section>

<?php get_template_part( 'partials/partial', 'modules' ); ?>

</article>

<?php endwhile; ?>

<!-- Next -->
<?php //get_template_part( 'partials/partial', 'next' );?>

</main>

<!-- Footer-->
<?php get_footer(); ?>
