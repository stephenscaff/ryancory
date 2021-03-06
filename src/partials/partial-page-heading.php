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

<section class="heading -page">
  <h1 class="heading__title oh"><span><?php echo $page_title; ?></span></h1>
  <p class="heading__text oh">
    <span><?php echo $subtitle; ?></span>
  </p>
</section>
