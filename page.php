<?php 
/**
 * The page template is used when visitors request individual pages, which are a built-in template.
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
            /** start the loop */
            while (have_posts()):
                the_post();

                get_template_part('template-parts/content/content', 'page');
            endwhile; // End of the loop
            ?>
        </main> <!-- #main -->
    </section> <!-- #primary -->

<?php
get_footer();