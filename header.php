<?php 
    /**
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
    <link rel="profile" href="http://gmpg.org/xfn/11">

    <title>Enchanté - HOME</title>

    <?php 
    if ( function_exists( 'wp_head()' ) ) {
        wp_head();
    } else {
        do_action( 'wp_head()' );
    } 
    ?>

</head>
<body <?php body_class(); ?> >

    <?php 
        if ( function_exists( 'wp_body_open' ) ) {
            wp_body_open();
        } else {
            do_action( 'wp_body_open' );
        }
    ?>
