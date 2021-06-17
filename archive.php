<? get_header(); ?>



      <?php if(have_posts()){?>

<div class="title-center" style="margin-top:50px">
    <h2>Archivio</h2>
  </div>

<div class="wrapper">
      <div class="row" style="flex-direction:row;">
        <?php
            while(have_posts()){
                 the_post();
                ?>
        <div class="post">
          <div class="card">
            <div class="content-top">
              <img style="height: 100%; width: 100%; object-fit: contain" src="<?php the_post_thumbnail_url();?>">
            </div>
            <div class="content-bottom">
              <h3><?php the_title();?></h3>
              <ul> <?php the_tags('<li>','</li><li>','</li>');?></ul>
              <p><?php 
			$str = get_the_excerpt();
			if(strlen($str)>165) echo substr($str,0,165);
			else echo $str;?></p>
              <p><a  href="<?php the_permalink();?>" >Leggi ora &rarr;</a></p>
            </div>
          </div>
        </div>

        <?php }?>

      </div>
    </div>
    <?php echo't';}?>


    <?php
        the_posts_pagination();
    ?>

<? get_footer(); ?>