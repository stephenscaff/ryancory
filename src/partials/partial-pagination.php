<?php
/**
 * Section: Pagination
 *
 * Calls pagination funciton
 *
 *
 * @author    Stephen Scaff
 * @package   pocketprep/partials/sect-pagination
 * @version   1.0
 * @see       inc/functions/pagination.php
 */

if ( ! defined( 'ABSPATH' ) ) exit;

?>
<?php
if ( function_exists('jumpoff_pagination') ) :
  jumpoff_pagination();
endif;
?>
