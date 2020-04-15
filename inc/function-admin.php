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
        /** REGISTER SETTING - USER INFORMATION */
        register_setting( 'enchanté_settings_group', 'first_name' );
        register_setting( 'enchanté_settings_group', 'last_name' );
        register_setting( 'enchanté_settings_group', 'user_description' );
        register_setting( 'enchanté_settings_group', 'user_job_title' );
        register_setting( 'enchanté_settings_group', 'user_location' );

        /** REGISTER SETTING - SOCIAL NETWORKS */
        register_setting( 'enchanté_settings_group', 'facebook_handler' );
        register_setting( 'enchanté_settings_group', 'youtube_handler' );
        register_setting( 'enchanté_settings_group', 'instagram_handler', 'enchanté_sanitize_social_handler' );
        register_setting( 'enchanté_settings_group', 'twitter_handler', 'enchanté_sanitize_social_handler' );
        register_setting( 'enchanté_settings_group', 'whatsapp_handler' );

        /**
         * * * * * * * * * * * * * * * * *
         * * * * * * * * * * * * * * * * *
         *      SETTINGS ADDED
         * * * * * * * * * * * * * * * * *
         * * * * * * * * * * * * * * * * *
        */
        /** ADD SETTINGS FIELDS - USER INFORMATION */
        add_settings_section( 'enchanté_sidebar_options', 'Sidebar Options', 'enchanté_sidebar_options', 'une_enchanté' );
        /** Settings field for Full Name */
        add_settings_field( 'sidebar_name', 'Full Name', 'enchanté_sidebar_name', 'une_enchanté', 'enchanté_sidebar_options' );
        /** Settings field for User Description */
        add_settings_field( 'sidebar_description', 'User Description', 'enchanté_sidebar_description', 'une_enchanté', 'enchanté_sidebar_options' );
        /** Settings field for User Job Title */
        add_settings_field( 'sidebar_job', 'User Job Title', 'enchanté_sidebar_job', 'une_enchanté', 'enchanté_sidebar_options' );
        /** Settings field for User Location */
        add_settings_field( 'sidebar_location', 'User Location', 'enchanté_sidebar_location', 'une_enchanté', 'enchanté_sidebar_options' );


        /** ADD SETTINGS FIELD - Facebook */
        add_settings_field( 'sidebar_facebook', 'Facebook handler', 'enchanté_sidebar_facebook', 'une_enchanté', 'enchanté_sidebar_options' );
        /** ADD SETTINGS FIELD - Youtube */
        add_settings_field( 'sidebar_youtube', 'Youtube handler', 'enchanté_sidebar_youtube', 'une_enchanté', 'enchanté_sidebar_options' );
        /** ADD SETTINGS FIELD - Instagram */
        add_settings_field( 'sidebar_instagram', 'Instagram handler', 'enchanté_sidebar_instagram', 'une_enchanté', 'enchanté_sidebar_options' );
        /** ADD SETTINGS FIELD - Twitter */
        add_settings_field( 'sidebar_twitter', 'Twitter handler', 'enchanté_sidebar_twitter', 'une_enchanté', 'enchanté_sidebar_options' );
        /** ADD SETTINGS FIELD - WhatsApp */
        add_settings_field( 'sidebar_whatsapp', 'WhatsApp handler', 'enchanté_sidebar_whatsapp', 'une_enchanté', 'enchanté_sidebar_options' );
        
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
    /* * * * * * * * * * * * * * * * * * * * 
     *          USER INFORMATION 
    * * * * * * * * * * * * * * * * * * * */
    function enchanté_sidebar_name() {
        $firstName = esc_attr( get_option( 'first_name' ) );
        $lastName = esc_attr( get_option( 'last_name' ) );
        echo '<input type="text" name="first_name" value="'.$firstName.'" placeholder="First Name" /></br></br><input type="text" name="last_name" value="'.$lastName.'" placeholder="Last Name" />';
    }
    function enchanté_sidebar_description() {
        $description = esc_attr( get_option( 'user_description' ) );
        echo '<input type="text" name="user_description" value="'.$description.'" placeholder="Description" />
        <p class="description">Write something about yourself.</p>';
    }
    function enchanté_sidebar_job() {
        $job = esc_attr( get_option( 'user_job_title' ) );
        echo '<input type="text" name="user_job_title" value="'.$job.'" placeholder="Job title" />';
    }
    function enchanté_sidebar_location() {
        $location = esc_attr( get_option( 'user_location' ) );
        echo '<input type="text" name="user_location" value="'.$location.'" placeholder="Location" />';
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
        echo '<input type="text" name="instagram_handler" value="'.$instagram.'" placeholder="Instagram handler" />
        <p class="description">Input your Instagram user name without the @ character.</p>';
    }
    function enchanté_sidebar_twitter() {
        $twitter = esc_attr( get_option( 'twitter_handler' ) );
        echo '<input type="text" name="twitter_handler" value="'.$twitter.'" placeholder="Twitter handler" />
                <p class="description">Input your Twitter user name without the @ character.</p>';
    }
    function enchanté_sidebar_whatsapp() {
        $whatsapp = esc_attr( get_option( 'whatsapp_handler' ) );
        echo '<input type="text" name="whatsapp_handler" value="'.$whatsapp.'" placeholder="WhatsApp handler" />';
    }
    
    /**
     * * * * * * * * * * * * * * * * *
     * * * * * * * * * * * * * * * * *
     *      SANITIZATION SETTINGS
     * * * * * * * * * * * * * * * * *
     * * * * * * * * * * * * * * * * *
    */ 
    function enchanté_sanitize_social_handler( $input ) {
        $output = sanitize_text_field( $input );
        $output = str_replace( '@', '', $output );
        return $output;
    }