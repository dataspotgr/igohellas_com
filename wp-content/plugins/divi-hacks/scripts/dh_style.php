<?php

// ------------- Theme Customizer Options ------------//
	// Customizer Basic Settings
	function dh_switch_options($wp_customize) {  
		$wp_customize->add_panel( 'divi_hack_options', array(
		'priority'    => 0,
		'capability'  => 'edit_theme_options',
		'title'       => __('Divi Hacks', 'divi-hacks'),
		'description' => __('Extend the Theme Customizer', 'divi-hacks'),
		));

			$wp_customize->add_section('dh_typography_options', array(
			'priority'    => 0,
			'title'       => __('Typography', 'divi-hacks'),
			'panel'       => 'divi_hack_options',
			));
				
					$wp_customize->add_setting( 'dh_custom_heading_fonts', array(
					'capability' => 'edit_theme_options',
					'default'  => false,
					'transport'  =>  'refresh'
					 ) );

					$wp_customize->add_control( 'dh_custom_heading_fonts', array(
					'section'   => 'dh_typography_options',
					'label' => __( 'Enable Custom Heading Styles' ),
					'priority' => 0,
					'type'      => 'checkbox'
					 ) );
				 
					$wp_customize->add_setting('dh_import_fonts', array(
					'default'    => '@import url(\'https://fonts.googleapis.com/css?family=Indie+Flower\');',
					'capability' => 'edit_theme_options',
					'sanitize_callback' => 'sanitize_text_field',
					));

					$wp_customize->add_setting( 'dh_body_font_weight', array(
					'capability' => 'edit_theme_options',
					'sanitize_callback' => 'dh_sanitize_select',
					'default' => '400',
					) );

					$wp_customize->add_control( 'dh_body_font_weight', array(
					'type' => 'select',
					'section' => 'dh_typography_options',
					'label' => __( 'Body Font Weight' ),
					'choices' => array(
						'100' => __( '100' ),
						'200' => __( '200' ),
						'300' => __( '300' ),
						'400' => __( '400' ),
						'500' => __( '500' ),
						'600' => __( '600' ),
						'700' => __( '700' ),
						'800' => __( '800' ),
						'900' => __( '900' ),
					),
					) );
					
					$wp_customize->add_control('dh_import_fonts', array(
					'label'    => __('@import Custom Fonts', 'divi-hacks'),
					'section'  => 'dh_typography_options',
					'type'     => 'textarea',
					'settings' => 'dh_import_fonts'
					));
				
					$wp_customize->add_setting( 'dh_h1_color', array(
					'default'           => 'inherit',
					'type'              => 'option',
					'capability'        => 'edit_theme_options',
					'sanitize_callback' => 'et_sanitize_alpha_color',
					));

					$wp_customize->add_control( new ET_Divi_Customize_Color_Alpha_Control( $wp_customize, 'dh_h1_color', array(
					'label'     => esc_html__( 'H1 Color', 'Divi Hacks' ),
					'section'   => 'dh_typography_options',
					'settings'  => 'dh_h1_color',
					)));
				
					$wp_customize->add_setting('dh_custom_h1', array(
					'default'    => 'font-family:inherit;',
					'capability' => 'edit_theme_options',
					'sanitize_callback' => 'sanitize_text_field',
					));

					$wp_customize->add_control('dh_custom_h1', array(
					'label'    => __('Custom H1 Styles', 'divi-hacks'),
					'section'  => 'dh_typography_options',
					'type'     => 'textarea',
					'settings' => 'dh_custom_h1'
					));
				
					$wp_customize->add_setting( 'dh_h2_color', array(
					'default'           => 'inherit',
					'type'              => 'option',
					'capability'        => 'edit_theme_options',
					'sanitize_callback' => 'et_sanitize_alpha_color',
					));

					$wp_customize->add_control( new ET_Divi_Customize_Color_Alpha_Control( $wp_customize, 'dh_h2_color', array(
					'label'     => esc_html__( 'H2 Color', 'Divi Hacks' ),
					'section'   => 'dh_typography_options',
					'settings'  => 'dh_h2_color',
					)));
				
					$wp_customize->add_setting('dh_custom_h2', array(
					'default'    => 'font-family:inherit;',
					'capability' => 'edit_theme_options',
					'sanitize_callback' => 'sanitize_text_field',
					));

					$wp_customize->add_control('dh_custom_h2', array(
					'label'    => __('Custom H2 Styles', 'divi-hacks'),
					'section'  => 'dh_typography_options',
					'type'     => 'textarea',
					'settings' => 'dh_custom_h2'
					));
				
					$wp_customize->add_setting( 'dh_h3_color', array(
					'default'           => 'inherit',
					'type'              => 'option',
					'capability'        => 'edit_theme_options',
					'sanitize_callback' => 'et_sanitize_alpha_color',
					));

					$wp_customize->add_control( new ET_Divi_Customize_Color_Alpha_Control( $wp_customize, 'dh_h3_color', array(
					'label'     => esc_html__( 'H3 Color', 'Divi Hacks' ),
					'section'   => 'dh_typography_options',
					'settings'  => 'dh_h3_color',
					)));
				
					$wp_customize->add_setting('dh_custom_h3', array(
					'default'    => 'font-family:inherit;',
					'capability' => 'edit_theme_options',
					'sanitize_callback' => 'sanitize_text_field',
					));

					$wp_customize->add_control('dh_custom_h3', array(
					'label'    => __('Custom H3 Styles', 'divi-hacks'),
					'section'  => 'dh_typography_options',
					'type'     => 'textarea',
					'settings' => 'dh_custom_h3'
					));
				
					$wp_customize->add_setting( 'dh_h4_color', array(
					'default'           => 'inherit',
					'type'              => 'option',
					'capability'        => 'edit_theme_options',
					'sanitize_callback' => 'et_sanitize_alpha_color',
					));

					$wp_customize->add_control( new ET_Divi_Customize_Color_Alpha_Control( $wp_customize, 'dh_h4_color', array(
					'label'     => esc_html__( 'H4 Color', 'Divi Hacks' ),
					'section'   => 'dh_typography_options',
					'settings'  => 'dh_h4_color',
					)));
				
					$wp_customize->add_setting('dh_custom_h4', array(
					'default'    => 'font-family:inherit;',
					'capability' => 'edit_theme_options',
					'sanitize_callback' => 'sanitize_text_field',
					));

					$wp_customize->add_control('dh_custom_h4', array(
					'label'    => __('Custom H4 Styles', 'divi-hacks'),
					'section'  => 'dh_typography_options',
					'type'     => 'textarea',
					'settings' => 'dh_custom_h4'
					));
				
					$wp_customize->add_setting( 'dh_h5_color', array(
					'default'           => 'inherit',
					'type'              => 'option',
					'capability'        => 'edit_theme_options',
					'sanitize_callback' => 'et_sanitize_alpha_color',
					));

					$wp_customize->add_control( new ET_Divi_Customize_Color_Alpha_Control( $wp_customize, 'dh_h5_color', array(
					'label'     => esc_html__( 'H5 Color', 'Divi Hacks' ),
					'section'   => 'dh_typography_options',
					'settings'  => 'dh_h5_color',
					)));
				
					$wp_customize->add_setting('dh_custom_h5', array(
					'default'    => 'font-family:inherit;',
					'capability' => 'edit_theme_options',
					'sanitize_callback' => 'sanitize_text_field',
					));

					$wp_customize->add_control('dh_custom_h5', array(
					'label'    => __('Custom H5 Styles', 'divi-hacks'),
					'section'  => 'dh_typography_options',
					'type'     => 'textarea',
					'settings' => 'dh_custom_h5'
					));
				
					$wp_customize->add_setting( 'dh_h6_color', array(
					'default'           => 'inherit',
					'type'              => 'option',
					'capability'        => 'edit_theme_options',
					'sanitize_callback' => 'et_sanitize_alpha_color',
					));

					$wp_customize->add_control( new ET_Divi_Customize_Color_Alpha_Control( $wp_customize, 'dh_h6_color', array(
					'label'     => esc_html__( 'H6 Color', 'Divi Hacks' ),
					'section'   => 'dh_typography_options',
					'settings'  => 'dh_h6_color',
					)));
			
					$wp_customize->add_setting('dh_custom_h6', array(
					'default'    => 'font-family:inherit;',
					'capability' => 'edit_theme_options',
					'sanitize_callback' => 'sanitize_text_field',
					));

					$wp_customize->add_control('dh_custom_h6', array(
					'label'    => __('Custom H6 Styles', 'divi-hacks'),
					'section'  => 'dh_typography_options',
					'type'     => 'textarea',
					'settings' => 'dh_custom_h6'
					));
				
			$wp_customize->add_section('dh_mobile_menu', array(
			'priority'    => 1,
			'title'       => __('Mobile Menu', 'divi-hacks'),
			'panel'       => 'divi_hack_options',
			));

					$wp_customize->add_setting( 'dh_custom_mobile_menu', array(
					'capability' => 'edit_theme_options',
					'sanitize_callback' => 'dh_sanitize_select',
					'default' => 'default-mobile-menu',
					) );

					$wp_customize->add_control( 'dh_custom_mobile_menu', array(
					'type' => 'select',
					'section' => 'dh_mobile_menu',
					'label' => __( 'Custom Mobile Menu Style' ),
					'choices' => array(
						'default-mobile-menu' => __( 'Default' ),
						'divi-hacks-mobile-menu-fullscreen' => __( 'Full Screen' ),
						'divi-hacks-mobile-menu-slide-in' => __( 'Slide In' ),
					),
					) );

					$wp_customize->add_setting( 'dh_mobile_menu_bg', array(
					'default'           => 'rgba(0,0,0,0.8)',
					'type'              => 'option',
					'capability'        => 'edit_theme_options',
					'sanitize_callback' => 'et_sanitize_alpha_color',
					));

					$wp_customize->add_control( new ET_Divi_Customize_Color_Alpha_Control( $wp_customize, 'dh_mobile_menu_bg', array(
					'label'     => esc_html__( 'Background', 'Divi Hacks' ),
					'section'   => 'dh_mobile_menu',
					'settings'  => 'dh_mobile_menu_bg',
					)));

					$wp_customize->add_setting( 'dh_mobile_menu_gradient_1', array(
					'default'           => '#d2ff52',
					'type'              => 'option',
					'capability'        => 'edit_theme_options',
					'sanitize_callback' => 'et_sanitize_alpha_color',
					));

					$wp_customize->add_control( new ET_Divi_Customize_Color_Alpha_Control( $wp_customize, 'dh_mobile_menu_gradient_1', array(
					'label'     => esc_html__( 'Mobile Menu Gradient Start Color', 'Divi Hacks' ),
					'section'   => 'dh_mobile_menu',
					'settings'  => 'dh_mobile_menu_gradient_1',
					)));

					$wp_customize->add_setting( 'dh_mobile_menu_gradient_2', array(
					'default'           => '#91e842',
					'type'              => 'option',
					'capability'        => 'edit_theme_options',
					'sanitize_callback' => 'et_sanitize_alpha_color',
					));

					$wp_customize->add_control( new ET_Divi_Customize_Color_Alpha_Control( $wp_customize, 'dh_mobile_menu_gradient_2', array(
					'label'     => esc_html__( 'Mobile Menu Gradient End Color', 'Divi Hacks' ),
					'section'   => 'dh_mobile_menu',
					'settings'  => 'dh_mobile_menu_gradient_2',
					)));

					$wp_customize->add_setting( 'dh_mobile_menu_gradient_direction', array(
					'capability' => 'edit_theme_options',
					'sanitize_callback' => 'dh_sanitize_select',
					'default' => 'left',
					) );

					$wp_customize->add_control( 'dh_mobile_menu_gradient_direction', array(
					'type' => 'select',
					'section' => 'dh_mobile_menu',
					'label' => __( 'Mobile Menu Gradient Direction' ),
					'choices' => array(
						'top' => __( 'Vertical &darr;' ),
						'left' => __( 'Horizontal &rarr;' ),
						'topleft' => __( 'Diagonal &#8600;' ),
						'topright' => __( 'Diagonal &#8601;' ),
					)));
					
					$wp_customize->add_setting( 'dh_mobile_menu_text', array(
					'default'           => '#ffffff',
					'type'              => 'option',
					'capability'        => 'edit_theme_options',
					'sanitize_callback' => 'et_sanitize_alpha_color',
					));

					$wp_customize->add_control( new ET_Divi_Customize_Color_Alpha_Control( $wp_customize, 'dh_mobile_menu_text', array(
					'label'     => esc_html__( 'Text Color', 'Divi Hacks' ),
					'section'   => 'dh_mobile_menu',
					'settings'  => 'dh_mobile_menu_text',
					)));

					$wp_customize->add_setting( 'dh_mobile_closed_toggle_icon', array(
					'default'           => '#1b1d1e',
					'type'              => 'option',
					'capability'        => 'edit_theme_options',
					'sanitize_callback' => 'et_sanitize_alpha_color',
					));

					$wp_customize->add_control( new ET_Divi_Customize_Color_Alpha_Control( $wp_customize, 'dh_mobile_closed_toggle_icon', array(
					'label'     => esc_html__( 'Open Menu Icon', 'Divi Hacks' ),
					'section'   => 'dh_mobile_menu',
					'settings'  => 'dh_mobile_closed_toggle_icon',
					)));

					$wp_customize->add_setting( 'dh_mobile_cart_icon', array(
					'default'           => '#1b1d1e',
					'type'              => 'option',
					'capability'        => 'edit_theme_options',
					'sanitize_callback' => 'et_sanitize_alpha_color',
					));

					$wp_customize->add_control( new ET_Divi_Customize_Color_Alpha_Control( $wp_customize, 'dh_mobile_cart_icon', array(
					'label'     => esc_html__( 'Cart Icon', 'Divi Hacks' ),
					'section'   => 'dh_mobile_menu',
					'settings'  => 'dh_mobile_cart_icon',
					)));

					$wp_customize->add_setting( 'dh_mobile_open_toggle_icon', array(
					'default'           => '#1b1d1e',
					'type'              => 'option',
					'capability'        => 'edit_theme_options',
					'sanitize_callback' => 'et_sanitize_alpha_color',
					));

					$wp_customize->add_control( new ET_Divi_Customize_Color_Alpha_Control( $wp_customize, 'dh_mobile_open_toggle_icon', array(
					'label'     => esc_html__( 'Close Menu Icon', 'Divi Hacks' ),
					'section'   => 'dh_mobile_menu',
					'settings'  => 'dh_mobile_open_toggle_icon',
					)));

					$wp_customize->add_setting( 'dh_mobile_menu_current', array(
					'default'           => '#247BA0',
					'type'              => 'option',
					'capability'        => 'edit_theme_options',
					'sanitize_callback' => 'et_sanitize_alpha_color',
					));

					$wp_customize->add_control( new ET_Divi_Customize_Color_Alpha_Control( $wp_customize, 'dh_mobile_menu_current', array(
					'label'     => esc_html__( 'Current Page Text Color', 'Divi Hacks' ),
					'section'   => 'dh_mobile_menu',
					'settings'  => 'dh_mobile_menu_current',
					)));

					$wp_customize->add_setting( 'dh_mobile_submenu_bg_color', array(
					'default'           => 'rgba(0,0,0,0.1)',
					'type'              => 'option',
					'capability'        => 'edit_theme_options',
					'sanitize_callback' => 'et_sanitize_alpha_color',
					));

					$wp_customize->add_control( new ET_Divi_Customize_Color_Alpha_Control( $wp_customize, 'dh_mobile_submenu_bg_color', array(
					'label'     => esc_html__( 'Submenu Background Color', 'Divi Hacks' ),
					'section'   => 'dh_mobile_menu',
					'settings'  => 'dh_mobile_submenu_bg_color',
					)));

					$wp_customize->add_setting('dh_mobile_menu_letter_spacing', array(
					'default'    => '6px',
					'type'       => 'option',
					'capability' => 'edit_theme_options',
					));

					$wp_customize->add_control('dh_mobile_menu_letter_spacing', array(
					'label'    => __('Letter Spacing', 'divi-hacks'),
					'section'  => 'dh_mobile_menu',
					'type'     => 'option',
					'settings' => 'dh_mobile_menu_letter_spacing'
					));

					$wp_customize->add_setting('dh_mobile_menu_line_height', array(
					'default'    => '1.0em',
					'type'       => 'option',
					'capability' => 'edit_theme_options',
					));

					$wp_customize->add_control('dh_mobile_menu_line_height', array(
					'label'    => __('Menu Item Line Height', 'divi-hacks'),
					'section'  => 'dh_mobile_menu',
					'type'     => 'option',
					'settings' => 'dh_mobile_menu_line_height'
					));

					$wp_customize->add_setting('dh_mobile_menu_submenu_line_height', array(
					'default'    => '0.8em',
					'type'       => 'option',
					'capability' => 'edit_theme_options',
					));

					$wp_customize->add_control('dh_mobile_menu_submenu_line_height', array(
					'label'    => __('Submenu Line Height', 'divi-hacks'),
					'section'  => 'dh_mobile_menu',
					'type'     => 'option',
					'settings' => 'dh_mobile_menu_submenu_line_height'
					));

			$wp_customize->add_section('dh_global_menu_options', array(
			'priority'    => 15,
			'title'       => __('Global Menu Options', 'divi-hacks'),
			'panel'       => 'divi_hack_options',
			));
			
					$wp_customize->add_setting( 'dh_custom_menu_animations', array(
					'capability' => 'edit_theme_options',
					'sanitize_callback' => 'dh_sanitize_select',
					'default' => 'no-menu-animation',
					) );

					$wp_customize->add_control( 'dh_custom_menu_animations', array(
					'type' => 'select',
					'section' => 'dh_global_menu_options',
					'label' => __( 'Menu Animations' ),
					'choices' => array(
						'no-menu-animation' => __( 'None' ),
						'divi-hacks-animenu-1' => __( 'Slide-In Underline' ),
						'divi-hacks-animenu-2' => __( 'Grow Underline' ),
						'divi-hacks-animenu-3' => __( 'Current Page Overline' ),
					),
					) );
					
					$wp_customize->add_setting( 'dh_menu_animation_accent_color', array(
					'default'           => 'inherit',
					'type'              => 'option',
					'capability'        => 'edit_theme_options',
					'sanitize_callback' => 'et_sanitize_alpha_color'
					));

					$wp_customize->add_control( new ET_Divi_Customize_Color_Alpha_Control( $wp_customize, 'dh_menu_animation_accent_color', array(
					'label'     => esc_html__( 'Menu Animation Accent Color', 'Divi Hacks' ),
					'section'   => 'dh_global_menu_options',
					'settings'  => 'dh_menu_animation_accent_color',
					)));
					
					$wp_customize->add_setting( 'dh_disable_default_menu_hover', array(
					'capability' => 'edit_theme_options',
					'default'  => false,
					'transport'  =>  'refresh'
					 ) );
					 
					$wp_customize->add_control( 'dh_disable_default_menu_hover', array(
					'section'   => 'dh_global_menu_options',
					'label' => __( 'Disable menu item highlight and fade on hover' ),
					'type'      => 'checkbox'
					 ) );
					
			$wp_customize->add_section('dh_primary_menu_options', array(
			'priority'    => 15,
			'title'       => __('Primary Menu Bar', 'divi-hacks'),
			'panel'       => 'divi_hack_options',
			));
					
					$wp_customize->add_setting( 'dh_main_header_gradient_1', array(
					'default'           => 'rgba(0,0,0,0)',
					'type'              => 'option',
					'capability'        => 'edit_theme_options',
					'sanitize_callback' => 'et_sanitize_alpha_color',
					));

					$wp_customize->add_control( new ET_Divi_Customize_Color_Alpha_Control( $wp_customize, 'dh_main_header_gradient_1', array(
					'label'     => esc_html__( 'Main Header Gradient Start Color', 'Divi Hacks' ),
					'section'   => 'dh_primary_menu_options',
					'settings'  => 'dh_main_header_gradient_1',
					)));

					$wp_customize->add_setting( 'dh_main_header_gradient_2', array(
					'default'           => 'rgba(0,0,0,0)',
					'type'              => 'option',
					'capability'        => 'edit_theme_options',
					'sanitize_callback' => 'et_sanitize_alpha_color',
					));

					$wp_customize->add_control( new ET_Divi_Customize_Color_Alpha_Control( $wp_customize, 'dh_main_header_gradient_2', array(
					'label'     => esc_html__( 'Main Header Gradient End Color', 'Divi Hacks' ),
					'section'   => 'dh_primary_menu_options',
					'settings'  => 'dh_main_header_gradient_2',
					)));

					$wp_customize->add_setting( 'dh_header_bg', array(
					'default'		=> '',
					'type'          => 'option',
					'capability'    => 'edit_theme_options',
					));

					$wp_customize->add_control( new WP_Customize_Upload_Control( $wp_customize, 'dh_header_bg', array(
					'label'    => __( 'Main Header Background Image', 'Divi Hacks' ),
					'section'  => 'dh_primary_menu_options',
					'settings' => 'dh_header_bg',
					)));

					$wp_customize->add_setting( 'dh_header_gradient_direction', array(
					'capability' => 'edit_theme_options',
					'sanitize_callback' => 'dh_sanitize_select',
					'default' => 'left',
					) );

					$wp_customize->add_control( 'dh_header_gradient_direction', array(
					'type' => 'select',
					'section' => 'dh_primary_menu_options',
					'label' => __( 'Main Header Gradient Direction' ),
					'choices' => array(
						'top' => __( 'Vertical &darr;' ),
						'left' => __( 'Horizontal &rarr;' ),
						'topleft' => __( 'Diagonal &#8600;' ),
						'topright' => __( 'Diagonal &#8601;' ),
					),
					) );
					
					$wp_customize->add_setting('dh_main_header_bg_size', array(
					'default'    => 'cover',
					'type'       => 'option',
					'capability' => 'edit_theme_options',
					));

					$wp_customize->add_control('dh_main_header_bg_size', array(
					'label'    => __('Main Header Background Size', 'divi-hacks'),
					'section'  => 'dh_primary_menu_options',
					'type'     => 'option',
					'settings' => 'dh_main_header_bg_size'
					));

					$wp_customize->add_setting('dh_main_header_bg_repeat', array(
					'default'    => 'no-repeat',
					'type'       => 'option',
					'capability' => 'edit_theme_options',
					));

					$wp_customize->add_control('dh_main_header_bg_repeat', array(
					'label'    => __('Main Header Background Repeat', 'divi-hacks'),
					'section'  => 'dh_primary_menu_options',
					'type'     => 'option',
					'settings' => 'dh_main_header_bg_repeat'
					));

					$wp_customize->add_setting('dh_main_header_bg_position', array(
					'default'    => 'center',
					'type'       => 'option',
					'capability' => 'edit_theme_options',
					));

					$wp_customize->add_control('dh_main_header_bg_position', array(
					'label'    => __('Main Header Background Position', 'divi-hacks'),
					'section'  => 'dh_primary_menu_options',
					'type'     => 'option',
					'settings' => 'dh_main_header_bg_position'
					));
					
					$wp_customize->add_setting('dh_logo_styles', array(
					'default'    => '',
					'capability' => 'edit_theme_options',
					'sanitize_callback' => 'sanitize_text_field',
					));

					$wp_customize->add_control('dh_logo_styles', array(
					'label'    => __('Logo CSS', 'divi-hacks'),
					'section'  => 'dh_primary_menu_options',
					'type'     => 'textarea',
					'settings' => 'dh_logo_styles'
					));

					$wp_customize->add_setting('dh_primary_dropdown_width', array(
					'default'    => '240px',
					'type'       => 'option',
					'capability' => 'edit_theme_options',
					));

					$wp_customize->add_control('dh_primary_dropdown_width', array(
					'label'    => __('Main Header Dropdown Width', 'divi-hacks'),
					'section'  => 'dh_primary_menu_options',
					'type'     => 'option',
					'settings' => 'dh_primary_dropdown_width'
					));
					
					$wp_customize->add_setting('dh_primary_dropdown_line_height', array(
					'default'    => '1.2em',
					'type'       => 'option',
					'capability' => 'edit_theme_options',
					));

					$wp_customize->add_control('dh_primary_dropdown_line_height', array(
					'label'    => __('Dropdown Line Height', 'divi-hacks'),
					'section'  => 'dh_primary_menu_options',
					'type'     => 'option',
					'settings' => 'dh_primary_dropdown_line_height'
					));
					
					$wp_customize->add_setting( 'dh_primary_dropdown_link_color', array(
					'default'           => 'inherit',
					'type'              => 'option',
					'capability'        => 'edit_theme_options',
					'sanitize_callback' => 'et_sanitize_alpha_color',
					));

					$wp_customize->add_control( new ET_Divi_Customize_Color_Alpha_Control( $wp_customize, 'dh_primary_dropdown_link_color', array(
					'label'     => esc_html__( 'Main Header Dropdown Link Color', 'Divi Hacks' ),
					'section'   => 'dh_primary_menu_options',
					'settings'  => 'dh_primary_dropdown_link_color',
					)));
					
					$wp_customize->add_setting( 'dh_nav_columns_text_align', array(
					'capability' => 'edit_theme_options',
					'sanitize_callback' => 'dh_sanitize_select',
					'default' => 'flex-start',
					) );

					$wp_customize->add_control( 'dh_nav_columns_text_align', array(
					'type' => 'select',
					'section' => 'dh_primary_menu_options',
					'label' => __( 'Main Header Drop Down Text Alignment' ),
					'choices' => array(
						'flex-start' => __( 'Left' ),
						'center' => __( 'Center' ),
						'flex-end' => __( 'Right' ),
					),
					) );
					
					$wp_customize->add_setting('dh_nav_columns_width', array(
					'default'    => '120px',
					'type'       => 'option',
					'capability' => 'edit_theme_options',
					));

					$wp_customize->add_control('dh_nav_columns_width', array(
					'label'    => __('Main Header Dropdown Column Width', 'divi-hacks'),
					'description' => __('Use this with the <a href="https://divihacks.com/docs/theme-customizations/#columns" target="_blank">Columns in Dropdowns</a> Hack to set the width of the columns.', 'divi-hacks'),
					'section'  => 'dh_primary_menu_options',
					'type'     => 'option',
					'settings' => 'dh_nav_columns_width'
					));
					
					$wp_customize->add_setting('dh_nav_columns_line_height', array(
					'default'    => '2em',
					'type'       => 'option',
					'capability' => 'edit_theme_options',
					));

					$wp_customize->add_control('dh_nav_columns_line_height', array(
					'label'    => __('Main Header Dropdown Link Line Height', 'divi-hacks'),
					'section'  => 'dh_primary_menu_options',
					'type'     => 'option',
					'settings' => 'dh_nav_columns_line_height'
					));
					
					$wp_customize->add_setting('dh_nav_columns_left_padding', array(
					'default'    => '0px',
					'type'       => 'option',
					'capability' => 'edit_theme_options',
					));

					$wp_customize->add_control('dh_nav_columns_left_padding', array(
					'label'    => __('Main Header Dropdown Column Left Padding', 'divi-hacks'),
					'section'  => 'dh_primary_menu_options',
					'type'     => 'option',
					'settings' => 'dh_nav_columns_left_padding'
					));
					
					$wp_customize->add_setting('dh_nav_columns_right_padding', array(
					'default'    => '0px',
					'type'       => 'option',
					'capability' => 'edit_theme_options',
					));

					$wp_customize->add_control('dh_nav_columns_right_padding', array(
					'label'    => __('Main Header Dropdown Column Right Padding', 'divi-hacks'),
					'section'  => 'dh_primary_menu_options',
					'type'     => 'option',
					'settings' => 'dh_nav_columns_right_padding'
					));
					
					$wp_customize->add_setting( 'dh_top_icon_color', array(
					'default'           => 'inherit',
					'type'              => 'option',
					'capability'        => 'edit_theme_options',
					'sanitize_callback' => 'et_sanitize_alpha_color',
					));

					$wp_customize->add_control( new ET_Divi_Customize_Color_Alpha_Control( $wp_customize, 'dh_top_icon_color', array(
					'label'     => esc_html__( 'Main Header Menu Bar Icon Color', 'Divi Hacks' ),
					'section'   => 'dh_primary_menu_options',
					'settings'  => 'dh_top_icon_color',
					)));
					
					$wp_customize->add_setting( 'dh_dropdown_icon_color', array(
					'default'           => 'inherit',
					'type'              => 'option',
					'capability'        => 'edit_theme_options',
					'sanitize_callback' => 'et_sanitize_alpha_color',
					));

					$wp_customize->add_control( new ET_Divi_Customize_Color_Alpha_Control( $wp_customize, 'dh_dropdown_icon_color', array(
					'label'     => esc_html__( 'Main Header Dropdown Icon Color', 'Divi Hacks' ),
					'section'   => 'dh_primary_menu_options',
					'settings'  => 'dh_dropdown_icon_color',
					)));
					
					$wp_customize->add_setting('dh_nav_icon_size', array(
					'default'    => '1em',
					'type'       => 'option',
					'capability' => 'edit_theme_options',
					));

					$wp_customize->add_control('dh_nav_icon_size', array(
					'label'    => __('Main Header Icon Size', 'divi-hacks'),
					'section'  => 'dh_primary_menu_options',
					'type'     => 'option',
					'settings' => 'dh_nav_icon_size'
					));

					$wp_customize->add_setting('dh_mh_dropdown_parent_styles', array(
					'default'    => 'font-weight:bold; text-transform:uppercase; border-bottom:1px solid; padding-bottom:10px; margin-bottom:10px;',
					'capability' => 'edit_theme_options',
					'sanitize_callback' => 'sanitize_text_field',
					));

					$wp_customize->add_control('dh_mh_dropdown_parent_styles', array(
					'label'    => __('Main Header Dropdown Column Parent CSS', 'divi-hacks'),
					'section'  => 'dh_primary_menu_options',
					'type'     => 'textarea',
					'settings' => 'dh_mh_dropdown_parent_styles'
					));
					
					$wp_customize->add_setting('dh_mh_current_page_styles', array(
					'default'    => '',
					'capability' => 'edit_theme_options',
					'sanitize_callback' => 'sanitize_text_field',
					));

					$wp_customize->add_control('dh_mh_current_page_styles', array(
					'label'    => __('Main Header Current Page Link CSS', 'divi-hacks'),
					'section'  => 'dh_primary_menu_options',
					'type'     => 'textarea',
					'settings' => 'dh_mh_current_page_styles'
					));
					
			$wp_customize->add_section('dh_secondary_menu_options', array(
			'priority'    => 15,
			'title'       => __('Secondary Menu Bar', 'divi-hacks'),
			'panel'       => 'divi_hack_options',
			));
					
					$wp_customize->add_setting( 'dh_secondary_header_gradient_1', array(
					'default'           => 'rgba(0,0,0,0)',
					'type'              => 'option',
					'capability'        => 'edit_theme_options',
					'sanitize_callback' => 'et_sanitize_alpha_color',
					));

					$wp_customize->add_control( new ET_Divi_Customize_Color_Alpha_Control( $wp_customize, 'dh_secondary_header_gradient_1', array(
					'label'     => esc_html__( 'Header Gradient Start Color', 'Divi Hacks' ),
					'section'   => 'dh_secondary_menu_options',
					'settings'  => 'dh_secondary_header_gradient_1',
					)));

					$wp_customize->add_setting( 'dh_secondary_header_gradient_2', array(
					'default'           => 'rgba(0,0,0,0)',
					'type'              => 'option',
					'capability'        => 'edit_theme_options',
					'sanitize_callback' => 'et_sanitize_alpha_color',
					));

					$wp_customize->add_control( new ET_Divi_Customize_Color_Alpha_Control( $wp_customize, 'dh_secondary_header_gradient_2', array(
					'label'     => esc_html__( 'Header Gradient End Color', 'Divi Hacks' ),
					'section'   => 'dh_secondary_menu_options',
					'settings'  => 'dh_secondary_header_gradient_2',
					)));

					$wp_customize->add_setting( 'dh_secondary_header_gradient_direction', array(
					'capability' => 'edit_theme_options',
					'sanitize_callback' => 'dh_sanitize_select',
					'default' => 'left',
					) );

					$wp_customize->add_control( 'dh_secondary_header_gradient_direction', array(
					'type' => 'select',
					'section' => 'dh_secondary_menu_options',
					'label' => __( 'Gradient Direction' ),
					'choices' => array(
						'top' => __( 'Vertical &darr;' ),
						'left' => __( 'Horizontal &rarr;' ),
						'topleft' => __( 'Diagonal &#8600;' ),
						'topright' => __( 'Diagonal &#8601;' ),
					),
					) );

					$wp_customize->add_setting( 'dh_secondary_header_bg', array(
					'default'		=> '',
					'type'          => 'option',
					'capability'    => 'edit_theme_options',
					));

					$wp_customize->add_control( new WP_Customize_Upload_Control( $wp_customize, 'dh_secondary_header_bg', array(
					'label'    => __( 'Header Background Image', 'Divi Hacks' ),
					'section'  => 'dh_secondary_menu_options',
					'settings' => 'dh_secondary_header_bg',
					)));

					$wp_customize->add_setting('dh_secondary_header_bg_size', array(
					'default'    => 'cover',
					'type'       => 'option',
					'capability' => 'edit_theme_options',
					));

					$wp_customize->add_control('dh_secondary_header_bg_size', array(
					'label'    => __('Background Size', 'divi-hacks'),
					'section'  => 'dh_secondary_menu_options',
					'type'     => 'option',
					'settings' => 'dh_secondary_header_bg_size'
					));

					$wp_customize->add_setting('dh_secondary_header_bg_repeat', array(
					'default'    => 'no-repeat',
					'type'       => 'option',
					'capability' => 'edit_theme_options',
					));

					$wp_customize->add_control('dh_secondary_header_bg_repeat', array(
					'label'    => __('Background Repeat', 'divi-hacks'),
					'section'  => 'dh_secondary_menu_options',
					'type'     => 'option',
					'settings' => 'dh_secondary_header_bg_repeat'
					));

					$wp_customize->add_setting('dh_secondary_header_bg_position', array(
					'default'    => 'center',
					'type'       => 'option',
					'capability' => 'edit_theme_options',
					));

					$wp_customize->add_control('dh_secondary_header_bg_position', array(
					'label'    => __('Background Position', 'divi-hacks'),
					'section'  => 'dh_secondary_menu_options',
					'type'     => 'option',
					'settings' => 'dh_secondary_header_bg_position'
					));
					
					$wp_customize->add_setting( 'dh_secondary_current_item_color', array(
					'default'           => 'inherit',
					'type'              => 'option',
					'capability'        => 'edit_theme_options',
					'sanitize_callback' => 'et_sanitize_alpha_color',
					));

					$wp_customize->add_control( new ET_Divi_Customize_Color_Alpha_Control( $wp_customize, 'dh_secondary_current_item_color', array(
					'label'     => esc_html__( 'Top Header Current Page Text Color', 'Divi Hacks' ),
					'section'   => 'dh_secondary_menu_options',
					'settings'  => 'dh_secondary_current_item_color',
					)));
					
					$wp_customize->add_setting('dh_secondary_dropdown_width', array(
					'default'    => '220px',
					'type'       => 'option',
					'capability' => 'edit_theme_options',
					));

					$wp_customize->add_control('dh_secondary_dropdown_width', array(
					'label'    => __('Dropdown Width', 'divi-hacks'),
					'section'  => 'dh_secondary_menu_options',
					'type'     => 'option',
					'settings' => 'dh_secondary_dropdown_width'
					));
					
					$wp_customize->add_setting('dh_secondary_dropdown_line_height', array(
					'default'    => '1.2em',
					'type'       => 'option',
					'capability' => 'edit_theme_options',
					));

					$wp_customize->add_control('dh_secondary_dropdown_line_height', array(
					'label'    => __('Dropdown Line Height', 'divi-hacks'),
					'section'  => 'dh_secondary_menu_options',
					'type'     => 'option',
					'settings' => 'dh_secondary_dropdown_line_height'
					));
					
					$wp_customize->add_setting( 'dh_secondary_dropdown_link_color', array(
					'default'           => 'inherit',
					'type'              => 'option',
					'capability'        => 'edit_theme_options',
					'sanitize_callback' => 'et_sanitize_alpha_color',
					));

					$wp_customize->add_control( new ET_Divi_Customize_Color_Alpha_Control( $wp_customize, 'dh_secondary_dropdown_link_color', array(
					'label'     => esc_html__( 'Top Header Dropdown Link Color', 'Divi Hacks' ),
					'section'   => 'dh_secondary_menu_options',
					'settings'  => 'dh_secondary_dropdown_link_color',
					)));
					
					$wp_customize->add_setting('dh_secondary_nav_columns_width', array(
					'default'    => '120px',
					'type'       => 'option',
					'capability' => 'edit_theme_options',
					));

					$wp_customize->add_control('dh_secondary_nav_columns_width', array(
					'label'    => __('Dropdown Column Width', 'divi-hacks'),
					'description' => __('Use this with the <a href="https://divihacks.com/docs/theme-customizations/#columns" target="_blank">Columns in Dropdowns</a> Hack to set the width of the columns.', 'divi-hacks'),
					'section'  => 'dh_secondary_menu_options',
					'type'     => 'option',
					'settings' => 'dh_secondary_nav_columns_width'
					));
					
					$wp_customize->add_setting( 'dh_secondary_nav_columns_text_align', array(
					'capability' => 'edit_theme_options',
					'sanitize_callback' => 'dh_sanitize_select',
					'default' => 'flex-start',
					) );

					$wp_customize->add_control( 'dh_secondary_nav_columns_text_align', array(
					'type' => 'select',
					'section' => 'dh_secondary_menu_options',
					'label' => __( 'Drop Down Text Alignment' ),
					'choices' => array(
						'flex-start' => __( 'Left' ),
						'center' => __( 'Center' ),
						'flex-end' => __( 'Right' ),
					),
					) );
					
					$wp_customize->add_setting('dh_secondary_nav_columns_line_height', array(
					'default'    => '2em',
					'type'       => 'option',
					'capability' => 'edit_theme_options',
					));

					$wp_customize->add_control('dh_secondary_nav_columns_line_height', array(
					'label'    => __('Dropdown Link Line Height', 'divi-hacks'),
					'section'  => 'dh_secondary_menu_options',
					'type'     => 'option',
					'settings' => 'dh_secondary_nav_columns_line_height'
					));
					
					$wp_customize->add_setting('dh_secondary_nav_columns_left_padding', array(
					'default'    => '0px',
					'type'       => 'option',
					'capability' => 'edit_theme_options',
					));

					$wp_customize->add_control('dh_secondary_nav_columns_left_padding', array(
					'label'    => __('Column Left Padding', 'divi-hacks'),
					'section'  => 'dh_secondary_menu_options',
					'type'     => 'option',
					'settings' => 'dh_secondary_nav_columns_left_padding'
					));
					
					$wp_customize->add_setting('dh_secondary_nav_columns_right_padding', array(
					'default'    => '0px',
					'type'       => 'option',
					'capability' => 'edit_theme_options',
					));

					$wp_customize->add_control('dh_secondary_nav_columns_right_padding', array(
					'label'    => __('Column Right Padding', 'divi-hacks'),
					'section'  => 'dh_secondary_menu_options',
					'type'     => 'option',
					'settings' => 'dh_secondary_nav_columns_right_padding'
					));
					
					$wp_customize->add_setting( 'dh_top_header_menu_bar_icon_color', array(
					'default'           => 'inherit',
					'type'              => 'option',
					'capability'        => 'edit_theme_options',
					'sanitize_callback' => 'et_sanitize_alpha_color',
					));

					$wp_customize->add_control( new ET_Divi_Customize_Color_Alpha_Control( $wp_customize, 'dh_top_header_menu_bar_icon_color', array(
					'label'     => esc_html__( 'Top Header Menu Bar Icon Color', 'Divi Hacks' ),
					'section'   => 'dh_secondary_menu_options',
					'settings'  => 'dh_top_header_menu_bar_icon_color',
					)));
					$wp_customize->add_setting( 'dh_top_header_dropdown_icon_color', array(
					'default'           => 'inherit',
					'type'              => 'option',
					'capability'        => 'edit_theme_options',
					'sanitize_callback' => 'et_sanitize_alpha_color',
					));

					$wp_customize->add_control( new ET_Divi_Customize_Color_Alpha_Control( $wp_customize, 'dh_top_header_dropdown_icon_color', array(
					'label'     => esc_html__( 'Top Header Dropdown Icon Color', 'Divi Hacks' ),
					'section'   => 'dh_secondary_menu_options',
					'settings'  => 'dh_top_header_dropdown_icon_color',
					)));

					$wp_customize->add_setting('dh_secondary_nav_icon_size', array(
					'default'    => '1em',
					'type'       => 'option',
					'capability' => 'edit_theme_options',
					));

					$wp_customize->add_control('dh_secondary_nav_icon_size', array(
					'label'    => __('Secondary Icon Size', 'divi-hacks'),
					'section'  => 'dh_secondary_menu_options',
					'type'     => 'option',
					'settings' => 'dh_secondary_nav_icon_size'
					));

					$wp_customize->add_setting('dh_th_dropdown_parent_styles', array(
					'default'    => 'font-weight:bold; text-transform:uppercase; border-bottom:1px solid; padding-bottom:10px; margin-bottom:10px;',
					'capability' => 'edit_theme_options',
					'sanitize_callback' => 'sanitize_text_field',
					));

					$wp_customize->add_control('dh_th_dropdown_parent_styles', array(
					'label'    => __('Top Header Dropdown Column Parent\'s CSS', 'divi-hacks'),
					'section'  => 'dh_secondary_menu_options',
					'type'     => 'textarea',
					'settings' => 'dh_th_dropdown_parent_styles'
					));
					
					$wp_customize->add_setting('dh_th_current_page_styles', array(
					'default'    => '',
					'capability' => 'edit_theme_options',
					'sanitize_callback' => 'sanitize_text_field',
					));

					$wp_customize->add_control('dh_th_current_page_styles', array(
					'label'    => __('Top Header Current Page Link CSS', 'divi-hacks'),
					'section'  => 'dh_secondary_menu_options',
					'type'     => 'textarea',
					'settings' => 'dh_th_current_page_styles'
					));
					
			$wp_customize->add_section('dh_footer_options', array(
			'priority'    => 25,
			'title'       => __('Footer', 'divi-hacks'),
			'panel'       => 'divi_hack_options',
			));
							
					$wp_customize->add_setting( 'dh_footer_menu_bar_alignment', array(
					'capability' => 'edit_theme_options',
					'sanitize_callback' => 'dh_sanitize_select',
					'default' => 'left',
					) );

					$wp_customize->add_control( 'dh_footer_menu_bar_alignment', array(
					'type' => 'select',
					'section' => 'dh_footer_options',
					'label' => __( 'Footer Menu Bar Alignment' ),
					'choices' => array(
						'left' => __( 'Left' ),
						'center' => __( 'Center' ),
						'right' => __( 'Right' ),
					),
					) );

					$wp_customize->add_setting( 'dh_footer_bottom_bar_alignment', array(
					'capability' => 'edit_theme_options',
					'sanitize_callback' => 'dh_sanitize_select',
					'default' => 'default',
					) );

					$wp_customize->add_control( 'dh_footer_bottom_bar_alignment', array(
					'type' => 'select',
					'section' => 'dh_footer_options',
					'label' => __( 'Footer Bottom Bar Alignment' ),
					'choices' => array(
						'default' => __( 'Default' ),
						'left' => __( 'Left' ),
						'stacked-center' => __( 'Stacked Center' ),
						'inline-center' => __( 'Inline Center' ),
						'right' => __( 'Right' ),
					),
					) );

					$wp_customize->add_setting( 'dh_footer_menu_bar_gradient_1', array(
					'default'           => 'rgba(0,0,0,0)',
					'type'              => 'option',
					'capability'        => 'edit_theme_options',
					'sanitize_callback' => 'et_sanitize_alpha_color',
					));

					$wp_customize->add_control( new ET_Divi_Customize_Color_Alpha_Control( $wp_customize, 'dh_footer_menu_bar_gradient_1', array(
					'label'     => esc_html__( 'Footer Menu Bar Gradient Start Color', 'Divi Hacks' ),
					'section'   => 'dh_footer_options',
					'settings'  => 'dh_footer_menu_bar_gradient_1',
					)));

					$wp_customize->add_setting( 'dh_footer_menu_bar_gradient_2', array(
					'default'           => 'rgba(0,0,0,0)',
					'type'              => 'option',
					'capability'        => 'edit_theme_options',
					'sanitize_callback' => 'et_sanitize_alpha_color',
					));

					$wp_customize->add_control( new ET_Divi_Customize_Color_Alpha_Control( $wp_customize, 'dh_footer_menu_bar_gradient_2', array(
					'label'     => esc_html__( 'Footer Menu Bar Gradient End Color', 'Divi Hacks' ),
					'section'   => 'dh_footer_options',
					'settings'  => 'dh_footer_menu_bar_gradient_2',
					)));

					$wp_customize->add_setting( 'dh_footer_menu_bar_gradient_direction', array(
					'capability' => 'edit_theme_options',
					'sanitize_callback' => 'dh_sanitize_select',
					'default' => 'left',
					) );

					$wp_customize->add_control( 'dh_footer_menu_bar_gradient_direction', array(
					'type' => 'select',
					'section' => 'dh_footer_options',
					'label' => __( 'Footer Menu Bar Gradient Direction' ),
					'choices' => array(
						'top' => __( 'Vertical &darr;' ),
						'left' => __( 'Horizontal &rarr;' ),
						'topleft' => __( 'Diagonal &#8600;' ),
						'topright' => __( 'Diagonal &#8601;' ),
					),
					) );

					$wp_customize->add_setting( 'dh_footer_bg', array(
					'default'		=> '',
					'type'          => 'option',
					'capability'    => 'edit_theme_options',
					));

					$wp_customize->add_control( new WP_Customize_Upload_Control( $wp_customize, 'dh_footer_bg', array(
					'label'    => __( 'Footer Background Image', 'Divi Hacks' ),
					'section'  => 'dh_footer_options',
					'settings' => 'dh_footer_bg',
					)));

					$wp_customize->add_setting('dh_footer_menu_bar_bg_size', array(
					'default'    => 'cover',
					'type'       => 'option',
					'capability' => 'edit_theme_options',
					));

					$wp_customize->add_control('dh_footer_menu_bar_bg_size', array(
					'label'    => __('Footer Menu Bar Background Size', 'divi-hacks'),
					'section'  => 'dh_footer_options',
					'type'     => 'option',
					'settings' => 'dh_footer_menu_bar_bg_size'
					));

					$wp_customize->add_setting('dh_footer_menu_bar_bg_repeat', array(
					'default'    => 'no-repeat',
					'type'       => 'option',
					'capability' => 'edit_theme_options',
					));

					$wp_customize->add_control('dh_footer_menu_bar_bg_repeat', array(
					'label'    => __('Footer Menu Bar Background Repeat', 'divi-hacks'),
					'section'  => 'dh_footer_options',
					'type'     => 'option',
					'settings' => 'dh_footer_menu_bar_bg_repeat'
					));

					$wp_customize->add_setting('dh_footer_menu_bar_bg_position', array(
					'default'    => 'center',
					'type'       => 'option',
					'capability' => 'edit_theme_options',
					));

					$wp_customize->add_control('dh_footer_menu_bar_bg_position', array(
					'label'    => __('Footer Menu Bar Background Position', 'divi-hacks'),
					'section'  => 'dh_footer_options',
					'type'     => 'option',
					'settings' => 'dh_footer_menu_bar_bg_position'
					));
					
					$wp_customize->add_setting( 'dh_footer_menu_bar_current_item_color', array(
					'default'           => 'inherit',
					'type'              => 'option',
					'capability'        => 'edit_theme_options',
					'sanitize_callback' => 'et_sanitize_alpha_color',
					));

					$wp_customize->add_control( new ET_Divi_Customize_Color_Alpha_Control( $wp_customize, 'dh_footer_menu_bar_current_item_color', array(
					'label'     => esc_html__( 'Footer Menu Bar Current Page Text Color', 'Divi Hacks' ),
					'section'   => 'dh_footer_options',
					'settings'  => 'dh_footer_menu_bar_current_item_color',
					)));
									
					$wp_customize->add_setting( 'dh_footer_menu_bar_icon_color', array(
					'default'           => 'inherit',
					'type'              => 'option',
					'capability'        => 'edit_theme_options',
					'sanitize_callback' => 'et_sanitize_alpha_color',
					));

					$wp_customize->add_control( new ET_Divi_Customize_Color_Alpha_Control( $wp_customize, 'dh_footer_menu_bar_icon_color', array(
					'label'     => esc_html__( 'Footer Menu Bar Icon Color', 'Divi Hacks' ),
					'section'   => 'dh_footer_options',
					'settings'  => 'dh_footer_menu_bar_icon_color',
					)));
					
					$wp_customize->add_setting('dh_footer_menu_bar_nav_icon_size', array(
					'default'    => '1em',
					'type'       => 'option',
					'capability' => 'edit_theme_options',
					));

					$wp_customize->add_control('dh_footer_menu_bar_nav_icon_size', array(
					'label'    => __('Footer Menu Bar Icon Size', 'divi-hacks'),
					'section'  => 'dh_footer_options',
					'type'     => 'option',
					'settings' => 'dh_footer_menu_bar_nav_icon_size'
					));
					
			$wp_customize->add_section('dh_menu_hover_options', array(
			'priority'    => 15,
			'title'       => __('Menu Hover Options', 'divi-hacks'),
			'panel'       => 'divi_hack_options',
			));
			
					$wp_customize->add_setting('dh_mh_hover_styles', array(
					'default'    => 'opacity:1;',
					'capability' => 'edit_theme_options',
					'sanitize_callback' => 'sanitize_text_field',
					));

					$wp_customize->add_control('dh_mh_hover_styles', array(
					'label'    => __('Primary Menu Bar Link Hover CSS', 'divi-hacks'),
					'section'  => 'dh_menu_hover_options',
					'type'     => 'textarea',
					'settings' => 'dh_mh_hover_styles',
					'description' => __( 'Will apply to desktop devices only' ),
					));

					$wp_customize->add_setting('dh_mh_dropdown_hover_styles', array(
					'default'    => 'opacity:1;',
					'capability' => 'edit_theme_options',
					'sanitize_callback' => 'sanitize_text_field',
					));

					$wp_customize->add_control('dh_mh_dropdown_hover_styles', array(
					'label'    => __('Primary Dropdown Link Hover CSS', 'divi-hacks'),
					'section'  => 'dh_menu_hover_options',
					'type'     => 'textarea',
					'settings' => 'dh_mh_dropdown_hover_styles',
					'description' => __( 'Will apply to desktop devices only' ),
					));

					$wp_customize->add_setting('dh_sh_hover_styles', array(
					'default'    => 'opacity:1;',
					'capability' => 'edit_theme_options',
					'sanitize_callback' => 'sanitize_text_field',
					));

					$wp_customize->add_control('dh_sh_hover_styles', array(
					'label'    => __('Secondary Menu Bar Link Hover CSS', 'divi-hacks'),
					'section'  => 'dh_menu_hover_options',
					'type'     => 'textarea',
					'settings' => 'dh_sh_hover_styles',
					'description' => __( 'Will apply to desktop devices only' ),
					));

					$wp_customize->add_setting('dh_sh_dropdown_hover_styles', array(
					'default'    => 'opacity:1;',
					'capability' => 'edit_theme_options',
					'sanitize_callback' => 'sanitize_text_field',
					));

					$wp_customize->add_control('dh_sh_dropdown_hover_styles', array(
					'label'    => __('Secondary Dropdown Link Hover CSS', 'divi-hacks'),
					'section'  => 'dh_menu_hover_options',
					'type'     => 'textarea',
					'settings' => 'dh_sh_dropdown_hover_styles',
					'description' => __( 'Will apply to desktop devices only' ),
					));
					
			$wp_customize->add_section('dh_sticky_offset', array(
			'priority'    => 25,
			'title'       => __('Sticky Offset', 'divi-hacks'),
			'panel'       => 'divi_hack_options',
			));
					
					// Sticky Element Offset Desktop
					$wp_customize->add_setting('dh_sticky_element_offset_desktop', array(
					'default' => '50',
					'type' => 'option',
					'capability' => 'edit_theme_options',
					));

					$wp_customize->add_control('dh_sticky_element_offset_desktop', array(
					'label' => __('Sticky Module Offset on Desktop', 'divi-hacks'),
					'description' => 'Value is in pixels. Only use numbers. ex. 100',
					'section' => 'dh_sticky_offset',
					'type' => 'option',
					'settings' => 'dh_sticky_element_offset_desktop'
					));
		 
					// Sticky Row Offset Desktop
					$wp_customize->add_setting('dh_sticky_row_offset_desktop', array(
					'default' => '50',
					'type' => 'option',
					'capability' => 'edit_theme_options',
					));

					$wp_customize->add_control('dh_sticky_row_offset_desktop', array(
					'label' => __('Sticky Row Offset on Desktop', 'divi-hacks'),
					'description' => 'Value is in pixels. Only use numbers. ex. 100',
					'section' => 'dh_sticky_offset',
					'type' => 'option',
					'settings' => 'dh_sticky_row_offset_desktop'
					));
					
					// Sticky Section Offset Desktop
					$wp_customize->add_setting('dh_sticky_section_offset_desktop', array(
					'default' => '50',
					'type' => 'option',
					'capability' => 'edit_theme_options',
					));

					$wp_customize->add_control('dh_sticky_section_offset_desktop', array(
					'label' => __('Sticky Section Offset on Desktop', 'divi-hacks'),
					'description' => 'Value is in pixels. Only use numbers. ex. 100',
					'section' => 'dh_sticky_offset',
					'type' => 'option',
					'settings' => 'dh_sticky_section_offset_desktop'
					));
					
					// Sticky Column Offset Desktop
					$wp_customize->add_setting('dh_sticky_column_offset_desktop', array(
					'default' => '50',
					'type' => 'option',
					'capability' => 'edit_theme_options',
					));

					$wp_customize->add_control('dh_sticky_column_offset_desktop', array(
					'label' => __('Sticky Column Offset on Desktop', 'divi-hacks'),
					'description' => 'Value is in pixels. Only use numbers. ex. 100',
					'section' => 'dh_sticky_offset',
					'type' => 'option',
					'settings' => 'dh_sticky_column_offset_desktop'
					));
					
					// Sticky Element Offset Mobile
					$wp_customize->add_setting('dh_sticky_element_offset_mobile', array(
					'default' => '50',
					'type' => 'option',
					'capability' => 'edit_theme_options',
					));

					$wp_customize->add_control('dh_sticky_element_offset_mobile', array(
					'label' => __('Sticky Module Offset on Mobile', 'divi-hacks'),
					'description' => 'Value is in pixels. Only use numbers. ex. 100',
					'section' => 'dh_sticky_offset',
					'type' => 'option',
					'settings' => 'dh_sticky_element_offset_mobile'
					));
		 
					// Sticky Row Offset Mobile
					$wp_customize->add_setting('dh_sticky_row_offset_mobile', array(
					'default' => '50',
					'type' => 'option',
					'capability' => 'edit_theme_options',
					));

					$wp_customize->add_control('dh_sticky_row_offset_mobile', array(
					'label' => __('Sticky Row Offset on Mobile', 'divi-hacks'),
					'description' => 'Value is in pixels. Only use numbers. ex. 100',
					'section' => 'dh_sticky_offset',
					'type' => 'option',
					'settings' => 'dh_sticky_row_offset_mobile'
					));
		 
					// Sticky Section Offset Mobile
					$wp_customize->add_setting('dh_sticky_section_offset_mobile', array(
					'default' => '50',
					'type' => 'option',
					'capability' => 'edit_theme_options',
					));

					$wp_customize->add_control('dh_sticky_section_offset_mobile', array(
					'label' => __('Sticky Section Offset on Mobile', 'divi-hacks'),
					'description' => 'Value is in pixels. Only use numbers. ex. 100',
					'section' => 'dh_sticky_offset',
					'type' => 'option',
					'settings' => 'dh_sticky_section_offset_mobile'
					));
		 
					// Sticky Column Offset Mobile
					$wp_customize->add_setting('dh_sticky_column_offset_mobile', array(
					'default' => '50',
					'type' => 'option',
					'capability' => 'edit_theme_options',
					));

					$wp_customize->add_control('dh_sticky_column_offset_mobile', array(
					'label' => __('Sticky Column Offset on Mobile', 'divi-hacks'),
					'description' => 'Value is in pixels. Only use numbers. ex. 100',
					'section' => 'dh_sticky_offset',
					'type' => 'option',
					'settings' => 'dh_sticky_column_offset_mobile'
					));
					
			$wp_customize->add_section('custom_css_options', array(
			'priority'    => 25,
			'title'       => __('Device Specific CSS', 'divi-hacks'),
			'panel'       => 'divi_hack_options',
			));
					$wp_customize->add_setting('dh_phone_styles', array(
					'default'    => '',
					'capability' => 'edit_theme_options',
					'sanitize_callback' => 'sanitize_text_field',
					));

					$wp_customize->add_control('dh_phone_styles', array(
					'label'    => __('Phone Styles', 'divi-hacks'),
					'section'  => 'custom_css_options',
					'type'     => 'textarea',
					'settings' => 'dh_phone_styles'
					));
					
					$wp_customize->add_setting('dh_mobile_styles', array(
					'default'    => '',
					'capability' => 'edit_theme_options',
					'sanitize_callback' => 'sanitize_text_field',
					));

					$wp_customize->add_control('dh_mobile_styles', array(
					'label'    => __('Mobile Styles (Tablet & Phone)', 'divi-hacks'),
					'section'  => 'custom_css_options',
					'type'     => 'textarea',
					'settings' => 'dh_mobile_styles'
					));
					
					$wp_customize->add_setting('dh_tablet_styles', array(
					'default'    => '',
					'capability' => 'edit_theme_options',
					'sanitize_callback' => 'sanitize_text_field',
					));

					$wp_customize->add_control('dh_tablet_styles', array(
					'label'    => __('Tablet Styles', 'divi-hacks'),
					'section'  => 'custom_css_options',
					'type'     => 'textarea',
					'settings' => 'dh_tablet_styles'
					));
					
					$wp_customize->add_setting('dh_desktop_styles', array(
					'default'    => '',
					'capability' => 'edit_theme_options',
					'sanitize_callback' => 'sanitize_text_field',
					));

					$wp_customize->add_control('dh_desktop_styles', array(
					'label'    => __('Desktop Styles', 'divi-hacks'),
					'section'  => 'custom_css_options',
					'type'     => 'textarea',
					'settings' => 'dh_desktop_styles'
					));				
					
					function dh_sanitize_range( $value ) {
						return (int) $value;
					}
					function dh_sanitize_select( $input, $setting ) {
						// Ensure input is a slug.
						$input = sanitize_key( $input );

						// Get list of choices from the control associated with the setting.
						$choices = $setting->manager->get_control( $setting->id )->choices;

						// If the input is a valid key, return it; otherwise, return the default.
						return ( array_key_exists( $input, $choices ) ? $input : $setting->default );
					}
	}
	// Phone Styles
	add_filter('dh_custom_styles', 'dh_phone_styles');
	function dh_phone_styles() {
		if( get_theme_mod( 'dh_phone_styles') != "" ) {
			echo get_theme_mod( 'dh_phone_styles');
		}
	}
	// Mobile Styles
	add_filter('dh_custom_styles', 'dh_mobile_styles');
	function dh_mobile_styles() {
		if( get_theme_mod( 'dh_mobile_styles') != "" ) {
			echo get_theme_mod( 'dh_mobile_styles');
		}
	}
	// Tablet Styles
	add_filter('dh_custom_styles', 'dh_tablet_styles');
	function dh_tablet_styles() {
		if( get_theme_mod( 'dh_tablet_styles') != "" ) {
			echo get_theme_mod( 'dh_tablet_styles');
		}
	}
	// Desktop Styles
	add_filter('dh_custom_styles', 'dh_desktop_styles');
	function dh_desktop_styles() {
		if( get_theme_mod( 'dh_desktop_styles') != "" ) {
			echo get_theme_mod( 'dh_desktop_styles');
		}
	}
	// Main Header Dropdown Parent Styles
	add_filter('dh_custom_styles', 'dh_mh_dropdown_parent_styles');
	function dh_mh_dropdown_parent_styles() {
		if( get_theme_mod( 'dh_mh_dropdown_parent_styles') != "" ) {
			echo get_theme_mod( 'dh_mh_dropdown_parent_styles');
		}
	}
	// Main Header Dropdown Parent Styles
	add_filter('dh_custom_styles', 'dh_mh_current_page_styles');
	function dh_mh_current_page_styles() {
		if( get_theme_mod( 'dh_mh_current_page_styles') != "" ) {
			echo get_theme_mod( 'dh_mh_current_page_styles');
		}
	}

	// Main Header Link Hover Styles
	add_filter('dh_custom_styles', 'dh_mh_hover_styles');
	function dh_mh_hover_styles() {
		if( get_theme_mod( 'dh_mh_hover_styles') != "" ) {
			echo get_theme_mod( 'dh_mh_hover_styles');
		}
	}
	// Main Header Dropdown Link Hover Styles
	add_filter('dh_custom_styles', 'dh_mh_dropdown_hover_styles');
	function dh_mh_dropdown_hover_styles() {
		if( get_theme_mod( 'dh_mh_dropdown_hover_styles') != "" ) {
			echo get_theme_mod( 'dh_mh_dropdown_hover_styles');
		}
	}
	// Top Header Link Hover Styles
	add_filter('dh_custom_styles', 'dh_sh_hover_styles');
	function dh_sh_hover_styles() {
		if( get_theme_mod( 'dh_sh_hover_styles') != "" ) {
			echo get_theme_mod( 'dh_sh_hover_styles');
		}
	}
	// Top Header Dropdown Link Hover Styles
	add_filter('dh_custom_styles', 'dh_sh_dropdown_hover_styles');
	function dh_sh_dropdown_hover_styles() {
		if( get_theme_mod( 'dh_sh_dropdown_hover_styles') != "" ) {
			echo get_theme_mod( 'dh_sh_dropdown_hover_styles');
		}
	}
	// Top Header Dropdown Parent's Styles
	add_filter('dh_custom_styles', 'dh_th_dropdown_parent_styles');
	function dh_th_dropdown_parent_styles() {
		if( get_theme_mod( 'dh_th_dropdown_parent_styles') != "" ) {
			echo get_theme_mod( 'dh_th_dropdown_parent_styles');
		}
	}
	// Top Header Dropdown Parent's Styles
	add_filter('dh_custom_styles', 'dh_th_current_page_styles');
	function dh_th_current_page_styles() {
		if( get_theme_mod( 'dh_th_current_page_styles') != "" ) {
			echo get_theme_mod( 'dh_th_current_page_styles');
		}
	}
	// Logo Styles
	add_filter('dh_custom_styles', 'dh_logo_styles');
	function dh_logo_styles() {
		if( get_theme_mod( 'dh_logo_styles') != "" ) {
			echo get_theme_mod( 'dh_logo_styles');
		}
	}

// ------------- Custom Header Styles -------------//
	// H1 Styles
	add_filter('dh_custom_styles', 'dh_custom_h1');
	function dh_custom_h1() {
		if( get_theme_mod( 'dh_custom_h1') != "" ) {
			echo get_theme_mod( 'dh_custom_h1');
		}
	}
	// H2 Styles
	add_filter('dh_custom_styles', 'dh_custom_h2');
	function dh_custom_h2() {
		if( get_theme_mod( 'dh_custom_h2') != "" ) {
			echo get_theme_mod( 'dh_custom_h2');
		}
	}
	// H3 Styles
	add_filter('dh_custom_styles', 'dh_custom_h3');
	function dh_custom_h3() {
		if( get_theme_mod( 'dh_custom_h3') != "" ) {
			echo get_theme_mod( 'dh_custom_h3');
		}
	}
	// H4 Styles
	add_filter('dh_custom_styles', 'dh_custom_h4');
	function dh_custom_h4() {
		if( get_theme_mod( 'dh_custom_h4') != "" ) {
			echo get_theme_mod( 'dh_custom_h4');
		}
	}
	// H5 Styles
	add_filter('dh_custom_styles', 'dh_custom_h5');
	function dh_custom_h5() {
		if( get_theme_mod( 'dh_custom_h5') != "" ) {
			echo get_theme_mod( 'dh_custom_h5');
		}
	}
	// H6 Styles
	add_filter('dh_custom_styles', 'dh_custom_h6');
	function dh_custom_h6() {
		if( get_theme_mod( 'dh_custom_h6') != "" ) {
			echo get_theme_mod( 'dh_custom_h6');
		}
	}
	// H6 Styles
	add_filter('dh_custom_styles', 'dh_import_fonts');
	function dh_import_fonts() {
		if( get_theme_mod( 'dh_import_fonts') != "" ) {
			echo get_theme_mod( 'dh_import_fonts');
		}
	}

// ------------- Footer Editor -------------//
	function dh_footer_links_editor($wp_customize) {

	// Footer Links Editor Switch
	$wp_customize->add_setting('dh_footer_links_enabler_switch', array(
	'default' => false,
	'type'        => 'theme_mod',
	'capability'  => 'edit_theme_options',
	));
	$wp_customize->add_control('dh_footer_links_enabler_switch', array(
	'label' => __('Enable Custom Footer Links '),
	'description' => __('Show the Copyright symbol and the current year and add extra links.'),
	'section' => 'dh_footer_options',
	'priority' => 20,
	'type' => 'checkbox',
	'settings' => 'dh_footer_links_enabler_switch'
	));
	// Show Current Year & Copyright
	$wp_customize->add_setting( 'dh_footer_links_copyright', array(
	'capability' => 'edit_theme_options',
	'sanitize_callback' => 'dh_sanitize_select',
	'default' => 'inline',
	) );

	$wp_customize->add_control( 'dh_footer_links_copyright', array(
	'type' => 'select',
	'section' => 'dh_footer_options',
	'label' => __( 'Show/Hide Copyright & Current Year' ),
	'priority' => 20,
	'choices' => array(
	'none' => __( 'Hide Copyright' ),
	'inline' => __( 'Show Copyright' ),
	),
	) );
	// Before Link One
	$wp_customize->add_setting('dh_footer_links_before_link_one', array(
	'default' => 'All Rights Reserved',
	'type' => 'option',
	'capability' => 'edit_theme_options',
	));

	$wp_customize->add_control('dh_footer_links_before_link_one', array(
	'label' => __('Text Before First Link', 'divi-hacks'),
	'section' => 'dh_footer_options',
	'type' => 'option',
	'priority' => 25,
	'settings' => 'dh_footer_links_before_link_one'
	));
	// Link One 
	$wp_customize->add_setting('dh_footer_links_link_one', array(
	'default' => 'Your Awesome Website',
	'type' => 'option',
	'capability' => 'edit_theme_options',
	));

	$wp_customize->add_control('dh_footer_links_link_one', array(
	'label' => __('First Link Text', 'divi-hacks'),
	'section' => 'dh_footer_options',
	'type' => 'option',
	'priority' => 30,
	'settings' => 'dh_footer_links_link_one'
	));
	// Link One URL 
	$wp_customize->add_setting('dh_footer_link_one_url', array(
	'default' => '#',
	'type' => 'option',
	'capability' => 'edit_theme_options',
	));

	$wp_customize->add_control('dh_footer_link_one_url', array(
	'label' => __('First Link URL', 'divi-hacks'),
	'section' => 'dh_footer_options',
	'type' => 'option',
	'priority' => 35,
	'settings' => 'dh_footer_link_one_url'
	));
	// Link One Open in New Tab 
	$wp_customize->add_setting('dh_footer_link_one_open', array(
	'default' => true,
	'type'        => 'theme_mod',
	'capability'  => 'edit_theme_options',
	));
	$wp_customize->add_control('dh_footer_link_one_open', array(
	'label' => __('Open First Link in New Tab?'),
	'section' => 'dh_footer_options',
	'type' => 'checkbox',
	'priority' => 35,
	'settings' => 'dh_footer_link_one_open'
	));

	// Footer Divider 
	$wp_customize->add_setting('dh_footer_link_divider', array(
	'default' => '|',
	'type' => 'option',
	'capability' => 'edit_theme_options'
	));

	$wp_customize->add_control('dh_footer_link_divider', array(
	'label' => __('Footer Link Divider', 'divi-hacks'),
	'section' => 'dh_footer_options',
	'type' => 'option',
	'priority' => 40,
	'settings' => 'dh_footer_link_divider'
	));
	// Before Link Two
	$wp_customize->add_setting('dh_footer_links_before_link_two', array(
	'default' => 'Powered By',
	'type' => 'option',
	'capability' => 'edit_theme_options'
	));

	$wp_customize->add_control('dh_footer_links_before_link_two', array(
	'label' => __('Text Before Second Link', 'divi-hacks'),
	'section' => 'dh_footer_options',
	'type' => 'option',
	'priority' => 45,
	'settings' => 'dh_footer_links_before_link_two'
	));
	// Link Two
	$wp_customize->add_setting('dh_footer_links_link_two', array(
	'default' => 'Divi Hacks',
	'type' => 'option',
	'capability' => 'edit_theme_options'
	));

	$wp_customize->add_control('dh_footer_links_link_two', array(
	'label' => __('Second Link Text', 'divi-hacks'),
	'section' => 'dh_footer_options',
	'type' => 'option',
	'priority' => 50,
	'settings' => 'dh_footer_links_link_two'
	));
	// Link Two URL 
	$wp_customize->add_setting('dh_footer_link_two_url', array(
	'default' => 'https://divihacks.com',
	'type' => 'option',
	'capability' => 'edit_theme_options'
	));

	$wp_customize->add_control('dh_footer_link_two_url', array(
	'label' => __('Second Link URL', 'divi-hacks'),
	'section' => 'dh_footer_options',
	'type' => 'option',
	'priority' => 55,
	'settings' => 'dh_footer_link_two_url'
	));
	// Link Two Open in New Tab 
	$wp_customize->add_setting('dh_footer_link_two_open', array(
	'default' => true,
	'type'        => 'theme_mod',
	'capability'  => 'edit_theme_options',
	));
	$wp_customize->add_control('dh_footer_link_two_open', array(
	'label' => __('Open Second Link in New Tab?'),
	'section' => 'dh_footer_options',
	'type' => 'checkbox',
	'priority' => 55,
	'settings' => 'dh_footer_link_two_open'
	));
	}
	add_action('customize_register', 'dh_footer_links_editor');
	function dh_new_bottom_footer() {
		if( false != get_theme_mod( 'dh_footer_links_enabler_switch' ) ) {
			$footer_one = get_option('dh_footer_links_before_link_one','');
			$footer_two = get_option('dh_footer_links_link_one','');
			$footer_link_one = get_option('dh_footer_link_one_url','#');
			$footer_three = get_option('dh_footer_links_before_link_two','Powered By');
			$footer_four = get_option('dh_footer_links_link_two','Divi Hacks');
			$footer_link_two = get_option('dh_footer_link_two_url','https://divihacks.com');
			$footer_divider = get_option('dh_footer_link_divider','|');
			?>

			<script type="text/javascript">
			jQuery(document).ready(function(){
			jQuery("#footer-info").hide();
			jQuery('<p id="footer-info" class="dh"><span class="dh-footer-copyright">&copy; <?php echo date("Y"); ?> </span><?php echo $footer_one; ?> <a class="fl1" href="<?php echo $footer_link_one; ?>"><?php echo $footer_two; ?></a> <?php echo $footer_divider; ?> <?php echo $footer_three; ?> <a class="fl2" href="<?php echo $footer_link_two; ?>"><?php echo $footer_four; ?></a></p>').insertAfter("#footer-info");
			});
			</script>

			<?php if( false != get_theme_mod( 'dh_footer_link_one_open' ) ) { ?>
				<script type="text/javascript">
				jQuery(document).ready(function($) {
				 $('#footer-info.dh a.fl1').attr('target', '_blank');
				});
				</script>
			<?php } if( false != get_theme_mod( 'dh_footer_link_two_open' ) ) { ?>
				<script type="text/javascript">
				jQuery(document).ready(function($) {
				 $('#footer-info.dh a.fl2').attr('target', '_blank');
				 });
				 </script>
			<?php } 
		}
	}
	add_action( 'wp_head', 'dh_new_bottom_footer' );

// ------------- Footer Menu Alignment -------------//
	function dh_footer_menu_alignment() {
	$menu_alignment = get_theme_mod('dh_footer_menu_bar_alignment','left');
	?>
	<style id="dh-footer-menu-alignment">
		<?php if ( $menu_alignment == 'left' ) { ?>
		/** Footer Menu Left Alignment **/
			#main-footer #et-footer-nav ul {
				display: inline-flex;
				justify-content: flex-start;
				width: 100%;
				flex-wrap: wrap;
			}	
		<?php } if ( $menu_alignment == 'center' ) { ?>
		/** Footer Menu Center Alignment **/
			#main-footer #et-footer-nav ul {
				display: inline-flex;
				justify-content: center;
				width: 100%;
				flex-wrap: wrap;
			}	
		<?php } if ( $menu_alignment == 'right' ) { ?>
		/** Footer Menu Right Alignment **/
			#main-footer #et-footer-nav ul {
				display: inline-flex;
				justify-content: flex-end;
				width: 100%;
				flex-wrap: wrap;
			}	
		<?php } ?>
	</style>
	<?php }
	add_action( 'wp_head', 'dh_footer_menu_alignment' );

// ------------- Footer Bottom Alignment -------------//
	function dh_footer_bottom_alignment() {
	$bottom_bar_alignment = get_theme_mod('dh_footer_bottom_bar_alignment','default');
	if ( $bottom_bar_alignment == 'left' ) { ?>
		<style id="dh-bottom-bar-alignment">
		/** Bottom Footer Left Alignment **/
			#footer-bottom .container {
				display: inline-flex;
				flex-direction: row-reverse;
				justify-content: flex-end;
				flex-wrap: wrap;
			}	
		</style> <?php
	} if ( $bottom_bar_alignment == 'stacked-center' ) { ?>
		<style id="dh-bottom-bar-alignment">
		/** Bottom Footer Stacked Center Alignment **/
			#footer-bottom .container {
				display: flex;
				flex-direction:column;
				align-items:center;
				flex-wrap: wrap;
			}	
		</style> <?php
	} if ( $bottom_bar_alignment == 'inline-center' ) { ?>
		<style id="dh-bottom-bar-alignment">
		/** Bottom Footer Inline Center Alignment **/
			#footer-bottom .container {
				display: inline-flex;
				flex-direction: row-reverse;
				justify-content: center;
				flex-wrap: wrap;
			}	
		</style> <?php
	} if ( $bottom_bar_alignment == 'right' ) { ?>
		<style id="dh-bottom-bar-alignment">
		/** Bottom Footer Right Alignment **/
			#footer-bottom .container {
				flex-direction:row-reverse;
				display:flex;
				flex-wrap: wrap;
			}
		</style> <?php
	} 
	}
	add_action( 'wp_head', 'dh_footer_bottom_alignment' );

// ------------- New Mobile Menu -------------//
	function dh_new_mobile_menu() {
	$menu_style = get_theme_mod('dh_custom_mobile_menu','default-mobile-menu');	
	if ( $menu_style == 'divi-hacks-mobile-menu-slide-in' ) {  ?>
		<script type="text/javascript" id="dh-mobile-menu-slide-in">
			jQuery(document).ready(function() {
				jQuery('body').addClass('divi-hacks-mobile-menu-slide-in');
			});
		</script> <?php
	} 
	if ( $menu_style == 'divi-hacks-mobile-menu-fullscreen' ) { ?>
		<script type="text/javascript" id="dh-mobile-menu-fullscreen">
			jQuery(document).ready(function() {
				jQuery('body').addClass('divi-hacks-mobile-menu-fullscreen');
			});
		</script> <?php
	} 
	}
	add_action( 'wp_head', 'dh_new_mobile_menu' );

// ------------- Animated Menus -------------//
	function dh_animated_menus() {
	$menu_style = get_theme_mod('dh_custom_menu_animations','no-menu-animation');
	if ( $menu_style == 'divi-hacks-animenu-1' ) { ?>
		<script type="text/javascript" id="dh-animated-menu-1">
			jQuery(document).ready(function() {
				jQuery('body').addClass('divi-hacks-animenu-1');
			});
		</script> <?php
	} if ( $menu_style == 'divi-hacks-animenu-2' ) { ?>
		<script type="text/javascript" id="dh-animated-menu-2">
			jQuery(document).ready(function() {
				jQuery('body').addClass('divi-hacks-animenu-2');
			});
		</script> <?php
	} if ( $menu_style == 'divi-hacks-animenu-3' ) { ?>
		<script type="text/javascript" id="dh-animated-menu-3">
			jQuery(document).ready(function() {
				jQuery('body').addClass('divi-hacks-animenu-3');
			});
		</script> <?php
	} 
	}
	add_action( 'wp_head', 'dh_animated_menus' );

// ------------- Custom Header Styles -------------//
	function dh_custom_h_fonts() {
	$custom_heading_fonts = get_theme_mod('dh_custom_heading_fonts','false');
	if ( $custom_heading_fonts == 'true' ) { ?>
		<script type="text/javascript" id="dh-custom-heading-fonts">
			jQuery(document).ready(function() {
				jQuery('body').addClass('divi-hacks-heading-fonts');
			});
		</script> <?php
	} 
	}
	add_action( 'wp_head', 'dh_custom_h_fonts' );

// ------------- Default Menu Hover Styles -------------//
	function dh_default_menu_hover() {
	$nav_disable_menu_hover = get_theme_mod('dh_disable_default_menu_hover','false');
	if ( $nav_disable_menu_hover == 'true' ) { ?>
		<style id="dh-disable-nav-menu-hover-css">
		.et_mobile_menu li a:hover, .nav ul li a:hover, .menu ul li a:hover, #et-info-email:hover, #et-secondary-menu>ul>li>a:hover, #top-menu-nav>ul>li>a:hover, .et-social-icons a:hover {
			opacity: 1 !important;
			background-color: transparent !important;
		}
		</style> <?php
	} 
	}
	add_action( 'wp_head', 'dh_default_menu_hover' );

// ------------- Mobile Menu Background Gradient -------------//
	function dh_mobile_menu_bg_gradient() {
	$dh_mobile_menu_gradient_1		 = get_option('dh_mobile_menu_gradient_1','rgba(210, 255, 82, 1)');
	$dh_mobile_menu_gradient_2		 = get_option('dh_mobile_menu_gradient_2','rgba(145, 232, 66, 1)');
	$dh_mobile_menu_bg		 = get_option('dh_mobile_menu_bg','rgba(0,0,0,0.8)');
	$mobile_menu_bg_gradient = get_theme_mod('dh_mobile_menu_gradient_direction','left');
	if ( $mobile_menu_bg_gradient == 'left' ) { ?>
		<style id="dh-mobile-menu-gradient-css">
		.divi-hacks-mobile-menu-fullscreen.is-mobile #main-header .et_mobile_menu, 
		.divi-hacks-mobile-menu-slide-in.is-mobile .et_mobile_menu { 
			background: <?php echo $dh_mobile_menu_bg; ?>; 
			background: -moz-linear-gradient(left, <?php echo $dh_mobile_menu_gradient_1; ?> 0%, <?php echo $dh_mobile_menu_gradient_2; ?> 100%);
			background: -webkit-linear-gradient(left, <?php echo $dh_mobile_menu_gradient_1; ?> 0%,<?php echo $dh_mobile_menu_gradient_2; ?> 100%);
			background: -ms-linear-gradient(left, <?php echo $dh_mobile_menu_gradient_1; ?> 0%,<?php echo $dh_mobile_menu_gradient_2; ?> 100%);
			filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='<?php echo $dh_mobile_menu_gradient_1; ?>', endColorstr='<?php echo $dh_mobile_menu_gradient_2; ?>',GradientType=1 );
		}
		</style> <?php
	} if ( $mobile_menu_bg_gradient == 'top' ) { ?>
		<style id="dh-mobile-menu-gradient-css">
		.divi-hacks-mobile-menu-fullscreen.is-mobile #main-header .et_mobile_menu, 
		.divi-hacks-mobile-menu-slide-in.is-mobile .et_mobile_menu { 
			background: <?php echo $dh_mobile_menu_bg; ?>; 
			background: -moz-linear-gradient(top, <?php echo $dh_mobile_menu_gradient_1; ?> 0%, <?php echo $dh_mobile_menu_gradient_2; ?> 100%);
			background: -webkit-linear-gradient(top, <?php echo $dh_mobile_menu_gradient_1; ?> 0%,<?php echo $dh_mobile_menu_gradient_2; ?> 100%);
			background: -ms-linear-gradient(top, <?php echo $dh_mobile_menu_gradient_1; ?> 0%,<?php echo $dh_mobile_menu_gradient_2; ?> 100%);
			filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='<?php echo $dh_mobile_menu_gradient_1; ?>', endColorstr='<?php echo $dh_mobile_menu_gradient_2; ?>',GradientType=1 );
		}
		</style> <?php
	} if ( $mobile_menu_bg_gradient == 'topleft' ) { ?>
		<style id="dh-mobile-menu-gradient-css">
		.divi-hacks-mobile-menu-fullscreen.is-mobile #main-header .et_mobile_menu, 
		.divi-hacks-mobile-menu-slide-in.is-mobile .et_mobile_menu { 
			background: <?php echo $dh_mobile_menu_bg; ?>; 
			background: -moz-linear-gradient(top left, <?php echo $dh_mobile_menu_gradient_1; ?> 0%, <?php echo $dh_mobile_menu_gradient_2; ?> 100%);
			background: -webkit-linear-gradient(top left, <?php echo $dh_mobile_menu_gradient_1; ?> 0%,<?php echo $dh_mobile_menu_gradient_2; ?> 100%);
			background: -ms-linear-gradient(top left, <?php echo $dh_mobile_menu_gradient_1; ?> 0%,<?php echo $dh_mobile_menu_gradient_2; ?> 100%);
			filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='<?php echo $dh_mobile_menu_gradient_1; ?>', endColorstr='<?php echo $dh_mobile_menu_gradient_2; ?>',GradientType=1 );
		}
		</style> <?php
	} if ( $mobile_menu_bg_gradient == 'topright' ) { ?>
		<style id="dh-mobile-menu-gradient-css">
		.divi-hacks-mobile-menu-fullscreen.is-mobile #main-header .et_mobile_menu, 
		.divi-hacks-mobile-menu-slide-in.is-mobile .et_mobile_menu { 
			background: <?php echo $dh_mobile_menu_bg; ?>; 
			background: -moz-linear-gradient(top right, <?php echo $dh_mobile_menu_gradient_1; ?> 0%, <?php echo $dh_mobile_menu_gradient_2; ?> 100%);
			background: -webkit-linear-gradient(top right, <?php echo $dh_mobile_menu_gradient_1; ?> 0%,<?php echo $dh_mobile_menu_gradient_2; ?> 100%);
			background: -ms-linear-gradient(top right, <?php echo $dh_mobile_menu_gradient_1; ?> 0%,<?php echo $dh_mobile_menu_gradient_2; ?> 100%);
			filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='<?php echo $dh_mobile_menu_gradient_1; ?>', endColorstr='<?php echo $dh_mobile_menu_gradient_2; ?>',GradientType=1 );
		}
		</style> <?php
	} 
	}
	add_action( 'wp_head', 'dh_mobile_menu_bg_gradient' );

// ------------- Main Header Background Gradient -------------//
	function dh_main_head_bg_gradient() {
		$dh_main_header_gradient_1		 = get_option('dh_main_header_gradient_1','rgba(0,0,0,0)');
		$dh_main_header_gradient_2		 = get_option('dh_main_header_gradient_2','rgba(0,0,0,0)');
		$main_header_bg_gradient = get_theme_mod('dh_header_gradient_direction','left');
		if ( $main_header_bg_gradient == 'left' ) { ?>
			<style id="dh-main-header-background-gradient-css">
			#main-header:before { 
				background-image: -moz-linear-gradient(left, <?php echo $dh_main_header_gradient_1; ?> 0%, <?php echo $dh_main_header_gradient_2; ?> 100%) !important;
				background: -webkit-linear-gradient(left, <?php echo $dh_main_header_gradient_1; ?> 0%,<?php echo $dh_main_header_gradient_2; ?> 100%) !important;
				background: -ms-linear-gradient(left, <?php echo $dh_main_header_gradient_1; ?> 0%,<?php echo $dh_main_header_gradient_2; ?> 100%) !important;
				filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='<?php echo $dh_main_header_gradient_1; ?>', endColorstr='<?php echo $dh_main_header_gradient_2; ?>',GradientType=1 ) !important;
				position:absolute;
				top:0;
				bottom:0;
				left:0;
				width:100%;
				height:100%;
				content:'';
				z-index:1;
			}
			</style> <?php
		} if ( $main_header_bg_gradient == 'top' ) { ?>
			<style id="dh-main-header-background-gradient-css">
			#main-header:before { 
				background-image: -moz-linear-gradient(top, <?php echo $dh_main_header_gradient_1; ?> 0%, <?php echo $dh_main_header_gradient_2; ?> 100%) !important;
				background: -webkit-linear-gradient(top, <?php echo $dh_main_header_gradient_1; ?> 0%,<?php echo $dh_main_header_gradient_2; ?> 100%) !important;
				background: -ms-linear-gradient(top, <?php echo $dh_main_header_gradient_1; ?> 0%,<?php echo $dh_main_header_gradient_2; ?> 100%) !important;
				filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='<?php echo $dh_main_header_gradient_1; ?>', endColorstr='<?php echo $dh_main_header_gradient_2; ?>',GradientType=1 ) !important;
				position:absolute;
				top:0;
				bottom:0;
				left:0;
				width:100%;
				height:100%;
				content:'';
				z-index:1;
			}
			</style> <?php
		} if ( $main_header_bg_gradient == 'topleft' ) { ?>
			<style id="dh-main-header-background-gradient-css">
			#main-header:before { 
				background-image: -moz-linear-gradient(top left, <?php echo $dh_main_header_gradient_1; ?> 0%, <?php echo $dh_main_header_gradient_2; ?> 100%) !important;
				background: -webkit-linear-gradient(top left, <?php echo $dh_main_header_gradient_1; ?> 0%,<?php echo $dh_main_header_gradient_2; ?> 100%) !important;
				background: -ms-linear-gradient(top left, <?php echo $dh_main_header_gradient_1; ?> 0%,<?php echo $dh_main_header_gradient_2; ?> 100%) !important;
				filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='<?php echo $dh_main_header_gradient_1; ?>', endColorstr='<?php echo $dh_main_header_gradient_2; ?>',GradientType=1 ) !important;
				position:absolute;
				top:0;
				bottom:0;
				left:0;
				width:100%;
				height:100%;
				content:'';
				z-index:1;
			}
			</style> <?php
		} if ( $main_header_bg_gradient == 'topright' ) { ?>
			<style id="dh-main-header-background-gradient-css">
			#main-header:before { 
				background-image: -moz-linear-gradient(top right, <?php echo $dh_main_header_gradient_1; ?> 0%, <?php echo $dh_main_header_gradient_2; ?> 100%) !important;
				background: -webkit-linear-gradient(top right, <?php echo $dh_main_header_gradient_1; ?> 0%,<?php echo $dh_main_header_gradient_2; ?> 100%) !important;
				background: -ms-linear-gradient(top right, <?php echo $dh_main_header_gradient_1; ?> 0%,<?php echo $dh_main_header_gradient_2; ?> 100%) !important;
				filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='<?php echo $dh_main_header_gradient_1; ?>', endColorstr='<?php echo $dh_main_header_gradient_2; ?>',GradientType=1 ) !important;
				position:absolute;
				top:0;
				bottom:0;
				left:0;
				width:100%;
				height:100%;
				content:'';
				z-index:1;
			}
			</style> <?php
		} 
	}
	add_action( 'wp_head', 'dh_main_head_bg_gradient' );

// ------------- Secondary Header Background Gradient -------------//
	function dh_sec_head_bg_gradient() {
		$dh_secondary_header_gradient_1		 = get_option('dh_secondary_header_gradient_1','rgba(0,0,0,0)');
		$dh_secondary_header_gradient_2		 = get_option('dh_secondary_header_gradient_2','rgba(0,0,0,0)');
		$sec_header_bg_gradient = get_theme_mod('dh_secondary_header_gradient_direction','left');
		if ( $sec_header_bg_gradient == 'left' ) { ?>
			<style id="dh-sec-header-background-gradient-css">
			#top-header:before { 
				background-image: -moz-linear-gradient(left, <?php echo $dh_secondary_header_gradient_1; ?> 0%, <?php echo $dh_secondary_header_gradient_2; ?> 100%) !important;
				background: -webkit-linear-gradient(left, <?php echo $dh_secondary_header_gradient_1; ?> 0%,<?php echo $dh_secondary_header_gradient_2; ?> 100%) !important;
				background: -ms-linear-gradient(left, <?php echo $dh_secondary_header_gradient_1; ?> 0%,<?php echo $dh_secondary_header_gradient_2; ?> 100%) !important;
				filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='<?php echo $dh_secondary_header_gradient_1; ?>', endColorstr='<?php echo $dh_secondary_header_gradient_2; ?>',GradientType=1 ) !important;
				position:absolute;
				top:0;
				bottom:0;
				width:100%;
				height:100%;
				content:'';
				z-index:1;
			}
			#top-header .container {
				z-index: 2;
			}
			</style> <?php
		} if ( $sec_header_bg_gradient == 'top' ) { ?>
			<style id="dh-sec-header-background-gradient-css">
			#top-header:before { 
				background-image: -moz-linear-gradient(top, <?php echo $dh_secondary_header_gradient_1; ?> 0%, <?php echo $dh_secondary_header_gradient_2; ?> 100%) !important;
				background: -webkit-linear-gradient(top, <?php echo $dh_secondary_header_gradient_1; ?> 0%,<?php echo $dh_secondary_header_gradient_2; ?> 100%) !important;
				background: -ms-linear-gradient(top, <?php echo $dh_secondary_header_gradient_1; ?> 0%,<?php echo $dh_secondary_header_gradient_2; ?> 100%) !important;
				filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='<?php echo $dh_secondary_header_gradient_1; ?>', endColorstr='<?php echo $dh_secondary_header_gradient_2; ?>',GradientType=1 ) !important;
				position:absolute;
				top:0;
				bottom:0;
				width:100%;
				height:100%;
				content:'';
				z-index:1;
			}
			#top-header .container {
				z-index: 2;
			}
			</style> <?php
		} if ( $sec_header_bg_gradient == 'topleft' ) { ?>
			<style id="dh-sec-header-background-gradient-css">
			#top-header:before { 
				background-image: -moz-linear-gradient(top left, <?php echo $dh_secondary_header_gradient_1; ?> 0%, <?php echo $dh_secondary_header_gradient_2; ?> 100%) !important;
				background: -webkit-linear-gradient(top left, <?php echo $dh_secondary_header_gradient_1; ?> 0%,<?php echo $dh_secondary_header_gradient_2; ?> 100%) !important;
				background: -ms-linear-gradient(top left, <?php echo $dh_secondary_header_gradient_1; ?> 0%,<?php echo $dh_secondary_header_gradient_2; ?> 100%) !important;
				filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='<?php echo $dh_secondary_header_gradient_1; ?>', endColorstr='<?php echo $dh_secondary_header_gradient_2; ?>',GradientType=1 ) !important;
				position:absolute;
				top:0;
				bottom:0;
				width:100%;
				height:100%;
				content:'';
				z-index:1;
			}
			#top-header .container {
				z-index: 2;
			}
			</style> <?php
		} if ( $sec_header_bg_gradient == 'topright' ) { ?>
			<style id="dh-sec-header-background-gradient-css">
			#top-header:before { 
				background-image: -moz-linear-gradient(top right, <?php echo $dh_secondary_header_gradient_1; ?> 0%, <?php echo $dh_secondary_header_gradient_2; ?> 100%) !important;
				background: -webkit-linear-gradient(top right, <?php echo $dh_secondary_header_gradient_1; ?> 0%,<?php echo $dh_secondary_header_gradient_2; ?> 100%) !important;
				background: -ms-linear-gradient(top right, <?php echo $dh_secondary_header_gradient_1; ?> 0%,<?php echo $dh_secondary_header_gradient_2; ?> 100%) !important;
				filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='<?php echo $dh_secondary_header_gradient_1; ?>', endColorstr='<?php echo $dh_secondary_header_gradient_2; ?>',GradientType=1 ) !important;
				position:absolute;
				top:0;
				bottom:0;
				width:100%;
				height:100%;
				content:'';
				z-index:1;
			}
			#top-header .container {
				z-index: 2;
			}
			</style> <?php
		} 
	}
	add_action( 'wp_head', 'dh_sec_head_bg_gradient' );

// ------------- Footer Background Gradient -------------//
	function dh_footer_bg_gradient() {
		$dh_footer_menu_bar_gradient_1 = get_option('dh_footer_menu_bar_gradient_1','rgba(0,0,0,0)');
		$dh_footer_menu_bar_gradient_2 = get_option('dh_footer_menu_bar_gradient_2','rgba(0,0,0,0)');
		$footer_bg_gradient = get_theme_mod('dh_footer_menu_bar_gradient_direction','left');
		if ( $footer_bg_gradient == 'left' ) { ?>
			<style id="dh-footer-background-gradient-css">
			#main-footer:before { 
				background-image: -moz-linear-gradient(left, <?php echo $dh_footer_menu_bar_gradient_1; ?> 0%, <?php echo $dh_footer_menu_bar_gradient_2; ?> 100%) !important;
				background: -webkit-linear-gradient(left, <?php echo $dh_footer_menu_bar_gradient_1; ?> 0%,<?php echo $dh_footer_menu_bar_gradient_2; ?> 100%) !important;
				background: -ms-linear-gradient(left, <?php echo $dh_footer_menu_bar_gradient_1; ?> 0%,<?php echo $dh_footer_menu_bar_gradient_2; ?> 100%) !important;
				filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='<?php echo $dh_footer_menu_bar_gradient_1; ?>', endColorstr='<?php echo $dh_footer_menu_bar_gradient_2; ?>',GradientType=1 ) !important;
				position:absolute;
				top:0;
				bottom:0;
				left:0;
				width:100%;
				height:100%;
				content:'';
				z-index:1;
			}
			#main-footer {
				position:relative;
			}
			#main-footer .container {
				z-index: 2;
			}
			</style> <?php
		} if ( $footer_bg_gradient == 'top' ) { ?>
			<style id="dh-footer-background-gradient-css">
			#main-footer:before { 
				background-image: -moz-linear-gradient(top, <?php echo $dh_footer_menu_bar_gradient_1; ?> 0%, <?php echo $dh_footer_menu_bar_gradient_2; ?> 100%) !important;
				background: -webkit-linear-gradient(top, <?php echo $dh_footer_menu_bar_gradient_1; ?> 0%,<?php echo $dh_footer_menu_bar_gradient_2; ?> 100%) !important;
				background: -ms-linear-gradient(top, <?php echo $dh_footer_menu_bar_gradient_1; ?> 0%,<?php echo $dh_footer_menu_bar_gradient_2; ?> 100%) !important;
				filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='<?php echo $dh_footer_menu_bar_gradient_1; ?>', endColorstr='<?php echo $dh_footer_menu_bar_gradient_2; ?>',GradientType=1 ) !important;
				position:absolute;
				top:0;
				bottom:0;
				left:0;
				width:100%;
				height:100%;
				content:'';
				z-index:1;
			}
			#main-footer {
				position:relative;
			}
			#main-footer .container {
				z-index: 2;
			}
			</style> <?php
		} if ( $footer_bg_gradient == 'topleft' ) { ?>
			<style id="dh-footer-background-gradient-css">
			#main-footer:before { 
				background-image: -moz-linear-gradient(top left, <?php echo $dh_footer_menu_bar_gradient_1; ?> 0%, <?php echo $dh_footer_menu_bar_gradient_2; ?> 100%) !important;
				background: -webkit-linear-gradient(top left, <?php echo $dh_footer_menu_bar_gradient_1; ?> 0%,<?php echo $dh_footer_menu_bar_gradient_2; ?> 100%) !important;
				background: -ms-linear-gradient(top left, <?php echo $dh_footer_menu_bar_gradient_1; ?> 0%,<?php echo $dh_footer_menu_bar_gradient_2; ?> 100%) !important;
				filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='<?php echo $dh_footer_menu_bar_gradient_1; ?>', endColorstr='<?php echo $dh_footer_menu_bar_gradient_2; ?>',GradientType=1 ) !important;
				position:absolute;
				top:0;
				bottom:0;
				left:0;
				width:100%;
				height:100%;
				content:'';
				z-index:1;
			}
			#main-footer {
				position:relative;
			}
			#main-footer .container {
				z-index: 2;
			}
			</style> <?php
		} if ( $footer_bg_gradient == 'topright' ) { ?>
			<style id="dh-footer-background-gradient-css">
			#main-footer:before { 
				background-image: -moz-linear-gradient(top right, <?php echo $dh_footer_menu_bar_gradient_1; ?> 0%, <?php echo $dh_footer_menu_bar_gradient_2; ?> 100%) !important;
				background: -webkit-linear-gradient(top right, <?php echo $dh_footer_menu_bar_gradient_1; ?> 0%,<?php echo $dh_footer_menu_bar_gradient_2; ?> 100%) !important;
				background: -ms-linear-gradient(top right, <?php echo $dh_footer_menu_bar_gradient_1; ?> 0%,<?php echo $dh_footer_menu_bar_gradient_2; ?> 100%) !important;
				filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='<?php echo $dh_footer_menu_bar_gradient_1; ?>', endColorstr='<?php echo $dh_footer_menu_bar_gradient_2; ?>',GradientType=1 ) !important;
				position:absolute;
				top:0;
				bottom:0;
				left:0;
				width:100%;
				height:100%;
				content:'';
				z-index:1;
			}
			#main-footer {
				position:relative;
			}
			#main-footer .container {
				z-index: 2;
			}
			</style> <?php
		} 
	}
	add_action( 'wp_head', 'dh_footer_bg_gradient' );

function dh_switch_customizer_css(){ 

	$dh_footer_bg		 = get_option('dh_footer_bg',''); 
	$dh_mobile_menu_text		 = get_option('dh_mobile_menu_text','#ffffff');
	$dh_mobile_open_toggle_icon		 = get_option('dh_mobile_open_toggle_icon','#1b1d1e');
	$dh_mobile_closed_toggle_icon		 = get_option('dh_mobile_closed_toggle_icon','#1b1d1e');
	$dh_mobile_cart_icon		 = get_option('dh_mobile_cart_icon','#1b1d1e');
	$dh_mobile_menu_current		 = get_option('dh_mobile_menu_current','#247BA0');
	$dh_mobile_submenu_bg_color		 = get_option('dh_mobile_submenu_bg_color','rgba(0,0,0,0.1)');
	$dh_mobile_menu_letter_spacing	 = get_option('dh_mobile_menu_letter_spacing','2');
	$dh_mobile_menu_line_height		 = get_option('dh_mobile_menu_line_height','1em');
	$dh_mobile_menu_submenu_line_height		 = get_option('dh_mobile_menu_submenu_line_height','1em');
	$dh_header_bg		 = get_option('dh_header_bg','');
	$dh_main_header_bg_size		 = get_option('dh_main_header_bg_size','cover');
	$dh_main_header_bg_repeat		 = get_option('dh_main_header_bg_repeat','no-repeat');
	$dh_main_header_bg_position		 = get_option('dh_main_header_bg_position','center');
	$dh_nav_columns_width = get_option('dh_nav_columns_width','120px');
	$dh_nav_columns_line_height = get_option('dh_nav_columns_line_height','2em');
	$dh_nav_columns_left_padding = get_option('dh_nav_columns_left_padding','0px');
	$dh_nav_columns_right_padding = get_option('dh_nav_columns_right_padding','0px'); 
	$dh_primary_dropdown_link_color = get_option('dh_primary_dropdown_link_color', 'inherit');
	$dh_primary_dropdown_line_height = get_option('dh_primary_dropdown_line_height', '1.2em');
	$dh_primary_dropdown_width = get_option('dh_primary_dropdown_width', '240px');
	$dh_secondary_dropdown_link_color = get_option('dh_psecondary_dropdown_link_color', 'inherit');
	$dh_secondary_dropdown_line_height = get_option('dh_secondary_dropdown_line_height', '1.2em');
	$dh_secondary_dropdown_width = get_option('dh_secondary_dropdown_width', '220px');
	$dh_secondary_header_bg		 = get_option('dh_secondary_header_bg','');
	$dh_secondary_header_bg_size		 = get_option('dh_secondary_header_bg_size','cover');
	$dh_secondary_header_bg_repeat		 = get_option('dh_secondary_header_bg_repeat','no-repeat');
	$dh_secondary_header_bg_position		 = get_option('dh_secondary_header_bg_position','center');
	$dh_secondary_nav_columns_width = get_option('dh_secondary_nav_columns_width','120px');
	$dh_secondary_nav_columns_line_height = get_option('dh_secondary_nav_columns_line_height','2em');
	$dh_secondary_nav_columns_line_height = get_option('dh_secondary_nav_columns_line_height','2em');
	$dh_secondary_nav_columns_left_padding = get_option('dh_secondary_nav_columns_left_padding','0px');
	$dh_secondary_nav_columns_right_padding = get_option('dh_secondary_nav_columns_right_padding','0px'); 
	$dh_secondary_current_item_color = get_option('dh_secondary_current_item_color','inherit');
	$dh_top_icon_color		 = get_option('dh_top_icon_color','inherit');
	$dh_dropdown_icon_color		 = get_option('dh_dropdown_icon_color','inherit');
	$dh_top_header_menu_bar_icon_color	= get_option('dh_top_header_menu_bar_icon_color','inherit');
	$dh_top_header_dropdown_icon_color	= get_option('dh_top_header_dropdown_icon_color','inherit');
	$dh_nav_icon_size = get_option('dh_nav_icon_size','1em');
	$dh_secondary_nav_icon_size = get_option('dh_secondary_nav_icon_size','1em');
	$dh_h1_color	= get_option('dh_h1_color','inherit');
	$dh_h2_color	= get_option('dh_h2_color','inherit');
	$dh_h3_color	= get_option('dh_h3_color','inherit');
	$dh_h4_color	= get_option('dh_h4_color','inherit');
	$dh_h5_color	= get_option('dh_h5_color','inherit');
	$dh_h6_color	= get_option('dh_h6_color','inherit');
	$dh_menu_animation_accent_color	= get_option('dh_menu_animation_accent_color','inherit');
	$dh_footer_menu_bar_bg		 = get_option('dh_footer_menu_bar_bg','');
	$dh_footer_menu_bar_bg_size		 = get_option('dh_footer_menu_bar_bg_size','cover');
	$dh_footer_menu_bar_bg_repeat		 = get_option('dh_footer_menu_bar_bg_repeat','no-repeat');
	$dh_footer_menu_bar_bg_position		 = get_option('dh_footer_menu_bar_bg_position','center');
	$dh_footer_menu_bar_nav_icon_size = get_option('dh_footer_menu_bar_nav_icon_size','1em');
	$dh_footer_menu_bar_icon_color	= get_option('dh_footer_menu_bar_icon_color','inherit');
	$dh_footer_menu_bar_current_item_color = get_option('dh_footer_menu_bar_current_item_color','inherit');
	$dh_sticky_element_offset_desktop	= get_option('dh_sticky_element_offset_desktop','50');
	$dh_sticky_row_offset_desktop	= get_option('dh_sticky_row_offset_desktop','50');
	$dh_sticky_section_offset_desktop	= get_option('dh_sticky_section_offset_desktop','50');
	$dh_sticky_column_offset_desktop	= get_option('dh_sticky_column_offset_desktop','50');
	$dh_sticky_element_offset_mobile	= get_option('dh_sticky_element_offset_mobile','50');
	$dh_sticky_row_offset_mobile	= get_option('dh_sticky_row_offset_mobile','50');
	$dh_sticky_section_offset_mobile	= get_option('dh_sticky_section_offset_mobile','50');
	$dh_sticky_column_offset_mobile	= get_option('dh_sticky_column_offset_mobile','50');
	?>
<script src="<?php print DIVI_HACKS_PLUGIN_URL ?>scripts/jquery.cookie-1.4.0.min.js"></script>
<script type="text/javascript" id="dh_lightbox_reveal_tooltip">
	jQuery(document).ready(function($) {

		$('div:not(.et_mobile_menu) .lightbox-content, div:not(.et_mobile_menu) [class*="lightbox-content-"], .exit-popup, .scroll-popup').addClass('mfp-hide');
		
		$('div:not(.et_mobile_menu) .lightbox-trigger').magnificPopup({ items: { src: 'div:not(.et_mobile_menu) .lightbox-content' }, type: 'inline', removalDelay: 500, mainClass: 'mfp-fade mfp-fade-side', });
		
		$('div:not(.et_mobile_menu) [class*="lightbox-trigger-"]').each(function(){
		  var triggerClass = Array.prototype.find.call(this.classList, function(clazz){
		    return clazz.indexOf('lightbox-trigger-') > -1;
		  });
		  var suffix = triggerClass.split('lightbox-trigger-')[1];
		  var content = '.lightbox-content-'+ suffix;
		  
		  $(this).magnificPopup({ items: { src: content }, type: 'inline', removalDelay: 500, mainClass: 'mfp-fade mfp-fade-side', });
		});
		$(this).click(function() { 
			$('.mfp-wrap').attr('id', 'et-boc');
			$('.mfp-container').addClass('et-l');
		});
		$('[class*="lightbox-content"], .exit-popup, .scroll-popup').prepend('<div class="lightbox-overlay"></div>');
		$('.lightbox-overlay, .mfp-close, .close-lightbox').click(function() { 
			$("[class*='lightbox-content'].et_pb_video.autoplay iframe").each(function(){
	        	var removeautoplay = $(this).attr("src").replace("&autoplay=1", "");
				$(this).attr("src",removeautoplay);
	        });
			
			$.magnificPopup.close();
			$("#et-main-area .exit-popup").removeClass('exit-popup');
		});
		
		$("[class*='tooltip-content-']").wrap("<div class='tooltip_templates'></div>");
		var ww = $(window).width();
		if (ww <= 980) {
	      	$("[class*='tooltip-trigger-']").addClass("click");
	    }
		$("[class*='tooltip-trigger-']").each(function(){
			var triggerClass = Array.prototype.find.call(this.classList,
		    	function(clazz){
					return clazz.indexOf('tooltip-trigger-') > -1;
				});
			var suffix = triggerClass.split('tooltip-trigger-')[1];
			var content = '.tooltip-content-'+ suffix;
			$(this).attr("data-tooltip-content", content);
			$(this).not(".click").tooltipster({
			   delay: 100,
			   theme: 'tooltipster-shadow',
			   interactive: 'true',
			   trigger: 'hover'
			});
			if ( $(this).is(".click") ) {
				$(this).tooltipster({
					delay: 100,
					theme: 'tooltipster-shadow',
					interactive: 'true',
					trigger: 'click'
				});
			};
		});
			
    
		$('[class*="reveal-content-"]:not(.opened), [class*="reveal-only-content-"]:not(.opened)').hide();
		$('[class*="reveal-trigger-"]:not(.scroll)').each(function(){
			var triggerreveal = Array.prototype.find.call(this.classList, function(clazz){
		    	return clazz.indexOf('reveal-trigger-') > -1;
			});
			var suffix = triggerreveal.split('reveal-trigger-')[1];
			var content = '.reveal-content-'+ suffix;
			$(this).click(function(e){
				e.preventDefault();
				$(content).slideToggle();
				$(this).toggleClass('opened');
			});
		});
		$('[class*="reveal-trigger-"].scroll').each(function(){
			var triggerreveal = Array.prototype.find.call(this.classList, function(clazz){
		    	return clazz.indexOf('reveal-trigger-') > -1;
			});
			var suffix = triggerreveal.split('reveal-trigger-')[1];
			var content = '.reveal-content-'+ suffix;
			let mh = $('body.et_fixed_nav #main-header').height() || 0
			, th = $('body.et_fixed_nav #top-header').height() || 0
			, ab = $('body:not(.divi-hacks-autohide-admin-bar) #wpadminbar').height() || 0
			, fwssticky = $('.sticky-element[class*="et_pb_fullwidth"][style*="position: fixed"]').height() || 0;
			
			var topoffset = mh + th + ab + fwssticky;
			$(this).off();
			$(this).click(function(e){
				$(content).slideToggle();
				$(this).toggleClass('opened');
				$([document.documentElement, document.body]).animate({
			        scrollTop: $(content).offset().top -topoffset - 50
			    }, 500);
				e.preventDefault();
				e.stopPropagation();
			});
		});
		$('[class*="reveal-only-trigger-"]').each(function(){
			let pThis = $(this);
			var triggerreveal = Array.prototype.find.call(this.classList, function(clazz){
		    	return clazz.indexOf('reveal-only-trigger-') > -1;
			});
			var suffix = triggerreveal.split('reveal-only-trigger-')[1];
			var content = '.reveal-only-content-'+ suffix;
			pThis.attr('href', '#');
			pThis.click(function(e) {
				
				e.preventDefault();
				
				let pThisROT = $(this)
				, openedRevealContent = $('[class*="reveal-only-content-"]:visible, [class*="reveal-content-"]:visible')
				, allowScrollTo = false;
				
				if ( openedRevealContent.length > 0 ) {
					
					openedRevealContent.not(content).slideUp(400, function(){
						
						revealOnlyScrollTo( pThisROT, content );
					});
					
				}
				
				$(content).slideToggle();
				
				pThisROT.toggleClass('opened');
				
				$('[class*="reveal-only-trigger-"]').not(this).removeClass('opened');
				
				if ( openedRevealContent.length === 0 ) {
					
					revealOnlyScrollTo( pThisROT, content );
				}
			});
		});
		
		
		// Hash trigger
		$( window ).on("load", function (e) {
			
			revealContentHashTrigger( 1000 );
		});
		
		window.addEventListener('hashchange', function() {
			
			revealContentHashTrigger( 0 );
		});
		
		function revealContentHashTrigger( delay ) {
			
			if ( window.location.hash ) {
				
				let hash = window.location.hash.substring( 1 ); 
				
				if ( hash.length > 20 ) {
					
					let link_trigger = '.' + hash
					, suffix = hash.split('reveal-only-trigger-')[1]
					, content = '.reveal-only-content-' + suffix;
					
					setTimeout( function() {
						
						let pThisROT = $( link_trigger )
						, openedRevealContent = $('[class*="reveal-only-content-"]:visible, [class*="reveal-content-"]:visible');
						
						if ( openedRevealContent.length === 0 ) {
							
							return;
						}
						
						if ( pThisROT.hasClass('opened') ) {
							
							return;
						}
						
						if ( openedRevealContent.length > 0 ) {
							
							openedRevealContent.not(content).slideUp(400, function(){
								
								revealOnlyScrollTo( pThisROT, content );
							});
							
						}
						
						$( content ).slideToggle();
						
						pThisROT.toggleClass('opened');
						
						$('[class*="reveal-only-trigger-"]').not( pThisROT ).removeClass('opened');
						
						if ( openedRevealContent.length === 0 ) {
							
							revealOnlyScrollTo( pThisROT, content );
						}
						
					}, delay );
				}
			}
		}
		
		
		function revealOnlyScrollTo( pThisROT, content ) {
			
			if ( pThisROT.hasClass('opened') 
				&& pThisROT.hasClass('scroll') === true ) {
			
				let mh = 0
				, th = 0
				, tbh = 0
				, ab = 0
				, fwssticky = 0;
				
				let mh_selector = $('body.et_fixed_nav #main-header');
				if ( mh_selector.length !== 0 ) { mh = mh_selector.height(); }
				
				let th_selector = $('body.et_fixed_nav #top-header');
				if ( th_selector.length !== 0 ) { th = th_selector.height(); }
				
				let tbh_selector = $('header.et-l--header');
				if ( tbh_selector.length !== 0 ) { tbh = tbh_selector.height(); }
				
				let ab_selector = $('body:not(.divi-hacks-autohide-admin-bar) #wpadminbar');
				if ( ab_selector.length !== 0 ) { ab = ab_selector.height(); }
				
				let fwssticky_selector = $('.sticky-element[class*="et_pb_fullwidth"][style*="position: fixed"]');
				if ( fwssticky_selector.length !== 0 ) { fwssticky = fwssticky_selector.height(); }
				
				let topoffset = mh + th + ab + tbh + fwssticky;
				
				$([document.documentElement, document.body]).animate({
					scrollTop: $(content).offset().top -topoffset - 50
				}, 500);
			}
		}
});
</script>
<script type="text/javascript" id="dh-responsive-classes">
	jQuery(document).ready(function($) {
		var alterClass = function() {
	      var ww = $(window).width();
	      if (ww < 981) {
	        $('body:not(.et-fb)').removeClass('is-desktop');
	      } else if (ww >= 981) {
	        $('body:not(.et-fb)').addClass('is-desktop');
	      }
	      if ((ww < 768) || (ww > 980)) {
	        $('body:not(.et-fb)').removeClass('is-tablet');
	      } else if ((ww >= 768) || (ww <= 980)) {
	        $('body:not(.et-fb)').addClass('is-tablet');
	      }
	      if (ww > 767) {
	        $('body:not(.et-fb)').removeClass('is-phone');
	      } else if (ww <= 767) {
	        $('body:not(.et-fb)').addClass('is-phone');
	      }
	      if (ww > 980) {
	        $('body:not(.et-fb)').removeClass('is-mobile');
	      } else if (ww <= 980) {
	        $('body:not(.et-fb)').addClass('is-mobile');
	      }
	    };
	    $(window).resize(function(){
	      alterClass();
	    });
	    //Fire it when the page first loads:
	    alterClass();
	});
</script>
<script type="text/javascript" id="dh-sticky-elements">
	jQuery(document).ready(function($) {
		function myFunction(stickydesktop) {
			if (stickydesktop.matches) { // If media query matches
				$(".divi-hacks-sticky.is-desktop .sticky-section.disable-desktop").removeClass("sticky-section");
				$(".divi-hacks-sticky.is-desktop .sticky-row.disable-desktop").removeClass("sticky-row");
				$(".divi-hacks-sticky.is-desktop .sticky-column.disable-desktop").removeClass("sticky-column");
				$(".divi-hacks-sticky.is-desktop .sticky-module.disable-desktop").removeClass("sticky-module");  
				$(".divi-hacks-sticky:not(.admin-bar) .sticky-module, .divi-hacks-sticky.admin-bar.divi-hacks-autohide-admin-bar .sticky-module").stick_in_parent({parent:'.et_pb_row', offset_top:<?php echo $dh_sticky_element_offset_desktop; ?>});
				$(".divi-hacks-sticky.admin-bar:not(.divi-hacks-autohide-admin-bar) .sticky-module").stick_in_parent({parent:'.et_pb_row', offset_top:<?php echo $dh_sticky_element_offset_desktop; ?> + 32});
				$(".divi-hacks-sticky .sticky-row").parent(".et_pb_section").addClass("has-sticky-row");
				$(".divi-hacks-sticky:not(.admin-bar) .sticky-row, .divi-hacks-sticky.admin-bar.divi-hacks-autohide-admin-bar .sticky-row").stick_in_parent({offset_top:<?php echo $dh_sticky_row_offset_desktop; ?>});
				$(".divi-hacks-sticky.admin-bar:not(.divi-hacks-autohide-admin-bar) .sticky-row").stick_in_parent({offset_top:<?php echo $dh_sticky_row_offset_desktop; ?> + 32});
				$(".divi-hacks-sticky:not(.admin-bar) .sticky-section, .divi-hacks-sticky.admin-bar.divi-hacks-autohide-admin-bar .sticky-section").stick_in_parent({offset_top:<?php echo $dh_sticky_section_offset_desktop; ?>});
				$(".divi-hacks-sticky.admin-bar:not(.divi-hacks-autohide-admin-bar) .sticky-section").stick_in_parent({offset_top:<?php echo $dh_sticky_section_offset_desktop; ?> + 32});
				$(".divi-hacks-sticky .sticky-column").wrapInner("<div class='sticky-column-wrapper'></div>");
				$(".divi-hacks-sticky:not(.admin-bar) .sticky-column .sticky-column-wrapper, .divi-hacks-sticky.admin-bar.divi-hacks-autohide-admin-bar .sticky-column .sticky-column-wrapper").stick_in_parent({parent:'.et_pb_row',offset_top:<?php echo $dh_sticky_column_offset_desktop; ?>});
				$(".divi-hacks-sticky.admin-bar:not(.divi-hacks-autohide-admin-bar) .sticky-column .sticky-column-wrapper").stick_in_parent({parent:'.et_pb_row',offset_top:<?php echo $dh_sticky_column_offset_desktop; ?> + 32});
			} else {
				$(".divi-hacks-sticky.is-tablet .sticky-section.disable-tablet").removeClass("sticky-section");
		        $(".divi-hacks-sticky.is-phone .sticky-section.disable-phone").removeClass("sticky-section");
		        $(".divi-hacks-sticky.is-mobile .sticky-section.disable-mobile").removeClass("sticky-section");
		        $(".divi-hacks-sticky.is-tablet .sticky-row.disable-tablet").removeClass("sticky-row");
		        $(".divi-hacks-sticky.is-phone .sticky-row.disable-phone").removeClass("sticky-row");
		        $(".divi-hacks-sticky.is-mobile .sticky-row.disable-mobile").removeClass("sticky-row");
		        $(".divi-hacks-sticky.is-tablet .sticky-column.disable-tablet").removeClass("sticky-column");
		        $(".divi-hacks-sticky.is-phone .sticky-column.disable-phone").removeClass("sticky-column");
		        $(".divi-hacks-sticky.is-mobile .sticky-column.disable-mobile").removeClass("sticky-column");
		        $(".divi-hacks-sticky.is-tablet .sticky-module.disable-tablet").removeClass("sticky-module");
		        $(".divi-hacks-sticky.is-phone .sticky-module.disable-phone").removeClass("sticky-module");
		        $(".divi-hacks-sticky.is-mobile .sticky-module.disable-mobile").removeClass("sticky-module");
		        $(".divi-hacks-sticky .sticky-row").parent(".et_pb_section").addClass("has-sticky-row");
				$(".divi-hacks-sticky .sticky-column").parent(".et_pb_row").addClass("has-sticky-column");
				$(".divi-hacks-sticky:not(.admin-bar) .sticky-module").stick_in_parent({parent:'.et_pb_row', offset_top:<?php echo $dh_sticky_element_offset_mobile; ?>});
				$(".divi-hacks-sticky.admin-bar .sticky-module").stick_in_parent({parent:'.et_pb_row', offset_top:<?php echo $dh_sticky_element_offset_mobile; ?> + 32});
				$(".divi-hacks-sticky:not(.admin-bar) .sticky-row").stick_in_parent({offset_top:<?php echo $dh_sticky_row_offset_mobile; ?>});
				$(".divi-hacks-sticky.admin-bar .sticky-row").stick_in_parent({offset_top:<?php echo $dh_sticky_row_offset_mobile; ?> + 32});
				$(".divi-hacks-sticky:not(.admin-bar) .sticky-section").stick_in_parent({offset_top:<?php echo $dh_sticky_section_offset_mobile; ?>});
				$(".divi-hacks-sticky.admin-bar .sticky-section").stick_in_parent({offset_top:<?php echo $dh_sticky_section_offset_mobile; ?>});
				$(".divi-hacks-sticky .sticky-column").wrapInner("<div class='sticky-column-wrapper'></div>");
				$(".divi-hacks-sticky:not(.admin-bar) .sticky-column .sticky-column-wrapper").stick_in_parent({parent:'.et_pb_row',offset_top:<?php echo $dh_sticky_column_offset_mobile; ?>});
				$(".divi-hacks-sticky.admin-bar .sticky-column .sticky-column-wrapper").stick_in_parent({parent:'.et_pb_row',offset_top:<?php echo $dh_sticky_column_offset_mobile; ?> + 32});
				$(".divi-hacks-sticky .sticky-module").closest(".et_pb_row").css("flex-direction", "column");
		        $('.divi-hacks-sticky .sticky-module, .divi-hacks-sticky .sticky-row').css('z-index', '100');
			    $('.divi-hacks-sticky .sticky-section').css('z-index', '101');
			    $('.divi-hacks-sticky .sticky-module, .divi-hacks-sticky .sticky-column').closest('.et_pb_row').css('display', 'flex');
			}
		}
		var stickydesktop = window.matchMedia("(min-width: 981px)")
		myFunction(stickydesktop) // Call listener function at run time
		stickydesktop.addListener(myFunction) // Attach listener function on state changes
	});
</script>
<style id="divi-hack">
/** @import Custom Fonts - Keep at top of this style **/
<?php echo get_theme_mod( 'dh_import_fonts'); ?>
div#closebutton:before {
    content: '\4d';
    position: relative;
    right: 0;
    top: 0;
    color: var(--close-button-color, #fff);
    width: var(--close-button-width, 50px);
    height: var(--close-button-height, 50px);
    z-index: 2;
    font-size: var(--close-button-size, 30px);
    font-family: 'etmodules';
    text-align: center;
    line-height: var(--close-button-height, 50px);
}
div#closebutton {
    position: absolute;
    right: 0;
    width: var(--close-button-width, 50px);
    height: var(--close-button-height, 50px);
    display: flex;
    flex-direction: row;
    align-items: center;
    justify-content: center;
    top: 0;
    text-shadow: 0px 0px 5px rgba(0,0,0,0.5);
    text-shadow: var(--close-button-shadow, 0px 0px 5px rgba(0,0,0,0.5));
    cursor:pointer;
}
#divi-hacks-exit-popup [class*="lightbox-content"].mfp-hide {
    display:block !important;
}
#divi-hacks-exit-popup .lightbox-overlay { display:none; }
#divi-hacks-scroll-popup [class*="lightbox-content"].mfp-hide {
    display:block !important;
}
#divi-hacks-scroll-popup .lightbox-overlay { display:none; }
[id^="divi-hacks-"] > div#page-container {
    padding-top: 0px !important;
}
/** Body Overall Font Weight **/
	body {
		font-weight: <?php echo get_theme_mod("dh_body_font_weight"); ?>
}
/** Menu Animation Accent Color **/
	.divi-hacks-animenu-1 #top-menu > li:before,
	.divi-hacks-animenu-2 #top-menu li.current_page_item > a, 
	.divi-hacks-animenu-2 .et-fixed-header #top-menu li.current_page_item > a,
	.divi-hacks-animenu-3 #top-menu > li.page_item::before {
	    border-color: <?php echo $dh_menu_animation_accent_color; ?>;
	}
	.divi-hacks-animenu-2 #top-menu li:not(.menu-item-has-children):not(.current_page_item):hover a {
		box-shadow:0px 5px 0px 0px <?php echo $dh_menu_animation_accent_color; ?>;
	}
/** Main Header Menu Bar Link Hover Styles **/
	.is-desktop #main-header #top-menu > li > a:hover {
	<?php echo get_theme_mod( 'dh_mh_hover_styles'); ?>
	}
/** Main Header Dropdown Link Hover Styles **/
	.is-desktop #main-header #top-menu > li:not(.module-in-menu) > ul > li a:hover {
	<?php echo get_theme_mod( 'dh_mh_dropdown_hover_styles'); ?>
	}
/** Top Header Menu Bar Link Hover Styles **/
	.is-desktop #top-header #et-secondary-nav > li > a:hover {
	<?php echo get_theme_mod( 'dh_sh_hover_styles'); ?>
	}
/** Top Header Dropdown Link Hover Styles **/
	.is-desktop #top-header #et-secondary-nav > li:not(.module-in-menu) > ul > li a:hover {
	<?php echo get_theme_mod( 'dh_sh_dropdown_hover_styles'); ?>
	}
/** Custom Heading Font Family **/
	.divi-hacks-heading-fonts h1, .divi-hacks-heading-fonts h1 a {
	    color: <?php echo $dh_h1_color; ?>;
	    <?php echo get_theme_mod( 'dh_custom_h1'); ?>  
	}
	.divi-hacks-heading-fonts h2, .divi-hacks-heading-fonts h2 a {
	    color: <?php echo $dh_h2_color; ?>;
	    <?php echo get_theme_mod( 'dh_custom_h2'); ?>
	}
	.divi-hacks-heading-fonts div:not(.et-fb-form__toggle-title):not(.et-fb-module-settings):not(.et-fb-export-file-name-field):not(.et-fb-upload-file-container):not(.et-fb-import-options-field):not(.et-core-modal-header):not(.et_pb_gallery_title) > h3, .divi-hacks-heading-fonts h3 a {
	    color: <?php echo $dh_h3_color; ?>;
	    <?php echo get_theme_mod( 'dh_custom_h3'); ?>
	}
	.divi-hacks-heading-fonts h4, .divi-hacks-heading-fonts h4 a {
	    color: <?php echo $dh_h4_color; ?>;
	    <?php echo get_theme_mod( 'dh_custom_h4'); ?>
	}
	.divi-hacks-heading-fonts h5, .divi-hacks-heading-fonts h5 a {
	    color: <?php echo $dh_h5_color; ?>;
	    <?php echo get_theme_mod( 'dh_custom_h5'); ?>
	}
	.divi-hacks-heading-fonts h6, .divi-hacks-heading-fonts h6 a {
	    color: <?php echo $dh_h6_color; ?>;
	    <?php echo get_theme_mod( 'dh_custom_h6'); ?>
	}
/** Logo Styles **/
	#logo {
	<?php echo get_theme_mod( 'dh_logo_styles'); ?>
	}
/** Primary Nav Font Awesome Icon Size **/
	.divi-hacks-font-awesome-icons #main-header .fab > a:before,
	.divi-hacks-font-awesome-icons #main-header .far > a:before,
	.divi-hacks-font-awesome-icons #main-header .fas > a:before,
	.divi-hacks-font-awesome-icons #main-header .fal > a:before,
	.divi-hacks-font-awesome-icons #main-header .fa > a:before {
		font-size: <?php echo $dh_nav_icon_size; ?>
	}
/** Secondary Nav Font Awesome Icon Size **/
	.divi-hacks-font-awesome-icons #et-secondary-nav .fab > a:before,
	.divi-hacks-font-awesome-icons #et-secondary-nav .far > a:before,
	.divi-hacks-font-awesome-icons #et-secondary-nav .fas > a:before,
	.divi-hacks-font-awesome-icons #et-secondary-nav .fal > a:before,
	.divi-hacks-font-awesome-icons #et-secondary-nav .fa > a:before {
		font-size: <?php echo $dh_secondary_nav_icon_size; ?>
	}
/** Nav Font Awesome Icon colors **/
	.divi-hacks-font-awesome-icons #et-secondary-nav .fa > a:before, 
	.divi-hacks-font-awesome-icons #et-secondary-nav .fas > a:before, 
	.divi-hacks-font-awesome-icons #et-secondary-nav .far > a:before, 
	.divi-hacks-font-awesome-icons #et-secondary-nav .fab > a:before, 
	.divi-hacks-font-awesome-icons #et-secondary-nav .fal > a:before,
	.divi-hacks-font-awesome-icons #main-header .fa > a:before, 
	.divi-hacks-font-awesome-icons #main-header .fas > a:before, 
	.divi-hacks-font-awesome-icons #main-header .far > a:before, 
	.divi-hacks-font-awesome-icons #main-header .fab > a:before, 
	.divi-hacks-font-awesome-icons #main-header .fal > a:before {
	    color: <?php echo $dh_top_icon_color; ?>;
	}
	.divi-hacks-font-awesome-icons #et-secondary-nav .sub-menu .fa > a:before, 
	.divi-hacks-font-awesome-icons #et-secondary-nav .sub-menu .fas > a:before, 
	.divi-hacks-font-awesome-icons #et-secondary-nav .sub-menu .far > a:before, 
	.divi-hacks-font-awesome-icons #et-secondary-nav .sub-menu .fab > a:before, 
	.divi-hacks-font-awesome-icons #et-secondary-nav .sub-menu .fal > a:before,
	.divi-hacks-font-awesome-icons #main-header .sub-menu .fa > a:before, 
	.divi-hacks-font-awesome-icons #main-header .sub-menu .fas > a:before, 
	.divi-hacks-font-awesome-icons #main-header .sub-menu .far > a:before, 
	.divi-hacks-font-awesome-icons #main-header .sub-menu .fab > a:before, 
	.divi-hacks-font-awesome-icons #main-header .sub-menu .fal > a:before {
	    color: <?php echo $dh_dropdown_icon_color; ?>;
	    align-self: center;
	}
	.divi-hacks-font-awesome-icons #et-secondary-nav .fa > a:before, 
	.divi-hacks-font-awesome-icons #et-secondary-nav .fas > a:before, 
	.divi-hacks-font-awesome-icons #et-secondary-nav .far > a:before, 
	.divi-hacks-font-awesome-icons #et-secondary-nav .fab > a:before, 
	.divi-hacks-font-awesome-icons #et-secondary-nav .fal > a:before {
	    color: <?php echo $dh_top_header_menu_bar_icon_color; ?>;
	}
	.divi-hacks-font-awesome-icons #et-secondary-nav .sub-menu .fa > a:before, 
	.divi-hacks-font-awesome-icons #et-secondary-nav .sub-menu .fas > a:before, 
	.divi-hacks-font-awesome-icons #et-secondary-nav .sub-menu .far > a:before, 
	.divi-hacks-font-awesome-icons #et-secondary-nav .sub-menu .fab > a:before, 
	.divi-hacks-font-awesome-icons #et-secondary-nav .sub-menu .fal > a:before {
	    color: <?php echo $dh_top_header_dropdown_icon_color; ?>;
	}
	
/** Primary Nav Dropdown Column Left & Right Padding **/
	.is-desktop.divi-hacks-nav-columns #top-menu > li.nav-columns:not(.module-in-menu) > ul > li {
		padding-left: <?php echo $dh_nav_columns_left_padding; ?> !important;
		padding-right: <?php echo $dh_nav_columns_right_padding; ?> !important;
	}
/** Secondary Nav Dropdown Column Left & Right Padding **/
	.is-desktop.divi-hacks-nav-columns #et-secondary-nav > li.nav-columns:not(.module-in-menu) > ul > li {
		padding-left: <?php echo $dh_secondary_nav_columns_left_padding; ?> !important;
		padding-right: <?php echo $dh_secondary_nav_columns_right_padding; ?> !important;
	}
/** Primary Dropdown Child Elements Line Height **/
	.divi-hacks-nav-columns.is-desktop li.nav-columns:not(.module-in-menu) ul li a, 
	.divi-hacks-nav-columns.is-desktop #main-header .nav li ul li a {
	    line-height: <?php echo $dh_nav_columns_line_height; ?>;
	}
/** Secondary Nav Dropdown Child Elements Line Height **/
	.divi-hacks-nav-columns.is-desktop #et-secondary-nav.menu li:not(.module-in-menu) ul li a {
	    line-height: <?php echo $dh_secondary_nav_columns_line_height; ?>;
	}
/** Primary Nav Dropdown Text Align **/
	.is-desktop li.nav-columns:not(.module-in-menu) ul li a, 
	.is-desktop #main-header .nav li:not(.module-in-menu) ul li a {
		justify-content: <?php echo get_theme_mod("dh_nav_columns_text_align"); ?>;
	}
/** Secondary Nav Dropdown Text Align **/
	.is-desktop #et-secondary-nav.menu li:not(.module-in-menu) ul li a {
		display: -webkit-box;
		display: -moz-box;
		display: -ms-flexbox;
		display: -webkit-flex;
		display: flex;
		justify-content: <?php echo get_theme_mod("dh_secondary_nav_columns_text_align"); ?>;
	}
/** Secondary Nav Current Page Item Text Color **/
	#et-secondary-nav li.current_page_item > a, 
	#et-secondary-nav li.current-menu-item > a:before {
	    color: <?php echo $dh_secondary_current_item_color; ?> !important;
	}
/** Main Header Nav Dropdown Parent Styles **/
	.divi-hacks-nav-columns.is-desktop #main-header li.nav-columns:not(.module-in-menu) > ul > li > a {
	<?php echo get_theme_mod( 'dh_mh_dropdown_parent_styles'); ?>
	}
/** Top Header Nav Dropdown Parent Styles **/
	.divi-hacks-nav-columns.is-desktop #et-secondary-nav li.nav-columns:not(.module-in-menu) > ul > li > a {
	<?php echo get_theme_mod( 'dh_th_dropdown_parent_styles'); ?>
	}
/** Main Header Current Item Styles **/
	#main-header li.current_page_item > a {
	<?php echo get_theme_mod( 'dh_mh_current_page_styles'); ?>
	}
/** Top Header Current Item Styles **/
	#et-secondary-nav li.current_page_item > a {
	<?php echo get_theme_mod( 'dh_th_current_page_styles'); ?>
	}

/** Primary Dropdown Width **/
	.is-desktop #top-menu li:not(.module-in-menu):not(.nav-columns):not(.mega-menu) ul.sub-menu {
		width:auto;
		max-width: <?php echo $dh_primary_dropdown_width; ?>;
	}
	.is-desktop #top-menu li:not(.module-in-menu):not(.nav-columns):not(.mega-menu) ul.sub-menu a {
		width: calc(<?php echo $dh_primary_dropdown_width; ?> - 40px);
	}
/** Primary Dropdown Link Color **/
	.is-desktop #top-menu li:not(.module-in-menu):not(.nav-columns) ul.sub-menu a:not(:hover) {
		color: <?php echo $dh_primary_dropdown_link_color; ?> !important;
	}
/** Primary Dropdown Line Height **/
	.is-desktop #top-menu li:not(.module-in-menu):not(.nav-columns) ul.sub-menu a {
		line-height: <?php echo $dh_primary_dropdown_line_height; ?> !important;
	}
/** Secondary Dropdown Width **/
	.is-desktop #et-secondary-nav li:not(.module-in-menu):not(.nav-columns):not(.mega-menu) ul.sub-menu {
		width: <?php echo $dh_secondary_dropdown_width; ?>;
	}
	.is-desktop #et-secondary-nav li:not(.module-in-menu):not(.nav-columns):not(.mega-menu) ul.sub-menu a {
		width: calc(<?php echo $dh_secondary_dropdown_width; ?> - 2em);
		margin-left: -1em;
	}
/** Secondary Dropdown Link Color **/
	.is-desktop #et-secondary-nav li:not(.module-in-menu):not(.nav-columns) ul.sub-menu a:not(:hover) {
		color: <?php echo $dh_secondary_dropdown_link_color; ?> !important;
	}
/** Secondary Dropdown Line Height **/
	.is-desktop #et-secondary-nav li:not(.module-in-menu):not(.nav-columns) ul.sub-menu a {
		line-height: <?php echo $dh_secondary_dropdown_line_height; ?> !important;
	}

/** Primary Nav Columns Width **/
	.divi-hacks-nav-columns.is-desktop #main-header li.nav-columns:not(.module-in-menu) ul li a {
		width: <?php echo $dh_nav_columns_width; ?> !important;
	}
/** Secondary Nav Columns Width **/
	.divi-hacks-nav-columns.is-desktop #et-secondary-nav li.nav-columns:not(.module-in-menu) ul li a {
		width: <?php echo $dh_secondary_nav_columns_width; ?> !important;
	}
/** MOBILE MENU **/
	.divi-hacks-mobile-menu-fullscreen.is-mobile #main-header .et-cart-info span:before,
	.divi-hacks-mobile-menu-slide-in.is-mobile #main-header .et-cart-info span:before {
		color: <?php echo $dh_mobile_cart_icon; ?>;
	}
	
	.divi-hacks-mobile-menu-slide-in.is-mobile #main-header .et_mobile_menu li a, 
	.divi-hacks-mobile-menu-fullscreen.is-mobile #main-header .et_mobile_menu li a {
		color: <?php echo $dh_mobile_menu_text; ?>;
	}
	
	.divi-hacks-mobile-menu-slide-in.is-mobile #main-header .mobile_nav.opened .mobile_menu_bar_toggle::before,
	.divi-hacks-mobile-menu-fullscreen.is-mobile #main-header .mobile_nav.opened .mobile_menu_bar_toggle::before {
		color: <?php echo $dh_mobile_open_toggle_icon; ?>;
	}
	
	.divi-hacks-mobile-menu-slide-in.is-mobile #main-header .mobile_nav.closed .mobile_menu_bar_toggle::before,
	.divi-hacks-mobile-menu-fullscreen.is-mobile #main-header .mobile_nav.closed .mobile_menu_bar_toggle::before {
		color: <?php echo $dh_mobile_closed_toggle_icon; ?>;
	}
	
	.divi-hacks-mobile-menu-fullscreen.is-mobile #main-header .et_mobile_menu .current_page_item > a, 
	.divi-hacks-mobile-menu-slide-in.is-mobile #main-header .et_mobile_menu .current_page_item > a {
		color: <?php echo $dh_mobile_menu_current; ?>;
	}
	
	.divi-hacks-mobile-menu-fullscreen.is-mobile #main-header .et_mobile_menu > li > ul.sub-menu, 
	.divi-hacks-mobile-menu-slide-in.is-mobile #main-header .et_mobile_menu > li > ul.sub-menu li.menu-item a {
	    background-color: <?php echo $dh_mobile_submenu_bg_color; ?>;
	}
	
	.divi-hacks-mobile-menu-fullscreen.is-mobile #main-header .et_mobile_menu li a, 
	.divi-hacks-mobile-menu-slide-in.is-mobile #main-header .et_mobile_menu li a {
		letter-spacing: <?php echo $dh_mobile_menu_letter_spacing; ?>;
	}
	
	.divi-hacks-mobile-menu-fullscreen.is-mobile #main-header .et_mobile_menu .et_mobile_menu > li > a, 
	.divi-hacks-mobile-menu-slide-in.is-mobile #main-header .et_mobile_menu .et_mobile_menu > li > a {
		line-height: <?php echo $dh_mobile_menu_line_height; ?>;
	}
	.divi-hacks-mobile-menu-fullscreen.is-mobile #main-header .et_mobile_menu .sub-menu > li > a, 
	.divi-hacks-mobile-menu-slide-in.is-mobile #main-header .et_mobile_menu .sub-menu > li > a {
		line-height: <?php echo $dh_mobile_menu_submenu_line_height; ?>;
	}
	
/*  HEADER   */
	#top-header { 
		background-image: url('<?php echo $dh_secondary_header_bg; ?>') ; 
		background-size: <?php echo $dh_secondary_header_bg_size; ?>;
		background-repeat: <?php echo $dh_secondary_header_bg_repeat; ?>;
		background-position: <?php echo $dh_secondary_header_bg_position; ?>;
	}
	#main-header { 
		background-image: url('<?php echo $dh_header_bg; ?>') ; 
		background-size: <?php echo $dh_main_header_bg_size; ?>;
		background-repeat: <?php echo $dh_main_header_bg_repeat; ?>;
		background-position: <?php echo $dh_main_header_bg_position; ?>;
	}
	
/*  FOOTER   */
	div#footer-bottom {
	    position: relative;
	    z-index:1;
	    align-items: center;
	    display: flex;
	}
/** Secondary Nav Current Page Item Text Color **/
	#main-footer li.current_page_item > a, 
	#main-footer li.current-menu-item > a:before {
	    color: <?php echo $dh_footer_menu_bar_current_item_color; ?> !important;
	}
/** Secondary Nav Font Awesome Icon Size **/
	.divi-hacks-font-awesome-icons #main-footer .fab > a:before,
	.divi-hacks-font-awesome-icons #main-footer .far > a:before,
	.divi-hacks-font-awesome-icons #main-footer .fas > a:before,
	.divi-hacks-font-awesome-icons #main-footer .fal > a:before,
	.divi-hacks-font-awesome-icons #main-footer .fa > a:before {
		font-size: <?php echo $dh_footer_menu_bar_nav_icon_size; ?>
	}
/** Secondary Nav Font Awesome Icon Color **/
	.divi-hacks-font-awesome-icons #main-footer .fa > a:before, 
	.divi-hacks-font-awesome-icons #main-footer .fas > a:before, 
	.divi-hacks-font-awesome-icons #main-footer .far > a:before, 
	.divi-hacks-font-awesome-icons #main-footer .fab > a:before, 
	.divi-hacks-font-awesome-icons #main-footer .fal > a:before {
	    color: <?php echo $dh_footer_menu_bar_icon_color; ?>;
	}
/** Main Footer Background **/	
	#main-footer { 
		background-image: url('<?php echo $dh_footer_bg; ?>') ; 
		background-size: <?php echo $dh_footer_menu_bar_bg_size; ?>;
		background-repeat: <?php echo $dh_footer_menu_bar_bg_repeat; ?>;
		background-position: <?php echo $dh_footer_menu_bar_bg_position; ?>;
	}
/** DH Footer Copyright **/
	.dh-footer-copyright { display: <?php echo get_theme_mod("dh_footer_links_copyright"); ?>; }
	
/*  CUSTOM CSS  */

	@media only screen and (max-width:767px) {
		<?php echo get_theme_mod( 'dh_phone_styles'); ?>
	}
	@media only screen and (max-width:980px) {
		<?php echo get_theme_mod( 'dh_mobile_styles'); ?>
	}
	@media only screen and (min-width:480px) and (max-width:981px) {
		<?php echo get_theme_mod( 'dh_tablet_styles'); ?>
	}
	@media only screen and (min-width:981px) {
		<?php echo get_theme_mod( 'dh_desktop_styles'); ?>
	}
/** Login Form Error Messages **/
	<?php 
	/*function blank_username_password( $user, $username, $password ) {
		    if(isset($username) && isset($password)) {
			global $page_id;
			$id2 = get_option('dh-login-page');
			$login_page = home_url( '/?page_id='. $id2. '/' );
			if( $username == "" || $password == "" ) {
				wp_redirect( $login_page . "&blank=1" ); exit;
			}
		    }
		}
	add_filter( 'authenticate', 'blank_username_password', 1, 3);*/
	//$page_showing = basename($_SERVER['REQUEST_URI']);
	if(isset($_GET['login'])) {
	    $page_showing = $_GET['login']; 

	if($page_showing == 'failed') {
	//if (strpos($page_showing, 'failed') !== false) {
		?>
	.et_pb_login .et_pb_newsletter_form:before {
		content: "Error: Invalid username and/or password." !important;
		background: #ff6565;
	    color: #fff;
	    padding: 5px 20px;
	    border-radius: 5px;
	    font-weight: bold;
	    bottom: 10px !important;
	    position: relative;
	    font-family:inherit;
	    display: block;
	    box-sizing: border-box;
	}
	.et_pb_login .et_pb_newsletter_form {
	    padding-top: 10px;
	}
	<?php } }
	//else if(strpos($page_showing, 'blank') !== false ) {
	else if(isset($_GET['blank'])) {
	    if($_GET['blank'] == 1) {
			?>
			.et_pb_login .et_pb_newsletter_form:before {
				content: 'Error: Username and/or Password is empty.';
				background: #ff6565;
			    color: #fff;
			    padding: 5px 20px;
			    border-radius: 5px;
			    font-weight: bold;
			    bottom: 10px !important;
			    position: relative;
			    font-family:inherit;
			    display: block;
	    		box-sizing: border-box;
			}
			.et_pb_login .et_pb_newsletter_form {
			    padding-top: 10px;
			}
			<?php 
	    } 
	    
	}
?>
</style>
<?php
}
add_action( 'wp_head', 'dh_switch_customizer_css', 9 );
/**
 * This function adds some styles to the WordPress Customizer
 */
function my_dh_customizer_styles() { ?>
	<style>
.preview-tablet .wp-full-overlay-main {
    margin: auto 0 auto -390px !important;
    width: 780px !important;
}
	</style>
	<?php

}
add_action( 'customize_controls_print_styles', 'my_dh_customizer_styles', 999 );