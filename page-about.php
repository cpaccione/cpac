<?php

/*

Template Name: About Me

*/


?>

<?php get_header(); ?>

    <header class="page-title">
      <div class="container">

        <?php the_title('<h1>', '</h1>'); ?>
        
      </div>
    </header>

    <div class="container">
      <div class="about-me">

          <div class="main">

              <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

                <?php the_content(); ?>

              <?php endwhile; else: ?>

                  <h1>Oh no!</h1>
                  <p>No content is appearing on this page!</p>

              <?php endif; ?>

          </div>

          <aside>

            <?php the_post_thumbnail('full', array(
              'class' => ''
            )); ?>

          </aside>

      </div>
    </div>

<?php get_footer(); ?>
