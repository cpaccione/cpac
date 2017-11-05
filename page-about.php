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
<!--         <p>My path to become a web developer started off in New York City, after 10 years of working for Merrill Lynch. The 2008 crash finally caught up to me in 2012.

        <p>I enrolled myself in a front-end web development course at <a href="https://generalassemb.ly/" target="_blank">General Assembly</a>, at the urging of my then girlfriend who suggested it might be a good idea to learn a skill that I have interest in instead of going back to the world of finance.</p>

        <p>I fell in love with with web development after completing the first weekend of classes. I was shocked that you could make a living doing something that seemed so interesting and fun. I was at once delighted and worried; delighted because I finally found something that wouldn't feel like work, but worried because I knew a long tough road lay ahead of me, and I had to make up for a lot of lost time.</p>

        <p>I completed the course June of 2013, and soon after quit my job at an insurance company. Sitting in my one bedroom apartment, eating fast food by myself on a plastic folding table; the reality of the situation really hit home. The had to be paid, and a dream of transforming myself into a web developer wasn't going to pay it.  I made the decision and now it was time to get to work.</p>

        <p>I did work for free, absorbed information until I often crashed at 4am, and at the end of 2013 I landed my first paid freelance job, which came at the perfect time as my savings ran low</p>

        <p>New York is very expensive, and despite the effort after two months of no income, and failing to land a full-time job as a developer, I came to the realization that my passion that I would reluctantly put my passion on the back-burner.</p>

        <p>Through the help of a friend I was offered an interview at KPMG. I made it to the final interview, but they decided to go with someone else. At this point with no options left and little in the bank, I took a job selling diapers and baby products over the phone for Quidsi in Jersey City. It felt good to land a job, but it felt wrong after all the work I put into becoming a developer.</p>

        <p>A week before I was to start work, I had a phone interview with AgencyMSI in Chicago. The agency was interested in my work, and they offered a temporary 3 month role as their web developer. It was tough to leave friends and family in New York, but I packed as much as I could in my Hyundai, put the rest in storage and drove from New York to Chicago.</p>

        <p>After two months on the job I was hired full-time, and have worked and learned with a great group of designers and creative at AgencyMSI since April of 2014. I work full-time, but I freelance and am currently available.</p> -->

        <p>My path to becoming a web developer started off in New York City, where after 10 years of working for <a href="https://en.wikipedia.org/wiki/Merrill_Lynch" target="_blank">Merrill Lynch</a>, I was laid off.  Instead of going back to the world of finance, I decided to see this as an opportunity to learn a skill that I’ve had much interest in and change the path of my life.  I enrolled myself in a front-end web development course at <a href="https://generalassemb.ly/" target="_blank">General Assembly</a>.</p>

        <p>I fell in love with web development after completing the first weekend of classes. I remember being surprised that I could make a living doing something that seemed so interesting and fun. I was at once delighted and worried; delighted because I finally found something that wouldn't feel like work, but worried because I knew a long tough road lay ahead of me, and I had to make up for a lot of lost time.</p>

        <p>I completed the course in June of 2013, and soon after quit my job at an insurance company. I found myself in New York with no job, no way to pay rent and nothing but a dream of becoming a web developer. I made web development my life, often working until 4 am and crashing from exhaustion. I did work for free, and at the end of 2013, I landed my first paid freelance job.</p>

        <p>As my savings dried up, I accepted a job selling baby products over the phone to stay afloat.  And a week before I was to start, I had a phone interview with <a href="http://agencymsi.com/" target="_blank">AgencyMSI</a> in Chicago. The agency was interested in my work, and they offered me a temporary 3-month role as their web developer. It was hard to leave family and friends in New York, but I knew this was my chance. I packed all I could my Hyundai and drove the 12 hour trip to Chicago.</p>

        <p>I was hired full-time after two months on the job.  Being the only web developer for a major advertising company since April of 2014 has provided me with the challenges and adversity I've needed to grow rapidly in an ever-changing environment.  I've surprised myself regarding the amount and quality of work I was able to turn around in a short period of time, and I've been able to build a network of talented designers and creatives. It’s easy to grow quickly once you find your passion, and when you decide what you want; it will become a reality </p>

        <h2>The Code</h2>
        <p>I'm experienced with front-end frameworks like Bootstrap and Foundation, and my HTML is valid and optimized for SEO. I use SASS to keep my CSS DRY and my stylesheets well organized. I'm experienced with PHP and JavaScript, and choose WordPress as my content management system du jour. I build themes from the ground up with a focus on user experience and design, and make it easy to manage content using ACF once the site is pushed to production.</p>

        <h2>My Services</h2>
        <p>I've been in business for myself since 2013, and work mostly with small to mid-size businesses, as well as individuals. I'm not a designer by trade, but I work with a great group of designers that allows me to offer a professional and fresh design, tha</p>
        <p>My clients are design agencies and freelancers who already have finished design mockups, but need it coded into a fully working WordPress website. I take on coding projects dealing with WordPress, responsive design or static site development. I deal with all of the HTML, CSS, JS, and PHP needed to fully integrate a design into WordPress. Work is always delivered on-time or ahead of schedule with emphasis on great communication.</p>
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
