<?php

    /***
    @package enchanté
        =======================
            ADMIN PAGE
        =======================
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

    function enchanté_custom_settings(){ 
        register_setting( 'enchanté_settings_group', 'first_name' );
        register_setting( 'enchanté_settings_group', 'last_name' );
        add_settings_section( 'enchanté_sidebar_options', 'Sidebar Options', 'enchanté_sidebar_options', 'une_enchanté' );
        add_settings_field( 'sidebar-name', 'First Name', 'enchanté_sidebar_name', 'une_enchanté', 'enchanté_sidebar_options' );
    }

    function enchanté_sidebar_options() {
        /** Generation of our Sidebar */
        echo '<h1>Customize Your Sidebar Information</h1>';
    }

    function enchanté_sidebar_name() {
        $firstName = esc_attr( get_option( 'first_name' ) );
        echo '<input type="text" name="first_name" value="'.$firstName.'" placeholder="First Name" />';
    }

    function enchanté_theme_create_page() {
        /** Generation of our admin page */
        require_once( get_template_directory() . '/inc/templates/enchanté-admin.php' );
    }
    function enchanté_theme_settings_page() {
        /** Generation of our Custom CSS page */
        echo '<h1>Enchanté Custom CSS</h1>';
    }
    
