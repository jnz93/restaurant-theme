<?php 
/**
 * The archive template is used when visitors request posts by category, author, or date. 
 * Note: this template will be overridden if more specific templates are present like category.php, author.php, and date.php.
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
            <?php the_archive_title('<h1 class="page-title">', '</h1>'); ?>
        </header> <!-- .page-header -->

        <?php 
        // Start the loop
        while (have_posts()):
            the_post();

            /**
             * Include the post-format-especific template for the content.
             * If you want to override this is a child theme, then include a file
             * called content-___.php (where ___ is the post format name) and that will be used intead.
             */
            get_template_part('template-parts/content/content', 'excerpt');

        endwhile;
        // end the loop
    else :
        get_template_part('template-parts/content/content', 'none');
    endif;    
    ?>
    </main> <!-- #main -->
</section> <!-- #primary -->

<?php 
get_footer();