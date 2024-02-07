<?php
/**
 * The template for displaying product content in the single-product.php template
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/content-single-product.php.
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

/**
 * Hook: woocommerce_before_single_product.
 *
 * @hooked woocommerce_output_all_notices - 10
 */
do_action( 'woocommerce_before_single_product' );

if ( post_password_required() ) {
	echo get_the_password_form(); // WPCS: XSS ok.
	return;
}
?>
<div class="row product-details">
            <div class="col-lg-5">
                <div class="product-details-thumb me-lg-6">
                    <div class="swiper single-product-thumb-slider">
                        <div class="swiper-wrapper">
							<?php $thumb_gallery_ids = $product->get_gallery_attachment_ids(); ?>
							<?php foreach($thumb_gallery_ids as $thumb) : ?>
								<?php
									$imagem = wp_get_attachment_image_src( $thumb, 'produto-thumb-g' );
									$imagemG = wp_get_attachment_image_src( $thumb, 'produto-full' );
								?>
                            <a class="lightbox-image swiper-slide" data-fancybox="gallery" href="<?php echo $imagemG[0]; ?>">
                                <img src="<?php echo $imagem[0]; ?>" width="640" alt="<?php the_title(); ?>">
                                <?php if ($product->is_on_sale()) : ?>
									<span class="badges">Promoção</span>
								<?php endif; ?>
                            </a>
							<?php endforeach; ?>
                        </div>
                        <!-- swiper pagination -->
                        <div class="swiper-pagination"></div>
                    </div>
                    <div class="swiper single-product-nav-slider">
                        <div class="swiper-wrapper">
							<?php $thumb_gallery_ids = $product->get_gallery_attachment_ids(); ?>
							<?php foreach($thumb_gallery_ids as $thumb) : ?>
							<?php
								$imagem = wp_get_attachment_image_src( $thumb, 'produto-thumb' );
							?>
                            <div class="nav-item swiper-slide">
                                <img src="<?php echo $imagem[0]; ?>" alt="<?php the_title(); ?>" width="305">
                            </div>
							<?php endforeach; ?>
                        </div>
                    </div>
                </div>
            </div>
            <div class="offset-lg-1 col-lg-6">
                <div class="product-details-content">
                    <h3 class="product-details-title"><?php the_title(); ?></h3>
                    <p class="product-details-desc"><?php echo get_the_excerpt(); ?></p>
                    <div class="product-details-price"><?php woocommerce_template_single_price(); ?></div>
                    <div class="product-details-action">
                        <?php woocommerce_template_single_add_to_cart(); ?>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <div class="nav product-details-nav me-lg-6" id="product-details-nav-tab" role="tablist">
                    <button class="nav-link active" id="review-tab" data-bs-toggle="tab" data-bs-target="#specification" type="button" role="tab" aria-controls="review" aria-selected="true">Descrição do produto</button>
                </div>
                <div class="tab-content me-lg-6" id="product-details-nav-tabContent">
                    <div class="tab-pane fade show active" id="specification" role="tabpanel" aria-labelledby="specification-tab">
                        <?php the_content(); ?>
                    </div>
                </div>
            </div>
        </div>

<?php do_action( 'woocommerce_after_single_product' ); ?>
