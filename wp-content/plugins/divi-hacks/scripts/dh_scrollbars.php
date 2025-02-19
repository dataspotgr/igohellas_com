<?php 

//=========== Custom Scrollbars ===================
	// Custom Scrollbars
	function dh_register_scrollbars_editor($wp_customize) {

	    $wp_customize->add_section('dh_scrollbars', array(
				'priority' => 6,
				'title' => __('Scrollbars', 'divi-hacks'),
				'panel'  => 'divi_hack_options',
			));

		    $wp_customize->add_setting('dh_scrollbars_enabler_switch', array(
				'default' => false,
				'type'        => 'theme_mod',
				'capability'  => 'edit_theme_options',
			));
			$wp_customize->add_control('dh_scrollbars_enabler_switch', array(
				'label' => __('Enable Custom Scrollbars'),
				'section' => 'dh_scrollbars',
				'type' => 'checkbox',
				'settings' => 'dh_scrollbars_enabler_switch'
			));
			
			$wp_customize->add_setting('dh_scrollbar_bg_color', array(
				'default' => '#000000',
				'type' => 'option',
				'capability' => 'edit_theme_options',
			));

			$wp_customize->add_control(new ET_Divi_Customize_Color_Alpha_Control( $wp_customize, 'dh_scrollbar_bg_color', array(
				'label' => __('Scrollbar Background Color', 'divi-hacks'),
				'section' => 'dh_scrollbars',
				'settings' => 'dh_scrollbar_bg_color'
			)));
			
			$wp_customize->add_setting('dh_scrollbar_width', array(
				'default' => '10px',
				'type' => 'option',
				'capability' => 'edit_theme_options',
			));

			$wp_customize->add_control('dh_scrollbar_width', array(
				'label' => __('Scrollbar Width (px)', 'divi-hacks'),
				'section' => 'dh_scrollbars',
				'settings' => 'dh_scrollbar_width'
			));

			$wp_customize->add_setting('dh_tracker_bg_color', array(
				'default' => '#bbbbbb',
				'type' => 'option',
				'capability' => 'edit_theme_options',
			));

			$wp_customize->add_control(new ET_Divi_Customize_Color_Alpha_Control( $wp_customize, 'dh_tracker_bg_color', array(
				'label' => __('Scrollbar Tracker Color', 'divi-hacks'),
				'section' => 'dh_scrollbars',
				'settings' => 'dh_tracker_bg_color'
			)));
			
			$wp_customize->add_setting('dh_tracker_border_radius', array(
				'default' => '5px',
				'type' => 'option',
				'capability' => 'edit_theme_options',
			));

			$wp_customize->add_control('dh_tracker_border_radius', array(
				'label' => __('Tracker Border Radius (px)', 'divi-hacks'),
				'section' => 'dh_scrollbars',
				'settings' => 'dh_tracker_border_radius'
			));
			
			// CUSTOM CSS
			$wp_customize->add_setting('dh_scrollbar_custom_css', array(
				'type' => 'option',
				'capability' => 'edit_theme_options',
			));

			$wp_customize->add_control('dh_scrollbar_custom_css', array(
				'label' => __('Scrollbar Custom CSS', 'divi-hacks'),
				'type' => 'textarea',
				'section' => 'dh_scrollbars',
				'settings' => 'dh_scrollbar_custom_css'
			));
			
			$wp_customize->add_setting('dh_tracker_custom_css', array(
				'type' => 'option',
				'capability' => 'edit_theme_options',
			));

			$wp_customize->add_control('dh_tracker_custom_css', array(
				'label' => __('Tracker Custom CSS', 'divi-hacks'),
				'type' => 'textarea',
				'section' => 'dh_scrollbars',
				'settings' => 'dh_tracker_custom_css'
			));
	}	
	add_action('customize_register', 'dh_register_scrollbars_editor');

	function dh_scrollbar_customizer() {
		$dh_scrollbar_width = get_option('dh_scrollbar_width','10px');
		$dh_tracker_border_radius = get_option('dh_tracker_border_radius','5px');
		$dh_scrollbar_bg_color = get_option('dh_scrollbar_bg_color', '#000000');
		$dh_tracker_bg_color = get_option('dh_tracker_bg_color', '#bbbbbb');
		$dh_tracker_custom_css = get_option('dh_tracker_custom_css');
		$dh_scrollbar_custom_css = get_option('dh_scrollbar_custom_css');

		if( false != get_theme_mod( 'dh_scrollbars_enabler_switch' ) ) { ?>
			<style id="scrollbars" type="text/css">
				@media only screen and (min-width:981px) {
					html::-webkit-scrollbar {
					    width: <?php echo $dh_scrollbar_width; ?>;
					}
					html::-webkit-scrollbar,
					html::-webkit-scrollbar-track-piece,
					html::-webkit-scrollbar-track {
					    background-color: <?php echo $dh_scrollbar_bg_color; ?> !important;
					    <?php echo $dh_scrollbar_custom_css; ?>
					}
					html::-webkit-scrollbar-thumb {
					    background-color: <?php echo $dh_tracker_bg_color; ?> !important;
					    -webkit-border-radius: <?php echo $dh_tracker_border_radius; ?>;
					    border-radius: <?php echo $dh_tracker_border_radius; ?>;
					    <?php echo $dh_tracker_custom_css; ?>
					}
				}
			</style>
		<?php }
	}
	add_action( 'wp_head', 'dh_scrollbar_customizer' );