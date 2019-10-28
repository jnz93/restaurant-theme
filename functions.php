<?php 
/**
 * Restaurant theme functions and definitions
 * 
 * @link https://developer.wordpress.org/themes/basics/template-files/
 *
 * @package WordPress
 * @subpackage Restaurant_theme
 * @since 0.1.0
*/

if (!function_exists('restaurant_setup'))
{
    /**
    * Sets up theme defaults and registers support for various WordPress features
    *
    *  It is important to set up these functions before the init hook so that none of these
    *  features are lost.
    *
    *  @since RestaurantTheme 0.2.0
    */

    function restaurant_setup()
    {
        /**
         * Definição de constantes
         * @link https://www.php.net/manual/en/language.constants.php
         */
        define('TEXT_DOMAIN', 'restaurant-theme');
        define('PREFIX', 'rt_');

        /**
         * Habilitar title tag para o wordpress lidar com isso
         */
        add_theme_support('title-tag');

        /**
         * Habilitar post formats
         * @link https://wordpress.org/support/article/post-formats/
         */
        add_theme_support('post-formats', array(
            'gallery', 
            'aside', 
            'image', 
            'quote', 
            'status', 
            'video', 
            'audio', 
            'chat'
        ));

        /**
         * Habilitar post-thumbnails e definir tamanhos de thumbs padrões
         * @link https://codex.wordpress.org/Post_Thumbnails
         */
        add_theme_support('post-thumbnails');
        add_image_size('thumb-card-food', 340, 245, true);
        add_image_size('thumb-social-media', 536, 586, true);
        add_image_size('thumb-social-media-large', 812, 578, true);
        add_image_size('thumb-slider-homepage', 9999, 880, true);
        add_image_size('thumb-section-header', 9999, 540, true);

        /**
         * Registrar menus utilizados no site
         * @link https://codex.wordpress.org/Function_Reference/register_nav_menus
         */
        register_nav_menus(array(
            'menu-navegacao'        => __('Menu de navegação', 'TEXT_DOMAIN')
        ));

        /**
         * Habilitar custom logotipo na aba de customização do tema
         * @link https://codex.wordpress.org/Theme_Logo
         */
        add_theme_support('custom-logo', array(
            'height'        => 188,
            'width'         => 114,
            'flex-height'   => true,
            'flex-width'    => true
        ));

        /**
         * Esconder admin bar em produção
         */
        show_admin_bar(false);
    }
    add_action('after_setup_theme', 'restaurant_setup');
}

/**
 * Include de arquivos com funções suplementares
 */
require get_template_directory() . '/inc/template-register-post-types.php';
require get_template_directory() . '/inc/template-register-taxonomies.php';
require get_template_directory() . '/inc/template-metaboxes.php';