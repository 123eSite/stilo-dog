<?php
get_header(); ?>
<?php if(have_posts()) : while(have_posts()) : the_post(); ?>
<!-- BANNER SECTION -->
<section class="banner-section">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-5 col-md-12 col-sm-12 col-12 text-lg-left text-center">
                    <div class="banner-section-content">
                        <h1 data-aos="fade-up"><?php the_field('titulo_banner'); ?></h1>
                        <p data-aos="fade-right"><?php the_field('texto_banner'); ?></p>
                        <div class="btn_wrapper" data-aos="fade-up">
                            <a class="text-decoration-none default-btn" href="<?php the_field('link_banner'); ?>"><?php the_field('titulo_botao_banner'); ?></a>
                        </div>
                        <!-- <figure class="banner_top_shape mb-0 position-absolute left_right_shape">
                            <img src="<?php bloginfo('template_url'); ?>/assets/images/banner_content_top_shape.png" alt="" class="img-fluid">
                        </figure> -->
                    </div>
                </div>
                <div class="col-lg-7 col-md-12 col-sm-12 col-12">
                    <div class="banner-section-image position-relative">
                        <figure class="banner-image mb-0">
                            <?php
                                $attachment_id = get_field('foto_4');
                                $imagem = wp_get_attachment_image_src( $attachment_id, 'carrossel' );
                            ?>
                            <img src="<?php echo $imagem[0]; ?>" alt="<?php the_field('titulo_banner'); ?>" class="img-fluid">
                        </figure>
                        <figure class="banner-background-image mb-0 position-absolute">
                            <img src="<?php bloginfo('template_url'); ?>/assets/images/banner_image_background.png" alt="" class="img-fluid">
                        </figure>
                        <figure class="banner-pink_foot_shape mb-0 position-absolute top_bottom_shape">
                            <img src="<?php bloginfo('template_url'); ?>/assets/images/banner_pink_foot_shape.png" alt="" class="img-fluid">
                        </figure>
                        <figure class="banner-green_foot_shape mb-0 position-absolute top_bottom_shape">
                            <img src="<?php bloginfo('template_url'); ?>/assets/images/banner_green_foot_shape.png" alt="" class="img-fluid">
                        </figure>
                        <div class="box satisfied_client_box position-absolute hover-effect">
                            <div class="image_wrapper">
                                <figure class="satisfied_client1 mb-0">
                                    <?php
                                        $attachment_id = get_field('foto_1_banner');
                                        $imagem = wp_get_attachment_image_src( $attachment_id, 'carrossel-fotos' );
                                    ?>
                                    <img src="<?php echo $imagem[0]; ?>" alt="<?php the_field('legenda_banner'); ?>" class="img-fluid hover-effect">
                                </figure>
                                <figure class="satisfied_client2 mb-0">
                                    <?php
                                        $attachment_id = get_field('foto_2_banner');
                                        $imagem = wp_get_attachment_image_src( $attachment_id, 'carrossel-fotos' );
                                    ?>
                                    <img src="<?php echo $imagem[0]; ?>" alt="<?php the_field('legenda_banner'); ?>" class="img-fluid hover-effect">
                                </figure>
                                <figure class="satisfied_client3 mb-0">
                                    <?php
                                        $attachment_id = get_field('foto_3_banner');
                                        $imagem = wp_get_attachment_image_src( $attachment_id, 'carrossel-fotos' );
                                    ?>
                                    <img src="<?php echo $imagem[0]; ?>" alt="<?php the_field('legenda_banner'); ?>" class="img-fluid hover-effect">
                                </figure>
                            </div>
                            <div class="box_content_wrapper">
                                <p class="box_heading text-size-16 mb-0 counter"><?php the_field('numero_banner'); ?></p>
                                <span>+</span>
                                <p class="content_line mb-0"><?php the_field('legenda_banner'); ?></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <figure class="banner_left_shape mb-0 position-absolute top_bottom_shape">
                <img src="<?php bloginfo('template_url'); ?>/assets/images/banner_bottom_shape.png" alt="" class="img-fluid">
            </figure>
        </div>
    </section>
</div>
<!-- SERVICES SECTION -->
<!-- OUR STORE SECTION -->
<?php
    // The tax query
    $tax_query[] = array(
        'taxonomy' => 'product_visibility',
        'field'    => 'name',
        'terms'    => 'featured',
        'operator' => 'IN', // or 'NOT IN' to exclude feature products
    );

    // The query
    $query = new WP_Query( array(
        'post_type'           => 'product',
        'post_status'         => 'publish',
        'ignore_sticky_posts' => 1,
        'posts_per_page'      => 4,
        'orderby'             => 'date',
        'order'               => 'desc',
        'tax_query'           => $tax_query
    ) );
?>
<?php if($query->have_posts()) : ?>
<section class="store_section position-relative bg-degradee">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-12">
                <div class="store_content">
                    <h6>Conheça nossos</h6>
                    <h2>Produtos em destaque</h2>
                </div>
            </div>
        </div>
        <div class="tabs-box tabs-options">
            <div class="tab-content" data-aos="fade-up">
                <div id="all" class="tab-pane fade in active show">
                    <div class="row position-relative">
                        <div class="owl-carousel owl-theme">
                            <?php while($query->have_posts()) : $query->the_post(); ?>
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
                            <?php endwhile; wp_reset_postdata(); ?>
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
<?php endif; ?>
<section class="services_section position-relative">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-12">
                <div class="services_content">
                    <h6><?php the_field('subtitulo_categorias'); ?></h6>
                    <h2><?php the_field('titulo_categorias'); ?></h2>
                </div>
            </div>
        </div>
        <div class="row position-relative" data-aos="fade-up">
            <div class="owl-carousel owl-theme">
                <?php if(have_rows('lista_categorias')) : while(have_rows('lista_categorias')) : the_row(); ?>
                <div class="item">
                    <div class="services_box box3">
                        <figure>
                            <?php
                            $attachment_id = get_sub_field('icone');
                            $imagem = wp_get_attachment_image_src( $attachment_id, 'icone' );
                            ?>
                            <img src="<?php echo $imagem[0]; ?>" alt="<?php the_sub_field('titulo'); ?>" class="img-fluid hover-effect">
                        </figure>
                        <h3><?php the_sub_field('titulo'); ?></h3>
                        <p class="text-size-18"><?php the_sub_field('texto'); ?></p>
                        <div class="btn_wrapper">
                            <a class="text-decoration-none" href="<?php the_sub_field('link'); ?>">Leia mais<i class="fa-solid fa-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
                <?php endwhile; endif; ?>
            </div>
        </div>
        <figure class="mb-0 services_left_shape position-absolute top_bottom_shape">
            <?php
                $attachment_id = get_field('foto_1_categorias');
                $imagem = wp_get_attachment_image_src( $attachment_id, 'categorias1' );
            ?>
            <img src="<?php echo $imagem[0]; ?>" alt="<?php the_sub_field('titulo'); ?>" class="img-fluid">
        </figure>
        <figure class="mb-0 services_right_shape position-absolute top_bottom_shape">
            <?php
                $attachment_id = get_field('foto_2_categorias');
                $imagem = wp_get_attachment_image_src( $attachment_id, 'categorias2' );
            ?>
            <img src="<?php echo $imagem[0]; ?>" alt="<?php the_sub_field('titulo'); ?>" class="img-fluid">
        </figure>
    </div>
</section>
<!-- OUR STORE SECTION -->
<section class="store_section position-relative bg-degradee">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-12">
                <div class="store_content">
                    <h6>Acompanhe as</h6>
                    <h2>Novidades</h2>
                </div>
            </div>
        </div>
        <div class="tabs-box tabs-options">
            <div class="tab-content" data-aos="fade-up">
                <div id="all" class="tab-pane fade in active show">
                    <div class="row position-relative">
                        <div class="owl-carousel owl-theme">
                            <?php query_posts('post_type=product&posts_per_page=8'); ?>
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
<!-- ABOUT US SECTION -->
<section class="about_section position-relative">
    <div class="container">
        <div class="row">
            <div class="col-lg-7 col-md-12 col-sm-12 col-12">
                <div class="about_images_wrapper position-relative">
                    <figure class="mb-0 about_main_image">
                        <?php
                            $attachment_id = get_field('imagem_1_quem');
                            $imagem = wp_get_attachment_image_src( $attachment_id, 'sobre2' );
                        ?>
                        <img src="<?php echo $imagem[0]; ?>" alt="<?php the_field('titulo_quem'); ?>" class="img-fluid">
                    </figure>
                    <figure class="mb-0 about_left_image position-absolute">
                        <?php
                            $attachment_id = get_field('imagem_2_quem');
                            $imagem = wp_get_attachment_image_src( $attachment_id, 'sobre1' );
                        ?>
                        <img src="<?php echo $imagem[0]; ?>" alt="<?php the_field('titulo_quem'); ?>" class="img-fluid">
                    </figure>
                    <div class="about_left_box_wrapper">
                        <figure class="mb-0">
                            <img src="<?php bloginfo('template_url'); ?>/assets/images/about_left_box_image.png" alt="" class="img-fluid hover-effect">
                        </figure>
                        <div class="left_box_content">
                            <div class="span_wrapper">
                                <span class="counter"><?php the_field('numero_quem'); ?></span>
                                <span class="plus"><?php the_field('numero_texto_quem'); ?></span>
                            </div>
                            <p class="text-size-18 mb-0"> <?php the_field('legenda_quem'); ?></p>
                        </div>
                    </div>
                    <figure class="mb-0 about_foot_shape position-absolute top_bottom_shape">
                        <img src="<?php bloginfo('template_url'); ?>/assets/images/about_foot_shape.png" alt="" class="img-fluid">
                    </figure>
                </div>
            </div>
            <div class="col-lg-5 col-md-12 col-sm-12 col-12">
                <div class="about_content" data-aos="fade-right">
                    <h6><?php the_field('subtitulo_quem'); ?></h6>
                    <h2><?php the_field('titulo_quem'); ?></h2>
                    <p class="text-size-18 about_first_p"><?php the_field('texto_quem'); ?></p>
                    <div class="btn_wrapper mt-3">
                        <a class="text-decoration-none default-btn" href="<?php the_field('link_quem'); ?>">Leia mais</a>
                    </div>
                    <figure class="mb-0 about_content_shape position-absolute left_right_shape">
                        <img src="<?php bloginfo('template_url'); ?>/assets/images/about_content_shape.png" alt="" class="img-fluid">
                    </figure>
                </div>
            </div>
        </div>
        <figure class="mb-0 about_left_shape position-absolute top_bottom_shape">
            <img src="<?php bloginfo('template_url'); ?>/assets/images/about_left_shape.png" alt="" class="img-fluid">
        </figure>
        <figure class="mb-0 about_right_shape position-absolute top_bottom_shape">
            <img src="<?php bloginfo('template_url'); ?>/assets/images/about_right_shape.png" alt="" class="img-fluid">
        </figure>
    </div>
</section>


<!-- TESTIMONIALS SECTION -->
<?php if(have_rows('lista_depoimentos')) :  ?>
<section class="testimonials_section position-relative">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-md-6 col-sm-12 col-12" data-aos="fade-right">
                <div class="testimonials_heading_content">
                    <h6><?php the_field('subtitulo_depoimentos'); ?></h6>
                    <h2><?php the_field('titulo_depoimentos'); ?></h2>
                </div>
                <div class="owl-carousel owl-theme">
                    <?php while(have_rows('lista_depoimentos')) : the_row(); ?>
                    <div class="item">
                        <div class="testimonials_content position-relative">
                            <p class="paragraph"><?php the_sub_field('texto'); ?></p>
                            <ul class="list-unstyled">
                                <li><i class="fa-solid fa-star"></i></li>
                                <li><i class="fa-solid fa-star"></i></li>
                                <li><i class="fa-solid fa-star"></i></li>
                                <li><i class="fa-solid fa-star"></i></li>
                                <li><i class="fa-solid fa-star"></i></li>
                            </ul>
                            <h3><?php the_sub_field('nome'); ?></h3>
                            <figure class="testimonials_quote mb-0 position-absolute">
                                <img src="<?php bloginfo('template_url'); ?>/assets/images/testimonials_quote.png" alt="" class="img-fluid">
                            </figure>
                        </div>
                    </div>
                    <?php endwhile; ?>
                </div>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-12 col-12 d-md-block d-none">
                <div class="testimonials_image">
                    <?php $count = 1; if(have_rows('fotos')) : while(have_rows('fotos')) : the_row(); ?>
                    <figure class="testimonials_image<?php echo $count; ?> mb-0 position-absolute">
                        <?php
                            $attachment_id = get_sub_field('imagem');
                            $imagem = wp_get_attachment_image_src( $attachment_id, 'depoimentos' . $count );
                        ?>
                        <img src="<?php bloginfo('template_url'); ?>/assets/images/testimonials_image<?php echo $count; ?>.jpg" alt="" class="img-fluid hover-effect">
                    </figure>
                    <?php $count++; endwhile; endif; ?>
                </div>
            </div>
        </div>
        <figure class="testimonials_left_shape mb-0 position-absolute top_bottom_shape">
            <img src="<?php bloginfo('template_url'); ?>/assets/images/testimonials_left_shape.png" alt="" class="img-fluid">
        </figure>
        <figure class="testimonials_right_shape mb-0 position-absolute top_bottom_shape">
            <img src="<?php bloginfo('template_url'); ?>/assets/images/testimonials_right_shape.png" alt="" class="img-fluid">
        </figure>
    </div>
</section>
<!-- STATISTICS_NEWSLETTER COMBO SECTION -->
<?php endif; ?>


<?php endwhile; endif; ?>
<?php get_footer(); ?>