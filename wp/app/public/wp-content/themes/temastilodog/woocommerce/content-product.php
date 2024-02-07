<?php
/**
 * The template for displaying product content within loops
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/content-product.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see     https://woo.com/document/template-structure/
 * @package WooCommerce\Templates
 * @version 3.6.0
 */

defined( 'ABSPATH' ) || exit;

global $product;

// Ensure visibility.
if ( empty( $product ) || ! $product->is_visible() ) {
	return;
}
?>
<div class="col-lg-4 col-md-4 col-sm-6 col-12">
	<div class="store_box">
		<div class="store_image_box">
			<figure class="mb-0">
				<a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('produto-thumb-m', ['class' => 'img-fluid']) ?></a>
			</figure>
			<?php /*<i class="fa-regular fa-heart"></i>*/ ?>
		</div>
		<div class="store_box_content">
			<div class="text_rate_wrapper">
				<div class="text_wrapper">
					<h5><?php the_title(); ?></h5>
					<div class="text"><?php the_excerpt();?></div>
				</div>

			</div>
			<div class="price_cart_wrapper">
				<div class="price_wrapper">
					<?php woocommerce_template_loop_price(); ?>
				</div>
				<a href="<?php the_permalink(); ?>">
					<figure class="cart mb-0">
						<img src="<?php bloginfo('template_url'); ?>/assets/images/cart.png" alt="" class="img-fluid">
					</figure>
				</a>
			</div>
		</div>
	</div>
</div>