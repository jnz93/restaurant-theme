<?php 
/**
 * Display homepage slider section
 *
 * @package WordPress
 * @subpackage Restaurant_theme
 * @since 0.4.0
 */
?>
<section class="content__section" role="slider">
    <?php 
    $post_type      = array(PREFIX .  'menu');
    $post_status    = 'publish';
    $posts_per_page = '6';
    $order          = 'random';

    $args = array(
        'post_type'         => $post_type,
        'post_status'       => $post_status,
        'posts_per_page'    => $posts_per_page,
        'orderby'           => $order
    );

    $query_sliders  = new WP_Query($args);
    
    if ($query_sliders->have_posts()) :
        while ($query_sliders->have_posts()) :

            $query_sliders->the_post();
            get_template_part('template-parts/content/content', 'slider');  // Criar template
        
        endwhile;
    else :

        get_template_part('template-parts/content/content', 'none');

    endif;

    // Restore original post data
    wp_reset_postdata();
    ?>
</section>