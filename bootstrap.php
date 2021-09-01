<?php
/*
Plugin Name: theNewsinator Grab From MSN
Plugin URI: https://blog.buttered.app
Description: This plugin is homegrown and it populates a blog with MSN news articles.
Version: 1.0
Author: Justin Lawrence
Author URI: https://blog.buttered.app
License: GPLv2 or later
Text Domain: theNewsinator
 */


define('BASE_PATH', plugin_dir_path(__FILE__));
define('BASE_URL', plugin_dir_url(__FILE__));
// include the Composer autoload file
require BASE_PATH . 'vendor/autoload.php';
// include the classes
use Plop\Plopinator\Shortcodes;
use Plop\Plopinator\Plop;

// // instantiate classes
$shortcode = new Shortcodes\Plopper();
$plugin    = new Plop();
// // register all shortcodes
$plugin->addShortcode($shortcode);
// // initialise the plugin
$plugin->init();
