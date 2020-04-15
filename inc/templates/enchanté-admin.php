<h1>Echanté Theme Options</h1>
<?php settings_errors(); ?>

<?php
    $firstName = esc_attr( get_option( 'first_name' ) );
    $lastName = esc_attr( get_option( 'last_name' ) );
    $fullName = $firstName . ' ' . $lastName;
    $description = esc_attr( get_option( 'user_description' ) );
    $job = esc_attr( get_option( 'user_job_title' ) );
    $location = esc_attr( get_option( 'user_location') );

    $facebook = esc_attr( get_option( 'facebook_handler' ) );
    $youtube = esc_attr( get_option( 'youtube_handler' ) );
    $instagram = esc_attr( get_option( 'instagram_handler' ) );
    $twitter = esc_attr( get_option( 'twitter_handler' ) );
    $whatsapp = esc_attr( get_option( 'whatsapp_handler' ) );
?>

<div class="enchanté-sidebar-preview">
    <div class="enchanté-sidebar">
        <h3 class="enchanté-username"><?php print $fullName; ?></h3>
        <p class="enchanté-user-description"><?php print $description; ?></p>
        <p class="enchanté-job-title"><?php print $job; ?></p>
        <p class="enchanté-user-location"><?php print $location; ?></p>
        <div class="enchanté-user-social-wrapper">
            <ul>
                <li><a href=""><?php print $facebook; ?></a></li>
                <li><a href=""><?php print $youtube; ?></a></li>
                <li><a href=""><?php print $instagram; ?></a></li>
                <li><a href=""><?php print $twitter; ?></a></li>
                <li><a href=""><?php print $whatsapp; ?></a></li>
            </ul>
        </div>
    </div>
</div>

<form method="post" action="options.php" class="enchanté-general-form">
    <?php settings_fields( 'enchanté_settings_group' ); ?>
    <?php do_settings_sections( 'une_enchanté' ); ?>
    <?php submit_button(); ?>
</form>