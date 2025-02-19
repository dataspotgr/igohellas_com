<?php
//=========== Custom CPT Archive Page ===================
	if( false != get_theme_mod( 'dh_cptarchive_enabler_switch' ) ) {
	if (!isset($_GET['et_fb'])) {
		function dh_cptarchive_redirection() {
			$url = $_SERVER["REQUEST_URI"];
			$isItCustomCPTArchivePage = strpos($url, '/archive_cpt_');
			$id = substr($url, strrpos($url, '_') + 1);
			$idNoSlash = rtrim($id, '/');
			$redirectLink = get_post_type_archive_link($idNoSlash);
			if ($isItCustomCPTArchivePage!==false) {
			    wp_redirect( $redirectLink, 301 );
			    exit();
			}
		}
		add_action('template_redirect', 'dh_cptarchive_redirection');
	}
	function dh_cptarchive_section_injector() {
		
		if ( is_post_type_archive() ) {

			// Archive Found Posts Number
			add_shortcode('posts-found', 'found_tag_posts_number_shortcode');
			function found_tag_posts_number_shortcode() {
				if( is_post_type_archive() ) {
					$count = $GLOBALS['wp_query']->found_posts;
				}
				return $count;
			}

			// CPT Name Shortcode - Plural
			add_shortcode('cpt-name-plural', 'cpt_plural_name_shortcode');
			function cpt_plural_name_shortcode() {
				if( is_post_type_archive() ) {
					$postType = get_queried_object();
				}
				return $postType->labels->name;
			}

			// CPT Name Shortcode - Singular
			add_shortcode('cpt-name-singular', 'cpt_singular_name_shortcode');
			function cpt_singular_name_shortcode() {
				if( is_post_type_archive() ) {
					$postType = get_queried_object();
				}
				return $postType->labels->singular_name;
			} 
			// Archive Shortcode
			function archive_container_shortcode( $atts ) {
				// Attributes
				$atts = shortcode_atts(
					array(
						'button' => 'show',
						'button-align' => 'left',
						'style' => '',
						'sidebar' => '',
						'posts' => '',
						'meta' => '',
						'date' => '',
						'author' => '',
						'comments' => '',
						'pagination' => '',
						'categories' => '',
						'image' => '',
						'excerpt' => '',
						'columns' => '',
						'offset' => '',
					),
					$atts
				);
				// Show Button
					if ( 'show' == $atts['button'] ) {
					    $button = ' show-button';
					} else {
					    $button = '';
					}
				// Button Align
					if ( 'center' == $atts['button-align'] ) {
					    $button_align = ' button-center';
					} else if ( 'left' == $atts['button-align'] ) {
					    $button_align = ' button-left';
					} else if ( 'right' == $atts['button-align'] ) {
					    $button_align = ' button-right';
					} else {
					    $button_align = '';
					}
				// Style
					if ( 'grid' == $atts['style'] ) {
					    $style = ' grid';
					} else if ( 'default' == $atts['style'] ) {
					    $style = ' default';
					} else {
					    $style = '';
					}
				// Show Sidebar
					if ( 'hide' == $atts['sidebar'] ) {
					    $sidebar = ' no-sidebar';
					} else if ( 'show' == $atts['sidebar'] ) {
					    $sidebar = ' sidebar';
					} else {
					    $sidebar = '';
					}
				// Show Meta
					if ( 'hide' == $atts['meta'] ) {
					    $meta = ' no-meta';
					} else if ( 'show' == $atts['meta'] ) {
					    $meta = ' show-meta';
					} else {
					    $meta = ' show-meta';
					}
				// Show Image
					if ( 'hide' == $atts['image'] ) {
					    $image = ' no-image';
					} else if ( 'show' == $atts['image'] ) {
					    $image = ' show-image';
					} else {
					    $image = '';
					}
				// Show Excerpt
					if ( 'hide' == $atts['excerpt'] ) {
					    $excerpt = ' no-excerpt';
					} else if ( 'show' == $atts['excerpt'] ) {
					    $excerpt = ' show-excerpt';
					} else {
					    $excerpt = '';
					}
				// Show Date
					if ( 'hide' == $atts['date'] ) {
					    $date = ' no-date';
					} else if ( 'show' == $atts['date'] ) {
					    $date = ' show-date';
					} else {
					    $date = '';
					}
				// Show Meta Author
					if ( 'hide' == $atts['author'] ) {
					    $author = ' no-author';
					} else if ( 'show' == $atts['author'] ) {
					    $author = ' show-author';
					} else {
					    $author = '';
					}
				// Show Meta Comments
					if ( 'hide' == $atts['comments'] ) {
					    $comments = ' no-comments';
					} else if ( 'show' == $atts['comments'] ) {
					    $comments = ' show-comments';
					} else {
					    $comments = '';
					}
				// Show Meta Categories
					if ( 'hide' == $atts['categories'] ) {
					    $categories = ' no-categories';
					} else if ( 'show' == $atts['categories'] ) {
					    $categories = ' show-categories';
					} else {
					    $categories = '';
					}
				// Show Pagination
					if ( 'hide' == $atts['pagination'] ) {
					    $pagination = ' no-pagination';
					} else if ( 'show' == $atts['pagination'] ) {
					    $pagination = ' show-pagination';
					} else {
					    $pagination = '';
					}
				// Posts Number	
					if ( '0' == $atts['posts'] ) {
					    $posts = '0';
					} else if ( '' == $atts['posts'] ) {
					    $posts = 'unset';
					} else {
					    $posts = esc_html__($atts['posts'], 'dh-archive');
					}
				// Offset Posts
					if ( '' == $atts['offset'] ) {
					    $offset = '0';
					} else {
					    $offset = esc_html__($atts['offset'], 'dh-archive');
					}
				// Number of Columns
					if ( '0' == $atts['columns'] ) {
					    $columns = '0';
					} else if ( '' == $atts['columns'] ) {
					    $columns = 'unset';
					} else {
					    $columns = esc_html__($atts['columns'], 'dh-archive');
					}
				return $archive_container = "<div class='archive".$button."".$button_align."".$style."".$sidebar."".$meta."".$date."".$author."".$pagination."".$categories."".$comments."".$excerpt."".$image."' data-posts='".$posts."' data-dhcolumns='".$columns."' data-offset='".$offset."'></div>";
			}
			add_shortcode( 'dh-archive', 'archive_container_shortcode' ); 
			?>
			<div id="divi-hacks-cptarchive">
				<div id="page-container">
					<div id="page-content">
						<?php 

						$wpdb = $GLOBALS['wpdb'];
						$postType = get_queried_object();
						$cptpageslug = "archive_cpt_" . $postType->rewrite['slug'];
						$customcptarchive = get_page_by_path($cptpageslug);
						$defaultpage = get_option('dh-cptarchive-page'); 
						$defaultpageid = get_page($defaultpage); 
						$id = $wpdb->get_var($wpdb->prepare("SELECT ID FROM " . $wpdb->posts . " WHERE post_name = '%s' AND post_type = 'page' ", $cptpageslug) );
					    
					    if (!empty($id)) {
					        echo apply_filters('the_content', $customcptarchive->post_content);
					        if (current_user_can('edit_posts')) {
					        	function custom_archive_edit_links($wp_admin_bar) {
					        		$wpdb = $GLOBALS['wpdb'];
									$postType = get_queried_object();
									$cptpageslug = "archive_cpt_" . $postType->rewrite['slug'];
									$customcptarchive = get_page_by_path($cptpageslug);
									$defaultpage = get_option('dh-cptarchive-page'); 
									$defaultpageid = get_page($defaultpage); 
									$wp_admin_bar->add_menu(array('parent' => 'et-use-visual-builder', 'title' => __('Edit in Backend'), 'id' => 'edit-backend', 'meta' => array( 'class' => __('edit-backend')), 'href' => get_edit_post_link($customcptarchive)));
									if ( get_post_status($customcptarchive) == 'draft' ) {
										$wp_admin_bar->add_menu(array('title' => __('Edit in Visual Builder'), 'id' => 'et-use-visual-builder', 'meta' => array( 'class' => __('edit-visual')), 'href' => get_permalink($customcptarchive).'&et_fb=1'));
									} else {
										$wp_admin_bar->add_menu(array('title' => __('Edit in Visual Builder'), 'id' => 'et-use-visual-builder', 'meta' => array( 'class' => __('edit-visual')), 'href' => get_permalink($customcptarchive).'?et_fb=1'));
									}
								}
								add_action('admin_bar_menu', 'custom_archive_edit_links', 999);
							}
						} else {
							echo apply_filters('the_content', $defaultpageid->post_content);
							if (current_user_can('edit_posts')) {
								function custom_archive_edit_links($wp_admin_bar) {
									$wpdb = $GLOBALS['wpdb'];
									$postType = get_queried_object();
									$cptpageslug = "archive_cpt_" . $postType->rewrite['slug'];
									$customcptarchive = get_page_by_path($cptpageslug);
									$defaultpage = get_option('dh-cptarchive-page'); 
									$defaultpageid = get_page($defaultpage); 
									$wp_admin_bar->add_menu(array('parent' => 'et-use-visual-builder', 'title' => __('Edit in Backend'), 'id' => 'edit-backend','meta' => array( 'class' => __('edit-backend')),  'href' => get_edit_post_link($defaultpageid)));
									if ( get_post_status($defaultpageid) == 'draft' ) {
										$wp_admin_bar->add_menu(array('title' => __('Edit in Visual Builder'), 'id' => 'et-use-visual-builder', 'meta' => array( 'class' => __('edit-visual')), 'href' => get_permalink($defaultpageid).'&et_fb=1'));
									} else {
										$wp_admin_bar->add_menu(array('title' => __('Edit in Visual Builder'), 'id' => 'et-use-visual-builder', 'meta' => array( 'class' => __('edit-visual')), 'href' => get_permalink($defaultpageid).'?et_fb=1'));
									}
								}
								add_action('admin_bar_menu', 'custom_archive_edit_links', 999);
							}
						}

						?>
					</div>
				</div>
			</div>
			<script>
				jQuery(function($){
					$(".et_divi_theme[class*='post-type-archive-'] #et-main-area").prepend($("#divi-hacks-cptarchive"));
					$("#divi-hacks-cptarchive").show();
					$("#content-area").clone().appendTo("#divi-hacks-cptarchive .archive");
					$( "body.post-type-archive .archive.show-button article" ).each(function(){
						var copyLink = $(this).find(".entry-title a").attr("href");
						$(this).append("<a class='et_pb_button et_pb_read_more_button'>read more</a>");
						$(this).find(".et_pb_button").attr("href",copyLink);
					});
					$("article").wrapInner("<div class='dh-excerpt'></div>");
						$(".entry-title, .entry-featured-image-url, .post-meta").each(function() {
						    $(this).parent().before(this);
						})
					$( ".archive[data-posts]" ).each(function(){
						var offsetposts = $(this).data("offset");
						var showposts = $(this).data("posts");
						var showoffset = offsetposts + showposts - 1;
						$(this).find("article:eq("+showoffset+") ~ article").remove(); 
					});
					$( ".archive[data-offset]" ).each(function(){
						var offsetposts = $(this).data("offset");
						$(this).find("article:eq("+offsetposts+")").prevAll('article').remove(); 
					});
					function trashclass() {
						$('body.post-type-archive.et_transparent_nav #divi-hacks-cptarchive .et_pb_section_first').removeClass('et_pb_section_first').attr('style', '');
					};
					$(window).load(function() {
				      setTimeout(function() {
				        trashclass();
				      }, 0);
				    });
				});
			</script>
			<style type="text/css">
				#divi-hacks-cptarchive {
					display:block;
				}
				.et_fixed_nav.et_show_nav.et_secondary_nav_enabled #divi-hacks-cptarchive #page-container, 
				.et_non_fixed_nav.et_transparent_nav.et_show_nav.et_secondary_nav_enabled #divi-hacks-cptarchive #page-container {
	    			padding-top: 0px !important;
				}
				#divi-hacks-cptarchive div#page-content {
					z-index: 1;
					position: relative;
					background: #fff;
				}
				body[class*="post-type-archive-"] #et-main-area #main-content,
				body[class*="post-type-archive-"] #et-main-area #main-content {
					display:none;
				}
			</style>
			<?php } else { ?>
			<style type="text/css">
				#divi-hacks-cptarchive {
				display:none;
			}
			body[class*="post-type-archive-"] #et-main-area #main-content,
			body[class*="post-type-archive-"] #et-main-area #main-content {
				display:block;
			}
			</style> <?php 
		}
	} 
	add_action('wp_footer', 'dh_cptarchive_section_injector');
	}
	function dh_cptarchive_customizer($wp_customize) {
	$wp_customize->add_section('dh_custom_cptarchive_options', array(    
	'priority' => 1,
	'title' => __('Custom CPT Archive Page', 'Divi Hacks' ),
	'panel'    => 'divi_hack_options',
	));
		$wp_customize->add_setting('dh_cptarchive_enabler_switch', array(
		'default' => false,
		'type'        => 'theme_mod',
		'capability'  => 'edit_theme_options',
		));
		$wp_customize->add_control('dh_cptarchive_enabler_switch', array(
		'label' => __('Enable Custom Post Type Archive Page'),
		'section' => 'dh_custom_cptarchive_options',
		'type' => 'checkbox',
		'settings' => 'dh_cptarchive_enabler_switch'
		));
		$wp_customize->add_setting('dh-cptarchive-page', array(
		'capability' => 'edit_theme_options',
		'type' => 'option',
		));
		$wp_customize->add_control('dh-cptarchive-page', array(
		'label' => __('Default CPT Archive Page:'),
		'description' => __('Create a page using the page builder and add the shortcode <b>[dh-archive]</b> where you want the posts to appear. Then select that page here.'),
		'section' => 'dh_custom_cptarchive_options',
		'type' => 'dropdown-pages',
		'settings' => 'dh-cptarchive-page',
		));
		$wp_customize->add_setting('dh-cptarchive-page-info', array(
		'capability' => 'edit_theme_options',
		'type' => 'text',
		));
		$wp_customize->add_control('dh-cptarchive-page-info', array(
		'label' => __('(OPTIONAL) Set Different Pages for each CPT Archive'),
		'description' => __('You may also set a custom page for each CPT archive too. <h3>How it Works</h3> Divi Hacks will first look for a page with the slug <b>archive_cpt_###</b> (### = slug of the CPT). If no page is found for that CPT, the page you set above will be displayed instead.<h3>How to Set it Up</h3>1. Create a new page with the slug <b>archive_cpt_###</b> (replace ### with the SLUG of the CPT.<br />2. Using the page builder, add the shortcode <b>[dh-archive]</b> where you want the posts to appear on that page.<h3>Notes</h3>When you\'re setting up your CPTs, make sure the CPT slugs do NOT contain underscores (_).<br /><br /><b><a href="https://divihacks.com/docs/custom-archives/#cpt" target="_blank">View documentation</a> to learn more about creating custom archives, and about the various shortcodes available to use on your custom archive pages.</b>'),
		'section' => 'dh_custom_cptarchive_options',
		'settings' => 'dh-cptarchive-page-info',
		));
	}
	add_action('customize_register', 'dh_cptarchive_customizer');