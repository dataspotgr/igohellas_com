<?php
//=========== Custom Tag Page ===================
	if( false != get_theme_mod( 'dh_tag_enabler_switch' ) ) {
	if (!isset($_GET['et_fb'])) {
		function dh_tag_archive_redirection() {
			$url = $_SERVER["REQUEST_URI"];
			$isItCustomTagArchivePage = strpos($url, '/archive_tag_');
			$id = substr($url, strrpos($url, '_') + 1);
			$idNoSlash = rtrim($id, '/');
			$tag = get_term_by( 'slug', $idNoSlash, 'post_tag' );
			$redirectLink = get_tag_link($tag);
			if ($isItCustomTagArchivePage!==false) {
				wp_redirect( $redirectLink, 301 );
			    exit();
			}
		}
		add_action('template_redirect', 'dh_tag_archive_redirection');
	}
	
	function dh_tag_section_injector() { 
		if ( is_tag() ) {
			// Tag Title Shortcode
			add_shortcode('tag-title', 'tag_title_shortcode');
			function tag_title_shortcode() {
				if ( is_tag() ) {
			        $title = sprintf( __( '%s' ), single_tag_title( '', false ) );
			    }
				return "<span class='title'>" . $title . "</span>";
			}
			// Archive Description Shortcode
			add_shortcode('tag-description', 'tag_description_shortcode');
			function tag_description_shortcode() {
				if ( is_tag() ) {
			        $description = sprintf( __( '%s' ), tag_description( '', false ) );
			    }
				return "<span class='description'>" . $description . "</span>";
			}
			// Archive Found Posts Number
			add_shortcode('posts-found', 'found_tag_posts_number_shortcode');
			function found_tag_posts_number_shortcode() {
				if(is_tag()) {
					$count = $GLOBALS['wp_query']->post_count;
				}
				return $count;
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
			<div id="divi-hacks-tag">
				<div id="page-container">
					<div id="page-content">
						<?php 
						$wpdb = $GLOBALS['wpdb'];
						$tag = get_queried_object();
						$TagPageSlug = "archive_tag_" . $tag->slug;
						$CustomTagArchive = get_page_by_path($TagPageSlug);
						$defaultpage = get_option('dh-tag-page'); 
						$defaultpageid = get_page($defaultpage); 
						$id = $wpdb->get_var($wpdb->prepare("SELECT ID FROM " . $wpdb->posts . " WHERE post_name = '%s' AND post_type = 'page' ", $TagPageSlug) );
					    
					    if (!empty($id)) {
					        echo apply_filters('the_content', $CustomTagArchive->post_content);
					        if (current_user_can('edit_posts')) {
					        	function custom_archive_edit_links($wp_admin_bar) {
					        		$wpdb = $GLOBALS['wpdb'];
									$tag = get_queried_object();
									$TagPageSlug = "archive_tag_" . $tag->slug;
									$CustomTagArchive = get_page_by_path($TagPageSlug);
									$defaultpage = get_option('dh-tag-page'); 
									$defaultpageid = get_page($defaultpage); 
									$wp_admin_bar->add_menu(array('parent' => 'et-use-visual-builder', 'title' => __('Edit in Backend'), 'id' => 'edit-backend', 'meta' => array( 'class' => __('edit-backend')), 'href' => get_edit_post_link($CustomTagArchive)));
									if ( get_post_status($CustomTagArchive) == 'draft' ) {
										$wp_admin_bar->add_menu(array('title' => __('Edit in Visual Builder'), 'id' => 'et-use-visual-builder', 'meta' => array( 'class' => __('edit-visual')), 'href' => get_permalink($CustomTagArchive).'&et_fb=1'));
									} else {
										$wp_admin_bar->add_menu(array('title' => __('Edit in Visual Builder'), 'id' => 'et-use-visual-builder', 'meta' => array( 'class' => __('edit-visual')), 'href' => get_permalink($CustomTagArchive).'?et_fb=1'));
									}
								}
								add_action('admin_bar_menu', 'custom_archive_edit_links', 999);
							}
						} else {
							echo apply_filters('the_content', $defaultpageid->post_content);
							if (current_user_can('edit_posts')) {
								function custom_archive_edit_links($wp_admin_bar) {
									$wpdb = $GLOBALS['wpdb'];
									$tag = get_queried_object();
									$TagPageSlug = "archive_tag_" . $tag->slug;
									$CustomTagArchive = get_page_by_path($TagPageSlug);
									$defaultpage = get_option('dh-tag-page'); 
									$defaultpageid = get_page($defaultpage); 
									$wp_admin_bar->add_menu(array('parent' => 'et-use-visual-builder', 'title' => __('Edit in Backend'), 'id' => 'edit-backend', 'meta' => array( 'class' => __('edit-backend')), 'href' => get_edit_post_link($defaultpageid)));
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
					$(".et_divi_theme.tag #et-main-area").prepend($("#divi-hacks-tag"));
					$("#divi-hacks-tag").show();
					$("#content-area").clone().appendTo("#divi-hacks-tag .archive");
					$( "body.tag .archive.show-button article" ).each(function(){
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
						var showoffset = offsetposts + showposts;
						$(this).find("article:eq("+showoffset+"n) ~ article").remove(); 
					});
					$( ".archive[data-offset]" ).each(function(){
						var offsetposts = $(this).data("offset");
						$(this).find("article:eq("+offsetposts+")").prevAll('article').remove(); 
					});
					function trashclass() {
						$('body.tag.et_transparent_nav #divi-hacks-tag .et_pb_section_first').removeClass('et_pb_section_first').attr('style', '');
					};
					$(window).load(function() {
				      setTimeout(function() {
				        trashclass();
				      }, 0);
				    });
				});
			</script>
			<style type="text/css">
				#divi-hacks-tag {
					display:block;
				}
				.et_fixed_nav.et_show_nav.et_secondary_nav_enabled #divi-hacks-tag #page-container, 
				.et_non_fixed_nav.et_transparent_nav.et_show_nav.et_secondary_nav_enabled #divi-hacks-tag #page-container {
	    			padding-top: 0px !important;
				}
				#divi-hacks-tag div#page-content {
					z-index: 1;
					position: relative;
					background: #fff;
				}
				body.tag #et-main-area #main-content,
				body.tag #et-main-area #main-content {
					display:none;
				}
			</style>
		<?php } else { ?>
			<style type="text/css">
				#divi-hacks-tag {
					display:none;
				}
				body.tag #et-main-area #main-content,
				body.tag #et-main-area #main-content {
					display:block;
				}
			</style>
		<?php }
	} 
	add_action('wp_footer', 'dh_tag_section_injector');
	}
	function dh_tag_customizer($wp_customize) {
	$wp_customize->add_section('dh_custom_tag_options', array(    
	'priority' => 1,
	'title' => __('Custom Tag Archive Page', 'Divi Hacks' ),
	'panel'    => 'divi_hack_options',
	));
		$wp_customize->add_setting('dh_tag_enabler_switch', array(
		'default' => false,
		'type'        => 'theme_mod',
		'capability'  => 'edit_theme_options',
		));
		$wp_customize->add_control('dh_tag_enabler_switch', array(
		'label' => __('Enable Custom Tag Archive Page'),
		'section' => 'dh_custom_tag_options',
		'type' => 'checkbox',
		'settings' => 'dh_tag_enabler_switch'
		));
		$wp_customize->add_setting('dh-tag-page', array(
		'capability' => 'edit_theme_options',
		'type' => 'option',
		));
		$wp_customize->add_control('dh-tag-page', array(
		'label' => __('Default Tag Archive Page:'),
		'description' => __('Create a page using the page builder and add the shortcode <b>[dh-archive]</b> where you want the posts to appear. Then select that page here.'),
		'section' => 'dh_custom_tag_options',
		'type' => 'dropdown-pages',
		'settings' => 'dh-tag-page',
		));
		$wp_customize->add_setting('dh-tag-page-info', array(
		'capability' => 'edit_theme_options',
		'type' => 'text',
		));
		$wp_customize->add_control('dh-tag-page-info', array(
		'label' => __('(OPTIONAL) Set Different Pages for each Tag Archive'),
		'description' => __('You may also set a custom page for each tag too. <h3>How it Works</h3> Divi Hacks will first look for a page with the slug <b>archive_tag_###</b> (### = slug of the tag). If no page is found for that tag, the page you set above will be displayed instead.<h3>How to Set it Up</h3>1. Create a new page with the slug <b>archive_tag_###</b> (replace ### with the SLUG of the tag.<br />2. Using the page builder, add the shortcode <b>[dh-archive]</b> where you want the posts to appear on that page.<h3>Notes</h3>When you\'re setting up your tags, make sure the tag slugs do NOT contain underscores (_).<br /><br /><b><a href="https://divihacks.com/docs/custom-archives/#tag" target="_blank">View documentation</a> to learn more about creating custom archives, and about the various shortcodes available to use on your custom archive pages.</b>'),
		'section' => 'dh_custom_tag_options',
		'settings' => 'dh-tag-page-info',
		));
	}
	add_action('customize_register', 'dh_tag_customizer');