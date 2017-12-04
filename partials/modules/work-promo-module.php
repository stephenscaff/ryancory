<?php
/**
 * Images / Gallery Module
 *
 * The module for adding image gallery.
 *
 * @author       Stephen Scaff
 * @package      partials
 * @version      1.0
 */

if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly
global $post;
$promoted_work = get_sub_field('promoted_work');

?>

<section class="slider js-slider-work">

<?php
if ($promoted_work) :
  foreach( $promoted_work as $post) :
    setup_postdata($post);
    include(locate_template('partials/content/content-film-slider.php' ));
    wp_reset_postdata();
  endforeach;
endif;
?>

</section>
