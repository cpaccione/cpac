<?php

/*

Template Name: Portfolio Template

*/

?>

<?php

$counter = 0;

?>


<?php get_header(); ?>

    <header class="page-title">
      <div class="container">
        <?php the_title('<h1>', '</h1>'); ?>
      </div>
    </header>

    <ul id="portfolio-link" class="portfolio">
        <?php

                $args = array(
                    'post_type' => 'portfolio',
                    'post_status' => 'publish',
                    'posts_per_page' => -1,
                    'orderby' => 'date',
                    'order' => 'DESC'
                    );
                $query = new WP_Query($args);

            ?>

                <?php if( $query->have_posts() ) : while( $query->have_posts() ) : $query->the_post(); ?>

                    <li class="portfolio-item">
                      <a href="<?php the_permalink(); ?>">
                                <figure class="card">

                                    <?php

                                      if ( has_post_thumbnail() ) {
                                        the_post_thumbnail('large');
                                      }

                                    ?>
                                    <figcaption class="caption">
                                        <!-- <div class="overlay-copy">
                                            <div class="center"> -->
                                                <span class="underline">
                                                    <h2><?php the_title(); ?></h2>
                                                </span>
                                            <!-- </div>
                                        </div> -->
                                    </figcaption>
                                </figure>
                          </a>
                        </li>

                <?php endwhile; endif; wp_reset_postdata(); ?>

        </ul>

        <div class="button-wrap text-center">

            <?php 

                $contact_link = get_field('portfolio_contact_button');

                if( $contact_link ): 
                  $contact_url = $contact_link['url'];
                  $contact_title = $contact_link['title'];
                  $contact_target = $contact_link['target'] ? $contact_link['target'] : '_self';
                  ?>
                  
                <a class="btn-primary" href="<?php echo esc_url($contact_url); ?>" target="<?php echo esc_attr($contact_target); ?>"><?php echo esc_html($contact_title); ?></a>

            <?php endif; ?>

        </div>


        

<?php get_footer(); ?>
