<?php
/*
Template Name: contact
*/
?>
            <!-- Header -->
            <?php get_header(); ?>
            <!-- Fin header -->

            <!-- Banner  -->
            <?php $thumb = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'full' );?>
            <div id="post" class="banner" style="background-image: url('<?php echo $thumb['0'];?>'); filter: grayscale(100%);">
                <div class="filter">
                    <div class="container">
                        <h1 class="title"><?php the_title(); ?></h1>
                    </div>
                </div>
            </div>
            <!-- Fin banner  -->

            <!-- Contact -->
            <div class="container-fluid project-designs">
                <div class="container">
                    <section class="contact-info mt-5 mb-5">
                        <div class="row justify-content-between">
                            <div class="col-xs-6 text-right adresse">
                                <h4>Adresse</h4>
                                <a class="link-contact" href="#map">
                                    <span>L’Infernet II <br> 450 chemin du Thuve<br>
                                    04700 Oraison</span>
                                </a>
                            </div>
                            <div class="col-xs-6 text-right phone">
                                <h4>Téléphone</h4>
                                <a class="link-contact" href="tel:0681245719">
                                    <span>06 81 24 57 19</span>
                                </a>
                            </div>
                        </div>
                    </section>
                </div>
            </div><!-- Fin contact -->

            <!-- Formulaire-responsive -->
            <div class="container" rol="main">
                <div class="row">
                    <section class="col mb-4">
                        <article class="article">
                            <?php if (have_posts()) : while(have_posts()) : the_post(); ?>
                                <?php the_content(); ?>
                                <?php endwhile; else : ?>
                                <p>Bonjour, désolé, mais il n'y a pas encore d'articles sur cette page </p>
                            <?php endif; ?>
                        </article>
                    </section>
                </div>
            </div><!-- Fin formulaire-responsive -->

            <!-- Maps -->
            <div class="container-fluid map">
                <div id="map"></div>
                    <div id="coordinates">
                        <input type="hidden" id="latitude" value=<?php echo get_theme_mod('coordinates_title_1'); ?>>
                        <input type="hidden" id="longitude" value=<?php echo get_theme_mod('coordinates_title_2'); ?>>
                    </div>
                    <script async defer src="https://maps.googleapis.com/maps/api/js?key=<?php echo get_theme_mod('api_key_title', "Entrez votre clé d'API et vos coordonnées"); ?>&callback=initMap"></script>
            </div><!--fin maps -->

        </div><!-- Fin main -->

        <!-- Footer -->
        <?php get_footer(); ?>
        <!-- Fin footer -->
