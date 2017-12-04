<?php
/**
 *  Partial: Home Mast Title
 *
 *  Template for displaying a mast sections with ACFs
 *
 *  @author    Stephen Scaff
 *  @package   jumpoff/partials/partial-products
 *  @version    1.0
 */

if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

//vars

$mast_title = get_field('hm_title');
$mast_img = get_field('hm_image');
$mast_link = get_field('hm_link');
$mast_link_text = get_field('hm_link_text');

?>

<section class="mast -home">
  <figure class="mast__bg" style="background-image:url(<?php echo $mast_img['url']; ?>"></figure>
  <div class="grid-lg">
    <h1 class="mast__headline oh"><?php echo jumpoff_line_wrap ($mast_title, span); ?></h1>
    <a class="btn" href="<?php echo $mast_link; ?>">View Work</a>
  </div>
</section>
