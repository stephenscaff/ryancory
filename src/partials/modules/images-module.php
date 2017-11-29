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

$gallery = 'images';
$width = get_sub_field('grid_width');
$pad_field = get_sub_field('padding');
$pad = jumpoff_field_styler($pad_field);
?>

<section class="gal <?php echo $pad; ?>">
  <div class="grid-lg <?php echo $width; ?>">
    <div class="gal__grid">
      <?php
      while( have_rows($gallery) ): the_row();
      $img = get_sub_field('image');
      $caption = get_sub_field('image')['caption'];
      $size = get_sub_field('size');
      ?>
        <figure class="gal__item <?php echo $size; ?>">
          <img class="gal__img"  src="<?php echo $img['url']; ?>"/>
          <?php if ($caption) : ?>
          <figcaption class="gal__caption"><?php echo $caption; ?></figure>
          <?php endif; ?>
        </figure>
      <?php endwhile; ?>
    </div>
  </div>
</section>
