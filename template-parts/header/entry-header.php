<?php
/**
 * Display the post header
 * 
 * @package Wordpress
 * @subpackage Restaurant_theme
 * @since 0.4.0
 */
?>

<?php the_title('<h1 class="entry-title">', '</h1>'); ?>

<?php if (!is_page()) : ?>
    <div class="entry-meta">
    <?php
    edit_post_link(
        sprintf(
            wp_kses(
                /* translators: %s: Name of current post. Only visible to screen readers. */
                __( 'Editar <span class="screen-reader-text">%s</span>', 'TEXT_DOMAIN' ),
                array(
                    'span' => array(
                        'class' => array(),
                    ),
                )
            ),
        get_the_title()
    ));
    ?>
    </div> <!-- .entry-meta -->
<?php
endif;