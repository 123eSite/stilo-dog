<?php
/**
 * The Template for displaying all single products
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/single-product.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see         https://woo.com/document/template-structure/
 * @package     WooCommerce\Templates
 * @version     1.6.4
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}

get_header( 'shop' ); ?>
 <!-- SUB BANNER SECTION -->
 <section class="banner-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-2 col-md-12 col-sm-12 col-12 d-lg-block d-none"></div>
                <div class="col-lg-8 col-md-12 col-sm-12 col-12 text-center">
                    <div class="banner-section-content">
                        <h1 data-aos="fade-up">Produtos</h1>
                        <div class="btn_wrapper" data-aos="fade-up">
                            <span>Home </span><span class="slash">/</span><span>Produtos </span><span class="slash">/</span><span class="sub_span"> <?php the_title(); ?></span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-2 col-md-12 col-sm-12 col-12 d-lg-block d-none"></div>
            </div>
        </div>
    </section>
</div>
 <!--== Start Product Details Area Wrapper ==-->
 <section class="product-detail-area store_section">
    <div class="container">
		<?php while ( have_posts() ) : ?>
			<?php the_post(); ?>

			<?php wc_get_template_part( 'content', 'single-product' ); ?>

		<?php endwhile; // end of the loop. ?>
    </div>
</section>
<!--== End Product Details Area Wrapper ==-->
<section class="store_section position-relative bg-degradee">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-12">
                <div class="store_content">
                    <h6>Conheça outros</h6>
                    <h2>Produtos em destaque</h2>
                </div>
            </div>
        </div>
        <div class="tabs-box tabs-options">
            <div class="tab-content" data-aos="fade-up">
                <div id="all" class="tab-pane fade in active show">
                    <div class="row position-relative">
                        <div class="owl-carousel owl-theme">
							<?php query_posts('post_type=product&posts_per_page=4&orderby=rand'); ?>
							<?php if(have_posts()) : while(have_posts()) : the_post(); ?>
                            <div class="item">
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
                            <?php endwhile; wp_reset_query(); endif; ?>
                        </div>
                        <figure class="store_box_right_shape mb-0 position-absolute left_right_shape">
                            <img src="<?php bloginfo('template_url'); ?>/assets/images/our_store_box_right_shape.png" alt="" class="img-fluid">
                        </figure>
                    </div>
                </div>
            </div>
        </div>
        <figure class="store_big_foot_shape mb-0 position-absolute top_bottom_shape">
            <img src="<?php bloginfo('template_url'); ?>/assets/images/our_store_big_foot_shape.png" alt="" class="img-fluid">
        </figure>
        <figure class="store_small_foot_shape mb-0 position-absolute top_bottom_shape">
            <img src="<?php bloginfo('template_url'); ?>/assets/images/our_store_small_foot_shape.png" alt="" class="img-fluid">
        </figure>
    </div>
</section>

<?php
get_footer( 'shop' );

/* Omit closing PHP tag at the end of PHP files to avoid "headers already sent" issues. */
