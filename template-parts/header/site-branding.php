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

    <?php if (has_nav_menu('main-navigation')) : ?>
        <nav id="site-navigation" class="main-navigation" aria-label="<?php esc_attr_e('Menu do topo', 'TEXT_DOMAIN'); ?>">
            <?php
            wp_nav_menu(
                array(
                    'theme_location'    => 'main-navigation',
                    'menu_class'        => 'main-menu',
                    'items_wrap'        => '<ul id="%1$s" class="%2$s">%3$s</ul>',
                )
            );
            ?>
        </nav> <!-- #site-navigation -->
    <?php endif; ?>
</div> <!-- .site-branding -->