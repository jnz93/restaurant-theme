<?php
/**
 * Displays header site branding
 * 
 * @package Wordpress
 * @subpackage Restaurant_theme
 * @since 0.4.0
 */
?>
<div class="site-branding">
    <?php if (has_custom_logo()) : ?>
        <div class="site-logo"><?php the_custom_logo(); ?></div>
    <?php endif; ?>

    <?php 
    $blog_info = get_bloginfo('name');
    if (!empty($blog_info)) :
        if (is_front_page() && is_home()) : ?>

            <h1 class="site-title"><a href="<?php echo esc_url(home_url('/')); ?>" rel="home"><?php bloginfo('name'); ?></a></h1>
        
        <?php else : ?>

            <p class="site-title"><a href="<?php echo esc_url(home_url('/')); ?>" rel="home"><?php bloginfo('name') ?></a></p>

        <?php endif; ?>
    <?php endif; ?>

    <?php if (has_nav_menu('nome-menu')) : ?>
        <nav id="site-navigation" class="main-navigation" aria-label="<?php esc_attr_e('Menu do topo', 'TEXT_DOMAIN'); ?>">
            <?php
            wp_nav_menu(
                array(
                    'theme_location'    => 'menu-1',
                    'menu_class'        => 'main-menu',
                    'items_wrap'        => '<ul id="%1$s" class="%2$s">%3$s</ul>',
                )
            );
            ?>
        </nav> <!-- #site-navigation -->
    <?php endif; ?>
</div> <!-- .site-branding -->