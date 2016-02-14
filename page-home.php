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
                    <h2>Front-end Development and Design</h2>
                    <p>HTML CSS JavaScript WordPress</p>
                </div>
            </div>
        </div>
    </div>
</section>

<div class="container">

            <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

                    <?php the_content(); ?>

            <?php endwhile; else: ?>

                <h1>Oh no!</h1>
                <p>No content is appearing on this page!</p>

            <?php endif; ?>

        <h2>My Recent Work</h2>

        <?php

            $args = array('post_type' => 'portfolio' );
            $query = new WP_Query($args);

        ?>
        
            <?php if( $query->have_posts() ) : while( $query->have_posts() ) : $query->the_post(); ?>

                <?php if($counter % 4 === 0) : echo '<div class="row">'; endif; ?>

                    <div class="col-sm-3 text-center">

                        <div class="">
                            <?php
                            
                            $image = get_field('portfolio_image');

                            if( !empty($image) ): ?>

                            <a href="<?php the_permalink(); ?>"><img class="center-block img-responsive" src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>"></a>

                        </div>

                    <?php endif; ?>
                        
                    </div>

                <?php $counter++; if($counter % 4 === 0) : echo '</div>'; endif; ?>

            <?php endwhile; endif; wp_reset_postdata(); ?>

 

    <?php if( have_rows('pdf_file') ): ?>

        <?php while( have_rows('pdf_file') ): the_row();

    $file = get_sub_field('pdf');

    ?>

        
    <a href="<?php echo $file['url']; ?>" target="_blank"><?php echo $file['title']; ?></a>


        <?php endwhile; ?>

    <?php endif; ?>

</div>



<?php get_footer(); ?>