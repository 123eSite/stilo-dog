<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <title><?php wp_title(); ?></title>
    <!-- /SEO Ultimate -->
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=0">
    <meta charset="utf-8">
    <link rel="apple-touch-icon" sizes="57x57" href="<?php bloginfo('template_url'); ?>/assets/images/favicon/apple-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="60x60" href="<?php bloginfo('template_url'); ?>/assets/images/favicon/apple-icon-60x60.png">
    <link rel="apple-touch-icon" sizes="72x72" href="<?php bloginfo('template_url'); ?>/assets/images/favicon/apple-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="76x76" href="<?php bloginfo('template_url'); ?>/assets/images/favicon/apple-icon-76x76.png">
    <link rel="apple-touch-icon" sizes="114x114" href="<?php bloginfo('template_url'); ?>/assets/images/favicon/apple-icon-114x114.png">
    <link rel="apple-touch-icon" sizes="120x120" href="<?php bloginfo('template_url'); ?>/assets/images/favicon/apple-icon-120x120.png">
    <link rel="apple-touch-icon" sizes="144x144" href="<?php bloginfo('template_url'); ?>/assets/images/favicon/apple-icon-144x144.png">
    <link rel="apple-touch-icon" sizes="152x152" href="<?php bloginfo('template_url'); ?>/assets/images/favicon/apple-icon-152x152.png">
    <link rel="apple-touch-icon" sizes="180x180" href="<?php bloginfo('template_url'); ?>/assets/images/favicon/apple-icon-180x180.png">
    <link rel="icon" type="image/png" sizes="192x192"  href="<?php bloginfo('template_url'); ?>/assets/images/favicon/android-icon-192x192.png">
    <link rel="icon" type="image/png" sizes="32x32" href="<?php bloginfo('template_url'); ?>/assets/images/favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="96x96" href="<?php bloginfo('template_url'); ?>/assets/images/favicon/favicon-96x96.png">
    <link rel="icon" type="image/png" sizes="16x16" href="<?php bloginfo('template_url'); ?>/assets/images/favicon/favicon-16x16.png">
    <link rel="manifest" href="<?php bloginfo('template_url'); ?>/assets/images/favicon/manifest.json">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="<?php bloginfo('template_url'); ?>/ms-icon-144x144.png">
    <meta name="theme-color" content="#ffffff">
    <!-- Latest compiled and minified CSS -->
    <link href="<?php bloginfo('template_url'); ?>/assets/bootstrap/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/assets/js/bootstrap.min.js">
    <!-- Font Awesome link -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
    <!-- StyleSheet link CSS -->
    <link href="<?php bloginfo('template_url'); ?>/assets/css/fancybox.min.css" rel="stylesheet" type="text/css">
    <link href="<?php bloginfo('template_url'); ?>/assets/css/style.css?<?php echo date('l jS \of F Y h:i:s A'); ?>" rel="stylesheet" type="text/css">
    <link href="<?php bloginfo('template_url'); ?>/assets/css/swiper-bundle.min.css" rel="stylesheet" type="text/css">
    <link href="<?php bloginfo('template_url'); ?>/assets/css/mediaqueries.css?<?php echo date('l jS \of F Y h:i:s A'); ?>" rel="stylesheet" type="text/css">
    <link href="<?php bloginfo('template_url'); ?>/assets/css/owl.carousel.min.css" rel="stylesheet" type="text/css">
    <link href="<?php bloginfo('template_url'); ?>/assets/css/owl.theme.default.min.css" rel="stylesheet" type="text/css">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/magnific-popup.css">
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div class="<?php if(is_page('home')) : ?>banner-section-outer<?php else : ?>sub-banner-section-outer<?php endif; ?>">
    <header>
        <div class="main_header">
            <div class="container-fluid">
                <nav class="navbar navbar-expand-lg navbar-light p-0">
                    <a class="navbar-brand" href="<?php bloginfo('url'); ?>"><figure class="mb-0"><img width="150" src="<?php bloginfo('template_url'); ?>/assets/images/stilo-dog.png" alt="" class="img-fluid"></figure></a>
                    <button class="navbar-toggler collapsed" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                    <span class="navbar-toggler-icon"></span>
                    <span class="navbar-toggler-icon"></span>
                    </button>
                    <a href="https://wa.me/+55<?php echo preg_replace("/[\s\(\)-]/", "", get_field('telefone','options'));	?>" class="outer_div mobile mr-2" target="_blank">
                        <figure class="mb-0">
                            <i class="fab fa-whatsapp"></i>
                        </figure>
                    </a>
                    <a href="<?php bloginfo('url'); ?>/carrinho" class="outer_div mobile cart">
                            <span class="count-cart">
                                <?php global $woocommerce; echo $woocommerce->cart->cart_contents_count; ?>
                            </span>
                            <figure class="mb-0">
                                <i class="fa-solid fa-cart-shopping"></i>
                            </figure>
                        </a>
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <?php
                            wp_nav_menu(array(
                                'theme_location' => 'top-menu',
                                'container' => false,
                                'menu_class' => '',
                                'fallback_cb' => '__return_false',
                                'items_wrap' => '<ul id="%1$s" class="navbar-nav %2$s">%3$s</ul>',
                                'depth' => 2,
                                'walker' => new bootstrap_5_wp_nav_menu_walker()
                            ));
                        ?>
                        <a href="https://wa.me/+55<?php echo preg_replace("/[\s\(\)-]/", "", get_field('telefone','options'));	?>" class="outer_div mr-2" target="_blank">
                            <figure class="mb-0">
                                <i class="fab fa-whatsapp"></i>
                            </figure>
                        </a>
                        <a href="<?php bloginfo('url'); ?>/carrinho" class="outer_div cart">
                            <span class="count-cart">
                                <?php global $woocommerce; echo $woocommerce->cart->cart_contents_count; ?>
                            </span>
                            <figure class="mb-0">
                                <i class="fa-solid fa-cart-shopping"></i>
                            </figure>
                        </a>
                    </div>
                </nav>
            </div>
        </div>
    </header>
    <!-- BANNER SECTION -->