<?php 
/**
 * The category template is used when visitors request posts by category.
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
        
        <?php if (have_posts()) : ?>
            <header class="page-header">
                <h1 class="page-title"><?php _e('Posts na categoria:', 'TEXT_DOMAIN'); ?></h1>
                <div class="page-description"><?php echo get_search_query(); ?></div>
            </header> <!-- .page-header -->

            <?php
            /** Start the loop */
            while (have_posts()) :
                the_post();

                /**
                 * Include the post-format-especific template for the content.
                 * If you wat to override this in a child theme, then include a file
                 * called content-___.php (where ___ is the post format name) and that will be used instead.
                 */
                get_template_part('template-parts/content/content', 'category');

            // end the loop
            endwhile;

        else :
            get_template_part('template-parts/content/content', 'none');
        endif;
        ?>
        </main> <!-- #main -->
    </section> <!-- #primary -->

<?php
get_footer();