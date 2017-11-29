<?php
/**
*   AJAX Load More
*   A simple load more to replace pagination
*
*   @see load-more/load-more.js
*   @see scss/components/_load-more.scss
*/

if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

function jumpoff_fetch_more() {
  global $wp_query;

  // Add to index/archive pages
  if( is_home() || is_archive() || is_tax() ) {

  // Queue JS
  wp_enqueue_script('jumpoff_fetch_more_js',
  get_template_directory_uri() . '/inc/load-more/load-more.js', '', false, true );

  // What page are we on?
  $paged = ( get_query_var('paged') > 1 ) ? get_query_var('paged') : 1;

  // How many pages of posts do we have to display?
  $max_pages = $wp_query->max_num_pages;

  // Some parameters for the JS.
  wp_localize_script(
    'jumpoff_fetch_more_js',
    'wpFetchMore',
      array(
        'startPage'           => $paged,
        'maxPages'            => $max_pages,
        'nextLink'            => next_posts($max_pages, false),
      )
    );
  }
}
add_action('template_redirect', 'jumpoff_fetch_more');
