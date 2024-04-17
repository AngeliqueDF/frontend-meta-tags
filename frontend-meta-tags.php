<?php
/*
* Plugin Name: Custom frontend meta tags
* Description:  Display custom meta tags on the frontend of the website.
* Version:      1.0
* Author:       Angélique Faye
* Author URI:   https://github.com/angeliquedf
* License:      GPL2
* License URI:  https://www.gnu.org/licenses/gpl-2.0.html
 */


add_action('wp_head', 'frontend_meta_tags_add_custom_meta_tags');
/**
 * Insert custom meta tags (on frontend pages only).
 */
function frontend_meta_tags_add_custom_meta_tags(){
if(!is_admin()){
   echo "<meta name=\"application-name\" content=\"ACME SOFTWARE ™ \">";
   echo "<meta name=\"author\" content=\"KRITEK, s.r.o. - https://kritek.eu - info@kritek.eu\">.";
}
}