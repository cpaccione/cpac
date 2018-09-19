<?php

/*

Template Name: Wedding Template

*/

?>

<?php get_header('wedding'); ?>

    <section class="wedding-header">
      <div id="overlay">
        <div class="container">
          <div class="row">
            <div class="col-sm-12 text-center">
              <h1>Save <span>the</span> Date</h1>
              <h2>Gwen &amp; Chris</h2>
              <p>March 30th 2019</p>
              <p>Aldie Mansion, Doylestown, PA</p>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section class="wedding-main">
      <div class="container wedding-container">
        <div class="row">
          <div class="col-sm-6">
            <div class="wrap">
              <h2>Hello!</h2>
              <p>Thanks for coming to our Save the Date page! By completing the form to the right, you will help give us an idea of how many of you want to share the day with us. You can either fill out the form to the right, or feel free to give us a call or send and <a href="mailto:cpaccione77@gmail.com?Subject=Save%the%Date" target="_top"><span style="white-space: nowrap;">e-mail.</span></a></p>

              <p>Also, while we adore your children, we have limited space (and intend to party). We respectfully request no children under the age of 16 attend the ceremony and reception. Please make it a date night!</p>

              <p>The wedding will take place on <strong>March 30th, 2019</strong> at <a href="http://jamcater.com/venues/aldie-mansion" target="_blank">Aldie Mansion in Doylestown, PA.</a> Accommodation information will be available on our official RSVP page (TBD)</p>

              <p>We'd love to see you there!</p>

              <small>~ Chris & Gwen</small>
            </div>
          </div>
          <div class="col-sm-6">
            <div class="wedding-contact">
              
              <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

                  <?php the_content(); ?>

                <?php endwhile; else: ?>

              	<p>There are no posts or pages here</p>

                <?php endif; ?>

            </div>
          </div>
        </div>

      </div>
    </section>


<?php get_footer('wedding'); ?>
