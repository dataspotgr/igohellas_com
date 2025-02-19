<?php
 

namespace DIPI\Modules\PricingTableItem;
 
if ( ! defined( 'ABSPATH' ) ) {
    die( 'Direct access forbidden.' );
}

use ET\Builder\Framework\DependencyManagement\Interfaces\DependencyInterface;
use ET\Builder\Packages\ModuleLibrary\ModuleRegistration;
 
 
class PricingTableItem implements DependencyInterface {
  public function load() {
    wp_enqueue_script('dipi-popup-gallery');
    $module_json_folder_path = plugin_dir_path(__FILE__);
    add_action(
      'init',
      function() use ( $module_json_folder_path ) {
        ModuleRegistration::register_module(
          $module_json_folder_path,
          [
            'render_callback' => [ RenderCallbackTrait::class, 'render_callback' ],
          ]
        );
      }
    );
  }
}