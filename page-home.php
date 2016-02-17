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

<section class="portfolion-section">
    <div class="container">

        <div class="row">
            <div class="col-sm-12">
                <h2>My Recent Work</h2>
            </div>
        </div>

        <div class="row">

            <div class="col-sm-3">
                <a href="#">
                    <div class="img-overlay">
                        <img src="<?php bloginfo('template_directory'); ?>/images/steamist.png">
                        <div class="portfolio-overlay">Steamist</div>
                    </div>
                </a>
            </div>

            <div class="col-sm-3">
                <a href="#">
                    <div class="img-overlay">
                        <img src="<?php bloginfo('template_directory'); ?>/images/steamist.png">
                        <div class="portfolio-overlay">Steamist</div>
                    </div>
                </a>
            </div>

            <div class="col-sm-3">
                <a href="#">
                    <div class="img-overlay">
                        <img src="<?php bloginfo('template_directory'); ?>/images/steamist.png">
                        <div class="portfolio-overlay">Steamist</div>
                    </div>
                </a>
            </div>

            <div class="col-sm-3">
                <a href="#">
                    <div class="img-overlay">
                        <img src="<?php bloginfo('template_directory'); ?>/images/steamist.png">
                        <div class="portfolio-overlay">Steamist</div>
                    </div>
                </a>
            </div>

        </div>

    </div>
</section>



<?php get_footer(); ?>