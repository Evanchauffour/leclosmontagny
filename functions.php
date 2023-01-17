<?php

    // Load CSS
    if(!is_admin()) {
        wp_enqueue_style( 'app', $src = get_template_directory_uri().'/assets/css/app.css', $deps = array(),  1,  'all' );
    }

    function redirect_404() {
        if ( is_404() ) {
            wp_redirect( home_url( '404' ) );
            exit;
        }
    }
    add_action( 'template_redirect', 'redirect_404' );
    

?>