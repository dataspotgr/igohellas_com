<?php
 

 namespace DIPI\Modules\HoverBox;
 
if ( ! defined( 'ABSPATH' ) ) {
    die( 'Direct access forbidden.' );
}

use ET\Builder\Framework\DependencyManagement\Interfaces\DependencyInterface;
use ET\Builder\Packages\ModuleLibrary\ModuleRegistration;
 
 
class HoverBox implements DependencyInterface {
  public function load() {
    $module_json_folder_path = plugin_dir_path(__FILE__);
    wp_enqueue_script('dipi_hover_box_public');
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