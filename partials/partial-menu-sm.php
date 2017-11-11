<?php
/**
 * Menu Small
 *
 * Displays Mobile Nav
 *
 * @author    Stephen Scaff
 * @package   partials
 * @version   1.0
 */

if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

?>

<section class="site-menu-sm">
  <nav class='site-menu-sm__nav'>
    <ul>
      <li>
        <a href="<?php echo jumpoff_page_url('kodiak'); ?>">The Kodiak</a>
      </li>
      <li>
        <a href="<?php echo jumpoff_page_url('company'); ?>">Our company</a>
      </li>
      <li>
        <a href="<?php echo jumpoff_page_url('customer experience'); ?>">Customer experience</a>
      </li>
      <li>
        <a href="<?php echo jumpoff_page_url('events', 1); ?>">Events</a>
      </li>
      <li>
        <a href="<?php echo jumpoff_page_url('kodiak_adventures', 1); ?>">Kodiak Adventures</a>
      </li>
      <li>
        <a href="<?php echo jumpoff_page_url('contact'); ?>">Contact</a>
      </li>
      <li>
        <a href="<?php echo jumpoff_page_url('news'); ?>">News</a>
      </li>
      <li>
        <a href="<?php echo jumpoff_page_url('careers'); ?>">Join the Team</a>
      </li>
    </ul>
  </nav>
</section>
