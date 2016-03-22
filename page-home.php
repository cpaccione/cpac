<?php

/*

Template Name: Home Page

*/

?>


<?php get_header(); ?>

<section class="home-hero">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="home-hero-copy">
                    <h1>FRONT-END DEVELOPMENT AND DESIGN</h1>
                    <small>HTML <i class="fa fa-minus"></i> CSS <i class="fa fa-minus"></i> jQuery <i class="fa fa-minus"></i> WordPress</small>
                </div>
            </div>
        </div>
    </div>
</section>



<section class="services">
    <div class="container">

        <div class="row">
            <div class="col-sm-12 text-center">
                <h2>MY SERVICES</h2>
            </div>
        </div>

        <div class="row service-icons">
            <div class="col-xs-4 text-center animation-element bounce-up">
            <a href="#"><i class="subject fa fa-code fa-5x"></i></a>
            </div>
            <div class="col-xs-4 text-center animation-element bounce-up">
            <a href="#"><i class="subject fa fa-wordpress fa-5x"></i></a>
            </div>
            <div class="col-xs-4 text-center animation-element bounce-up">
            <a href="#"><i class="subject fa fa-mobile fa-5x"></i></a>
            </div>
        </div>

    </div>
</section>

<section class="portfolio-section">
    <div class="container">

        <div class="row">
            <div class="col-sm-12 text-center">
                <h2>PORTFOLIO</h2>
            </div>
        </div>

    
    <?php

            $args = array(
                'post_type' => 'portfolio',
                'orderby' => 'menu_order',
                'order' => 'ASC',
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

<section class="about-me">
    <div class="container">

        <div class="row">
            <div class="col-sm-12 text-center">
                <h2>ABOUT ME</h2>
            </div>
        </div>

        <div class="row">
            <div class="col-md-12">
                <div class="about-me-copy">
                    I’m Chris Paccione, a Front-End Web Developer educated at General Assembly, and motivated by a passion for coding.

                    I offer Front-end web development, WordPress theme building, responsive design, and HTML e-mail.

                    Please view my work and email me if you need help on your next project. 
                </div>
            </div>
        </div>

        <div class="row text-center">
            <div class="col-xs-12">
                <div class="button-wrap">
                    <a href="<?php the_field('button_link'); ?>"><button type="button" class="btn btn-primary btn-lg btn-block active"><?php the_field('button_copy'); ?></button></a>
                </div>
            </div>
        </div>
        
    </div>
</section>


<?php get_footer(); ?>