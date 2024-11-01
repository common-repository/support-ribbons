<?php
/*
Plugin Name: WordPress Support Ribbons
Plugin URI: http://wordpress.org/extend/plugins/simplegamanager/
Description: Enables your choice of  support ribbons on your WordPress Site.
Version: 1.0.1
Author: Justin Rains
Author URI: http://portalplanet.net/support-ribbon-wordpress-plugin/
*/

if (!defined('WP_CONTENT_URL'))
      define('WP_CONTENT_URL', get_option('siteurl').'/wp-content');
if (!defined('WP_CONTENT_DIR'))
      define('WP_CONTENT_DIR', ABSPATH.'wp-content');
if (!defined('WP_PLUGIN_URL'))
      define('WP_PLUGIN_URL', WP_CONTENT_URL.'/plugins');
if (!defined('WP_PLUGIN_DIR'))
      define('WP_PLUGIN_DIR', WP_CONTENT_DIR.'/plugins');

function activate_wp_ribbons() {
  add_option('ribbonid', 'sprite-16');
}

function deactivate_wp_ribbons() {
  delete_option('ribbonid');
}

function admin_init_ribbon_manager() {
  register_setting('wp_ribbon', 'ribbonid');
}

function admin_menu_ribbon_manager() {
  add_options_page(
          'Ribbon Manager', 'Ribbon Manager', 
          'manage_options', 'wp_ribbon', 'options_page_wp_ribbons'
  );
}

/**
 * Register style sheet and JS.
 */
add_action( 'admin_enqueue_scripts', 'admin_register_ribbon_styles' );
function admin_register_ribbon_styles() {
        wp_register_style( 'wp-ribbon', plugins_url( '/css/ribbon.css', __FILE__ ), array(), 'f20160617', 'all' );
        wp_enqueue_style( 'wp-ribbon' );
        
        wp_enqueue_script('ribbon', plugins_url( '/js/ribbon.js', __FILE__), array(), '1.0.1', true );
}

add_action( 'wp_enqueue_scripts', 'wp_register_ribbon_styles' );
function wp_register_ribbon_styles() {
        wp_register_style( 'wp-ribbon', plugins_url( '/css/ribbon.css', __FILE__ ), array(), 'f20160617', 'all' );
        wp_enqueue_style( 'wp-ribbon' );
}

function options_page_wp_ribbons() {
  include(WP_PLUGIN_DIR.'/support-ribbons/options.php');  
}

add_action('wp_footer', 'ribbon_on_site');
function ribbon_on_site() {
  $ribbon_id = get_option('ribbonid');
?>
<span class="onsite rclick rsprite" id="<?php echo $ribbon_id;?>">1</span>
<?php
}

register_activation_hook(__FILE__, 'activate_wp_ribbons');
register_deactivation_hook(__FILE__, 'deactivate_wp_ribbons');

if (is_admin()) {
  add_action('admin_init', 'admin_init_ribbon_manager');
  add_action('admin_menu', 'admin_menu_ribbon_manager');
}
?>
