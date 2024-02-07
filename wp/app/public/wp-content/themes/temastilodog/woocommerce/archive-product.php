<?php
/**
 * The Template for displaying product archives, including the main shop page which is a post type archive
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/archive-product.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see https://woo.com/document/template-structure/
 * @package WooCommerce\Templates
 * @version 3.4.0
 */

defined( 'ABSPATH' ) || exit;

get_header( 'shop' );
?>
 <!-- SUB BANNER SECTION -->
 <section class="banner-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-2 col-md-12 col-sm-12 col-12 d-lg-block d-none"></div>
                <div class="col-lg-8 col-md-12 col-sm-12 col-12 text-center">
                    <div class="banner-section-content">
                        <h1 data-aos="fade-up">Produtos</h1>
                        <div class="btn_wrapper" data-aos="fade-up">
                            <span>Home </span><span class="slash">/</span><span class="sub_span"> <?php woocommerce_page_title(); ?></span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-2 col-md-12 col-sm-12 col-12 d-lg-block d-none"></div>
            </div>
        </div>
    </section>
</div>
<!-- OUR STORE SECTION -->
<section class="store_section shop_store_section position-relative">
    <div class="container">
		<?php woocommerce_output_all_notices(); ?>
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-12">
                <div class="store_content">
                    <h2><?php woocommerce_page_title(); ?></h2>
                </div>
            </div>
        </div>
        <div class="tabs-box tabs-options">
			<?php if(is_active_sidebar('woocommerce-widget')){
				dynamic_sidebar('woocommerce-widget');
			} ?>
            <div class="tab-content" data-aos="fade-up">
                <div id="all" class="tab-pane fade in active show">
                    <div class="row position-relative">
						<?php
							if ( woocommerce_product_loop() ) {



								if ( wc_get_loop_prop( 'total' ) ) {
									while ( have_posts() ) {
										the_post();

										/**
										 * Hook: woocommerce_shop_loop.
										 */
										do_action( 'woocommerce_shop_loop' );

										wc_get_template_part( 'content', 'product' );
									}
								}


								/**
								 * Hook: woocommerce_after_shop_loop.
								 *
								 * @hooked woocommerce_pagination - 10
								 */
								do_action( 'woocommerce_after_shop_loop' );
							} else {
								echo '<div class="col-12">';
								/**
								 * Hook: woocommerce_no_products_found.
								 *
								 * @hooked wc_no_products_found - 10
								 */
								do_action( 'woocommerce_no_products_found' );
								echo '</div>';
							}
						?>

                        <figure class="store_box_right_shape mb-0 position-absolute left_right_shape">
                            <img src="<?php bloginfo('template_url'); ?>/assets/images/our_store_box_right_shape.png" alt="" class="img-fluid">
                        </figure>
                    </div>

                    <!--<div class="light-theme simple-pagination">
                        <ul>
                            <li class="active">
                                <span class="current prev">«</span>
                            </li>
                            <li class="active">
                                <span class="current">1</span>
                            </li>
                            <li>
                                <a href="#page-2" class="page-link">2</a>
                            </li>
                            <li>
                                <a href="#page-3" class="page-link">3</a>
                            </li>
                            <li>
                                <a href="#page-2" class="page-link next">»</a>
                            </li>
                        </ul>
                    </div>-->
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
