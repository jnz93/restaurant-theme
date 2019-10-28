<?php
/**
 * Registro de meta-boxes para tipos específicos de posts
 * 
 * @link https://developer.wordpress.org/reference/functions/add_meta_box/
 * @since 0.2.0
 */
global $post;
$post_id = $post->ID;

function register_custom_metaboxes()
{
    #post-type: rt_menu
    add_meta_box(PREFIX . 'product_value', __('Valor do produto', 'TEXT_DOMAIN'), 'render_product_value_custom_metabox', PREFIX . 'menu');

    #post-type: rt_orders
    add_meta_box(PREFIX . 'orders_custom_metabox', __('Endereço e valor total', 'TEXT_DOMAIN'), 'render_orders_custom_metabox', PREFIX . 'orders');
}
add_action('add_meta_boxes', 'register_custom_metaboxes');


//////////////////////////////////////////////////////////////////////////
// Callbacks renders
//////////////////////////////////////////////////////////////////////////
function render_orders_custom_metabox($post)
{
    $curr_delivery_address  = get_post_meta($post->ID, PREFIX . 'delivery_address', true);
    $curr_order_value       = get_post_meta($post->ID, PREFIX . 'order_value', true);
    ?>
    <div class="">
        <label for="<?php echo PREFIX . 'delivery_address'; ?>">Endereço para entrega:</label>
        <input type="text" id="<?php echo PREFIX . 'id_delivery_address'; ?>" class="" name="<?php echo PREFIX . 'delivery_address' ?>" value="<?php echo ($curr_delivery_address != "" ? $curr_delivery_address : ''); ?>" placeholder="Este campo deve ser preenchido pelo usuário" disabled>
    </div>
    <div class="">
        <label for="<?php echo PREFIX . 'order_value'; ?>">Valor total:</label>
        <input type="number" id="<?php echo PREFIX . 'id_order_value'; ?>" class="" name="<?php echo PREFIX . 'order_value' ?>" value="<?php echo ($curr_order_value != "" ? $curr_order_value : ''); ?>" placeholder="Este campo é preenchido automaticamente" disabled>
    </div>
    
    <?php
}

function render_product_value_custom_metabox($post)
{
    $curr_price             = get_post_meta($post->ID, PREFIX . 'product_price', true);
    $curr_promotional_price = get_post_meta($post->ID, PREFIX . 'promotional_price', true);
    ?>
    <div class="">
        <label for="<?php echo PREFIX . 'id_product_price'; ?>">Preço do produto:</label>
        <input type="text" id="<?php echo PREFIX . 'id_product_price'; ?>" class="" name="<?php echo PREFIX . 'product_price' ?>" value="<?php echo ($curr_price != '' ? $curr_price : ''); ?>" placeholder="<?php _e('Valor unitário do produto', 'TEXT_DOMAIN'); ?>">
    </div>

    <div class="">
        <label for="<?php echo PREFIX . 'id_promotional_price'; ?>">Preço do produto:</label>
        <input type="text" id="<?php echo PREFIX . 'id_product_price'; ?>" class="" name="<?php echo PREFIX . 'promotional_price' ?>" value="<?php echo ($curr_promotional_price != '' ? $curr_promotional_price : ''); ?>" placeholder="<?php _e('Valor promocional do produto', 'TEXT_DOMAIN'); ?>">
        <span class="">Adicionar o preço promocional esconderá o preço unitário</span>
    </div>
    <?php
}

//////////////////////////////////////////////////////////////////////////
// Update and save metaboxes
// @link https://codex.wordpress.org/Function_Reference/update_post_meta
//////////////////////////////////////////////////////////////////////////
function save_custom_metaboxes($post_id)
{
    if (defined('DOING_AUTOSAVE') && DOING_AUTOSAVE)
    {
        return $post_id;
    }

    #Pegar os valores a serem salvos via $_POST
    $new_delivery_address       = $_POST[PREFIX . 'delivery_address'];
    $new_order_value            = $_POST[PREFIX . 'order_value'];
    $new_product_price          = $_POST[PREFIX . 'product_price'];
    $new_promotional_price      = $_POST[PREFIX . 'promotional_price'];

    #Update dos meta-campos
    update_post_meta($post_id, PREFIX . 'delivery_address', $new_delivery_address);
    update_post_meta($post_id, PREFIX . 'order_value', $new_order_value);
    update_post_meta($post_id, PREFIX . 'product_price', $new_product_price);
    update_post_meta($post_id, PREFIX . 'promotional_price', $new_promotional_price);
}
add_action('save_post', 'save_custom_metaboxes');

