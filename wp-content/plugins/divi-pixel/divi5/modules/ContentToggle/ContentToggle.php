<?php
 

 namespace DIPI\Modules\ContentToggle;
 
if ( ! defined( 'ABSPATH' ) ) {
    die( 'Direct access forbidden.' );
}
//FIXME: why is this not a use DIPI\... statement? Is it even used here in the PHP module or should the contents of those files be somewhere else?
// require_once(__DIR__ . '/ContentToggleModuleController.php');
// require_once(__DIR__ . '/../../BaseTraits/BaseModuleController.php');
use ET\Builder\Framework\DependencyManagement\Interfaces\DependencyInterface;
use ET\Builder\Packages\ModuleLibrary\ModuleRegistration;
 
 
class ContentToggle implements DependencyInterface {
  public function load() {
    $module_json_folder_path = plugin_dir_path(__FILE__);
    wp_enqueue_script('dipi_content_toggle_public');
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