<?php 
/**
 * The single post template is used when a visitor requests a single post.
 * 
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package WordPress
 * @subpackage Restaurant_theme
 * @since 0.1.0
 */
get_header();
?>
    <section id="primary" class="content-area">
        <main id="main" class="site-main">
        
        <?php
        /** Start loop */
        while (have_posts()) :
            the_post();

            get_template_part('template-parts/content/content', 'single');
        endwhile; // End of the loop
        ?>

        </main> <!-- #main -->
    </section> <!-- #primary -->
<?php
get_footer();
