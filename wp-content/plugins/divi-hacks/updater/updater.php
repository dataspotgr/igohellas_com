<?php
/* This file contains code from the Software Licensing addon by Easy Digital Downloads - GPLv2.0 or higher */
if (!defined('ABSPATH')) exit;


function Divi_Hacks_has_license_key() {
	if (isset($_POST['divilife_edd_divihacks_license_key_deactivate'])) {
		divilife_edd_divihacks_deactivate_license();
	}
	return (get_option('divilife_edd_divihacks_license_status') === 'valid');
}


function Divi_Hacks_activate_page() {
	
	dh_license_settings();
}

function Divi_Hacks_license_key_box() {
	
	dh_license_settings();
}


function dh_save_data() {
	
	check_admin_referer( 'dh_nonce' );

	if ( ! current_user_can( 'edit_theme_options' ) ) {
		wp_die();
	}
	
	if ( isset( $_POST['divilife_edd_divihacks_license_key'] ) && $_POST['divilife_edd_divihacks_license_key'] !== '*******' ) {
	
		$license_key = '';
		
		if ( isset( $_POST['divilife_edd_divihacks_license_key'] ) ) {
			
			$license_key = sanitize_text_field( wp_unslash( $_POST['divilife_edd_divihacks_license_key'] ) );
		}
		
		if ( strlen( $license_key ) > 25 ) {
			
			update_option( 'divilife_edd_divihacks_license_key', $license_key );
			
			divilife_edd_divihacks_activate_license();
		}
		else {
			
			update_option( 'divilife_edd_divihacks_license_key', '' );
			update_option( 'divilife_edd_divihacks_license_status', '' );
			
			divilife_edd_divihacks_deactivate_license();
		}
	}
	
	$base_url = admin_url( 'admin.php?page=divi-hacks-settings&tab=all_options' );
	
	$redirect = add_query_arg( array( 'divilife' => 'divihacks' ), $base_url );
	
	wp_safe_redirect( $redirect );
	exit();
}


function dh_license_settings() {
	
	$license = get_option( 'divilife_edd_divihacks_license_key' );
	$status  = get_option( 'divilife_edd_divihacks_license_status' );
	$check_license = divilife_edd_divihacks_check_license( TRUE );
	
	if ( $license != '' ) {
		
		$license = '*******';
	}
	
	$daysleft = 0;
	
	if ( isset( $check_license->expires ) && $check_license->expires != 'lifetime' ) {
		
		$license_expires = strtotime( $check_license->expires );
		$now = strtotime('now');
		$timeleft = $license_expires - $now;
		
		$daysleft = round( ( ( $timeleft / 24 ) / 60 ) / 60 );
		if ( $daysleft > 0 ) {
			
			$daysleft = '( ' . ( ( $daysleft > 1 ) ? $daysleft . ' days left' : $daysleft . ' day left' ) . ' )';
			
		} else {
			
			$daysleft = '';
		}
	}
	
	?>
	
	<div id="wrapper">
	  <div id="panel-wrap">
	  
			<form method="post" action="options.php">
			
				<div id="epanel-wrapper">
					<div id="epanel" class="et-onload">
						<div id="epanel-content-wrap">
							<div id="epanel-header" class="ui-tabs ui-widget ui-widget-content ui-corner-all">
								<h1 id="epanel-title"><?php esc_html_e( 'Divi Hacks - Settings', 'divi-hacks' ); ?></h1>
							</div>
							<div id="epanel-content">
							
								<div class="et-tab-content ui-widget-content ui-corner-bottom" aria-hidden="false">
								
									<div class="et-epanel-box">
										<?php settings_fields('divilife_edd_divihacks_license'); ?>

										<div class="et-box-title"><h3><?php esc_html_e( 'License Key', 'divi-hacks' ); ?></h3></div>
										<div class="et-box-content">
											<label class="description" for="divilife_edd_divihacks_license_key"></label>
											<input id="divilife_edd_divihacks_license_key" name="divilife_edd_divihacks_license_key" type="text" class="regular-text" value="<?php esc_attr_e( $license ); ?>" />
										</div>
									</div>
									
									<?php if ( FALSE !== $license && $check_license->license != 'invalid' ) { ?>
									
										<div class="et-epanel-box">
											<div class="et-box-title"><h3><?php esc_html_e( 'License Status', 'divi-hacks' ); ?></h3></div>
											<div class="et-box-content">
												<?php 
													if ( $status !== false && $check_license->license == 'valid' ) {
														
														print '
														<p class="inputs"><span class="jquery-checkbox"><span class="mark"></span></span></p><br><br>';
													}
													else {
														
														if ( $check_license->license == 'expired' ) {
														
															print '<span class="dashicons dashicons-no-alt dashicons-fail dashicons-large"></span>';
															print '&nbsp;&nbsp;<span class="small-text">( Expired on ' . date( 'F d, Y', strtotime( $check_license->expires ) ) . ' )</span>'; // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped
														}
														
														if ( $check_license->license == NULL && $status !== false ) {
															
															print '<span class="dashicons dashicons-no-alt dashicons-fail dashicons-large"></span>';
															print '&nbsp;&nbsp;<span class="small-text">( ' . $check_license . ' )</span>';
														}
													}
												?>
											</div>
										</div>
										<?php
										
										if ( $status !== false ) { 
											
											if ( $daysleft != '' && $check_license->license == 'valid' ) { ?>
											<div class="et-epanel-box">
												<div class="et-box-title"><h3><?php esc_html_e('License Expires on', 'divi-hacks' ); ?></h3></div>
												<div class="et-box-content">
													<h4 class="no-margin">
														<?php print esc_html__( date( 'F d, Y', strtotime( $check_license->expires ) ) ); ?>
														<?php print esc_html__( $daysleft ); ?>
													</h4>
												</div>
											</div>
											<?php
											}
										}
										?>
									
									<?php } ?>
									
								</div>
				
							</div> <!-- end epanel-content div -->
						</div> <!-- end epanel-content-wrap div -->
					</div> <!-- end epanel div -->
				</div> <!-- end epanel-wrapper div -->
				
				<div id="epanel-bottom">
					<?php wp_nonce_field( 'dh_nonce' ); ?>
					<button class="et-save-button" name="dmp_save" id="dmp-save"><?php esc_html_e( 'Save Changes', 'divi-hacks' ); ?></button>
				</div>

			</form>
			
		</div> <!-- end panel-wrap div -->
	</div> <!-- end wrapper div -->
	<?php
}

function Divi_Hacks_register_option() {
	// creates our settings in the options table
	register_setting('divilife_edd_divihacks_license', 'divilife_edd_divihacks_license_key', 'Divi_Hacks_sanitize_license' );
}
add_action('admin_init', 'Divi_Hacks_register_option');

function Divi_Hacks_sanitize_license( $new ) {
	$old = get_option( 'divilife_edd_divihacks_license_key' );
	if( $old && $old != $new ) {
		delete_option( 'divilife_edd_divihacks_license_status' ); // new license has been entered, so must reactivate
	}
	return $new;
}


/**
 * Allows plugins to use their own update API.
 *
 * @author Easy Digital Downloads
 * @version 1.6.15
 */
class edd_divihacks {

	private $api_url     = '';
	private $api_data    = array();
	private $name        = '';
	private $slug        = '';
	private $version     = '';
	private $wp_override = false;
	private $cache_key   = '';

	/**
	 * Class constructor.
	 *
	 * @uses plugin_basename()
	 * @uses hook()
	 *
	 * @param string  $_api_url     The URL pointing to the custom API endpoint.
	 * @param string  $_plugin_file Path to the plugin file.
	 * @param array   $_api_data    Optional data to send with API calls.
	 */
	public function __construct( $_api_url, $_plugin_file, $_api_data = null ) {

		global $edd_plugin_data;

		$this->api_url     = trailingslashit( $_api_url );
		$this->api_data    = $_api_data;
		$this->name        = plugin_basename( $_plugin_file );
		$this->slug        = basename( $_plugin_file, '.php' );
		$this->version     = $_api_data['version'];
		$this->wp_override = isset( $_api_data['wp_override'] ) ? (bool) $_api_data['wp_override'] : false;
		$this->beta        = ! empty( $this->api_data['beta'] ) ? true : false;
		$this->cache_key   = 'edd_sl_' . md5( serialize( $this->slug . $this->api_data['license'] . $this->beta ) );

		$edd_plugin_data[ $this->slug ] = $this->api_data;
		
		// Set up hooks.
		$this->init();

	}

	/**
	 * Set up WordPress filters to hook into WP's update process.
	 *
	 * @uses add_filter()
	 *
	 * @return void
	 */
	public function init() {
		
		add_filter( 'pre_set_site_transient_update_plugins', array( $this, 'check_update' ) );
		add_filter( 'plugins_api', array( $this, 'plugins_api_filter' ), 10, 3 );
		remove_action( 'after_plugin_row_' . $this->name, 'wp_plugin_update_row', 10 );
		add_action( 'after_plugin_row_' . $this->name, array( $this, 'show_update_notification' ), 10, 2 );
		add_action( 'admin_init', array( $this, 'show_changelog' ) );
		
	}

	/**
	 * Check for Updates at the defined API endpoint and modify the update array.
	 *
	 * This function dives into the update API just when WordPress creates its update array,
	 * then adds a custom API call and injects the custom plugin data retrieved from the API.
	 * It is reassembled from parts of the native WordPress plugin update code.
	 * See wp-includes/update.php line 121 for the original wp_update_plugins() function.
	 *
	 * @uses api_request()
	 *
	 * @param array   $_transient_data Update array build by WordPress.
	 * @return array Modified update array with custom plugin data.
	 */
	public function check_update( $_transient_data ) {

		global $pagenow;

		if ( ! is_object( $_transient_data ) ) {
			$_transient_data = new stdClass;
		}

		if ( 'plugins.php' == $pagenow && is_multisite() ) {
			return $_transient_data;
		}

		if ( ! empty( $_transient_data->response ) && ! empty( $_transient_data->response[ $this->name ] ) && false === $this->wp_override ) {
			return $_transient_data;
		}
		
		$version_info = $this->get_cached_version_info();

		if ( false === $version_info ) {
			$version_info = $this->api_request( 'plugin_latest_version', array( 'slug' => $this->slug, 'beta' => $this->beta ) );

			$this->set_version_info_cache( $version_info );

		}

		if ( false !== $version_info && is_object( $version_info ) && isset( $version_info->new_version ) ) {

			if ( version_compare( $this->version, $version_info->new_version, '<' ) ) {

				$_transient_data->response[ $this->name ] = $version_info;

			}

			$_transient_data->last_checked           = current_time( 'timestamp' );
			$_transient_data->checked[ $this->name ] = $this->version;

		}

		return $_transient_data;
	}

	/**
	 * show update nofication row -- needed for multisite subsites, because WP won't tell you otherwise!
	 *
	 * @param string  $file
	 * @param array   $plugin
	 */
	public function show_update_notification( $file, $plugin ) {
		
		if ( is_network_admin() ) {
			return;
		}

		if( ! current_user_can( 'update_plugins' ) ) {
			return;
		}

		if( ! is_multisite() ) {
			return;
		}

		if ( $this->name != $file ) {
			return;
		}
		
		// Remove our filter on the site transient
		remove_filter( 'pre_set_site_transient_update_plugins', array( $this, 'check_update' ), 10 );

		$update_cache = get_site_transient( 'update_plugins' );

		$update_cache = is_object( $update_cache ) ? $update_cache : new stdClass();
		
		if ( empty( $update_cache->response ) || empty( $update_cache->response[ $this->name ] ) ) {

			$version_info = $this->get_cached_version_info();

			if ( false === $version_info ) {
				$version_info = $this->api_request( 'plugin_latest_version', array( 'slug' => $this->slug, 'beta' => $this->beta ) );

				$this->set_version_info_cache( $version_info );
			}

			if ( ! is_object( $version_info ) ) {
				return;
			}

			if ( version_compare( $this->version, $version_info->new_version, '<' ) ) {

				$update_cache->response[ $this->name ] = $version_info;
				
			}

			$update_cache->last_checked = current_time( 'timestamp' );
			$update_cache->checked[ $this->name ] = $this->version;

			set_site_transient( 'update_plugins', $update_cache );
			
		} else {

			$version_info = $update_cache->response[ $this->name ];

		}

		// Restore our filter
		add_filter( 'pre_set_site_transient_update_plugins', array( $this, 'check_update' ) );

		if ( ! empty( $update_cache->response[ $this->name ] ) && version_compare( $this->version, $version_info->new_version, '<' ) ) {

			// build a plugin list row, with update notification
			$wp_list_table = _get_list_table( 'WP_Plugins_List_Table' );
			# <tr class="plugin-update-tr"><td colspan="' . $wp_list_table->get_column_count() . '" class="plugin-update colspanchange">
			echo '<tr class="plugin-update-tr" id="' . $this->slug . '-update" data-slug="' . $this->slug . '" data-plugin="' . $this->slug . '/' . $file . '">';
			echo '<td colspan="3" class="plugin-update colspanchange">';
			echo '<div class="update-message notice inline notice-warning notice-alt">';

			$changelog_link = self_admin_url( 'index.php?edd_sl_action=view_plugin_changelog&plugin=' . $this->name . '&slug=' . $this->slug . '&TB_iframe=true&width=772&height=911' );

			if ( empty( $version_info->download_link ) ) {
				printf(
					__( 'There is a new version of %1$s available. %2$sView version %3$s details%4$s.', 'easy-digital-downloads' ),
					esc_html( $version_info->name ),
					'<a target="_blank" class="thickbox" href="' . esc_url( $changelog_link ) . '">',
					esc_html( $version_info->new_version ),
					'</a>'
				);
			} else {
				printf(
					__( 'There is a new version of %1$s available. %2$sView version %3$s details%4$s or %5$supdate now%6$s.', 'easy-digital-downloads' ),
					esc_html( $version_info->name ),
					'<a target="_blank" class="thickbox" href="' . esc_url( $changelog_link ) . '">',
					esc_html( $version_info->new_version ),
					'</a>',
					'<a href="' . esc_url( wp_nonce_url( self_admin_url( 'update.php?action=upgrade-plugin&plugin=' ) . $this->name, 'upgrade-plugin_' . $this->name ) ) .'">',
					'</a>'
				);
			}

			do_action( "in_plugin_update_message-{$file}", $plugin, $version_info );

			echo '</div></td></tr>';
		}
	}

	/**
	 * Updates information on the "View version x.x details" page with custom data.
	 *
	 * @uses api_request()
	 *
	 * @param mixed   $_data
	 * @param string  $_action
	 * @param object  $_args
	 * @return object $_data
	 */
	public function plugins_api_filter( $_data, $_action = '', $_args = null ) {

		if ( $_action != 'plugin_information' ) {

			return $_data;

		}

		if ( ! isset( $_args->slug ) || ( $_args->slug != $this->slug ) ) {

			return $_data;

		}

		$to_send = array(
			'slug'   => $this->slug,
			'is_ssl' => is_ssl(),
			'fields' => array(
				'banners' => array(),
				'reviews' => false
			)
		);

		$cache_key = 'edd_api_request_' . md5( serialize( $this->slug . $this->api_data['license'] . $this->beta ) );

		// Get the transient where we store the api request for this plugin for 24 hours
		$edd_api_request_transient = $this->get_cached_version_info( $cache_key );

		//If we have no transient-saved value, run the API, set a fresh transient with the API value, and return that value too right now.
		if ( empty( $edd_api_request_transient ) ) {

			$api_response = $this->api_request( 'plugin_information', $to_send );

			// Expires in 3 hours
			$this->set_version_info_cache( $api_response, $cache_key );

			if ( false !== $api_response ) {
				$_data = $api_response;
			}

		} else {
			$_data = $edd_api_request_transient;
		}

		// Convert sections into an associative array, since we're getting an object, but Core expects an array.
		if ( isset( $_data->sections ) && ! is_array( $_data->sections ) ) {
			$new_sections = array();
			foreach ( $_data->sections as $key => $value ) {
				$new_sections[ $key ] = $value;
			}

			$_data->sections = $new_sections;
		}

		// Convert banners into an associative array, since we're getting an object, but Core expects an array.
		if ( isset( $_data->banners ) && ! is_array( $_data->banners ) ) {
			$new_banners = array();
			foreach ( $_data->banners as $key => $value ) {
				$new_banners[ $key ] = $value;
			}

			$_data->banners = $new_banners;
		}

		return $_data;
	}

	/**
	 * Disable SSL verification in order to prevent download update failures
	 *
	 * @param array   $args
	 * @param string  $url
	 * @return object $array
	 */
	public function http_request_args( $args, $url ) {

		$verify_ssl = $this->verify_ssl();
		if ( strpos( $url, 'https://' ) !== false && strpos( $url, 'edd_action=package_download' ) ) {
			$args['sslverify'] = $verify_ssl;
		}
		return $args;

	}

	/**
	 * Calls the API and, if successfull, returns the object delivered by the API.
	 *
	 * @uses get_bloginfo()
	 * @uses wp_remote_post()
	 * @uses is_wp_error()
	 *
	 * @param string  $_action The requested action.
	 * @param array   $_data   Parameters for the API action.
	 * @return false|object
	 */
	private function api_request( $_action, $_data ) {

		global $wp_version;

		$data = array_merge( $this->api_data, $_data );

		if ( $data['slug'] != $this->slug ) {
			return;
		}

		if( $this->api_url == trailingslashit (home_url() ) ) {
			return false; // Don't allow a plugin to ping itself
		}

		$api_params = array(
			'edd_action' => 'get_version',
			'license'    => ! empty( $data['license'] ) ? $data['license'] : '',
			'item_name'  => isset( $data['item_name'] ) ? $data['item_name'] : false,
			'item_id'    => isset( $data['item_id'] ) ? $data['item_id'] : false,
			'version'    => isset( $data['version'] ) ? $data['version'] : false,
			'slug'       => $data['slug'],
			'author'     => $data['author'],
			'url'        => home_url(),
			'beta'       => ! empty( $data['beta'] ),
		);

		$verify_ssl = $this->verify_ssl();
		$request    = wp_remote_post( $this->api_url, array( 'timeout' => 15, 'sslverify' => $verify_ssl, 'body' => $api_params ) );

		if ( ! is_wp_error( $request ) ) {
			$request = json_decode( wp_remote_retrieve_body( $request ) );
		}

		if ( $request && isset( $request->sections ) ) {
			$request->sections = maybe_unserialize( $request->sections );
		} else {
			$request = false;
		}

		if ( $request && isset( $request->banners ) ) {
			$request->banners = maybe_unserialize( $request->banners );
		}

		if( ! empty( $request->sections ) ) {
			foreach( $request->sections as $key => $section ) {
				$request->$key = (array) $section;
			}
		}

		return $request;
	}

	public function show_changelog() {
		
		global $edd_plugin_data;
		
		if ( empty( $_REQUEST['edd_sl_action'] ) || 'view_plugin_changelog' != $_REQUEST['edd_sl_action'] ) {
			return;
		}
		
		if ( empty( $_REQUEST['plugin'] ) ) {
			return;
		}
		
		if ( empty( $_REQUEST['slug'] ) ) {
			return;
		}
		
		if ( ! current_user_can( 'update_plugins' ) ) {
			wp_die( __( 'You do not have permission to install plugin updates', 'easy-digital-downloads' ), __( 'Error', 'easy-digital-downloads' ), array( 'response' => 403 ) );
		}

		$data         = $edd_plugin_data[ $_REQUEST['slug'] ];
		$beta         = ! empty( $data['beta'] ) ? true : false;
		$cache_key    = md5( 'edd_plugin_' . sanitize_key( $_REQUEST['plugin'] ) . '_' . $beta . '_version_info' );
		$version_info = $this->get_cached_version_info( $cache_key );

		if( false === $version_info ) {

			$api_params = array(
				'edd_action' => 'get_version',
				'item_name'  => isset( $data['item_name'] ) ? $data['item_name'] : false,
				'item_id'    => isset( $data['item_id'] ) ? $data['item_id'] : false,
				'slug'       => $_REQUEST['slug'],
				'author'     => $data['author'],
				'url'        => home_url(),
				'beta'       => ! empty( $data['beta'] )
			);

			$verify_ssl = $this->verify_ssl();
			$request    = wp_remote_post( $this->api_url, array( 'timeout' => 15, 'sslverify' => $verify_ssl, 'body' => $api_params ) );

			if ( ! is_wp_error( $request ) ) {
				$version_info = json_decode( wp_remote_retrieve_body( $request ) );
			}


			if ( ! empty( $version_info ) && isset( $version_info->sections ) ) {
				$version_info->sections = maybe_unserialize( $version_info->sections );
			} else {
				$version_info = false;
			}

			if( ! empty( $version_info ) ) {
				foreach( $version_info->sections as $key => $section ) {
					$version_info->$key = (array) $section;
				}
			}

			$this->set_version_info_cache( $version_info, $cache_key );

		}

		if( ! empty( $version_info ) && isset( $version_info->sections['changelog'] ) ) {
			echo '<div style="background:#fff;padding:10px;">' . $version_info->sections['changelog'] . '</div>';
		}

		exit;
	}

	public function get_cached_version_info( $cache_key = '' ) {

		if( empty( $cache_key ) ) {
			$cache_key = $this->cache_key;
		}

		$cache = get_option( $cache_key );

		if( empty( $cache['timeout'] ) || current_time( 'timestamp' ) > $cache['timeout'] ) {
			return false; // Cache is expired
		}

		return json_decode( $cache['value'] );

	}

	public function set_version_info_cache( $value = '', $cache_key = '' ) {

		if( empty( $cache_key ) ) {
			$cache_key = $this->cache_key;
		}

		$data = array(
			'timeout' => strtotime( '+3 hours', current_time( 'timestamp' ) ),
			'value'   => json_encode( $value )
		);

		update_option( $cache_key, $data, 'no' );

	}
	
	private function license_has_expired() {
		
		$check_license = divilife_edd_divihacks_check_license( TRUE );
		if ( isset( $check_license->license ) && $check_license->license != 'valid' ) {
			
			return TRUE;
		}
		
		return FALSE;
	}
	

	/**
	 * Returns if the SSL of the store should be verified.
	 *
	 * @since  1.6.13
	 * @return bool
	 */
	private function verify_ssl() {
		return (bool) apply_filters( 'edd_sl_api_request_verify_ssl', true, $this );
	}

}