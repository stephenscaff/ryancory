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
$ft_vid = get_field('featured_video');
?>

<main role="main" class="has-header-offset">

<?php while (have_posts()) : the_post(); ?>
<article class="film-single -has-modules">

<section class="mast -has-vid -framed">
<?php if ($ft_img) : ?>
  <figure class="mast__bg" style="background-image: url(<?php echo $ft_img; ?>)"></figure>
<?php endif; if ($ft_vid ) : ?>
  <figure class="mast__bg-vid bg-vid">
    <span class="mast__transition"></span>
    <video class="bg-vid__vid" autoplay="" playsinline="" loop="" muted poster="">
      <source type="video/mp4" src="<?php echo $ft_vid ['url']; ?>">
    </video>
  </figure>
  <?php endif; ?>
  <div class="grid-lg">
    <div class="mast__content">
      <?php //if ($mast_vid) : get_template_part( 'partials/partial', 'play-btn' ); endif; ?>
      <h1 class="mast__pretitle oh"><span><?php echo $title; ?></span></h1>
      <h2 class="mast__title oh">
        <?php echo jumpoff_line_wrap ($film_title, span); ?>
      </h2>
    </div>
  </div>
</section>


    <?php get_template_part( 'partials/partial', 'modules' ); ?>
  </article>

<?php endwhile; ?>

  <?php get_template_part( 'partials/partial-related', 'posts' );?>

</main>

<?php get_footer(); ?>
