<?php get_header(); ?>

<div class="container">
    <div class="row">
        <div class="col-md-9">
        <p>This is index.php</p>

            <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

                <h3><?php the_title(); ?></h3>
                    <?php the_content(); ?>

            <?php endwhile; else: ?>

                <h1>Oh no!</h1>
                <p>No content is appearing on this page!</p>

            <?php endif; ?>

        </div>

        <div class="col-md-3">

            <?php get_sidebar(); ?>
            
        </div>

    
    </div>
</div>

<?php get_footer(); ?>