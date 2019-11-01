<?php
/**
 * Template part for displaying post archives and search results
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package WordPress
 * @subpackage Restaurant_theme
 * @since 0.4.0
 */
?>

<article id="post-<?php the_ID(); ?>" class="<?php post_class() ?>">
    <header class="entry-header">
        <?php 
        if (is_home() && !is_paged())
        {
            printf('<span class="sticky-post">%s</span>', _x('Featured', 'post', 'TEXT_DOMAIN'));
        }
        the_title(sprintf('<h2 class="entry-title"><a href="%s" rel="bookmark">', esc_url(get_permalink() ) ), '</a></h2>');
        ?>
    </header> <!-- .entry-header -->

    <div class="entry-content">
        <?php the_excerpt(); ?>
    </div> <!-- .entry-content -->

    <footer class="entry-footer">
    </footer> <!-- .entry-footer -->
</article>
