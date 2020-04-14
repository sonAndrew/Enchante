<h1>Echanté Theme Options</h1>
<h3 class="title">Manage Options</h3>
<p>Customize sidebar Options</p>

<form method="post" action="">
    <?php settings_fields( 'enchanté_settings_group' ) ?>
    add_settings_section( 'enchanté_sidebar_options', 'Sidebar Options', 'enchanté_sidebar_options', 'une_enchanté' );
</form>