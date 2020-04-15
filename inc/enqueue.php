<?php
    /**
        @package enchanté
        * * * * * * * * * * * * * * * * *
        * * * * * * * * * * * * * * * * *
        *      ADMIN ENQUEUE FUNCTIONS
        * * * * * * * * * * * * * * * * *
        * * * * * * * * * * * * * * * * *
    */

    function enchanté_load_admin_scripts( $hook ) {
        if( 'toplevel_page_une_enchanté' != $hook ) {
            return;
        }
        else {
            wp_register_style( 'enchanté_admin', get_template_directory_uri() . '/assets/css/enchanté-admin.css', array(), '1.0.0', 'all' );
            wp_enqueue_style( 'enchanté_admin' );
        }
        
    }
    add_action( 'admin_enqueue_scripts', 'enchanté_load_admin_scripts' );