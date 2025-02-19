<?php
 /*
 ** Plugin Name: Divi Hacks
 ** Version: 1.19.9
 ** Plugin URI: https://divihacks.com
 ** Description: Simple and elegant hacks to power up your Divi website
 ** Author: Divi Hacks - Divi Life
 ** Author URI: https://divilife.com/
 ** License: GPL3
 ** License URI: https://www.gnu.org/licenses/gpl.html
 ** Text Domain: divi-hacks
 */
 
// Make sure we don't expose any info if called directly or may someone integrates this plugin in a theme
if ( !defined('ABSPATH') || !function_exists( 'add_action' ) ) {
	
	return;
}

$all_plugins = apply_filters( 'active_plugins', get_option( 'active_plugins' ) );

$current_theme = wp_get_theme();

if ( ( $current_theme->get( 'Name' ) !== 'Divi' && $current_theme->get( 'Template' ) !== 'Divi' ) 
	&& ( $current_theme->get( 'Name' ) !== 'Extra' && $current_theme->get( 'Template' ) !== 'Extra' )
	&& apply_filters( 'divi_ghoster_ghosted_theme', get_option( 'agsdg_ghosted_theme' ) ) !== 'Divi' ) {
	
	if ( stripos( implode( $all_plugins ), 'divi-builder.php' ) === false ) {
		
		function dhs_divibuilder_required() {
			
			$class = 'notice notice-error';
			$message = __( 'Divi Hacks requires plugin: Divi Builder', 'divi-hacks' );
			
			printf( '<div class="%1$s"><p>%2$s</p></div>', esc_attr( $class ), esc_html( $message ) );
		}
		add_action( 'admin_notices', 'dhs_divibuilder_required' );
		
		return;
	}
}
 
define( 'DIVI_HACKS_VERSION', '1.19.9' );
define( 'DIVI_HACKS_PLUGIN_BASENAME', plugin_basename( __FILE__ ) );
define( 'DIVI_HACKS_PLUGIN_DIR', plugin_dir_path( __FILE__ ) );
define( 'DIVI_HACKS_PLUGIN_URL', plugin_dir_url( __FILE__ ));

$edd_updater = DIVI_HACKS_PLUGIN_DIR . 'updater/updater.php';
$edd_updater_admin = DIVI_HACKS_PLUGIN_DIR . 'updater/updater-admin.php';

if ( file_exists( $edd_updater ) && file_exists( $edd_updater_admin ) ) {

	// Load the API Key library if it is not already loaded
	if ( ! class_exists( 'edd_divihacks' ) ) {
		
		require_once( $edd_updater );
		require_once( $edd_updater_admin );
	}
	
	define( 'DIVI_HACKS_UPDATER', TRUE );
}
else {
	
	define( 'DIVI_HACKS_UPDATER', FALSE );
}

require ( 'register-hacks.php' ); // Switch Array

// Async load
function dh_async_scripts($url) {
    if ( strpos( $url, '#asyncload') === false )
        return $url;
    else if ( is_admin() )
        return str_replace( '#asyncload', '', $url );
    else
	return str_replace( '#asyncload', '', $url )."' async"; 
    }
add_filter( 'clean_url', 'dh_async_scripts', 11, 1 );

function dh_switch_plugin_styles() { 
    //wp_enqueue_style( 'dh-styles', DIVI_HACKS_PLUGIN_URL . 'styles/index.php',true,DIVI_HACKS_VERSION,'all'); // Styles
    
	wp_enqueue_style( 'dh-misc', DIVI_HACKS_PLUGIN_URL . 'styles/misc.css',true,DIVI_HACKS_VERSION,'all');
	wp_enqueue_style( 'dh-ums', DIVI_HACKS_PLUGIN_URL . 'styles/user-meta-shortcode.css',true,DIVI_HACKS_VERSION,'all'); // Auto On
	wp_enqueue_style( 'dh-mobile-menu', DIVI_HACKS_PLUGIN_URL . 'styles/mobile-menu.css',true,DIVI_HACKS_VERSION,'all');
	$customizer_hacks = get_option('theme_mods_Divi');
	wp_enqueue_style( 'dh-preloader', DIVI_HACKS_PLUGIN_URL . 'styles/preloader.css',true,DIVI_HACKS_VERSION,'all');
	wp_enqueue_style( 'dh-docs_menu', DIVI_HACKS_PLUGIN_URL . 'styles/docs_menu.css',true,DIVI_HACKS_VERSION,'all');
	wp_enqueue_style( 'dh-tooltips', DIVI_HACKS_PLUGIN_URL . 'styles/tooltips.css',true,DIVI_HACKS_VERSION,'all');
	if(get_option('dh_bg-effects')) {
	    wp_enqueue_style( 'dh_bg-effects', DIVI_HACKS_PLUGIN_URL . 'styles/bg-effects.css',true,DIVI_HACKS_VERSION,'all');
	}
	if(get_option('dh_custom-menu-styles')) {
	    wp_enqueue_style( 'dh_custom-menu-styles', DIVI_HACKS_PLUGIN_URL . 'styles/menu-styles.css',true,DIVI_HACKS_VERSION,'all');
	}
	if(get_option('dh_custom-dividers')) {
	    wp_enqueue_style( 'dh_custom-dividers', DIVI_HACKS_PLUGIN_URL . 'styles/custom-dividers.css',true,DIVI_HACKS_VERSION,'all');
	}
	if(get_option('dh_wider-popup')) {
	    wp_enqueue_style( 'dh_wider-popup', DIVI_HACKS_PLUGIN_URL . 'styles/vb-popup.css',true,DIVI_HACKS_VERSION,'all');
	}
	if(get_option('dh_password-protected')) {
	    wp_enqueue_style( 'dh_password-protected', DIVI_HACKS_PLUGIN_URL . 'styles/pass-protected.css',true,DIVI_HACKS_VERSION,'all');
	}
	if(get_option('dh_custom-footer')) {
	    wp_enqueue_style( 'dh_custom-footer', DIVI_HACKS_PLUGIN_URL . 'styles/custom-footer.css',true,DIVI_HACKS_VERSION,'all');
	}
	if(get_option('dh_custom-tables')) {
	    wp_enqueue_style( 'dh_custom-tables', DIVI_HACKS_PLUGIN_URL . 'styles/custom-tables.css',true,DIVI_HACKS_VERSION,'all');
	}

	if(get_option('dh_custom-dropdowns')) {
	    wp_enqueue_style( 'dh_custom-dropdowns', DIVI_HACKS_PLUGIN_URL . 'styles/custom-dropdowns.css',true,DIVI_HACKS_VERSION,'all');
	}
	if(get_option('dh_device-specific-alignment')) {
	    wp_enqueue_style( 'dh_device-specific-alignment', DIVI_HACKS_PLUGIN_URL . 'styles/device-alignment.css',true,DIVI_HACKS_VERSION,'all');
	}
	if(get_option('dh_reveal-main-footer') || get_option('dh_reveal-custom-footer')) {
	    wp_enqueue_style( 'dh_reveal-main-footer', DIVI_HACKS_PLUGIN_URL . 'styles/reveal-footer.css',true,DIVI_HACKS_VERSION,'all');
	}
	wp_enqueue_style( 'dh-lightbox', DIVI_HACKS_PLUGIN_URL . 'styles/lightbox.css',true,DIVI_HACKS_VERSION,'all'); // Auto On
	if(get_option('dh_sticky')) {
	    wp_enqueue_style( 'dh_sticky', DIVI_HACKS_PLUGIN_URL . 'styles/sticky.css',true,DIVI_HACKS_VERSION,'all');
	}
	if(get_option('dh_custom-tab-alignment')) {
	    wp_enqueue_style( 'dh_custom-tab-alignment', DIVI_HACKS_PLUGIN_URL . 'styles/custom-tabs.css',true,DIVI_HACKS_VERSION,'all');
	}
	if(get_option('dh_autohide-admin-bar')) {
	    wp_enqueue_style( 'dh_autohide-admin-bar', DIVI_HACKS_PLUGIN_URL . 'styles/autohide-admin-bar.css',true,DIVI_HACKS_VERSION,'all');
	}
	if(get_option('dh_full-width-posts')) {
	    wp_enqueue_style( 'dh_full-width-posts', DIVI_HACKS_PLUGIN_URL . 'styles/fullwidth-posts.css',true,DIVI_HACKS_VERSION,'all');
	}
	wp_enqueue_style( 'dh_body-class', DIVI_HACKS_PLUGIN_URL . 'styles/body-classes.css',true,DIVI_HACKS_VERSION,'all');
	if(get_option('dh_nav-columns')) {
	    wp_enqueue_style( 'dh_nav-columns', DIVI_HACKS_PLUGIN_URL . 'styles/menu-columns.css',true,DIVI_HACKS_VERSION,'all');
	}
	if(get_option('dh_font-awesome-icons')) {
	    wp_enqueue_style( 'dh_font-awesome-icons', DIVI_HACKS_PLUGIN_URL . 'styles/fa-icons.css',true,DIVI_HACKS_VERSION,'all');
	}
	if(get_option('dh_divider-shadows')) {
	    wp_enqueue_style( 'dh_divider-shadows', DIVI_HACKS_PLUGIN_URL . 'styles/divider-shadows.css',true,DIVI_HACKS_VERSION,'all');
	}
	if(get_option('dh_collapse-mobile-submenus')) {
	    wp_enqueue_style( 'dh_collapse-mobile-submenus', DIVI_HACKS_PLUGIN_URL . 'styles/collapse-menu.css',true,DIVI_HACKS_VERSION,'all');
	}
	if(get_option('dh_row-layouts')) {
	    wp_enqueue_style( 'dh_row-layouts', DIVI_HACKS_PLUGIN_URL . 'styles/row-layouts.css',true,DIVI_HACKS_VERSION,'all');
	}
	if(get_option('dh_vb-module-hover')) {
	    wp_enqueue_style( 'dh_vb-module-hover', DIVI_HACKS_PLUGIN_URL . 'styles/better-vb-hover.css',true,DIVI_HACKS_VERSION,'all');
	}
	if(get_option('dh_blurb-effects')) {
	    wp_enqueue_style( 'dh_blurb-effects', DIVI_HACKS_PLUGIN_URL . 'styles/blurb-effects.css',true,DIVI_HACKS_VERSION,'all');
	}
	if(get_option('dh_testimonial-styles')) {
	    wp_enqueue_style( 'dh_testimonial-styles', DIVI_HACKS_PLUGIN_URL . 'styles/testimonials.css',true,DIVI_HACKS_VERSION,'all');
	}
	if(get_option('dh_blurb-styles')) {
	    wp_enqueue_style( 'dh_blurb-styles', DIVI_HACKS_PLUGIN_URL . 'styles/blurb-styles.css',true,DIVI_HACKS_VERSION,'all');
	}
	if(get_option('dh_module-styles')) {
	    wp_enqueue_style( 'dh_module-styles', DIVI_HACKS_PLUGIN_URL . 'styles/module-styles.css',true,DIVI_HACKS_VERSION,'all');
	}
	if(get_option('dh_text-styles')) {
	    wp_enqueue_style( 'dh_text-styles', DIVI_HACKS_PLUGIN_URL . 'styles/text-styles.css',true,DIVI_HACKS_VERSION,'all');
	}
	if(get_option('dh_blog-styles')) {
	    wp_enqueue_style( 'dh_blog-styles', DIVI_HACKS_PLUGIN_URL . 'styles/blog-styles.css',true,DIVI_HACKS_VERSION,'all');
	}
	if(get_option('dh_archive-grid')) {
	    wp_enqueue_style( 'dh_archive-grid', DIVI_HACKS_PLUGIN_URL . 'styles/archive-grid.css',true,DIVI_HACKS_VERSION,'all');
	}
	if(get_option('dh_fixed-header')) {
	    wp_enqueue_style( 'dh_fixed-header', DIVI_HACKS_PLUGIN_URL . 'styles/fixed-mobile-header.css',true,DIVI_HACKS_VERSION,'all');
	}
	if(get_option('dh_app-mobile-header')) {
	    wp_enqueue_style( 'dh_app-mobile-header', DIVI_HACKS_PLUGIN_URL . 'styles/app-header.css',true,DIVI_HACKS_VERSION,'all');
	}
	if(get_option('dh_blur-parallax-bg')) {
	    wp_enqueue_style( 'dh_blur-parallax-bg', DIVI_HACKS_PLUGIN_URL . 'styles/blur-bg.css',true,DIVI_HACKS_VERSION,'all');
	}
	if(get_option('dh_vertical-center-section') || get_option('dh_vertical-center-row') || get_option('dh_vertical-center-module')) {
	    wp_enqueue_style( 'dh_vertical-center-section', DIVI_HACKS_PLUGIN_URL . 'styles/valign-center.css',true,DIVI_HACKS_VERSION,'all');
	}
	if(get_option('dh_post-it-shadow')) {
	    wp_enqueue_style( 'dh_post-it-shadow', DIVI_HACKS_PLUGIN_URL . 'styles/postit-shadows.css',true,DIVI_HACKS_VERSION,'all');
	}
	if(get_option('dh_image-shapes')) {
	    wp_enqueue_style( 'dh_image-shapes', DIVI_HACKS_PLUGIN_URL . 'styles/image-shapes.css',true,DIVI_HACKS_VERSION,'all');
	}
	if(get_option('dh_element-shapes')) {
	    wp_enqueue_style( 'dh_element-shapes', DIVI_HACKS_PLUGIN_URL . 'styles/module-shapes.css',true,DIVI_HACKS_VERSION,'all');
	}
	if(get_option('dh_gradient-overlay-parallax')) {
	    wp_enqueue_style( 'dh_gradient-overlay-parallax', DIVI_HACKS_PLUGIN_URL . 'styles/gradient-overlay.css',true,DIVI_HACKS_VERSION,'all');
	}
	if (get_option('dh_instagram-filters')) {
	    wp_enqueue_style( 'dh_instagram-filters', DIVI_HACKS_PLUGIN_URL . 'styles/insta-filters.css',true,DIVI_HACKS_VERSION,'all');
	}
	if(get_option('dh_hover-animations') || get_option('dh_animate-anything') ) {
	    wp_enqueue_style( 'dh_hover-animations', DIVI_HACKS_PLUGIN_URL . 'styles/animations.css',true,DIVI_HACKS_VERSION,'all'); 
	}
	wp_enqueue_style( 'dh_custom-archives', DIVI_HACKS_PLUGIN_URL . 'styles/custom-archives.css',true,DIVI_HACKS_VERSION,'all');
	if(get_option('dh_full-width-archive')) {
	    wp_enqueue_style( 'dh_full-width-archive', DIVI_HACKS_PLUGIN_URL . 'styles/fullwidth-archives.css',true,DIVI_HACKS_VERSION,'all');
	}
	wp_enqueue_style( 'dh_menu-animations', DIVI_HACKS_PLUGIN_URL . 'styles/menu-animations.css',true,DIVI_HACKS_VERSION,'all');
	wp_enqueue_style( 'dh_helpful-links', DIVI_HACKS_PLUGIN_URL . 'styles/helpful-links.css',true,DIVI_HACKS_VERSION,'all');

    wp_enqueue_script( 'dh-jquery', DIVI_HACKS_PLUGIN_URL . 'scripts/dh_snippets.js#asyncload', array( 'jquery' ), DIVI_HACKS_VERSION, true ); // jQuery	 
	$classes = get_body_class();
	if (in_array('divi-hacks-custom-dividers',$classes)) {
	    wp_enqueue_script( 'dh-dividers', DIVI_HACKS_PLUGIN_URL . 'scripts/dh_dividers.js#asyncload', array( 'jquery' ), DIVI_HACKS_VERSION, true ); // jQuery
	}
   	if (in_array('divi-hacks-font-awesome-icons',$classes)) {
		wp_enqueue_style( 'font-awesome-css', DIVI_HACKS_PLUGIN_URL . 'styles/fontawesome-all.css',true,DIVI_HACKS_VERSION,'all'); // Styles
	}
}
function dh_switch_plugin_admin_styles() { 
	wp_enqueue_style( 'hacks-divipanel', DIVI_HACKS_PLUGIN_URL . 'styles/admin/panel.min.css', array(), '1.0.0', 'all' );
    wp_enqueue_style( 'hacks_adminbar', DIVI_HACKS_PLUGIN_URL . 'styles/adminbar-theme-builder.css', true, '','all');
    wp_enqueue_style( 'hacks_admin', DIVI_HACKS_PLUGIN_URL . 'styles/plugin_admin.css', true, DIVI_HACKS_VERSION,'all');
}
add_action( 'admin_enqueue_scripts', 'dh_switch_plugin_admin_styles', 0 );


function dh_magnific_popup( $assets_list ) {
	
		wp_enqueue_script( 'magnific-popup', DIVI_HACKS_PLUGIN_URL . 'scripts/magnific-popup.js', array( 'jquery' ), '1.3.0', true );
		wp_enqueue_style( 'magnific-popup', DIVI_HACKS_PLUGIN_URL . 'styles/magnific_popup.css',true, '1.3.0', 'all' );
}

function dh_switch_setting_set($key, $val) {
	global $dh_switch_matrix;
	foreach ($dh_switch_matrix as $switch) {
		if ($switch['option'] == $key) {
			update_option( "dh_{$key}", $val );
			return true;
		}
	}
	return false;
}
function dh_switch_setting_get($key, $default = false) {
	return get_option( "dh_{$key}", $default);
}
function dh_switch_admin_head_scripts() { ?>
	<script type="text/javascript" id="Gritty_WidgetLinks">
		var dhajaxurl = '<?php print esc_url( admin_url('admin.php') ); ?>';
		(function($) {
			$(function() {
				$('#dh-custom-css').click(function() {
					var css_value = $('#admin-custom-css').val();
					$.ajax({
		                    url: dhajaxurl,
		                    type: "POST",
		                    data: 'admin-dashboard-custom-css=' + css_value + '&<?php echo MD5("DiviHacks");?>=1', 
		                    success: function (response) {
								location.reload();
		                    },
		                    error: function (jqXhr, e, responseText) {
		                        console.log(arguments);
		                        alert("Oops. Something went wrong: " + responseText);
		                    }
		                });
				});
			});
		    $(function() {
		        $("label[for^=myonoffswitch]")
		        .each(function() {
		            // ------------------------------ Which label was clicked? -----------------------------------
		            var which = $(this).attr("for");
		            var cls = $(this).data("class");
		            if ( $("input[id=" + which + "]").is(":checked") ) {
		                $("body").addClass(cls);
		            } else {
		                $("body").removeClass(cls);
		            }

		            $(this).parents(".onoffswitch").on("click", function() {
		                if (!$("input[id=" + which + "]").is(":checked")) {
		                    $("body").addClass(cls);
		                } else {
		                    $("body").removeClass(cls);
		                }

		                var val = $("input[id=" + which + "]").is(":checked") ? "1" : "0";
		                console.info("Set " + which + " to " + val)

		                $.ajax({
		                    url: dhajaxurl,
		                    type: "POST",
		                    data: $("input[id=" + which + "]").attr("name") + "=" + val + "&<?php echo MD5("DiviHacks");?>=1", 
		                    success: function (response) {
		                    },
		                    error: function (jqXhr, e, responseText) {
		                        console.log(arguments);
		                        alert("Oops. Something went wrong: " + responseText);
		                    }
		                });
		            });
		        });
		    });
		})(jQuery);
	</script> <?php 
}

// Settings Menu Item -----------------------------------------------------------------------------------------
class divi_hacks_settings {

    public function __construct () { add_action('admin_menu', array(&$this, 'dh_admin_menu'), 100); 
                                   }

    function dh_admin_menu() {

		$settings_page = 'divilife_edd_divihacks_license';
		
		if ( isset( $_POST['option_page'] ) ) {
			
			$option_page = sanitize_text_field( wp_unslash( $_POST['option_page'] ) );
			
			if ( $option_page === $settings_page && isset( $_POST['action'] ) ) { // phpcs:ignore WordPress.Security.NonceVerification.NoNonceVerification -- logic for nonce checks are following
				if ( isset( $_POST['_wpnonce'] ) ) {
					
					$wpnonce = sanitize_text_field( wp_unslash( $_POST['_wpnonce'] ) );
					
					if ( wp_verify_nonce( $wpnonce, 'dh_nonce' ) ) {
						
						dh_save_data();
					}
				}
			}
		}
		
		//$page = add_submenu_page('admin.php', 'Divi Hacks', 'Divi Hacks', 'manage_options', 'divi-hack-settings', array(&$this, 'switch_page'));
		add_submenu_page('admin.php?page=divi-hacks-settings', 'Options', 'Options', 'manage_options', 'wiki-options', array(&$this, 'switch_page') );
		add_submenu_page(
			'et_divi_options',
		__( 'Divi Hacks', 'divi-hacks' ), 
		__( 'Divi Hacks', 'divi-hacks' ),
			'manage_options', 
			'divi-hacks-settings', 
			array(&$this, 'switch_page'));
	}
	
// Switch Settings Page ------------------------------------------------------------------

function switch_page() {
	if (!Divi_Hacks_has_license_key()) {
		return Divi_Hacks_activate_page();
	}
	if ( isset( $_GET[ 'tab' ] ) ) {
		$active_tab = $_GET[ 'tab' ];
	} else {
		$active_tab = 'all_options' ;
	} ?>
<script>
	jQuery(document).ready(function($){
		$("#openall").click(function(){
			$(".divi-hacks-description").addClass("visible");
			$(".divi-hacks-open-info").addClass("open");
			$("#openall").addClass("hidden").removeClass("visible");
			$("#closeall").removeClass("hidden").addClass("visible");
		});
		$("#closeall").click(function(){
			$(".divi-hacks-description").removeClass("visible");
			$(".divi-hacks-open-info").removeClass("open");
			$("#closeall").addClass("hidden").removeClass("visible");
			$("#openall").removeClass("hidden").addClass("visible");
		});
		var button = $("button#dh-custom-css");
		button.on("click", function() {
		  button.data("text-original", button.text());
		  button.text(button.data("text-swap"));
		});
		var textareas = document.getElementsByTagName('textarea');
		var count = textareas.length;
		for(var i=0;i<count;i++){
		    textareas[i].onkeydown = function(e){
		        if(e.keyCode==9 || e.which==9){
		            e.preventDefault();
		            var s = this.selectionStart;
		            this.value = this.value.substring(0,this.selectionStart) + "\t" + this.value.substring(this.selectionEnd);
		            this.selectionEnd = s+1; 
		        }
		    }
		}
		jQuery('#search-hacks').on('keyup', function() {
			var searchVal = jQuery(this).val();
			var filterItems = jQuery('[data-filter-item]');

			if ( searchVal != '' ) {
				filterItems.addClass('hide-hack');
				jQuery('[data-filter-item][data-filter-name*="' + searchVal.toLowerCase() + '"]').removeClass('hide-hack');
			} else {
				filterItems.removeClass('hide-hack');
			}
		});
		$(function() {
		  $("#search-hacks").focus();
		});
	});
</script>
<div class="hacks-page">
	<div class="hacks-header">
		<div class="hacks-title">
		   <h1><a href="https://divihacks.com" target="_blank"><?php echo __('Divi Hacks', 'divi-hacks'); ?></a></h1>
		   <span class="customizer-link"><a href="<?php echo admin_url( 'customize.php?autofocus[panel]=divi_hack_options' ); ?>"><?php echo __( 'Hacks Customizer', 'divi-hacks' ); ?></a></span>
		</div>
		<div class="hacks-nav">
			<h2 class="nav-tab-wrapper">
				<a href="?page=divi-hacks-settings&tab=all_options" class="nav-all nav-tab <?php echo $active_tab == 'all_options' ? 'nav-tab-active' : ''; ?>">All</a>
				<a href="?page=divi-hacks-settings&tab=background_options" class="nav-background nav-tab <?php echo $active_tab == 'background_options' ? 'nav-tab-active' : ''; ?>">Background</a>
				<a href="?page=divi-hacks-settings&tab=footer_options" class="nav-footer nav-tab <?php echo $active_tab == 'footer_options' ? 'nav-tab-active' : ''; ?>">Footer</a>
				<a href="?page=divi-hacks-settings&tab=alignment_options" class="nav-alignment nav-tab <?php echo $active_tab == 'alignment_options' ? 'nav-tab-active' : ''; ?>">Layout</a>
				<a href="?page=divi-hacks-settings&tab=design_options" class="nav-design nav-tab <?php echo $active_tab == 'design_options' ? 'nav-tab-active' : ''; ?>">Design</a>
				<a href="?page=divi-hacks-settings&tab=mobile_options" class="nav-mobile nav-tab <?php echo $active_tab == 'mobile_options' ? 'nav-tab-active' : ''; ?>">Mobile</a>
				<a href="?page=divi-hacks-settings&tab=blog_options" class="nav-blog nav-tab <?php echo $active_tab == 'blog_options' ? 'nav-tab-active' : ''; ?>">Blog</a>
				<a href="?page=divi-hacks-settings&tab=animation_options" class="nav-animation nav-tab <?php echo $active_tab == 'animation_options' ? 'nav-tab-active' : ''; ?>">Animation</a>
				<a href="?page=divi-hacks-settings&tab=icon_options" class="nav-icon nav-tab <?php echo $active_tab == 'icon_options' ? 'nav-tab-active' : ''; ?>">Icon</a>
				<a href="?page=divi-hacks-settings&tab=admin_options" class="nav-admin nav-tab <?php echo $active_tab == 'admin_options' ? 'nav-tab-active' : ''; ?>">Admin</a>
				<a href="?page=divi-hacks-settings&tab=other_options" class="nav-other nav-tab <?php echo $active_tab == 'other_options' ? 'nav-tab-active' : ''; ?>">Other</a>
				<a href="?page=divi-hacks-settings&tab=auto_options" class="nav-auto-on nav-tab <?php echo $active_tab == 'auto_options' ? 'nav-tab-active' : ''; ?>">Auto-On</a>
				<a href="?page=divi-hacks-settings&tab=settings" class="nav-settings nav-tab <?php echo $active_tab == 'settings' ? 'nav-tab-active' : ''; ?>">Settings</a>
			</h2>
		</div>
	</div>
    <div id="dh-hacks" class="page-container"> <?php
		if ($active_tab == 'settings') {
			Divi_Hacks_license_key_box(); 
		} else { ?>
			<div class="onoffswitch-all">
				<button id="openall" >Show all Descriptions</button>
				<button id="closeall" class="hidden">Hide all Descriptions</button>
				<input type="text" id="search-hacks" placeholder="Search..."	>
			</div>
			
			<?php 
			global $dh_switch_matrix;
		    for ( $i = 0; $i < count($dh_switch_matrix); $i++ ) {
		        $obj = $dh_switch_matrix[$i];
		        $n = ($i+1);
		        $opt = isset($obj['option'])?$obj['option']:"unknown_{$n}"; ?>
		   		<script type="text/javascript">
					jQuery(document).ready(function($){
				        $(".divi_page_divi-hacks-settings .notice, .divi_page_divi-hacks-settings .error").prependTo(".divi_page_divi-hacks-settings .hacks-page .page-container").css("margin-top", "30px");
				        $(".hack-<?php echo $n;?> .divi-hacks-open-info").click(function(){
				        	$(".hack-<?php echo $n;?> .divi-hacks-description").toggleClass("visible");
				        });
				        $(".hack-<?php echo $n;?> .divi-hacks-open-info").click(function(){
				        	$(".hack-<?php echo $n;?> .divi-hacks-open-info").toggleClass("open");
				        });
					});
			    </script>

			    <div class="divi-hack <?php echo isset($obj['category'])?$obj['category']:"uncategorized";?> hack-<?php echo $n;?>" id="<?php echo isset($obj['option'])?$obj['option']:"unset";?>" data-filter-item data-filter-name="<?php echo isset($obj['title'])?str_replace(" ", "-",strtolower($obj['title'])):"Unknown"; ?>">
			        <div class="image-container">
			            <img src="<?php echo plugins_url( isset($obj['image'])?$obj['image']:"images/placeholder.png", __FILE__ ) ?>" >
			        </div>
			        <div class="title-area">
			            <h3><?php echo isset($obj['title'])?$obj['title']:"Unknown";?></h3>
			            <p><?php echo isset($obj['more'])?$obj['more']:"No code selected";?></p>
			        </div>
					<?php if($opt != 'admin-dashboard-custom-css' ) { ?>
			        <div class="onoffswitch">
			            <input type="checkbox" name="<?php echo $opt;?>" class="onoffswitch-checkbox" id="myonoffswitch-<?php echo $n;?>" value="true"<?php echo (dh_switch_setting_get($opt, '0') == '0' ? "" : " checked='checked'");?> /> 
			            <label class="onoffswitch-label" for="myonoffswitch-<?php echo $n;?>" data-class="<?php echo $obj['class'];?>">
			                <span class="onoffswitch-inner"></span>
			                <span class="onoffswitch-switch"></span>
			            </label>
			        </div>
			        <span class="more-button divi-hacks-open-info"></span>
			        <div class="divi-hacks-description info-container">
			          <p><?php echo isset($obj['description'])?$obj['description']:"No description";?></p>
			        </div>
					<?php } else { ?>
					<textarea name="<?php echo $opt;?>" class="" id="admin-custom-css" style="width:100%;height:100px;" placeholder="Add custom CSS here..."><?php echo get_option("dh_".$opt); ?></textarea>
					<button id="dh-custom-css" data-text-swap="Saving">Save</button>
					<?php } ?>
			   </div> 
			   <?php
			}
		} ?>
	</div>
	<div class="dh-sidebar"></div>
</div>
    
<style type="text/css">
	/** Splitting Switches into tabs **/
	.hide-hack { display:none !important; }
	.divi-hack { display: block; }

<?php if( $active_tab == 'all_options' ) { ?>
	.divi-hack { /*display: block !important; */}
	<?php } if( $active_tab == 'background_options' ) {?>
	.divi-hack:not(.background) { display: none; }
	<?php } else if( $active_tab == 'header_options' ) {?>
	.divi-hack:not(.header) { display: none; }
	<?php } else if( $active_tab == 'footer_options' ) {?>
	.divi-hack:not(.footer) { display: none; }
	<?php } else if( $active_tab == 'alignment_options' ) {?>
	.divi-hack:not(.alignment) { display: none; }
	<?php } else if( $active_tab == 'design_options' ) {?>
	.divi-hack:not(.design) { display: none; }
	<?php } else if( $active_tab == 'mobile_options' ) {?>
	.divi-hack:not(.mobile) { display: none; }
	<?php } else if( $active_tab == 'blog_options' ) {?>
	.divi-hack:not(.blog) { display: none; }
	<?php } else if( $active_tab == 'animation_options' ) {?>
	.divi-hack:not(.animation) { display: none; }
	<?php } else if( $active_tab == 'icon_options' ) {?>
	.divi-hack:not(.icon) { display: none; }
	<?php } else if( $active_tab == 'admin_options' ) {?>
	.divi-hack:not(.admin) { display: none; }
	<?php } else if( $active_tab == 'other_options' ) {?>
	.divi-hack:not(.other) { display: none; }
	<?php } else if( $active_tab == 'auto_options' ) {?>
	.divi-hack:not(.auto-on) { display: none; }
	<?php } else if( $active_tab == 'settings' ) {?>
	.divi-hack:not(.settings) { display: none; }
<?php } ?>
</style>
<?php
}
}
new divi_hacks_settings();

function dh_switch_init() {
	
	if ( Divi_Hacks_has_license_key() ) {
		
		require ( 'scripts/dh_preloader.php' );
		require ( 'scripts/dh_maintenance.php' );
		require ( 'scripts/dh_exit_popup.php' );
		require ( 'scripts/dh_showhidecontent.php' );
		require ( 'scripts/dh_404.php' );
		require ( 'scripts/dh_login.php' );
		require ( 'scripts/dh_category.php' );
		require ( 'scripts/dh_tag.php' );
		require ( 'scripts/dh_cpt.php' );
		require ( 'scripts/dh_archive.php' );
		require ( 'scripts/dh_search.php' );
		require ( 'scripts/dh_author.php' );
		require ( 'scripts/dh_whitelabel.php' );
		require ( 'scripts/dh_misc.php' );
		require ( 'scripts/dh_functions.php' );
		require ( 'scripts/dh_shortcodes.php' );
		require ( 'scripts/dh_featimage.php' );
		require ( 'scripts/dh_docs_menu.php' );
		require ( 'scripts/dh_scrollbars.php' );
		add_action('customize_register', 'dh_switch_options');
		add_filter( 'body_class', 'dh_switch_classes' );
		
		if ( !dh_is_divi_builder_enabled() ) {
			
			add_action( 'admin_head', 'dh_switch_admin_head_scripts' );
			add_action( 'wp_enqueue_scripts', 'dh_magnific_popup', 20 );
		
			require ( 'scripts/dh_style.php' );
			add_action( 'wp_enqueue_scripts', 'dh_switch_plugin_styles' );
		}
	}
}
add_action('plugins_loaded', 'dh_switch_init');

function dh_is_divi_builder_enabled() {
	
	// phpcs:ignore WordPress.Security.NonceVerification.Recommended
	if ( isset( $_GET['et_fb'] ) ) {
		
		// phpcs:ignore WordPress.Security.NonceVerification.Recommended
		$divi_builder_enabled = sanitize_text_field( wp_unslash( $_GET['et_fb'] ) );
		
		// is divi theme builder ?
		if ( $divi_builder_enabled === '1' ) {
			
			return TRUE;
		}
	}
	
	return FALSE;
}


function dh_switch_admin_init() {
	if ( isset($_POST[MD5("DiviHacks")]) && current_user_can('manage_options') ) {
		foreach ( $_POST as $key => $val ) {
			if ( preg_match("/^(0|1)$/", $val ) || ($key == "admin-dashboard-custom-css") ) dh_switch_setting_set($key, $val);
		}
		exit(1);
	}
}
add_action('admin_init', 'dh_switch_admin_init');

// =========== Plugin Action Links =========== 
add_filter( 'plugin_action_links_' . plugin_basename(__FILE__), 'add_action_links' );
	function add_action_links ( $links ) {
 		$mylinks = array(
 			'<a href="' . admin_url( 'admin.php?page=divi-hacks-settings' ) . '">Settings</a>',
 			'<a href="https://divihacks.com/docs" target="_blank">Documentation</a>'
 		);
	return array_merge( $links, $mylinks );
}

// =========== Admin Custom CSS =========== 
	function dh_admin_custom_css() {
		echo '<style>';
		echo get_option('dh_admin-dashboard-custom-css');
		echo '</style>';
	}
	add_action( 'admin_head', 'dh_admin_custom_css' );