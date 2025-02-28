<?php

function theme_enqueue_styles()
{
    wp_enqueue_style(
        'main-style',
        get_template_directory_uri() . '/style.css',
        array(),
        '1.0',
        'all'
    );

    wp_enqueue_style(
        'bebas-neue-font',
        'https://fonts.googleapis.com/css2?family=Bebas+Neue&display=swap',
        [],
        null
    );

    wp_enqueue_style(
        'swiper-css',
        'https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css',
        [],
        null
    );

    wp_enqueue_script(
        'swiper-js',
        'https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js',
        [],
        null,
        true
    );

    wp_enqueue_script(
        'swiper-nosotros',
        get_template_directory_uri() . '/scripts/swiperNosotros.js',
        ['swiper-js'],
        null,
        true
    );

    wp_enqueue_script(
        'alpinejs',
        'https://unpkg.com/alpinejs@3.10.5/dist/cdn.min.js',
        array(),
        null,
        true
    );
}
add_action('wp_enqueue_scripts', 'theme_enqueue_styles');
