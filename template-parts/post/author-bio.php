<?php
/**
 * Template part for displaying page content in page.php
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package WordPress
 * @subpackage Twenty_Nineteen
 * @since 0.4.0
 */

?>

<article id="post-<?php the_ID(); ?>" class="<?php post_class(); ?>">
    <header class="entry-header">
        <?php get_template_part('template-parts/header/entry', 'header'); ?>
    </header> <!-- .entry-header -->

    <div class="entry-content">
        <?php the_content(); ?>
    </div> <!-- .entry-content -->

    <?php if ( get_edit_post_link() ) : ?>
		<footer class="entry-footer">
			<?php
			edit_post_link(
				sprintf(
					wp_kses(
						/* translators: %s: Name of current post. Only visible to screen readers */
						__( 'Editar <span class="screen-reader-text">%s</span>', 'TEXT_DOMAIN' ),
						array(
							'span' => array(
								'class' => array(),
							),
						)
					),
					get_the_title()
				),
				'<span class="edit-link">',
				'</span>'
			);
			?>
		</footer><!-- .entry-footer -->
    <?php endif; ?>
</article> <!-- #post-<?php the_ID(); ?> -->