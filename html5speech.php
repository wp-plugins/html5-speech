<?php
/*
Plugin Name: HTML5 Speech
Plugin URI: http://URI_Of_Page_Describing_Plugin_and_Updates
Description: Adds the Chrome HTML 5 speech attribute to all textboxes
Version: 1.0
Author: Blake Helms
Author URI: http://blakehelms.net
License: GPL2
*/

/*  Copyright 2011  Blake Helms  (email : blake@blakehelms.net)

    This program is free software; you can redistribute it and/or modify
    it under the terms of the GNU General Public License, version 2, as 
    published by the Free Software Foundation.

    This program is distributed in the hope that it will be useful,
    but WITHOUT ANY WARRANTY; without even the implied warranty of
    MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
    GNU General Public License for more details.

    You should have received a copy of the GNU General Public License
    along with this program; if not, write to the Free Software
    Foundation, Inc., 51 Franklin St, Fifth Floor, Boston, MA  02110-1301  USA
*/

function add_html_speech(){
	wp_enqueue_script('jquery');
	wp_register_script('html5speech', WP_PLUGIN_URL . '/html5-speech/script.js');
  	wp_enqueue_script("html5speech") ;
}

add_action('admin_head', add_html_speech());
add_action('wp_head', add_html_speech());


?>
