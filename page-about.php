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
        <p class="lead">Hi, I'm Chris Paccione, a front-end web developer motivated by a passion for coding and WordPress. I offer front-end development, WordPress theme building, and HTML e-mail marketing services. Please view my work below and contact me if your ready to get started or want to discuss your next project.</p>
      </div>
      <div class="col-md-5">
        <img class="circle" src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/chris_paccione_500.jpg" alt="Chris Paccione front-end web developer">
      </div>
    </div>
  </div>
</section>

<?php get_footer(); ?>