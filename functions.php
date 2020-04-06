<?php

    function load_css()
    {
        wp_register_style
        ( 
            'foundation', 
            get_template_directory_uri() . '/assets/css/foundation.css', 
            array(), 
            'v1', 
            'all' 
        );
        wp_enqueue_style
        ( 
            'foundation' 
        );
    }
    add_action
    ( 
        'wp_enqueue_scripts', 
        'load_css' 
    );

?>