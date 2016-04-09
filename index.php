<?php get_header(); ?>


<div class="container">

    <div class="row">

        <div class="col-md-12">

        <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

            <h3><?php the_title(); ?></h3>
                <?php the_content(); ?>
                <p><?php the_field('portfolio_description'); ?></p>

        <?php endwhile; else: ?>

            <h1>Oh no!</h1>
            <p>No content is appearing on this page!</p>

        <?php endif; ?>

        </div>  
    </div>
</div>

<section class="portfolio-section">
    <div class="container">


            <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>


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

            <?php endwhile; else: ?>

                <h1>Oh no!</h1>
                <p>No content is appearing on this page!</p>

            <?php endif; ?>


    </div>
</section>


<?php get_footer(); ?>