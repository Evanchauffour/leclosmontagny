<?php

    // Add theme support
    add_theme_support('menus');
    register_nav_menu('main_menu', 'Menu principal');


    // Load CSS
    if(!is_admin()) {
        wp_enqueue_style( 'app', $src = get_template_directory_uri().'/assets/css/app.css', $deps = array(),  1,  'all' );
    } 

?>