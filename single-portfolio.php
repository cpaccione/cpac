<?php get_header(); ?>



<div class="container">
    <div class="row">
            
            <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

                    <?php the_content(); ?>

            <?php endwhile; else: ?>

                <h1>Oh no!</h1>
                <p>No content is appearing on this page!</p>

            <?php endif; ?>

            <?php 

            $image = get_field('portfolio_image');
            $description = get_field('portfolio_description');

            if( !empty($image) ): ?>

                <img class="img-responsive" src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
                <p><?php echo $description; ?></p>

            <?php endif;



            ?>

                <?php 
                    if( get_adjacent_post(false, '', true) ) { 
                        previous_post_link('%link', '<i class="fa fa-angle-left fa-5x"></i>');
                    } else { 
                        $first = new WP_Query('posts_per_page=1&order=DESC&post_type=service'); $first->the_post();
                            echo '<a href="' . get_permalink() . '"><i class="fa fa-angle-left fa-5x"></i></a>';
                        wp_reset_query();
                    };

                    if( get_adjacent_post(false, '', false) ) { 
                        next_post_link('%link', '<i class="fa fa-angle-right fa-5x"></i>');
                    } else { 
                        $last = new WP_Query('posts_per_page=1&order=ASC&post_type=service'); $last->the_post();
                            echo '<a href="' . get_permalink() . '"><i class="fa fa-angle-right fa-5x"></i></a>';
                        wp_reset_query();
                    };
                ?>
            
            <?php previous_posts_link('label','max_pages'); ?>
            <?php next_posts_link('label','max_pages'); ?>

    </div> 
</div>

<?php get_footer(); ?>