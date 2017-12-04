<?php
/**
 * Template for general archives                                                                                                                   n
 *
 * @author    Stephen Scaff
 * @package   page
 * @version   ``.0.0
 */

if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

get_header(); ?>

<main role="main" class="has-header-offset">

<?php get_template_part( 'partials/partial', 'page-heading' ); ?>

<?php get_template_part( 'partials/partial', 'posts' );?>

<?php get_template_part( 'partials/partial', 'load-more' );?>

</main>

<?php get_footer(); ?>
