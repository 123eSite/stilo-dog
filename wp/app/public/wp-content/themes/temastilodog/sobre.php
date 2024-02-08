<!-- ABOUT US SECTION -->
<section class="aboutus_section">
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

                    <figure class="mb-0 about_aboutus_shape position-absolute left_right_shape">
                        <img src="<?php bloginfo('template_url'); ?>/assets/images/about_aboutus_shape.png" alt="" class="img-fluid">
                    </figure>
                </div>
            </div>
            <div class="col-lg-5 col-md-12 col-sm-12 col-12">
                <div class="about_content" data-aos="fade-right">
                    <h6><?php the_field('subtitulo_quem'); ?></h6>
                    <h2><?php the_field('titulo_quem'); ?></h2>
                    <?php the_field('texto_quem'); ?>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- CHOOSE US SECTION -->
<section class="choose_us_section">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-md-12 col-sm-12 col-12">
                <div class="choose_us_content" data-aos="fade-right">
                    <h6><?php the_field('subtitulo_bloco'); ?></h6>
                    <h2><?php the_field('titulo_bloco'); ?></h2>
                    <?php the_field('texto_bloco'); ?>
                </div>
            </div>
            <div class="col-lg-6 col-md-12 col-sm-12 col-12">
                <div class="row position-relative">
                    <?php if(have_rows('lista_bloco')) : while(have_rows('lista_bloco')) : the_row(); ?>
                    <div class="col-lg-6 col-md-6 col-sm-6 col-12">
                        <div class="choose_us_box box1">
                            <figure>
                                <?php
                                $attachment_id = get_sub_field('icone');
                                $imagem = wp_get_attachment_image_src( $attachment_id, 'icone' );
                                ?>
                                <img src="<?php echo $imagem[0]; ?>" alt="<?php the_field('titulo_bloco'); ?>" class="img-fluid hover-effect">
                            </figure>
                            <h3><?php the_sub_field('titulo'); ?></h3>
                            <p class="text-size-18"><?php the_sub_field('texto'); ?></p>
                        </div>
                    </div>
                    <?php endwhile; endif; ?>
                    <figure class="mb-0 choose_us_content_shape position-absolute left_right_shape">
                        <img src="<?php bloginfo('template_url'); ?>/assets/images/choose_us_content_shape.png" alt="" class="img-fluid">
                    </figure>
                </div>
            </div>
        </div>

        <figure class="mb-0 choose_us_right_shape position-absolute top_bottom_shape">
            <img src="<?php bloginfo('template_url'); ?>/assets/images/choose_us_right_shape.png" alt="" class="img-fluid">
        </figure>
    </div>
</section>
<!-- OUR TEAM SECTION -->