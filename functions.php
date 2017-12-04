<?php
/**
 * Includes from inc
 * Represents The Jumpoff's functionality
 */

if ( ! defined( 'ABSPATH' ) ) exit;

# Settings
require_once('inc/settings/settings.php');

# Admin
require_once('inc/admin/admin.php');

# Utilities
require_once('inc/utils/utils.php');

# Post Helpers
require_once('inc/post-helpers/post-helpers.php');

# Post Types
require_once('inc/post-types/post-types.php');

# Load More
require_once('inc/load-more/load-more.php');

# Shortcodes
require_once('inc/shortcodes/shortcodes.php');

/**
 * Modify url base from wp-json to 'api'
 */
add_filter( 'rest_url_prefix', 'jumpoff_api_slug');

function jumpoff_api_slug( $slug ) {
  return 'api';
}
