<?php 

//=========== Custom Maintenance Mode Page ===================
	if( false != get_theme_mod( 'dh_maintenance_mode_enabler_switch' ) ) {
	function dh_maintenance_mode_section_injector() { 
		if ( is_user_logged_in() ) { } else { ?>
			<div id="divi-hacks-maintenance-mode">
				<div id="page-container">
					<a id="login-link" href="<?php echo esc_url( wp_login_url() ); ?>" alt="<?php esc_attr_e( 'Login', 'divi-hacks' ); ?>"><?php _e( 'Login', 'divi-hacks' );?></a>
					<?php $id = get_option('dh-maintenance-mode-page'); $p = get_page($id); echo apply_filters('the_content', $p->post_content); ?>
				</div>
			</div>
			<script>
				jQuery(function($){
					$(".et_divi_theme").prepend($("#divi-hacks-maintenance-mode"));
					$("#divi-hacks-maintenance-mode").show();
				});
			</script> <?php 
		}
	} 
	add_action('wp_footer', 'dh_maintenance_mode_section_injector');

	function dh_maintenance_mode_css() { ?>
		<style type="text/css">
			body:not(.divi-hacks-login-page) #divi-hacks-maintenance-mode, 
			body:not(.divi-hacks-login-page) #divi-hacks-maintenance-mode #page-container{
			display:block;
			}
			body:not(.divi-hacks-login-page) #divi-hacks-maintenance-mode #page-container{
			padding-top:0px;
			}
			body:not(.divi-hacks-login-page) #page-container{
			display:none;
			}
			body.divi-hacks-login-page #divi-hacks-maintenance-mode, 
			body.divi-hacks-login-page #divi-hacks-maintenance-mode #page-container{
			display:none;
			}
			body.divi-hacks-login-page #page-container{
			display:block;
			}
			.logged-in #divi-hacks-maintenance-mode,
			.logged-in #divi-hacks-maintenance-mode #page-container {
			display:none !important;
			}
			.logged-in #page-container{
			display:block !important;
			} <?php
			if( false != get_theme_mod( 'dh_maintenance_mode_login_link' ) ) { ?>
				#divi-hacks-maintenance-mode #login-link {
				display: block;
				position: fixed;
				bottom: 5px;
				left: 5px;
				z-index: 999999;
				background: #fff;
				padding: 5px 10px;
				opacity: 0.2;
				color: rgba(0,0,0,0.4);
				border: 1px solid rgba(0,0,0,0.4);
				font-family: impact;
				text-transform: uppercase;
				line-height: 1em;
				transition:all 0.3s ease-in-out;
				}
				#divi-hacks-maintenance-mode #login-link:hover {
				opacity: 1;
				transform:scale(1.05);
				-webkit-transform:scale(1.05);
				-moz-transform:scale(1.05);
				-ms-transform:scale(1.05);
				-o-transform:scale(1.05);
				} <?php 
			} else { ?>
				#divi-hacks-maintenance-mode #login-link {
					display: none;
				} <?php 
			} ?> 
		</style> <?php 
	}
	add_action( 'wp_head', 'dh_maintenance_mode_css' );
	}
	function dh_maintenance_mode_customizer($wp_customize) {
	$wp_customize->add_section('dh_maintenance_mode_options', array(    
	'priority' => 1,
	'title' => __('Maintenance Mode', 'Divi Hacks' ),
	'panel'    => 'divi_hack_options',
	));
		$wp_customize->add_setting('dh_maintenance_mode_enabler_switch', array(
		'default' => false,
		'type'        => 'theme_mod',
		'capability'  => 'edit_theme_options',
		));
		$wp_customize->add_control('dh_maintenance_mode_enabler_switch', array(
		'label' => __('Enable Maintenance Mode'),
		'description' => __('Create your own Maintenance Mode/Coming Soon page. Then chooose that page below. Optionally, choose to enable the login link on the bottom-left corner of your custom maintenance mode page.'),
		'section' => 'dh_maintenance_mode_options',
		'type' => 'checkbox',
		'settings' => 'dh_maintenance_mode_enabler_switch'
		));
		$wp_customize->add_setting('dh-maintenance-mode-page', array(
		'capability' => 'edit_theme_options',
		'type' => 'option',
		));
		$wp_customize->add_control('dh-maintenance-mode-page', array(
		'label' => __('Select your Maintenance Mode page'),
		'section' => 'dh_maintenance_mode_options',
		'type' => 'dropdown-pages',
		'settings' => 'dh-maintenance-mode-page',
		));
				$wp_customize->add_setting('dh_maintenance_mode_login_link', array(
		'default' => false,
		'type'        => 'theme_mod',
		'capability'  => 'edit_theme_options',
		));
		$wp_customize->add_control('dh_maintenance_mode_login_link', array(
		'label' => __('Show Login Link', 'divi-hacks'),
		'description' => 'Displays a discrete login link on the bottom left corner of the screen',
		'section' => 'dh_maintenance_mode_options',
		'type' => 'checkbox',
		'settings' => 'dh_maintenance_mode_login_link'
		));
	}
	add_action('customize_register', 'dh_maintenance_mode_customizer');