<?php
/**
 * Sidebar
 *
 * @author 		WooThemes
 * @package 	WooCommerce/Templates
 * @version     1.6.4
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}
?>
<div class="col-md-4" id="shop-sidebar-right">
	<?php if ( is_active_sidebar( 'shop_sidebar_right' ) ) : ?>
			<?php dynamic_sidebar( 'shop_sidebar_right' ); ?>
	<?php endif; ?>
</div>
<?php
//get_sidebar( 'shop' );
?>
