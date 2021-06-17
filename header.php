<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Meta -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="<?php echo get_bloginfo('description'); ?>">
    <meta name="author" content="Vincenzo Turturro">
    <!-- TODO add icon -->
    <?php wp_head(); ?>
</head>
<body>

<header>
          <div class="container">
            <nav id="navigation">
              <a href="<?php echo home_url();?>" class="logo"><?php echo get_bloginfo('name');?></a>
              <a aria-label="mobile menu" class="nav-toggle">
                <span></span>
                <span></span>
                <span></span>
              </a>
                <ul class="menu-left">
                <?php 
                  $options = array(
                                'echo' => false,
                                'menu' => 'navbar',
                                'container' => false,
                                'theme_location' => 'navbar',
                                'add_li_class' => 'nav-item'
                            );
                
                  $menu = wp_nav_menu($options);
                  echo $menu;
                ?>
                </ul>
            </nav>
          </div>
</header>




