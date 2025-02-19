<?php
// Enable White Label
	if( false != get_theme_mod( 'dh_white_label_switch' ) ) {
		add_filter( 'gettext', 'dh_white_label', 20, 3 );
		function dh_white_label( $translated_text, $text, $domain ) {
			$dh_white_label_text = get_option('dh_white_label_text','Extender');
			//$dh_white_label_text = ucfirst($dh_white_label_text);
			switch ( $translated_text ) {
				case 'Divi Hacks' :
					$translated_text = __( 'Divi ' . $dh_white_label_text , 'Divi Hacks' );
					break;
				case 'Hacks Customizer' :
					$translated_text = __( $dh_white_label_text . ' Customizer', 'Divi Hacks' );
					break;
			}
			return $translated_text;
		}
	}
	function dh_white_label_customizer($wp_customize) {
		$wp_customize->add_section('dh_white_label_options', array(    
		'priority' => 100,
		'title' => __('White Label', 'Divi Hacks' ),
		'panel'    => 'divi_hack_options',
		));
			$wp_customize->add_setting('dh_white_label_switch', array(
			'default' => false,
			'type'        => 'theme_mod',
			'capability'  => 'edit_theme_options',
			));
			$wp_customize->add_control('dh_white_label_switch', array(
			'label' => __('Enable White Label'),
			'description' => __('Replace the word \'Hacks\' with any other word. This will affect the strings \'Divi Hacks\' & \'Hacks Customizer\''),
			'section' => 'dh_white_label_options',
			'type' => 'checkbox',
			'settings' => 'dh_white_label_switch'
			));
			$wp_customize->add_setting('dh_white_label_text', array(
			'default' => 'Extender',
			'type' => 'option',
			'capability' => 'edit_theme_options',
			'validate_callback' => 'sanitize_email'
			));
			$wp_customize->add_control('dh_white_label_text', array(
			'label' => __('Replace HACKS with this word:', 'Divi Hacks'),
			'section' => 'dh_white_label_options',
			'type' => 'text',
			'settings' => 'dh_white_label_text',
			'input_attrs' => array(
			    'style' => __('text-transform:capitalize;', 'Divi Hacks')
			    )
			));
	}
	add_action('customize_register', 'dh_white_label_customizer');