<?php

/*

Template Name: Contact

*/

?>

<?php get_header(); ?>

  <header class="page-title">
    <div class="container">
      <?php the_title('<h1>', '</h1>'); ?>
    </div>
  </header>

  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="contact-wrap">
            <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

              <?php the_content(); ?>

            <?php endwhile; else: ?>

              <h1>Oh no!</h1>
              <p>No content is appearing on this page!</p>

            <?php endif; ?>
        </div>
      </div>
    </div>
  </div>

<?php get_footer(); ?>
