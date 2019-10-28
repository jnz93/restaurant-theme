<?php 
/**
 * Registro de taxonomias
 * 
 * @link https://developer.wordpress.org/reference/functions/register_taxonomy/
 * @since 0.2.0
 * 
 */
add_action('init', 'create_custom_taxonomies');
function create_custom_taxonomies()
{
    /**
     * Taxonomia que categoriza os tipos de comidas, lanches e bebidas oferecidas no menu.
     */
    register_taxonomy(PREFIX . 'menu_categories', array(PREFIX . 'menu'), array(
        'labels'            => array(
            'name'          => __('Categorias do cardápio', 'TEXT_DOMAIN'),
            'singular_name' => __('Categoria do cardápio', 'TEXT_DOMAIN')
        ),
        'public'            => true,
        'hierarchical'      => true,
        'rewrite'           => array('slug', PREFIX . 'menu-categories')
    ));

    /**
     * Taxonomia para tamanhos disponíveis dos lanches/pratos/comidas cadastradas no menu
     */
    register_taxonomy(PREFIX . 'menu_size_item', array(PREFIX . 'menu'), array(
        'labels'            => array(
            'name'          => __('Tamanho(s) disponíveis', 'TEXT_DOMAIN'),
            'singular_name' => __('Tamanho disponível', 'TEXT_DOMAIN')
        ),
        'public'            => true,
        'hierarchical'      => false,
        'rewrite'           => array('slug', PREFIX . 'menu-size-item')
    ));


    /**
     * Taxonomia que permite a adição de métodos de pagamento.
     */
    register_taxonomy(PREFIX . 'payment_method', array(PREFIX . 'orders'), array(
        'labels'            => array(
            'name'          => __('Formas de pagamento', 'TEXT_DOMAIN'),
            'singular_name' => __('Forma de pagamento', 'TEXT_DOMAIN'),
        ),
        'public'            => true,
        'hierarchical'       => false,
        'rewrite'           => array('slug', PREFIX . 'payment-method')
    ));

    /**
     * Taxonomia que permite a adição de métodos de entrega.
     */
    register_taxonomy(PREFIX . 'delivery_method', array(PREFIX . 'orders'), array(
        'labels'            => array(
            'name'          => __('Formas de entrega', 'TEXT_DOMAIN'),
            'singular_name' => __('Forma de entrega', 'TEXT_DOMAIN')
        ),
        'public'            => true,
        'hierarchical'      => false,
        'rewrite'           => array('slug', PREFIX . 'delivery-method')
    ));
}