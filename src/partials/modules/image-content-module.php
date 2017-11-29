<?php
/**
 * Image Content Module
 *
 * The module to align Image next to content
 *
 * @author       Stephen Scaff
 * @package      partials/modules
 * @see          kit/scss/components/_halfs.scss
 * @version      1.0
 */

if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

$img = get_sub_field('image');
$content = get_sub_field('content');

?>

<section class="halfs -module">
  <div class="grid-lg">
    <div class="halfs__grid">
      <figure class="halfs__figure">
        <img class="halfs__img" src="<?php echo $img['url']; ?>" alt="<?php echo $img['alt']; ?>">
      </figure>

      <div class="halfs__content content">
        <?php echo $content; ?>
      </div>
    </div>
  </div>
</section>
