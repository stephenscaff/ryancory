v<?php
/**
* content-module
*
* The module for creating content (headers, paragraphs, blockquotes, etc) regions.
*
* @author       Stephen Scaff
* @package      SandP
* @see          kit/scss/components/_content.scss
* @version      1.0
*/

if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

$content = get_sub_field('content');
$grid = get_sub_field('grid_width');
$pad_field = get_sub_field('padding');
$pad = jumpoff_field($pad_field);
?>

<!-- Content -->
<section class="content <?php echo $pad; ?> -module">
  <div class="grid-sm">
    <?php echo $content; ?>
  </div>
</section>
