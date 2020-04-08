<?php get_header('secondary'); ?>

    <div class="container">

        <h1><?php the_title();?></h1>

        <?php get_template_part('template-parts/section', 'content')?>

    </div>

<?php get_footer(); ?>