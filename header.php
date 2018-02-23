<!DOCTYPE html>
<html <?php language_attributes();?> ng-app="wpAngularTheme">
  <head>
      <meta <?php bloginfo('charset')?>>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title><?php bloginfo('name')?> | <?php bloginfo('description');?></title>

    <!-- Bootstrap core CSS -->
    
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="<?php bloginfo('stylesheet_url')?>" rel="stylesheet">
    <?php wp_head()?>
    <style>
        .jumbotron{
            background: url(<?php echo get_theme_mod('banner_image', get_bloginfo('template_url').'/img/showcase.jpg')?>) 0 -80px;
        }
    </style>
  </head>

  <body <?php body_class()?>>


      <div class="header clearfix">
        <div class="container">
            <?php 
                wp_nav_menu(array(
                    'theme_location'    => 'primary',
                    'depth'             => 2,
                    'container'         =>false,
                    'menu_class'        =>'nav nav-pills float-right',
                    'fallback'          =>'wp_bootstrap_navwalker::fallback',
                    'walker'            =>new wp_bootstrap_navwalker()
                ));
            ?>
        <?php if(has_custom_logo()):?>
            <?php the_custom_logo()?>
        <?php else :?>
            <h1 ><?php bloginfo('name')?></h1>
        <?php endif;?>
      </div>
    </div>