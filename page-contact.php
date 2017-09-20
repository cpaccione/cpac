<?php

/*

Template Name: Contact

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

  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="contact-wrap">
          <?php the_content(); ?>
        </div>
      </div>
    </div>
  </div>

<?php get_footer(); ?>
