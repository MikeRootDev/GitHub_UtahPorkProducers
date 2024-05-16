<?php
/*
Plugin Name: Web.com - Plugin/Theme Auto Updater
Description: Ensure plugins and themes are always up-to-date.
Version: 1.0.0
Author: Web.com
Author URI: http://web.com
*/

add_filter('auto_update_plugin','__return_true');
add_filter('auto_update_theme', '__return_true');
