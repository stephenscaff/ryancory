<?php
/**
 * Default Page Template
 *
 * @author    Stephen Scaff
 * @package   page
 * @version   2.0.0
 */

if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

get_header(); ?>

<main role="main">

<section class="mast mast--page">
  <header class="mast__header">
    <h1><?php the_title(); ?></h1>
  </header>
</section>

<section class="content pad">
  <div class="grid-sm">
  <?php
    while (have_posts()) : the_post();
      the_content();
   endwhile;
  ?>
  </div>
</section>

</main>

<?php get_footer(); ?>
