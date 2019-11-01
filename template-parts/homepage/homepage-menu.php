<?php 
/**
 * Display homepage benefits section
 *
 * @package WordPress
 * @subpackage Restaurant_theme
 * @since 0.4.0
 */
?>
<section class="content__section" role="menu">
    <header class="section__header">
        <h1 class="entry-title"><?php _e('Escolha seu jantar, lanche ou aperitivo', 'TEXT_DOMAIN'); ?></h1>
        <span class="entry-stick"></span>
        <p class="entry-subtitle"><?php _e('nosso cardápio', 'TEXT_DOMAIN'); ?></p>

        <?php
        $args = array(
            'taxonomy'      => PREFIX . 'menu_categories',
            'hide_empty'    => false,
            'hierarchical'  => true
        );
        $categories_menu = get_terms($args);

        if (!empty($categories_menu)) :
            $output = '';
            $output .= '<nav class="">';
            foreach($categories_menu as $category) :
                if ($category->parent == false) :
                    $output .= '<input type="checkbox" id="'. strtolower($category->name) .'" name="'. strtolower($category->name) .'" value="'. $category->term_id .'"> <label for="'. strtolower($category->name) .'">'. __($category->name, "TEXT_DOMAIN") .'</label>';
                    $output .= '</br>';
                endif;
            endforeach;
            $output .= '</nav>';
            echo $output;
        endif;
        ?>
    </header>

    <?php 
    $post_type      = array(PREFIX .  'menu', 'posts');
    $post_status    = 'publish';
    $posts_per_page = '18';
    $order          = 'random';

    $args = array(
        'post_type'         => $post_type,
        'post_status'       => $post_status,
        'posts_per_page'    => $posts_per_page,
        'orderby'           => $order
    );

    $query_menu     = new WP_Query($args);

    if ($query_menu->have_posts()) :
        echo '<h4 class="entry-title">'. __('Selecionamos '. $posts_per_page .' para você!', 'TEXT_DOMAIN') . '</h4>';

        while ($query_menu->have_posts()) :
            
            $query_menu->the_post();
            get_template_part('template-parts/content/content', 'card-menu');

        endwhile;
    else :
        echo '<h4 class="entry-title">'. __('Ainda não temos items no cardápio, volte em breve!', 'TEXT_DOMAIN') . '</h4>';
        get_template_part('template-parts/content/content', 'none');

    endif;

    // Restore the post data
    wp_reset_postdata();
    ?>
</section>