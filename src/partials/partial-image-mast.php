<?php
/**
 *
 *
 * The section for Related Posts.
 *
 * @author    Stephen Scaff
 * @package   jumpoff/content/posts-related
 * @version     1.0
 */

if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly


$ft_img_med = jumpoff_ft_img('medium');
$ft_img = jumpoff_ft_img('full');

function get_mod_class() {
  $class;
  if (is_singular('post')) {
    $class =  '-article';
  }
  else if (is_page('about')) {
    $class = '-about';
  }
  else {
    return;
  }
  return $class;
}

$modclass = get_mod_class();

?>

<style>
  .mast-img__bg {
    background-image: url(<?php echo $ft_img_med; ?>);
  }
  @media (min-width: 32em) {
    .mast-img__bg {
      background-image: url(<?php echo $ft_img; ?>);
    }
  }
</style>

<section class="mast-img <?php echo $modclass; ?>">
  <figure class="mast-img__bg"></figure>
</section>
