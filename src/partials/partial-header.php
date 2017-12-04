<?php
/**
 * Partial: partials/partial-header
 *
 * @author    Stephen Scaff
 * @package   jumpoff/partials/partial-header
 * @version    1.0
 */

if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

?>

<body id="top" <?php body_class(); ?>>

<header class="site-header">
  <div class="site-header__grid">
    <a class="u-menu-toggle js-menu-toggle" href="#">
      <span class="u-menu-toggle__bars"></span>
    </a>
    <a class="site-header__logo" href="<?php echo jumpoff_page_url('home'); ?>">
      <?php echo jumpoff_svg('logo-ryancory'); ?>
    </a>
  </div>
</header>
