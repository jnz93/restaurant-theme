<?php 
/**
 * The attachment template is used when viewing a single attachment like an image, pdf, or other media file.
 * 
 * @link https://developer.wordpress.org/themes/basics/template-files/
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
        /** Start the loop*/
        while (have_posts()) :
            the_post();

            get_template_part('template-parts/content/content', 'attachment');
        endwhile; // End of the loop
        ?>

        </main> <!-- #main -->
    </section> <!-- #primary -->

<?php
get_footer();