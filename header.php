<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="google-site-verification" content="mHCv2nCc-DKlpEh76hDfnhfJp2KgZsksy_aU72g3TRc" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php wp_head(); ?>
  </head>

  <body <?php body_class(); ?>>
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-136355666-1"></script>
    <script>
      window.dataLayer = window.dataLayer || [];
      function gtag(){dataLayer.push(arguments);}
      gtag('js', new Date());

      gtag('config', 'UA-136355666-1');
    </script>

    <div class="nav-wrap">
      <nav class="navbar">
        <!-- <div class="container"> -->
          <!-- Brand and toggle get grouped for better mobile display -->
          <div class="nav-brand">
            <!-- <a class="navbar-brand mobile-brand d-sm-none" href="<?php bloginfo('url') ;?>"><span class="first">C</span> <span class="last">P</span></a> -->
            <!-- <a class="navbar-brand" href="<?php bloginfo('url') ;?>"><span class="first">CHRIS </span><span class="last">PACCIONE</span></a> -->
            <a class="navbar-brand" href="<?php bloginfo('url'); ?>">Chris Paccione</a>
          </div>
          <!-- cpac mobile menu -->
          <div class="cpac-mobile-menu">
            <span class="menu-item"></span>
            <span class="menu-item"></span>
            <span class="menu-item"></span>
          </div>
        <!-- </div> -->
      </nav>
      <div class="cpac-menu">
        <?php
            wp_nav_menu( array(
                'menu'              => 'primary',
                'container'         => 'false',
                'theme_location'    => 'primary'
                )
            );
        ?>
      </div>
    </div>

