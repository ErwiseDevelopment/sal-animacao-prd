<section class="l-founder u-border-top-2 u-border-color-primary">

    <div class="container">

        <div class="row">

            <div class="col-12 mb-5">

                <div class="row">

                    <div class="col-lg-10 offset-md-1 d-flex flex-column flex-md-row align-items-center mb-3">
                        <h3 class="c-title u-font-weight-bold text-uppercase u-color-folk-white u-bg-folk-primary py-3 px-5">
                            <span class="u-font-weight-medium u-color-folk-white mr-2">//</span> santidade salesiana
                        </h3>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container-fluid overflow-hidden px-0">

        <div class="l-founder__background">

            <div class="row justify-content-center mx-0">

                <div class="col-md-10 my-4">

                    <!-- swiper -->
                    <div class="swiper-container js-swiper-founder">

                        <div class="swiper-wrapper">

                            <!-- slide -->
                            <?php
                                $args = array(
                                    'posts_per_page' => -1,
                                    'post_type'      => 'santidade_salesiana',
                                    'order'          => 'DESC'
                                );

                                $santidades = new WP_Query( $args );

                                if( $santidades->have_posts() ) :
                                    while( $santidades->have_posts() ) : $santidades->the_post();
                            ?>
                                        <div 
                                        class="swiper-slide flex-wrap js-swiper-slide-founder"
                                        data-name="Maria Auxiliadora test">

                                            <div class="col-md-4">
                                                <!-- <img
                                                class="img-fluid"
                                                src="<php echo get_template_directory_uri()>/../wp-bootstrap-starter-child/assets/images/animacao-fundador-foto-1.png"
                                                alt=""> -->

                                                <?php
                                                    $alt_title = get_the_title();
                                                    
                                                    the_post_thumbnail('large', 
                                                        array(
                                                            'class' => 'img-fluid',
                                                            'alt'   => $title,
                                                    ));
                                                ?>
                                            </div>

                                            <div class="col-md-8">

                                                <h3 class="l-founder__name u-font-weight-bold text-uppercase u-color-folk-white">
                                                    <!-- dom bosco -->
                                                    <?php the_title() ?>
                                                </h3>

                                                <h6 class="l-founder__office u-font-weight-medium u-color-folk-white">
                                                    <!-- // Nosso fundador -->
													<?php echo get_field( 'quem_foi' ) ?>
                                                </h6>

                                                <span class="l-founder__description d-block u-font-weight-regular">
                                                    <!-- Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque sed feugiat diam, in semper arcu. Curabitur quis volutpat sem. Nunc eget urna a ante pretium finibus sit amet id risus. Pellentesque magna eros, laoreet sit amet feugiat sit amet, dignissim nec urna. Integer volutpat leo non elit sollicitudin, vitae porta erat ultrices. In venenatis sagittis ligula sed sagittis. Phasellus commodo in justo et commodo. Ut imperdiet, lorem in sodales hendrerit, erat dui dapibus ipsum, non scelerisque massa orci pharetra leo. Morbi a enim eget eros cursus molestie sit amet sed augue. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. -->
                                                    <?php the_content() ?>
                                                </span>

                                                <div class="row">

                                                    <div class="col-md-6">
                                                        <a 
                                                        class="l-calendar__btn hover:u-opacity-8 d-block d-md-inline-block u-font-weight-bold text-decoration-none u-color-folk-white u-bg-folk-theme mb-3 mb-md-0 py-2 px-4" 
                                                        href="<?php echo get_field( 'link_ler_mais' ) ?>">
                                                            Ler mais
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                            <?php   endwhile;
                                endif;

                                wp_reset_query();
                            ?>
                            <!-- end slide -->

                            <!-- <div 
                            class="swiper-slide flex-wrap js-swiper-slide-founder"
                            data-name="Maria Auxiliadora test">

                                <div class="col-md-4">
                                    <img
                                    class="img-fluid"
                                    src="<?php echo get_template_directory_uri()?>/../wp-bootstrap-starter-child/assets/images/animacao-fundador-foto-1.png"
                                    alt="">
                                </div>

                                <div class="col-md-8">

                                    <h3 class="l-founder__name u-font-weight-bold text-uppercase u-color-folk-white">
                                        dom bosco
                                    </h3>

                                    <h6 class="l-founder__office u-font-weight-medium u-color-folk-white">
                                        // Nosso fundador
                                    </h6>

                                    <p class="u-font-weight-regular u-color-folk-white">
                                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque sed feugiat diam, in semper arcu. Curabitur quis volutpat sem. Nunc eget urna a ante pretium finibus sit amet id risus. Pellentesque magna eros, laoreet sit amet feugiat sit amet, dignissim nec urna. Integer volutpat leo non elit sollicitudin, vitae porta erat ultrices. In venenatis sagittis ligula sed sagittis. Phasellus commodo in justo et commodo. Ut imperdiet, lorem in sodales hendrerit, erat dui dapibus ipsum, non scelerisque massa orci pharetra leo. Morbi a enim eget eros cursus molestie sit amet sed augue. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos.
                                    </p>

                                    <div class="row">

                                        <div class="col-md-6">
                                            <a 
                                            class="l-calendar__btn hover:u-opacity-8 d-block d-md-inline-block u-font-weight-bold text-decoration-none u-color-folk-white u-bg-folk-theme mb-3 mb-md-0 py-2 px-4" 
                                            href="#">
                                                Ler mais
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div 
                            class="swiper-slide flex-wrap js-swiper-slide-founder"
                            data-name="Maria Auxiliadora test">

                                <div class="col-md-4">
                                    <img
                                    class="img-fluid"
                                    src="<?php echo get_template_directory_uri()?>/../wp-bootstrap-starter-child/assets/images/animacao-fundador-foto-1.png"
                                    alt="">
                                </div>

                                <div class="col-md-8">

                                    <h3 class="l-founder__name u-font-weight-bold text-uppercase u-color-folk-white">
                                        dom bosco
                                    </h3>

                                    <h6 class="l-founder__office u-font-weight-medium u-color-folk-white">
                                        // Nosso fundador
                                    </h6>

                                    <p class="u-font-weight-regular u-color-folk-white">
                                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque sed feugiat diam, in semper arcu. Curabitur quis volutpat sem. Nunc eget urna a ante pretium finibus sit amet id risus. Pellentesque magna eros, laoreet sit amet feugiat sit amet, dignissim nec urna. Integer volutpat leo non elit sollicitudin, vitae porta erat ultrices. In venenatis sagittis ligula sed sagittis. Phasellus commodo in justo et commodo. Ut imperdiet, lorem in sodales hendrerit, erat dui dapibus ipsum, non scelerisque massa orci pharetra leo. Morbi a enim eget eros cursus molestie sit amet sed augue. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos.
                                    </p>

                                    <div class="row">

                                        <div class="col-md-6">
                                            <a 
                                            class="l-calendar__btn hover:u-opacity-8 d-block d-md-inline-block u-font-weight-bold text-decoration-none u-color-folk-white u-bg-folk-theme mb-3 mb-md-0 py-2 px-4" 
                                            href="#">
                                                Ler mais
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div> -->
                        </div>
                    </div>
                    <!-- end swiper -->
                </div>
            </div>
        </div>

        <div class="row justify-content-center">

            <div class="col-md-10 d-flex justify-content-between mt-5 pt-3">
                <!-- arrows -->
                <div class="col-6 col-md-3">
                    <div class="swiper-button-prev swiper-button-prev-founder js-swiper-button-prev-founder">
                        <span class="u-font-size-14 u-font-weight-bold u-color-folk-white">
                            Anterior
                        </span>
                    </div>
                </div>

                <div class="col-6 col-md-3">
                    <div class="swiper-button-next swiper-button-next-founder js-swiper-button-next-founder">
                        <span class="u-font-size-14 u-font-weight-bold u-color-folk-white">
                            Próximo
                        </span>
                    </div>
                </div>
                <!-- end arrows -->
            </div>
        </div>
    </div>
</section>