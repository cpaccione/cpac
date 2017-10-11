<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php wp_head(); ?>
  </head>

  <body  <?php body_class(); ?> >

    <nav class="navbar fixed-top">
    <div class="container-fluid">
      <div class="row">
        <div class="col-xs-10">
          <!-- Brand and toggle get grouped for better mobile display -->
          <div class="navbar-header">
            <!-- <a class="navbar-brand d-none d-sm-block" href="<?php bloginfo('url') ;?>"><span class="first">CHRIS</span> <span class="last">PACCIONE</span></a> -->
            <a class="navbar-brand mobile-brand" href="<?php bloginfo('url') ;?>"><span class="first">C</span> <span class="last">P</span></a>
          </div>
        </div>
        <div class="col-xs-2">
          <!-- cpac mobile menu -->
          <div class="cpac-mobile-menu">
            <span class="menu-item"></span>
            <span class="menu-item"></span>
            <span class="menu-item"></span>
          </div>
        </div>
      </div>
      </div>
    </div>
  </nav>

  <div class="cpac-menu">
    <?php
        wp_nav_menu( array(
            'menu'              => 'primary',
            'theme_location'    => 'primary'
            )
        );
    ?>
  </div>
