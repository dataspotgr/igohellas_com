<?php 

//=========== Custom 404 Page ===================
	if( false != get_theme_mod( 'dh_404_enabler_switch' ) ) {
	function dh_404_section_injector() { 
		if ( is_404() ) { ?>
			<div id="divi-hacks-404">
				<div id="page-container">
					<div id="page-content">
						<?php $id1 = get_option('dh-404-page'); $p1 = get_page($id1); echo apply_filters('the_content', $p1->post_content); ?>
					</div>
				</div>
			</div>
			<script>
				jQuery(function($){
					$(".et_divi_theme.error404 #et-main-area").prepend($("#divi-hacks-404"));
					$("#divi-hacks-404").show();
				});
			</script>
			<style type="text/css">
				body.error404 div#page-container {
					padding-top: 0px !important;
				}
				#divi-hacks-404 {
					display:block;
				}
				#divi-hacks-404 div#page-content {
					z-index: 1;
					position: relative;
					background: #fff;
				}
				body.error404 #et-main-area #main-content {
					display:none;
				}
			</style>
		<?php } else { ?>
			<style type="text/css">
				#divi-hacks-404 {
					display:none;
				}
				body.error404 #et-main-area #main-content {
					display:block;
				}
		</style>
		<?php }
	} 
	add_action('wp_footer', 'dh_404_section_injector');
	}
	function dh_404_customizer($wp_customize) {
	$wp_customize->add_section('dh_custom_404_options', array(    
	'priority' => 1,
	'title' => __('Custom 404 Page', 'Divi Hacks' ),
	'panel'    => 'divi_hack_options',
	));
		$wp_customize->add_setting('dh_404_enabler_switch', array(
		'default' => false,
		'type'        => 'theme_mod',
		'capability'  => 'edit_theme_options',
		));
		$wp_customize->add_control('dh_404_enabler_switch', array(
		'label' => __('Enable Custom 404 Page'),
		'description' => __('A 404 page is a page that shows up if someone navigates to a dead end on your website. This is an easy way to lose traffic. Instead of telling them there\'s nothing there, create a page using the page builder and put the search module into the page to give them a way to search your website for what they were looking for. Then, choose that page below.'),
		'section' => 'dh_custom_404_options',
		'type' => 'checkbox',
		'settings' => 'dh_404_enabler_switch'
		));
		$wp_customize->add_setting('dh-404-page', array(
		'capability' => 'edit_theme_options',
		'type' => 'option',
		));
		$wp_customize->add_control('dh-404-page', array(
		'label' => __('Select your 404 page'),
		'section' => 'dh_custom_404_options',
		'type' => 'dropdown-pages',
		'settings' => 'dh-404-page',
		));
	}
	add_action('customize_register', 'dh_404_customizer');