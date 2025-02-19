<?php

// Custom Text Logo
	function dh_text_logo_customizer($wp_customize) {
		$wp_customize->add_section('dh_custom_text_logo_options', array(    
			'priority' => 9,
			'title' => __('Custom Text Logo', 'divi-hacks'),
		'panel'    => 'divi_hack_options',
		));
			$wp_customize->add_setting('dh_text_logo_enabler_switch', array(
				'default' => false,
				'type'        => 'theme_mod',
				'capability'  => 'edit_theme_options',
			));
			$wp_customize->add_control('dh_text_logo_enabler_switch', array(
				'label' => __('Enable Text Logo', 'divi-hacks'),
				'description' => __('Create a Text-based Logo if you don\'t currently have a logo image.' , 'divi-hacks'),
				'section' => 'dh_custom_text_logo_options',
				'type' => 'checkbox',
				'settings' => 'dh_text_logo_enabler_switch'
			));
			$wp_customize->add_setting('dh_custom_logo_text', array(
				'default'    => get_bloginfo('name'),
				'type'       => 'option',
				'capability' => 'edit_theme_options',
			));
			$wp_customize->add_control('dh_custom_logo_text', array(
				'label'    => __('Logo Text', 'divi-hacks'),
				'section'  => 'dh_custom_text_logo_options',
				'type'     => 'option',
				'settings' => 'dh_custom_logo_text'
			));

			$font_choices = array(
				'Source Sans Pro' => 'Source Sans Pro',
				'Open Sans' => 'Open Sans',
				'Oswald' => 'Oswald',
				'Playfair Display' => 'Playfair Display',
				'Montserrat' => 'Montserrat',
				'Raleway' => 'Raleway',
				'Droid Sans' => 'Droid Sans',
				'Lato' => 'Lato',
				'Arvo' => 'Arvo',
				'Lora' => 'Lora',
				'Merriweather' => 'Merriweather',
				'Oxygen' => 'Oxygen',
				'PT Serif' => 'PT Serif',
				'PT Sans' => 'PT Sans',
				'PT Sans' => 'PT Sans Narrow',
				'Cabin' => 'Cabin',
				'Fjalla One' => 'Fjalla One',
				'Francois One' => 'Francois One',
				'Josefin Sans' => 'Josefin Sans',
				'Libre Baskerville' => 'Libre Baskerville',
				'Arimo' => 'Arimo',
				'Ubuntu' => 'Ubuntu',
				'Bitter' => 'Bitter',
				'Droid Serif' => 'Droid Serif',
				'Roboto' => 'Roboto',
				'Open Sans Condensed' => 'Open Sans Condensed',
				'Roboto Condensed' => 'Roboto Condensed',
				'Roboto Slab' => 'Roboto Slab',
				'Yanone Kaffeesatz' => 'Yanone Kaffeesatz',
				'Rokkitt' => 'Rokkitt',
				'Poppins' => 'Poppins',
			);

			$wp_customize->add_setting( 'dh_text_logo_font', array(
				'default'		=> 'none',
				'capability'	=> 'edit_theme_options',
				'transport'		=> 'refresh',
				'type'			=> 'option',
			));
			$wp_customize->add_control('dh_text_logo_font', array(
				'label'		=> esc_html__( 'Text Font', 'divi-hacks' ),
				'type'			=> 'select',
				'section'	=> 'dh_custom_text_logo_options',
				'settings'	=> 'dh_text_logo_font',
				'choices' => $font_choices,
			));
			$wp_customize->add_setting( 'dh_text_logo_alignment', array(
				'capability' => 'edit_theme_options',
				'sanitize_callback' => 'dh_sanitize_select',
				'default' => 'center',
			));

			$wp_customize->add_control( 'dh_text_logo_alignment', array(
				'type' => 'select',
				'section' => 'dh_custom_text_logo_options',
				'label' => __( 'Text Align' ),
				'choices' => array(
					'left' => __( 'Left' ),
					'center' => __( 'Center' ),
					'right' => __( 'Right' ),
				),
			));
			$wp_customize->add_setting( 'dh_text_logo_font_size', array(
				'default'       => '10',
				'type'          => 'option',
				'capability'    => 'edit_theme_options',
				'transport'     => 'refresh',
				'sanitize_callback' => 'absint',
			) );

			$wp_customize->add_control( new ET_Divi_Range_Option ( $wp_customize, 'dh_text_logo_font_size', array(
				'label'	      => esc_html__( 'Logo Maximum Font Size', 'Divi' ),
				'section'     => 'dh_custom_text_logo_options',
				'type'        => 'range',
				'settings'	=> 'dh_text_logo_font_size',
				'input_attrs' => array(
					'min'  => 0,
					'max'  => 100,
					'step' => 1
				),
			) ) );
//			$wp_customize->add_setting( 'dh_text_logo_height', array(
//				'default'       => '100',
//				'type'          => 'option',
//				'capability'    => 'edit_theme_options',
//				'transport'     => 'refresh',
//				'sanitize_callback' => 'absint',
//			) );
//
//			$wp_customize->add_control( new ET_Divi_Range_Option ( $wp_customize, 'dh_text_logo_height', array(
//				'label'	      => esc_html__( 'Logo Container Height (Vertical Nav Only)', 'Divi' ),
//				'section'     => 'dh_custom_text_logo_options',
//				'type'        => 'range',
//				'settings'	=> 'dh_text_logo_height',
//				'input_attrs' => array(
//					'min'  => 0,
//					'max'  => 500,
//					'step' => 1
//				),
//			) ) );
//			$wp_customize->add_setting( 'dh_text_logo_width', array(
//				'default'       => '100',
//				'type'          => 'option',
//				'capability'    => 'edit_theme_options',
//				'transport'     => 'refresh',
//				'sanitize_callback' => 'absint',
//			) );
//
//			$wp_customize->add_control( new ET_Divi_Range_Option ( $wp_customize, 'dh_text_logo_width', array(
//				'label'	      => esc_html__( 'Logo Container Width', 'Divi' ),
//				'section'     => 'dh_custom_text_logo_options',
//				'type'        => 'range',
//				'settings'	=> 'dh_text_logo_width',
//				'input_attrs' => array(
//					'min'  => 0,
//					'max'  => 500,
//					'step' => 1
//				),
//			) ) );
			$wp_customize->add_setting( 'dh_text_logo_text_color', array(
				'default'           => '#000',
				'type'              => 'option',
				'capability'        => 'edit_theme_options',
				'sanitize_callback' => 'et_sanitize_alpha_color',
			));
			$wp_customize->add_control( new ET_Divi_Customize_Color_Alpha_Control( $wp_customize, 'dh_text_logo_text_color', array(
				'label'     => esc_html__( 'Text Color', 'divi-hacks'),
				'section'   => 'dh_custom_text_logo_options',
				'settings'  => 'dh_text_logo_text_color',
			)));			
			$wp_customize->add_setting('dh_custom_text_logo_css', array(
				'default'    => '',
				'capability' => 'edit_theme_options',
				'sanitize_callback' => 'sanitize_text_field',
			));
			$wp_customize->add_control('dh_custom_text_logo_css', array(
				'label'    => __('Text Custom CSS', 'divi-hacks'),
				'section'  => 'dh_custom_text_logo_options',
				'type'     => 'textarea',
				'settings' => 'dh_custom_text_logo_css'
			));
			$wp_customize->add_setting( 'dh_text_logo_text_color_hover', array(
				'default'           => '#000',
				'type'              => 'option',
				'capability'        => 'edit_theme_options',
				'sanitize_callback' => 'et_sanitize_alpha_color',
			));
			$wp_customize->add_control( new ET_Divi_Customize_Color_Alpha_Control( $wp_customize, 'dh_text_logo_text_color_hover', array(
				'label'     => esc_html__( 'Text Hover Color', 'divi-hacks'),
				'section'   => 'dh_custom_text_logo_options',
				'settings'  => 'dh_text_logo_text_color_hover',
			)));			
			$wp_customize->add_setting('dh_custom_text_logo_css_hover', array(
				'default'    => '',
				'capability' => 'edit_theme_options',
				'sanitize_callback' => 'sanitize_text_field',
			));
			$wp_customize->add_control('dh_custom_text_logo_css_hover', array(
				'label'    => __('Text (Hover) Custom CSS', 'divi-hacks'),
				'section'  => 'dh_custom_text_logo_options',
				'type'     => 'textarea',
				'settings' => 'dh_custom_text_logo_css_hover'
			));	
			$wp_customize->add_setting('dh_text_logo_classes', array(
				'default'    => 'rightshadow',
				'type'       => 'option',
				'capability' => 'edit_theme_options',
			));

			$wp_customize->add_control('dh_text_logo_classes', array(
				'label'    => __('Additional Classes', 'divi-hacks'),
				'description'    => __('Add any additional classes to the text logo element. Separate classes with a space.', 'divi-hacks'),
				'section'  => 'dh_custom_text_logo_options',
				'type'     => 'option',
				'settings' => 'dh_text_logo_classes',
			));
			
					
	}
	add_action('customize_register', 'dh_text_logo_customizer');

	if( false != get_theme_mod( 'dh_text_logo_enabler_switch' ) ) {
		function dh_text_logo() {
			$dh_text_logo_text_color  = get_option('dh_text_logo_text_color','#000');
			$dh_text_logo_text_color_hover  = get_option('dh_text_logo_text_color_hover','#000');
			$dh_custom_logo_text = get_option('dh_custom_logo_text', get_bloginfo('name'));
			$dh_text_logo_font = get_option('dh_text_logo_font', '');
			$dh_text_logo_font_size = get_option('dh_text_logo_font_size', '10');
			$dh_text_logo_height = get_option('dh_text_logo_height', '100');
			$dh_text_logo_width = get_option('dh_text_logo_width', '300');
			$dh_text_logo_width_unit = get_option('dh_text_logo_width_unit', 'px');
			$dh_text_logo_classes = get_option('dh_text_logo_classes', 'rightshadow');
			?>
<script id="text-logo-js">
/*
  textfill
 @name      jquery.textfill.js
 @author    Russ Painter (GeekyMonkey)
 @author    Yu-Jie Lin
 @author    Alexandre Dantas
 @version   0.6.2
 @date      2018-02-24
 @copyright (c) 2009
 @license   MIT License
 @homepage  https://github.com/jquery-textfill/jquery-textfill
 @example   http://jquery-textfill.github.io/jquery-textfill/index.html
*/
(function(k){k.fn.textfill=function(q){function e(){a.debug&&"undefined"!=typeof console&&"undefined"!=typeof console.debug&&console.debug.apply(console,arguments)}function n(b,a,f,l,m,g){function c(a,b){var c=" / ";a>b?c=" > ":a==b&&(c=" = ");return c}e("[TextFill] "+b+" { font-size: "+a.css("font-size")+",Height: "+a.height()+"px "+c(a.height(),f)+f+"px,Width: "+a.width()+c(a.width(),l)+l+",minFontPixels: "+m+"px, maxFontPixels: "+g+"px }")}function p(a,c,f,l,e,g,h,d){for(n(a,c,e,g,h,d);h<Math.floor(d)-
1;){var b=Math.floor((h+d)/2);c.css("font-size",b);var k=f.call(c);if(k<=l){if(h=b,k==l)break}else d=b;n(a,c,e,g,h,d)}c.css("font-size",d);f.call(c)<=l&&(h=d,n(a+"* ",c,e,g,h,d));return h}var a=k.extend({debug:!1,maxFontPixels:40,minFontPixels:4,innerTag:"span",widthOnly:!1,success:null,fail:null,complete:null,explicitWidth:null,explicitHeight:null,changeLineHeight:!1,truncateOnFail:!1,allowOverflow:!1},q);e("[TextFill] Start Debug");this.each(function(){var b=k(a.innerTag+":first",this);e("[TextFill] Inner text: "+
b.text());e("[TextFill] All options: ",a);e("[TextFill] Maximum sizes: { Height: "+c+"px, Width: "+f+"px }");if(b.is(":visible")){var c=a.explicitHeight||k(this).height(),f=a.explicitWidth||k(this).width(),l=b.css("font-size"),m=parseFloat(b.css("line-height"))/parseFloat(l),g=a.minFontPixels,h=0>=a.maxFontPixels?c:a.maxFontPixels,d=void 0;a.widthOnly?b.css("white-space","nowrap"):d=p("Height",b,k.fn.height,c,c,f,g,h);g=p("Width",b,k.fn.width,f,c,f,g,h);a.widthOnly?(b.css({"font-size":g}),a.changeLineHeight&&
b.parent().css("line-height",m*g+"px")):(d=Math.min(d,g),b.css("font-size",d),a.changeLineHeight&&b.parent().css("line-height",m*d+"px"));e("[TextFill] Finished { Old font-size: "+l+", New font-size: "+b.css("font-size")+" }");b.width()>f&&!a.allowOverflow||b.height()>c&&!a.widthOnly&&!a.allowOverflow?(b.css("font-size",l),a.fail&&a.fail(this),e("[TextFill] Failure { Current Width: "+b.width()+", Maximum Width: "+f+", Current Height: "+b.height()+", Maximum Height: "+c+" }")):a.success&&a.success(this)}else a.fail&&
a.fail(this),e("[TextFill] Failure { Current Width: "+b.width()+", Maximum Width: "+f+", Current Height: "+b.height()+", Maximum Height: "+c+" }")});a.complete&&a.complete(this);e("[TextFill] End Debug");return this}})(function(){return"undefined"!==typeof module&&module.exports?require("jquery"):window.jQuery}());
jQuery(document).ready(function($) {
	var mh = $('#main-header').height();
	var classes = "<?php echo $dh_text_logo_classes; ?>"
	$('#logo').hide().before( "<div id='dh_text_logo' style='height:" + mh +"'><span class='" + classes + "'><?php echo $dh_custom_logo_text; ?></span></div>");
	$('body.et_mobile_device.divi-hacks-app-mobile-header #dh_text_logo').css('max-height', '50px !important');
	$('body:not(.et_mobile_device):not(.divi-hacks-app-mobile-header) #dh_text_logo, body:not(.et_mobile_device):not(.divi-hacks-app-mobile-header) #dh_text_logo, body.divi-hacks-app-mobile-header:not(.et_mobile_device) #dh_text_logo').css('min-height', '" + mh + "px');
	$('body').addClass('divi-hacks-text-logo');
	var nw = $("#top-menu-nav").width();
	var pw = $(".et_header_style_left #main-header .logo_container").width();
	var lw = pw - nw - 50;
	$('body.et_header_style_left #dh_text_logo').css('max-width',lw).css('width',lw);
	var vnh = <?php echo $dh_text_logo_font_size; ?> * 3;
	$('body.et_header_style_centered:not(.et_vertical_nav) #dh_text_logo').textfill( { 
		changeLineHeight: true,
		widthOnly: false,
		minFontPixels: 20,
		maxFontPixels: <?php echo $dh_text_logo_font_size; ?>,
		explicitHeight: <?php echo $dh_text_logo_font_size; ?>,
	});
	$('body.et_header_style_centered.et_vertical_nav #dh_text_logo, body.et_header_style_left.et_vertical_nav #dh_text_logo').textfill( { 
		changeLineHeight: true,
		widthOnly: false,
		minFontPixels: 20,
		maxFontPixels: <?php echo $dh_text_logo_font_size; ?>,
		explicitHeight: vnh,
	});
	$('body.et_header_style_left #dh_text_logo, body.et_header_style_slide #dh_text_logo, body.et_header_style_fullscreen #dh_text_logo').textfill( { 
		changeLineHeight: true,
		minFontPixels: 20,
		maxFontPixels: <?php echo $dh_text_logo_font_size; ?>,
	});
	$('body.et_header_style_split #dh_text_logo').textfill( { 
		changeLineHeight: true,
		minFontPixels: 20,
		maxFontPixels: <?php echo $dh_text_logo_font_size; ?>,
	});
	// var lt = mh / 4 - 5;
	// var transformd = "translateY(-" + lt + "px)";
	// $('body.et_header_style_split #dh_text_logo span').css('transform', transformd);
});
</script>
<style id="dh-text-logo">
	body.is-desktop #dh_text_logo {
	    display: -webkit-box;
		display: -moz-box;
		display: -ms-flexbox;
		display: -webkit-flex;
		display: flex;
		flex-direction: column;
		justify-content:center;
	}
	body.is-desktop.et_header_style_left #dh_text_logo {
		height: 100%;
	}
	<?php
		$dh_text_logo_alignment = get_theme_mod('dh_text_logo_alignment', 'center');
		if ( $dh_text_logo_alignment == 'left' ) { ?>
			/** Text Logo Left Alignment **/
			body.et_header_style_left #dh_text_logo,
			body.et_vertical_nav #dh_text_logo {
				text-align:left;
				width:100 !important;
			} 
			body.et_header_style_centered #dh_text_logo {
				align-items: flex-start;
			    text-align:left;
			} 
			<?php
		} if ( $dh_text_logo_alignment == 'center' ) { ?>
			/** Text Logo Center Alignment **/
			body.et_header_style_left #dh_text_logo,
			body.et_vertical_nav #dh_text_logo {
				text-align:center;
				width:100% !important;
			} 
			body.et_header_style_centered #dh_text_logo {
				align-items: center;
			    text-align:center;
			} 
			<?php
		} if ( $dh_text_logo_alignment == 'right' ) { ?>
			/** Text Logo Right Alignment **/
			body.et_header_style_left #dh_text_logo,
			body.et_vertical_nav #dh_text_logo {
				text-align:right;
				width:100% !important;
			} 
			body.et_header_style_centered #dh_text_logo {
				align-items: flex-end;
			    text-align:right;
			} 
			<?php
		}  ?>
#dh_text_logo span {
    line-height: 1.25em !important;
    display:block;
}
#dh_text_logo:not(:first-child) {
    display: none !important;
}
body.et_header_style_centered.et_vertical_nav #main-header .logo_container {
	width: calc(100% + 60px) !important;
    margin-left: -30px;
}
body.divi-hacks-text-logo span.logo_helper,
body.divi-hacks-text-logo img#logo {
    display: none !important;
}
body #dh_text_logo {
	color: <?php echo $dh_text_logo_text_color; ?>;
    font-family: <?php echo $dh_text_logo_font; ?>;
    <?php echo get_theme_mod( 'dh_custom_text_logo_css'); ?>
    word-wrap: normal;
    white-space: pre-line;
    height:100%;
}

body #dh_text_logo:hover {
    <?php echo get_theme_mod( 'dh_custom_text_logo_css_hover'); ?>
    color: <?php echo $dh_text_logo_text_color_hover; ?>;
}
body.is-mobile.divi-hacks-app-mobile-header #dh_text_logo * {
	max-height:50px !important;
}
body.divi-hacks-text-logo:not(.et_header_style_split) .logo_container {
	display: -webkit-box;
	display: -moz-box;
	display: -ms-flexbox;
	display: -webkit-flex;
	display: flex;
	flex-direction: column;
	align-content:center;
	justify-content:center;
}
body.divi-hacks-text-logo.et_header_style_left .logo_container {
	display: -webkit-box;
    display: -moz-box;
    display: -ms-flexbox;
    display: -webkit-flex;
    display: flex;
    flex-direction: row;
    justify-content: flex-start;
}
body.divi-hacks-text-logo .et_pb_menu_hidden #dh_text_logo {
    opacity: 0;
    -webkit-transform: translateY(50%);
    -moz-transform: translateY(50%);
    -ms-transform: translateY(50%);
    -o-transform: translateY(50%);
    transform: translateY(50%);
    transition: 0.5s ease-in-out all;
}
body.divi-hacks-text-logo .et_pb_menu_visible #dh_text_logo {
    opacity: 1;
    -webkit-transform: translateY(0%);
    -moz-transform: translateY(0%);
    -ms-transform: translateY(0%);
    -o-transform: translateY(0%);
    transform: translateY(0%);
    transition: 0.5s ease-in-out all;
}
body.is-mobile.divi-hacks-text-logo.divi-hacks-app-mobile-header #dh_text_logo span {
    -webkit-transform: scale(0.79) !important;
    -moz-transform: scale(0.79) !important;
    -ms-transform: scale(0.79) !important;
    -o-transform: scale(0.79) !important;
    transform: scale(0.79) !important;
    transform-origin:left top;
}

</style>
			<?php }
			add_action('wp_head', 'dh_text_logo');
		}