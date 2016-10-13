<!-- *************
custom header on category page
place: woocommerce.php
************* -->
<?php
function custom_cat_header()
{
    if (is_product_category('teli-sapkak')) {
        ?>

        <div class="kategoria-banner">
           <img src="<?php bloginfo('template_url');
        ?>/dev/img/kathead-tel.png" alt="teli sapka kategória"/>
          <h2>Füles téli gyereksapkák (1-től 6 éves korig)</h2>
          <p>
             Hideg téli napokon a helyes öltözködés mellett nagyon fontos a gyerekek fejét is befedni, védeni. A gyermekek fázósabbak, mint a felnőttek, a kicsiknek fülvédős sapka ajánlott. A gyermekek részére a kötött sapkán kívül még a polár béléses sapka ideális, amely védi őket a hidegtől, széltől. A gyermek téli sapkák között megtalálhatóak egyszínű, csíkos vagy aranyos mintás, bojtos és fülvédős modellek is.
          </p>
        </div>
   <?php

    }
}
 add_action('woocommerce_archive_description', 'custom_cat_header');?>


 // <!-- *************
 // custom single product page
 // place: single-product.php
 //
 //content-single-product.php -ból kell másolat
 // ************* -->
 <?php if ($post->ID == '206') {
    wc_get_template_part('content', 'kepkidolgozas');
} else {
    wc_get_template_part('content', 'single-product');
} ?>


// <!-- *************
// custom element on single product
// place: woocommerce.php
//
//content-single-product.php -ból kell másolat
// ************* -->
<?php
function online_product_prices()
{
    if ($post->ID == '206') {
        echo do_shortcode('[table id=online /]');
    }
}
add_action('woocommerce_single_product_summary', 'online_product_prices');
 ?>
