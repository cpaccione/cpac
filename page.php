    
    <?php get_header(); ?>

        <div class="container-default">

            <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

                <?php the_title('<h1 class="title-default">', '</h1>'); ?>
                <?php the_content(); ?>

            <?php endwhile; else: ?>

                <p>No content is appearing on this page!</p>

            <?php endif; ?>          

        </div>

    <?php get_footer(); ?>