<?php 

//=========== Custom Login Page ===================
	if( false != get_theme_mod( 'dh_login_enabler_switch' ) ) {
	add_filter('body_class', 'dh_login_body_class');
	function dh_login_body_class($classes) {
		$id2 = get_option('dh-login-page');
		if (is_page($id2))
			$classes[] = 'divi-hacks-login-page';
		return $classes;
	}
	$page_id = "";
	$product_pages_args = array(
	'meta_key' => '_wp_page_template',
	'meta_value' => 'login.php'
	);
	$product_pages = get_pages( $product_pages_args );
	foreach ( $product_pages as $product_page ) {
	$page_id.= $product_page->ID;
	}
	
	function goto_login_page() {
		global $page_id;
		$id2 = get_option('dh-login-page');
		$login_page = home_url( '/?page_id='. $id2. '/' );
		$page = basename($_SERVER['REQUEST_URI']);
		if( $page == "wp-login.php" && $_SERVER['REQUEST_METHOD'] == 'GET') {
			wp_redirect($login_page); exit;
		}
	}
	add_action('init','goto_login_page');
	
	function login_failed() {
		global $page_id;
		$id2 = get_option('dh-login-page');
		$login_page = home_url( '/?page_id='. $id2. '/' );
		wp_redirect( $login_page . '&login=failed' ); exit;
	}
	add_action( 'wp_login_failed', 'login_failed' );
	function blank_username_password( $user, $username, $password ) {
		global $page_id;
		$id2 = get_option('dh-login-page');
		$login_page = home_url( '/?page_id='. $id2. '/' );
		if(isset($_GET['redirect_to'])) {
		    wp_redirect($login_page);
		    exit;
		}
		if( $username == "" || $password == "" ) {
			wp_redirect( $login_page . "&blank=1" ); exit;
		}
	}
	add_filter( 'authenticate', 'blank_username_password', 1, 3);
	//echo $login_page = $page_path ;
	function logout_page() {
		global $page_id;
		$id2 = get_option('dh-login-page');
		$login_page = home_url( '/?page_id='. $id2. '/' );
		wp_redirect( $login_page . "&login=true" ); exit;
	}
	add_action('wp_logout', 'logout_page');
	}
	
	function dh_login_page_customizer($wp_customize) {
		$wp_customize->add_setting('dh_login_enabler_switch', array(
			'default' => false,
			'type'        => 'theme_mod',
			'capability'  => 'edit_theme_options',
		));
		$wp_customize->add_control('dh_login_enabler_switch', array(
			'label' => __('Enable Custom Login Page'),
			'description' => __('If you disable this, the rest of the options in this panel will be used to customize the default WordPress /wp-login.php page'),
			'section' => 'dh_login_page',
			'type' => 'checkbox',
			'settings' => 'dh_login_enabler_switch'
		));
		$wp_customize->add_setting('dh-login-page', array(
			'capability' => 'edit_theme_options',
			'type' => 'option',
		));
		$wp_customize->add_control('dh-login-page', array(
			'label' => __('Select your login page'),
			'description' => __('Create your own custom login page using the login module in the Divi builder, then select that page here.'),
			'section' => 'dh_login_page','section' => 'dh_login_page',
			'type' => 'dropdown-pages',
			'settings' => 'dh-login-page',
		));
	}
	add_action('customize_register', 'dh_login_page_customizer');

	// Custom Login Page
	function dh_register_login_editor($wp_customize) {

	    $wp_customize->add_section('dh_login_page', array(
				'priority' => 5,
				'title' => __('Login Page', 'divi-hacks'),
				'panel'       => 'divi_hack_options',
			));
			// LOGO OPTIONS
			$wp_customize->add_setting('dh_login_logo', array(
				'type' => 'option',
				'capability' => 'edit_theme_options',
			));

			$wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'dh_login_logo', array(
				'label' => __('Login Form Logo', 'divi-hacks'),
				'section' => 'dh_login_page',
				'settings' => 'dh_login_logo'
			)));

			$wp_customize->add_setting( 'dh_login_style', array(
			'capability' => 'edit_theme_options',
			'sanitize_callback' => 'dh_sanitize_select',
			'default' => 'none',
			) );

			$wp_customize->add_control( 'dh_login_style', array(
			'type' => 'select',
			'section' => 'dh_login_page',
			'label' => __( 'Login Style' ),
			'choices' => array(
				'none' => __( 'None' ),
				'style1' => __( 'Logo Bar Style' ),
			),
			) );
			
			$wp_customize->add_setting('dh_logo_bg_color', array(
				'default' => '#ffffff',
				'type' => 'option',
				'capability' => 'edit_theme_options',
			));

			$wp_customize->add_control(new ET_Divi_Customize_Color_Alpha_Control( $wp_customize, 'dh_logo_bg_color', array(
				'label' => __('Logo Bar Background Color', 'divi-hacks'),
				'description' => __( 'If you have a gradient set, that will show up first. You can override it with a color here.' ),
				'section' => 'dh_login_page',
				'settings' => 'dh_logo_bg_color'
			)));
			
			$wp_customize->add_setting('dh_logo_height', array(
				'default' => '75px',
				'type' => 'option',
				'capability' => 'edit_theme_options',
			));

			$wp_customize->add_control('dh_logo_height', array(
				'label' => __('Logo/Header Height (px)', 'divi-hacks'),
				'section' => 'dh_login_page',
				'settings' => 'dh_logo_height'
			));
			
			$wp_customize->add_setting('dh_logo_padding', array(
				'default' => '5px',
				'type' => 'option',
				'capability' => 'edit_theme_options',
			));

			$wp_customize->add_control('dh_logo_padding', array(
				'label' => __('Logo Top/Bottom Padding (px)', 'divi-hacks'),
				'section' => 'dh_login_page',
				'settings' => 'dh_logo_padding'
			));
			
			// BACKGROUND IMAGE EDITS
			$wp_customize->add_setting('dh_login_bg_image', array(
				'type' => 'option',
				'capability' => 'edit_theme_options',
			));
			$wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'dh_login_bg_image', array(
				'label' => __('Body Background Image', 'divi-hacks'),
				'section' => 'dh_login_page',
				'settings' => 'dh_login_bg_image'
			)));

			$wp_customize->add_setting('dh_login_bg_color', array(
				'default' => '#ffffff',
				'type' => 'option',
				'capability' => 'edit_theme_options',
			));

			$wp_customize->add_control(new ET_Divi_Customize_Color_Alpha_Control( $wp_customize, 'dh_login_bg_color', array(
				'label' => __('Body Background Color', 'divi-hacks'),
				'section' => 'dh_login_page',
				'settings' => 'dh_login_bg_color'
			)));

			$wp_customize->add_setting('dh_login_bg_size', array(
				'default' => 'cover',
				'type' => 'option',
				'capability' => 'edit_theme_options',
			));

			$wp_customize->add_control('dh_login_bg_size', array(
				'label' => __('Body Background Size', 'divi-hacks'),
				'section' => 'dh_login_page',
				'settings' => 'dh_login_bg_size'
			));
			
			// FORM BACKGROUND EDITS
			$wp_customize->add_setting('dh_login_form_bg_image', array(
				'type' => 'option',
				'capability' => 'edit_theme_options',
			));

			$wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'dh_login_form_bg_image', array(
				'label' => __('Form Background Image', 'divi-hacks'),
				'section' => 'dh_login_page',
				'settings' => 'dh_login_form_bg_image'
			)));

			$wp_customize->add_setting('dh_login_form_bg_color', array(
				'default' => '#FFF',
				'type' => 'option',
				'capability' => 'edit_theme_options',
			));

			$wp_customize->add_control(new ET_Divi_Customize_Color_Alpha_Control( $wp_customize, 'dh_login_form_bg_color', array(
				'label' => __('Form Background Color', 'divi-hacks'),
				'section' => 'dh_login_page',
				'settings' => 'dh_login_form_bg_color'
			)));

			// FORM FIELDS
			$wp_customize->add_setting('dh_login_field_bg', array(
				'default' => '#FFF',
				'type' => 'option',
				'capability' => 'edit_theme_options',
			));

			$wp_customize->add_control(new ET_Divi_Customize_Color_Alpha_Control( $wp_customize, 'dh_login_field_bg', array(
				'label' => __('Input Field Background', 'divi-hacks'),
				'section' => 'dh_login_page',
				'settings' => 'dh_login_field_bg'
			)));

			$wp_customize->add_setting('dh_login_field_color', array(
				'default' => '#333',
				'type' => 'option',
				'capability' => 'edit_theme_options',
			));

			$wp_customize->add_control(new ET_Divi_Customize_Color_Alpha_Control( $wp_customize, 'dh_login_field_color', array(
				'label' => __('Input Field Color', 'divi-hacks'),
				'section' => 'dh_login_page',
				'settings' => 'dh_login_field_color'
			)));

			$wp_customize->add_setting('dh_login_field_label', array(
				'default' => '#777',
				'type' => 'option',
				'capability' => 'edit_theme_options',
			));

			$wp_customize->add_control(new ET_Divi_Customize_Color_Alpha_Control( $wp_customize, 'dh_login_field_label', array(
				'label' => __('Field Label Color', 'divi-hacks'),
				'section' => 'dh_login_page',
				'settings' => 'dh_login_field_label'
			)));
			// BUTTON STYLES
			$wp_customize->add_setting('dh_login_button_bg', array(
				'default' => '#2EA2CC',
				'type' => 'option',
				'capability' => 'edit_theme_options',
			));

			$wp_customize->add_control(new ET_Divi_Customize_Color_Alpha_Control( $wp_customize, 'dh_login_button_bg', array(
				'label' => __('Button Background', 'divi-hacks'),
				'section' => 'dh_login_page',
				'settings' => 'dh_login_button_bg'
			)));

			$wp_customize->add_setting('dh_login_button_border', array(
				'default' => '#0074A2',
				'type' => 'option',
				'capability' => 'edit_theme_options',
			));

			$wp_customize->add_control(new ET_Divi_Customize_Color_Alpha_Control( $wp_customize, 'dh_login_button_border', array(
				'label' => __('Button Border', 'divi-hacks'),
				'section' => 'dh_login_page',
				'settings' => 'dh_login_button_border'
			)));

			$wp_customize->add_setting('dh_login_button_hover_bg', array(
				'default' => '#1E8CBE',
				'type' => 'option',
				'capability' => 'edit_theme_options',
			));

			$wp_customize->add_setting('dh_button_border_width', array(
				'default' => '2px',
				'type' => 'option',
				'capability' => 'edit_theme_options',
			));

			$wp_customize->add_control('dh_button_border_width', array(
				'label' => __('Button Border Width', 'divi-hacks'),
				'section' => 'dh_login_page',
				'settings' => 'dh_button_border_width'
			));
			
			$wp_customize->add_control(new ET_Divi_Customize_Color_Alpha_Control( $wp_customize, 'dh_login_button_hover_bg', array(
				'label' => __('Button Background (Hover)', 'divi-hacks'),
				'section' => 'dh_login_page',
				'settings' => 'dh_login_button_hover_bg'
			)));

			$wp_customize->add_setting('dh_login_button_hover_border', array(
				'default' => '#0074A2',
				'type' => 'option',
				'capability' => 'edit_theme_options',
			));

			$wp_customize->add_control(new ET_Divi_Customize_Color_Alpha_Control( $wp_customize, 'dh_login_button_hover_border', array(
				'label' => __('Button Border (Hover)', 'divi-hacks'),
				'section' => 'dh_login_page',
				'settings' => 'dh_login_button_hover_border'
			)));

			$wp_customize->add_setting('dh_login_button_color', array(
				'default' => '#FFF',
				'type' => 'option',
				'capability' => 'edit_theme_options',
			));

			$wp_customize->add_control(new ET_Divi_Customize_Color_Alpha_Control( $wp_customize, 'dh_login_button_color', array(
				'label' => __('Button Color', 'divi-hacks'),
				'section' => 'dh_login_page',
				'settings' => 'dh_login_button_color'
			)));

			$wp_customize->add_setting('dh_login_text_color', array(
				'default' => '#999',
				'type' => 'option',
				'capability' => 'edit_theme_options',
			));

			$wp_customize->add_control(new ET_Divi_Customize_Color_Alpha_Control( $wp_customize, 'dh_login_text_color', array(
				'label' => __('Body Text Color', 'divi-hacks'),
				'section' => 'dh_login_page',
				'settings' => 'dh_login_text_color'
			)));

			$wp_customize->add_setting('dh_login_text_color_hover', array(
				'default' => '#2EA2CC',
				'type' => 'option',
				'capability' => 'edit_theme_options',
			));

			$wp_customize->add_control(new ET_Divi_Customize_Color_Alpha_Control( $wp_customize, 'dh_login_text_color_hover', array(
				'label' => __('Body Text Hover Color', 'divi-hacks'),
				'section' => 'dh_login_page',
				'settings' => 'dh_login_text_color_hover'
			)));
			// CUSTOM CSS
			$wp_customize->add_setting('dh_login_custom_css', array(
				'type' => 'option',
				'capability' => 'edit_theme_options',
			));

			$wp_customize->add_control('dh_login_custom_css', array(
				'label' => __('Page Custom CSS', 'divi-hacks'),
				'type' => 'textarea',
				'section' => 'dh_login_page',
				'settings' => 'dh_login_custom_css'
			));
			
			$wp_customize->add_setting('dh_login_text_field_custom_css', array(
				'type' => 'option',
				'capability' => 'edit_theme_options',
			));

			$wp_customize->add_control('dh_login_text_field_custom_css', array(
				'label' => __('Text Field Custom CSS', 'divi-hacks'),
				'type' => 'textarea',
				'section' => 'dh_login_page',
				'settings' => 'dh_login_text_field_custom_css'
			));

			$wp_customize->add_setting('dh_login_label_custom_css', array(
				'type' => 'option',
				'capability' => 'edit_theme_options',
			));

			$wp_customize->add_control('dh_login_label_custom_css', array(
				'label' => __('Form Label Custom CSS', 'divi-hacks'),
				'type' => 'textarea',
				'section' => 'dh_login_page',
				'settings' => 'dh_login_label_custom_css'
			));
	}	
	add_action('customize_register', 'dh_register_login_editor');
	function dh_login_customizer() {
		$dh_logo_url = get_option('dh_login_logo');
		$dh_logo_height = get_option('dh_logo_height','75px');
		$dh_logo_padding = get_option('dh_logo_padding','5px');
		$dh_logo_bg_color = get_option('dh_logo_bg_color');
		$dh_bg_img = get_option('dh_login_bg_image');
		$dh_bg_color = get_option('dh_login_bg_color');
		$dh_bg_size = get_option('dh_login_bg_size','cover');
		$dh_form_bg_image = get_option('dh_login_form_bg_image');
		$dh_form_bg_color = get_option('dh_login_form_bg_color');
		$dh_field_bg = get_option('dh_login_field_bg');
		$dh_field_color = get_option('dh_login_field_color');
		$dh_field_label = get_option('dh_login_field_label');
		$dh_button_bg = get_option('dh_login_button_bg');
		$dh_button_border_width = get_option('dh_button_border_width');
		$dh_button_border = get_option('dh_login_button_border');
		$dh_button_color = get_option('dh_login_button_color');
		$dh_button_hover_bg = get_option('dh_login_button_hover_bg');
		$dh_button_hover_border = get_option('dh_login_button_hover_border');
		$dh_other_color = get_option('dh_login_text_color');
		$dh_other_color_hover = get_option('dh_login_text_color_hover');
		$dh_other_css = get_option('dh_login_custom_css');
		$dh_login_text_field_custom_css = get_option('dh_login_text_field_custom_css');
		$dh_login_label_custom_css = get_option('dh_login_label_custom_css');
		$dh_main_header_gradient_1	= get_option('dh_main_header_gradient_1','rgba(0,0,0,0)');
		$dh_main_header_gradient_2	= get_option('dh_main_header_gradient_2','rgba(0,0,0,0)');
		$main_header_bg_gradient = get_theme_mod('dh_header_gradient_direction','left');
		$dh_login_page_style = get_theme_mod('dh_login_style','none');

		if ( $main_header_bg_gradient == 'left' ) { ?>
			<style>
				body.login-style-1 #login h1 a:before { 
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
					z-index:-1;
				}
			</style> <?php
		} if ( $main_header_bg_gradient == 'top' ) { ?>
			<style>
				body.login-style-1 #login h1 a:before { 
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
					z-index:-1;
				}
			</style> <?php
		} if ( $main_header_bg_gradient == 'topleft' ) { ?>
			<style>
				body.login-style-1 #login h1 a:before { 
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
					z-index:-1;
				}
			</style> <?php
		} if ( $main_header_bg_gradient == 'topright' ) { ?>
			<style>
				body.login-style-1 #login h1 a:before { 
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
					z-index:-1;
				}
			</style> <?php
		} if ( $dh_login_page_style == 'none' ) { ?>
			<style type="text/css">
				body.login #login h1 a {
				<?php if( !empty($dh_logo_url)) : ?>
					background-image: url(<?php echo $dh_logo_url; ?>) !important;
					background-size: contain;
					width: 100%;
				<?php endif; ?>
				}
			</style> <?php
		} if ( $dh_login_page_style == 'style1' ) { ?>
				<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
				<script type="text/javascript">
					jQuery(document).ready(function($) {
						$('#login').children('p,div,form').not(':first-child,.message,#login_error').wrapAll('<div class="login-wrapper"></div>');
						$('body').addClass('login-style-1');
					});
				</script>
				<style type="text/css">
					body.login {
						<?php if( !empty($dh_bg_img)) : ?>
							background-image: url(<?php echo $dh_bg_img; ?>) !important;
						<?php endif; ?>
						<?php if( !empty($dh_bg_color)) : ?>
							background-color: <?php echo $dh_bg_color; ?> !important;
						<?php endif; ?>
							background-size: cover;
							background-attachment:fixed !important;
					}
					body.login #login h1 a {
						<?php if( !empty($dh_logo_url)) : ?>
							background-image: url(<?php echo $dh_logo_url; ?>) !important;
							background-size: contain;
							background-position: center;
							box-sizing: border-box;
						<?php endif; ?>
						<?php if( !empty($dh_logo_height)) : ?>
							height: <?php echo $dh_logo_height; ?>;
						<?php endif; ?>
						<?php if( !empty($dh_logo_padding)) : ?>
							border-top: <?php echo $dh_logo_padding; ?> solid transparent;
							border-bottom: <?php echo $dh_logo_padding; ?> solid transparent;
						<?php endif; ?>
						<?php if( !empty($dh_logo_bg_color)) : ?>
							background-color: <?php echo $dh_logo_bg_color; ?> !important;
						<?php endif; ?>
							width: 100%;
					}
					.login-wrapper {
						box-shadow: 0px 0px 75px rgba(0,0,0,0.1);
						<?php if( !empty($dh_form_bg_image)) : ?>
							background-image: url(<?php echo $dh_form_bg_image; ?>) !important;
						<?php endif; ?>
						<?php if( !empty($dh_form_bg_color)) : ?>
							background-color: <?php echo $dh_form_bg_color; ?> !important;
						<?php endif; ?>
						<?php if( !empty($dh_form_border)) : ?>
							border: <?php echo $dh_form_border; ?> !important;
						<?php endif; ?>
					}
					#loginform, #lostpasswordform, #resetpassform {
						padding: 40px !important;
					}
					.message, #login_error {
						<?php if( !empty($dh_form_bg_color)) : ?>
							background-color: <?php echo $dh_form_bg_color; ?> !important;
						<?php endif; ?>
							box-shadow: 0px 0px 40px rgba(0,0,0,0.1) !important;
							font-weight: lighter;
							margin-left:unset;
					}
					#loginform, #lostpasswordform, #resetpassform {
						background-color:transparent !important;
						box-shadow:none;
						margin-top:0px;
					}
					#loginform, #nav, #lostpasswordform, .message, #login_error, #resetpassform {
						max-width:320px;
						box-sizing:border-box;
						font-weight: lighter;
						font-size: 20px;
						line-height: 1.2em;
					}
					.login #login_error, .login .message, .login .success {
						<?php if( !empty($dh_button_bg)) : ?>
							border-left: 4px solid <?php echo $dh_button_bg; ?> !important;
						<?php endif; ?>
					}
					#login_error a, #nav a, #lostpasswordform a, .message a {
						color: inherit;
					}
					#backtoblog {
						<?php if( !empty($dh_logo_height)) : ?>
							height: <?php echo $dh_logo_height; ?>;
						<?php endif; ?>
						text-align: center;
						position: fixed;
						top: 0;
						display: flex;
						flex-direction: column;
						justify-content: center;
						margin:0px !important;
					}
					#backtoblog a {
						font-size:0px;
					}
					#backtoblog a:before {
						content: "HOME";
						position: relative;
						font-weight: bold;
						font-size:14px;
					}
					#login {
						<?php if( !empty($dh_logo_height)) : ?>
							margin-top: <?php echo $dh_logo_height; ?> !important;
						<?php endif; ?>
						width: 100% !important;
						display: flex;
						flex-direction: column;
						align-items: center;
					}
					#login h1 {
						position: fixed;
						top: 0;
						left: 0;
						width: 100%;
						box-shadow: 0px 0px 50px rgba(0,0,0,0.1);
					}
					#login h1 a {
						margin:0px auto !important;
					}
					.login label {
						font-size: 20px !important;
						font-weight: lighter;
					}
					.login p.forgetmenot label {
						font-size: 14px !important;
						font-weight: lighter;
					}
					#nav {
						text-align: center;
						margin: 0px auto !important;
						font-weight: lighter;
						font-size: 18px !important;
						width: 100%;
						padding-bottom: 30px !important;
					}
					#rememberme {
						border: 0px solid #eee;
						box-shadow: unset;
						transform: scale(2) translateX(-35%);
					}
					.forgetmenot label {
						padding-left: 20px;
					}
					.forgetmenot {
						margin: 20px auto 0px auto !important;
					}
					@media only screen and (max-width:768px) {
						#login h1 a {
							border-left: 30px solid rgba(0,0,0,0) !important;
							border-right: 100px solid rgba(0,0,0,0) !important;
							box-sizing: border-box;
							height: 60px;
						}
						#backtoblog {
							height: 64px;
							right:0px;
						}
						.login label {
							font-size: 20px !important;
							font-weight: lighter;
						}
					}
					@media only screen and (min-width:769px) {
						#backtoblog {
							left:0px;
						}
					}
					.login .login-wrapper input[type="text"],
					.login .login-wrapper input[type="password"] {
						padding:10px;
						box-shadow:unset;
						<?php if( !empty($dh_field_bg)) : ?>
							background: <?php echo $dh_field_bg; ?> !important;
						<?php endif; ?>
						<?php if( !empty($dh_field_color)) : ?>
							color: <?php echo $dh_field_color; ?> !important;
						<?php endif; ?>
						<?php if( !empty($dh_login_text_field_custom_css)) : ?>
							<?php echo $dh_login_text_field_custom_css; ?>
						<?php endif; ?>
					}
					.login .login-wrapper .input[type=checkbox] {
						border:2px solid red;
						box-shadow:unset;
						<?php if( !empty($dh_field_bg)) : ?>
							background: <?php echo $dh_field_bg; ?> !important;
						<?php endif; ?>
					}

					.login label {
						<?php if( !empty($dh_field_label)) : ?>
							color: <?php echo $dh_field_label; ?> !important;
						<?php endif; ?>
						<?php if( !empty($dh_login_label_custom_css)) : ?>
							<?php echo $dh_login_label_custom_css; ?>
						<?php endif; ?>
					}

					#wp-submit.button-primary {
						box-shadow: unset;
						text-shadow: unset;
						padding: 10px;
						width: 100%;
						margin-top: 20px;
						height: auto;
						border-radius: 40px;
						-moz-border-radius: 40px;
						-webkit-border-radius: 40px;
						-o-border-radius: 40px;
						-ms-border-radius: 40px;
						text-transform: uppercase;
						font-weight: bold;
						font-size: 18px;
						transition:all 0.3s ease-in-out;
						<?php if( !empty($dh_button_bg)) : ?>
							background: <?php echo $dh_button_bg; ?> !important;
						<?php endif; ?>
						<?php if( !empty($dh_button_border)) : ?>
							border-color: <?php echo $dh_button_border; ?> !important;
						<?php endif; ?>
						<?php if( !empty($dh_button_border_width)) : ?>
							border-width: <?php echo $dh_button_border_width; ?> !important;
						<?php endif; ?>
						<?php if( !empty($dh_button_color)) : ?>
							color: <?php echo $dh_button_color; ?> !important;
						<?php endif; ?>
					}

					#wp-submit.button-primary.focus, 
					#wp-submit.button-primary.hover, 
					#wp-submit.button-primary:focus, 
					#wp-submit.button-primary:hover {
						<?php if( !empty($dh_button_hover_bg)) : ?>
							background: <?php echo $dh_button_hover_bg; ?> !important;
						<?php endif; ?>
						<?php if( !empty($dh_button_hover_border)) : ?>
							border-color: <?php echo $dh_button_hover_border; ?> !important;
						<?php endif; ?>
					}
					
					input[type=text]:focus, input[type=password]:focus {
						box-shadow: inset 0px 0px 10px rgba(0,0,0,0.1);
						<?php if( !empty($dh_button_hover_bg)) : ?>
							box-shadow: 0px 0px 10px <?php echo $dh_button_hover_bg; ?> !important;
							border-color: <?php echo $dh_button_hover_bg; ?> !important;
						<?php endif; ?>
					}

					.login #backtoblog a, .login #nav a {
						<?php if( !empty($dh_other_color)) : ?>
							color: <?php echo $dh_other_color; ?> !important;
						<?php endif; ?>
					}

					.login #backtoblog a:hover, .login #nav a:hover, .login h1 a:hover {
						<?php if( !empty($dh_other_color_hover)) : ?>
							color: <?php echo $dh_other_color_hover; ?> !important;
						<?php endif; ?>
					}

					<?php if( !empty($dh_other_css)) : ?>
						<?php echo $dh_other_css; ?>
					<?php endif; ?>
				</style>
		<?php }
	}
	add_action( 'login_enqueue_scripts', 'dh_login_customizer' );
	function dh_login_login_logo_url() { return get_bloginfo( 'url' ); }
	add_filter( 'login_headerurl', 'dh_login_login_logo_url' );
	function dh_login_login_logo_url_title() { $title = get_bloginfo( 'name', 'display' ); return $title; }
	add_filter( 'login_headertitle', 'dh_login_login_logo_url_title' );