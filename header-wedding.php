<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php wp_head(); ?>
  </head>

  <body <?php body_class(); ?>>
  
    <nav class="navbar">
      <div class="container">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="nav-brand">
          <a class="navbar-brand mobile-brand d-sm-none" href="<?php bloginfo('url') ;?>"><span class="first">C</span> <span class="last">P</span></a>
          <a class="navbar-brand d-none d-sm-block" href="<?php bloginfo('url') ;?>"><span class="first">Gwen</span> &amp; <span class="last">Chris</span></a>
        </div>
      </div>
    </nav>
