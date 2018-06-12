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

            <!-- Contenu -->
            <div class="container" rol="main">
                <div class="row">
                    <?php if (have_posts()) : while(have_posts()) : the_post(); ?>
                        <?php the_content(); ?>
                        <?php endwhile; else : ?>
                        <p>Bonjour, désolé, mais il n'y a pas encore d'articles sur cette page </p>
                    <?php endif; ?>
                </div>
            </div><!-- Fin contenu -->

        </div><!-- Fin main -->

        <!-- Footer -->
        <?php get_footer(); ?>
        <!-- Fin footer -->
