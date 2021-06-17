<? get_header(); ?>


      <?php if(have_posts()){?>

<div class="title-center" style="margin-top:50px">
    <h2>Risultati</h2>
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
    <?php }else{ ?>

        <div class="title-center" style="margin-top:50px;padding:50px">
            <h2>Spiacente, non e' stato prodotto alcun risultato</h2>
            <a href="<?php echo home_url();?>" class="button"> Home </a>
        </div>

    <?php }?>


    <div class="pag-wrapper">
            <?php
                global $wp_query;
                $big = 999999999; // need an unlikely integer

                $pages = paginate_links( array(
                        'base' => str_replace( $big, '%#%', esc_url( get_pagenum_link( $big ) ) ),
                        'format' => '?paged=%#%',
                        'current' => max( 1, get_query_var('paged') ),
                        'total' => $wp_query->max_num_pages,
                        'prev_text' => '<div class="">Prev</div>',
                        'next_text' => '<div class="">Next</div>',
                        'type'  => 'array',
                    ) );
            if( is_array( $pages ) ) {
                $paged = ( get_query_var('paged') == 0 ) ? 1 : get_query_var('paged'); ?>
                <ul>
                        <?php
                        foreach ( $pages as $page ) { ?>
                            <li><?php echo $page; ?></li>
                        <?php } ?>
                </ul>
            <?php } ?>
        </div>

<? get_footer(); ?>