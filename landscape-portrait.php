<?php
/*
Plugin Name: Landscape or portrait?
Description: Simply detecting if image is landscape or portrait on admin to improve manual sorting experience.
Version:     0.4.2
Author:      Paweł Bystrzan
License:     GPL2
License URI: https://www.gnu.org/licenses/gpl-2.0.html
Text Domain: uxbox
Domain Path: /languages

This still needs work to be multilingual.
*/

add_action('admin_head', 'my_custom_fonts');

function my_custom_fonts() {
  echo '<style>
    .wp-core-ui .attachment-preview.landscape .thumbnail:after {
    	content: 'landscape';
    	background: rgba(255, 255, 255, 0.7);
    	color: black;
    	font-weight: bold;
    	position: absolute;
    	bottom: 0;
    	top: auto;
    }

    .wp-core-ui .attachment-preview.portrait .thumbnail:after {
    	content: 'portrait';
    	background: rgb(0, 255, 17);
    	color: white;
    	font-weight: bold;
    	position: absolute;
    	bottom: 0;
    	top: auto;
    }
  </style>';
}
