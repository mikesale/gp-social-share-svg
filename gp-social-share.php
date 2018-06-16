<?php
/*
Plugin Name: GP Social Share
Plugin URI: https://github.com/WestCoastDigital/gp-social-share
Description: Add social share icons to single posts within GeneratePress
Version: 1.0.4
Author: Jon Mather
Author URI: https://github.com/WestCoastDigital/
Text Domain: gp-social
Domain Path: /languages
*/

require_once( plugin_dir_path( __FILE__ ) . 'inc/metabox/meta-box/meta-box.php' );
require_once( plugin_dir_path( __FILE__ ) . 'inc/metabox/meta-box-group/meta-box-group.php' );
require_once( plugin_dir_path( __FILE__ ) . 'inc/metabox/meta-box-tabs/meta-box-tabs.php' );
require_once( plugin_dir_path( __FILE__ ) . 'inc/metabox/mb-settings-page/mb-settings-page.php' );
require_once( plugin_dir_path( __FILE__ ) . 'inc/gp-social-settings.php' );
require_once( plugin_dir_path( __FILE__ ) . 'inc/css/gp-social-share-css.php' );

$settings = get_option('gp_social_settings');
$gp_social_hook = $settings['gp_social_hook'];
if( $gp_social_hook ) {
    $social_hook = $gp_social_hook;
} else {
    $social_hook = 'generate_after_content';
}
add_action( $social_hook, 'add_social_icons' );
