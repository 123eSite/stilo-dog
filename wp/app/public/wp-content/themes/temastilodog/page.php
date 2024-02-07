<?php get_header(); ?>
<?php if(have_posts()) : while(have_posts()) : the_post(); ?>
 <!-- SUB BANNER SECTION -->
 <section class="banner-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-2 col-md-12 col-sm-12 col-12 d-lg-block d-none"></div>
                <div class="col-lg-8 col-md-12 col-sm-12 col-12 text-center">
                    <div class="banner-section-content">
                        <h1 data-aos="fade-up"><?php the_title(); ?></h1>
                        <div class="btn_wrapper" data-aos="fade-up">
                            <span>Home </span><span class="slash">/</span><span class="sub_span"> <?php the_title(); ?></span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-2 col-md-12 col-sm-12 col-12 d-lg-block d-none"></div>
            </div>
        </div>
    </section>
</div>
<?php if(is_page('quem-somos')) : ?>
    <?php get_template_part('sobre'); ?>
<?php elseif(is_page('contato')) : ?>
    <?php get_template_part('contato'); ?>
<?php else : ?>
    <?php get_template_part('padrao'); ?>
<?php endif; ?>
<?php endwhile; endif; ?>
<?php get_footer(); ?>