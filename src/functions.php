<?php
/**
 * Includes from inc
 * Represents The Jumpoff's functionality
 */

if ( ! defined( 'ABSPATH' ) ) exit;

require_once('inc/settings/settings.php');

require_once('inc/admin/admin.php');

require_once('inc/utils/utils.php');

require_once('inc/post-helpers/post-helpers.php');

require_once('inc/post-types/post-types.php');
require_once('inc/load-more/load-more.php');


require_once('inc/shortcodes/shortcodes.php');


/**
 * Modify url base from wp-json to 'api'
 */
add_filter( 'rest_url_prefix', 'jumpoff_api_slug');

function jumpoff_api_slug( $slug ) {

    return 'api';
}
