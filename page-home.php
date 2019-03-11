<?php

/*

Template Name: Home Page

*/

$counter = 0;

?>


<?php get_header(); ?>

  <header class="home-hero">
    <div class="hero-lead">
      <h1>WordPress &amp; <span class="no-wrap">Front-end Developer</span></h1>
      <p>I focus on clean code, quality responsive sites, and a great user experience</p>
      <a href="#portfolio-link" class="smooth btn-primary">View Portfolio</a>
    </div>
  </header>

  <section class="featured-portfolio">

    <h2 id="portfolio-link">Featured Portfolio</h2>

    <ul class="portfolio">

            <?php

                $args = array(
                    'post_type' => 'portfolio',
                    'post_status' => 'publish',
                    'portfolio_category' => 'featured',
                    'posts_per_page' => 6,
                    'orderby' => 'date',
                    'order' => 'DESC'
                    );
                $query = new WP_Query($args);

            ?>

            <?php if( $query->have_posts() ) : while( $query->have_posts() ) : $query->the_post(); ?>

                <li class="portfolio-item">
                    <a href="<?php the_permalink(); ?>">
                        <figure class="card">

                            <?php

                            if ( has_post_thumbnail() ) {
                                the_post_thumbnail('large');
                            }

                            ?>

                            <figcaption class="caption">
                                <span class="underline">
                                    <h2><?php the_title(); ?></h2>
                                </span>
                            </figcaption>

                        </figure>
                    </a>
                </li>

            <?php endwhile; endif; wp_reset_postdata(); ?>

    </ul>

    <?php 

    $link = get_field('portfolio_button');

    if( $link ): 
      $link_url = $link['url'];
      $link_title = $link['title'];
      $link_target = $link['target'] ? $link['target'] : '_self';
      ?>
      
      <a class="btn-primary" href="<?php echo esc_url($link_url); ?>" target="<?php echo esc_attr($link_target); ?>"><?php echo esc_html($link_title); ?></a>

    <?php endif; ?>

  </section>

  <section class="testimonials">
      <div class="container">
        <div class="row">
          <div class="col-12">
            <h2>Testimonials</h2>
          </div>
        </div>
          <div class="row">
              <div class="col-12">
                <div class="wrap">
                  <blockquote class="blockquote text-center">
                    <p class="mb-0"><i class="fa fa-quote-left" aria-hidden="true"></i> WOW! Chris has this incredible patience that goes beyond infinity. He was with us step-by-step, even after the project was finalized he made himself available for WordPress and SEO support. His attention to detail and customer care by far exceeded our expectations."</p>
                    <footer class="blockquote-footer"><cite title="Source Title">SECG Tax</cite></footer>
                  </blockquote>
                   <blockquote class="blockquote text-center">
                    <p class="mb-0"><i class="fa fa-quote-left" aria-hidden="true"></i> Originally, we hired Chris to do some small website edits. We loved the work that he did so much that we decided to redesign our website. Chris is easy to work with, very thorough, and was able to take our ideas and concepts and implement them, all at a very reasonable rate for such high end work. We could not be happier with the work that Chris has done for us."</p>
                    <footer class="blockquote-footer"><cite title="Source Title">Kelly and Company</cite></footer>
                  </blockquote>
                  <blockquote class="blockquote text-center">
                    <p class="mb-0"><i class="fa fa-quote-left" aria-hidden="true"></i> Christopher designed my latest website for me and I couldn't be more pleased. He was able to implement every single idea that I wanted, and provided many of his own suggestions. Any time I requested changes, he had them completed the same day, and often within an hour. The final result was much better than what I had hoped for, mostly due to Chris's creative thinking."</p>
                    <footer class="blockquote-footer"><cite title="Source Title">Dr. Steven Warner</cite></footer>
                  </blockquote>
                </div>
              </div>
          </div>
      </div>

      <a href="#portfolio-link" class="smooth btn-primary">About Me</a>
  </section>

  <!-- <a href="/about-me/"><h2 class="button">About Me <i class="fa fa-chevron-right" aria-hidden="true"></i></h2></a> -->


<?php get_footer(); ?>
