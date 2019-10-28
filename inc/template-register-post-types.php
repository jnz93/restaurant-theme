<?php 
/**
 * Registro de posts types
 * 
 * @link https://developer.wordpress.org/reference/functions/register_post_type/
 * @since 0.2.0
 * 
 */
add_action('init', 'create_custom_post_types');
function create_custom_post_types()
{
    /**
     * Post type: menu
     */
    register_post_type(PREFIX . 'menu', array(
        'labels'            => array(
            'name'          => __('Cardápio', 'TEXT_DOMAIN'),
            'singular_name' => __('Cardápio', 'TEXT_DOMAIN'),
            'add_new'       => __('Adicionar novo item', 'TEXT_DOMAIN'),
            'add_new_item'  => __('Adicionar novo item ao cardápio', 'TEXT_DOMAIN'),
            'edit_item'     => __('Editar item do cardápio', 'TEXT_DOMAIN'),
            'new_item'      => __('Novo item', 'TEXT_DOMAIN'),
            'view_item'     => __('Visualizar item do cardápio', 'TEXT_DOMAIN'),
            'menu_name'     => __('Menu / Cardápio', 'TEXT_DOMAIN'),
        ),
        'description'       => __('Pratos e bebidas disponíveis no menu do estabelecimento', 'TEXT_DOMAIN'),
        'supports'          => array(
            'title',
            'editor',
            'excerpt',
            'author',
            'revisions',
            'thumbnail',
        ),
        'public'            => true,
        'menu_position'     => '2',
        'menu_icon'         => 'dashicons-cart'
    ));

    /**
     * Post type: orders
     */
    register_post_type(PREFIX . 'orders', array(
        'labels'            => array(
            'name'          => __('Pedidos', 'TEXT_DOMAIN'),
            'singular_name' => __('Pedido', 'TEXT_DOMAIN'),
            'add_new'       => __('Adicionar novo pedido', 'TEXT_DOMAIN'),
            'add_new_item'  => __('Criar novo pedido', 'TEXT_DOMAIN'),
            'edit_item'     => __('Editar pedido', 'TEXT_DOMAIN'),
            'new_item'      => __('Novo pedido', 'TEXT_DOMAIN'),
            'view_item'     => __('Visualizar pedido', 'TEXT_DOMAIN'),
            'menu_name'     => __('Pedidos', 'TEXT_DOMAIN')
        ),
        'description'       => __('Adicione, edite e remova pedidos.', 'TEXT_DOMAIN'),
        'supports'          => array(
            'title',
            'editor',
            'author',
            'revisions',
            'excerpt'
        ),
        'public'            => true,
        'menu_position'     => '3',
        'menu_icon'         => 'dashicons-editor-ul'
    ));

    /**
     * Post type: differentials
     */
    register_post_type(PREFIX . 'differentials', array(
        'labels'            => array(
            'name'          => __('Diferenciais', 'TEXT_DOMAIN'),
            'singular_name' => __('Diferencial', 'TEXT_DOMAIN'),
            'add_new'       => __('Adicionar novo diferencial', 'TEXT_DOMAIN'),
            'add_new_item'  => __('Adicionar diferencial', 'TEXT_DOMAIN'),
            'edit_item'     => __('Editar diferencial', 'TEXT_DOMAIN'),
            'new_item'      => __('Novo diferencial', 'TEXT_DOMAIN'),
            'view_item'     => __('Visualizar diferencial', 'TEXT_DOMAIN'),
            'menu_name'     => __('Diferenciais', 'TEXT_DOMAIN')
        ),
        'description'       => __('Adicionar diferenciais competitivos da empresa em relação aos concorrentes', 'TEXT_DOMAIN'),
        'supports'          => array(
            'title',
            'excerpt',
            'thumbnail',
            'author'
        ),
        'public'            => true,
        'menu_position'     => '4',
        'menu_icon'         => 'dashicons-awards'
    ));
};