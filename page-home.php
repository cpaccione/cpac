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
                    <h2>FRONT-END DEVELOPMENT AND DESIGN</h2>
                    <small>HTML <i class="fa fa-minus"></i> CSS <i class="fa fa-minus"></i> jQuery <i class="fa fa-minus"></i> WordPress</small>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="portfolion-section">
    <div class="container">

        <div class="row">
            <div class="col-sm-12 text-center">
                <h2>MY SERVICES</h2>
            </div>
        </div>

        <div class="row">
            <div class="col-sm-3 text-center">
            <a href="https://en.wikipedia.org/wiki/HTML5" target="_blank"><i class="fa fa-html5 fa-5x"></i></a>
            </div>
            <div class="col-sm-3 text-center">
            <a href="https://en.wikipedia.org/wiki/Cascading_Style_Sheets" target="_blank"><i class="fa fa-css3 fa-5x"></i></a>
            </div>
            <div class="col-sm-3 mfizz-icon text-center">
            <a href="https://en.wikipedia.org/wiki/JQuery" target="_blank"><i class="icon-javascript"></i></a>  
            </div>
            <div class="col-sm-3 text-center">
            <a href="https://wordpress.org/" target="_blank"><i class="fa fa-wordpress fa-5x"></i></a>
            </div>
        </div>

        <div class="row">
            <div class="col-sm-12 text-center">
                <h2>PORTFOLIO</h2>
            </div>
        </div>

        <div class="row port-row">

            <div class="col-md-3">
                <a href="#">
                    <div class="img-overlay">
                        <img src="<?php bloginfo('template_directory'); ?>/images/steamist.png">
                        <div class="portfolio-overlay">
                            <div class="overlay-copy">
                                <h5>Steamist</h5>
                            </div>
                        </div>
                    </div>
                </a>
            </div>

            <div class="col-md-3">
                <a href="#">
                    <div class="img-overlay">
                        <img src="<?php bloginfo('template_directory'); ?>/images/steamist.png">
                        <div class="portfolio-overlay">Steamist</div>
                    </div>
                </a>
            </div>

            <div class="col-md-3">
                <a href="#">
                    <div class="img-overlay">
                        <img src="<?php bloginfo('template_directory'); ?>/images/steamist.png">
                        <div class="portfolio-overlay">Steamist</div>
                    </div>
                </a>
            </div>

            <div class="col-md-3">
                <a href="#">
                    <div class="img-overlay">
                        <img src="<?php bloginfo('template_directory'); ?>/images/steamist.png">
                        <div class="portfolio-overlay">Steamist</div>
                    </div>
                </a>
            </div>

        </div>

        <div class="row port-row">

            <div class="col-md-3">
                <a href="#">
                    <div class="img-overlay">
                        <img src="<?php bloginfo('template_directory'); ?>/images/steamist.png">
                        <div class="portfolio-overlay">
                            <div class="overlay-copy">
                                <h5>Steamist</h5>
                            </div>
                        </div>
                    </div>
                </a>
            </div>

            <div class="col-md-3">
                <a href="#">
                    <div class="img-overlay">
                        <img src="<?php bloginfo('template_directory'); ?>/images/steamist.png">
                        <div class="portfolio-overlay">Steamist</div>
                    </div>
                </a>
            </div>

            <div class="col-md-3">
                <a href="#">
                    <div class="img-overlay">
                        <img src="<?php bloginfo('template_directory'); ?>/images/steamist.png">
                        <div class="portfolio-overlay">Steamist</div>
                    </div>
                </a>
            </div>

            <div class="col-md-3">
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