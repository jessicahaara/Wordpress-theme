<?php
    function load_stylesheets() {
        wp_enqueue_style('style', get_stylesheet_uri()); 
    }
    add_action('wp_enqueue_scripts', 'load_stylesheets');

    function register_my_menus() {
        register_nav_menus(
        array(
        'header-menu' => __( 'Header Menu' ),
        'extra-menu' => __( 'Extra Menu' )
        )); }
        
    add_action( 'init', 'register_my_menus' ); 

    function local_register_sidebars() {
        register_sidebar(
            array(
                'id' => 'primary',
                'name' => __( 'Primary Sidebar' ),
                'description' => __( 'Sidebar.' ),
                'before_widget' => '<div id="" class="widget %2$s">',
                'after_widget' => '</div>',
                'before_title' => '<h3 class="widgettitle">',
                'after_title' => '</h3>',
            ));

        register_sidebar(
            array(
                'id' => 'secondary',
                'name' => __( 'Secondary Sidebar' ),
                'description' => __( 'Sidebar.' ),
                'before_widget' => '<div id="%1$s" class="widget %2$s">',
                'after_widget' => '</div>',
                'before_title' => '<h3 class="widget-title">',
                'after_title' => '</h3>',
            ));

        register_sidebar(
            array(
                'id' => 'footer',
                'name' => __( 'Footer Sidebar' ),
                'description' => __( 'Sidebar.' ),
                'before_widget' => '<div id="" class="widget %2$s">',
                'after_widget' => '</div>',
                'before_title' => '<h3 class="widget-title">',
                'after_title' => '</h3>',
            ));
    }
    
    add_action( 'widgets_init','local_register_sidebars');

    add_theme_support( 'post-thumbnails' );
 ?>