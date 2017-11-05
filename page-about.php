<?php

/*

Template Name: About Me

*/


?>

<?php get_header(); ?>

    <section class="header d-flex align-items-center">
      <div class="container">
        <div class="row">
          <div class="col-sm-12 text-center">
              <?php the_title('<h1>', '</h1>'); ?>
          </div>
        </div>
      </div>
    </section>


<section class="about-me">
  <div class="container">
    <div class="row">
      <div class="col-md-7">
        <h2>My journey</h2>

        <p>My path to web development started off in New York City, where after 10 years of working for <a href="https://en.wikipedia.org/wiki/Merrill_Lynch" target="_blank">Merrill Lynch</a>, I was laid off.  Instead of going back to the world of finance, I decided to see this as an opportunity to learn a skill that I’ve had much interest in and change the path of my life.  I enrolled myself in a front-end web development course at <a href="https://generalassemb.ly/" target="_blank">General Assembly</a>.</p>

        <p>I fell in love with web development after completing the first weekend of classes. I remember being surprised that I could make a living doing something that seemed so interesting and fun. I was at once delighted and worried; delighted because I finally found something that wouldn't feel like work, but worried because I knew a long tough road lay ahead of me, and I had to make up for a lot of lost time.</p>

        <p>I completed the course in June of 2013, and soon after quit my job at an insurance company. I found myself in New York with no job, no way to pay rent and nothing but a dream of becoming a web developer. I made web development my life, often working until 4 am and crashing from exhaustion. I did work for free, and at the end of 2013, I landed my first paid freelance job.</p>

        <p>As my savings dried up, I accepted a job selling baby products over the phone to stay afloat.  And a week before I was to start, I had a phone interview with <a href="http://agencymsi.com/" target="_blank">AgencyMSI</a> in Chicago. The agency was interested in my work, and they offered me a temporary 3-month role as their web developer. It was hard to leave family and friends in New York, but I knew this was my chance. I packed all I could my Hyundai and drove the 12 hour trip to Chicago.</p>

        <p>I was hired full-time after two months on the job.  Being the only web developer for a major advertising company since April of 2014 has provided me with the challenges and adversity I've needed to grow rapidly in an ever-changing environment.  I've surprised myself regarding the amount and quality of work I was able to turn around in a short period of time, and I've been able to build a network of talented designers and creatives. It’s easy to grow quickly once you find your passion, and when you decide what you want; it will become a reality </p>

        <h2>The Code</h2>
        <p>I'm experienced with front-end frameworks like <a href="http://getbootstrap.com/" target="_blank">Bootstrap</a> and <a href="https://foundation.zurb.com/" target="_blank">Foundation</a>, and my <a href="https://developer.mozilla.org/en-US/docs/Glossary/HTML" target="_blank">HTML</a> is valid and optimized for SEO. I use <a href="http://sass-lang.com/" target="_blank">SASS</a> to keep my <a href="https://en.wikipedia.org/wiki/Don%27t_repeat_yourself" target="_blank">CSS DRY</a> and my stylesheets well organized. I'm experienced with <a href="http://php.net/manual/en/intro-whatis.php" target="_blank">PHP</a> and <a href="https://developer.mozilla.org/en-US/docs/Web/JavaScript" target="_blank">JavaScript</a>, and choose <a href="https://wordpress.org/" target="_blank">WordPress</a> as my content management system du jour. I build themes from the ground up with a focus on user experience and design, and make it easy to manage content using <a href="https://www.advancedcustomfields.com/" target="_blank">ACF</a> once the site is pushed to production.</p>

        <h2>My Services</h2>
        <p>I've been in business for myself since 2013, and work mostly with small to mid-size businesses, as well as individuals. I'm not a designer by trade, but I work with a great group of designers that allows me to offer a professional and fresh design to all your projects.</p>
        <p>I'm availabe to help on all your web projects, but I specialize in WordPress, and offer HTML e-mail services which include design and the deployment of the e-mails. When I work with you I won't bombard you with technical jargon, and coding terms, but instead I focus on meeting your goals and putting togehter a great user experience. Please click the link below if you want to send a message about your current project, and thank you for reading.</p>
      </div>
      <div class="col-md-5">
        <img class="circle" src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/chris_paccione_500.jpg" alt="Chris Paccione front-end web developer">
      </div>
    </div>
  </div>
</section>

    <a href="/hire-me/"><button type="button" class="d-sm-none btn btn-primary btn-lg btn-block"><h3>Hire me <i class="fa fa-chevron-right" aria-hidden="true"></i></h3></button></a>
    <a href="/hire-me/"><button type="button" class="d-none d-sm-block btn btn-primary btn-lg btn-block"><h3>Hire me to work on your project <i class="fa fa-chevron-right" aria-hidden="true"></i></h3></button></a>

<?php get_footer(); ?>
