<?php
/*
Plugin Name: NewsPlop NewsPlopper
Plugin URI: https://buttered.app
Description: This plugin is homegrown and it populates a blog with MSN news articles.
Version: 1.0
Author: Justin Lawrence
Author URI: https://buttered.app
License: GPLv2 or later
Text Domain: NewsPlop
 */


define('BASE_PATH', plugin_dir_path(__FILE__));
define('BASE_URL', plugin_dir_url(__FILE__));
// include the Composer autoload file
require BASE_PATH . 'vendor/autoload.php';
// include the classes
use Plop\Plopinator\Shortcodes;
use Plop\Plopinator\Plop;

// // instantiate classes
$shortcode1 = new Shortcodes\Plopper();
$plugin1    = new Plop();
// // register all shortcodes
$plugin1->addShortcode($shortcode1);
// // initialise the plugin
$plugin1->init();

$shortcode2 	= new Shortcodes\RainbowPlop();

$plugin2 	= new Plop();

$plugin2->addShortcode($shortcode2);

$plugin2->init();

