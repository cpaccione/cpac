<?php get_header(); ?>

<section class="single-portfolio-wrap">
    <div class="container">

        <div class="row">
          <div class="col-sm-6">
              <?php the_title('<h1>', '</h1>'); ?>
              <h2><span>Built on:</span> <?php the_field('built_on'); ?></h2>

              <ul>
                <?php if( have_rows('portfolio_description') ): ?>
                  <?php while( have_rows('portfolio_description') ) : the_row();
                    $list_item = get_sub_field('what_i_did');
                  ?>

                  <li><?php echo $list_item; ?></li>

                  <?php endwhile; ?>
                <?php endif; ?>
              </ul>

                <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

                    <span class="content"><?php the_content(); ?></span>

                <?php endwhile; else: ?>

                    <h1>Oh no!</h1>
                    <p>No content is appearing on this page!</p>

                <?php endif; ?>


                <div class="button-wrap">
                    <a href="<?php the_field('portfolio_button'); ?>" target="_blank"><button type="button" class="btn btn-primary btn-lg active">VISIT SITE</button></a>
                </div>

                <ul class="portfolio-single-navigation">
                    <?php
                            if( get_adjacent_post(false, '', true) ) {
                                previous_post_link('<li>%link</li>', 'Previous');
                            } else {
                                $first = new WP_Query('posts_per_page=1&order=DESC&post_type=portfolio'); $first->the_post();
                                    echo '<li><a href="' . get_permalink() . '">Previous</a></li>';
                                wp_reset_query();
                            };

                            if( get_adjacent_post(false, '', false) ) {
                                next_post_link('<li>%link</li>', 'Next');
                            } else {
                                $last = new WP_Query('posts_per_page=1&order=ASC&post_type=portfolio'); $last->the_post();
                                    echo '<li><a href="' . get_permalink() . '">Next</a></li>';
                                wp_reset_query();
                            };
                        ?>

                        <?php previous_posts_link('label','max_pages'); ?>
                        <?php  next_posts_link('label','max_pages'); ?>
                </ul>

            </div>
            <div class="col-sm-6">

                <?php

                    $cpac_portfolio_image = get_field('portfolio_image');

                    if( !empty($cpac_portfolio_image) ): ?>

                        <a href="<?php the_field('portfolio_button'); ?>" target="_blank"><img class="portfolio-image" src="<?php echo $cpac_portfolio_image['url']; ?>" alt="<?php echo $cpac_portfolio_image['alt']; ?>" /></a>

                <?php endif; ?>


            </div>
        </div>

    </div>
</section>


<?php get_footer(); ?>
