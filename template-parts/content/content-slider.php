<?php 
/**
 * Display template for post slider-item
 *
 * @package WordPress
 * @subpackage Restaurant_theme
 * @since 0.4.0
 */

//  Get meta informations
$product_price      = get_post_meta(get_the_ID(), PREFIX . 'product_price', true);
$promotional_price  = get_post_meta(get_the_ID(), PREFIX . 'promotional_price', true);
?>

<div class="slider__container">
    <article style="background-image: url(<?php echo get_the_post_thumbnail_url(get_the_ID(), 'full'); ?>); width: 100%; height: 680px" class="article__slider" rel="slider-product">
        <div class="article__content">
            <span class="article__beforeTitle"><?php echo get_the_excerpt(); ?></span>
            <h1 class="article__title"><?php echo get_the_title(); ?></h1>
            <p class="article__description"><?php echo get_the_content(); ?></p>

            <footer class="article__footer">
                <button class="btn btn__primary btn__primary--ghost">Adicionar ao carrinho <i class="">cart</i></button>
                <span class="article__price"><?php echo ($promotional_price != '' ? $promotional_price : $product_price ); ?></span>
            </footer>
        </div>
    </article>
</div>
