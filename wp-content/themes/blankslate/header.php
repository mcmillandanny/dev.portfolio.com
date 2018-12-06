<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>" />
<meta name="viewport" content="width=device-width" />
<link rel="stylesheet" type="text/css" href="<?php echo get_stylesheet_uri('css/main.css'); ?>" />
<link href="https://fonts.googleapis.com/css?family=Exo" rel="stylesheet">

<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<div id="wrapper" class="hfeed">
    <header id="header" role="banner">
        <nav id="menu" role="navigation"> 
        <img id="logo" src="<?php echo get_template_directory_uri()?>/images/logo.png" alt="logo" />
            <div id="hamburger">
                <div class="line-1 hamburger-lines"></div>
                <div class="line-2 hamburger-lines"></div>
                <div class="line-3 hamburger-lines"></div>
                <?php wp_nav_menu( array( 'theme_location' => 'main-menu' ) ); ?>
            </div>
        </nav>
    </header>
<div id="container">