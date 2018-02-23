<?php get_header()?>
    <section class=" title-bar">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <h1><?php echo __('Blog');?></h1>
          </div>
        </div>
      </div>
    </section>
    <section class="main">
      <div class="container">
          <div ui-view></div>
        <div class="row">
        <?php if(is_active_sidebar('sidebar')):?>
            <div class="col-md-8">
          <?php else:?>
            <div class="col-md-12">
        <?php endif;?>
                <?php if(have_posts()):?>
                <?php while (have_posts()):the_post()?>
                    <article class="post row">
                        <div class="col-md-5">
                            <div class="post-thumbnail">
                                <?php if(has_post_thumbnail()):?>
                                    <a href="<?php the_permalink()?>"><?php the_post_thumbnail()?></a>
                                <?php endif;?>
                            </div>
                            <a href="<?php the_permalink()?>" class="btn btn-primary btn-block"><?php echo __('Read More')?></a>
                        </div>
                        <div class="col-md-7">
                          <ul class="meta">
                              <li>By <a href="<?php echo get_author_posts_url(get_the_author_meta('ID'))?>"><?php the_author()?></a></li>
                              <li><?php the_time('F j, Y g:i a');?></li>
                            <li>
                                <?php 
                                    $category = get_the_category();
                                    $separtor =", ";
                                    $output = "";
                                    if($category){
                                        foreach ($category as $cate){
                                            $output  .= '<a href="'.get_category_link($cate->term_id).'">'.$cate->cat_name.'</a>'.$separtor;
                                        }
                                    }
                                    echo trim($output, $separtor);
                                ?>
                                
                            </li>
                          </ul>
                            <h3><a href="<?php the_permalink()?>"><?php the_title()?></a></h3>
                            <p><?php the_excerpt()?></p>

                        </div>

                    </article>
                    <div class="clr"></div>
                <?php endwhile;?>
                <?php endif;?>
            </div>
        <?php if(is_active_sidebar('sidebar')):?>
                <div class="col-md-4">
                
                      <?php dynamic_sidebar('sidebar')?>
                
                </div>
        <?php endif;?>
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
