<!DOCTYPE html>
<html lang="<?php language_attributes(); ?>">
<head>
    <?php wp_head(); ?>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title><?php bloginfo('title'); ?></title>
    <!-- Bootstrap -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">
    <!-- CSS theme -->
    <link rel="stylesheet" href="<?php bloginfo('stylesheet_directory'); ?>/css/style.min.css">
    <!-- CSS font-artskory -->
    <link rel="stylesheet" href="<?php bloginfo('stylesheet_directory'); ?>/css/font-artskory.min.css">
    <!-- CSS bootstrap-social -->
    <link rel="stylesheet" href="<?php bloginfo('stylesheet_directory'); ?>/css/bootstrap-social.min.css">
    <!-- CSS responsive -->
    <link rel="stylesheet" href="<?php bloginfo('stylesheet_directory'); ?>/css/responsive.min.css">
    <!-- CSS animate -->
    <link rel="stylesheet" href="<?php bloginfo('stylesheet_directory'); ?>/css/animate.min.css" >
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <!-- Scroll -->
    <script src="<?php bloginfo('stylesheet_directory'); ?>/js/scrollToTop.min.js"></script>
    <!-- Video -->
    <script src="<?php bloginfo('stylesheet_directory'); ?>/js/random-video.min.js"></script>
    <!-- Parallax -->
    <script src="<?php bloginfo('stylesheet_directory'); ?>/js/parallax.js"></script>
</head>
    <body>

        <!-- Main -->
        <div class="main">

            <!-- header -->
            <header>
                <nav class="navbar navbar-expand-lg navbar-dark bg-dark" role="navigation">
                    <div class="container">
                        <a class="navbar-brand" href="<?php bloginfo( 'url' ) ?>">
                            <h1>
                                <img src="<?php custom_logo(); ?>" alt="artskory logo">ArtsKory
                            </h1>
                        </a>
                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>

                        <div class="collapse navbar-collapse" id="navbarSupportedContent">
                            <?php
                                wp_nav_menu( array(
                                'theme_location'  => 'primary',
                                'depth'           => 1, // 1 = no dropdowns, 2 = with dropdowns.
                                'container'       => '',
                                'container_class' => 'collapse navbar-collapse',
                                'container_id'    => '',
                                'menu_class'      => 'navbar-nav ml-auto',
                                'fallback_cb'     => 'WP_Bootstrap_Navwalker::fallback',
                                'walker'          => new WP_Bootstrap_Navwalker(),
                            ) );
                            ?>
                        </div>
                    </div>
                </nav>
            </header><!-- Fin header -->
