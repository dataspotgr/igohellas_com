<?php
namespace DiviPixel;

// Prevent direct access
if (!defined('ABSPATH')) {
    exit;
}

if (!class_exists('DIPI_Popup_On_Mobile_Menu')) {
    class DIPI_Popup_On_Mobile_Menu {
        private static $_instance;
        private static $popup_id;
        private static $use_hamburger;

        private $hook = 'dipi_clear_cache';
        public static function instance()
        {
            if (self::$_instance == null) {
                self::$_instance = new self();
                self::$_instance->init();
            }

            return self::$_instance;
        }

        private function init()
        {
            $popup_as_mobile_menu = DIPI_Settings::get_option('popup_as_mobile_menu');
            self::$popup_id = DIPI_Settings::get_option('mobile_menu_popup');
            self::$use_hamburger = DIPI_Settings::get_option('hamburger_animation');
            if($popup_as_mobile_menu) {
                add_filter('wp_nav_menu_items', [$this, 'nav_menu_items'], 11, 2);
                add_action('wp_enqueue_scripts', [$this, 'enqueue_scripts']);
                
            }
        }

        public function enqueue_scripts() {
            wp_enqueue_script('dipi-popup-maker-on-mobile-menu', plugins_url('dist/public/js/popup_on_mobile_menu.min.js', constant('DIPI_PLUGIN_FILE')), array('dipi-popup-maker-popup-effect', 'jquery'), DIPI_PM_VERSION, true);
        }
        
        public function nav_menu_items($items, $args) {
            $menu_id = DIPI_Settings::get_option('popup_select_menu');
            $menu_button_placement = DIPI_Settings::get_option('menu_button_placement');
            $add_popup = self::dipi_is_popup_enabled($args, $menu_id);
            if( $add_popup ){
                $popup_item = sprintf('<span class="dipi-popup-on-mobile-menu" data-popupid="%1$s" style="display: none!important;"/>', self::$popup_id);
                $items = ($menu_button_placement == 'a') ? $items . $popup_item : $popup_item . $items;
            }
            return $items;
        }
        
        function dipi_is_popup_enabled($args,  $menu_id){
            $current_menu_id = null;
            if(gettype($args->menu) == 'integer' ){
                $current_menu_id = $args->menu;
            }elseif(gettype($args->menu) == 'object' ){
                $current_menu_id = $args->menu->term_id;
            }
            if(is_null($current_menu_id)) return false;
            if(is_array($menu_id)){
                $integerIDs = array_map('intval', $menu_id);
                if(in_array(intval($current_menu_id), $integerIDs, true)){
                    return true;
                }
            } else {
                if(intval($current_menu_id) === intval($menu_id))
                return true;
            }
            return false;
        }
    }
}
DIPI_Popup_On_Mobile_Menu::instance();