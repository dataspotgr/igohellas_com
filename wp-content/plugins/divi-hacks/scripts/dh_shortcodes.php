<?php
// Shortcode Column in Divi Library

	function dh_shortcodes_customizer($wp_customize) {
		$wp_customize->add_setting('dh_shortcode_switch', array(
			'default' => 'On',
			'type'        => 'theme_mod',
			'capability'  => 'edit_theme_options',
			'transport'   => 'refresh',
		));
		$wp_customize->add_control('dh_shortcode_switch', array(
			'label' => __('Enable Divi Library Item Shortcode'),
			'description' => __('Quickly grab shortcode to place any Divi Library item anywhere you want (tabs, sliders, etc.).'),
			'section' => 'dh_functions_options',
			'type' => 'radio',
			'settings' => 'dh_shortcode_switch',
			'choices' => array(
	    		'On' => 'Enable',
	    		'Off' => 'Disable',
	  		),
		));
	}
	add_action('customize_register', 'dh_shortcodes_customizer');

if ( get_theme_mod( 'dh_shortcode_switch', 'On' ) == 'On' ) {
	// Registers shortcode to show the Divi Library global module
	if (!isset($_GET['et_fb'])) {
		add_shortcode('dh_module', 'dh_module_shortcode');
		function dh_module_shortcode($moduleid) {
			extract(shortcode_atts(array('id' =>'*'),$moduleid)); 
			return do_shortcode('[et_pb_section global_module="'.$id.'"][/et_pb_section]');
		}
	}

	// Adds Shortcode column to Divi Library table
	add_filter( 'manage_et_pb_layout_posts_columns', 'dh_shortcode_posts_columns' );
	function dh_shortcode_posts_columns( $columns ) {
		$columns['dh_shortcode'] = __( 'Shortcode' );
		return $columns;
	}
	add_action( 'manage_et_pb_layout_posts_custom_column', 'dh_shortcode_column', 10, 2);
	function dh_shortcode_column( $column, $post_id ) {
		// Shortcode column
		if ( 'dh_shortcode' === $column ) {
	 		echo "<span>";
	  		echo "[dh_module id=\"" . get_the_ID( $post_id ) . "\"]";
	    	echo "</span>";
		}
	}
}