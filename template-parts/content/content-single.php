<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package WordPress
 * @subpackage Twenty_Nineteen
 * @since 1.0.0
 */

?>

<article id="post-<?php the_ID(); ?>" class="<?php post_class(); ?>">

    <header class="entry-header">
        <?php get_template_part('template-parts/header/entry', 'header'); ?>
    </header> <!-- .entry-header -->

    <div class="entry-content">
        <?php the_content(); ?>
    </div> <!-- .entry-content -->

    <?php if(!is_singular('attachment')) : ?>
        <?php get_template_part('template-parts/post/autor', 'bio'); ?>
    <?php endif; ?>

</article> <!-- #post-<?php the_ID(); ?> -->