<?php
/*
 * Plugin Name: Print Menu
 * Plugin URI:
 * Description: Call in any menu anywhere you want it
 * Author: Lance Jernigan
 * Version: 1.0
 * Author URI: http://LanceJernigan.com
 */

function PrintMenu($atts, $content = null) {
    extract(shortcode_atts(array( 'name' => null, ), $atts));
    return wp_nav_menu( array( 'menu' => $name, 'echo' => false ) );
}
add_shortcode('menu', 'PrintMenu');

?>