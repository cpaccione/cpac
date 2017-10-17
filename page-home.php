<?php

/*

Template Name: Home Page

*/

$counter = 0;

?>


<?php get_header(); ?>

  <section class="home-intro">
    <div class="cpac-wrap">

    <div class="row">
      <div class="col6">
        <h1>Front-end and WordPress Development</h1>
        <small style="text-align: center;">HTML<i class="fa fa-minus"></i> CSS <i class="fa fa-minus"></i> jQuery <i class="fa fa-minus"></i> WordPress</small>
        <p>Hi, I'm Chris Paccione, a front-end web developer motivated by a passion for coding and WordPress. I offer front-end development, WordPress theme building, and HTML e-mail marketing services. Please view my work below and contact me if your ready to get started or want to discuss your next project.</p>
      </div>
      <div class="col6">
        <img class="circle" src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/chris_paccione_500.jpg" alt="Chris Paccione front-end web developer">
        <ul class="social-media">
          <li><a href="https://github.com/cpaccione" target="_blank"><i class="fa fa-github fa-4x"></i></a></li>
          <li><a href="https://www.linkedin.com/in/cpaccione" target="_blank"><i class="fa fa-linkedin fa-4x"></i></a></li>
        </ul>
        <div class="button-wrap">
          <a href="/contact/"><button type="button" class="btn btn-primary btn-lg active">Contact Me</button></a>
        </div>
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

                      <div class="col6">
                          <a href="<?php the_permalink(); ?>">
                              <!-- <div class="subject img-overlay"> -->

                                  <?php

                                    if ( has_post_thumbnail() ) {
                                      the_post_thumbnail('large');
                                    }

                                  ?>

                                  <!-- <div class="portfolio-overlay"> -->
                                      <!-- <div class="overlay-copy"> -->
                                          <!-- <div class="center"> -->
                                              <span class="underline">
                                                  <h5><?php the_title(); ?></h5>
                                              </span>
                                          <!-- </div> -->
                                      <!-- </div> -->
                                  <!-- </div> -->
                              <!-- </div> -->
                          </a>
                      </div>

                  <?php $counter++; if($counter % 3 === 0) : echo '</div>'; endif; ?>

              <?php endwhile; endif; wp_reset_postdata(); ?>

      </div>
  </section>


<?php get_footer(); ?>
