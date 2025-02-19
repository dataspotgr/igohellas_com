<?php

// Custom preloader Page
	function dh_preloader_customizer($wp_customize) {
		$wp_customize->add_section('dh_custom_preloader_options', array(    
			'priority' => 1,
			'title' => __('Preloader', 'divi-hacks'),
		'panel'    => 'divi_hack_options',
		));
			$wp_customize->add_setting('dh_preloader_enabler_switch', array(
				'default' => false,
				'type'        => 'theme_mod',
				'capability'  => 'edit_theme_options',
			));
			$wp_customize->add_control('dh_preloader_enabler_switch', array(
				'label' => __('Enable Preloader', 'divi-hacks'),
				'description' => __('Show a page loading screen while your page content loads.', 'divi-hacks'),
				'section' => 'dh_custom_preloader_options',
				'type' => 'checkbox',
				'settings' => 'dh_preloader_enabler_switch'
			));
			$wp_customize->add_setting( 'dh_preloader_bg_color', array(
				'default'           => '#000',
				'type'              => 'option',
				'capability'        => 'edit_theme_options',
				'sanitize_callback' => 'et_sanitize_alpha_color',
			));
			$wp_customize->add_control( new ET_Divi_Customize_Color_Alpha_Control( $wp_customize, 'dh_preloader_bg_color', array(
				'label'     => esc_html__( 'Preloader Background Color', 'divi-hacks'),
				'section'   => 'dh_custom_preloader_options',
				'settings'  => 'dh_preloader_bg_color',
			)));
			$wp_customize->add_setting( 'dh_preloader_icon_color', array(
				'default'           => 'rgba(255,255,255,0.5)',
				'type'              => 'option',
				'capability'        => 'edit_theme_options',
				'sanitize_callback' => 'et_sanitize_alpha_color',
			));
			$wp_customize->add_control( new ET_Divi_Customize_Color_Alpha_Control( $wp_customize, 'dh_preloader_icon_color', array(
				'label'     => esc_html__( 'Preloader Icon Color', 'divi-hacks'),
				'section'   => 'dh_custom_preloader_options',
				'settings'  => 'dh_preloader_icon_color',
			)));
			$wp_customize->add_setting( 'dh_preloader_icon', array(
				'capability' => 'edit_theme_options',
				'sanitize_callback' => 'dh_sanitize_select',
				'default' => 'default',
			));
			$wp_customize->add_control( 'dh_preloader_icon', array(
				'type' => 'select',
				'section' => 'dh_custom_preloader_options',
				'label' => __( 'Preloader Icon' ),
				'description' => __('View the <a href=\'https://divihacks.com/docs/preloader\' target=\'_blank\'>Documentation</a> to view the available icons.', 'divi-hacks'),
				'settings' => 'dh_preloader_icon',
				'choices' => array(
					'default' => __( 'Default' ),
					'double-circle' => __( 'Double Circle' ),
					'dual-ring' => __( 'Dual Ring' ),
					'circle' => __( 'Circle' ),
					'facebook' => __( 'Facebook' ),
					'heart' => __( 'Heart' ),
					'ring' => __( 'Ring' ),
					'roller' => __( 'Roller' ),
					'ellipsis' => __( 'Ellipsis' ),
					'grid' => __( 'Grid' ),
					'hourglass' => __( 'Hourglass' ),
					'ripple' => __( 'Ripple' ),
					'spinner' => __( 'Spinner' ),
				),
			));
			$wp_customize->add_setting( 'dh_preloader_in_animation', array(
				'capability' => 'edit_theme_options',
				'sanitize_callback' => 'dh_sanitize_select',
				'default' => 'fade-in',
			));
			$wp_customize->add_control( 'dh_preloader_in_animation', array(
				'type' => 'select',
				'section' => 'dh_custom_preloader_options',
				'label' => __( 'Preloader Animation: IN', 'divi-hacks'),
				'settings' => 'dh_preloader_in_animation',
				'choices' => array(
					'fade-in' => __( 'Fade In' ),
					'slide-up' => __( 'Slide Up' ),
					'slide-down' => __( 'Slide Down' ),
					'slide-left' => __( 'Slide Left' ),
					'slide-right' => __( 'Slide Right' ),
					'horizontal-split' => __( 'Split Left-Right' ),
					'vertical-split' => __( 'Split Up-Down' ),
				),
			));
			$wp_customize->add_setting( 'dh_preloader_out_animation', array(
				'capability' => 'edit_theme_options',
				'sanitize_callback' => 'dh_sanitize_select',
				'default' => 'fade-out',
			));
			$wp_customize->add_control( 'dh_preloader_out_animation', array(
				'type' => 'select',
				'section' => 'dh_custom_preloader_options',
				'label' => __( 'Preloader Animation: OUT', 'divi-hacks'),
				'settings' => 'dh_preloader_out_animation',
				'choices' => array(
					'fade-out' => __( 'Fade Out' ),
					'slide-up' => __( 'Slide Up' ),
					'slide-down' => __( 'Slide Down' ),
					'slide-left' => __( 'Slide Left' ),
					'slide-right' => __( 'Slide Right' ),
					'horizontal-split' => __( 'Split Left-Right' ),
					'vertical-split' => __( 'Split Up-Down' ),
				),
			));
			$wp_customize->add_setting('dh_preloader_animation_speed', array(
				'default' => '500',
				'type' => 'option',
				'capability' => 'edit_theme_options',
			));
			$wp_customize->add_control('dh_preloader_animation_speed', array(
				'label' => __('Preloader Animation Speed', 'divi-hacks'),
				'description' => 'Value is in miliseconds. 1000 = 1 second. Only use numbers. Example: 500',
				'section' => 'dh_custom_preloader_options',
				'type' => 'option',
				'settings' => 'dh_preloader_animation_speed'
			));
			$wp_customize->add_setting('dh_custom_icon_enabler_switch', array(
				'default' => false,
				'type'        => 'theme_mod',
				'capability'  => 'edit_theme_options',
			));
			$wp_customize->add_control('dh_custom_icon_enabler_switch', array(
				'label' => __('Disable the Default Icon and Use a Custom Icon', 'divi-hacks'),
				'section' => 'dh_custom_preloader_options',
				'type' => 'checkbox',
				'settings' => 'dh_custom_icon_enabler_switch'
			));
			$wp_customize->add_setting('dh_custom_preloader_icon', array(
				'default'    => '',
				'capability' => 'edit_theme_options',
			));
			$wp_customize->add_control('dh_custom_preloader_icon', array(
				'label'    => __('Custom Preloader Icon HTML', 'divi-hacks'),
				'description' => __('Visit <a href=\'https://loading.io\' target=\'_blank\'>loading.io</a> to create a custom loading icon.  Then download it as CSS, and copy & paste the code here.', 'divi-hacks'),
				'section'  => 'dh_custom_preloader_options',
				'type'     => 'textarea',
				'settings' => 'dh_custom_preloader_icon'
			));
			$wp_customize->add_setting('dh_custom_preloader_bg_css', array(
				'default'    => '',
				'capability' => 'edit_theme_options',
				'sanitize_callback' => 'sanitize_text_field',
			));
			$wp_customize->add_control('dh_custom_preloader_bg_css', array(
				'label'    => __('Preloader Background Custom CSS', 'divi-hacks'),
				'section'  => 'dh_custom_preloader_options',
				'type'     => 'textarea',
				'settings' => 'dh_custom_preloader_bg_css'
			));
	}
	add_action('customize_register', 'dh_preloader_customizer');
	if (!isset($_GET['et_fb'])) {
		if( false != get_theme_mod( 'dh_preloader_enabler_switch' ) ) {
			function dh_preloader_element() {
				$dh_preloader_in_animation = get_theme_mod('dh_preloader_in_animation','fade-in');
				$dh_preloader_out_animation = get_theme_mod('dh_preloader_out_animation','fade-out');
				$dh_preloader_icon = get_theme_mod('dh_preloader_icon','default');
				if( false != get_theme_mod( 'dh_custom_icon_enabler_switch' ) ) {
					if ( $dh_preloader_out_animation == 'horizontal-split' ) {
						echo '<div id="preloader1"  class="horizontal-split"><div class="dh-spinner">' . get_theme_mod( 'dh_custom_preloader_icon') . '</div></div>';
						echo '<div id="preloader2" class="horizontal-split"><div class="dh-spinner">' . get_theme_mod( 'dh_custom_preloader_icon') . '</div></div>';
					} 
					if ( $dh_preloader_out_animation == 'vertical-split' ) {
						echo '<div id="preloader1" class="vertical-split"><div class="dh-spinner">' . get_theme_mod( 'dh_custom_preloader_icon') . '</div></div>';
						echo '<div id="preloader2" class="vertical-split"><div class="dh-spinner">' . get_theme_mod( 'dh_custom_preloader_icon') . '</div></div>';
					} 
					if ( ( $dh_preloader_out_animation == 'vertical-split' || $dh_preloader_out_animation == 'horizontal-split' ) && ( $dh_preloader_in_animation == 'vertical-split' || $dh_preloader_in_animation == 'horizontal-split' ) ) { } else {
						echo '<div id="preloader"><div class="dh-spinner">' . get_theme_mod( 'dh_custom_preloader_icon') . '</div></div>';
					}
					if ( $dh_preloader_in_animation == 'horizontal-split' ) {
						echo '<div id="preloader3"  class="horizontal-split hidden"><div class="dh-spinner">' . get_theme_mod( 'dh_custom_preloader_icon') . '</div></div>';
						echo '<div id="preloader4" class="horizontal-split hidden"><div class="dh-spinner">' . get_theme_mod( 'dh_custom_preloader_icon') . '</div></div>';
					} 
					if ( $dh_preloader_in_animation == 'vertical-split' ) {
						echo '<div id="preloader3" class="vertical-split hidden"><div class="dh-spinner">' . get_theme_mod( 'dh_custom_preloader_icon') . '</div></div>';
						echo '<div id="preloader4" class="vertical-split hidden"><div class="dh-spinner">' . get_theme_mod( 'dh_custom_preloader_icon') . '</div></div>';
					}
					
			 	} else {
			 		if ( $dh_preloader_icon == 'double-circle' ) { 
			 			$preload_icon = '<div class="dh-spinner"><div class="double-bounce1"></div><div class="double-bounce2"></div></div>';
			 		}
			 		if ( $dh_preloader_icon == 'circle' ) { 
			 			$preload_icon = '<div class="dh-spinner"><div class="lds-circle"></div></div>';
			 		}
			 		if ( $dh_preloader_icon == 'dual-ring' ) { 
			 			$preload_icon = '<div class="dh-spinner"><div class="lds-dual-ring"></div></div>';
			 		}
			 		if ( $dh_preloader_icon == 'facebook' ) { 
			 			$preload_icon = '<div class="dh-spinner"><div class="lds-facebook"><div></div><div></div><div></div></div></div>';
			 		}
			 		if ( $dh_preloader_icon == 'heart' ) { 
			 			$preload_icon = '<div class="dh-spinner"><div class="lds-heart"><div></div></div></div>';
			 		}
			 		if ( $dh_preloader_icon == 'ring' ) { 
			 			$preload_icon = '<div class="dh-spinner"><div class="lds-ring"><div></div><div></div><div></div><div></div></div></div>';
			 		}
			 		if ( $dh_preloader_icon == 'roller' ) { 
			 			$preload_icon = '<div class="dh-spinner"><div class="lds-roller"><div></div><div></div><div></div><div></div><div></div><div></div><div></div><div></div></div></div>';
			 		}
			 		if ( $dh_preloader_icon == 'default' ) { 
			 			$preload_icon = '<div class="dh-spinner"><div class="lds-default"><div></div><div></div><div></div><div></div><div></div><div></div><div></div><div></div><div></div><div></div><div></div><div></div></div></div>';
			 		}
			 		if ( $dh_preloader_icon == 'ellipsis' ) { 
			 			$preload_icon = '<div class="dh-spinner"><div class="lds-ellipsis"><div></div><div></div><div></div><div></div></div></div>';
			 		}
			 		if ( $dh_preloader_icon == 'grid' ) { 
			 			$preload_icon = '<div class="dh-spinner"><div class="lds-grid"><div></div><div></div><div></div><div></div><div></div><div></div><div></div><div></div><div></div></div></div>';
			 		}
			 		if ( $dh_preloader_icon == 'hourglass' ) { 
			 			$preload_icon = '<div class="dh-spinner"><div class="lds-hourglass"></div></div>';
			 		}
			 		if ( $dh_preloader_icon == 'ripple' ) { 
			 			$preload_icon = '<div class="dh-spinner"><div class="lds-ripple"><div></div><div></div></div></div>';
			 		}
			 		if ( $dh_preloader_icon == 'spinner' ) { 
			 			$preload_icon = '<div class="dh-spinner"><div class="lds-spinner"><div></div><div></div><div></div><div></div><div></div><div></div><div></div><div></div><div></div><div></div><div></div><div></div></div></div>';
			 		}
			 		if ( $dh_preloader_out_animation == 'horizontal-split' ) {
						echo '<div id="preloader1" class="horizontal-split">' . $preload_icon . '</div><div id="preloader2" class="horizontal-split">' . $preload_icon . '</div>';
					} 
					if ( $dh_preloader_out_animation == 'vertical-split' ) {
						echo '<div id="preloader1" class="vertical-split">' . $preload_icon . '</div><div id="preloader2" class="vertical-split">' . $preload_icon . '</div>';
					} 
					if ( ( $dh_preloader_out_animation == 'vertical-split' || $dh_preloader_out_animation == 'horizontal-split' ) && ( $dh_preloader_in_animation == 'vertical-split' || $dh_preloader_in_animation == 'horizontal-split' ) ) { } else {
						echo '<div id="preloader">' . $preload_icon . '</div>';
					}
					if ( $dh_preloader_in_animation == 'horizontal-split' ) {
						echo '<div id="preloader3" class="horizontal-split hidden">' . $preload_icon . '</div><div id="preloader4" class="horizontal-split hidden">' . $preload_icon . '</div>';
					} 
					if ( $dh_preloader_in_animation == 'vertical-split' ) {
						echo '<div id="preloader3" class="vertical-split hidden">' . $preload_icon . '</div><div id="preloader4" class="vertical-split hidden">' . $preload_icon . '</div>';
					} 
					
			 	}
			}
			add_action( 'wp_footer', 'dh_preloader_element' );
			function dh_preloader() {
				$dh_preloader_bg_color  = get_option('dh_preloader_bg_color','#000');
				$dh_preloader_icon_color  = get_option('dh_preloader_icon_color','rgba(255,255,255,0.5)');
				$dh_preloader_in_animation = get_theme_mod('dh_preloader_in_animation','fade-in');
				$dh_preloader_out_animation = get_theme_mod('dh_preloader_out_animation','fade-out');
				$dh_preloader_animation_speed = get_option('dh_preloader_animation_speed','500');
				?>
				<script id="preloader-js">
					jQuery(document).ready(function($) {
						// When an article with article grid is clicked, display the loader
					    $(".is-desktop input.et_pb_searchsubmit, a.hover-link").on("click", function() { 
					    	<?php if ( $dh_preloader_in_animation == 'fade-in' ) { ?>
								$("#preloader").removeClass("hidden").addClass("fade-in").addClass("in").animate({opacity:1}, <?php echo $dh_preloader_animation_speed ?>);
							<?php } if ( $dh_preloader_in_animation == 'slide-down' ) { ?>
								$("#preloader").removeClass("hidden").addClass("slide-down").addClass("in").animate({height:"auto"},<?php echo $dh_preloader_animation_speed ?>);
							<?php } if ( $dh_preloader_in_animation == 'slide-up' ) { ?>
								$("#preloader").removeClass("hidden").addClass("slide-up").addClass("in").animate({height:"auto"},<?php echo $dh_preloader_animation_speed ?>);
							<?php } if ( $dh_preloader_in_animation == 'slide-left' ) { ?>
								$("#preloader").removeClass("hidden").addClass("slide-left").addClass("in").animate({width:"auto"},<?php echo $dh_preloader_animation_speed ?>);
							<?php } if ( $dh_preloader_in_animation == 'slide-right' ) { ?>
								$("#preloader").removeClass("hidden").addClass("slide-right").addClass("in").animate({width:"auto"},<?php echo $dh_preloader_animation_speed ?>);
							<?php } if ( $dh_preloader_in_animation == 'horizontal-split' ) { ?>
								$("#preloader3, #preloader4").removeClass("hidden").addClass("horizontal-split").addClass("in").animate({width:"auto"},<?php echo $dh_preloader_animation_speed ?>);
							<?php } if ( $dh_preloader_in_animation == 'vertical-split' ) { ?>
								$("#preloader3, #preloader4").removeClass("hidden").addClass("vertical-split").addClass("in").animate({height:"auto"},<?php echo $dh_preloader_animation_speed ?>);
							<?php } ?>
						});
						$(window).load(function() {
						// When the page is loading show the #preloader element 
					        <?php if ( $dh_preloader_out_animation == 'fade-out' ) { ?>
								$("#preloader").addClass("fade-out").animate({opacity:0}, <?php echo $dh_preloader_animation_speed ?>, function() {
							        $("#preloader, #preloader1, #preloader2, #preloader3, #preloader4").attr("class", "hidden");
							    });
							<?php } if ( $dh_preloader_out_animation == 'slide-down' ) { ?>
								$("#preloader").addClass("slide-down").addClass("out").animate({height:0}, <?php echo $dh_preloader_animation_speed ?>, function() {
							        $("#preloader, #preloader1, #preloader2, #preloader3, #preloader4").attr("class", "hidden");
							    });
							<?php } if ( $dh_preloader_out_animation == 'slide-up' ) { ?>
								$("#preloader").addClass("slide-up").addClass("out").animate({height:0}, <?php echo $dh_preloader_animation_speed ?>, function() {
							        $("#preloader, #preloader1, #preloader2, #preloader3, #preloader4").attr("class", "hidden");
							    });
							<?php } if ( $dh_preloader_out_animation == 'slide-left' ) { ?>
								$("#preloader").addClass("slide-left").addClass("out").animate({width:0}, <?php echo $dh_preloader_animation_speed ?>, function() {
							        $("#preloader, #preloader1, #preloader2, #preloader3, #preloader4").attr("class", "hidden");
							    });
							<?php } if ( $dh_preloader_out_animation == 'slide-right' ) { ?>
								$("#preloader").addClass("slide-right").addClass("out").animate({width:0}, <?php echo $dh_preloader_animation_speed ?>, function() {
							        $("#preloader, #preloader1, #preloader2, #preloader3, #preloader4").attr("class", "hidden");
							    });
							<?php } if ( $dh_preloader_out_animation == 'horizontal-split' ) { ?>
								$("#preloader1, #preloader2").addClass("horizontal-split").addClass("out").animate({width:0}, <?php echo $dh_preloader_animation_speed ?>, function() {
							        $("#preloader, #preloader1, #preloader2, #preloader3, #preloader4").attr("class", "hidden");
							    });
							<?php } if ( $dh_preloader_out_animation == 'vertical-split' ) { ?>
								$("#preloader1, #preloader2").addClass("vertical-split").addClass("out").animate({height:0}, <?php echo $dh_preloader_animation_speed ?>, function() {
							        $("#preloader, #preloader1, #preloader2, #preloader3, #preloader4").attr("class", "hidden");
							    });
							<?php } ?>
					  		$(".divi-hacks-archive-grid.author .et_pb_post a, .divi-hacks-archive-grid.post-type-archive .et_pb_post a, .divi-hacks-archive-grid.tag .et_pb_post a, .divi-hacks-archive-grid.archive .et_pb_post a, .divi-hacks-archive-grid.category .et_pb_post a, .divi-hacks-archive-grid.search-results .et_pb_post a, .divi-hacks-archive-grid.blog .et_pb_post a, .et_mobile_menu .menu-item a:not([href^='#'])").on("click", function() { 
						    	event.preventDefault();
								newLocation = this.href;
					            <?php if ( $dh_preloader_in_animation == 'fade-in' ) { ?>
									$("#preloader").removeClass("hidden").addClass("fade-in").addClass("in").animate({opacity:1}, <?php echo $dh_preloader_animation_speed ?>, newpage);
								<?php } if ( $dh_preloader_in_animation == 'slide-down' ) { ?>
									$("#preloader").removeClass("hidden").addClass("slide-down").addClass("in").animate({height:"auto"}, <?php echo $dh_preloader_animation_speed ?>, newpage);
								<?php } if ( $dh_preloader_in_animation == 'slide-up' ) { ?>
									$("#preloader").removeClass("hidden").addClass("slide-up").addClass("in").animate({height:"auto"}, <?php echo $dh_preloader_animation_speed ?>, newpage);
								<?php } if ( $dh_preloader_in_animation == 'slide-left' ) { ?>
									$("#preloader").removeClass("hidden").addClass("slide-left").addClass("in").animate({width:"auto"}, <?php echo $dh_preloader_animation_speed ?>, newpage);
								<?php } if ( $dh_preloader_in_animation == 'slide-right' ) { ?>
									$("#preloader").removeClass("hidden").addClass("slide-right").addClass("in").animate({width:"auto"}, <?php echo $dh_preloader_animation_speed ?>, newpage);
								<?php } if ( $dh_preloader_in_animation == 'horizontal-split' ) { ?>
									$("#preloader3, #preloader4").removeClass("hidden").addClass("horizontal-split").addClass("in").animate({width:"auto"}, <?php echo $dh_preloader_animation_speed ?>, newpage);
								<?php } if ( $dh_preloader_in_animation == 'vertical-split' ) { ?>
									$("#preloader3, #preloader4").removeClass("hidden").addClass("vertical-split").addClass("in").animate({height:"auto"}, <?php echo $dh_preloader_animation_speed ?>, newpage);
								<?php } ?> 
							});
							function newpage() {
								window.location = newLocation;
							}
						});
						if(  window.location.hash ) {
							
						  	let URLnoHash = window.location.href.split('#')[0];
							
							$("body:not(.et-fb) a[href*='" + URLnoHash + "']").addClass("no-preloader");
							
						} else {
							
							$("body:not(.et-fb) a[href*='#']").each(function() {
								
								let oldUrl = $(this).attr("href"),
									oldURLnoHash = oldUrl.split("#")[0],
									windowlocationhref = window.location.href,
									is_in_windowlocation = windowlocationhref.indexOf( oldURLnoHash );
								
						        if ( is_in_windowlocation !== -1 ) {
									
						            $(this).addClass("no-preloader");
				            	}
					       });
						};
						$("[class*='lightbox-trigger'], [class*='reveal-trigger'], [class*='reveal-only-trigger'], [class*='tooltip-trigger'], a.close-lightbox, [class*='lightbox-trigger'] > a, [class*='reveal-trigger'] > a, [class*='reveal-only-trigger'] > a, [class*='tooltip-trigger'] > a, .close-lightbox > a").removeAttr("href");
						// When a link is clicked, display the loader unless it is one of the links listed
					    $("body:not(.et-fb) a").not("#wpadminbar a, .gallery-icon a, .et_social_share, .no-preloader a, a.no-preloader, a[href^='#'], a[href^='mailto:'], a[href^='tel:'], a[target='_blank'], [class*='lightbox-trigger'], [class*='lightbox-trigger'] > a, [class*='reveal-trigger'], [class*='reveal-trigger'] > a, [class*='reveal-only-trigger'], [class*='reveal-only-trigger'] > a, [class*='tooltip-trigger'], [class*='tooltip-trigger'] > a, .close-lightbox").on("click", function() {
				    		event.preventDefault();
							newLocation = this.href;	
				           <?php if ( $dh_preloader_in_animation == 'fade-in' ) { ?>
								$("#preloader").removeClass("hidden").addClass("fade-in").addClass("in").animate({opacity:1}, <?php echo $dh_preloader_animation_speed ?>, newpage);
							<?php } if ( $dh_preloader_in_animation == 'slide-down' ) { ?>
								$("#preloader").removeClass("hidden").addClass("slide-down").addClass("in").animate({height:"auto"}, <?php echo $dh_preloader_animation_speed ?>, newpage);
							<?php } if ( $dh_preloader_in_animation == 'slide-up' ) { ?>
								$("#preloader").removeClass("hidden").addClass("slide-up").addClass("in").animate({height:"auto"}, <?php echo $dh_preloader_animation_speed ?>, newpage);
							<?php } if ( $dh_preloader_in_animation == 'slide-left' ) { ?>
								$("#preloader").removeClass("hidden").addClass("slide-left").addClass("in").animate({width:"auto"}, <?php echo $dh_preloader_animation_speed ?>, newpage);
							<?php } if ( $dh_preloader_in_animation == 'slide-right' ) { ?>
								$("#preloader").removeClass("hidden").addClass("slide-right").addClass("in").animate({width:"auto"}, <?php echo $dh_preloader_animation_speed ?>, newpage);
							<?php } if ( $dh_preloader_in_animation == 'horizontal-split' ) { ?>
								$("#preloader3, #preloader4").removeClass("hidden").addClass("horizontal-split").addClass("in").animate({width:"auto"}, <?php echo $dh_preloader_animation_speed ?>, newpage);
							<?php } if ( $dh_preloader_in_animation == 'vertical-split' ) { ?>
								$("#preloader3, #preloader4").removeClass("hidden").addClass("vertical-split").addClass("in").animate({height:"auto"}, <?php echo $dh_preloader_animation_speed ?>, newpage);
							<?php } ?> 
					    });
					    function newpage() {
							window.location = newLocation;
						}
					});
				</script>
				<style id="dh-preload">
					#preloader:not(.horizontal-split):not(.vertical-split):not(.split) {
						background-color: <?php echo $dh_preloader_bg_color ?>;
					    <?php echo get_theme_mod( 'dh_custom_preloader_bg_css') ?>
					}
					.double-bounce1, 
					.double-bounce2,
					.lds-spinner div:after,
					.lds-grid div,
					.lds-ellipsis div,
					.lds-default div,
					.lds-roller div:after,
					.lds-heart div,
					.lds-heart div:after,
					.lds-heart div:before,
					.lds-facebook div,
					.lds-circle {
						background-color: <?php echo $dh_preloader_icon_color ?>;
					}
					.lds-hourglass:after {
						border: 26px solid <?php echo $dh_preloader_icon_color ?>;
						border-color: <?php echo $dh_preloader_icon_color ?> transparent <?php echo $dh_preloader_icon_color ?> transparent;
					}
					.lds-ripple div {
						border: 4px solid <?php echo $dh_preloader_icon_color ?>;
					}
					.lds-ring div {
						border: 6px solid <?php echo $dh_preloader_icon_color ?>;
						border-color: <?php echo $dh_preloader_icon_color ?> transparent transparent transparent;
					}
					.lds-dual-ring:after {
						border: 5px solid <?php echo $dh_preloader_icon_color ?>;
						border-color: <?php echo $dh_preloader_icon_color ?> transparent <?php echo $dh_preloader_icon_color ?> transparent;
					}
					#preloader.slide-up.in,
					#preloader.slide-down.in {
					  height:100vh !important;
					  max-height:100vh !important;
					  -webkit-transition: max-height calc(<?php echo $dh_preloader_animation_speed ?>s / 1000) cubic-bezier(0.250, 0.460, 0.450, 0.940);
					  -moz-transition: max-height calc(<?php echo $dh_preloader_animation_speed ?>s / 1000) cubic-bezier(0.250, 0.460, 0.450, 0.940);
					  -ms-transition: max-height calc(<?php echo $dh_preloader_animation_speed ?>s / 1000) cubic-bezier(0.250, 0.460, 0.450, 0.940);
					  -o-transition: max-height calc(<?php echo $dh_preloader_animation_speed ?>s / 1000) cubic-bezier(0.250, 0.460, 0.450, 0.940);
					  transition: max-height calc(<?php echo $dh_preloader_animation_speed ?>s / 1000) cubic-bezier(0.250, 0.460, 0.450, 0.940);
					}
					#preloader.slide-right.in,
					#preloader.slide-left.in {
					  width: calc(100vw - (100vw - 100%)) !important;
					  max-width:calc(100vw - (100vw - 100%)) !important;
					  -webkit-transition: max-width calc(<?php echo $dh_preloader_animation_speed ?>s / 1000) cubic-bezier(0.250, 0.460, 0.450, 0.940);
					  -moz-transition: max-width calc(<?php echo $dh_preloader_animation_speed ?>s / 1000) cubic-bezier(0.250, 0.460, 0.450, 0.940);
					  -ms-transition: max-width calc(<?php echo $dh_preloader_animation_speed ?>s / 1000) cubic-bezier(0.250, 0.460, 0.450, 0.940);
					  -o-transition: max-width calc(<?php echo $dh_preloader_animation_speed ?>s / 1000) cubic-bezier(0.250, 0.460, 0.450, 0.940);
					  transition: max-width calc(<?php echo $dh_preloader_animation_speed ?>s / 1000) cubic-bezier(0.250, 0.460, 0.450, 0.940);
					}
					#preloader.fade-in.in {
					  height:100vh !important;
					  min-height:100vh !important;
					  -webkit-transition: opacity calc(<?php echo $dh_preloader_animation_speed ?>s / 1000) cubic-bezier(0.250, 0.460, 0.450, 0.940);
					  -moz-transition: opacity calc(<?php echo $dh_preloader_animation_speed ?>s / 1000) cubic-bezier(0.250, 0.460, 0.450, 0.940);
					  -ms-transition: opacity calc(<?php echo $dh_preloader_animation_speed ?>s / 1000) cubic-bezier(0.250, 0.460, 0.450, 0.940);
					  -o-transition: opacity calc(<?php echo $dh_preloader_animation_speed ?>s / 1000) cubic-bezier(0.250, 0.460, 0.450, 0.940);
					  transition: opacity calc(<?php echo $dh_preloader_animation_speed ?>s / 1000) cubic-bezier(0.250, 0.460, 0.450, 0.940);
					}
					#preloader.fade-out.out {
					  height:100vh !important;
					  min-height:100vh !important;
					}
					#preloader1.vertical-split, 
					#preloader2.vertical-split,
					#preloader1.horizontal-split, 
					#preloader2.horizontal-split,
					#preloader3.vertical-split, 
					#preloader4.vertical-split,
					#preloader3.horizontal-split, 
					#preloader4.horizontal-split {
						background-color: <?php echo $dh_preloader_bg_color ?>;
					    <?php echo get_theme_mod( 'dh_custom_preloader_bg_css') ?>
					}
					#preloader1.vertical-split.in,
					#preloader2.vertical-split.in,
					#preloader3.vertical-split.in,
					#preloader4.vertical-split.in {
						-webkit-transition: max-height calc(<?php echo $dh_preloader_animation_speed ?>s / 1000) cubic-bezier(0.250, 0.460, 0.450, 0.940);
						-moz-transition: max-height calc(<?php echo $dh_preloader_animation_speed ?>s / 1000) cubic-bezier(0.250, 0.460, 0.450, 0.940);
						-ms-transition: max-height calc(<?php echo $dh_preloader_animation_speed ?>s / 1000) cubic-bezier(0.250, 0.460, 0.450, 0.940);
						-o-transition: max-height calc(<?php echo $dh_preloader_animation_speed ?>s / 1000) cubic-bezier(0.250, 0.460, 0.450, 0.940);
						transition: max-height calc(<?php echo $dh_preloader_animation_speed ?>s / 1000) cubic-bezier(0.250, 0.460, 0.450, 0.940);
					}
					#preloader1.horizontal-split.in,
					#preloader2.horizontal-split.in,
					#preloader3.horizontal-split.in,
					#preloader4.horizontal-split.in {
						-webkit-transition: max-width calc(<?php echo $dh_preloader_animation_speed ?>s / 1000) cubic-bezier(0.250, 0.460, 0.450, 0.940);
						-moz-transition: max-width calc(<?php echo $dh_preloader_animation_speed ?>s / 1000) cubic-bezier(0.250, 0.460, 0.450, 0.940);
						-ms-transition: max-width calc(<?php echo $dh_preloader_animation_speed ?>s / 1000) cubic-bezier(0.250, 0.460, 0.450, 0.940);
						-o-transition: max-width calc(<?php echo $dh_preloader_animation_speed ?>s / 1000) cubic-bezier(0.250, 0.460, 0.450, 0.940);
						transition: max-width calc(<?php echo $dh_preloader_animation_speed ?>s / 1000) cubic-bezier(0.250, 0.460, 0.450, 0.940);
					}
					#preloader1.vertical-split.out,
					#preloader2.vertical-split.out,
					#preloader3.vertical-split.out,
					#preloader4.vertical-split.out {
						-webkit-transition: max-height calc(<?php echo $dh_preloader_animation_speed ?>s / 1000) cubic-bezier(0.250, 0.460, 0.450, 0.940);
						-moz-transition: max-height calc(<?php echo $dh_preloader_animation_speed ?>s / 1000) cubic-bezier(0.250, 0.460, 0.450, 0.940);
						-ms-transition: max-height calc(<?php echo $dh_preloader_animation_speed ?>s / 1000) cubic-bezier(0.250, 0.460, 0.450, 0.940);
						-o-transition: max-height calc(<?php echo $dh_preloader_animation_speed ?>s / 1000) cubic-bezier(0.250, 0.460, 0.450, 0.940);
						transition: max-height calc(<?php echo $dh_preloader_animation_speed ?>s / 1000) cubic-bezier(0.250, 0.460, 0.450, 0.940);
					}
					#preloader1.horizontal-split.out,
					#preloader2.horizontal-split.out,
					#preloader3.horizontal-split.out,
					#preloader4.horizontal-split.out {
						-webkit-transition: max-width calc(<?php echo $dh_preloader_animation_speed ?>s / 1000) cubic-bezier(0.250, 0.460, 0.450, 0.940);
						-moz-transition: max-width calc(<?php echo $dh_preloader_animation_speed ?>s / 1000) cubic-bezier(0.250, 0.460, 0.450, 0.940);
						-ms-transition: max-width calc(<?php echo $dh_preloader_animation_speed ?>s / 1000) cubic-bezier(0.250, 0.460, 0.450, 0.940);
						-o-transition: max-width calc(<?php echo $dh_preloader_animation_speed ?>s / 1000) cubic-bezier(0.250, 0.460, 0.450, 0.940);
						transition: max-width calc(<?php echo $dh_preloader_animation_speed ?>s / 1000) cubic-bezier(0.250, 0.460, 0.450, 0.940);
					}
				</style>
			<?php }
			add_action('wp_head', 'dh_preloader');
		}
	}