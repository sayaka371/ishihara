<?php 
 add_action('wp_enqueue_scripts','add_styles');

 function add_styles(){

    wp_register_style(
        'google_fonts_style',
        'https://fonts.googleapis.com/css2?family=Zen+Old+Mincho:wght@400;500;600;700;900&display=swap',
        array(),
        '1.0'
    );

    wp_register_style(
        'google_fonts_style2',
        'https://fonts.googleapis.com/css2?family=Yuji+Syuku&display=swap',
        array(),
        '1.0'
    );

    wp_register_style(
        'reset_style',
        'https://unpkg.com/ress/dist/ress.min.css',
        array(),
        '1.0'
    );

    wp_register_style(
        'favicon',
        get_template_directory_uri() . '/img/favicon.png',
        array(),
        '1.0'
    );

    wp_enqueue_style(
        'main_style',
        get_template_directory_uri() . '/css/main.css',
        array('reset_style','google_fonts_style','google_fonts_style2'),
        '1.0'
    );
 }

 add_action('wp_enqueue_scripts','add_scripts');
 function add_scripts(){

    wp_deregister_script('jquery');

    wp_register_script(
        'jquery',
        'https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js',
        array(),
        '1.0',
        true
    );

    wp_enqueue_script(
        'main_scripts',
        get_template_directory_uri() . '/js/main.js',
        array('jquery'),
        '1.0',
        true
    );
 }

 ?>