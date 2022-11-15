<section class="l-purpose py-5">

    <div class="container">

        <div class="row">

            <div class="col-12">
                
                <div class="row">

                    <div class="col-md-6 pr-md-5">
                        
                        <h3 class="l-purpose__title u-font-weight-bold text-uppercase u-color-folk-white mb-4">
                            conheça os
                            <span class="l-purpose__title--large u-font-weight-black u-color-folk-white">salesianos</span>
                        </h3>

                        <span class="l-purpose__description u-font-weight-medium d-block text-justify u-color-folk-white">
                            <!-- Integer quis tortor mi. Curabitur pulvinar vitae lorem et dignissim. Vivamus fringilla, lorem semper posuere fringilla, neque sapien semper odio, quis faucibus augue lectus vitae ex. Suspendisse vitae orci ac tortor tristique fermentum. Aliquam venenatis nisi diam, sed lacinia ligula efficitur luctus. Nam tincidunt nunc justo, vel pellentesque lectus euismod ac. Phasellus congue aliquam diam non ultrices. Morbi arcu magna, viverra ut accumsan sed, vulputate id sem. Aenean vel purus at turpis consequat dignissim quis non lectus. In eget imperdiet ipsum. Nam efficitur tellus vitae nulla convallis lobortis. Quisque porta, lacus eu laoreet faucibus, ligula nunc viverra justo, sed sollicitudin felis diam vitae eros. In eu magna mauris. Integer facilisis augue vitae dolor cursus venenatis. -->
                            <?php echo get_field( 'texto_conheca' ) ?>
                        </span>

                        <div class="row">

                            <div class="col-md-6 my-4">
                                <a 
                                class="l-calendar__btn hover:u-opacity-8 d-block d-md-inline-block u-font-weight-bold text-decoration-none u-color-folk-white u-bg-folk-secondary mb-3 mb-md-0 py-2 px-5" 
                                href="<?php echo get_field( 'saiba_mais_conheca' ) ?>">
                                    Saiba mais 
                                </a>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6">
                        
                        <div class="row">

                            <!-- loop -->
                            <?php if( have_rows( 'imagens_conheca' ) ) : 
                                    while( have_rows( 'imagens_conheca' ) ) : the_row();
                            ?>
                                        <div class="col-12 l-purpose__col-child">
                                            <img
                                            class="img-fluid"
                                            src="<?php echo get_sub_field( 'imagem' ) ?>"
                                            alt="<?php the_title() ?>">
                                        </div>
                            <?php endwhile;
                                endif;
                            ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>