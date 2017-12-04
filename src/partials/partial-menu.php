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

<section class="site-menu">
  <div class="site-menu__grid">
    <nav class="site-menu__nav">
      <a class="site-menu__link" href="<?php echo jumpoff_page_url('home'); ?>"><span>Home</span></a>
      <a class="site-menu__link" href="<?php echo jumpoff_page_url('film', true); ?>"><span>Films</span></a>
      <a class="site-menu__link" href="<?php echo jumpoff_page_url('photo', true); ?>"><span>Photos</span></a>
      <a class="site-menu__link" href="<?php echo jumpoff_page_url('stories'); ?>"><span>Stories</span></a>
      <a class="site-menu__link" href="<?php echo jumpoff_page_url('about'); ?>"><span>About</span></a>
    </nav>

    <footer class="site-menu__footer">
      <span>Ryan</span>
      <span>Cory</span>
    </footer>
  </div>
</section>
