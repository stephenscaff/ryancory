<?php
/**
 * Template for iconv(in_charset, out_charset, str)                                                                                                                       n
 *
 * @author    Stephen Scaff
 * @package   page
 * @version   2.0.0
 */

if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

get_header(); ?>

<!-- Main -->
<main role="main" class="has-header-offset">


  <section class="heading pad">
    <h1 class="heading__title">I Got Stories</h1>
    <p class="heading__text">
      You got eyballs.
    </p>
  </section>

<!-- Posts -->
<?php get_template_part( 'partials/partial', 'posts' );?>

<!-- Pagination -->
<?php get_template_part( 'partials/partial', 'load-more' );?>

</main>

<!-- Footer -->
<?php get_footer(); ?>
