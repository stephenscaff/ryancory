<?php
/**
 * Partial: Page headaings
 *
 * @author    Stephen Scaff
 * @package   partials
 * @version   1.0
 */

if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

$ids = jumpoff_ids();
$page_title = get_field('page_title', $ids);
$subtitle = get_field('subtitle', $ids);

?>

<section class="intro pad-b-lg">
  <div class="grid">
    <div class="intro__grid">
      <header class="intro__header">
        <h2 class="intro__title"><?php echo $intro_text; ?></h2>
      </header>
      <div class="intro__main">
        <p>
        <?php echo $intro_text; ?>
        </p>

        <a class="intro__btn btn" href="<?php echo $intro_link; ?>"><?php echo $intro_text; ?></a>
      </div>
    </div>
  </div>
</section>
