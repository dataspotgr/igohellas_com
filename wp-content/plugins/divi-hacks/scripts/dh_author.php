<?php
//=========== Custom Author Page ===================
	if( false != get_theme_mod( 'dh_author_enabler_switch' ) ) {
	if (!isset($_GET['et_fb'])) {
		function dh_author_archive_redirection() {
			$url = $_SERVER["REQUEST_URI"];
			$isItCustomAuthorArchivePage = strpos($url, '/archive_author_');
			$username = substr($url, strrpos($url, '_') + 1);
			$usernameNoSlash = rtrim($username, '/');
			$user = get_user_by( 'login', $usernameNoSlash );
			if($user) { 
				$authorID = $user->ID; 
				$redirectLink = get_home_url() . "/?author=" .$authorID;
				if ($isItCustomAuthorArchivePage!==false) {
					wp_redirect( $redirectLink, 301 );
					exit();
				}
			}
		}
		add_action('template_redirect', 'dh_author_archive_redirection');
	}
	function dh_author_section_injector() { 
		if ( is_author() ) { 
			// Author Posts Number
			add_shortcode('posts-found', 'found_author_posts_number_shortcode');
			function found_author_posts_number_shortcode() {
				global $wp_query;
				return $wp_query->found_posts;
			}
			
			// Author Name Shortcode
			add_shortcode('author-name', 'author_name_shortcode');
			function author_name_shortcode() {
				$author = get_userdata( get_query_var('author') );
				return $author->display_name;
			}

			// Author Avatar Shortcode
			add_shortcode('author-avatar', 'author_avatar_shortcode');
			function author_avatar_shortcode() {
				$author = get_userdata( get_query_var('author') );
				$email = $author->user_email;
				return get_avatar( $email, $size = '500', $default = 'avatar_default', $alt = '', array( 'class' => 'dh-shortcode-avatar' ) );
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
			<div id="divi-hacks-author">
				<div id="page-container">
					<div id="page-content">
						<?php 
						$wpdb = $GLOBALS['wpdb'];
						$author = get_userdata( get_query_var('author') );
						$authorpageslug = "archive_author_" . $author->user_login;
						$customauthorarchive = get_page_by_path($authorpageslug);
						$defaultpage = get_option('dh-author-page'); 
						$defaultpageid = get_page($defaultpage); 
						$id = $wpdb->get_var($wpdb->prepare("SELECT ID FROM " . $wpdb->posts . " WHERE post_name = '%s' AND post_type = 'page' ", $authorpageslug) );
					    
					    if (!empty($id)) {
					        echo apply_filters('the_content', $customauthorarchive->post_content);
					        if (current_user_can('edit_posts')) {
					        	function custom_archive_edit_links($wp_admin_bar) {
					        		$wpdb = $GLOBALS['wpdb'];
									$author = get_userdata( get_query_var('author') );
									$authorpageslug = "archive_author_" . $author->user_login;
									$customauthorarchive = get_page_by_path($authorpageslug);
									$defaultpage = get_option('dh-author-page'); 
									$defaultpageid = get_page($defaultpage); 
									$id = $wpdb->get_var($wpdb->prepare("SELECT ID FROM " . $wpdb->posts . " WHERE post_name = '%s' AND post_type = 'page' ", $authorpageslug) );
									$wp_admin_bar->add_menu(array('parent' => 'edit', 'title' => __('Edit in Backend'), 'id' => 'dh-be-edit', 'href' => get_edit_post_link($customauthorarchive)));
									if ( get_post_status($customauthorarchive) == 'draft' ) {
										$wp_admin_bar->add_menu(array('title' => __('Edit in Visual Builder'), 'id' => 'et-use-visual-builder', 'href' => get_permalink($customauthorarchive).'&et_fb=1'));
										$wp_admin_bar->add_menu(array('parent' => 'edit', 'title' => __('Edit in Visual Builder'), 'id' => 'vb-edit', 'href' => get_permalink($customauthorarchive).'&et_fb=1'));
									} else {
										$wp_admin_bar->add_menu(array('title' => __('Edit in Visual Builder'), 'id' => 'et-use-visual-builder', 'href' => get_permalink($customauthorarchive).'?et_fb=1'));
										$wp_admin_bar->add_menu(array('parent' => 'edit', 'title' => __('Edit in Visual Builder'), 'id' => 'vb-edit', 'href' => get_permalink($customauthorarchive).'?et_fb=1'));
									}
								}
								add_action('admin_bar_menu', 'custom_archive_edit_links', 999);
							}
						} else {
							echo apply_filters('the_content', $defaultpageid->post_content);
							if (current_user_can('edit_posts')) {
								function custom_archive_edit_links($wp_admin_bar) {
									$wpdb = $GLOBALS['wpdb'];
									$author = get_userdata( get_query_var('author') );
									$authorpageslug = "archive_author_" . $author->user_login;
									$customauthorarchive = get_page_by_path($authorpageslug);
									$defaultpage = get_option('dh-author-page'); 
									$defaultpageid = get_page($defaultpage); 
									$id = $wpdb->get_var($wpdb->prepare("SELECT ID FROM " . $wpdb->posts . " WHERE post_name = '%s' AND post_type = 'page' ", $authorpageslug) );
									$wp_admin_bar->add_menu(array('parent' => 'edit', 'title' => __('Edit in Backend'), 'id' => 'dh-be-edit', 'href' => get_edit_post_link($defaultpageid)));
									if ( get_post_status($defaultpageid) == 'draft' ) {
										$wp_admin_bar->add_menu(array('title' => __('Edit in Visual Builder'), 'id' => 'et-use-visual-builder', 'href' => get_permalink($defaultpageid).'&et_fb=1'));
										$wp_admin_bar->add_menu(array('parent' => 'edit', 'title' => __('Edit in Visual Builder'), 'id' => 'vb-edit', 'href' => get_permalink($defaultpageid).'&et_fb=1'));
									} else {
										$wp_admin_bar->add_menu(array('title' => __('Edit in Visual Builder'), 'id' => 'et-use-visual-builder', 'href' => get_permalink($defaultpageid).'?et_fb=1'));
										$wp_admin_bar->add_menu(array('parent' => 'edit', 'title' => __('Edit in Visual Builder'), 'id' => 'vb-edit', 'href' => get_permalink($defaultpageid).'?et_fb=1'));
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
					$(".et_divi_theme.author #et-main-area, .et_divi_theme.author-results #et-main-area").prepend($("#divi-hacks-author"));
					$("#divi-hacks-author").show();
					$("#content-area").clone().appendTo("#divi-hacks-author .archive");
					$( "body.author .archive.show-button article" ).each(function(){
						var copyLink = $(this).find(".entry-title a").attr("href");
						$(this).append("<a class='et_pb_button et_pb_read_more_button'>read more</a>");
						$(this).find(".et_pb_button").attr("href",copyLink);
					});
					$("article").wrapInner("<ul style='list-style:none;padding:0px;' class='dh-excerpt'></ul>");
					$("ul.dh-excerpt").wrapInner("<li></li>");
					$(".entry-title, .entry-featured-image-url, .post-meta").each(function() {
					    $(this).parent().parent().before(this);
					});
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
						$('body.author.et_transparent_nav #divi-hacks-author .et_pb_section_first').removeClass('et_pb_section_first').attr('style', '');
					};
					$(window).load(function() {
				      setTimeout(function() {
				        trashclass();
				      }, 0);
				    });
				});
			</script>
			<style type="text/css">
				#divi-hacks-author {
					display:block;
				}
				.et_fixed_nav.et_show_nav.et_secondary_nav_enabled #divi-hacks-author #page-container, 
				.et_non_fixed_nav.et_transparent_nav.et_show_nav.et_secondary_nav_enabled #divi-hacks-author #page-container {
	    			padding-top: 0px !important;
				}
				#divi-hacks-author div#page-content {
					z-index: 1;
					position: relative;
				}
				body.author #et-main-area #main-content,
				body.author-results #et-main-area #main-content {
					display:none;
				}
			</style>
		<?php } else { ?>
			<style type="text/css">
				#divi-hacks-author {
					display:none;
				}
				body.author #et-main-area #main-content,
				body.author-results #et-main-area #main-content {
					display:block;
				}
			</style>
		<?php }
	} 
	add_action('wp_footer', 'dh_author_section_injector');
	}
	function dh_author_customizer($wp_customize) {
	$wp_customize->add_section('dh_custom_author_options', array(    
	'priority' => 1,
	'title' => __('Custom Author Archive Page', 'Divi Hacks' ),
	'panel'    => 'divi_hack_options',
	));
		$wp_customize->add_setting('dh_author_enabler_switch', array(
		'default' => false,
		'type'        => 'theme_mod',
		'capability'  => 'edit_theme_options',
		));
		$wp_customize->add_control('dh_author_enabler_switch', array(
		'label' => __('Enable Custom Author Archive Page'),
		'section' => 'dh_custom_author_options',
		'type' => 'checkbox',
		'settings' => 'dh_author_enabler_switch'
		));
		$wp_customize->add_setting('dh-author-page', array(
		'capability' => 'edit_theme_options',
		'type' => 'option',
		));
		$wp_customize->add_control('dh-author-page', array(
		'label' => __('Default Author Archive Page:'),
		'description' => __('Create a page using the page builder and add the shortcode <b>[dh-archive]</b> where you want the posts to appear. Then select that page here.'),
		'section' => 'dh_custom_author_options',
		'type' => 'dropdown-pages',
		'settings' => 'dh-author-page',
		));
		$wp_customize->add_setting('dh-author-page-info', array(
		'capability' => 'edit_theme_options',
		'type' => 'text',
		));
		$wp_customize->add_control('dh-author-page-info', array(
		'label' => __('(OPTIONAL) Set different pages for each author\'s archive'),
		'description' => __('You may also set a custom page for each author too. <h3>How it Works</h3> Divi Hacks will first look for a page with the slug <b>archive_author_###</b> (### = username of author). If no page is found for that author, the page you set above will be displayed instead.<h3>How to Set it Up</h3>1. Create a new page with the slug <b>archive_author_###</b> (replace ### with the username of the author.<br />2. Using the page builder, add the shortcode <b>[dh-archive]</b> where you want the posts to appear on that page.<h3>Notes</h3>When you\'re setting up your users, make sure the usernames do NOT contain underscores (_).<br /><br /><b><a href="https://divihacks.com/docs/custom-archives/#author" target="_blank">View documentation</a> to learn more about creating custom archives, and about the various shortcodes available to use on your custom archive pages.</b>'),
		'section' => 'dh_custom_author_options',
		'settings' => 'dh-author-page-info',
		));
	}
	add_action('customize_register', 'dh_author_customizer');