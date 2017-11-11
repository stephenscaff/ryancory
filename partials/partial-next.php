<?php
/**
 * Partial: Next
 * Partial for showing links to the next post
 *
 * @author    Thomas Vaeth
 * @package   partials/partial-next
 * @version   1.0
 */

if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

$next_post = '';

if ( has_term( 'adventure-stories', 'kodiak_adventures_cat' )) {
$next_post = get_adjacent_post(true, '', true, 'adventure-stories');
} elseif ( has_term( 'adventure-stories', 'kodiak_adventures_cat' )) {
$next_post = get_adjacent_post(true, '', true, 'many-missions');
} else {
$next_post = get_adjacent_post(false, '', true);
}
$post_type = get_post_type();



// @todo - maybe not do this
$next_class = '';

if (is_singular('post')) {
  $next_class = 'post';
} else{
  $next_class = 'next';
}
 
if (is_singular('post') OR is_singular('kodiak_adventures')) :
  if ($next_post) :
    include(locate_template('partials/content/content-next.php'));
  endif;
endif;
?>
