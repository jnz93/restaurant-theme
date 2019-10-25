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
    register_taxonomy(PREFIX . 'categorias_cardapio', array(PREFIX . 'cardapio'), array(
        'labels'            => array(
            'name'          => __('Categorias do cardápio', 'TEXT_DOMAIN'),
            'singular_name' => __('Categoria do cardápio', 'TEXT_DOMAIN')
        ),
        'public'            => true,
        'hierarchical'      => true,
        'rewrite'           => array('slug', 'categorias-cardapio')
    ));
}