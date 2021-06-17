<? get_header(); ?>
        <div class="wrapper">
          <div class="row">
            <div class="p-content">
            <div style="max-width:1000px;margin:auto">
              <img src="<?php the_post_thumbnail_url();?>">
            </div>
              <div class="post-headline">
                <h1> <?php the_title(); ?></h1>
              </div>
              <div class="post-details">
                <div class="author-info">
                  <span> Postata da </span>
                  <a href="#"> <?php the_author_meta('display_name', 1);; ?> </a>
                   il <?php echo get_the_date();  ?>
                </div>
                <div class="post-topics">
                    <?php 
                    function add_class_the_tags($html){
                        $postid = get_the_ID();
                        $html = str_replace('<a','<a class="topic-link"',$html);
                        return $html;
                    }
                    add_filter('the_tags','add_class_the_tags');
                    the_tags('', '', '');
                    ?>
                </div>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="post-body">
            <?php the_content(); ?>
          </div>
        </div>
      </div>

    <?php
        comments_template();
    ?>

<? get_footer(); ?>