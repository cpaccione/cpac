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
    <div class="blog-wrap">

      <div class="article-section">
        <?php

            if ( have_posts() ) :

                /* Start the Loop */
                while ( have_posts() ) : the_post();


                get_template_part( 'template-parts/post/single-content', get_post_format() );

                endwhile;

            endif;

        ?>

        <div class="post-navigation">
          <div class="nav-previous"><?php next_post_link( '<h3>%link</h3>' ); ?></div>
          <div class="nav-next"><?php previous_post_link( '<h3>%link</h3>' ); ?></div>
        </div>

      </div>

      <aside>
        <?php dynamic_sidebar('blog'); ?>
      </aside>

    </div>
  </div>

<?php get_footer(); ?>
