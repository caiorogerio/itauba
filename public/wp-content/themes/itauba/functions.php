<?php
add_theme_support( 'post-thumbnails' );

add_action( 'init', function() {
    register_nav_menu('primary',__( 'Primary Menu' ));
//
//    register_taxonomy( 'line', [], [
//        'label' => 'Lines',
//        'hierarchical' => true,
//        'public' => true,
//        'rewrite' => [
//            'slug' => 'linhas'
//        ]
//    ]);

    register_taxonomy( 'furniture', [], [
        'label' => 'Furnitures',
        'hierarchical' => true,
        'public' => true,
        'rewrite' => [
            'slug' => 'moveis'
        ]
    ]);

    register_post_type('product', [
        'label' => 'Products',
        'public' => true,
        'supports' => [
            'title',
            'thumbnail'
        ],
        'taxonomies' => [
            'line',
            'furniture'
        ],
        'has_archive' => true,
        'rewrite' => [
            'slug' => 'produtos'
        ]
    ]);
});

add_action( 'wp_enqueue_scripts', function(){
    wp_enqueue_style( 'itauba-style', get_stylesheet_uri() );
});

register_sidebar([
    'name'          => __( 'Home sections', 'itauba' ),
    'id'            => 'home-sections',
    'description'   => '',
    'class'         => '',
    'before_widget' => '<section id="%1$s" class="%2$s">',
    'after_widget'  => '</section>',
    'before_title'  => '<h1>',
    'after_title'   => '</h1>'
]);

register_sidebar([
    'name'          => __( 'Home banner', 'itauba' ),
    'id'            => 'home-banner',
    'description'   => '',
    'class'         => '',
    'before_widget' => '<section id="%1$s" class="%2$s">',
    'after_widget'  => '</section>',
    'before_title'  => '<h1>',
    'after_title'   => '</h1>'
]);

