<?php

if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

/**
 *  Post Type: Photo
 *
 *  Slug :      photos
 *  Supports : 'title','thumbnail','editor'
 *
 *  @version    1.0
 *  @author     stephen scaff
 */

# Init Work
add_action('init', 'create_photo_post_type');

function create_photo_post_type() {
  register_post_type( 'photo',

  array(
    'labels'              => array(
    'name'                => __( 'Photos' ),
    'singular_name'       => __( 'Photo' ),
    'add_new'             => __( 'Add New Photos' ),
    'add_new_item'        => __( 'Add Another Photos Peep.' ),
    'edit'                => __( 'Edit This Photos, Please' ),
    'edit_item'           => __( 'Edit This Photos, Please' ),
    'new_item'            => __( 'New Photos' ),
    'view'                => __( 'Peep This Photos' ),
    'view_item'           => __( 'Peep All Photos ' ),
    'search_items'        => __( 'Search Your Photos.' ),
    'not_found'           => __( 'Sorry punk. That Photos cannot be found. Thank god, right?' ),
    'not_found_in_trash'  => __( 'That Photos is not in the Trash. But it should be.' ),
  ),

  'description'           => __( 'Photos of Ryan "Stinky Pinky" Cory.' ),
  'public'                => true,
  'show_ui'               => true,
  'menu_position'         => 6,
  'menu_dashicon'         => 'dashicons-format-image',
  'menu_icon'             => 'dashicons-format-image',
  'query_var'             => true,
  'supports'              => array( 'title','thumbnail'),
  'capability_type'       => 'post',
  'can_export'            => true,
  'has_archive'           => true,
  'show_in_rest'       => true,
  'rest_base'          => 'photos',
  'rest_controller_class' => 'WP_REST_Posts_Controller',
  'rewrite'               => array('slug' => 'photos', 'with_front' => false),
  ));
}



/**
 *  Taxonomy: Photo Cat
 *
 *  Creates 'photo_cat' custom taxonomy
 *
 *  Slug : photo-categories
 *  hierarchical : true
 *
 *  @author     Stephen Scaff
 *  @version    1.0
 */
add_action( 'init', 'photo_cat');

function photo_cat() {
  register_taxonomy(
  'photo_cat',
  'photo',
    array(
      'labels'            => array(
      'name'              => _x('Photo Categories', 'taxonomy general name'),
      'singular_name'     => _x('Photo Categories', 'taxonomy singular name'),
      'search_items'      => __('Search Photo Categories '),
      'all_items'         => __('All Photo Categories'),
      'edit_item'         => __('Edit Photo Categories'),
      'update_item'       => __('Update Photo Categories'),
      'add_new_item'      => __('Add New Photo Categories'),
      'new_item_name'     => __('New Photo Categories'),
      'menu_name'         => __('Photo Categories'),
    ),
    'hierarchical'        => true,
    'show_ui'             => true,
    'show_admin_column'   => true,
    'show_in_quick_edit'  => true,
    'show_in_rest'        => true,
    'rest_base'           => 'photo-categories',
    'rest_controller_class' => 'WP_REST_Terms_Controller',
    'rewrite'             => array(
        'slug'            => 'photo-categories',
        'with_front'      => false,
      ),
  ));
}
//
//
//
//
// /**
//  *  Taxonomy: Photo Type
//  *
//  *  Creates 'photo_type' custom taxonomy, for Team CPT
//  *
//  *  Slug : photo-types
//  *  hierarchical : true
//  *
//  *  @author     Stephen Scaff
//  *  @version    1.0
//  */
// add_action( 'init', 'photo_type');
//
// function photo_type() {
//   register_taxonomy(
//   'photo_type',
//   'photo',
//     array(
//       'labels'            => array(
//       'name'              => _x('Photo Type', 'taxonomy general name'),
//       'singular_name'     => _x('Photo Type', 'taxonomy singular name'),
//       'search_items'      => __('Search Photo Types '),
//       'all_items'         => __('All Photo Types'),
//       'edit_item'         => __('Edit Photo Type'),
//       'update_item'       => __('Update Photo Type'),
//       'add_new_item'      => __('Add New Photo Type'),
//       'new_item_name'     => __('New Photo Type'),
//       'menu_name'         => __('Photo Type'),
//     ),
//     'hierarchical'    => true,
//     'show_ui'             => true,
//     'show_admin_column'   => true,
//     'show_in_quick_edit'  => true,
//     'rewrite'             => array(
//         'slug'            => 'photo-types',
//         'with_front'      => false,
//       ),
//   ));
// }


/**
 * Template for Team Taxonomies
 * Since we're sharing custom taxonomies between post types,
 * we need to specifiy a custom template for the Pathologist Tax archives,
 * and use a custom query on that template, with variables from get_queried_object
 *
 * For Pathologists, the shared tax are division and specilatity.
 */
// 
//
// add_filter( 'taxonomy_template', 'pathologists_tax_template' );
//
// function pathologists_tax_template( $path_template = '' ) {
//
//   $template = '';
//   $current_post = get_queried_object();
//   $current_tax = $current_post->taxonomy;
//
//
//   // if ($current_tax == 'disease_state' OR 'methodology') {
//   //   $template = locate_template( 'archive-test.php' );
//   // }
//
//   if ( is_tax('photo_cat') ){
//     $path_template = locate_template( 'archive-photos.php' );
//   }
//
//  return $path_template;
//
// }



add_filter( 'rest_photo_query', 'jumpoff_rest_photo_query', 10, 2);

 function jumpoff_rest_photo_query($args, $request){

	$allowedTaxs = ['photo_cat'];

	if(count($request['filter']) > 0 && array_intersect($request['filter'], $allowedTaxs) > 0){
		$args['tax_query'] = [];
		foreach ($allowedTaxs as $taxonomy) {
			if(isset($request['filter'][$taxonomy])){
				$args['tax_query'][] = [
					'taxonomy' => $taxonomy,
					'field'    => 'slug',
					'terms'    => $request['filter'][$taxonomy]
				];
			}
		}
	}
	return $args;
}
