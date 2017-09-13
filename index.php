<?php get_header(); ?>

  <div class="container">

    <div class="row">
        <div class="col-12">
            <h1 class="blog-title"><?php single_post_title(); ?></h1>
            <hr>
        </div>
    </div>
    <div class="row">
        <div class="col-md-9">


            <?php

                if ( have_posts() ) :

                    /* Start the Loop */
                    while ( have_posts() ) : the_post();


                    get_template_part( 'template-parts/post/content', get_post_format() );

                    endwhile;

                endif;

            ?>

        </div>
        <div class="col-md-3">
            <?php dynamic_sidebar('blog'); ?>
        </div>
    </div>
  </div>

<?php get_footer(); ?>