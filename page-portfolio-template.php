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


    <ul id="portfolio-link" class="portfolio">
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

                    <li class="portfolio-item">
                      <a href="<?php the_permalink(); ?>">
                                <figure class="card">

                                    <?php

                                      if ( has_post_thumbnail() ) {
                                        the_post_thumbnail('large');
                                      }

                                    ?>
                                    <figcaption class="caption">
                                        <!-- <div class="overlay-copy">
                                            <div class="center"> -->
                                                <span class="underline">
                                                    <h2><?php the_title(); ?></h2>
                                                </span>
                                            <!-- </div>
                                        </div> -->
                                    </figcaption>
                                </figure>
                          </a>
                        </li>

                <?php endwhile; endif; wp_reset_postdata(); ?>

        </ul>

    <a href="/hire-me/"><button type="button" class="d-sm-none btn btn-primary btn-lg btn-block"><h3>Hire Me <i class="fa fa-chevron-right" aria-hidden="true"></i></h3></button></a>
    <a href="/hire-me/"><button type="button" class="d-none d-sm-block btn btn-primary btn-lg btn-block"><h3>Hire me to work on your project <i class="fa fa-chevron-right" aria-hidden="true"></i></h3></button></a>

<?php get_footer(); ?>
