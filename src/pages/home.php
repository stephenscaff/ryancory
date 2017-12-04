<?php
/**
 * Template Name: Home
 *
 * @author    Stephen Scaff
 * @package   page
 * @version   1.0.0
 */

get_header();

?>
<main role="main">

<?php get_template_part( 'partials/partial', 'mast-home' ); ?>



<?php get_template_part( 'partials/partial', 'modules' ); ?>


</main>
<!-- Footer -->
<?php get_footer(); ?>
