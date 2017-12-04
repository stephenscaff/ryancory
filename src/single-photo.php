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
$subtitle = get_field('subtitle');

?>

<main role="main" class="has-header-offset">

<?php while (have_posts()) : the_post(); ?>

<article class="photo-single -has-modules">

  <section class="heading pad">
    <h1 class="heading__title"><?php echo $title; ?></h1>
    <p class="heading__text">
      <?php echo $subtitle; ?>
    </p>
  </section>

<?php get_template_part( 'partials/partial', 'modules' ); ?>

</article>

<?php endwhile; ?>

</main>

<!-- Footer-->
<?php get_footer(); ?>
