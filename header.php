<?php 
/**
 * The header template file usually contains your site’s document type, meta information, 
 * links to stylesheets and scripts, and other data.
 * 
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package WordPress
 * @subpackage Restaurant_theme
 * @since 0.1.0
 */
?><!doctype html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
	<link rel="profile" href="https://gmpg.org/xfn/11" />
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div id="page">
    <header id="mastehead" class="">
        <div class="site-widget-contact">
            <?php get_template_part('template-parts/header/widgets', 'contact'); ?>
        </div> <!-- .site-widget-contact -->

        <div class="site-branding-container">
            <?php get_template_part('template-parts/header/site', 'branding'); ?>
        </div> <!-- .site-branding-container -->

        <div class="site-widget-cart">
            <?php get_template_part('template-parts/header/widget', 'cart'); ?>
        </div>
    </header> <!-- #masthead -->

    <div id="content" class="site-content">
