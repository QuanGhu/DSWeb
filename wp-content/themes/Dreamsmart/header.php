<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>" />
    <meta name="viewport" content="width=device-width" />

    <meta property="og:title" content="Dreamsmart Solutions - The go to place for Web & Mobile Apps Development, User Interface & User Experience Design and Digital Marketing in Singapore and Asia"/>
    <meta property="og:url" content="http://dreamsmart.com.sg"/>
    <meta property="og:type" content="website"/>
    <meta property="og:image" content="http://dreamsmart.shrimpventures.com/wp-content/uploads/2017/03/12695048_945081992245005_2189265483141401948_o.jpg"/>
    <meta property="og:site_name" content="Dreamsmart Solutions - Weaving Digital Dreams"/>
    <meta property="og:description" content="Dreamsmart is united by our unwavering commitment for the best quality in everything we do. We practice equality to all our clients and put in the quality for all our works for you. We progressed with the greatest detailed of planning, most beautiful design and flawless development. In short, we do the best work for the best clients."/>
    <meta name="keywords" content="web design, website templates, ecommerce website, web development, mobile app development, mobile application development, create website, web developer, web designer, responsive web design, website creator, web design company, web page design, best website design, ecommerce website design, web design software, design website, website designer, freelance web designer, web programming, web application development, web development company, digital marketing, digital agency" />
    <meta name="description" content="Dreamsmart is united by our unwavering commitment for the best quality in everything we do. We practice equality to all our clients and put in the quality for all our works for you. We progressed with the greatest detailed of planning, most beautiful design and flawless development. In short, we do the best work for the best clients."/>

    <link rel="stylesheet" type="text/css" href="<?php echo get_stylesheet_uri(); ?>" />
    <script src="<?php echo get_template_directory_uri() ?>/js/jquery.min.js" type="text/javascript"></script>
    <script src="<?php echo get_template_directory_uri() ?>/js/bootstrap.min.js" type="text/javascript"></script>
    <script>
    $(document).ready(function () {
            $(".navbar-toggle").on("click", function () {
                  $(this).toggleClass("active");
            });
      });
    </script>
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?> >
<div class="container-full">
    <section id="header">
       <nav class="navbar navbar-default">
          <div class="container-fluid">
             <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                   <span class="icon-bar"></span>
                   <span class="icon-bar"></span>
                   <span class="icon-bar"></span>
                </button>
             <a class="navbar-brand" href="<?php echo esc_url( home_url( '/' ) ); ?>">
                 <img src="<?php echo get_template_directory_uri() ?>/img/ds-logo-text.png" alt="" class="img-responsive"/>
             </a>
             </div>
             <div class="collapse navbar-collapse" id="myNavbar">
                 <?php
                   wp_nav_menu(array(
                       'menu' => 'header-menu',
                       'menu_class' => 'nav navbar-nav navbar-right',
                       'container' => 'false',
                       'walker' => new Bootstrap_Walker_Nav_Menu()
                   ));
                   ?>
             </div>
          </div>
       </nav>
    </section>

    <div class="headerpop" style="display: none">
      <section id="header">
          <div class="row text-center">
             <img src="<?php echo get_template_directory_uri() ?>/img/ds-logo-text.png"  alt="" class="img-responsive dslogopop" />
          </div>
      </section>
    </div>
