<?php get_header()?>

<div class="jumbotron">
        <div class="container">
            <h1 class="display-3"><?php echo get_theme_mod('banner_heading', 'Banner Heading')?></h1>
          <p class="lead"><?php echo get_theme_mod('banner_text', 'Condimentum velit hic ut sem tenetur quis animi suscipit bibendum lorem voluptate.')?></p>
          <p><a class="btn btn-lg btn-primary" href="<?php echo get_theme_mod('banner_button_url','http://rohityadav9.com')?>" role="button"><?php echo get_theme_mod('banner_btn_text', 'Sign Up')?></a></p>
        </div>
      </div>

      <section class="container marketing">
        <div class="row">
          <div class="col-lg-4">
            <div class="block">
              <i class="fa fa-<?php echo get_theme_mod('box1_icon', 'bar-chart')?> fa-3x"></i>
              <h3><?php echo get_theme_mod('box1_heading', 'Box1 Heading')?></h3>
              <p><?php echo get_theme_mod('box1_text', 'Donec id elit non mi porta gravida at eget metus. Maecenas faucibus mollis interdum.')?></p>

            </div>

          </div>
          <div class="col-lg-4">
            <div class="block">
            <i class="fa fa-<?php echo get_theme_mod('box2_icon', 'code')?> fa-3x"></i>
            <h3><?php echo get_theme_mod('box2_heading', 'Box2 Heading')?></h3>
            <p><?php echo get_theme_mod('box2_text', 'Donec id elit non mi porta gravida at eget metus. Maecenas faucibus mollis interdum.')?></p>
            </div>

          </div>

          <div class="col-lg-4">
            <div class="block">

            <i class="fa fa-<?php echo get_theme_mod('box3_icon', 'desktop')?> fa-3x"></i>
            <h3><?php echo get_theme_mod('box3_heading', 'Box3 Heading')?></h3>
            <p><?php echo get_theme_mod('box3_text', 'Donec id elit non mi porta gravida at eget metus. Maecenas faucibus mollis interdum.')?></p>
            </div>
            </div>

          </div>
        </div>

      </section>
        <?php if(is_active_sidebar('content-region-1')):?>
            <?php dynamic_sidebar('content-region-1')?>
        <?php endif;?>
        <?php if(is_active_sidebar('content-region-2')):?>
            <?php dynamic_sidebar('content-region-2')?>
        <?php endif;?>
          
<?php get_footer()?>