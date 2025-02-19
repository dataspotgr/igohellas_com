<?php

// ============== Additional Functions =====================
	function dh_functions_customizer($wp_customize) {
	$wp_customize->add_section('dh_functions_options', array(    
		'priority' => 100,
		'title' => __('Functions', 'Divi Hacks' ),
		'panel'    => 'divi_hack_options',
	));
		$wp_customize->add_setting('dh_duplication_switch', array(
			'default' => 'On',
			'type'        => 'theme_mod',
			'capability'  => 'edit_theme_options',
			'transport'   => 'refresh',
		));
		$wp_customize->add_control('dh_duplication_switch', array(
			'label' => __('Enable post/page/ duplication'),
			'description' => __('Easily duplicate pages, posts, Divi library items, and custom post types from the admin dashboard.'),
			'section' => 'dh_functions_options',
			'type' => 'radio',
			'settings' => 'dh_duplication_switch',
			'choices' => array(
	    		'On' => 'Enable',
	    		'Off' => 'Disable',
	  		),
		));
		$wp_customize->add_setting('dh_edit_in_vb_switch', array(
			'default' => 'On',
			'type'        => 'theme_mod',
			'capability'  => 'edit_theme_options',
			'transport'   => 'refresh',
		));
		$wp_customize->add_control('dh_edit_in_vb_switch', array(
			'label' => __('Enable edit in visual builder link'),
			'description' => __('Adds \'Edit in Visual Builder\' link to pages, posts, and Divi Library items in the admin dashboard.'),
			'section' => 'dh_functions_options',
			'type' => 'radio',
			'settings' => 'dh_edit_in_vb_switch',
			'choices' => array(
	    		'On' => 'Enable',
	    		'Off' => 'Disable',
	  		),
		));
		$wp_customize->add_setting('dh_helpful_links_switch', array(
			'default' => 'On',
			'type'        => 'theme_mod',
			'capability'  => 'edit_theme_options',
			'transport'   => 'refresh',
		));
		$wp_customize->add_control('dh_helpful_links_switch', array(
			'label' => __('Enable helpful front-end admin bar links'),
			'section' => 'dh_functions_options',
			'type' => 'radio',
			'settings' => 'dh_helpful_links_switch',
			'choices' => array(
	    		'On' => 'Enable',
	    		'Off' => 'Disable',
	  		),
		));
		$wp_customize->add_setting('dh_user_body_classes_switch', array(
			'default' => 'On',
			'type'        => 'theme_mod',
			'capability'  => 'edit_theme_options',
			'transport'   => 'refresh',
		));
		$wp_customize->add_control('dh_user_body_classes_switch', array(
			'label' => __('Add Current User Id and Role to Body Classes (frontend and backend)'),
			'section' => 'dh_functions_options',
			'type' => 'radio',
			'settings' => 'dh_user_body_classes_switch',
			'choices' => array(
	    		'On' => 'Enable',
	    		'Off' => 'Disable',
	  		),
		));
	}
	add_action('customize_register', 'dh_functions_customizer');

// Enable Page/Post Duplication
	if ( get_theme_mod( 'dh_duplication_switch', 'On' ) == 'On' ) {
		// Function for post duplication. Dups appear as drafts. User is redirected to the edit screen
		function dh_duplicate_post_as_draft(){
			global $wpdb;
			if (! ( isset( $_GET['post']) || isset( $_POST['post'])  || ( isset($_REQUEST['action']) && 'dh_duplicate_post_as_draft' == $_REQUEST['action'] ) ) ) {
				wp_die('No post to duplicate has been supplied!');
			}
		 
			/*
			 * Nonce verification
			 */
			if ( !isset( $_GET['duplicate_nonce'] ) || !wp_verify_nonce( $_GET['duplicate_nonce'], basename( __FILE__ ) ) )
				return;
		 
			/*
			 * get the original post id
			 */
			$post_id = (isset($_GET['post']) ? absint( $_GET['post'] ) : absint( $_POST['post'] ) );
			/*
			 * and all the original post data then
			 */
			$post = get_post( $post_id );
		 
			/*
			 * if you don't want current user to be the new post author,
			 * then change next couple of lines to this: $new_post_author = $post->post_author;
			 */
			$current_user = wp_get_current_user();
			$new_post_author = $current_user->ID;
		 
			/*
			 * if post data exists, create the post duplicate
			 */
			if (isset( $post ) && $post != null) {
		 
				/*
				 * new post data array
				 */
				$args = array(
					'comment_status' => $post->comment_status,
					'ping_status'    => $post->ping_status,
					'post_author'    => $new_post_author,
					'post_content'   => $post->post_content,
					'post_excerpt'   => $post->post_excerpt,
					'post_name'      => $post->post_name,
					'post_parent'    => $post->post_parent,
					'post_password'  => $post->post_password,
					'post_status'    => 'draft',
					'post_title'     => $post->post_title,
					'post_type'      => $post->post_type,
					'to_ping'        => $post->to_ping,
					'menu_order'     => $post->menu_order,
					'layout_type'	 => $post->layout_type,
					'layout_category' => $post->layout_category
				);
		 
				/*
				 * insert the post by wp_insert_post() function
				 */
				$new_post_id = wp_insert_post( $args );
		 
				/*
				 * get all current post terms ad set them to the new post draft
				 */
				$taxonomies = get_object_taxonomies($post->post_type); // returns array of taxonomy names for post type, ex array("category", "post_tag");
				foreach ($taxonomies as $taxonomy) {
					$post_terms = wp_get_object_terms($post_id, $taxonomy, array('fields' => 'slugs'));
					wp_set_object_terms($new_post_id, $post_terms, $taxonomy, false);
				}
		 
				/*
				 * duplicate all post meta just in two SQL queries
				 */
				$post_meta_infos = $wpdb->get_results("SELECT meta_key, meta_value FROM $wpdb->postmeta WHERE post_id=$post_id");
				if (count($post_meta_infos)!=0) {
					$sql_query = "INSERT INTO $wpdb->postmeta (post_id, meta_key, meta_value) ";
					foreach ($post_meta_infos as $meta_info) {
						$meta_key = $meta_info->meta_key;
						if( $meta_key == '_wp_old_slug' ) continue;
						$meta_value = addslashes($meta_info->meta_value);
						$sql_query_sel[]= "SELECT $new_post_id, '$meta_key', '$meta_value'";
					}
					$sql_query.= implode(" UNION ALL ", $sql_query_sel);
					$wpdb->query($sql_query);
				}
		 
		 
				/*
				 * finally, redirect to the edit post screen for the new draft
				 */
				wp_redirect( admin_url( 'post.php?action=edit&post=' . $new_post_id ) );
				exit;
			} else {
				wp_die('Post creation failed, could not find original post: ' . $post_id);
			}
		}
		add_action( 'admin_action_dh_duplicate_post_as_draft', 'dh_duplicate_post_as_draft' );

		// Add the duplicate link to action list for post_row_actions
		function dh_duplicate_post_link( $actions, $post ) {
			if (current_user_can('edit_posts')) {
				$actions['duplicate'] = '<a href="' . wp_nonce_url('admin.php?action=dh_duplicate_post_as_draft&post=' . $post->ID, basename(__FILE__), 'duplicate_nonce' ) . '" rel="permalink">Duplicate</a>';
			}
			return $actions;
		}
		add_filter('post_row_actions', 'dh_duplicate_post_link', 10, 2);
		add_filter('page_row_actions', 'dh_duplicate_post_link', 10, 2);

		// Add the duplicate link to post edit screen
		add_action( 'post_submitbox_misc_actions', 'dh_duplicate_button' );
		function dh_duplicate_button(){
				$id = get_the_ID();
				$posttype = get_post_type($id);
		        $html  = '<div id="major-publishing-actions" style="overflow:hidden">';
		        $html .= '<div id="publishing-action">';
		        $html .= '<a href="' . wp_nonce_url(admin_url() . 'admin.php?action=dh_duplicate_post_as_draft&post=' . $id, basename(__FILE__), 'duplicate_nonce' ) . '">Duplicate this ' . $posttype . '</a>';
		        $html .= '</div>';
		        $html .= '</div>';
		        echo $html;
		}
	}

// Enable Body Classes
	if ( get_theme_mod( 'dh_user_body_classes_switch', 'On' ) == 'On' ) {
		// Add User Role Class to Body
		function print_user_classes() {
		    if ( is_user_logged_in() ) {
		        add_filter('body_class','dh_class_to_body');
		        add_filter('admin_body_class', 'dh_class_to_body');
		    }
		}
		add_action('init', 'print_user_classes');
		 
		// Add user role class and user id to admin dashboard body tag
		function dh_class_to_body($classes) {
		    $current_user = new WP_User(get_current_user_id());
		    $user_role = array_shift($current_user->roles);
		    $user_ID = $current_user->ID;
		    if (is_admin()) {
		        $classes .= ' ' .'user-id-'.$user_ID. ' ' .$user_role;
		    } else {
		        $classes[] = ' ' .'user-id-'.$user_ID. ' ' .$user_role;
		    }
		    return $classes;
		}
	}

// Add 'edit in visual builder' link to wordpress pages table
	if ( get_theme_mod( 'dh_edit_in_vb_switch', 'On' ) == 'On' ) {
		function edit_in_vb($actions, $page_object) {
			if ( get_post_status() == 'draft' ) {
			   $actions['edit_link'] = '<a href="' . get_permalink() . '&et_fb=1" class="edit_link">' . __('Edit in Visual Builder', 'divi-hacks') . '</a>';
			   } else {
			   $actions['edit_link'] = '<a href="' . get_permalink() . '?et_fb=1" class="edit_link">' . __('Edit in Visual Builder', 'divi-hacks') . '</a>';
			   }
		   return $actions;
		}
		add_filter('page_row_actions', 'edit_in_vb', 10, 2);
		add_filter('post_row_actions', 'edit_in_vb', 10, 2);
	}

// Helpful Admin Bar Links
	if ( get_theme_mod( 'dh_helpful_links_switch', 'On' ) == 'On' ) {
		function better_mobile_edit_menu_divi() {
			global $wp_admin_bar;
			if (current_user_can('edit_posts')) {

				$wp_admin_bar->add_menu(array('parent' => 'edit', 'title' => __('Edit in Backend'), 'id' => 'be-edit', 'href' => get_edit_post_link()));
				if ( get_post_status() == 'draft' ) {
					$wp_admin_bar->add_menu(array('parent' => 'edit', 'title' => __('Edit in Visual Builder'), 'id' => 'vb-edit', 'href' => get_permalink().'&et_fb=1'));
				} else {
					$wp_admin_bar->add_menu(array('parent' => 'edit', 'title' => __('Edit in Visual Builder'), 'id' => 'vb-edit', 'href' => get_permalink().'?et_fb=1'));
				}
				$wp_admin_bar->add_menu(array('parent' => 'appearance', 'title' => __('Pages'), 'id' => 'pages', 'href' => get_site_url().'/wp-admin/edit.php?post_type=page', 'meta' => array('target' => '_blank') ));
				$wp_admin_bar->add_menu(array('parent' => 'appearance', 'title' => __('Posts'), 'id' => 'posts', 'href' => get_site_url().'/wp-admin/edit.php', 'meta' => array('target' => '_blank') ));
				$wp_admin_bar->add_menu(array('parent' => 'appearance', 'title' => __('Media'), 'id' => 'media', 'href' => get_site_url().'/wp-admin/upload.php', 'meta' => array('target' => '_blank') ));
					$wp_admin_bar->add_menu(array('parent' => 'media', 'title' => __('Library'), 'id' => 'media-library', 'href' => get_site_url().'/wp-admin/upload.php', 'meta' => array('target' => '_blank') ));
					$wp_admin_bar->add_menu(array('parent' => 'media', 'title' => __('Add New'), 'id' => 'media-new', 'href' => get_site_url().'/wp-admin/media-new.php', 'meta' => array('target' => '_blank') ));
				$wp_admin_bar->add_menu(array('parent' => 'appearance', 'title' => __('Comments'), 'id' => 'comments', 'href' => get_site_url().'/wp-admin/edit-comments.php', 'meta' => array('target' => '_blank') ));
				$wp_admin_bar->add_menu(array('parent' => 'appearance', 'title' => __('Plugins'), 'id' => 'plugins', 'href' => get_site_url().'/wp-admin/plugins.php', 'meta' => array('target' => '_blank') ));
					$wp_admin_bar->add_menu(array('parent' => 'plugins', 'title' => __('Plugins'), 'id' => 'installed-plugins', 'href' => get_site_url().'/wp-admin/plugins.php', 'meta' => array('target' => '_blank') ));
					$wp_admin_bar->add_menu(array('parent' => 'plugins', 'title' => __('Add New'), 'id' => 'add-plugin', 'href' => get_site_url().'/wp-admin/plugin-install.php', 'meta' => array('target' => '_blank') ));
				$wp_admin_bar->add_menu(array('parent' => 'appearance', 'title' => __('Users'), 'id' => 'users', 'href' => get_site_url().'/wp-admin/users.php', 'meta' => array('target' => '_blank') ));
					$wp_admin_bar->add_menu(array('parent' => 'users', 'title' => __('All Users'), 'id' => 'all-users', 'href' => get_site_url().'/wp-admin/users.php', 'meta' => array('target' => '_blank') ));
					$wp_admin_bar->add_menu(array('parent' => 'users', 'title' => __('Add New'), 'id' => 'add-new-user', 'href' => get_site_url().'/wp-admin/user-new.php', 'meta' => array('target' => '_blank') ));
					$wp_admin_bar->add_menu(array('parent' => 'users', 'title' => __('Your Profile'), 'id' => 'your-profile', 'href' => get_site_url().'/wp-admin/profile.php', 'meta' => array('target' => '_blank') ));
				$wp_admin_bar->add_menu(array('parent' => 'appearance', 'title' => __('Settings'), 'id' => 'settings', 'href' => get_site_url().'/wp-admin/options-general.php', 'meta' => array('target' => '_blank') ));
					$wp_admin_bar->add_menu(array('parent' => 'settings', 'title' => __('General'), 'id' => 'general-settings', 'href' => get_site_url().'/wp-admin/options-general.php', 'meta' => array('target' => '_blank') ));
					$wp_admin_bar->add_menu(array('parent' => 'settings', 'title' => __('Writing'), 'id' => 'writing-settings', 'href' => get_site_url().'/wp-admin/options-writing.php', 'meta' => array('target' => '_blank') ));
					$wp_admin_bar->add_menu(array('parent' => 'settings', 'title' => __('Reading'), 'id' => 'reading-settings', 'href' => get_site_url().'/wp-admin/options-reading.php', 'meta' => array('target' => '_blank') ));
					$wp_admin_bar->add_menu(array('parent' => 'settings', 'title' => __('Discussion'), 'id' => 'discussion-settings', 'href' => get_site_url().'/wp-admin/options-discussion.php', 'meta' => array('target' => '_blank') ));
					$wp_admin_bar->add_menu(array('parent' => 'settings', 'title' => __('Media'), 'id' => 'media-settings', 'href' => get_site_url().'/wp-admin/options-media.php', 'meta' => array('target' => '_blank') ));
					$wp_admin_bar->add_menu(array('parent' => 'settings', 'title' => __('Permalinks'), 'id' => 'permalink-settings', 'href' => get_site_url().'/wp-admin/options-permalink.php', 'meta' => array('target' => '_blank') ));
					$wp_admin_bar->add_menu(array('parent' => 'settings', 'title' => __('Privacy'), 'id' => 'privacy-settings', 'href' => get_site_url().'/wp-admin/options-privacy.php', 'meta' => array('target' => '_blank') ));
				$wp_admin_bar->add_menu(array('parent' => 'appearance', 'title' => __('Divi'), 'id' => 'divi', 'href' => get_site_url().'/wp-admin/admin.php?page=et_divi_options', 'meta' => array('target' => '_blank') ));
					$wp_admin_bar->add_menu(array('parent' => 'divi', 'title' => __('Theme Options'), 'id' => 'divi-theme-options', 'href' => get_site_url().'/wp-admin/admin.php?page=et_divi_options', 'meta' => array('target' => '_blank') ));
					$wp_admin_bar->add_menu(array('parent' => 'divi', 'title' => __('Theme Builder'), 'id' => 'divi-theme-builder', 'href' => get_site_url().'/wp-admin/admin.php?page=et_theme_builder', 'meta' => array('target' => '_blank') ));
					$wp_admin_bar->add_menu(array('parent' => 'divi', 'title' => __('Theme Customizer'), 'id' => 'divi-theme-customizer', 'href' => get_site_url().'/wp-admin/customize.php?et_customizer_option_set=theme', 'meta' => array('target' => '_blank') ));
					$wp_admin_bar->add_menu(array('parent' => 'divi', 'title' => __('Role Editor'), 'id' => 'divi-role-editor', 'href' => get_site_url().'/wp-admin/admin.php?page=et_divi_role_editor', 'meta' => array('target' => '_blank') ));
					$wp_admin_bar->add_menu(array('parent' => 'divi', 'title' => __('Divi Library'), 'id' => 'divi-library', 'href' => get_site_url().'/wp-admin/edit.php?post_type=et_pb_layout', 'meta' => array('target' => '_blank') ));
					$wp_admin_bar->add_menu(array('parent' => 'divi', 'title' => __('Support Center'), 'id' => 'divi-support-center', 'href' => get_site_url().'/wp-admin/edit.php?post_type=et_support_center_divi', 'meta' => array('target' => '_blank') ));
				$wp_admin_bar->add_menu(array('parent' => 'appearance', 'title' => __('Divi Hacks', 'divi-hacks'), 'id' => 'divi-hacks', 'href' => get_site_url().'/wp-admin/admin.php?page=divi-hacks-settings', 'meta' => array('target' => '_blank') ));
					$wp_admin_bar->add_menu( array('parent' => 'divi-hacks', 'title' => __( 'Divi Hacks Customizer', 'divi-hacks'), 'id' => 'divi-hacks-customizer', 'href' => get_site_url().'/wp-admin/customize.php?autofocus[panel]=divi_hack_options', 'meta' => array('target' => '_blank') ));
					$wp_admin_bar->add_menu( array('parent' => 'divi-hacks', 'title' => __( 'All'), 'id' => 'divi-hacks-all', 'href' => get_site_url().'/wp-admin/admin.php?page=divi-hacks-settings&tab=all_options', 'meta' => array('target' => '_blank') ));
					$wp_admin_bar->add_menu( array('parent' => 'divi-hacks', 'title' => __( 'Background'), 'id' => 'divi-hacks-background', 'href' => get_site_url().'/wp-admin/admin.php?page=divi-hacks-settings&tab=background_options', 'meta' => array('target' => '_blank') ));
					$wp_admin_bar->add_menu( array('parent' => 'divi-hacks', 'title' => __( 'Header'), 'id' => 'divi-hacks-header', 'href' => get_site_url().'/wp-admin/admin.php?page=divi-hacks-settings&tab=header_options', 'meta' => array('target' => '_blank') ));
					$wp_admin_bar->add_menu( array('parent' => 'divi-hacks', 'title' => __( 'Footer'), 'id' => 'divi-hacks-footer', 'href' => get_site_url().'/wp-admin/admin.php?page=divi-hacks-settings&tab=footer_options', 'meta' => array('target' => '_blank') ));
					$wp_admin_bar->add_menu( array('parent' => 'divi-hacks', 'title' => __( 'Alignment'), 'id' => 'divi-hacks-alignment', 'href' => get_site_url().'/wp-admin/admin.php?page=divi-hacks-settings&tab=alignment_options', 'meta' => array('target' => '_blank') ));
					$wp_admin_bar->add_menu( array('parent' => 'divi-hacks', 'title' => __( 'Design'), 'id' => 'divi-hacks-design', 'href' => get_site_url().'/wp-admin/admin.php?page=divi-hacks-settings&tab=design_options', 'meta' => array('target' => '_blank') ));
					$wp_admin_bar->add_menu( array('parent' => 'divi-hacks', 'title' => __( 'Mobile'), 'id' => 'divi-hacks-mobile', 'href' => get_site_url().'/wp-admin/admin.php?page=divi-hacks-settings&tab=mobile_options', 'meta' => array('target' => '_blank') ));
					$wp_admin_bar->add_menu( array('parent' => 'divi-hacks', 'title' => __( 'Blog'), 'id' => 'divi-hacks-blog', 'href' => get_site_url().'/wp-admin/admin.php?page=divi-hacks-settings&tab=blog_options', 'meta' => array('target' => '_blank') ));
					$wp_admin_bar->add_menu( array('parent' => 'divi-hacks', 'title' => __( 'Animation'), 'id' => 'divi-hacks-animation', 'href' => get_site_url().'/wp-admin/admin.php?page=divi-hacks-settings&tab=animation_options', 'meta' => array('target' => '_blank') ));
					$wp_admin_bar->add_menu( array('parent' => 'divi-hacks', 'title' => __( 'Icon'), 'id' => 'divi-hacks-icon', 'href' => get_site_url().'/wp-admin/admin.php?page=divi-hacks-settings&tab=icon_options', 'meta' => array('target' => '_blank') ));
					$wp_admin_bar->add_menu( array('parent' => 'divi-hacks', 'title' => __( 'Admin'), 'id' => 'divi-hacks-admin', 'href' => get_site_url().'/wp-admin/admin.php?page=divi-hacks-settings&tab=admin_options', 'meta' => array('target' => '_blank') ));
					$wp_admin_bar->add_menu( array('parent' => 'divi-hacks', 'title' => __( 'Auto-on'), 'id' => 'divi-hacks-auto-on', 'href' => get_site_url().'/wp-admin/admin.php?page=divi-hacks-settings&tab=auto_options', 'meta' => array('target' => '_blank') ));
					$wp_admin_bar->add_menu( array('parent' => 'divi-hacks', 'title' => __( 'About'), 'id' => 'divi-hacks-about', 'href' => get_site_url().'/wp-admin/admin.php?page=divi-hacks-settings&tab=about', 'meta' => array('target' => '_blank') ));
			}
			if ( !is_author() && !is_archive() && !is_search() && !is_home() ) { 
				if (current_user_can('edit_posts')) {
					$id = get_the_ID();
					$posttype = get_post_type($id);
					$wp_admin_bar->add_menu(array('parent' => 'edit', 'title' => 'Duplicate this ' . $posttype, 'id' => 'duplicate', 'href' => wp_nonce_url(admin_url().'admin.php?action=dh_duplicate_post_as_draft&post=' . $id, basename(__FILE__), 'duplicate_nonce' )));
				}
			}
		}
		add_action('admin_bar_menu', 'better_mobile_edit_menu_divi', 90);
	}



// Enable Body Classes Per Page
	// Custom Body Classes Per Page
	add_filter('body_class','dh_custom_field_body_class');
	function dh_custom_field_body_class( $classes ) {
		if ( get_post_meta( get_the_ID(), 'Hide Main Header', true ) ) {
			$classes[] = 'hide-main-header';
		}
		// return the $classes array
		return $classes;
	}
	add_filter('body_class','dh_custom_field_body_class1');
	function dh_custom_field_body_class1( $classes1 ) {
		if ( get_post_meta( get_the_ID(), 'Hide Footer', true ) ) {
			$classes1[] = 'hide-footer';
		}
		// return the $classes array
		return $classes1;
	}
	add_filter('body_class','dh_custom_field_body_class2');
	function dh_custom_field_body_class2( $classes2 ) {
		if ( get_post_meta( get_the_ID(), 'Hide Logo', true ) ) {
			$classes2[] = 'hide-logo';
		}
		// return the $classes array
		return $classes2;
	}
	add_filter('body_class','dh_custom_field_body_class3');
	function dh_custom_field_body_class3( $classes3 ) {
		if ( get_post_meta( get_the_ID(), 'Hide Top Header', true ) ) {
			$classes3[] = 'hide-top-header';
		}
		// return the $classes array
		return $classes3;
	}

// Shortcodes in Menu
	add_filter('wp_nav_menu_items', 'do_shortcode');

// Enable SVG Uploads
	function dh_myme_types($mime_types){
		$mime_types['svg'] = 'image/svg+xml';
		return $mime_types;
	}
	add_filter('upload_mimes', 'dh_myme_types', 1, 1);

// Display user display name for currently logged in user
	add_shortcode('user-display-name', 'dh_display_name');
	function dh_display_name($atts) {
	    if ( is_user_logged_in() ) {
			$current_user = wp_get_current_user();
			$content = $current_user->display_name . "";
			return $content;
		}
	}
// Display user username for currently logged in user
	add_shortcode('user-username', 'dh_user_name');
	function dh_user_name($atts) {
	    if ( is_user_logged_in() ) {
			$current_user = wp_get_current_user();
			$content = $current_user->user_login . "";
			return $content;
		}
	}
// Display user first name for currently logged in user
	add_shortcode('user-first-name', 'dh_first_name');
	function dh_first_name($atts) {
	    if ( is_user_logged_in() ) {
			$current_user = wp_get_current_user();
			$content = $current_user->user_firstname . "";
			return $content;
		}
	}
// Display user last name for currently logged in user
	add_shortcode('user-last-name', 'dh_last_name');
	function dh_last_name($atts) {
	    if ( is_user_logged_in() ) {
			$current_user = wp_get_current_user();
			$content = $current_user->user_lastname . "";
			return $content;
		}
	}
// Display user email for currently logged in user
	add_shortcode('user-email', 'dh_email');
	function dh_email($atts) {
	    if ( is_user_logged_in() ) {
			$current_user = wp_get_current_user();
			$content = $current_user->user_email . "";
			return $content;
		}
	}
// Display user avatar for currently logged in user
	add_shortcode ('user-avatar', 'dh_avatar');
	function dh_avatar ($atts) {
		if ( is_user_logged_in() ) {
			global $current_user;
	        wp_get_current_user();
		  	extract(shortcode_atts(array(
			       "id" => $current_user->ID,
			       "size" => 50,
			       "default" => 'mystery',
			       "alt" => '',
			       "class" => '',
			       "style" => '',
		  	), $atts, 'get_avatar' ));
		  	$get_avatar= get_avatar( $id, $size, $default, $alt );
		  	return '<div class="get_avatar '.$class.'" style="'.$style.'">'.$get_avatar.'</div>';
		}
	}

//Per Page Code - <head>
	function add_code_in_head() {
	    global $post;
	    if(!empty($post)) {
	        $code = get_post_meta($post->ID, 'Head Code', true);
	        if(!empty($code)) { echo $code; }
	    }
	}
	add_action('wp_head', 'add_code_in_head');
//Per Page Code - </body>
	function add_code_to_body() {
	    global $post;
	    if(!empty($post)) {
	        $code = get_post_meta($post->ID, 'Body Code', true);
	        if(!empty($code)) { echo $code; }
	    }
	}
	add_action('wp_footer', 'add_code_to_body', 10000);


//Wrap Elements in Shortcodes
	add_action( 'wp_loaded', 'dh_loaded' );
	function dh_loaded() {
		add_action( 'admin_footer', 'dh_admin_foot' );
		add_filter( 'do_shortcode_tag', 'dh_do_shortcode_tag', 4, 4 );
		add_shortcode( 'dh_content', 'dh_content' );
	}

	function dh_admin_foot() {
		echo '<script>
		var dh_visible = false;
		function dh_get_current_shortcode() {
			var after = " " + jQuery("#et_pb_module_class").val();
			var start = 0;
			var end = 0;
			var shortcode = "";

			start = after.indexOf("[");

			if (start) {
				if (end = after.indexOf("]")) {
					end++; //to account for the ] at the end
					shortcode = after.substring(start, end);
				}
			}
			return shortcode;
		}
		</script>';
	}

	function dh_do_shortcode_tag( $output, $tag, $attr, $m ) {
		if ( $tag == 'et_pb_section' || $tag == 'et_pb_row' || $tag == 'et_pb_module' || substr( $tag, 0, 6 ) == 'et_pb_' ) {
			$shortcode_end = '';

			if ( isset( $attr['module_class'] ) && $attr['module_class'] ) {

				$css = $attr['module_class'];

				$css = str_replace( '%91', '[', ( $css ) );
				$css = str_replace( '%93', ']', ( $css ) );
				$css = urldecode( ( $css ) );

				if ( stripos( $css, '[' ) !== false ) {
					$start = stripos( $css, '[' );
					$end   = ( stripos( $css, ']' ) + 1 - $start );

					$shortcode_start = substr( $css, $start, $end );

					if ( $shortcode = explode( ' ', $shortcode_start ) ) {
						$shortcode_end = '[/' . ltrim( rtrim( $shortcode[0], ']' ) . ']', '[' );
					}

					if ( $shortcode_start && $shortcode_end ) {
						$start  = stripos( $output, '&#091;' );
						$end    = stripos( $output, '&#093;' ) + 6;
						$output = substr_replace( $output, 'dh-shortcode-controlled', $start, ( $end - $start ) );

						$output = $shortcode_start . $output . $shortcode_end; //prepend and append the shortcode

						do_action( 'dh_pre_shortcode_parse' );
						$output = do_shortcode( $output );
					}
				}
			}
		}
		return $output;
	}
