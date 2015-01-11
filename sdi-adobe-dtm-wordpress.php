<?php

/*
Plugin Name: Adobe DTM for Wordpress
Version: 1.0
Plugin URI: http://www.searchdiscovery.com/adobe-dtm-for-wordpress/
Description: The first Adobe Dynamic Tag Management (DTM) plugin for WordPress.
Author: Adam Haining
Author URI: http://www.searchdiscovery.com
*/

define('SDIDTM_VERSION', '1.0');
define('SDIDTM_PATH', plugin_dir_path(__FILE__));

$adobe_dtm_plugin_url = plugin_dir_url(__FILE__);
$adobe_dtm_plugin_basename = plugin_basename(__FILE__);
require_once (SDIDTM_PATH . "/common/readoptions.php");

function sdidtm_init() {
    
    // load_plugin_textdomain( SDIDTM_TEXTDOMAIN, false, dirname( plugin_basename( __FILE__ ) ) . '/languages' );
    if (is_admin()) {
        require_once (SDIDTM_PATH . "/admin/admin.php");
    } else {
        require_once (SDIDTM_PATH . "/public/frontend.php");
    }
}
add_action('plugins_loaded', 'sdidtm_init');
