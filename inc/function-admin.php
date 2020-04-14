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
        register_setting( 'enchanté_settings_group', 'youtube_handler' );
        register_setting( 'enchanté_settings_group', 'instagram_handler' );
        register_setting( 'enchanté_settings_group', 'twitter_handler' );
        register_setting( 'enchanté_settings_group', 'whatsapp_handler' );
        register_setting( 'enchanté_settings_group', 'pinterest_handler' );
        register_setting( 'enchanté_settings_group', 'reddit_handler' );
        register_setting( 'enchanté_settings_group', 'tumblr_handler' );
        register_setting( 'enchanté_settings_group', 'linkedin_handler' );
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
        /** ADD SETTINGS FIELD - Youtube */
        add_settings_field( 'sidebar-youtube', 'Youtube handler', 'enchanté_sidebar_youtube', 'une_enchanté', 'enchanté_sidebar_options' );
        /** ADD SETTINGS FIELD - Instagram */
        add_settings_field( 'sidebar-instagram', 'Instagram handler', 'enchanté_sidebar_instagram', 'une_enchanté', 'enchanté_sidebar_options' );
        /** ADD SETTINGS FIELD - Twitter */
        add_settings_field( 'sidebar-twitter', 'Twitter handler', 'enchanté_sidebar_twitter', 'une_enchanté', 'enchanté_sidebar_options' );
        /** ADD SETTINGS FIELD - WhatsApp */
        add_settings_field( 'sidebar-whatsapp', 'WhatsApp handler', 'enchanté_sidebar_whatsapp', 'une_enchanté', 'enchanté_sidebar_options' );
        /** ADD SETTINGS FIELD - Pinterest */
        add_settings_field( 'sidebar-pinterest', 'Pinterest handler', 'enchanté_sidebar_pinterest', 'une_enchanté', 'enchanté_sidebar_options' );
        /** ADD SETTINGS FIELD - Reddit */
        add_settings_field( 'sidebar-reddit', 'Reddit handler', 'enchanté_sidebar_reddit', 'une_enchanté', 'enchanté_sidebar_options' );
        /** ADD SETTINGS FIELD - Tumblr */
        add_settings_field( 'sidebar-tumblr', 'Tumblr handler', 'enchanté_sidebar_tumblr', 'une_enchanté', 'enchanté_sidebar_options' );
        /** ADD SETTINGS FIELD - LinkedIn */
        add_settings_field( 'sidebar-linkedin', 'LinkedIn handler', 'enchanté_sidebar_linkedin', 'une_enchanté', 'enchanté_sidebar_options' );
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
    function enchanté_sidebar_youtube() {
        $youtube = esc_attr( get_option( 'youtube_handler' ) );
        echo '<input type="text" name="youtube_handler" value="'.$youtube.'" placeholder="Youtube handler" />';
    }
    function enchanté_sidebar_instagram() {
        $instagram = esc_attr( get_option( 'instagram_handler' ) );
        echo '<input type="text" name="instagram_handler" value="'.$instagram.'" placeholder="Instagram handler" />';
    }
    function enchanté_sidebar_twitter() {
        $twitter = esc_attr( get_option( 'twitter_handler' ) );
        echo '<input type="text" name="twitter_handler" value="'.$twitter.'" placeholder="Twitter handler" />';
    }
    function enchanté_sidebar_whatsapp() {
        $whatsapp = esc_attr( get_option( 'whatsapp_handler' ) );
        echo '<input type="text" name="whatsapp_handler" value="'.$whatsapp.'" placeholder="WhatsApp handler" />';
    }
    function enchanté_sidebar_pinterest() {
        $pinterest = esc_attr( get_option( 'pinterest_handler' ) );
        echo '<input type="text" name="pinterest_handler" value="'.$pinterest.'" placeholder="Pinterest handler" />';
    }
    function enchanté_sidebar_reddit() {
        $reddit = esc_attr( get_option( 'reddit_handler' ) );
        echo '<input type="text" name="reddit_handler" value="'.$reddit.'" placeholder="Reddit handler" />';
    }
    function enchanté_sidebar_tumblr() {
        $tumblr = esc_attr( get_option( 'tumblr_handler' ) );
        echo '<input type="text" name="tumblr_handler" value="'.$tumblr.'" placeholder="Tumblr handler" />';
    }
    function enchanté_sidebar_linkedin() {
        $linkedin = esc_attr( get_option( 'linkedin_handler' ) );
        echo '<input type="text" name="linkedin_handler" value="'.$linkedin.'" placeholder="LinkedIn handler" />';
    }
    function enchanté_sidebar_gplus() {
        $gplus = esc_attr( get_option( 'gplus_handler' ) );
        echo '<input type="text" name="gplus_handler" value="'.$gplus.'" placeholder="Google+ handler" />';
    }