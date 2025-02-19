<?php 
$detect_legacy_primary_nav_color = et_get_option( 'primary_nav_text_color', 'Dark' );
if ( $detect_legacy_primary_nav_color == 'Light' ) {
    $legacy_primary_nav_color = '#ffffff';
} else {
    $legacy_primary_nav_color = 'rgba(0,0,0,0.6)';
}
$menu_link = et_get_option( 'menu_link', $legacy_primary_nav_color );
$mobile_menu_link = et_get_option( 'mobile_menu_link', $menu_link );

$primary_nav_bg = et_get_option( 'primary_nav_bg', '#ffffff' );
$mobile_primary_nav_bg = et_get_option( 'mobile_primary_nav_bg', $primary_nav_bg );
?>



<style id="mobile-menu-breakpoing-divi-core-css">
@media (min-width: 981px) and (max-width: <?php echo esc_html($breakpoint_mobile); ?>px) {

	/***********************************
	* Styles from Divis style.dev.css *
	***********************************/

	/* Hide Logo On Mobile */
	.et_hide_mobile_logo #main-header .logo_container {
		display: none;
		opacity: 0;
		-webkit-transition: all 0.4s ease-in-out;
		transition: all 0.4s ease-in-out;
	}

	/* Full width Logo */
	.et_fullwidth_nav #main-header .container {
		width: 80%;
		margin: auto;
		position: relative;
	}
	/* Page Containers */

	#page-container,
	.et_non_fixed_nav.et_transparent_nav.et_show_nav.et_secondary_nav_enabled #page-container,
	.et_non_fixed_nav.et_transparent_nav.et_show_nav #page-container,
	#page-container,
	.et_fixed_nav.et_show_nav.et_secondary_nav_enabled #page-container,
	.et_fixed_nav.et_show_nav #page-container {
		padding-top: 80px;
	}

	.et-tb #page-container,
	.et-tb-has-header #page-container,
	.et_fixed_nav.et_show_nav.et_secondary_nav_enabled.et-tb #page-container,
	.et_fixed_nav.et_show_nav.et_secondary_nav_enabled.et-tb-has-header #page-container,
	.et_fixed_nav.et_show_nav.et-tb #page-container,
	.et_fixed_nav.et_show_nav.et-tb-has-header #page-container {
		padding-top: 0 !important;
	}

	.et_non_fixed_nav #page-container {
		padding-top: 0;
	}

	.et_non_fixed_nav.et_transparent_nav.et_show_nav.et_secondary_nav_enabled.et_header_style_centered #page-container,
	.et_non_fixed_nav.et_transparent_nav.et_show_nav.et_header_style_centered #page-container,
	.et_fixed_nav.et_show_nav.et_secondary_nav_enabled.et_header_style_centered #page-container,
	.et_fixed_nav.et_show_nav.et_header_style_centered #page-container {
		padding-top: 136px;
	}

	#sidebar,
	#left-area {
		width: 100% !important;
	}


	/* With Sidebar */

	.et_right_sidebar #left-area,
	.et_right_sidebar #sidebar,
	.et_left_sidebar #left-area,
	.et_left_sidebar #sidebar {
		width: auto;
		float: none;
		padding-right: 0;
		padding-left: 0;
	}

	.et_right_sidebar #left-area {
		margin-right: 0;
	}

	.et_right_sidebar #sidebar {
		margin-left: 0;
		border-left: none;
	}

	.et_left_sidebar #left-area {
		margin-left: 0;
	}

	.et_left_sidebar #sidebar {
		margin-right: 0;
		border-right: none;
	}

	#main-content .container:before {
		display: none !important;
	}

	.et_full_width_page.woocommerce-page ul.products li.product:nth-child(4n+1),
	.et_full_width_page .et_gallery_item:nth-child(4n+1) {
		clear: none;
	}


	/* Blog + Sidebar Module + Footer */

	.footer-widget:nth-child(n) {
		width: 46.25% !important;
		margin: 0 7.5% 7.5% 0 !important;
	}

	#footer-widgets .footer-widget .fwidget {
		margin-bottom: 16.21%;
	}

	.et_pb_gutters1 .footer-widget:nth-child(n) {
		width: 50% !important;
		margin: 0 !important;
	}

	.et_pb_gutters1 #footer-widgets .footer-widget .fwidget {
		margin-bottom: 0;
	}

	#footer-widgets {
		padding: 8% 0;
	}

	#footer-widgets .footer-widget:nth-child(2n) {
		margin-right: 0 !important;
	}

	#footer-widgets .footer-widget:nth-last-child(-n+2) {
		margin-bottom: 0 !important;
	}

	.bottom-nav {
		text-align: center;
	}


	/* WooCommerce */

	.woocommerce .cart-collaterals>div,
	.woocommerce .cart-collaterals>form {
		width: 100% !important;
		float: none !important;
	}

	.shop_table .coupon {
		margin-bottom: 25px !important;
	}

	.checkout .form-row,
	.checkout .col-1,
	.checkout .col-2 {
		float: none !important;
		width: auto !important;
	}

	.checkout .col-1,
	.checkout .col-2 {
		margin-bottom: 25px !important;
	}


	/* Header Styles */

	#main-header,
	#top-header {
		transition: none;
		-webkit-transition: none;
		-moz-transition: none;
	}

	#top-menu {
		display: none;
	}

	.et_hide_nav.et_non_fixed_nav.et_transparent_nav #top-header,
	.et_hide_nav.et_non_fixed_nav.et_transparent_nav #main-header,
	.et_hide_nav.et_fixed_nav #top-header,
	.et_hide_nav.et_fixed_nav #main-header {
		transform: translateY(0px) !important;
		-webkit-transform: translateY(0px) !important;
		opacity: 1;
	}

	.et_header_style_centered #main-header {
		padding: 20px 0;
	}

	.et_header_style_centered nav#top-menu-nav {
		display: none;
	}

	.et_header_style_split #main-header {
		padding: 20px 0;
	}

	.et_header_style_split #et-top-navigation,
	.et_header_style_split .et-fixed-header #et-top-navigation {
		display: block;
		padding-top: 0;
	}

	#et-top-navigation {
		margin-right: 0;
		transition: none;
		-webkit-transition: none;
		-moz-transition: none;
	}

	.et_non_fixed_nav.et_transparent_nav #main-header,
	.et_non_fixed_nav.et_transparent_nav #top-header,
	.et_fixed_nav #main-header,
	.et_fixed_nav #top-header {
		position: absolute;
	}

	.et_header_style_left .et-fixed-header #et-top-navigation,
	.et_header_style_left #et-top-navigation {
		padding-top: 24px;
		display: block;
	}

	.et_non_fixed_nav.et_transparent_nav #main-header,
	.et_fixed_nav #main-header {
		-webkit-transition: none;
		transition: none;
	}

	.et_vertical_nav.et_right_sidebar #left-area,
	.et_vertical_nav.et_left_sidebar #left-area {
		width: auto;
	}

	#et-secondary-nav,
	#et-secondary-menu {
		display: none !important;
	}

	.et_non_fixed_nav.et_transparent_nav_temp #main-header,
	.et_secondary_nav_only_menu #main-header,
	.et_fixed_nav_temp #main-header,
	.et_secondary_nav_only_menu #main-header {
		top: 0 !important;
	}

	.et_secondary_nav_only_menu #top-header {
		display: none;
	}

	#top-header .container {
		padding-top: 0;
	}

	#et-info {
		padding-top: 0.75em;
	}


	/* Logo */

	#logo,
	.logo_container,
	#main-header,
	.container {
		transition: none;
		-webkit-transition: none;
		-moz-transition: none;
	}

	.et_header_style_centered #logo#logo {
		max-height: 60px;
	}

	.et_header_style_centered header#main-header .logo_container {
		height: auto;
		max-height: 100px;
		padding: 0;
	}

	.et_header_style_split header#main-header .logo_container {
		height: auto;
		max-height: 100px;
		padding: 0;
	}

	.et_header_style_split #logo {
		max-height: 60px;
	}

	.et_vertical_nav span.logo_helper {
		display: inline-block;
	}

	.et_vertical_nav.et_header_style_left .logo_container {
		height: 100%;
		position: absolute;
	}

	.et_header_style_left #logo,
	.et_header_style_split #logo {
		max-width: 50%;
	}


	/* Search Form */

	#et_top_search {
		margin: 0 35px 0 0;
		float: left;
	}

	#et_search_icon:before {
		top: 7px;
	}

	.et_header_style_centered #et_top_search,
	.et_vertical_nav.et_header_style_centered #main-header #et_top_search {
		display: none !important;
	}

	.et_header_style_centered .et_search_outer,
	.et_header_style_split .et_search_outer {
		display: none;
	}

	.et_header_style_split #et_top_search,
	.et_vertical_nav.et_header_style_split #main-header #et_top_search {
		display: none !important;
	}

	.et_header_style_left .et-search-form,
	.et_header_style_split .et-search-form {
		width: 50% !important;
		max-width: 50% !important;
	}

	.et_header_style_slide .et_slide_in_menu_container .et-search-form {
		width: 100% !important;
		max-width: 100% !important;
	}


	/* Social Icons */

	.et-social-icons,
	#footer-info {
		float: none;
		text-align: center;
	}

	.et-social-icons {
		margin: 0 0 5px;
	}

	#top-header .et-social-icons {
		margin-bottom: 0;
	}


	/* Cart */

	.et_header_style_centered #et-top-navigation .et-cart-info {
		display: none;
	}

	#et-top-navigation .et-cart-info {
		margin-top: 5px;
	}

	.et_vertical_nav #et-top-navigation .et-cart-info {
		margin-left: -38px;
	}


	/* Mobile Menu */

	header .et_mobile_nav_menu,
	header #et_mobile_nav_menu {
		display: flex;
		-webkit-box-align: center;
        align-items: center;
	}


	/* Centered */

	.et_header_style_centered .et_menu_container .mobile_menu_bar,
	.et_header_style_split .et_menu_container .mobile_menu_bar {
		opacity: 1;
	}

	.et_header_style_centered .et_mobile_nav_menu,
	.et_header_style_centered #et_mobile_nav_menu {
		float: none;
		position: relative;
		margin-top: 20px;
	}

	.et_header_style_centered #main-header .mobile_nav {
		display: block;
		text-align: left;
		background-color: rgba(0, 0, 0, 0.05);
		border-radius: 5px;
		padding: 5px 10px;
	}

	.et_header_style_centered .mobile_nav .select_page,
	.et_header_style_split .mobile_nav .select_page {
		display: inline-block;
		color: #666;
		font-size: 14px;
	}

	.et_header_style_centered .et_menu_container .mobile_menu_bar {
		position: absolute;
		right: 5px;
		top: 2px;
	}

	.et_header_style_centered .et_mobile_menu {
		top: 53px;
	}


	/* Centered Inline Logo */

	.et_header_style_split .et_mobile_nav_menu,
	.et_header_style_split #et_mobile_nav_menu {
		float: none;
		position: relative;
		margin-top: 20px;
		display: block;
	}

	.et_header_style_split nav#top-menu-nav {
		display: none;
	}

	.et_header_style_split #main-header .mobile_nav {
		display: block;
		text-align: left;
		background-color: rgba(0, 0, 0, 0.05);
		border-radius: 5px;
		padding: 9px 10px;
	}

	.et_header_style_split .et_menu_container .mobile_menu_bar {
		position: absolute;
		right: 5px;
		top: 2px;
	}

	.et_header_style_split .et_mobile_menu {
		top: 53px;
	}


	/* Admin Bar Fixes */

	body.admin-bar.et_vertical_nav #main-header {
		top: 0 !important;
	}

	.et_non_fixed_nav.et_transparent_nav.et_secondary_nav_only_menu.admin-bar #main-header,
	.et_fixed_nav.et_secondary_nav_only_menu.admin-bar #main-header {
		top: 32px !important;
	}

	body.admin-bar.et_fixed_nav.et_header_style_slide #main-header {
		top: 0 !important;
	}

	.et_fixed_nav.et_header_style_slide #main-header {
		left: 0 !important;
	}

	.et_fixed_nav.et_boxed_layout.et_header_style_slide #page-container #main-header {
		width: 100%;
	}
	




	/**************************************
	* Styles from Divis style-cpt.dev.css *
	***************************************/

	/* Hide Logo On Mobile */

	.et_hide_mobile_logo #main-header .logo_container {
		display: none;
		opacity: 0;
		-webkit-transition: all 0.4s ease-in-out;
		transition: all 0.4s ease-in-out;
	}


	/* Page Containers */

	#page-container,
	.et_non_fixed_nav.et_transparent_nav.et_show_nav.et_secondary_nav_enabled #page-container,
	.et_non_fixed_nav.et_transparent_nav.et_show_nav #page-container,
	#page-container,
	.et_fixed_nav.et_show_nav.et_secondary_nav_enabled #page-container,
	.et_fixed_nav.et_show_nav #page-container {
		padding-top: 80px;
	}

	.et-tb #page-container,
	.et-tb-has-header #page-container,
	.et_fixed_nav.et_show_nav.et_secondary_nav_enabled.et-tb #page-container,
	.et_fixed_nav.et_show_nav.et_secondary_nav_enabled.et-tb-has-header #page-container,
	.et_fixed_nav.et_show_nav.et-tb #page-container,
	.et_fixed_nav.et_show_nav.et-tb-has-header #page-container {
		padding-top: 0 !important;
	}

	.et_non_fixed_nav #page-container {
		padding-top: 0;
	}

	.et_non_fixed_nav.et_transparent_nav.et_show_nav.et_secondary_nav_enabled.et_header_style_centered #page-container,
	.et_non_fixed_nav.et_transparent_nav.et_show_nav.et_header_style_centered #page-container,
	.et_fixed_nav.et_show_nav.et_secondary_nav_enabled.et_header_style_centered #page-container,
	.et_fixed_nav.et_show_nav.et_header_style_centered #page-container {
		padding-top: 136px;
	}

	#sidebar,
	#left-area {
		width: 100% !important;
	}


	/* With Sidebar */

	.et_right_sidebar #left-area,
	.et_right_sidebar #sidebar,
	.et_left_sidebar #left-area,
	.et_left_sidebar #sidebar {
		width: auto;
		float: none;
		padding-right: 0;
		padding-left: 0;
	}

	.et_right_sidebar #left-area {
		margin-right: 0;
	}

	.et_right_sidebar #sidebar {
		margin-left: 0;
		border-left: none;
	}

	.et_left_sidebar #left-area {
		margin-left: 0;
	}

	.et_left_sidebar #sidebar {
		margin-right: 0;
		border-right: none;
	}

	#main-content .container:before {
		display: none !important;
	}

	.et_full_width_page.woocommerce-page ul.products li.product:nth-child(4n+1),
	.et_full_width_page .et_gallery_item:nth-child(4n+1) {
		clear: none;
	}


	/* Blog + Sidebar Module + Footer */

	.footer-widget:nth-child(n) {
		width: 46.25% !important;
		margin: 0 7.5% 7.5% 0 !important;
	}

	#footer-widgets .footer-widget .fwidget {
		margin-bottom: 16.21%;
	}

	.et_pb_gutters1 .footer-widget:nth-child(n) {
		width: 50% !important;
		margin: 0 !important;
	}

	.et_pb_gutters1 #footer-widgets .footer-widget .fwidget {
		margin-bottom: 0;
	}

	#footer-widgets {
		padding: 8% 0;
	}

	#footer-widgets .footer-widget:nth-child(2n) {
		margin-right: 0 !important;
	}

	#footer-widgets .footer-widget:nth-last-child(-n+2) {
		margin-bottom: 0 !important;
	}

	.bottom-nav {
		text-align: center;
	}


	/* WooCommerce */

	.woocommerce .cart-collaterals>div,
	.woocommerce .cart-collaterals>form {
		width: 100% !important;
		float: none !important;
	}

	.shop_table .coupon {
		margin-bottom: 25px !important;
	}

	.checkout .form-row,
	.checkout .col-1,
	.checkout .col-2 {
		float: none !important;
		width: auto !important;
	}

	.checkout .col-1,
	.checkout .col-2 {
		margin-bottom: 25px !important;
	}


	/* Header Styles */

	#main-header,
	#top-header {
		transition: none;
		-webkit-transition: none;
		-moz-transition: none;
	}

	#top-menu {
		display: none;
	}

	.et_hide_nav.et_non_fixed_nav.et_transparent_nav #top-header,
	.et_hide_nav.et_non_fixed_nav.et_transparent_nav #main-header,
	.et_hide_nav.et_fixed_nav #top-header,
	.et_hide_nav.et_fixed_nav #main-header {
		transform: translateY(0px) !important;
		-webkit-transform: translateY(0px) !important;
		opacity: 1;
	}

	.et_header_style_centered #main-header {
		padding: 20px 0;
	}

	.et_header_style_centered nav#top-menu-nav {
		display: none;
	}

	.et_header_style_split #main-header {
		padding: 20px 0;
	}

	.et_header_style_split #et-top-navigation,
	.et_header_style_split .et-fixed-header #et-top-navigation {
		display: block;
		padding-top: 0;
	}

	#et-top-navigation {
		margin-right: 0;
		transition: none;
		-webkit-transition: none;
		-moz-transition: none;
	}

	.et_non_fixed_nav.et_transparent_nav #main-header,
	.et_non_fixed_nav.et_transparent_nav #top-header,
	.et_fixed_nav #main-header,
	.et_fixed_nav #top-header {
		position: absolute;
	}

	.et_header_style_left .et-fixed-header #et-top-navigation,
	.et_header_style_left #et-top-navigation {
		padding-top: 24px;
		display: block;
	}

	.et_non_fixed_nav.et_transparent_nav #main-header,
	.et_fixed_nav #main-header {
		-webkit-transition: none;
		transition: none;
	}

	.et_vertical_nav.et_right_sidebar #left-area,
	.et_vertical_nav.et_left_sidebar #left-area {
		width: auto;
	}

	#et-secondary-nav,
	#et-secondary-menu {
		display: none !important;
	}

	.et_non_fixed_nav.et_transparent_nav_temp #main-header,
	.et_secondary_nav_only_menu #main-header,
	.et_fixed_nav_temp #main-header,
	.et_secondary_nav_only_menu #main-header {
		top: 0 !important;
	}

	.et_secondary_nav_only_menu #top-header {
		display: none;
	}

	#top-header .container {
		padding-top: 0;
	}

	#et-info {
		padding-top: 0.75em;
	}


	/* Logo */

	#logo,
	.logo_container,
	#main-header,
	.container {
		transition: none;
		-webkit-transition: none;
		-moz-transition: none;
	}

	.et_header_style_centered #logo {
		max-height: 60px;
	}

	.et_header_style_centered header#main-header .logo_container {
		height: auto;
		max-height: 100px;
		padding: 0;
	}

	.et_header_style_split header#main-header .logo_container {
		height: auto;
		max-height: 100px;
		padding: 0;
	}

	.et_header_style_split #logo {
		max-height: 60px;
	}

	.et_vertical_nav span.logo_helper {
		display: inline-block;
	}

	.et_vertical_nav.et_header_style_left .logo_container {
		height: 100%;
		position: absolute;
	}

	.et_header_style_left #logo,
	.et_header_style_split #logo {
		max-width: 50%;
	}


	/* Search Form */

	#et_top_search {
		margin: 0 35px 0 0;
		float: left;
	}

	#et_search_icon:before {
		top: 7px;
	}

	.et_header_style_centered #et_top_search,
	.et_vertical_nav.et_header_style_centered #main-header #et_top_search {
		display: none !important;
	}

	.et_header_style_centered .et_search_outer,
	.et_header_style_split .et_search_outer {
		display: none;
	}

	.et_header_style_split #et_top_search,
	.et_vertical_nav.et_header_style_split #main-header #et_top_search {
		display: none !important;
	}

	.et_header_style_left .et-search-form,
	.et_header_style_split .et-search-form {
		width: 50% !important;
		max-width: 50% !important;
	}

	.et_header_style_slide .et_slide_in_menu_container .et-search-form {
		width: 100% !important;
		max-width: 100% !important;
	}


	/* Social Icons */

	.et-social-icons,
	#footer-info {
		float: none;
		text-align: center;
	}

	.et-social-icons {
		margin: 0 0 5px;
	}

	#top-header .et-social-icons {
		margin-bottom: 0;
	}


	/* Cart */

	.et_header_style_centered #et-top-navigation .et-cart-info {
		display: none;
	}

	#et-top-navigation .et-cart-info {
		margin-top: 5px;
	}

	.et_vertical_nav #et-top-navigation .et-cart-info {
		margin-left: -38px;
	}


	/* Centered */

	.et_header_style_centered .et_menu_container .mobile_menu_bar,
	.et_header_style_split .et_menu_container .mobile_menu_bar {
		opacity: 1;
	}

	.et_header_style_centered .et_mobile_nav_menu,
	.et_header_style_centered #et_mobile_nav_menu {
		float: none;
		position: relative;
		margin-top: 20px;
	}

	.et_header_style_centered #main-header .mobile_nav {
		display: block;
		text-align: left;
		background-color: rgba(0, 0, 0, 0.05);
		border-radius: 5px;
		padding: 5px 10px;
	}

	.et_header_style_centered .mobile_nav .select_page,
	.et_header_style_split .mobile_nav .select_page {
		display: inline-block;
		color: #666;
		font-size: 14px;
	}

	.et_header_style_centered .et_menu_container .mobile_menu_bar {
		position: absolute;
		right: 5px;
		top: 2px;
	}

	.et_header_style_centered .et_mobile_menu {
		top: 53px;
	}


	/* Centered Inline Logo */

	.et_header_style_split .et_mobile_nav_menu,
	.et_header_style_split #et_mobile_nav_menu {
		float: none;
		position: relative;
		margin-top: 20px;
		display: block;
	}

	.et_header_style_split nav#top-menu-nav {
		display: none;
	}

	.et_header_style_split #main-header .mobile_nav {
		display: block;
		text-align: left;
		background-color: rgba(0, 0, 0, 0.05);
		border-radius: 5px;
		padding: 9px 10px;
	}

	.et_header_style_split .et_menu_container .mobile_menu_bar {
		position: absolute;
		right: 5px;
		top: 2px;
	}

	.et_header_style_split .et_mobile_menu {
		top: 53px;
	}


	/* Admin Bar Fixes */

	body.admin-bar.et_vertical_nav #main-header {
		top: 0 !important;
	}

	.et_non_fixed_nav.et_transparent_nav.et_secondary_nav_only_menu.admin-bar #main-header,
	.et_fixed_nav.et_secondary_nav_only_menu.admin-bar #main-header {
		top: 32px !important;
	}

	body.admin-bar.et_fixed_nav.et_header_style_slide #main-header {
		top: 0 !important;
	}

	.et_fixed_nav.et_header_style_slide #main-header {
		left: 0 !important;
	}

	.et_fixed_nav.et_boxed_layout.et_header_style_slide #page-container #main-header {
		width: 100%;
	}





	/**********************************
	* Styles from Divis functions.php *
	***********************************/
    
    <?php if ( $menu_link !== $mobile_menu_link ): ?>
    .et_header_style_centered .mobile_nav .select_page, .et_header_style_split .mobile_nav .select_page, .et_mobile_menu li a, .mobile_menu_bar:before, .et_nav_text_color_light #top-menu > li > a, .et_nav_text_color_dark #top-menu > li > a, #top-menu a, .et_mobile_menu li a, #et_search_icon:before, #et_top_search .et-search-form input, .et_search_form_container input, #et-top-navigation .et-cart-info { color: <?php echo esc_html( $mobile_menu_link ); ?>; }
    .et_close_search_field:after { color: <?php echo esc_html( $mobile_menu_link ); ?> !important; }
    .et_search_form_container input::-moz-placeholder { color: <?php echo esc_html( $mobile_menu_link ); ?>; }
    .et_search_form_container input::-webkit-input-placeholder { color: <?php echo esc_html( $mobile_menu_link ); ?>; }
    .et_search_form_container input:-ms-input-placeholder { color: <?php echo esc_html( $mobile_menu_link ); ?>; }
    <?php endif; ?>

    <?php if ( $mobile_primary_nav_bg !== $primary_nav_bg ) { ?>
    #main-header, #main-header .nav li ul, .et-search-form, #main-header .et_mobile_menu { background-color: <?php echo esc_html( $mobile_primary_nav_bg ); ?>!important; }
	<?php } ?>

	/**
	 * Theme Builder Header
	 */
	header .et_pb_menu .et_pb_menu__wrap {
    	justify-content: flex-end;
	}



	/*************************
     * Styles from style.css *
	 *************************/
	
	header .et_pb_fullwidth_menu .et_pb_menu__menu, header .et_pb_menu .et_pb_menu__menu {
		display: none;
	}

	.et_pb_fullwidth_menu .et_mobile_menu, .et_pb_fullwidth_menu .et_mobile_menu ul, .et_pb_menu .et_mobile_menu, .et_pb_menu .et_mobile_menu ul {
		list-style: none!important;
		text-align: left;
	}

	.et_pb_fullwidth_menu .et_mobile_menu, .et_pb_menu .et_mobile_menu {
		top: 100%;
		padding: 5%;
	}

}
</style>