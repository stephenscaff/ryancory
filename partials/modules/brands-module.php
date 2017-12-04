<?php
/**
* Content: content-Posts
*
* @author    Stephen Scaff
* @package   jumpoff/content/content-posts
* @version   1.0
*/

if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly


$brands_title = get_sub_field('brands_title');
$brands = 'brands_logos';

$pad_field = get_sub_field('padding');
$pad = jumpoff_field_styler($pad_field, true);
$bg_color_field = get_sub_field('bg_color');
$bg_color = jumpoff_field_styler($bg_color_field, true);

?>
<section class="brands <?php echo $pad; echo $bg_color; ?>">
  <?php if ($brands_title) : ?>
  <header class="heading">
    <div class="grid">
      <h5 class="font-title-sm color-alpha"><?php echo $brands_title; ?></h5>
    </div>
  </header>
  <?php endif; ?>
  <div class="grid-lg">
    <div class="brands__grid">
      <?php
      while( have_rows($brands) ): the_row();
      $img = get_sub_field('image');
      ?>
      <figure class="brand">
        <img src="<?php echo $img['url']; ?>" alt="<?php echo $img['alt']; ?>"/>
      </figure>
      <?php endwhile; ?>
    </div>
  </div>
</section>
