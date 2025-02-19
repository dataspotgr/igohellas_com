<?php
//=========== Custom Archive Page ===================
	if( false != get_theme_mod( 'dh_archive_enabler_switch' ) ) {
	function dh_archive_section_injector() {
		if ( is_home() ) {
			// Archive Found Posts Number
			add_shortcode('posts-found', 'found_tag_posts_number_shortcode');
			function found_tag_posts_number_shortcode() {
				if(is_home()) {
					$count = $GLOBALS['wp_query']->found_posts;
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
			<div id="divi-hacks-archive">
				<div id="page-container">
					<div id="page-content">
						<?php 
						$id1 = get_option('dh-archive-page'); 
						$p1 = get_page($id1); 
						echo apply_filters('the_content', $p1->post_content); 

						if (current_user_can('edit_posts')) {
				        	function custom_archive_edit_links($wp_admin_bar) {
				        		$id1 = get_option('dh-archive-page'); 
								$p1 = get_page($id1); 
								$wp_admin_bar->add_menu(array('id' => 'edit', 'meta' => array( 'class' => __('edit-backend')), 'href' => get_edit_post_link($p1)));
									if ( get_post_status($p1) == 'draft' ) {
										$wp_admin_bar->add_menu(array('title' => __('Edit in Visual Builder'), 'id' => 'et-use-visual-builder', 'meta' => array( 'class' => __('edit-visual')), 'href' => get_permalink($p1).'&et_fb=1'));
									} else {
										$wp_admin_bar->add_menu(array('title' => __('Edit in Visual Builder'), 'id' => 'et-use-visual-builder', 'meta' => array( 'class' => __('edit-visual')), 'href' => get_permalink($p1).'?et_fb=1'));
									}
							}
							add_action('admin_bar_menu', 'custom_archive_edit_links', 999);
						}

						?>
					</div>
				</div>
			</div>
			<script>
				jQuery(function($){
					$(".et_divi_theme.blog #et-main-area").prepend($("#divi-hacks-archive"));
					$("#divi-hacks-archive").show();
					$("#content-area").clone().appendTo("#divi-hacks-archive .archive");
					$( "body.blog .archive.show-button article" ).each(function(){
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
						$('body.blog.et_transparent_nav #divi-hacks-archive .et_pb_section_first').removeClass('et_pb_section_first').attr('style', '');
					};
					$(window).load(function() {
				      setTimeout(function() {
				        trashclass();
				      }, 0);
				    });
				});
			</script>
			<style type="text/css">
				#divi-hacks-archive {
					display:block;
				}
				.et_fixed_nav.et_show_nav.et_secondary_nav_enabled #divi-hacks-archive #page-container, 
				.et_non_fixed_nav.et_transparent_nav.et_show_nav.et_secondary_nav_enabled #divi-hacks-archive #page-container {
	    			padding-top: 0px !important;
				}
				#divi-hacks-archive div#page-content {
					z-index: 1;
					position: relative;
					background: #fff;
				}
				body.blog #et-main-area #main-content,
				body.blog #et-main-area #main-content {
					display:none;
				}
			</style>
		<?php } else { ?>
			<style type="text/css">
				#divi-hacks-archive {
				display:none;
			}
			body.blog #et-main-area #main-content,
			body.blog #et-main-area #main-content {
				display:block;
			}
		</style>
		<?php }
	} 
	add_action('wp_footer', 'dh_archive_section_injector');
	}
	function dh_archive_customizer($wp_customize) {
	$wp_customize->add_section('dh_custom_archive_options', array(    
	'priority' => 1,
	'title' => __('Custom Posts Archive Page', 'Divi Hacks' ),
	'panel'    => 'divi_hack_options',
	));
		$wp_customize->add_setting('dh_archive_enabler_switch', array(
		'default' => false,
		'type'        => 'theme_mod',
		'capability'  => 'edit_theme_options',
		));
		$wp_customize->add_control('dh_archive_enabler_switch', array(
		'label' => __('Enable Custom Posts Page'),
		'section' => 'dh_custom_archive_options',
		'type' => 'checkbox',
		'settings' => 'dh_archive_enabler_switch'
		));
		$wp_customize->add_setting('dh-archive-page', array(
		'capability' => 'edit_theme_options',
		'type' => 'option',
		));
		$wp_customize->add_control('dh-archive-page', array(
		'label' => __('Default Posts Archive Page:'),
		'description' => __('Create a page using the page builder and add the shortcode <b>[dh-archive]</b> where you want the posts to appear. Then select that page here.<br /><br /><b><a href="https://divihacks.com/docs/custom-archives/#default" target="_blank">View documentation</a> to learn more about creating custom archives, and about the various shortcodes available to use on your custom archive pages.</b>'),
		'section' => 'dh_custom_archive_options',
		'type' => 'dropdown-pages',
		'settings' => 'dh-archive-page',
		));
	}
	add_action('customize_register', 'dh_archive_customizer');