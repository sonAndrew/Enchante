<h1>Echanté Theme Options</h1>
<?php settings_errors(); ?>
<form method="post" action="options.php">
    <?php settings_fields( 'enchanté_settings_group' ); ?>
    <?php do_settings_sections( 'une_enchanté' ); ?>
    <?php submit_button(); ?>
</form>