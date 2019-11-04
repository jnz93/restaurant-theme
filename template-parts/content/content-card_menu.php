<?php 
/**
 * Display template menu cardápio card
 *
 * @package WordPress
 * @subpackage Restaurant_theme
 * @since 0.4.0
 */

//  Get meta informations
$product_price      = get_post_meta(get_the_ID(), PREFIX . 'product_price', true);
$promotional_price  = get_post_meta(get_the_ID(), PREFIX . 'promotional_price', true);
?>

<div class="card card__type2">
    <header class="card__thumb">
        <span class="card__promotional card__promotional--active">Promoção</span>
        <?php the_post_thumbnail(); ?>
        <i class="card__icon"></i>
        <p style="display: none;" class=""><?php echo get_the_content(); ?></p>
    </header>

    <div class="card__content">
        <h3 class="card__title"><?php _e(get_the_title(), 'TEXT_DOMAIN'); ?></h3>

        <div class="card__excerpt">
            <?php _e(get_the_excerpt(), 'TEXT_DOMAIN'); ?>
        </div>

        <div class="card__options">
            <?php
            $the_sizes = get_the_terms(get_the_ID(), PREFIX . 'menu_size_item');

            foreach ($the_sizes as $size)
            {
                $output = '';

                $output .= '<span class="card__tagSize">'. __($size->name, 'TEXT_DOMAIN') .' </span>';
                $output .= '<input type="hidden" name="size_'. trim(strtolower($size->name)) .'" id="size_'. $size->term_id .'" value="">';

                echo $output;
            }
            ?>

            <div class="card__separator card__separator--normal"></div>
            <div class="card__pricebox">
                <span class="card__beforePrice">R$</span>
                <?php 
                if (!isset($promotional_price))
                {
                    echo '<h2 class="card__price">'. $product_price .'</h2>';
                }
                else{
                    echo '<h2 class="card__price">'. $promotional_price .'</h2>';
                }
                ?>
                <span class="card__afterPrice">un.</span>
            </div>
            <div class="card__nav">
                <span class="btn__minusIcon">-</span>
                <input type="text" name="qtd_items" id="qtd_items" class="" value="0">
                <span class="btn__plusIcon">+</span>
            </div>
        </div>
    </div>
</div>