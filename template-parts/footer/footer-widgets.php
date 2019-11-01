<?php 
/**
 * Display the footer widgets area
 * 
 * @package Wordpress
 * @subpackage Restaunrant_theme
 * @since 0.4.0
 */

if (is_active_sidebar('sidebar-name')) : ?>

    <aside class="widget-area" role="complementary" aria-label="<?php esc_attr_e('Rodapé', 'TEXT_DOMAIN'); ?>">
        <div class="widget-column footer-widget-1">
            <?php dynamic_sidebar('sidebar-1'); ?>
        </div>
    </aside> <!-- .widget-area -->

<?php endif; ?>