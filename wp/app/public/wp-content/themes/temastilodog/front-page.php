<?php
get_header(); ?>
<?php if(have_posts()) : while(have_posts()) : the_post(); ?>
<!-- BANNER SECTION -->
<section class="banner-section">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-5 col-md-12 col-sm-12 col-12 text-lg-left text-center">
                    <div class="banner-section-content">
                        <h1 data-aos="fade-up">Vista seu melhor amigo com amor e estilo</h1>
                        <p data-aos="fade-right">O lugar onde o carinho encontra a moda canina!</p>
                        <div class="btn_wrapper" data-aos="fade-up">
                            <a class="text-decoration-none default-btn" href="#">Conheça nosso catálogo</a>
                        </div>
                        <!-- <figure class="banner_top_shape mb-0 position-absolute left_right_shape">
                            <img src="<?php bloginfo('template_url'); ?>/assets/images/banner_content_top_shape.png" alt="" class="img-fluid">
                        </figure> -->
                    </div>
                </div>
                <div class="col-lg-7 col-md-12 col-sm-12 col-12">
                    <div class="banner-section-image position-relative">
                        <figure class="banner-image mb-0">
                            <img src="<?php bloginfo('template_url'); ?>/assets/images/banner_image.png" alt="" class="img-fluid">
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
                        <!-- <div class="box vaccination_box position-absolute hover-effect">
                            <figure class="mb-0">
                                <img src="<?php bloginfo('template_url'); ?>/assets/images/string.png" alt="" class="img-fluid hover-effect">
                            </figure>
                            <div class="box_content_wrapper">
                                <p class="box_heading text-size-16 mb-0">Vaccination</p>
                                <p class="content_line mb-0">Cats & Dog’s</p>
                            </div>
                        </div> -->
                        <!-- <div class="box pet_training_box position-absolute hover-effect">
                            <figure class="mb-0">
                                <img src="<?php bloginfo('template_url'); ?>/assets/images/banner_pet_training_dog.png" alt="" class="img-fluid hover-effect">
                            </figure>
                            <div class="box_content_wrapper">
                                <p class="box_heading text-size-16 mb-0">Pet’s Training</p>
                                <p class="content_line mb-0">Cats & Dog’s</p>
                            </div>
                        </div> -->
                        <div class="box satisfied_client_box position-absolute hover-effect">
                            <div class="image_wrapper">
                                <figure class="satisfied_client1 mb-0">
                                    <img src="<?php bloginfo('template_url'); ?>/assets/images/banner_satisfied_client2.png" alt="" class="img-fluid hover-effect">
                                </figure>
                                <figure class="satisfied_client2 mb-0">
                                    <img src="<?php bloginfo('template_url'); ?>/assets/images/banner_satisfied_client3.png" alt="" class="img-fluid hover-effect">
                                </figure>
                                <figure class="satisfied_client3 mb-0">
                                    <img src="<?php bloginfo('template_url'); ?>/assets/images/banner_satisfied_client1.png" alt="" class="img-fluid hover-effect">
                                </figure>
                            </div>
                            <div class="box_content_wrapper">
                                <p class="box_heading text-size-16 mb-0 counter">1125</p>
                                <span>+</span>
                                <p class="content_line mb-0">Pets satisfeitos</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <figure class="banner_left_shape mb-0 position-absolute top_bottom_shape">
                <img src="<?php bloginfo('template_url'); ?>/assets/images/banner_bottom_shape.png" alt="" class="img-fluid">
            </figure>
            <!-- <figure class="banner_right_shape mb-0 position-absolute top_bottom_shape">
                <img src="<?php bloginfo('template_url'); ?>/assets/images/banner_top_shape.png" alt="" class="img-fluid">
            </figure> -->
        </div>
    </section>
</div>
<!-- SERVICES SECTION -->
<!-- OUR STORE SECTION -->
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
                            <div class="item">
                                <div class="store_box">
                                    <div class="store_image_box">
                                        <figure class="mb-0">
                                            <img src="<?php bloginfo('template_url'); ?>/assets/images/our_store_image1.png" alt="" class="img-fluid">
                                        </figure>
                                        <i class="fa-regular fa-heart"></i>
                                    </div>
                                    <div class="store_box_content">
                                        <div class="text_rate_wrapper">
                                            <div class="text_wrapper">
                                                <h5>Nome do produto</h5>
                                                <p class="text-size-16">Categoria</p>
                                            </div>

                                        </div>
                                        <div class="price_cart_wrapper">
                                            <div class="price_wrapper">
                                                <span class="dollar">R$</span>
                                                <span>120</span>
                                                <span>.00</span>
                                            </div>
                                            <a href="./cart.html">
                                                <figure class="cart mb-0">
                                                    <img src="<?php bloginfo('template_url'); ?>/assets/images/cart.png" alt="" class="img-fluid">
                                                </figure>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="store_box">
                                    <div class="store_image_box">
                                        <figure class="mb-0">
                                            <img src="<?php bloginfo('template_url'); ?>/assets/images/our_store_image2.png" alt="" class="img-fluid">
                                        </figure>
                                        <i class="fa-regular fa-heart"></i>
                                    </div>
                                    <div class="store_box_content">
                                        <div class="text_rate_wrapper">
                                            <div class="text_wrapper">
                                                <h5>Nome do produto</h5>
                                                <p class="text-size-16">Categoria</p>
                                            </div>

                                        </div>
                                        <div class="price_cart_wrapper">
                                            <div class="price_wrapper">
                                                <span class="dollar">R$</span>
                                                <span>120</span>
                                                <span>.00</span>
                                            </div>
                                            <a href="./cart.html">
                                                <figure class="cart mb-0">
                                                    <img src="<?php bloginfo('template_url'); ?>/assets/images/cart.png" alt="" class="img-fluid">
                                                </figure>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="store_box">
                                    <div class="store_image_box">
                                        <figure class="mb-0">
                                            <img src="<?php bloginfo('template_url'); ?>/assets/images/our_store_image3.png" alt="" class="img-fluid">
                                        </figure>
                                        <i class="fa-regular fa-heart"></i>
                                    </div>
                                    <div class="store_box_content">
                                        <div class="text_rate_wrapper">
                                            <div class="text_wrapper">
                                                <h5>Nome do produto</h5>
                                                <p class="text-size-16">Categoria</p>
                                            </div>

                                        </div>
                                        <div class="price_cart_wrapper">
                                            <div class="price_wrapper">
                                                <span class="dollar">R$</span>
                                                <span>120</span>
                                                <span>.00</span>
                                            </div>
                                            <a href="./cart.html">
                                                <figure class="cart mb-0">
                                                    <img src="<?php bloginfo('template_url'); ?>/assets/images/cart.png" alt="" class="img-fluid">
                                                </figure>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="store_box">
                                    <div class="store_image_box">
                                        <figure class="mb-0">
                                            <img src="<?php bloginfo('template_url'); ?>/assets/images/our_store_image4.png" alt="" class="img-fluid">
                                        </figure>
                                        <i class="fa-regular fa-heart"></i>
                                    </div>
                                    <div class="store_box_content">
                                        <div class="text_rate_wrapper">
                                            <div class="text_wrapper">
                                                <h5>Nome do produto</h5>
                                                <p class="text-size-16">Categoria</p>
                                            </div>

                                        </div>
                                        <div class="price_cart_wrapper">
                                            <div class="price_wrapper">
                                                <span class="dollar">R$</span>
                                                <span>120</span>
                                                <span>.00</span>
                                            </div>
                                            <a href="./cart.html">
                                                <figure class="cart mb-0">
                                                    <img src="<?php bloginfo('template_url'); ?>/assets/images/cart.png" alt="" class="img-fluid">
                                                </figure>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="store_box">
                                    <div class="store_image_box">
                                        <figure class="mb-0">
                                            <img src="<?php bloginfo('template_url'); ?>/assets/images/our_store_image5.png" alt="" class="img-fluid">
                                        </figure>
                                        <i class="fa-regular fa-heart"></i>
                                    </div>
                                    <div class="store_box_content">
                                        <div class="text_rate_wrapper">
                                            <div class="text_wrapper">
                                                <h5>Nome do produto</h5>
                                                <p class="text-size-16">Categoria</p>
                                            </div>

                                        </div>
                                        <div class="price_cart_wrapper">
                                            <div class="price_wrapper">
                                                <span class="dollar">R$</span>
                                                <span>120</span>
                                                <span>.00</span>
                                            </div>
                                            <a href="./cart.html">
                                                <figure class="cart mb-0">
                                                    <img src="<?php bloginfo('template_url'); ?>/assets/images/cart.png" alt="" class="img-fluid">
                                                </figure>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>

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
<section class="services_section position-relative">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-12">
                <div class="services_content">
                    <h6>Categorias</h6>
                    <h2>Separamos para ajudar você a encontrar o que precisa</h2>
                </div>
            </div>
        </div>
        <div class="row position-relative" data-aos="fade-up">
            <div class="owl-carousel owl-theme">
                <div class="item">
                    <div class="services_box box3">
                        <figure>
                            <img src="<?php bloginfo('template_url'); ?>/assets/images/icon-macho.png" alt="" class="img-fluid hover-effect">
                        </figure>
                        <h3>Macho</h3>
                        <p class="text-size-18">Quam nihil molestiae vel illum rui dolorem em fugiat voluptas nulla...</p>
                        <div class="btn_wrapper">
                            <a class="text-decoration-none" href="./services.html">Leia mais<i class="fa-solid fa-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="services_box box3">
                        <figure>
                            <img src="<?php bloginfo('template_url'); ?>/assets/images/icon-femea.png" alt="" class="img-fluid hover-effect">
                        </figure>
                        <h3>Fêmea</h3>
                        <p class="text-size-18">Ruam nihil molestiae vel illum rui dolorem em fugiat voluptas nulla...</p>
                        <div class="btn_wrapper">
                            <a class="text-decoration-none" href="./services.html">Leia mais<i class="fa-solid fa-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="services_box box3">
                        <figure>
                            <img src="<?php bloginfo('template_url'); ?>/assets/images/icon-inverno.png" alt="" class="img-fluid hover-effect">
                        </figure>
                        <h3>Inverno</h3>
                        <p class="text-size-18">Guam nihil molestiae vel illum rui dolorem em fugiat voluptas nulla...</p>
                        <div class="btn_wrapper">
                            <a class="text-decoration-none" href="./services.html">Leia mais<i class="fa-solid fa-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="services_box box3">
                        <figure>
                            <img src="<?php bloginfo('template_url'); ?>/assets/images/icon-verao.png" alt="" class="img-fluid hover-effect">
                        </figure>
                        <h3>Verão</h3>
                        <p class="text-size-18">Euam nihil molestiae vel illum rui dolorem em fugiat voluptas nulla...</p>
                        <div class="btn_wrapper">
                            <a class="text-decoration-none" href="./services.html">Leia mais<i class="fa-solid fa-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="services_box box3">
                        <figure>
                            <img src="<?php bloginfo('template_url'); ?>/assets/images/icon-roupa-cirurgica.png" alt="" class="img-fluid hover-effect">
                        </figure>
                        <h3>Roupa Cirurgica</h3>
                        <p class="text-size-18">Quam nihil molestiae vel illum rui dolorem em fugiat voluptas nulla...</p>
                        <div class="btn_wrapper">
                            <a class="text-decoration-none" href="./services.html">Leia mais<i class="fa-solid fa-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="services_box box3">
                        <figure>
                            <img src="<?php bloginfo('template_url'); ?>/assets/images/icon-acessorios.png" alt="" class="img-fluid hover-effect">
                        </figure>
                        <h3>Acessórios</h3>
                        <p class="text-size-18">Ruam nihil molestiae vel illum rui dolorem em fugiat voluptas nulla...</p>
                        <div class="btn_wrapper">
                            <a class="text-decoration-none" href="./services.html">Leia mais<i class="fa-solid fa-arrow-right"></i></a>
                        </div>
                    </div>
                </div>

            </div>
        </div>
        <figure class="mb-0 services_left_shape position-absolute top_bottom_shape">
            <img src="<?php bloginfo('template_url'); ?>/assets/images/services_cat_shape.png" alt="" class="img-fluid">
        </figure>
        <figure class="mb-0 services_right_shape position-absolute top_bottom_shape">
            <img src="<?php bloginfo('template_url'); ?>/assets/images/services_dog_shape.png" alt="" class="img-fluid">
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
                            <div class="item">
                                <div class="store_box">
                                    <div class="store_image_box">
                                        <figure class="mb-0">
                                            <img src="<?php bloginfo('template_url'); ?>/assets/images/our_store_image5.png" alt="" class="img-fluid">
                                        </figure>
                                        <i class="fa-regular fa-heart"></i>
                                    </div>
                                    <div class="store_box_content">
                                        <div class="text_rate_wrapper">
                                            <div class="text_wrapper">
                                                <h5>Nome do produto</h5>
                                                <p class="text-size-16">Categoria</p>
                                            </div>

                                        </div>
                                        <div class="price_cart_wrapper">
                                            <div class="price_wrapper">
                                                <span class="dollar">R$</span>
                                                <span>120</span>
                                                <span>.00</span>
                                            </div>
                                            <a href="./cart.html">
                                                <figure class="cart mb-0">
                                                    <img src="<?php bloginfo('template_url'); ?>/assets/images/cart.png" alt="" class="img-fluid">
                                                </figure>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="store_box">
                                    <div class="store_image_box">
                                        <figure class="mb-0">
                                            <img src="<?php bloginfo('template_url'); ?>/assets/images/our_store_image6.png" alt="" class="img-fluid">
                                        </figure>
                                        <i class="fa-regular fa-heart"></i>
                                    </div>
                                    <div class="store_box_content">
                                        <div class="text_rate_wrapper">
                                            <div class="text_wrapper">
                                                <h5>Nome do produto</h5>
                                                <p class="text-size-16">Categoria</p>
                                            </div>

                                        </div>
                                        <div class="price_cart_wrapper">
                                            <div class="price_wrapper">
                                                <span class="dollar">R$</span>
                                                <span>120</span>
                                                <span>.00</span>
                                            </div>
                                            <a href="./cart.html">
                                                <figure class="cart mb-0">
                                                    <img src="<?php bloginfo('template_url'); ?>/assets/images/cart.png" alt="" class="img-fluid">
                                                </figure>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="store_box">
                                    <div class="store_image_box">
                                        <figure class="mb-0">
                                            <img src="<?php bloginfo('template_url'); ?>/assets/images/our_store_image7.png" alt="" class="img-fluid">
                                        </figure>
                                        <i class="fa-regular fa-heart"></i>
                                    </div>
                                    <div class="store_box_content">
                                        <div class="text_rate_wrapper">
                                            <div class="text_wrapper">
                                                <h5>Nome do produto</h5>
                                                <p class="text-size-16">Categoria</p>
                                            </div>

                                        </div>
                                        <div class="price_cart_wrapper">
                                            <div class="price_wrapper">
                                                <span class="dollar">R$</span>
                                                <span>120</span>
                                                <span>.00</span>
                                            </div>
                                            <a href="./cart.html">
                                                <figure class="cart mb-0">
                                                    <img src="<?php bloginfo('template_url'); ?>/assets/images/cart.png" alt="" class="img-fluid">
                                                </figure>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="store_box">
                                    <div class="store_image_box">
                                        <figure class="mb-0">
                                            <img src="<?php bloginfo('template_url'); ?>/assets/images/our_store_image8.png" alt="" class="img-fluid">
                                        </figure>
                                        <i class="fa-regular fa-heart"></i>
                                    </div>
                                    <div class="store_box_content">
                                        <div class="text_rate_wrapper">
                                            <div class="text_wrapper">
                                                <h5>Nome do produto</h5>
                                                <p class="text-size-16">Categoria</p>
                                            </div>

                                        </div>
                                        <div class="price_cart_wrapper">
                                            <div class="price_wrapper">
                                                <span class="dollar">R$</span>
                                                <span>120</span>
                                                <span>.00</span>
                                            </div>
                                            <a href="./cart.html">
                                                <figure class="cart mb-0">
                                                    <img src="<?php bloginfo('template_url'); ?>/assets/images/cart.png" alt="" class="img-fluid">
                                                </figure>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="store_box">
                                    <div class="store_image_box">
                                        <figure class="mb-0">
                                            <img src="<?php bloginfo('template_url'); ?>/assets/images/our_store_image5.png" alt="" class="img-fluid">
                                        </figure>
                                        <i class="fa-regular fa-heart"></i>
                                    </div>
                                    <div class="store_box_content">
                                        <div class="text_rate_wrapper">
                                            <div class="text_wrapper">
                                                <h5>Nome do produto</h5>
                                                <p class="text-size-16">Categoria</p>
                                            </div>

                                        </div>
                                        <div class="price_cart_wrapper">
                                            <div class="price_wrapper">
                                                <span class="dollar">R$</span>
                                                <span>120</span>
                                                <span>.00</span>
                                            </div>
                                            <a href="./cart.html">
                                                <figure class="cart mb-0">
                                                    <img src="<?php bloginfo('template_url'); ?>/assets/images/cart.png" alt="" class="img-fluid">
                                                </figure>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>

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
                        <img src="<?php bloginfo('template_url'); ?>/assets/images/about_main_image.jpg" alt="" class="img-fluid">
                    </figure>
                    <figure class="mb-0 about_left_image position-absolute">
                        <img src="<?php bloginfo('template_url'); ?>/assets/images/about_left_image.jpg" alt="" class="img-fluid">
                    </figure>
                    <div class="about_left_box_wrapper">
                        <figure class="mb-0">
                            <img src="<?php bloginfo('template_url'); ?>/assets/images/about_left_box_image.png" alt="" class="img-fluid hover-effect">
                        </figure>
                        <div class="left_box_content">
                            <div class="span_wrapper">
                                <span class="counter">25</span>
                                <span class="plus">anos</span>
                            </div>
                            <p class="text-size-18 mb-0"> encantando pets</p>
                        </div>
                    </div>
                    <figure class="mb-0 about_foot_shape position-absolute top_bottom_shape">
                        <img src="<?php bloginfo('template_url'); ?>/assets/images/about_foot_shape.png" alt="" class="img-fluid">
                    </figure>
                </div>
            </div>
            <div class="col-lg-5 col-md-12 col-sm-12 col-12">
                <div class="about_content" data-aos="fade-right">
                    <h6>Quem Somos</h6>
                    <h2>Conheça nossa história de paixão pelos cães e dedicação à moda canina!</h2>
                    <p class="text-size-18 about_first_p">Em ipsum dolor sit amet, consectetur adipiscing elit sed do eiusmod tempor incididunt ut labore et dolore magna aliqua nulla. </p>
                    <div class="btn_wrapper mt-3">
                        <a class="text-decoration-none default-btn" href="./about.html">Leia mais</a>
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
<section class="testimonials_section position-relative">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-md-6 col-sm-12 col-12" data-aos="fade-right">
                <div class="testimonials_heading_content">
                    <h6>Depoimentos</h6>
                    <h2>Veja o que nossos clientes e seus fiéis companheiros têm a dizer!</h2>
                </div>
                <div class="owl-carousel owl-theme">
                    <div class="item">
                        <div class="testimonials_content position-relative">
                            <p class="paragraph">Nemo enim ipsam voluptatem quia voluptas sit na aut odit aut fugit, sed quia consearuntuo magni lores eos qui ratione volutatem sequi nesciuntpor auisuam est rui dolorem ipsum.</p>
                            <ul class="list-unstyled">
                                <li><i class="fa-solid fa-star"></i></li>
                                <li><i class="fa-solid fa-star"></i></li>
                                <li><i class="fa-solid fa-star"></i></li>
                                <li><i class="fa-solid fa-star"></i></li>
                                <li><i class="fa-solid fa-star"></i></li>
                            </ul>
                            <h3>Nome do dono</h3>
                            <figure class="testimonials_quote mb-0 position-absolute">
                                <img src="<?php bloginfo('template_url'); ?>/assets/images/testimonials_quote.png" alt="" class="img-fluid">
                            </figure>
                        </div>
                    </div>
                    <div class="item">
                        <div class="testimonials_content position-relative">
                            <p class="paragraph">Nemo enim ipsam voluptatem quia voluptas sit na aut odit aut fugit, sed quia consearuntuo magni lores eos qui ratione volutatem sequi nesciuntpor auisuam est rui dolorem ipsum.</p>
                            <ul class="list-unstyled">
                                <li><i class="fa-solid fa-star"></i></li>
                                <li><i class="fa-solid fa-star"></i></li>
                                <li><i class="fa-solid fa-star"></i></li>
                                <li><i class="fa-solid fa-star"></i></li>
                                <li><i class="fa-solid fa-star"></i></li>
                            </ul>
                            <h3>Nome do dono</h3>
                            <figure class="testimonials_quote mb-0 position-absolute">
                                <img src="<?php bloginfo('template_url'); ?>/assets/images/testimonials_quote.png" alt="" class="img-fluid">
                            </figure>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-12 col-12 d-md-block d-none">
                <div class="testimonials_image">
                    <figure class="testimonials_image1 mb-0 position-absolute">
                        <img src="<?php bloginfo('template_url'); ?>/assets/images/testimonials_image1.jpg" alt="" class="img-fluid hover-effect">
                    </figure>
                    <figure class="testimonials_image2 mb-0 position-absolute">
                        <img src="<?php bloginfo('template_url'); ?>/assets/images/testimonials_image2.jpg" alt="" class="img-fluid hover-effect">
                    </figure>
                    <figure class="testimonials_image3 mb-0 position-absolute">
                        <img src="<?php bloginfo('template_url'); ?>/assets/images/testimonials_image3.jpg" alt="" class="img-fluid hover-effect">
                    </figure>
                    <figure class="testimonials_image4 mb-0 position-absolute">
                        <img src="<?php bloginfo('template_url'); ?>/assets/images/testimonials_image4.jpg" alt="" class="img-fluid hover-effect">
                    </figure>
                    <figure class="testimonials_image5 mb-0 position-absolute">
                        <img src="<?php bloginfo('template_url'); ?>/assets/images/testimonials_image5.jpg" alt="" class="img-fluid hover-effect">
                    </figure>
                    <figure class="testimonials_image6 mb-0 position-absolute">
                        <img src="<?php bloginfo('template_url'); ?>/assets/images/testimonials_image6.jpg" alt="" class="img-fluid hover-effect">
                    </figure>
                    <figure class="testimonials_circle1 mb-0 position-absolute">
                        <img src="<?php bloginfo('template_url'); ?>/assets/images/testimonials_circle1.png" alt="" class="img-fluid">
                    </figure>
                    <figure class="testimonials_circle2 mb-0 position-absolute">
                        <img src="<?php bloginfo('template_url'); ?>/assets/images/testimonials_circle2.png" alt="" class="img-fluid">
                    </figure>
                    <figure class="testimonials_circle3 mb-0 position-absolute">
                        <img src="<?php bloginfo('template_url'); ?>/assets/images/testimonials_circle3.png" alt="" class="img-fluid">
                    </figure>
                    <figure class="testimonials_rightside_shape mb-0 position-absolute left_right_shape">
                        <img src="<?php bloginfo('template_url'); ?>/assets/images/testimonials_rightside_shape.png" alt="" class="img-fluid">
                    </figure>
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


<?php endwhile; endif; ?>
<?php get_footer(); ?>