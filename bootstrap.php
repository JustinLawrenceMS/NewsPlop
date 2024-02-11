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
$plopper = new Shortcodes\Plopper();
$swabber = new Shortcodes\Swabber();
$newsPlop = new Plop();
// // register all shortcodes
$newsPlop->addShortcode($plopper);
$newsPlop->addShortcode($swabber);

$newsPlop->init();
?>