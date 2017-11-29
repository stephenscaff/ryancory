<?php
if ( ! defined( 'ABSPATH' ) ) exit; // Bail if accessed directly
/**
 *  Permalink Settings
 *
 *  Set our permalink structre here, so they can't be f'd up in Admin/Settings
 */

add_action( 'init', 'jumpoff_set_permalinks' );

function jumpoff_set_permalinks() {
  global $wp_rewrite;
  $wp_rewrite->set_permalink_structure( '/stories/%year%/%monthnum%/%postname%/' );
}
