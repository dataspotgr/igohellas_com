<?php

if( false !== get_theme_mod( 'dh_search_enabler_switch' ) ) {

// =========== Include CPTs in divi search module =========== 
	function my_remove_default_et_pb_custom_search() {
	remove_action( 'pre_get_posts', 'et_pb_custom_search' );
	add_action( 'pre_get_posts', 'my_et_pb_custom_search' );
	}
	add_action( 'wp_loaded', 'my_remove_default_et_pb_custom_search' );
	function my_et_pb_custom_search( $query = false ) {
	if ( is_admin() || ! is_a( $query, 'WP_Query' ) || ! $query->is_search ) {
		return;
	}
	if ( isset( $_GET['et_pb_searchform_submit'] ) ) {
		$postTypes = array();
		if ( ! isset($_GET['et_pb_include_posts'] ) && ! isset( $_GET['et_pb_include_pages'] ) ) $postTypes = array( 'post' );
		if ( isset( $_GET['et_pb_include_pages'] ) ) $postTypes = array( 'page' );
		if ( isset( $_GET['et_pb_include_posts'] ) ) $postTypes[] = 'post';
		
		/* BEGIN Add custom post types */
		$args = array(
		   'public'   => true,
		   '_builtin' => false
		);
		$output = 'names'; // names or objects, note names is the default
		$operator = 'and'; // 'and' or 'or'
		$post_types = get_post_types( $args, $output, $operator ); 
		foreach ( $post_types as $post_type ) {
		   $postTypes[] = $post_type;
		}
		/* END Add custom post types */
		
		$query->set( 'post_type', $postTypes );
		if ( ! empty( $_GET['et_pb_search_cat'] ) ) {
			$categories_array = explode( ',', $_GET['et_pb_search_cat'] );
			$query->set( 'category__not_in', $categories_array );
		}
		if ( isset( $_GET['et-posts-count'] ) ) {
			$query->set( 'posts_per_page', (int) $_GET['et-posts-count'] );
		}
	}
	}
	
}

// Hides 404 page, Login page, and Maintenance Mode Page from Search Results
	function dh_exclude_pages_from_search($query) {
	$id1 = get_option('dh-404-page');
	$id2 = get_option('dh-maintenance-mode-page');
	$id3 = get_option('dh-login-page');
	$id4 = get_option('dh-search-page');
	$id5 = get_option('dh-category-page');
	$id6 = get_option('dh-tag-page');
	$id7 = get_option('dh-archive-page');
	$id8 = get_option('dh-author-page');
	if ( $query->is_main_query() ) {
		if ($query->is_search) {
		  $query->set('post__not_in', array($id1, $id2, $id3, $id4, $id5, $id6, $id7, $id8));
		}
	}
	}
	add_action('pre_get_posts','dh_exclude_pages_from_search');

// Changing excerpt more
	function dh_excerpt_more($more) {
	global $post;
	return '… <a href="'. get_permalink($post->ID) . '">' . 'Read More &raquo;' . '</a>';
	}
	add_filter('excerpt_more', 'dh_excerpt_more');

