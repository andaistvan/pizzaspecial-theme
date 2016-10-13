<?php
/**
 * Template part for displaying a message that posts cannot be found.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 */
?>
<!-- login, contact  -->

<!-- kapcsolat -->
<a href="<?php echo esc_url(home_url('/')); ?>kapcsolat">kapcsolat</a>

<div class="shop-elements">
<!-- my account -->


      <?php if (is_user_logged_in()) {
    ?>
        <a href="<?php echo get_permalink(get_option('woocommerce_myaccount_page_id'));
    ?>" title="<?php _e('My Account', 'woothemes');
    ?>"><?php _e('fiókom', 'woothemes');
    ?></a>
      <?php

} else {
    ?>
           <a href="<?php echo get_permalink(get_option('woocommerce_myaccount_page_id'));
    ?>" title="<?php _e('Login / Register', 'woothemes');
    ?>"><?php _e('Belépés / Regisztráció', 'woothemes');
    ?></a>
         <?php

} ?>
   <!-- CHEcKOUT -->
         <?php global $woocommerce;

   if (sizeof($woocommerce->cart->cart_contents) > 0) :
   echo '<a href="'.$woocommerce->cart->get_checkout_url().'" title="'.__('Checkout').'">'.__('pénztár').'</a>';
   endif; ?>

</div><!-- shop elements  -->
