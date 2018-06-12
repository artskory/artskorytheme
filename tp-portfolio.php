<?php
/*
Template Name: portfolio
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

            <!-- Contenu -->
            <div class="container" role="main">
                <h2 class="mt-5">Mes <strong>réalisations</strong></h2>
                <div class="row">
                    <?php
                        $recentPosts = new WP_Query();
                        $recentPosts->query('showposts=30');
                    ?>
                    <?php while ($recentPosts->have_posts()) : $recentPosts->the_post(); ?>
                    <section class="col-sm-6 col-md-4">
                        <div class="card-ui mb-4">
                            <figure>
                                <a href="<?php the_permalink(); ?>">
                                   <?php
                                        if( has_post_thumbnail() ) {
                                          the_post_thumbnail();
                                        } else {
                                          echo '<img src="' .  get_bloginfo('template_directory') . '/img/no-image.jpg" alt="" />';
                                    }?>
                                </a>
                                <figcaption>
                                    <h3><?php the_title(); ?></h3>
                                    <em><?php category_list(); ?></em>
                                    <a href="<?php the_permalink(); ?>"><i class="ak ak-link ak-1-5x"></i></a>
                                </figcaption>
                            </figure>
                        </div>
                    </section>
                    <?php endwhile; ?>
                </div>
            </div><!-- Fin contenu -->

        </div><!-- Fin main -->

        <!-- Footer -->
        <?php get_footer(); ?>
        <!-- Fin footer -->
