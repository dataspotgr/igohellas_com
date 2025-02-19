<?php 
namespace DIPI\Traits;
if ( ! defined( 'ABSPATH' ) ) {
    die( 'Direct access forbidden.' );
}

trait BaseRenderTrait {

    static function getPropValue($attrs, $prop) {
        $attr = $attrs[$prop] ?? null;
        if(!$attr) return null;
        return is_array($attr) && array_key_exists('innerContent', $attr) ? $attr['innerContent']['desktop']['value'] : (isset($attr['desktop'])? $attr['desktop']['value']: null);
    }
    static function get_divi_layouts() {
        global $wpdb;
            
        $layouts = $wpdb->get_results($wpdb->prepare(
            "SELECT ID,post_title FROM $wpdb->posts
            WHERE post_type=%s",
            sanitize_text_field('et_pb_layout')
        ));
        
        $layouts_list = [
            '0' => __('Select A Layout', 'dipi-divi-pixel')
        ];
        
        if ( count($layouts) ) {
            foreach ( $layouts as $layout ){
                $layouts_list[$layout->ID] = ['label' => $layout->post_title];
            }
        }
        
        return $layouts_list;
    }
    static function render_library_layout($layoutId) {
        return "<div>".get_the_title($layoutId)."<br/>*Divi 5 still not supporting to render divi library.*</div>";
        //return do_blocks("<!-- wp:divi/global-layout {'globalModule':'$layoutId'} /-->");
        //return do_shortcode('[et_pb_section global_module="' . $layoutId . '"][/et_pb_section]');
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
}
