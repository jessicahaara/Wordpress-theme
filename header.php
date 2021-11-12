<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title><?php wp_title(); ?></title>
    <?php wp_head(); ?>
</head>

<body <?php body_class (); ?>>
    <header>
        <section class="header-content">
            <a href="<?php echo home_url(); ?>">
                <h1><?php echo get_bloginfo( 'name' ); ?></h1>
            </a>
        
            <form class="header-search">
                <input type="text">
                <button>Sök</button>
            </form>
        </section>
    </header>
    <?php wp_nav_menu( array( 'theme_location' => 'header-menu' ) ); ?>