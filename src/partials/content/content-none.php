<?php
/**
* Content: None
*
* @author    Stephen Scaff
* @package   content/content-none
* @version   1.0
*/

if ( ! defined( 'ABSPATH' ) ) exit;

?>

<section class="nunzo text-center">
  <div class="grid">
    <div class="nunzo__content text-center">
      <?php if (is_search()) : ?>
        <h4>Sorry.</h4>
        <p>Your search returned no results</p>
      <?php else : ?>
      <h4>Sorry.</h4>
      <p>No content found.</p>
     <?php endif; ?>
   </div>
  </div>
</section>
