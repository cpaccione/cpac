<?php

/*

Template Name: Portfolio Template

*/

?>

<?php

$counter = 0;

?>


<?php get_header(); ?>

<section class="header d-flex align-items-center">
    <div class="container">
        <div class="row">
            <div class="col-sm-12 text-center">
                <?php the_title('<h1>', '</h1>'); ?>
            </div>
        </div>
    </div>
</section>



<section class="page-portfolio">
    <div class="container">

    <?php

            $args = array(
                'post_type' => 'portfolio',
                'orderby' => 'menu_order',
                'posts_per_page' => -1,
                'order' => 'ASC'
                );
            $query = new WP_Query($args);

        ?>

            <?php if( $query->have_posts() ) : while( $query->have_posts() ) : $query->the_post(); ?>

                <?php if($counter % 3 === 0) : echo '<div class="row port-row">'; endif; ?>

                    <div class="col-md-4 animation-element bounce-up">
                        <a href="<?php the_permalink(); ?>">
                            <div class="subject img-overlay">

                                <?php

                                  if ( has_post_thumbnail() ) {
                                    the_post_thumbnail('large');
                                  }

                                ?>

                                <div class="portfolio-overlay">
                                    <div class="overlay-copy">
                                        <div class="center">
                                            <span class="underline">
                                                <h5><?php the_title(); ?></h5>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>

                <?php $counter++; if($counter % 3 === 0) : echo '</div>'; endif; ?>

            <?php endwhile; endif; wp_reset_postdata(); ?>


    </div>
</section>




<?php get_footer(); ?>
