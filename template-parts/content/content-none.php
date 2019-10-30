<?php
/**
 * Template part for displaying a message that posts cannot be found
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package WordPress
 * @subpackage Restaurant_theme
 * @since 0.4.0
 */

?>

<section class="no-results not-found">
    <header class="page-header">
        <h1 class="page-title"><?php _e('Nothing Found', 'TEXT_DOMAIN'); ?></h1>
    </header> <!-- .page-header -->

    <div class="page-content">
        <?php
        if (is_home() && current_user_can('publish_posts')) :

            printf(
                '<p>' . wp_kses(
                    __('Pronto para criar seu primeiro post? <a href="%1$s">Clique aqui para começar</a>.', 'TEXT_DOMAIN'),
                    array(
                        'a' => array(
                            'href' => array()
                        )
                    )
                ) . '</p>';

                esc_url(admin_url('post-new.php'));
            );

        elseif (is_search()) :
            ?>
            <p><?php _e('Desculpe, mas nada foi encontrado com esses termos de busca. Por favor tente novamente com palavras diferentes.', 'TEXT_DOMAIN'); ?></p>
            <?php
            get_search_form();

        else :
            ?>
            <p><?php _e('Parece que não conseguimos encontrar o que você está procurando. Talvez a pesquisa possa ajudar.', 'TEXT_DOMAIN'); ?></p>
            <?php
            get_search_form();

        endif;
        ?>
    </div> <!-- .page-content -->
</section> <!-- .no-results -->