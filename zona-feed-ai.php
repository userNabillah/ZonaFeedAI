<?php
/**
 * Plugin Name: Zona Feed AI
 * Plugin URI: https://zonamalang.com/zona-feed-ai
 * Description: Plugin untuk mengimpor dan mengoptimalkan artikel dari RSS Feed dengan bantuan AI
 * Version: 1.0.0
 * Author: Your Name
 * Author URI: https://zonamalang.com
 * License: GPL-2.0+
 * License URI: http://www.gnu.org/licenses/gpl-2.0.txt
 * Text Domain: zona-feed-ai
 * Domain Path: /languages
 */

// If this file is called directly, abort.
if (!defined('WPINC')) {
    die;
}

// Plugin version
define('ZONA_FEED_AI_VERSION', '1.0.0');
define('ZONA_FEED_AI_PATH', plugin_dir_path(__FILE__));
define('ZONA_FEED_AI_URL', plugin_dir_url(__FILE__));

// Autoloader
require_once ZONA_FEED_AI_PATH . 'vendor/autoload.php';

// Activation
register_activation_hook(__FILE__, array('Zona_Feed_AI\Includes\Activator', 'activate'));

// Deactivation
register_deactivation_hook(__FILE__, array('Zona_Feed_AI\Includes\Deactivator', 'deactivate'));

// Initialize plugin
function run_zona_feed_ai() {
    $plugin = new Zona_Feed_AI\Includes\Core();
    $plugin->run();
}
run_zona_feed_ai();
