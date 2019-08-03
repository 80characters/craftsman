<?php
/**
 * Additional energy for a WordPress theme.
 * Which created by love and coffee, for me and for you.
 * php version 5.6
 *
 * @category Root
 * @package  Craftsman
 * @author   80characters <80chars@gmail.com>
 * @license  http://www.gnu.org/licenses/gpl-3.0.html GPL-3
 * @link     http://80chars.com
 * @since    19.07.06
 *
 * Description: Additional energy for a WordPress theme. Which created by love and coffee, for me and for you.
 * Plugin Name: Craftsman
 * Plugin URI: http://80chars.com/plugins/reloaded
 * Version: 19.07.06
 * Author: 80characters
 * Author URI: http://80chars.com
 * License: GNU General Public License v3 or later
 * License URI: http://www.gnu.org/licenses/gpl-3.0.html
 * Requires at least: 5.0
 * Tested up to: 5.2.2
 * Text Domain: craftsman
 * Domain Path: /languages/
 */

global $craftsman, $jirvas;

define('CRAFTSMAN_DIR_URL', plugin_dir_url(__FILE__));
define('CRAFTSMAN_DIR_PATH', plugin_dir_path(__FILE__));

$vendor = CRAFTSMAN_DIR_PATH . 'vendor/autoload.php';

if (file_exists($vendor)) {
    include_once $vendor;

    $jirvas = \Craftsman\Jirvas::getInstance();
    $craftsman = \Craftsman\Craftsman::getInstance();
}
