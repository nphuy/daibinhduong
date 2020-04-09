<?php
function hnp_plugin_activation() {
    $plugins = array(
        array(
            'name' => 'Redux Framework',
            'slug' => 'redux-framework',
            'required' => true
        )
    );
    $configs = array(
        'menu' => 'tp_plugin_install',
        'has_notice' => true,
        'dismissable' => false,
        'is_automatic' => true
    );
    tgmpa( $plugins, $configs );
 
}
add_action('tgmpa_register', 'hnp_plugin_activation');
?>