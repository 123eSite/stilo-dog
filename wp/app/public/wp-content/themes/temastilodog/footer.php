<!-- FOOTER SECTION -->
<section class="footer-section">
    <div class="container">
        <div class="middle-portion">
            <div class="row">
                <div class="col-lg-4 col-md-5 col-sm-6 col-12">
                    <div class="about_col">
                        <a href="./index.html">
                            <figure>
                                <img width="150" src="<?php bloginfo('template_url'); ?>/assets/images/stilo-dog.png" alt="" class="img-fluid">
                            </figure>
                        </a>
                        <p><?php the_field('empresa','options'); ?></p>
                        <div class="headphone_wrapper">
                            <figure class="mb-0">
                                <img src="<?php bloginfo('template_url'); ?>/assets/images/footer_headphone.png" alt="" class="img-fluid">
                            </figure>
                            <div class="headphone_content">
                                <a href="https://wa.me/+55<?php echo preg_replace("/[\s\(\)-]/", "", get_field('telefone','options'));	?>" class="text-decoration-none d-block" target="_blank"><?php the_field('telefone','options'); ?></a>
                                <span>Mais informações. Entre em contato.</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-2 col-md-3 col-sm-6 col-12 d-lg-block d-none">
                    <div class="hours_col">
                        <h3>Atendimento</h3>
                        <ul class="list-unstyled">
                            <?php if(have_rows('atendimento','options')) : while(have_rows('atendimento','options')) : the_row(); ?>
                            <li>
                                <p><?php the_sub_field('titulo'); ?></p>
                            </li>
                            <li>
                                <span><?php the_sub_field('horario'); ?></span>
                            </li>
                            <?php endwhile; endif; ?>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-6 col-12 d-md-block d-none">
                    <div class="links_col">
                        <h3>Suporte</h3>
                        <?php
                            wp_nav_menu(array(
                                'theme_location' => 'footer-menu',
                                'container' => false,
                                'menu_class' => 'list-unstyled',
                                'before' => '<i class="fa-solid fa-angle-right"></i>'
                            ));
                        ?>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6 col-12 d-sm-block d-none">
                    <div class="contact_col">
                        <h3>Informações e contatos</h3>
                        <ul class="list-unstyled">
                            <li>
                                <p>Endereço:</p>
                            </li>
                            <li>
                                <span><?php the_field('endereco','options'); ?></span>
                            </li>
                            <li>
                                <p>E-mail:</p>
                            </li>
                            <li class="mail">
                                <a href="mailto:<?php the_field('email','options'); ?> class="text-decoration-none"><?php the_field('email','options'); ?></a>
                            </li>
                        </ul>
                        <ul class="list-unstyled">
                            <li class="icons"><a href="#"><i class="fa-brands fa-facebook-f hover-effect" aria-hidden="true"></i></a></li>
                            <li class="icons"><a href="#"><i class="fa-brands fa-youtube hover-effect" aria-hidden="true"></i></a></li>
                            <li class="icons"><a href="#"><i class="fa-brands fa-instagram mr-0 hover-effect" aria-hidden="true"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="bottom-portion">
        <div class="col-12">
            <div class="copyright">
                <p>Stilo Dog © 2023 - Todos direito reservados. <a href="http://123esite.com.br" target="_blank" rel="noopener noreferrer">123esite</a></p>
            </div>
        </div>
    </div>
</section>
<!-- Latest compiled JavaScript -->
<script src="<?php bloginfo('template_url'); ?>/assets/js/popper.min.js"></script>
<script src="<?php bloginfo('template_url'); ?>/assets/js/bootstrap.min.js"></script>
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<script src="<?php bloginfo('template_url'); ?>/assets/js/fancybox.min.js"></script>
<script src="<?php bloginfo('template_url'); ?>/assets/js/owl.carousel.js"></script>
<script src="<?php bloginfo('template_url'); ?>/assets/js/swiper-bundle.min.js"></script>
<script src="<?php bloginfo('template_url'); ?>/assets/js/carousel.js"></script>
<script src="<?php bloginfo('template_url'); ?>/assets/js/counter.js"></script>
<script src="<?php bloginfo('template_url'); ?>/assets/js/animation.js"></script>
<script src="<?php bloginfo('template_url'); ?>/assets/js/video-popup.js"></script>
<script src="<?php bloginfo('template_url'); ?>/assets/js/video-section.js"></script>
<script src="<?php bloginfo('template_url'); ?>/assets/js/remove-product.js"></script>

<?php wp_footer(); ?>
</body>
</html>