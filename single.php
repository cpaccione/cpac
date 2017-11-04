<?php get_header(); ?>

  <!-- <section class="header d-flex align-items-center">
    <div class="container">
        <div class="row">
            <div class="col-sm-12 text-center">
                <?php single_post_title('<h1>', '</h1>'); ?>
            </div>
        </div>
    </div>
  </section> -->

  <div class="container">
    <div class="row">
      <div class="col-md-9">
        <article class="blog-content">
          <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

            <h1><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h1>
              <ul class="blog-info">
                <li><i class="fa fa-user"></i> <?php the_author_posts_link(); ?></li>
                <li><i class="fa fa-clock-o"></i> <?php the_date(); ?></li>
              </ul>

          <?php the_content(); ?>

          <?php endwhile; else: ?>

            <h1>Oh no!</h1>
            <p>No content is appearing on this page!</p>

          <?php endif; ?>
        </article>
      </div>
      <div class="col-md-3">
        <?php dynamic_sidebar('blog'); ?>
      </div>
    </div>
  </div>

<?php get_footer(); ?>
