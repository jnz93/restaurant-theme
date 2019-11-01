<?php 
/**
 * Display homepage benefits section
 *
 * @package WordPress
 * @subpackage Restaurant_theme
 * @since 0.4.0
 */
?>
<section id="differentials" class="content__section" role="differentials">
    <?php
    $post_type      = PREFIX .  'differentials';
    $post_status    = 'publish';
    $posts_per_page = '4';
    $order          = 'random';

    $args = array(
        'post_type'         => $post_type,
        'post_status'       => $post_status,
        'posts_per_page'    => $posts_per_page,
        'orderby'           => $order
    );

    $query_differentials    = new WP_Query($args);

    if ($query_differentials->have_posts()) :

        while ($query_differentials->have_posts()) :

            $query_differentials->the_post();
            get_template_part('template-parts/content/content', 'differential'); // Criar template

        endwhile;

    else :

        get_template_part('template-parts/content/content', 'none');

    endif;

    // Restore original Post Data
    wp_reset_postdata();
    ?>
</section>