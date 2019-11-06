<?php
/**
 * Template auxiliar que é responsável por registrar e enfileirar scripts e estilos.
 * 
 * @link https://developer.wordpress.org/themes/basics/including-css-javascript/
 * @since 0.5.0
 */

$version = '0.5.0';
$dir_path = get_template_directory_uri();

function rt_enqueue_styles_and_scripts()
{
    //////////////////////////////////////////////////////////////////////////////////////////////////////////////
    // Registro dos scripts
    // A ideia é que com os registros feitos acionar as funções wp_enqueue_scripts ou styles apenas uma vez 
    // passando um array com todos os $handles(nomes) registrados.
    // @link https://developer.wordpress.org/reference/functions/wp_register_script/
    //////////////////////////////////////////////////////////////////////////////////////////////////////////////
    wp_register_script('font-awesome-mdn', 'https://kit.fontawesome.com/f18f521cf8.js', '', true);

    /**
     * Enfileiramento dos scripts
     * @link https://developer.wordpress.org/reference/functions/wp_enqueue_script/
     */
    wp_enqueue_script(array('font-awesome-mdn'));



    //////////////////////////////////////////////////////////////////////////////////////////////////////////////
    // Registro de folhas de estilos e css
    // @link https://developer.wordpress.org/reference/functions/wp_register_style/
    //////////////////////////////////////////////////////////////////////////////////////////////////////////////
    wp_register_style('reset-css', get_template_directory_uri() . '/css/reset.css', '', 'all');

    /**
     * Enfileiramento das folhas de estilos registradas.
     * @link https://developer.wordpress.org/reference/functions/wp_enqueue_style/
     */
    wp_enqueue_style(array('reset-css'));
}
add_action('wp_enqueue_scripts', 'rt_enqueue_styles_and_scripts');