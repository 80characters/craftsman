<?php
/*
Plugin Name: Craftsman
Plugin URI: http://80chars.com/plugins/reloaded
Description: Additional energy for a wordpress theme. Which created by love and coffee, for me and for you.
Version: 19.07.06
Author: 80characters
Author URI: http://80chars.com
License: GNU General Public License v3 or later
License URI: http://www.gnu.org/licenses/gpl-3.0.html
Requires at least: 5.0
Tested up to: 5.2.2
Text Domain: craftsman
Domain Path: /languages/
*/

global $craftsman, $jirvas;

define('CRAFTSMAN_DIR_URL', plugin_dir_url(__FILE__));
define('CRAFTSMAN_DIR_PATH', plugin_dir_path(__FILE__));

$vendor = CRAFTSMAN_DIR_PATH . 'vendor/autoload.php';


if (file_exists($vendor)) {
	require_once($vendor);

	$jirvas = \Craftsman\Jirvas::getInstance();
	$craftsman = \Craftsman\Craftsman::getInstance();
}
