<?php
/**
* Content: content-Posts
*
* @author    Stephen Scaff
* @package   jumpoff/content/content-posts
* @version   1.0
*/

if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly


$intro_title = get_sub_field('intro_title');
$intro_text = get_sub_field('intro_text');
$intro_link = get_sub_field('intro_link');
$intro_link_text = get_sub_field('intro_link_text');

$pad_field = get_sub_field('padding');
$pad = jumpoff_field_styler($pad_field);

?>

<section class="intro <?php echo $pad; ?>">
  <div class="grid">
    <div class="intro__grid">
      <header class="intro__header">
        <h2 class="intro__title"><?php echo $intro_title; ?></h2>
      </header>
      <div class="intro__main">
        <?php echo $intro_text; ?>

        <a class="intro__btn btn" href="<?php echo $intro_link; ?>"><?php $intro_link_text; ?></a>
      </div>
    </div>
  </div>
</section>
