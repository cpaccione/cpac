<?php

/*

Template Name: Home Page

*/

$counter = 0;

?>


<?php get_header(); ?>

    <section class="home-hero">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h1>WordPress &amp; <span class="no-wrap">Front-end Developer</span></h1>
                    <p>I focus on clean code, quality responsive sites, and a great user experience</p>
                    <small>HTML <i class="fa fa-minus"></i> CSS <i class="fa fa-minus"></i> jQuery <i class="fa fa-minus"></i> WordPress</small>
                    <a href="#portfolio-link" class="smooth btn-primary active">View Portfolio</a>
                </div>
            </div>
        </div>
    </section>

  <section id="portfolio-link" class="portfolio-section">
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

                      <div class="col-sm-4">
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

  <section class="testimonials">
      <div class="container">
          <div class="row">
              <div class="col-12">
                  
              </div>
          </div>
      </div>
  </section>

  <a href="#"><button type="button" class="btn btn-primary btn-lg btn-block"><h3>ABOUT ME <i class="fa fa-arrow-circle-o-right fa-lg" aria-hidden="true"></i></h3></button></a>


<?php get_footer(); ?>
