<?php
/**
 * Partial: Search Drawer
 *
 * @author    Stephen Scaff
 * @package   partials
 * @version    1.0
 */

if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

?>
<section class="site-search">
  <a class="site-search__close js-search-close" href="#">
    <div class='site-search__x'></div>
  </a>
  <div class="site-search__content">
    <h2 class="site-search__title">What can we help you find?</h2>
    <form id="site-search-form" role="search" class="site-search__form form--minimal" method="get" action="<?php echo esc_url( home_url( '/' ) ); ?>">
      <input id="s" class="site-search__input" name="s" type="text" placeholder="">
     <button id="site-search-submit" class="site-search__submit btn-clear btn--alpha" type="submit" aria-label="Submit" title="Search">Search Site</button>
   </form>
  </div>
</section>