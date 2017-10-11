<?php

/*

Template Name: Home Page

*/

$counter = 0;

?>


<?php get_header(); ?>

  <!-- <section class="home-hero">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="home-hero-copy">
            <div id="typed-strings">
            <h1>FRONT-END DEVELOPMENT<br>AND DESIGN</h1>
            </div>
            <h1><span id="typed"></span></h1>
            <small>HTML <i class="fa fa-minus"></i> CSS <i class="fa fa-minus"></i> jQuery <i class="fa fa-minus"></i> WordPress</small>
          </div>
        </div>
      </div>
    </div>
  </section> -->

  <section class="home-hero">
    <div class="container">
      <div class="row">
        <div class="col-md-12 text-center">
          <h1>FRONT-END DEVELOPMENT AND DESIGN</h1>
          <small><i class="fa fa-minus"></i> CSS <i class="fa fa-minus"></i> jQuery <i class="fa fa-minus"></i> WordPress</small>
      </div>
    </div>

      <div class="row">
        <!--   <div class="col-md-5"></div> -->
          <div class="col-md-6">
                        <h2 class="section-title">ABOUT ME</h2>
          <p>Hi, I'm Chris Paccione, a front-end web developer motivated by a passion for coding and WordPress. I offer front-end development, WordPress theme building, and HTML e-mail marketing services. Please view my work below and contact me if your ready to get started or want to discuss your next project.</p>
                    <p>Hi, I'm Chris Paccione, a front-end web developer motivated by a passion for coding and WordPress. I offer front-end development, WordPress theme building, and HTML e-mail marketing services. Please view my work below and contact me if your ready to get started or want to discuss your next project.</p>
          </div>
          <div class="col-md-6">

          <img class="img-fluid" src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/chris_paccione.jpg" alt="Chris Paccione front-end web developer">
          <div class="button-wrap">
              <a href="/contact/"><button type="button" class="btn btn-primary btn-lg active">Contact Me</button></a>
          </div>
          </div>
      </div>
    </div>
  </section>

  <section>
    <div class="button-wrap">
        <a href="/contact/"><button type="button" class="btn btn-primary btn-lg active">Contact Me</button></a>
    </div>
  </section>

<!-- <section class="about-me">
    <div class="container">

        <div class="row">
          <div class="col-12">
            <h2 class="section-title text-center">ABOUT ME</h2>
          </div>
        </div>

        <div class="row">

            <div class="col-md-6">
              <img class="img-fluid" src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/chris_paccione.jpg" alt="Chris Paccione front-end web developer">
            </div>

            <div class="col-md-6">
                <div class="about-me-copy">
                    <p>Hi, I'm Chris Paccione, a front-end web developer motivated by a passion for coding and WordPress. I offer front-end development, WordPress theme building, and HTML e-mail marketing services. Please view my work below and contact me if your ready to get started or want to discuss your next project.</p>
                    <div class="button-wrap">
                        <a href="/contact/"><button type="button" class="btn btn-primary btn-lg active">Contact Me</button></a>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section> -->



<!--
<section class="services">
    <div class="container">

        <div class="row">
            <div class="col-sm-12 text-center">
                <h2 class="section-title">MY SERVICES</h2>
            </div>
        </div>

        <div class="row service-icons">
            <div class="col-sm-4 text-center animation-element bounce-up">
                <div class="icon-wrap subject">
                    <i class="fa fa-code fa-5x"></i>
                </div>
                <p>I focus on writing well-structured and maintainable HTML, CSS, and JavaScript. I take great care to make sure my code is standards compliant and follows best practices for fast loading.</p>
            </div>
            <div class="col-sm-4 text-center animation-element bounce-up">
                <div class="icon-wrap subject">
                    <i class="fa fa-wordpress fa-5x"></i>
                </div>
                <p>I develop WordPress themes from scratch and aim to create an easy and straighforward admin experience to enable the end user easily manage content without the need for a developer.</p>
            </div>
            <div class="col-sm-4 text-center animation-element bounce-up">
                <div class="icon-wrap subject">
                    <i class="fa fa-mobile fa-5x"></i>
                </div>
                <p>I code mobile first, which means your site will look great on all devices which include smartphones, tablets, laptops and desktops.</p>
            </div>
        </div>

    </div>
</section> -->



<!-- <section class="testimonials">
    <div class="container">
        <div clas="row">
            <div class="col-md-12">
                <h2 class="section-title">TESTIMONIALS</h2>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <ul class="bxslider">
                    <li>
                        <div class="row">
                            <div class="col-sm-12">
                                <p>WOW! Chris has this incredible patience that goes beyond infinity. He was with us step-by-step, even after the project was finalized he made himself available for WordPress and SEO support. His attention to detail and customer care by far exceeded our expectations."</p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-12">
                              <h3>- SECG Tax</h3>
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="row">
                            <div class="col-md-12">
                                <p>Originally, we hired Chris to do some small website edits. We loved the work that he did so much that we decided to redesign our website. Chris is easy to work with, very thorough, and was able to take our ideas and concepts and implement them, all at a very reasonable rate for such high end work. We could not be happier with the work that Chris has done for us."</p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-12">
                                <h3>- Kelly and Company</h3>
                            </div>
                      </div>
                    </li>
                  <li>
                    <div class="row">
                            <div class="col-md-12">
                                <p>Christopher designed my latest website for me and I couldn't be more pleased. He was able to implement every single idea that I wanted, and provided many of his own suggestions. Any time I requested changes, he had them completed the same day, and often within an hour. The final result was much better than what I had hoped for, mostly due to Chris's creative thinking."</p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-12">
                                <h3>- Dr. Steven Warner</h3>
                            </div>
                      </div>
                  </li>
                </ul>
            </div>
        </div>
    </div>
</section> -->


<?php get_footer(); ?>
