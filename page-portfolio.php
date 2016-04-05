<?php

/*

Template Name: Home Page

*/

?>


<?php get_header(); ?>

<section class="header">
    <div class="container">
        <div class="row">
            <div class="col-sm-12 text-center">
                <h1>PORTFOLIO</h1>
            </div>
        </div>
    </div>
</section>

<section class="page-portfolio">
    <div class="container">

    <?php

            $args = array(
                'post_type' => 'portfolio',
                'orderby' => 'menu_order',
                'order' => 'ASC'
                );
            $query = new WP_Query($args);

        ?>
        
            <?php if( $query->have_posts() ) : while( $query->have_posts() ) : $query->the_post(); ?>

                <?php if($counter % 3 === 0) : echo '<div class="row port-row">'; endif; ?>

                    <div class="col-sm-4 animation-element bounce-up">
                        <a href="<?php the_permalink(); ?>">
                            <div class="subject img-overlay">
                                <?php
                                    $image = get_field('portfolio_image');

                                    if( !empty($image) ): ?>

                                    <img class="center-block " src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>">

                                <?php endif; ?>
 
                                <div class="portfolio-overlay">
                                    <div class="overlay-copy">
                                        <div class="center">
                                            <span class="underline">
                                                <h5><?php the_title(); ?></h5>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>

                <?php $counter++; if($counter % 3 === 0) : echo '</div>'; endif; ?>

            <?php endwhile; endif; wp_reset_postdata(); ?>


    </div>
</section>



<?php get_footer(); ?>