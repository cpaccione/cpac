<?php

/*

Template Name: About Me

*/


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

    <section class="about-me">
      <div class="container">
        <div class="row">
          <div class="col-md-7">

            <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

              <?php the_content(); ?>

            <?php endwhile; else: ?>

                <h1>Oh no!</h1>
                <p>No content is appearing on this page!</p>

            <?php endif; ?>

          </div>
          <div class="col-md-5">
            <?php the_post_thumbnail('full', array(
              'class' => 'circle'
            )); ?>
          </div>
        </div>
      </div>
    </section>

    <a href="/hire-me/"><button type="button" class="d-sm-none btn btn-primary btn-lg btn-block"><h3>Hire me <i class="fa fa-chevron-right" aria-hidden="true"></i></h3></button></a>
    <a href="/hire-me/"><button type="button" class="d-none d-sm-block btn btn-primary btn-lg btn-block"><h3>Hire me to work on your project <i class="fa fa-chevron-right" aria-hidden="true"></i></h3></button></a>

<?php get_footer(); ?>
