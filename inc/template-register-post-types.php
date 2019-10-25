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
     * Post type: Cardápio
     */
    register_post_type(PREFIX . 'cardapio', array(
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
        'menu_icon'         => 'dashicons-menu-alt3'
    ));
};



// É a definição para adição de comidas, lanches, bebidas e serviços oferecidos pelo restaurante. Sendo que os produtos cadastrados no cardápio serão categorizados por tipos(Pizza, lanche, bebida alcoolica, refrigerante, pratos) e teremos também subcategorias/tags;
// Exemplo: X-Bacon > lanche - Pizza de calabresa > pizza - Sopa de frango > prato/sopa - Coca-cola > refrigerante
// Campos: Nome/Titulo, Descrição, sabor(es), Igredientes, tamanhos, peso, preço, tempo de preparo; 
// Categorias: Pizzas, Lanches, Massas, Bebidas, Entradas, Sobremesas (Categorias devem ser Hierarquicas para receber as subcategorias)
// Subcategorias:  Tipos de pizzas, tipos de lanches, tipos de bebidas, tipos de entradas, tipos de sobremesas