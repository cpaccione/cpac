<?php

/*

Template Name: Contact

*/

?>

<?php get_header(); ?>

<div class="container">
  <div class="row">
    <div class="col-12">
        <h1 class="blog-title"><?php the_title(); ?></h1>
        <hr>
    </div>
  </div>
  <div class="row">
    <div class="col-md-12">
      <div class="contact-wrap">
        <?php the_content(); ?>
      </div>
    </div>
  </div>
</div>

<?php get_footer(); ?>
