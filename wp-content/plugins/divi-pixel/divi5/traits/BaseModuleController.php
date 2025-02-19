<?php
namespace DIPI\Traits;

if ( ! defined( 'ABSPATH' ) ) {
    die( 'Direct access forbidden.' );
}

require_once ABSPATH . 'wp-content/themes/Divi/includes/builder-5/server/Framework/Controllers/RESTController.php';
 
use ET\Builder\Framework\Route\RESTRoute;
use ET\Builder\Framework\Controllers\RESTController;
use ET\Builder\Framework\UserRole\UserRole;
use WP_REST_Request;
use WP_REST_Response;
function render_library_layout($layoutId) {
    return "<div>".get_the_title($layoutId)."<br/>*Divi 5 still not supporting to render divi library in builder.*</div>";
    //return do_blocks("<!-- wp:divi/global-layout {'globalModule':'$layoutId'} /-->");
    //return  "TEST".do_shortcode('[et_pb_section global_module="' . $layoutId . '"][/et_pb_section]');
    return do_shortcode('[et_pb_section global_module="' . $layoutId . '"][/et_pb_section]');
    $module_slugs = ET_Builder_Element::get_module_slugs_by_post_type();
    return "TEST";
            $uuid = uniqid();
            // TODO: This array could be cached as it never changes (unlike the replacements which need the uuid)
            $map_to_regex = function ($value) {return '/' . $value . '_(\d+)(_tb_footer|)(,|\.|:| |")/';};
            $regex = array_map($map_to_regex, $module_slugs);
        return "TEST";
            $map_to_replacements = function ($value) use ($uuid) {return 'dipi_' . $uuid . '_' . $value . '_${1}${2}${3}';};
            $replacements = array_map($map_to_replacements, $module_slugs);

            $divi_library_shortcode = do_shortcode('[et_pb_section global_module="' . $layoutId . '"][/et_pb_section]');
            return "TEST".$divi_library_shortcode;
            $divi_library_shortcode .= '<style type="text/css">' . str_replace(
                '.et-db #et-boc .et-l', '',
                ET_Builder_Element::get_style()) . '</style>';
            ET_Builder_Element::clean_internal_modules_styles(false);
            return is_admin() || dipi_is_vb() ? preg_replace($regex, $replacements, $divi_library_shortcode) : $divi_library_shortcode;
}

//FIXME: Controllers should probably go to their own directory, not into the traits directory!
/**
 * Class for registering REST API Endpoint.
 */
class BaseModuleRenderLibraryLayoutController extends RESTController {
    /**
     * Return unordered list of recent posts.
     */
    public static function index( WP_REST_Request $request ): WP_REST_Response {
        $id = $request->get_param( 'id' );
        
        $response = [
            'html' => render_library_layout($id)
        ];
        return self::response_success( $response );
    }

    /**
     * Index action arguments.
     * Endpoint arguments as used in `register_rest_route()`.
     */
    public static function index_args(): array {
        return [

            
            'id' => [
                'type'              => 'number',
                'required'          => true,
                'sanitize_callback' => function( $number ) {

                    return intval( $number );
                },
                'validate_callback' => 'esc_html',
            ],
        ];
    }

    /**
     * Index action permission.
     * Endpoint permission callback as used in `register_rest_route()`.
     */
    public static function index_permission(): bool {
        return UserRole::can_current_user_use_visual_builder();
    }
}


/**
 * Register "Simple Quick Module"'s REST API Route and endpoint.
 */
add_action(
    'init',
    function() {
        $route = new RESTRoute( 'dipi/v1' );

        $route->prefix( '/module-data' )->group(
            function( $router ) {
                $router->get( '/base/render_library_layout', BaseModuleRenderLibraryLayoutController::class );
            }
        );
    }
);