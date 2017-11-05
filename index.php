<?php get_header(); ?>

    <section class="header d-flex align-items-center">
      <div class="container">
          <div class="row">
              <div class="col-sm-12 text-center">
                  <?php single_post_title('<h1>', '</h1>'); ?>
              </div>
          </div>
      </div>
    </section>

    <div class="container">
        <div class="row">
            <div class="col-md-7">

                <?php

                    if ( have_posts() ) :

                        /* Start the Loop */
                        while ( have_posts() ) : the_post();


                        get_template_part( 'template-parts/post/content', get_post_format() );

                        endwhile;

                    endif;

                ?>

            </div>
            <div class="col-md-5">
                <?php dynamic_sidebar('blog'); ?>
            </div>
        </div>
    </div>

<?php get_footer(); ?>