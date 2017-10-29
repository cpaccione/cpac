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

    <section class="portfolio-section">
        <div class="container-fluid">

        <?php

                $args = array(
                    'post_type' => 'portfolio',
                    'post_status' => 'publish',
                    'posts_per_page' => -1,
                    'orderby' => 'date',
                    'order' => 'DESC'
                    );
                $query = new WP_Query($args);

            ?>

                <?php if( $query->have_posts() ) : while( $query->have_posts() ) : $query->the_post(); ?>

                    <?php if($counter % 3 === 0) : echo '<div class="row">'; endif; ?>

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

    <a href="/hire-me/"><button type="button" class="d-sm-none btn btn-primary btn-lg btn-block"><h3>Hire Me <i class="fa fa-chevron-right" aria-hidden="true"></i></h3></button></a>
    <a href="/hire-me/"><button type="button" class="d-none d-sm-block btn btn-primary btn-lg btn-block"><h3>Hire me to work on your project <i class="fa fa-chevron-right" aria-hidden="true"></i></h3></button></a>

<?php get_footer(); ?>
