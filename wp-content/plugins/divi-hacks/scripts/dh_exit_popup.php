<?php 

//=========== Custom Maintenance Mode Page ===================
	function dh_exit_popup_customizer($wp_customize) {
		$wp_customize->add_section('dh_exit_popup_options', array(    
		'priority' => 9,
		'title' => __('Exit Popup', 'Divi Hacks' ),
		'panel'    => 'divi_hack_options',
		));
			$wp_customize->add_setting('dh_page_exit_popup_enabler_switch', array(
			'default' => false,
			'type'        => 'theme_mod',
			'capability'  => 'edit_theme_options',
			));
			$wp_customize->add_control('dh_page_exit_popup_enabler_switch', array(
			'label' => __('Enable Page Exit Popup'),
			'description' => __('Enable page-by-page exit popups by adding \'exit-popup\' to the element'),
			'section' => 'dh_exit_popup_options',
			'type' => 'checkbox',
			'settings' => 'dh_page_exit_popup_enabler_switch'
			));
			$wp_customize->add_setting('dh_exit_popup_enabler_switch', array(
			'default' => false,
			'type'        => 'theme_mod',
			'capability'  => 'edit_theme_options',
			));
			$wp_customize->add_control('dh_exit_popup_enabler_switch', array(
			'label' => __('Enable Global Exit Popup'),
			'description' => __('Use a Divi Library Item as an Exit Intent Popup.'),
			'section' => 'dh_exit_popup_options',
			'type' => 'checkbox',
			'settings' => 'dh_exit_popup_enabler_switch'
			));
			$divi_library_list = array();
			$args = array(
				'post_type' => 'et_pb_layout', 
				'posts_per_page' => 999,
			);
			$layouts = get_posts( $args ); 
			foreach($layouts as $layout) {
			    $divi_library_list[$layout->ID] = $layout->post_title;
			}
			$wp_customize->add_setting( 'dh_exit_popup_layout', array(
			    'transport' => 'refresh',
			    'capability' => 'edit_theme_options',
				'type' => 'option',
			));
			$wp_customize->add_control( 'dh_exit_popup_layout', array(
			    'label' => __('Select a Divi Layout'),
			    'type'     => 'select',
			    'section'  => 'dh_exit_popup_options',
			    'choices'  => $divi_library_list,
			));
			$wp_customize->add_setting( 'dh_exit_popup_expire_in', array(
				'default'       => '1',
				'type'          => 'option',
				'capability'    => 'edit_theme_options',
				'transport'     => 'refresh',
				'sanitize_callback' => 'absint',
			));
			$wp_customize->add_control( new ET_Divi_Range_Option ( $wp_customize, 'dh_exit_popup_expire_in', array(
				'label'	      => esc_html__( 'Don\'t show the popup again for how many days?', 'Divi' ),
				'section'     => 'dh_exit_popup_options',
				'type'        => 'range',
				'settings'	=> 'dh_exit_popup_expire_in',
				'input_attrs' => array(
					'min'  => 0,
					'max'  => 100,
					'step' => 1
				),
			)));
			$wp_customize->add_setting( 'dh_exit_popup_animation', array(
				'capability' => 'edit_theme_options',
				'sanitize_callback' => 'dh_sanitize_select',
				'default' => 'mfp-fade',
			));
			$wp_customize->add_control( 'dh_exit_popup_animation', array(
				'type' => 'select',
				'section' => 'dh_exit_popup_options',
				'label' => __( 'Popup Animation' ),
				'settings'	=> 'dh_exit_popup_animation',
				'choices' => array(
					'mfp-fade' => __( 'Fade' ),
					'animate-bounce' => __( 'Bounce' ),
					'animate-flash' => __( 'Flash' ),
					'animate-pulse' => __( 'Pulse' ),
					'animate-rubberband' => __( 'Rubber Band' ),
					'animate-shake' => __( 'Shake' ),
					'animate-headshake' => __( 'Head Shake' ),
					'animate-swing' => __( 'Swing' ),
					'animate-tada' => __( 'Tada' ),
					'animate-wobble' => __( 'Wobble' ),
					'animate-jello' => __( 'Jello' ),
					'animate-bouncein' => __( 'Bounce In' ),
					'animate-bounceindown' => __( 'Bounce In Down' ),
					'animate-bounceinleft' => __( 'Bounce In Left' ),
					'animate-bounceinright' => __( 'Bounce In Right' ),
					'animate-bounceinup' => __( 'Bounce In Up' ),
					'animate-lightspeedin' => __( 'Light Speed In' ),
					'animate-jackinthebox' => __( 'Jack In The Box' ),
				),
			));
			$wp_customize->add_setting( 'dh_exit_popup_overlay_color', array(
				'default'           => 'rgba(0,0,0,0.8)',
				'type'              => 'option',
				'capability'        => 'edit_theme_options',
				'sanitize_callback' => 'et_sanitize_alpha_color',
			));
			$wp_customize->add_control( new ET_Divi_Customize_Color_Alpha_Control( $wp_customize, 'dh_exit_popup_overlay_color', array(
				'label'     => esc_html__( 'Background Overlay Color', 'divi-hacks'),
				'section'   => 'dh_exit_popup_options',
				'settings'  => 'dh_exit_popup_overlay_color',
			)));					
	}
	add_action('customize_register', 'dh_exit_popup_customizer');

	if (!isset($_GET['et_fb'])) { 
		
		if( false != get_theme_mod( 'dh_exit_popup_enabler_switch' ) ) {

			function dh_exit_popup_injector() { ?>
				<div id="divi-hacks-exit-popup" class="exit-popup">
					<?php 
						$exit_popup_layout = get_option('dh_exit_popup_layout'); 
						echo do_shortcode('[et_pb_section global_module="' . $exit_popup_layout . '"][/et_pb_section]'); 
					?>
				</div> <?php 
			} 
			add_action('wp_footer', 'dh_exit_popup_injector');

			function dh_exit_popup_code() { 
				$dh_exit_popup_overlay_color  = get_option('dh_exit_popup_overlay_color','rgba(0,0,0,0.8)');
				?>
				<style id="dh_exit_popup_css">
					.mfp-bg.dh {
						background-color: <?php echo $dh_exit_popup_overlay_color; ?> !important;
					}
					#mfp-wrap.dh #page-container.mfp-content {
					    padding-top: 0px !important;
					}
					div#divi-hacks-exit-popup > *:not(button) {
					    width: 100% !important;
					}
				</style>
			
				<script id="dh_exit_popup_scripts">
					jQuery(document).ready(function($){
						$(".et_divi_theme").prepend($("#divi-hacks-exit-popup"));
						if ($("#divi-hacks-exit-popup.exit-popup").length && $(".et_builder_inner_content .exit-popup").length) { } else {
							var check_cookie = $.cookie('dhexitpopglobal');
						    if (check_cookie == undefined) {
						    	var expiredays = <?php echo get_option('dh_exit_popup_expire_in', '1') ?>;
						        $.cookie('dhexitpopglobal', 'yes', {expires: expiredays});
					        	// Exit intent
								function addEvent(obj, evt, fn) {
								  if (obj.addEventListener) {
								    obj.addEventListener(evt, fn, false);
								  } else if (obj.attachEvent) {
								    obj.attachEvent("on" + evt, fn);
								  }
								}

								// Exit intent trigger
								addEvent(document, 'mouseout', function(evt) {

								  	if (evt.toElement === null && evt.relatedTarget === null && !localStorage.getItem('exitintent_show')) {
								  		$.magnificPopup.open({
											items: {
											src: '#divi-hacks-exit-popup.exit-popup' //ID of inline element
											},
											type: 'inline',
											removalDelay: 1, //Delaying the removal in order to fit in the animation of the popup
											mainClass:<?php 
													$dh_exit_popup_animation = get_theme_mod('dh_exit_popup_animation', 'dh mfp-fade'); 
									      			if ( $dh_exit_popup_animation == 'mfp-fade' ) { ?> 'dh mfp-fade', <?php } 
													if ( $dh_exit_popup_animation == 'animate-bounce' ) { ?> 'dh animate-bounce', <?php } 
													if ( $dh_exit_popup_animation == 'animate-flash' ) { ?> 'dh animate-flash', <?php } 
													if ( $dh_exit_popup_animation == 'animate-pulse' ) { ?> 'dh animate-pulse', <?php } 
													if ( $dh_exit_popup_animation == 'animate-rubberband' ) { ?> 'dh animate-rubberBand', <?php } 
													if ( $dh_exit_popup_animation == 'animate-shake' ) { ?> 'dh animate-shake', <?php } 
													if ( $dh_exit_popup_animation == 'animate-headshake' ) { ?> 'dh animate-headShake', <?php } 
													if ( $dh_exit_popup_animation == 'animate-swing' ) { ?> 'dh animate-swing', <?php } 
													if ( $dh_exit_popup_animation == 'animate-tada' ) { ?> 'dh animate-tada', <?php } 
													if ( $dh_exit_popup_animation == 'animate-wobble' ) { ?> 'dh animate-wobble', <?php } 
													if ( $dh_exit_popup_animation == 'animate-jello' ) { ?> 'dh animate-jello', <?php } 
													if ( $dh_exit_popup_animation == 'animate-bouncein' ) { ?> 'dh animate-bounceIn', <?php } 
													if ( $dh_exit_popup_animation == 'animate-bounceindown' ) { ?> 'dh animate-bounceInDown', <?php } 
													if ( $dh_exit_popup_animation == 'animate-bounceinleft' ) { ?> 'dh animate-bounceInLeft', <?php } 
													if ( $dh_exit_popup_animation == 'animate-bounceinright' ) { ?> 'dh animate-bounceInRight', <?php } 
													if ( $dh_exit_popup_animation == 'animate-bounceinup' ) { ?> 'dh animate-bounceInUp', <?php } 
													if ( $dh_exit_popup_animation == 'animate-lightspeedin' ) { ?> 'dh animate-lightSpeedIn', <?php }
													if ( $dh_exit_popup_animation == 'animate-jackinthebox' ) { ?> 'dh animate-jackInTheBox', <?php }
									      		?>
									    });
								  	}
									
								  	$(".mfp-content").css('padding-top', '0px').css('width', 'auto').attr("id", "page-container");;
								});
							}
						}
					});
				</script> <?php 
			}
			add_action( 'wp_head', 'dh_exit_popup_code' );
		
		}
		
		if( false != get_theme_mod( 'dh_page_exit_popup_enabler_switch' ) ) {
				    
			function dh_exit_popup_page_code() { ?>
				<style id="dh_exit_popup_page_css">
					#mfp-wrap.dh #page-container.mfp-content {
					    padding-top: 0px !important;
					}
					div#divi-hacks-exit-popup > *:not(button) {
					    width: 100% !important;
					}
					body.hide-exit-popup .mfp-ready {
                        display: none;
                    }   
				</style>
				<script id="dh_exit_popup_page_scripts">
					jQuery(document).ready(function($){
					    if ( $(".et_builder_inner_content .exit-popup").length ) {
							var check_cookie = $.cookie('dhexitpoppage');
						    if (check_cookie == undefined) {
						    	var expiredays = <?php echo get_option('dh_exit_popup_expire_in', '1') ?>;
						        $.cookie('dhexitpoppage', 'yes', {expires: expiredays});
						        
						        // Exit intent
    							function addEvent(obj, evt, fn) {
    							  if (obj.addEventListener) {
    							    obj.addEventListener(evt, fn, false);
    							  } else if (obj.attachEvent) {
    							    obj.attachEvent("on" + evt, fn);
    							  }
    							}
    
    							// Exit intent trigger
    							addEvent(document, 'mouseout', function(evt) {
    
    							  	if (evt.toElement === null && evt.relatedTarget === null && !localStorage.getItem('exitintent_show')) {
    							  		$.magnificPopup.open({
    										items: {
    										    src: '.et_builder_inner_content .exit-popup', //ID of inline element
    										    type: 'inline',
    										},
    										removalDelay: 1, //Delaying the removal in order to fit in the animation of the popup
    										mainClass: 'mfp-fade',
    										callbacks: {
                                                open: function() {
                                                    $.magnificPopup.instance.close = function() {
                                                        $('body').addClass('hide-exit-popup');
                                                
                                                        // Call the original close method to close the popup
                                                        $.magnificPopup.proto.close.call(this);
                                                    };
                                                }
                                            }
    								    });
    							  	}
    							  	$(".mfp-bg").hide();
    							  	$(".mfp-content").css('padding-top', '0px').css('width', 'auto').attr("id", "page-container");
    							});
						    }
						}
						$('.lightbox-overlay, .mfp-close').on('click',function () {
                            $('body').addClass('hide-exit-popup');
                        });
					});
				</script> <?php
			}
			add_action( 'wp_head', 'dh_exit_popup_page_code' );
		}
	}
	