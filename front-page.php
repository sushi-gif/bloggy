<?php get_header(); ?>
<?php get_search_form(); ?>



  <div id="popup1" class="overlay">
  	<div class="popup">
  		<a class="close" href="#">&times;</a>

  	</div>
  </div>    

<div class="wrapper">
    <div class="row">
      <div class="right">
        <div class="content">
          <img src="<?php echo get_background_image();?>">
        </div>
      </div>
      <div class="left">
        <div class="content">
          <h1><?php 
            $str = get_bloginfo('description');
            $n_str = explode(".",$str);
            echo $n_str[0];
          ?></h1>
          <p><?php 
                if($n_str[1]=='') echo "Non settato, utilizza un punto nella descrizione e quindi, salva.";
                else echo $n_str[1];
            ?></p>
          <h5>Per altre informazioni</h5>
          <p><a href="#foot" class="button"> Clicca qui </a></p>
        </div>
      </div>
    </div>
  </div>

  <div class="title-center">
    <h2>Ultimi Articoli</h2>
    <p> Se vuoi vedere tutti i nostri post - o cercarne uno in particolare - <a href="<?php echo home_url();?>/?post_type=post&s="> visita il nostro archivio </a> </p>
  </div>

  <div class="wrapper">
      <div class="row" style="flex-direction:row;">

      <?php if(have_posts()){
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

        <?php }}?>

      </div>
    </div>
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
  <div class="ctn">
    <div class="wrapper">
      <div class="row">
      <div class="contact-form-widget">
      <div class="form">
        <form name="contact-form" method="post" action="<?php echo esc_url( home_url( '/' ) ); ?>">
          <div class="nama">
            <br />
            <br />
            <i class="fa fa-user"></i> Nome:</div>
          <input class="contact-form-name" id="ContactForm1_contact-form-name" name="name" size="30" type="text" value="" />
          <br />
          <br />
          <div class="email">
            <i class="fa fa-envelope-o"></i> E-mail:</div>
          <input class="contact-form-email" id="ContactForm1_contact-form-email" name="email" size="30" type="text" value="" />
          <br />
          <br />
          <div class="pesan">
            <i class="fa fa-pencil-square-o"></i> Messaggio:</div>
          <textarea class="contact-form-email-message" cols="30" id="ContactForm1_contact-form-email-message" name="email-message" rows="10"></textarea>
          <br />
          <input class="contact-form-button contact-form-button-submit fa-user" id="ContactForm1_contact-form-submit" type="submit" value="Inviaci una mail" />
          <br />
          <div class="contact-form-error-message" id="ContactForm1_contact-form-error-message">
          </div>
          <div class="contact-form-success-message" id="ContactForm1_contact-form-success-message">
          </div>
        </form>
      </div>
    </div>
        <div class="title-center" style="text-align:left">
          <div class="contact">
            <h5> Se stai cercando di contattarci </h5>
            <h2> Contattaci utilizzando l'apposito form ed aspetta una nostra risposta </h2>
            <p> I tuoi dati saranno usati al solo scopo di ricontattarti</p>
          </div>
        </div>
      </div>
    </div>
  </div>



<?php get_footer(); ?>