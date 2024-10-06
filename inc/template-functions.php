<?php
/**
 * Functions which enhance the theme by hooking into WordPress
 *
 * @package sushi-itto
 */

/**
 * Adds custom classes to the array of body classes.
 *
 * @param array $classes Classes for the body element.
 * @return array
 */
function sushi_itto_body_classes( $classes ) {
	// Adds a class of hfeed to non-singular pages.
	if ( ! is_singular() ) {
		$classes[] = 'hfeed';
	}

	// Adds a class of no-sidebar when there is no sidebar present.
	if ( ! is_active_sidebar( 'sidebar-1' ) ) {
		$classes[] = 'no-sidebar';
	}

	return $classes;
}
add_filter( 'body_class', 'sushi_itto_body_classes' );

/**
 * Add a pingback url auto-discovery header for single posts, pages, or attachments.
 */
function sushi_itto_pingback_header() {
	if ( is_singular() && pings_open() ) {
		printf( '<link rel="pingback" href="%s">', esc_url( get_bloginfo( 'pingback_url' ) ) );
	}
}
add_action( 'wp_head', 'sushi_itto_pingback_header' );

function load_inline_svg( $filename ) {
  $svg_path = '/images/svgs/';
  
  if ( file_exists( get_stylesheet_directory() . $svg_path . $filename ) ) {
    return file_get_contents( get_stylesheet_directory_uri() . $svg_path . $filename );
  }
  
  return '';
}

function custom_admin_menu_colors() {
  echo '<style>
    #adminmenu, #adminmenu .wp-submenu, #adminmenuback, #adminmenuwrap, #wpadminbar { background-color: #000; }
    #adminmenu a { color: #fff; }
    #adminmenu .wp-submenu-head, #adminmenu a:hover, #adminmenu .wp-has-current-submenu a.wp-has-current-submenu, 
    #adminmenu .current a.menu-top, #adminmenu .wp-has-current-submenu .wp-submenu .wp-submenu-head, 
    #adminmenu .wp-submenu .wp-submenu-head, #adminmenu .wp-submenu a:hover, #adminmenu .current a.menu-top, #wpadminbar .ab-submenu, #wpadminbar ul#wp-admin-bar-root-default>li:hover a, #adminmenu li:hover div.wp-menu-image:before, #wpadminbar li:hover .ab-icon:before, #wpadminbar:not(.mobile)>#wp-toolbar li:hover span.ab-label, #wpadminbar li:hover .ab-item:before, #collapse-button:hover { background-color: #EE3550 !important; color: #fff!important; }
  </style>';
}
add_action('admin_head', 'custom_admin_menu_colors');

function modify_main_query_for_taxonomy_children( $query ) {
  // Check if we're on a taxonomy archive page and it's the main query
  if ( !is_admin() && $query->is_main_query() && is_tax( 'category_platillo' ) ) {
      
    // Get the current term
    $current_term = get_queried_object();
    
    // Get child terms of the current term
    $child_terms = get_terms(array(
        'taxonomy'   => 'category_platillo',
        'child_of'   => $current_term->term_id,
        'hide_empty' => true,
    ));

    // Initialize an empty array for term IDs
    $term_ids = array();
    
    // Check if there are child terms
    if ( ! is_wp_error( $child_terms ) && ! empty( $child_terms ) ) {
      
      // Get the IDs of the child terms
      foreach ( $child_terms as $child_term ) {
        $term_ids[] = $child_term->term_id;
      }
      
      // Modify the main query to include posts from child terms
      $query->set( 'tax_query', array(
        array(
          'taxonomy' => 'category_platillo',
          'field'    => 'term_id',
          'terms'    => $term_ids,
          'include_children' => false,
        ),
      ) );
    } else {
      $query->set( 'posts_per_page', -1 );
    }
  }
}

add_action( 'pre_get_posts', 'modify_main_query_for_taxonomy_children' );
