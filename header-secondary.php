<?php 
    /**
        * Template Name: header-secondary
        * Header file for the Enchanté theme.
        * @link
        *
        * @package WordPress
        * @subpackage Enchanté
        * @since 1.0.0
    **/

?>
<!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js no-svg">
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <?php wp_head(); ?>

    <link rel="profile" href="http://gmpg.org/xfn/11">

    <title>Enchanté - HOME</title>

    

</head>
<body <?php body_class(); ?> >

    <?php 
        if ( function_exists( 'wp_body_open' ) ) 
        {
            wp_body_open();
        } 
        else 
        {
            do_action( 'wp_body_open' );
        }
    ?>
    <nav id="navigation-container">
        <div class="nav-bar">
            <ul class="links-container">
                <h1><?php bloginfo( 'title' ) ?></h1>
                <li><a href="#">HOME</a></li>
                <li><a href="#">MENU</a></li>
                <li><a href="#">STORY</a></li>
                <li><a href="#">CONTACT</a></li>
                <li><a href="#">BLOG</a></li>
            </ul>
        </div>
    </nav>
    
    THIS IS THE SECOND HEADER