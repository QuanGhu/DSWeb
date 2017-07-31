<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>" />
    <meta name="viewport" content="width=device-width" />
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

<div class="headerpop">
    <section id="header">
        <div class="row text-center">
             <img src="<?php echo get_template_directory_uri() ?>/img/ds-logo-text.png"  alt="" class="img-responsive dslogopop" />
        </div>
    </section>
</div>