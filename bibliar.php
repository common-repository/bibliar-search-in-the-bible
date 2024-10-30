<?php 
/*
Plugin Name: Bibliar
Plugin URI: http://bibliar.com/article/bibliar-widget
Description: Comfortable widget that allow to visits to searching in the Bible.
Author: Schubert Tonarelli
Version: 1.0.001
Author URI: http://bibliar.com/contact
License: GPL2
*/

function display_bibliar()
{
        return '<div id="bibliar" lang="en" font-size="12"></div><script type="text/javascript" src="http://bit.ly/bibliar1"></script>';
}

add_shortcode('bibliar', 'display_bibliar');

// use shortcodes on Sidebar Widgets
add_filter('widget_text', 'do_shortcode');

