<?php
    /**
        @package enchanté
        * * * * * * * * * * * * * * * * *
        * * * * * * * * * * * * * * * * *
        *      ADMIN PAGE
        * * * * * * * * * * * * * * * * *
        * * * * * * * * * * * * * * * * *
    */
    /**
     * * * * * * * * * * * * * * * * *
     * * * * * * * * * * * * * * * * *
     *          ADDED PAGES
     * * * * * * * * * * * * * * * * *
     * * * * * * * * * * * * * * * * *
    */
    function enchanté_add_admin_page() {
        /** Generate Enchanté Admin Page */
        add_menu_page( 'Enchanté Theme Options', 'Enchanté', 'manage_options', 'une_enchanté', 'enchanté_theme_create_page', '', 110 );

        /** Generate Enchanté Admin Sub Pages*/

        add_submenu_page( 'une_enchanté', 'Enchanté Theme Options', 'General', 'manage_options', 'une_enchanté', 'enchanté_theme_create_page' ); /** General */

        add_submenu_page( 'une_enchanté', 'Enchanté CSS Options', 'Custom CSS', 'manage_options', 'une_enchanté_css', 'enchanté_theme_settings_page' ); /** Custom CSS */

        /** Activate Custom Settings */
        add_action( 'admin_init', 'enchanté_custom_settings' );
    }
    add_action( 'admin_menu', 'enchanté_add_admin_page' );
    /* * * * * * * * * * * * * * * * * * * * 
     *           SUB PAGES 
    * * * * * * * * * * * * * * * * * * * */
    function enchanté_theme_create_page() {
        /** Generation of our admin page */
        require_once( get_template_directory() . '/inc/templates/enchanté-admin.php' );
    }
    function enchanté_theme_settings_page() {
        /** Generation of our Custom CSS page */
        echo '<h1>Enchanté Custom CSS</h1>';
    }
    /**
     * * * * * * * * * * * * * * * * *
     * * * * * * * * * * * * * * * * *
     *   ENCHANTE CUSTOME SETTINGS
     * * * * * * * * * * * * * * * * *
     * * * * * * * * * * * * * * * * *
    */
    function enchanté_custom_settings(){ 
        /**
         * * * * * * * * * * * * * * * * *
         * * * * * * * * * * * * * * * * *
         *      SETTINGS REGISTRATION
         * * * * * * * * * * * * * * * * *
         * * * * * * * * * * * * * * * * *
        */
        /** REGISTER SETTING - FULL NAME */
        register_setting( 'enchanté_settings_group', 'first_name' );
        register_setting( 'enchanté_settings_group', 'last_name' );

        /** REGISTER SETTING - SOCIAL NETWORKS */
        register_setting( 'enchanté_settings_group', 'facebook_handler' );
        register_setting( 'enchanté_settings_group', 'twitter_handler' );
        register_setting( 'enchanté_settings_group', 'gplus_handler' );

        /**
         * * * * * * * * * * * * * * * * *
         * * * * * * * * * * * * * * * * *
         *      SETTINGS ADDED
         * * * * * * * * * * * * * * * * *
         * * * * * * * * * * * * * * * * *
        */
        add_settings_section( 'enchanté_sidebar_options', 'Sidebar Options', 'enchanté_sidebar_options', 'une_enchanté' );
        /** Settings field for Full Name */
        add_settings_field( 'sidebar-name', 'Full Name', 'enchanté_sidebar_name', 'une_enchanté', 'enchanté_sidebar_options' );


        /** ADD SETTINGS FIELD - Facebook */
        add_settings_field( 'sidebar-facebook', 'Facebook handler', 'enchanté_sidebar_facebook', 'une_enchanté', 'enchanté_sidebar_options' );
        /** ADD SETTINGS FIELD - Twitter */
        add_settings_field( 'sidebar-twitter', 'Twitter handler', 'enchanté_sidebar_twitter', 'une_enchanté', 'enchanté_sidebar_options' );
        /** ADD SETTINGS FIELD - Tumblr */
        add_settings_field( 'sidebar-tumblr', 'Tumblr handler', 'enchanté_sidebar_tumblr', 'une_enchanté', 'enchanté_sidebar_options' );
        /** ADD SETTINGS FIELD - Google Plus */
        add_settings_field( 'sidebar-gplus', 'Google+ handler', 'enchanté_sidebar_gplus', 'une_enchanté', 'enchanté_sidebar_options' );
    }
    /**
     * * * * * * * * * * * * * * * * *
     * * * * * * * * * * * * * * * * *
     *      SETTINGS FUNCTIONS
     * * * * * * * * * * * * * * * * *
     * * * * * * * * * * * * * * * * *
    */ 
    function enchanté_sidebar_options() {
        /** Generation of our Sidebar */
        echo '<h1>Customize Your Sidebar Information</h1>';
    }
    function enchanté_sidebar_name() {
        $firstName = esc_attr( get_option( 'first_name' ) );
        $lastName = esc_attr( get_option( 'last_name' ) );
        echo '<input type="text" name="first_name" value="'.$firstName.'" placeholder="First Name" /> <input type="text" name="last_name" value="'.$lastName.'" placeholder="Last Name" />';
    }
    /* * * * * * * * * * * * * * * * * * * * 
     *          SOCIAL NETWORKS 
    * * * * * * * * * * * * * * * * * * * */
    function enchanté_sidebar_facebook() {
        $facebook = esc_attr( get_option( 'facebook_handler' ) );
        echo '<input type="text" name="facebook_handler" value="'.$facebook.'" placeholder="Facebook handler" />';
    }
    function enchanté_sidebar_twitter() {
        $twitter = esc_attr( get_option( 'twitter_handler' ) );
        echo '<input type="text" name="twitter_handler" value="'.$twitter.'" placeholder="Twitter handler" />';
    }
    function enchanté_sidebar_tumblr() {
        $tumblr = esc_attr( get_option( 'tumblr_handler' ) );
        echo '<input type="text" name="tumblr_handler" value="'.$tumblr.'" placeholder="Tumblr handler" />';
    }
    function enchanté_sidebar_gplus() {
        $gplus = esc_attr( get_option( 'gplus_handler' ) );
        echo '<input type="text" name="gplus_handler" value="'.$gplus.'" placeholder="Google+ handler" />';
    }