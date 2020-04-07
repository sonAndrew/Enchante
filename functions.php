<?php
    /* * * Function to load Zurb Foundation CSS Stylesheet * * */
    function load_css()
    {
        /* * *
         * Register a CSS stylesheet
         * Using get_template_directory_uri() function to retrieve theme directory uri
         * Loads Zurb Foundation CSS into project from specified (string) Template directory URI
        *  * */
        wp_register_style
        ( 
            'foundation', 
            get_template_directory_uri() . '/assets/css/foundation.css', 
            array(), 
            false, 
            'all' 
        );
        /* * * 
         * Enqueue a CSS stylesheet
         * In this case it's the foundation.css file we registered above
        * * */
        wp_enqueue_style
        ( 
            'foundation' 
        );
    }
    /* * * 
     * Hooks a function on to a specific action
     * In this case its's load_css
    * * */
    add_action
    ( 
        'wp_enqueue_scripts', 
        'load_css' 
    );

    /* * * Function to load Zurb Foundation JS * * */
    function load_js()
    {
        /* * * 
         * Enqueue a new script 
         * In this case it's jquery
        * * */
        wp_enqueue_script('jquery');
        /* * *
         * Register a script 
         * Using get_template_directory_uri() function to retrieve theme directory uri
         * Loads Zurb Foundation JS into project from specified (string) Template directory URI
        *  * */
        wp_register_script
        ( 
            'foundation', 
            get_template_directory_uri() . '/assets/js/foundation.js', 
            array(),
            false, 
            true 
        );
        /* * * 
         * Enqueue a new script 
         * In this case it's the foundation.js file we registered above
        * * */
        wp_enqueue_script
        ( 
            'foundation' 
        );
    }
    /* * * 
     * Hooks a function on to a specific action
     * In this case its's load_js
    * * */
    add_action
    ( 
        'wp_enqueue_scripts', 
        'load_js' 
    );

?>