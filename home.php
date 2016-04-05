<?php get_header(); ?>

<section class="header">
    <div class="container">
        <div class="row">
            <div class="col-sm-12 text-center">
                <h1>BLOG</h1>
            </div>
        </div>
    </div>
</section>

<div class="container">
    <div class="row">
        <div class="col-md-9">

            <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

                <h6><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h6>
                <ul class="blog-info">
                    <li><i class="fa fa-user"></i> <?php the_author_posts_link(); ?></li>
                    <li><i class="fa fa-clock-o"></i> <?php the_date(); ?></li>
                </ul>
                <p><?php echo strip_tags( get_the_excerpt() ); ?></p>
                <p><a class="post-link" href="<?php the_permalink(); ?>"><button type="button" class="btn btn-primary btn-lg active">READ MORE</button></a></p>

            <?php endwhile; else: ?>

                <h1>Oh no!</h1>
                <p>No content is appearing on this page!</p>

            <?php endif; ?>

        </div>

        <div class="col-md-3">

            <?php dynamic_sidebar('blog'); ?>
            
        </div>

    
    </div>
</div>

<?php get_footer(); ?>