<?php
 

 namespace DIPI\Modules\Breadcrumbs;
 
if ( ! defined( 'ABSPATH' ) ) {
    die( 'Direct access forbidden.' );
}
require_once(__DIR__ . '/BreadcrumbsModuleController.php');
use ET\Builder\Framework\DependencyManagement\Interfaces\DependencyInterface;
use ET\Builder\Packages\ModuleLibrary\ModuleRegistration;
 
class Breadcrumbs implements DependencyInterface {
  public function load() {
    $module_json_folder_path = plugin_dir_path(__FILE__);
    
    wp_enqueue_script('dipi_breadcrumbs_public');
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