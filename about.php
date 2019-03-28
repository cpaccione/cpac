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

                <?php 

                $link = get_field('about_me_button');

                if( $link ): 
                  $link_url = $link['url'];
                  $link_title = $link['title'];
                  $link_target = $link['target'] ? $link['target'] : '_self';
                  ?>
                  
                  <a class="btn-primary" href="<?php echo esc_url($link_url); ?>" target="<?php echo esc_attr($link_target); ?>"><?php echo esc_html($link_title); ?></a>

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
