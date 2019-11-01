<?php 
/**
 * The custom homepage template
 * 
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package WordPress
 * @subpackage Restaurant_theme
 * @since 0.3.0
 */
get_header();
?>

<main id="main" class="site-main">
    
    <?php if (true) :  ?>
        <?php get_template_part('template-parts/homepage/homepage', 'slider'); ?>
    <?php endif;  ?> <!-- Fim seção slider  -->

    <?php if (true) : ?>
        <?php get_template_part('template-parts/homepage/homepage', 'benefits'); ?>
    <?php endif; ?> <!-- Fim seção benefits -->

    <?php if (true) : ?>
        <?php get_template_part('template-parts/homepage/homepage', 'menu'); ?>
    <?php endif; ?> <!-- Fim seção menu -->

    <?php if (true) : ?>
        <?php get_template_part('template-parts/homepage/homepage', 'gallery'); ?>
    <?php endif; ?> <!-- Fim seção gallery -->

    <?php if (true) : ?>
        <?php get_template_part('template-parts/homepage/homepage', 'socialnetwork'); ?>
    <?php endif; ?> <!-- Fim seção socialnetwork -->

</main>

<?php
get_footer();