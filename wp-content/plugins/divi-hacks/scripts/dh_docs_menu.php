<?php 
function dh_docs_menu_customizer($wp_customize) {
	$wp_customize->add_setting('dh_docs_menu', array(
		'default' => 'On',
		'type'        => 'theme_mod',
		'capability'  => 'edit_theme_options',
		'transport'   => 'refresh',
	));
	$wp_customize->add_control('dh_docs_menu', array(
		'label' => __('Enable Documentation Menu in the Admin Bar'),
		'section' => 'dh_functions_options',
		'type' => 'radio',
		'settings' => 'dh_docs_menu',
		'choices' => array(
    		'On' => 'Enable',
    		'Off' => 'Disable',
  		),
	));
}
add_action('customize_register', 'dh_docs_menu_customizer');

// Documentation Menu
	if ( get_theme_mod( 'dh_docs_menu', 'On' ) == 'On' ) {

		function dh_docs_admin_styles_scripts() { 
		    wp_enqueue_style( 'hacks_docs', DIVI_HACKS_PLUGIN_URL . 'styles/docs_menu.css', true, '','all');
		    wp_enqueue_script( 'dh_admin_scripts', DIVI_HACKS_PLUGIN_URL . 'scripts/admin_scripts.js', array( 'jquery' ), '1.19.0', true ); // jQuery
		}

		function documentation_menu($admin_bar) {
			global $wp_admin_bar;
			if (current_user_can('edit_posts')) {    
				$admin_bar->add_menu( 
					array(
						'id'    => 'dh_docs',
						'title' => 'DH Docs',
						'meta'  => array(    
							'title' => __('Divi Hacks Documentation'),   
						),
					)
				);

				// Layout
					$admin_bar->add_menu( 
						array(
							'id'    => 'dh_layout',
							'parent' => 'dh_docs',
							'title' => 'Layout',
							'meta'  => array(    
								'title' => __('Layout'),
								'class' => 'dh_category'
							),
						)
					);

						// Row Layouts
							$admin_bar->add_menu( 
								array(
									'id'    => 'dh_row_layouts',
									'parent' => 'dh_layout',
									'title' => 'Row Layouts',
									'meta'  => array(    
										'title' => __('Row Layouts'),
										'class' => 'dh_hack'
									),
								)
							);
							ob_start();
							include('docs/row_layouts.php');
							$row_layouts = ob_get_contents();
							ob_end_clean();
							$admin_bar->add_menu( 
								array(
									'id'    => 'dh_row_layouts-content',
									'parent' => 'dh_row_layouts',
									'meta'  => array(        
										'class' => 'dh_hack',
										'html' => $row_layouts,
									),
								)
							);

						// Center Alignment
							$admin_bar->add_menu( 
								array(
									'id'    => 'dh_center_alignment',
									'parent' => 'dh_layout',
									'title' => 'Vertically Centered Alignment',
									'meta'  => array(    
										'title' => __('Vertically Centered Alignment'),
										'class' => 'dh_hack'
									),
								)
							);
							ob_start();
							include('docs/center_alignment.php');
							$center_alignment = ob_get_contents();
							ob_end_clean();
							$admin_bar->add_menu( 
								array(
									'id'    => 'dh_center_alignment-content',
									'parent' => 'dh_center_alignment',
									'meta'  => array(        
										'class' => 'dh_hack',
										'html' => $center_alignment,
									),
								)
							);

						// Lightboxes
							$admin_bar->add_menu( 
								array(
									'id'    => 'dh_custom_lightboxes',
									'parent' => 'dh_layout',
									'title' => 'Lightboxes',
									'meta'  => array(    
										'title' => __('Lightboxes'),
										'class' => 'dh_hack'
									),
								)
							);
							ob_start();
							include('docs/custom_lightboxes.php');
							$custom_lightboxes = ob_get_contents();
							ob_end_clean();
							$admin_bar->add_menu( 
								array(
									'id'    => 'dh_custom_lightboxes-content',
									'parent' => 'dh_custom_lightboxes',
									'meta'  => array(        
										'class' => 'dh_hack',
										'html' => $custom_lightboxes,
									),
								)
							);

						// Reveals
							$admin_bar->add_menu( 
								array(
									'id'    => 'dh_custom_reveals',
									'parent' => 'dh_layout',
									'title' => 'Reveals',
									'meta'  => array(    
										'title' => __('Reveals'),
										'class' => 'dh_hack'
									),
								)
							);
							ob_start();
							include('docs/custom_reveals.php');
							$custom_reveals = ob_get_contents();
							ob_end_clean();
							$admin_bar->add_menu( 
								array(
									'id'    => 'dh_custom_reveals-content',
									'parent' => 'dh_custom_reveals',
									'meta'  => array(        
										'class' => 'dh_hack',
										'html' => $custom_reveals,
									),
								)
							);

						// Tooltips
							$admin_bar->add_menu( 
								array(
									'id'    => 'dh_tooltips',
									'parent' => 'dh_layout',
									'title' => 'Tooltips',
									'meta'  => array(    
										'title' => __('Tooltips'),
										'class' => 'dh_hack'
									),
								)
							);
							ob_start();
							include('docs/tooltips.php');
							$tooltips = ob_get_contents();
							ob_end_clean();
							$admin_bar->add_menu( 
								array(
									'id'    => 'dh_tooltips-content',
									'parent' => 'dh_tooltips',
									'meta'  => array(        
										'class' => 'dh_hack',
										'html' => $tooltips,
									),
								)
							);

						// Sticky Elements
							$admin_bar->add_menu( 
								array(
									'id'    => 'dh_sticky_elements',
									'parent' => 'dh_layout',
									'title' => 'Sticky Elements',
									'meta'  => array(    
										'title' => __('Sticky Elements'),
										'class' => 'dh_hack'
									),
								)
							);
							ob_start();
							include('docs/sticky_elements.php');
							$sticky_elements = ob_get_contents();
							ob_end_clean();
							$admin_bar->add_menu( 
								array(
									'id'    => 'dh_sticky_elements-content',
									'parent' => 'dh_sticky_elements',
									'meta'  => array(        
										'class' => 'dh_hack',
										'html' => $sticky_elements,
									),
								)
							);

						// Hide/Show Content
							$admin_bar->add_menu( 
								array(
									'id'    => 'dh_showhidecontent',
									'parent' => 'dh_layout',
									'title' => 'Hide/Show Content',
									'meta'  => array(    
										'title' => __('Hide/Show Content'),
										'class' => 'dh_hack'
									),
								)
							);
							ob_start();
							include('docs/showhidecontent.php');
							$showhidecontent = ob_get_contents();
							ob_end_clean();
							$admin_bar->add_menu( 
								array(
									'id'    => 'dh_showhidecontent-content',
									'parent' => 'dh_showhidecontent',
									'meta'  => array(        
										'class' => 'dh_hack',
										'html' => $showhidecontent,
									),
								)
							);

						// Parallax Elements
							$admin_bar->add_menu( 
								array(
									'id'    => 'dh_parallax_elements',
									'parent' => 'dh_layout',
									'title' => 'Parallax Elements',
									'meta'  => array(    
										'title' => __('Parallax Elements'),
										'class' => 'dh_hack'
									),
								)
							);
							ob_start();
							include('docs/parallax_elements.php');
							$parallax_elements = ob_get_contents();
							ob_end_clean();
							$admin_bar->add_menu( 
								array(
									'id'    => 'dh_parallax_elements-content',
									'parent' => 'dh_parallax_elements',
									'meta'  => array(        
										'class' => 'dh_hack',
										'html' => $parallax_elements,
									),
								)
							);

						// More Layout Hacks
							$admin_bar->add_menu( 
								array(
									'id'    => 'dh_more_layout',
									'parent' => 'dh_layout',
									'title' => 'More...',
									'meta'  => array(    
										'title' => __('More...'),
										'class' => 'dh_hack'
									),
								)
							);
							ob_start();
							include('docs/more_layout.php');
							$more_layout = ob_get_contents();
							ob_end_clean();
							$admin_bar->add_menu( 
								array(
									'id'    => 'dh_more_layout-content',
									'parent' => 'dh_more_layout',
									'meta'  => array(        
										'class' => 'dh_hack',
										'html' => $more_layout,
									),
								)
							);

				// Design
					$admin_bar->add_menu( 
						array(
							'id'    => 'dh_design',
							'parent' => 'dh_docs',
							'title' => 'Design',
							'meta'  => array(
								'title' => __('Design'),
								'class' => 'dh_category'
							),
						)
					);

						// Tabs
							$admin_bar->add_menu( 
								array(
									'id'    => 'dh_custom_tabs',
									'parent' => 'dh_design',
									'title' => 'Tabs',
									'meta'  => array(    
										'title' => __('Tabs'),
										'class' => 'dh_hack'
									),
								)
							);
							ob_start();
							include('docs/custom_tabs.php');
							$custom_tabs = ob_get_contents();
							ob_end_clean();
							$admin_bar->add_menu( 
								array(
									'id'    => 'dh_custom_tabs-content',
									'parent' => 'dh_custom_tabs',
									'meta'  => array(        
										'class' => 'dh_hack',
										'html' => $custom_tabs,
									),
								)
							);

						// Dividers
							$admin_bar->add_menu( 
								array(
									'id'    => 'dh_custom_dividers',
									'parent' => 'dh_design',
									'title' => 'Dividers',
									'meta'  => array(    
										'title' => __('Dividers'),
										'class' => 'dh_hack'
									),
								)
							);
							ob_start();
							include('docs/custom_dividers.php');
							$custom_dividers = ob_get_contents();
							ob_end_clean();
							$admin_bar->add_menu( 
								array(
									'id'    => 'dh_custom_dividers-content',
									'parent' => 'dh_custom_dividers',
									'meta'  => array(        
										'class' => 'dh_hack',
										'html' => $custom_dividers,
									),
								)
							);

						// Menus
							$admin_bar->add_menu( 
								array(
									'id'    => 'dh_custom_menus',
									'parent' => 'dh_design',
									'title' => 'Menus',
									'meta'  => array(    
										'title' => __('Menus'),
										'class' => 'dh_hack'
									),
								)
							);
							ob_start();
							include('docs/custom_menus.php');
							$custom_menus = ob_get_contents();
							ob_end_clean();
							$admin_bar->add_menu( 
								array(
									'id'    => 'dh_custom_menus-content',
									'parent' => 'dh_custom_menus',
									'meta'  => array(        
										'class' => 'dh_hack',
										'html' => $custom_menus,
									),
								)
							);

						// Text Styles
							$admin_bar->add_menu( 
								array(
									'id'    => 'dh_text_styles',
									'parent' => 'dh_design',
									'title' => 'Text Styles',
									'meta'  => array(    
										'title' => __('Text Styles'),
										'class' => 'dh_hack'
									),
								)
							);
							ob_start();
							include('docs/text_styles.php');
							$text_styles = ob_get_contents();
							ob_end_clean();
							$admin_bar->add_menu( 
								array(
									'id'    => 'dh_text_styles-content',
									'parent' => 'dh_text_styles',
									'meta'  => array(        
										'class' => 'dh_hack',
										'html' => $text_styles,
									),
								)
							);

						// Module Shapes
							$admin_bar->add_menu( 
								array(
									'id'    => 'dh_module_shapes',
									'parent' => 'dh_design',
									'title' => 'Module Shapes',
									'meta'  => array(    
										'title' => __('Module Shapes'),
										'class' => 'dh_hack'
									),
								)
							);
							ob_start();
							include('docs/module_shapes.php');
							$module_shapes = ob_get_contents();
							ob_end_clean();
							$admin_bar->add_menu( 
								array(
									'id'    => 'dh_module_shapes-content',
									'parent' => 'dh_module_shapes',
									'meta'  => array(        
										'class' => 'dh_hack',
										'html' => $module_shapes,
									),
								)
							);

						// Images
							$admin_bar->add_menu( 
								array(
									'id'    => 'dh_images',
									'parent' => 'dh_design',
									'title' => 'Images',
									'meta'  => array(    
										'title' => __('Images'),
										'class' => 'dh_hack'
									),
								)
							);
							ob_start();
							include('docs/images.php');
							$images = ob_get_contents();
							ob_end_clean();
							$admin_bar->add_menu( 
								array(
									'id'    => 'dh_images-content',
									'parent' => 'dh_images',
									'meta'  => array(        
										'class' => 'dh_hack',
										'html' => $images,
									),
								)
							);

						// Instagram Filters
							$admin_bar->add_menu( 
								array(
									'id'    => 'dh_instagram_filters',
									'parent' => 'dh_design',
									'title' => 'Insta Filters',
									'meta'  => array(    
										'title' => __('Insta Filters'),
										'class' => 'dh_hack'
									),
								)
							);
							ob_start();
							include('docs/instagram_filters.php');
							$instagram_filters = ob_get_contents();
							ob_end_clean();
							$admin_bar->add_menu( 
								array(
									'id'    => 'dh_instagram_filters-content',
									'parent' => 'dh_instagram_filters',
									'meta'  => array(        
										'class' => 'dh_hack',
										'html' => $instagram_filters,
									),
								)
							);

						// Tables
							$admin_bar->add_menu( 
								array(
									'id'    => 'dh_custom_tables',
									'parent' => 'dh_design',
									'title' => 'Tables',
									'meta'  => array(    
										'title' => __('Tables'),
										'class' => 'dh_hack'
									),
								)
							);
							ob_start();
							include('docs/custom_tables.php');
							$custom_tables = ob_get_contents();
							ob_end_clean();
							$admin_bar->add_menu( 
								array(
									'id'    => 'dh_custom_tables-content',
									'parent' => 'dh_custom_tables',
									'meta'  => array(        
										'class' => 'dh_hack',
										'html' => $custom_tables,
									),
								)
							);

						// Icons
							$admin_bar->add_menu( 
								array(
									'id'    => 'dh_icons',
									'parent' => 'dh_design',
									'title' => 'Icons',
									'meta'  => array(    
										'title' => __('Icons'),
										'class' => 'dh_hack'
									),
								)
							);
							ob_start();
							include('docs/icons.php');
							$icons = ob_get_contents();
							ob_end_clean();
							$admin_bar->add_menu( 
								array(
									'id'    => 'dh_icons-content',
									'parent' => 'dh_icons',
									'meta'  => array(        
										'class' => 'dh_hack',
										'html' => $icons,
									),
								)
							);

						// More Design
							$admin_bar->add_menu( 
								array(
									'id'    => 'dh_more_design',
									'parent' => 'dh_design',
									'title' => 'More...',
									'meta'  => array(    
										'title' => __('More...'),
										'class' => 'dh_hack'
									),
								)
							);
							ob_start();
							include('docs/more_design.php');
							$more_design = ob_get_contents();
							ob_end_clean();
							$admin_bar->add_menu( 
								array(
									'id'    => 'dh_more_design-content',
									'parent' => 'dh_more_design',
									'meta'  => array(        
										'class' => 'dh_hack',
										'html' => $more_design,
									),
								)
							);

				// Background
					$admin_bar->add_menu( 
						array(
							'id'    => 'dh_background',
							'parent' => 'dh_docs',
							'title' => 'Background',
							'meta'  => array(
								'title' => __('Background'),
								'class' => 'dh_category'
							),
						)
					);
						// Blur Backgrounds
							$admin_bar->add_menu( 
								array(
									'id'    => 'dh_blur_backgrounds',
									'parent' => 'dh_background',
									'title' => 'Blur BGs',
									'meta'  => array(    
										'title' => __('Blur BGs'),
										'class' => 'dh_hack'
									),
								)
							);
							ob_start();
							include('docs/blur_backgrounds.php');
							$blur_backgrounds = ob_get_contents();
							ob_end_clean();
							$admin_bar->add_menu( 
								array(
									'id'    => 'dh_blur_backgrounds-content',
									'parent' => 'dh_blur_backgrounds',
									'meta'  => array(        
										'class' => 'dh_hack',
										'html' => $blur_backgrounds,
									),
								)
							);

						// Parallax Overlays
							$admin_bar->add_menu( 
								array(
									'id'    => 'dh_parallax_overlays',
									'parent' => 'dh_background',
									'title' => 'Parallax Overlays',
									'meta'  => array(    
										'title' => __('Parallax Overlays'),
										'class' => 'dh_hack'
									),
								)
							);
							ob_start();
							include('docs/parallax_overlays.php');
							$parallax_overlays = ob_get_contents();
							ob_end_clean();
							$admin_bar->add_menu( 
								array(
									'id'    => 'dh_parallax_overlays-content',
									'parent' => 'dh_parallax_overlays',
									'meta'  => array(        
										'class' => 'dh_hack',
										'html' => $parallax_overlays,
									),
								)
							);
						// Background Effects
							$admin_bar->add_menu( 
								array(
									'id'    => 'dh_background-effects',
									'parent' => 'dh_background',
									'title' => 'Background Effects',
									'meta'  => array(    
										'title' => __('Background Effects'),
										'class' => 'dh_hack'
									),
								)
							);
							ob_start();
							include('docs/bg-effects.php');
							$background_effects = ob_get_contents();
							ob_end_clean();
							$admin_bar->add_menu( 
								array(
									'id'    => 'dh_background-effects-content',
									'parent' => 'dh_background-effects',
									'meta'  => array(        
										'class' => 'dh_hack',
										'html' => $background_effects,
									),
								)
							);
				// Footer
					$admin_bar->add_menu( 
						array(
							'id'    => 'dh_footer',
							'parent' => 'dh_docs',
							'title' => 'Footer',
							'meta'  => array(
								'title' => __('Footer'),
								'class' => 'dh_category'
							),
						)
					);
						// Footer
							$admin_bar->add_menu( 
								array(
									'id'    => 'dh_custom_footer',
									'parent' => 'dh_footer',
									'title' => 'Footer',
									'meta'  => array(    
										'title' => __('Footer'),
										'class' => 'dh_hack'
									),
								)
							);
							ob_start();
							include('docs/custom_footer.php');
							$custom_footer = ob_get_contents();
							ob_end_clean();
							$admin_bar->add_menu( 
								array(
									'id'    => 'dh_custom_footer-content',
									'parent' => 'dh_custom_footer',
									'meta'  => array(        
										'class' => 'dh_hack',
										'html' => $custom_footer,
									),
								)
							);

						// Reveal Footer
							$admin_bar->add_menu( 
								array(
									'id'    => 'dh_reveal_footer',
									'parent' => 'dh_footer',
									'title' => 'Reveal Footer',
									'meta'  => array(    
										'title' => __('Reveal Footer'),
										'class' => 'dh_hack'
									),
								)
							);
							ob_start();
							include('docs/reveal_footer.php');
							$reveal_footer = ob_get_contents();
							ob_end_clean();
							$admin_bar->add_menu( 
								array(
									'id'    => 'dh_reveal_footer-content',
									'parent' => 'dh_reveal_footer',
									'meta'  => array(        
										'class' => 'dh_hack',
										'html' => $reveal_footer,
									),
								)
							);

						// Force Footer to Bottom
							$admin_bar->add_menu( 
								array(
									'id'    => 'dh_footer_bottom',
									'parent' => 'dh_footer',
									'title' => 'Force Footer to Bottom',
									'meta'  => array(    
										'title' => __('Force Footer to Bottom'),
										'class' => 'dh_hack'
									),
								)
							);
							ob_start();
							include('docs/footer_bottom.php');
							$footer_bottom = ob_get_contents();
							ob_end_clean();
							$admin_bar->add_menu( 
								array(
									'id'    => 'dh_footer_bottom-content',
									'parent' => 'dh_footer_bottom',
									'meta'  => array(        
										'class' => 'dh_hack',
										'html' => $footer_bottom,
									),
								)
							);

				// Mobile
					$admin_bar->add_menu( 
						array(
							'id'    => 'dh_mobile',
							'parent' => 'dh_docs',
							'title' => 'Mobile',
							'meta'  => array(
								'title' => __('Mobile'),
								'class' => 'dh_category'
							),
						)
					);

						// Mobile Parallax
							$admin_bar->add_menu( 
								array(
									'id'    => 'dh_mobile_parallax',
									'parent' => 'dh_mobile',
									'title' => 'Mobile Parallax',
									'meta'  => array(    
										'title' => __('Mobile Parallax'),
										'class' => 'dh_hack'
									),
								)
							);
							ob_start();
							include('docs/mobile_parallax.php');
							$mobile_parallax = ob_get_contents();
							ob_end_clean();
							$admin_bar->add_menu( 
								array(
									'id'    => 'dh_mobile_parallax-content',
									'parent' => 'dh_mobile_parallax',
									'meta'  => array(        
										'class' => 'dh_hack',
										'html' => $mobile_parallax,
									),
								)
							);

						// Mobile Header
							$admin_bar->add_menu( 
								array(
									'id'    => 'dh_mobile_header',
									'parent' => 'dh_mobile',
									'title' => 'Mobile Header',
									'meta'  => array(    
										'title' => __('Mobile Header'),
										'class' => 'dh_hack'
									),
								)
							);
							ob_start();
							include('docs/mobile_header.php');
							$mobile_header = ob_get_contents();
							ob_end_clean();
							$admin_bar->add_menu( 
								array(
									'id'    => 'dh_mobile_header-content',
									'parent' => 'dh_mobile_header',
									'meta'  => array(        
										'class' => 'dh_hack',
										'html' => $mobile_header,
									),
								)
							);

				// Animations
					$admin_bar->add_menu( 
						array(
							'id'    => 'dh_animations',
							'parent' => 'dh_docs',
							'title' => 'Animations',
							'meta'  => array(
								'title' => __('Animations'),
								'class' => 'dh_category'
							),
						)
					);
					
					// Blurb Effect
							$admin_bar->add_menu( 
								array(
									'id'    => 'dh_blurb_effect',
									'parent' => 'dh_animations',
									'title' => 'Blurb Effects',
									'meta'  => array(    
										'title' => __('Blurb Effects'),
										'class' => 'dh_hack'
									),
								)
							);
							ob_start();
							include('docs/blurb_effects.php');
							$blurb_effect = ob_get_contents();
							ob_end_clean();
							$admin_bar->add_menu( 
								array(
									'id'    => 'dh_blurb_effect-content',
									'parent' => 'dh_blurb_effect',
									'meta'  => array(        
										'class' => 'dh_hack',
										'html' => $blurb_effect,
									),
								)
							);
					// Animations
							$admin_bar->add_menu( 
								array(
									'id'    => 'dh_animations_submenu',
									'parent' => 'dh_animations',
									'title' => 'Animations',
									'meta'  => array(    
										'title' => __('Animations'),
										'class' => 'dh_hack'
									),
								)
							);
							ob_start();
							include('docs/animations.php');
							$animations_submenu = ob_get_contents();
							ob_end_clean();
							$admin_bar->add_menu( 
								array(
									'id'    => 'dh_animations_submenu-content',
									'parent' => 'dh_animations_submenu',
									'meta'  => array(        
										'class' => 'dh_hack',
										'html' => $animations_submenu,
									),
								)
							);
					// Hover Animations
							$admin_bar->add_menu( 
								array(
									'id'    => 'dh_hover_animations_submenu',
									'parent' => 'dh_animations',
									'title' => 'Hover Animations',
									'meta'  => array(    
										'title' => __('Hover Animations'),
										'class' => 'dh_hack'
									),
								)
							);
							ob_start();
							include('docs/hover_animations.php');
							$hover_animations_submenu = ob_get_contents();
							ob_end_clean();
							$admin_bar->add_menu( 
								array(
									'id'    => 'dh_hover_animations_submenu-content',
									'parent' => 'dh_hover_animations_submenu',
									'meta'  => array(        
										'class' => 'dh_hack',
										'html' => $hover_animations_submenu,
									),
								)
							);
					// Menu Animations
							$admin_bar->add_menu( 
								array(
									'id'    => 'dh_menu_animations',
									'parent' => 'dh_animations',
									'title' => 'Menu Animations',
									'meta'  => array(    
										'title' => __('Menu Animations'),
										'class' => 'dh_hack'
									),
								)
							);
							ob_start();
							include('docs/menu_animations.php');
							$menu_animations = ob_get_contents();
							ob_end_clean();
							$admin_bar->add_menu( 
								array(
									'id'    => 'dh_menu_animations-content',
									'parent' => 'dh_menu_animations',
									'meta'  => array(        
										'class' => 'dh_hack',
										'html' => $menu_animations,
									),
								)
							);		
				// Blog
					$admin_bar->add_menu( 
						array(
							'id'    => 'dh_blog',
							'parent' => 'dh_docs',
							'title' => 'Blog',
							'meta'  => array(
								'title' => __('Blog'),
								'class' => 'dh_category'
							),
						)
					);
					
					// Blog Styles
							$admin_bar->add_menu( 
								array(
									'id'    => 'dh_blog_styles',
									'parent' => 'dh_blog',
									'title' => 'Blog Styles',
									'meta'  => array(    
										'title' => __('Blog Styles'),
										'class' => 'dh_hack'
									),
								)
							);
							ob_start();
							include('docs/blog_styles.php');
							$blog_styles = ob_get_contents();
							ob_end_clean();
							$admin_bar->add_menu( 
								array(
									'id'    => 'dh_blog_styles-content',
									'parent' => 'dh_blog_styles',
									'meta'  => array(        
										'class' => 'dh_hack',
										'html' => $blog_styles,
									),
								)
							);
					// Archives
							$admin_bar->add_menu( 
								array(
									'id'    => 'dh_custom_archives',
									'parent' => 'dh_blog',
									'title' => 'Archives',
									'meta'  => array(    
										'title' => __('Archives'),
										'class' => 'dh_hack'
									),
								)
							);
							ob_start();
							include('docs/custom_archives.php');
							$custom_archives = ob_get_contents();
							ob_end_clean();
							$admin_bar->add_menu( 
								array(
									'id'    => 'dh_custom_archvies-content',
									'parent' => 'dh_custom_archives',
									'meta'  => array(        
										'class' => 'dh_hack',
										'html' => $custom_archives,
									),
								)
							);
					// Blog Grid Corner Shadows
							$admin_bar->add_menu( 
								array(
									'id'    => 'dh_blog_grid_corner_shadows',
									'parent' => 'dh_blog',
									'title' => 'Blog Grid Corner Shadows',
									'meta'  => array(    
										'title' => __('Blog Grid Corner Shadows'),
										'class' => 'dh_hack'
									),
								)
							);
							ob_start();
							include('docs/blog_grid_corner_shadows.php');
							$blog_grid_corner_shadows = ob_get_contents();
							ob_end_clean();
							$admin_bar->add_menu( 
								array(
									'id'    => 'dh_blog_grid_corner_shadows-content',
									'parent' => 'dh_blog_grid_corner_shadows',
									'meta'  => array(        
										'class' => 'dh_hack',
										'html' => $blog_grid_corner_shadows,
									),
								)
							);	
					// Default Archives
							$admin_bar->add_menu( 
								array(
									'id'    => 'dh_default_archives',
									'parent' => 'dh_blog',
									'title' => 'Default Archives',
									'meta'  => array(    
										'title' => __('Default Archives'),
										'class' => 'dh_hack'
									),
								)
							);
							ob_start();
							include('docs/default_archives.php');
							$default_archives = ob_get_contents();
							ob_end_clean();
							$admin_bar->add_menu( 
								array(
									'id'    => 'dh_default_archives-content',
									'parent' => 'dh_default_archives',
									'meta'  => array(        
										'class' => 'dh_hack',
										'html' => $default_archives,
									),
								)
							);		
				// Other
					$admin_bar->add_menu( 
						array(
							'id'    => 'dh_other',
							'parent' => 'dh_docs',
							'title' => 'Other',
							'meta'  => array(
								'title' => __('Other'),
								'class' => 'dh_category'
							),
						)
					);
					// Admin
						$admin_bar->add_menu( 
									array(
										'id'    => 'dh_admin',
										'parent' => 'dh_other',
										'title' => 'Admin',
										'meta'  => array(    
											'title' => __('Admin'),
											'class' => 'dh_hack'
										),
									)
								);
						ob_start();
							include('docs/admin.php');
							$admin = ob_get_contents();
							ob_end_clean();
							$admin_bar->add_menu( 
							    array(
									'id'    => 'dh_admin-content',
									'parent' => 'dh_admin',
									'meta'  => array(        
									'class' => 'dh_hack',
									'html' => $admin,
								),
							)
						);
					// Popups
						$admin_bar->add_menu( 
							array(
								'id'    => 'dh_popups',
								'parent' => 'dh_other',
								'title' => 'Popups',
								'meta'  => array(    
									'title' => __('Popups'),
									'class' => 'dh_hack'
								),
							)
						);
						ob_start();
						include('docs/popups.php');
						$popups = ob_get_contents();
						ob_end_clean();
						$admin_bar->add_menu( 
							array(
								'id'    => 'dh_popups-content',
								'parent' => 'dh_popups',
								'meta'  => array(        
									'class' => 'dh_hack',
									'html' => $popups,
								),
							)
						);		
					// Miscellaneous
						$admin_bar->add_menu( 
									array(
										'id'    => 'dh_misc',
										'parent' => 'dh_other',
										'title' => 'Miscellaneous',
										'meta'  => array(    
											'title' => __('Miscellaneous'),
											'class' => 'dh_hack'
										),
									)
								);
						ob_start();
							include('docs/misc.php');
							$misc = ob_get_contents();
							ob_end_clean();
							$admin_bar->add_menu( 
							    array(
									'id'    => 'dh_misc-content',
									'parent' => 'dh_misc',
									'meta'  => array(        
									'class' => 'dh_hack',
									'html' => $misc,
								),
							)
						);
			}
		}
		
		if ( !dh_is_divi_builder_enabled() ) {
		
			add_action( 'admin_enqueue_scripts', 'dh_docs_admin_styles_scripts', 0 );
			
			add_action( 'wp_head', function () {
				wp_enqueue_script( 'dh_admin_scripts', DIVI_HACKS_PLUGIN_URL . 'scripts/admin_scripts.js', array( 'jquery' ), '1.19.0', true ); // jQuery
			} );
			
			add_action('admin_bar_menu', 'documentation_menu', 40);
		}
		
	}