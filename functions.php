<?php

if ( !is_admin() ) { 
    wp_register_style(
        'children-of-kobol',
        get_bloginfo( 'stylesheet_directory' ) . '/css/theme.css',
        false,
        0.1
    );
    wp_enqueue_style( 'children-of-kobol' );
}
?>