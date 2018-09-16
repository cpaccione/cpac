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
      <div class="container">
        <div class="row">
          <div class="col-sm-6">
            <div class="wrap">
              <p>Thanks for visitiing our RSVP page. If you think you can make it we would really appreciate if you can fill out the form to the right, or feel free to give us a call.</p>

              <p>The wedding will take place on March 30th, 2019 at Aldie Mansion in Doylestown, PA.</p>
            </div>
          </div>
          <div class="col-sm-6">
            <div class="wedding-contact">
              <?php echo do_shortcode('[wpforms id="259" title="false" description="false"]'); ?>
            </div>
          </div>
        </div>

      </div>
    </section>


<?php get_footer(); ?>
