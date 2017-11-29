<?php
# Taxonomies and Categories:

if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

/**
 * Term Class
 * Returns a given term as a BEVM
 * chainable modifier class
 */
function jumpoff_term_class($taxonomy) {
  global $post;
  $terms = wp_get_post_terms($post->ID, $taxonomy);
  if ($terms) {
    foreach ( $terms as $term ) {
      $str .= '-' . strtolower($term->name) . ' ';
      return $str;
    }
  }
}

/**
 *  Get Categorey Slug
 *  @return $categories (post_name);
 */
function jumpoff_get_cat_slug(){

  global $post;

  $cats = get_the_category($post->ID);

  if ($cats) {
    return $cats[0]->slug;
  }
}

/**
 *  Categories List
 *  Returns cats wtih content to output as list
 *
 *  @return string $category_item
 */
function jumpoff_cat_list($type) {
  $categories = get_categories();
  $category_item = '';

  if ( $categories ) {
    foreach ( $categories as $category ) {

      if ( is_wp_error( $categories ) ) continue;

      $category_link = get_category_link( $category->term_id );

      if ($type === 'link'){
        $category_item .= '<a href="' . $category_link . '">' . $category->name . '</a>';
      } else {
        $category_item .= '<li><a href="' . $category_link . '">' . $category->name . '</a></li>';
      }
    }
    return $category_item;
  }
}

/**
 * Term List
 * Retrives the terms applied to the current post
 */
function jumpoff_term_list($taxonomy, $type) {
  $terms = get_the_terms($post->ID, $taxonomy);
  if ($terms) {
    foreach ( $terms as $term ) {

      if ($type === 'comma'){
        $output .= $term->name . ', ';
      }
      elseif ( $type === 'list' ){
        $output .= '<li>' . $term->slug . '</li>';
      }
      else {
        $output .= $term->name;
      }
    }
    return rtrim($output, ', ');
  }
}





/**
 * jumpoff_filter_items
 * Gets all available terms for CPT filtering, via mixitup.js, or building term archive links.
 *
 *  @param  string  $taxonomy   The custom taxonomy
 *  @param  boolean $filtering  True(default) Use mixit filters, false: use term archive link
 *  @see    partials/partial-resources
 *  @see    kit/assets/js/vendor/_mixitup.js
 *  @return string $filter_item
 */
function jumpoff_filter_items($taxonomy, $type) {

  global $post;
  $terms = get_terms($taxonomy);
  $filter_item ='';

  if ($terms) {
    $current_term = get_term_by( 'slug', get_query_var( 'term' ), get_query_var( 'taxonomy' ) );
    $class = '';

    foreach ( $terms as $term ) {

      if ( is_wp_error( $term ) ) {
        continue;
      }

      if( !is_object($term) ) {
        return;
      }

      $term_link = get_term_link( $term );

      if (is_tax()){
        $class = $current_term->slug == $term->slug ? 'is-active' : '' ;
      }

      if ( $type == 'span'  )  {
        $filter_items .= '<span class="filter ' . $class . '" data-filter="' . $term->slug . '">' . $term->name . '</span>';
      }
      elseif ($type == 'list') {
        $filter_items .= '<li><a class="' . $class . '" href="' . esc_url( $term_link) . '">' . $term->name . '</a></li>';
      }
      elseif ($type = 'link') {
        $filter_items .= '<a class="' . $class . '" href="' . esc_url( $term_link) . '">' . $term->name . '</a>';
      }
    }
    return $filter_items;
  }
}
