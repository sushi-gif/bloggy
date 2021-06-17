<?php 

    function bloggy_add_supports(){
        add_theme_support('title-tag');
        add_theme_support('custom-logo');
        add_theme_support('post-thumbnails');

        $def_back = array(
            'default-color' => '050e33',
            'default-image' => get_template_directory_uri()."/default.svg",
            'default-repeat' => 'none',
            'default-size' => 'auto',
        );
        add_theme_support('custom-background',$def_back);
    }

    add_action('after_setup_theme', 'bloggy_add_supports');

    function bloggy_add_menus(){
        $locations = array(
            'navbar' => 'Top Bar',
            'footer' => 'Bottom Bar'
        );
        register_nav_menus($locations);
    }

    add_action('init','bloggy_add_menus');
    
    function bloggy_register_scripts(){
        wp_enqueue_script('bloggy-jQuery', "https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js", array(), '3.5.1', 'all',true);
        //wp_enqueue_script('bloggy-bs-slim', "https://code.jquery.com/jquery-3.3.1.slim.min.js", array(), '3.5.1', 'all',true);
        //wp_enqueue_script('bloggy-bs-popper', "https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js", array(), '3.5.1', 'all',true);
        //wp_enqueue_script('bloggy-bs-main', "https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js", array(), '3.5.1', 'all',true);
        wp_enqueue_script('bloggy-nav', get_template_directory_uri()."/js/nav.js", array('bloggy-jQuery'), '3.5.1', 'all',true);
        wp_enqueue_script('bloggy-nav', get_template_directory_uri()."/faws/js/all.js", array('bloggy-jQuery'), '3.5.1', 'all',true);
 
    }

    add_action('wp_enqueue_scripts', 'bloggy_register_scripts');

    function bloggy_register_styles(){
        wp_enqueue_style('bloggy-ds', get_template_directory_uri()."/style.css", array(), time(), 'all');
        //wp_enqueue_style('bloggy-bs', "https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css", array(), '4.1.3', 'all');

    }

    add_action('wp_enqueue_scripts', 'bloggy_register_styles');



?>