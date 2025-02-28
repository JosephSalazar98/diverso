<?php get_header(); ?>

<section class="hero">
    <img class="hero__bg" src="<?php echo get_template_directory_uri(); ?>/assets/images/hero.png" alt="">
    <div class="hero__content container-sm">
        <div class="hero__logo">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/frescomar.png" alt="">
        </div>
        <div class="hero__text">
            <span style="display: flex; gap: 0.5rem; align-items: center; justify-content: center">
                <div style="width: 24px; height: auto;">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/flag.png" alt="">
                </div>
                Producto Peruano
                <div style="width: 24px; height: auto;">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/flag.png" alt="">
                </div>
            </span>
            <h1>Lorem ipsum dolor sit amet.</h1>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ergo adhuc, quantum equidem intellego, causa non videtur</p>
        </div>
        <div class="hero__button">
            <a class="btn" href="">Explorar</a>
        </div>
    </div>
</section>

<section class="frescomar">
    <div class="container-sm frescomar__content">
        <div class="frescomar__text">
            <span class="underlined">Producto Peruano</span>
            <h2 class="deepblue">Lorem ipsum dolor sit amet.</h2>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Error, illum rerum! Vel nesciunt neque quisquam aspernatur perferendis minima praesentium deleniti?</p>
        </div>
        <div class="frescomar__image">
            <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/latas.png" alt="">
        </div>
    </div>
</section>

<section class="nosotros">
    <div style="--swiper-navigation-color: #fff; --swiper-pagination-color: #fff; height: 100%" class="swiper mySwiper">
        <div class="parallax-bg"
            style="background-image: url('<?php echo get_template_directory_uri(); ?>/assets/images/nosotros.jpg') !important;"
            data-swiper-parallax="-23%">
        </div>

        <div class="swiper-wrapper">
            <div class="swiper-slide">
                <div class="swiper__content">
                    <div class="swiper__card container-sm">
                        <div class="swiper__image">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/fish.png" alt="">
                        </div>
                        <div class="swiper__text">
                            <h2>Lorem ipsum dolor sit amet.</h2>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Amet nostrum tempore, corrupti sed nobis esse ad deserunt eum!</p>
                            <a href="" class="btn">Ver más</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="swiper-slide">
                <div class="swiper__content">
                    <div class="swiper__card container-sm">
                        <div class="swiper__image">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/fish.png" alt="">
                        </div>
                        <div class="swiper__text">
                            <h2>Lorem ipsum dolor sit amet.</h2>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Amet nostrum tempore, corrupti sed nobis esse ad deserunt eum!</p>
                            <a href="" class="btn">Ver más</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="swiper-slide">
                <div class="swiper__content">
                    <div class="swiper__card container-sm">
                        <div class="swiper__image">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/fish.png" alt="">
                        </div>
                        <div class="swiper__text">
                            <h2>Lorem ipsum dolor sit amet.</h2>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Amet nostrum tempore, corrupti sed nobis esse ad deserunt eum!</p>
                            <a href="" class="btn">Ver más</a>
                        </div>
                    </div>
                </div>
            </div>

        </div>
        <div class="swiper-button-next"></div>
        <div class="swiper-button-prev"></div>
        <div class="swiper-pagination"></div>
    </div>

</section>

<section class="venta">
    <div class="venta__title container">
        <h2>Encuentra nuestros productos en tu supermercado favorito</h2>
    </div>
    <div class="venta__logos container">
        <div class="venta__imagen">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/venta/makro.png" alt="">
        </div>
        <div class="venta__imagen">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/venta/metro.png" alt="">
        </div>
        <div class="venta__imagen">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/venta/tottus.png" alt="">
        </div>
        <div class="venta__imagen">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/venta/vea.png" alt="">
        </div>
        <div class="venta__imagen">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/venta/vivanda.png" alt="">
        </div>
    </div>
</section>

<div class="container-sm features" x-data="{ tabOpen: 1 }">
    <div style="display: flex; align-items: center; justify-content: center; padding: 2rem 0;">
        <div class="main__title">
            <h2 class="deepblue">Lorem, ipsum dolor sit amet consectetur adipisicing.</h2>
        </div>
    </div>
    <div class="tab-btns">
        <button @click="tabOpen = 1" :class="{ 'active' : tabOpen == 1 }" class="active">Evento 1</button>
        <button @click="tabOpen = 2" :class="{ 'active' : tabOpen == 2 }">Evento 2</button>
        <button @click="tabOpen = 3" :class="{ 'active' : tabOpen == 3 }">Evento 3</button>
        <button @click="tabOpen = 4" :class="{ 'active' : tabOpen == 4 }">Evento 4</button>
    </div>
    <div class="tab-contents">
        <div x-show="tabOpen === 1">
            <div class="tab__grid">
                <div class="tab__text">
                    <h3>Evento 1</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Tempora pariatur possimus ipsum error quae
                        exercitationem nam repudiandae? Eius eveniet, cum dolorum eligendi voluptas aspernatur asperiores at
                </div>
                <div class="tab__image">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/1.png" alt="">
                </div>

            </div>

        </div>
        <div x-show="tabOpen === 2">
            <div class="tab__grid">
                <div class="tab__text">
                    <h3>Evento 2</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Tempora pariatur possimus ipsum error quae
                        exercitationem nam repudiandae? Eius eveniet, cum dolorum eligendi voluptas aspernatur asperiores at
                </div>
                <div class="tab__image">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/1.png" alt="">
                </div>

            </div>

        </div>
        <div x-show="tabOpen === 3">
            <div class="tab__grid">
                <div class="tab__text">
                    <h3>Evento 3</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Tempora pariatur possimus ipsum error quae
                        exercitationem nam repudiandae? Eius eveniet, cum dolorum eligendi voluptas aspernatur asperiores at
                </div>
                <div class="tab__image">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/1.png" alt="">
                </div>

            </div>

        </div>
        <div x-show="tabOpen === 4">
            <div class="tab__grid">
                <div class="tab__text">
                    <h3>Evento 4</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Tempora pariatur possimus ipsum error quae
                        exercitationem nam repudiandae? Eius eveniet, cum dolorum eligendi voluptas aspernatur asperiores at
                </div>
                <div class="tab__image">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/1.png" alt="">
                </div>

            </div>

        </div>
    </div>
</div>

<?php get_footer(); ?>