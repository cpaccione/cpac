<?php

/*

Template Name: Home Page

*/

$counter = 0;

?>


<?php get_header(); ?>

<section class="home-hero">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="home-hero-copy">
                    <h1>FRONT-END DEVELOPMENT<br>AND DESIGN</h1>
                    <small>HTML <i class="fa fa-minus"></i> CSS <i class="fa fa-minus"></i> jQuery <i class="fa fa-minus"></i> WordPress</small>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="about-me">
    <div class="container">
        <div class="row">
          <div class="col-12">
            <h2 class="text-center">ABOUT ME</h2>
          </div>
        </div>

        <div class="row">
            <div class="col-md-6">
              <img class="img-fluid" src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/chris_paccione.jpg" alt="">
            </div>
            <div class="col-md-6">
                <div class="about-me-copy">
                    <p>I’m a web developer educated at General Assembly, and motivated by a passion for coding. I offer Front-end web development, WordPress theme building, and HTML e-mail. Please view my work and email me for your next project.</p>
                    <a class="btn btn-secondary btn-lg" href="/contact/">CONTACT ME</a>
                </div>
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
                'category_name' => 'featured',
                'showposts' => 6,
                'orderby' => 'date',
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

        <div class="row text-center">
            <div class="col-xs-12">
                <div class="button-wrap-portfolio">
                    <a href="chrispaccione.com/portfolio"><button type="button" class="btn btn-primary btn-lg btn-block active">VIEW ALL</button></a>
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
                <div class="icon-wrap subject">
                    <a href="/code"><i class="fa fa-code fa-5x"></i></a>
                </div>
            </div>
            <div class="col-xs-4 text-center animation-element bounce-up">
                <div class="icon-wrap subject">
                    <a href="/code"><i class="fa fa-wordpress fa-5x"></i></a>
                </div>
            </div>
            <div class="col-xs-4 text-center animation-element bounce-up">
                <div class="icon-wrap subject">
                    <a href="/code"><i class="fa fa-mobile fa-5x"></i></a>
                </div>
            </div>
        </div>

    </div>
</section>



<section class="testimonials">
    <div class="container">
        <div clas="row">
            <div class="col-md-12">
                <h2>TESTIMONIALS</h2>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <ul class="bxslider">
                    <li>
                        <div class="row">
                            <div class="col-sm-12">
                                <h3>WOW! Chris has this incredible patience that goes beyond infinity. He was with us step-by-step, even after the project was finalized he made himself available for WordPress and SEO support. His attention to detail and customer care by far exceeded our expectations."</h3>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-12">
                              <h3>- SECG Tax</h3>
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="row">
                            <div class="col-md-12">
                                <h3>Originally, we hired Chris to do some small website edits. We loved the work that he did so much that we decided to redesign our website. Chris is easy to work with, very thorough, and was able to take our ideas and concepts and implement them, all at a very reasonable rate for such high end work. We could not be happier with the work that Chris has done for us."</h3>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-12">
                                <h3>- Kelly and Company</h3>
                            </div>
                      </div>
                    </li>
                  <li>
                    <div class="row">
                            <div class="col-md-12">
                                <h3>Christopher designed my latest website for me and I couldn't be more pleased. He was able to implement every single idea that I wanted, and provided many of his own suggestions. Any time I requested changes, he had them completed the same day, and often within an hour. The final result was much better than what I had hoped for, mostly due to Chris's creative thinking."</h3>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-12">
                                <h3>- Dr. Steven Warner</h3>
                            </div>
                      </div>
                  </li>
                </ul>
            </div>
        </div>
    </div>
</section>


<?php get_footer(); ?>
