<?php
// Featured Image Column in Divi Library

	function dh_featimage_customizer($wp_customize) {
		$wp_customize->add_setting('dh_featimage_switch', array(
			'default' => 'On',
			'type'        => 'theme_mod',
			'capability'  => 'edit_theme_options',
			'transport'   => 'refresh',
		));
		$wp_customize->add_control('dh_featimage_switch', array(
			'label' => __('Enable Featured Image Column in the Divi Library'),
			'description' => __('Show the featured image for each item inside the Divi Library.'),
			'section' => 'dh_functions_options',
			'type' => 'radio',
			'settings' => 'dh_featimage_switch',
			'choices' => array(
	    		'On' => 'Enable',
	    		'Off' => 'Disable',
	  		),
		));
	}
	add_action('customize_register', 'dh_featimage_customizer');

// Adds Featured Image column to Divi Library table

if ( get_theme_mod( 'dh_featimage_switch', 'On' ) == 'On' ) {
	add_filter( 'manage_et_pb_layout_posts_columns', 'dh_featimage_posts_columns' );
	function dh_featimage_posts_columns( $columns ) {
	  $columns['featured-img'] = __( 'Featured Image' );
	  return $columns;
	}
	add_action( 'manage_et_pb_layout_posts_custom_column', 'dh_featimage_column', 10, 2);
	function dh_featimage_column( $column, $post_id ) {
	  // Image column
	  if ( 'featured-img' === $column ) {
	    echo get_the_post_thumbnail( $post_id, array(80, 80) );
	  }
	}
}