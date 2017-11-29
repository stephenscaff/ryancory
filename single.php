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

<!-- MAIN-->
<main role="main" class="has-header-offset">

<?php while (have_posts()) : the_post(); ?>

<article class="article">

<header class="article__header">

  <section class="heading pad-sm -article">
    <div class="grid-lg">
      <time class="heading__date"> <?php the_time('M j, Y'); ?></time>
      <h1 class="heading__title"><?php echo $title; ?></h1>
      <p class="heading__subtitle"><?php echo $subtitle; ?></p>
    </div>
  </section>

<?php get_template_part( 'partials/partial', 'image-mast' );?>

</header>

<!--Post Content -->
<section class="article__content content pad">
  <div class="grid-sm">
      <?php the_content(); ?>
  </div>
</section>

<?php get_template_part( 'partials/partial', 'modules' ); ?>

<footer class="article__footer pad">
  <div class="grid-sm">
    <div class="article-footer__content">
      <!-- Post Shares -->
      <aside class="shares">
        <h5 class="shares__title">Sharing is caring</h5>
        <a class="shares__link btn" href="http://twitter.com/intent/tweet?text=<?php the_title(); ?>+<?php the_permalink(); ?>">Twitter</a>
        <a class="shares__link btn" href="http://www.facebook.com/share.php?u=<?php the_permalink(); ?>/&amp;title=<?php the_title(); ?>">Facebook</a>
      </aside>
    </div>
  </div>
</footer>

</article>

<?php endwhile; ?>

<!-- Next -->
<?php get_template_part( 'partials/partial-related', 'posts' );?>

</main>

<!-- Footer-->
<?php get_footer(); ?>
