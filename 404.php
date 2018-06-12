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

    <body class="body">
        <div class="center">
            <div class="row justify-content-center">
                <div class="col-xs-6">
                    <svg width="380px" height="500px" version="1.1" id="Calque_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 240.1 240.1" style="enable-background:new 0 0 222 196.5;" xml:space="preserve">
                        <polygon id="polygon-1" class="st0" fill="#85C555" points="126.6,24.6 113.5,87.4 228.3,195.9 "/>
                        <polygon id="polygon-2" class="st1" fill="#32A8DF" points="113.3,29.2 77.2,166.1 11.7,206.5 "/>
                        <polygon id="polygon-3" class="st2" fill="#F2742E" points="228.3,210.9 187.9,173.6 119.4,165.9 "/>
                        <polygon id="polygon-4" class="st3" fill="#EA465A" points="152.2,189 102.9,165.9 17.6,215.5 "/>
                    </svg>
                </div>
                <div class="col-xs-6">
                    <div class="message-box">
                      <h1>404</h1>
                      <p>ERREUR</p>
                      <p>Page introuvable</p>
                      <div class="buttons-con">
                        <div class="action-link-wrap">
                          <a href="<?php bloginfo( 'url' ) ?>" class="link-button">Revenir à l'accueil</a>
                        </div>
                      </div>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>
