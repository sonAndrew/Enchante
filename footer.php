
    <?php
        if( function_exists( 'wp_footer();' ) ) {
            wp_footer();
        } else {
            do_action( 'wp_footer')
        }
    ?>  

</body>
</html>