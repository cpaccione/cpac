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
        I'm a full-time and freelance front-end web developer motivated by a passion for coding and WordPress. I offer front-end development, WordPress theme building, and HTML e-mail marketing services.

        I've been in business for myself since 2013, and mostly work with small to mid-size businesses. During the day I work as a web developer for AgencyMSI in downtown Chicago.

        My path to become a web developer started off in New York City. I was laid off in 2012 after 10 years of working for Merrill Lynch. I enrolled myself in a front-end web development course at General Assembly, at the urging of my then girlfriend who suggested it might be a good idea to learn a skill that I have interest in instead of going back to the world of finance.

        I fell in love with with web development after completing the first weekend of classes. I was shocked that you could make a living doing something that seemed so interesting and fun. I was at once delighted and worried; delighted because I finally found something that wouldn't feel like work, but worried because I knew a long tough road lay ahead of me, and I had to make up for a lot of lost time.

        I completed the course at General Assembly in June of 2013, and soon after quit my job at an insurance company. I found myself in New York with no job, with rent that had to be paid, and nothing but a dream of becoming a web developer. Sitting in my one bedroom apartment, eating fast food by myself on a plastic folding table; the reality of the situation really hit home. I made this decision and now it was time to get to work. I kept myself afloat with my savings, and made web development my life often working until 4am and crashing from exhaustion

        I did work for free, and at the end of 2013 I landed my first paid freelance job, which came at the right time as my savings ran low. Unfortunately New York is very expensive, and after two months of no income, and failing to land a full-time as a developer, I came to the realization that I need to take whatever I could get, and put my passion on the back-burner as plan-b. 

        Through the help of a friend I was offered an interview at KPMG. I made it to the final interview, but they decided to go with someone else. At this point with no options left and little in the bank, I took a job selling diapers and baby products over the phone for Quidsi in Jersey City. It felt good to land a job, but it felt wrong after all the work I put into becoming a developer.

        A week before I was to start work, I had a phone interview with AgencyMSI in Chicago. The agency was interested in my work, and they offered a temporary 3 month role as their web developer. It was tough to leave friends and family in New York, but I packed as much as I could in my Hyundai, put the rest in storage and drove from New York to Chicago. 

        After two months on the job I was hired full-time, and have worked and learned with a great group of designers and creative at AgencyMSI since April of 2014. I work full-time, but I freelance and am currently available.
      </div>
      <div class="col-md-5">
        <img class="circle" src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/chris_paccione_500.jpg" alt="Chris Paccione front-end web developer">
      </div>
    </div>
  </div>
</section>

<?php get_footer(); ?>