<?php


get_header(); ?>

<?php
// Start the loop.

    // Include the page content template.
    echo get_template_part( 'content', 'page' );
?>
<?php
// Start the loop.
while ( have_posts() ) : the_post();

    // Include the page content template.
    get_template_part( 'content', 'page' );

    // End the loop.
endwhile;
?>
<?php get_footer(); ?>
