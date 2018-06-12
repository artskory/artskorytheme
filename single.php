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

            <!-- Contenu  -->
            <div class="container-fluid mb-5" role="main">
                <div class="row mt-5">
                    <?php if (have_posts()) : while(have_posts()) : the_post(); ?>
                        <?php the_content(); ?>
                        <?php endwhile; else : ?>
                        <p>Bonjour, désolé, mais il n'y a pas encore d'articles sur cette page</p>
                    <?php endif; ?>
                </div>
            </div><!-- Fin contenu  -->

            <!-- Pagination -->
            <div class="container" role="main">
                <div class="row">
                    <div class="col mb-5">
                        <?php
                            $nextPost = get_next_post(true);
                            if($nextPost) {
                                $args = array(
                                    'posts_per_page' => 1,
                                    'include' => $nextPost->ID
                                );
                                $nextPost = get_posts($args);
                                foreach ($nextPost as $post) {
                                    setup_postdata($post);
                        ?>
                        <a href="<?php the_permalink(); ?>"><button type="button" class="btn btn-light float-left">Précédent</button></a>
                        <?php
                                    wp_reset_postdata();
                                } //end foreach
                            } // end if

                            $prevPost = get_previous_post(false);
                            if($prevPost) {
                                $args = array(
                                    'posts_per_page' => 1,
                                    'include' => $prevPost->ID
                                );
                                $prevPost = get_posts($args);
                                foreach ($prevPost as $post) {
                                    setup_postdata($post);
                        ?>
                        <a href="<?php the_permalink(); ?>"><button type="button" class="btn btn-light float-right">Suivant</button></a>
                    </div>
                    <?php
                                    wp_reset_postdata();
                                } //end foreach
                            } // end if
                    ?>
                </div>
            </div><!-- End Pagination -->

        </div><!-- Fin main -->

        <!-- Footer -->
        <?php get_footer(); ?>
        <!-- Fin footer -->
