<?php

add_theme_support('woocommerce');

// woocommerce breadcrump mods
remove_action('woocommerce_before_main_content', 'woocommerce_breadcrumb', 20, 0);
add_action('woo_header_breadcrump', 'woocommerce_breadcrumb');

// single product page mods
remove_action('woocommerce_after_single_product_summary', 'woocommerce_output_product_data_tabs', 10);
remove_action('woocommerce_after_single_product_summary', 'woocommerce_upsell_display', 15);
remove_action('woocommerce_after_single_product_summary', 'woocommerce_output_related_products', 20);

remove_action('woocommerce_single_product_summary', 'woocommerce_template_single_price', 10);
remove_action('woocommerce_single_product_summary', 'woocommerce_template_single_meta', 40);

// remove_action('woocommerce_single_product_summary', 'woocommerce_template_single_rating', 10);

// VARIATIONS nem látszik ha ki van kapcsolva
// remove_action('woocommerce_single_product_summary', 'woocommerce_template_single_add_to_cart', 30);

// related products
remove_action('woocommerce_after_shop_loop_item_title', 'woocommerce_template_loop_price', 10);
// add_action('single_related_prod', 'woocommerce_output_related_products');

// ***************************************************************
// képkidolgozás single product page
// ***************************************************************

function online_product_prices()
{
    if ($post->ID == '206') {
        echo do_shortcode('[table id=online /]');
    }
}
add_action('woocommerce_single_product_summary', 'online_product_prices');

add_action('woocommerce_before_main_content_wrapper', 'woocommerce_output_content_wrapper', 10);

// remove price column
remove_action('woocommerce_after_shop_loop_item_title', 'woocommerce_template_loop_price', 10);

// checkout
function remove_price_column($columns = array())
{
    unset($columns['order-total']);
    unset($columns['order-total']);

    return $columns;
}
add_filter('wc_get_account_orders_columns', 'remove_price_column');

/*
* Preview WooCommerce Emails.
* @author WordImpress.com
* @url https://github.com/WordImpress/woocommerce-preview-emails
* If you are using a child-theme, then use get_stylesheet_directory() instead
*/

$preview = get_stylesheet_directory().'/woocommerce/emails/woo-preview-emails.php';

if (file_exists($preview)) {
    require $preview;
}
