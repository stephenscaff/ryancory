<?php
/**
 * Post Header
 *
 * The Partial for Post Footers, used on blogposts and the mondalite post type.
 *
 * @author    Stephen Scaff
 * @package   Jumpoff
 * @version   1.0
 */

if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

$post_subtitle = get_field('post_subtitle');
$post_img = jumpoff_ft_img('full');
?>

<header class="mast mast--post">
  <?php if ($post_img) : ?>
    <figure class="mast__bg" style="background-image:url('<?php echo $post_img; ?>');"></figure>
  <?php endif; ?>
  <div class="mast__header">
    <time class="mast__meta"><?php the_time('F j, Y'); ?></time>
    <h1 class="mast__title"><?php the_title(); ?></h1>
    <?php if ($post_subtitle) : ?>
      <p class="mast__subtitle"><?php echo $post_subtitle; ?></p>
    <?php endif; ?> 
  </div>
</header>


