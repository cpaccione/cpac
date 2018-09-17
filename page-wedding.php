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
              <p>Thanks for coming to our Save the Date page! By complete the form to the right, you're not obligated to come to the wedding, but it will help gives us an idea of how many of you want to share the day with us. You can fill out the form to the right, or feel free to give us a call or send an e-mail</p>

              <p>The wedding will take place on <strong>March 30th, 2019</strong> at <a href="#">Aldie Mansion in Doylestown, PA.</a></p>

              <p>We'd love to see you there!</p>

              <small>~ Chris & Gwen</small>
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


<?php get_footer('wedding'); ?>
