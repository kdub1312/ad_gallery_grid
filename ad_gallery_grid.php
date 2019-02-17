<?php
   /*
   Plugin Name: AD Gallery Grid
   Plugin URI: http://foodcoach.me
   description: a plugin to create a grid style gallery where anchor links can be applied
   Version: 1.0
   Author: Kevin Wagner
   Author URI: TBD
   License: GPL2
   */
function ad_gal_grid_enqueue_script() {   
        wp_register_style( 'ad_gal_grid_styles', plugin_dir_url( __FILE__ ) . 'css/styles.css', array( 'bootstrap-css' ), '1.0' );
        wp_enqueue_style( 'ad_gal_grid_styles' );
}
add_action('wp_enqueue_scripts', 'ad_gal_grid_enqueue_script');

function ad_gallery_grid($atts=[], $content=null) {
    
    $content = "<div class='gal-grid'>" . $content . "</div>";
    
    $content = do_shortcode($content);
    
    return $content;
    
}
add_shortcode('adgalgrid', 'ad_gallery_grid');
?>