<?php 

/**
    Template Name: contact-us
*/

?>
<?php get_header(); ?>

<div class="container">

    <h1><?php the_title();?></h1>

    <div class="grid-x">

        <div class="cell large-6">

            This is where the contact form goes.

        </div>
    

        <div class="cell large-6">
        
            <?php get_template_part('template-parts/section', 'content')?>

        </div>
    
    </div>

    

</div>

<?php get_footer(); ?>