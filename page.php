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
                  <span> Postata dal </span>
                  <a> WebMaster </a>
                </div>
                <div class="post-topics">
                    <a class="topic-link"> Pagina </a>
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


<? get_footer(); ?>