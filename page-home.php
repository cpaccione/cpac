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
                    <h1>WordPress &amp; Front-end Developer</h1>
                    <p>I focus on clean code, quality responsive sites, and a great user experience</p>
                    <small>HTML <i class="fa fa-minus"></i> CSS <i class="fa fa-minus"></i> jQuery <i class="fa fa-minus"></i> WordPress</small>
                    <a href="#portfolio-link" class="smooth btn-primary active">View Portfolio</a>
                </div>
            </div>
        </div>
    </section>

<!--   <section class="home-hero">
    <div class="container">
      <div class="row">
        <div class="col-md-6">
          <h1>Front-end and WordPress Development</h1>
          <small style="text-align: center;">HTML <i class="fa fa-minus"></i> CSS <i class="fa fa-minus"></i> jQuery <i class="fa fa-minus"></i> WordPress</small>
          <p class="lead">Hi, I'm Chris Paccione, a front-end web developer motivated by a passion for coding and WordPress. I offer front-end development, WordPress theme building, and HTML e-mail marketing services. Please view my work below and contact me if your ready to get started or want to discuss your next project.</p>
          <ul class="social-media">
            <li><a href="https://github.com/cpaccione" target="_blank"><i class="fa fa-github fa-3x"></i></a></li>
            <li><a href="https://www.linkedin.com/in/cpaccione" target="_blank"><i class="fa fa-linkedin fa-3x"></i></a></li>
            <li><a href="/contact/"><i class="fa fa-envelope-o fa-3x" aria-hidden="true"></i></a></li>
          </ul>
        </div>
        <div class="col-md-6">
          <img class="circle" src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/chris_paccione_500.jpg" alt="Chris Paccione front-end web developer">
        </div>
      </div>
    </div>
  </section> -->

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

                      <div class="col-md-4">
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

  <a href="#"><button type="button" class="btn btn-primary btn-lg btn-block"><h3>ABOUT ME &nbsp;&nbsp;  <i class="fa fa-arrow-circle-o-right fa-lg" aria-hidden="true"></i></h3></button></a>


<?php get_footer(); ?>
