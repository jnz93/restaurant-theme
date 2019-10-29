<?php 
/**
 * The 404 template is used when WordPress cannot find a post, page, or other content that matches the visitor’s request.
 * 
 * @link https://developer.wordpress.org/themes/basics/template-files/
 *
 * @package WordPress
 * @subpackage Restaurant_theme
 * @since 0.1.0
 */

get_header();
?>
<section id="primary" class="content-area">
    <main id="main" class="site-main">

        <div class="error-404">
            <header class="page-header">
                <h1 class="page-title"><?php _e('Oops! Essa página não existe.', 'TEXT_DOMAIN'); ?></h1>
            </header> <!-- .page-header -->

            <div class="page-content">
                <p><?php _e('Não econtramos nada nesse endereço. Tente a pesquisa.', 'TEXT_DOMAIN'); ?></p>
                <?php get_search_form(); ?>
            </div> <!-- .page-content -->
        </div> <!-- .error-404 -->
        
    </main><!-- #main -->
</section><!-- #primary -->

<?php
get_footer();