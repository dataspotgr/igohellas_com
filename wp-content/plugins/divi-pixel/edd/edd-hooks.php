<?php 

add_action( 'init', function(){
    if (!class_exists('EDD_SL_Plugin_Updater')) {
        require_once plugin_dir_path(__FILE__) . 'EDD_SL_Plugin_Updater.php';
    }

    //FIXME: use another location to require those files in Sensei plugins
    require_once plugin_dir_path(constant('DIVI_PIXEL_EDD_PLUGIN_FILE')) . 'utils/logging/logging.php';

    //FIXME: use another location to require those files in Sensei plugins
    require_once plugin_dir_path(constant('DIVI_PIXEL_EDD_PLUGIN_FILE')) . 'utils/settings/settings.php';

    new EDD_SL_Plugin_Updater('https://www.divi-pixel.com', constant('DIVI_PIXEL_EDD_PLUGIN_FILE'), [
        'version' => '2.34.1',
        'item_id' => '32718',
        'author' => 'Divi Pixel',
        'url' => home_url(),
        'license' => trim(get_option('dipi_license')), //dipi_license or plugin based e. g. ds_fancy_text_license
        'beta' => get_option('dipi_enable_beta_program'), //dipi_beta_program_enabled or plugin based e. g. ds_fancy_text_beta_program_enabled
    ]);

});