<?php

function monblog_register_styles(){
    wp_enqueue_style('monblog-fontawesome', get_template_directory_uri() . '/assets/css/fontawesome-all.min.css', [], '1.0', 'all');
   
    wp_enqueue_style('monblog-style', get_template_directory_uri() . '/assets/css/main.css', ['monblog-fontawesome'], '1.0', 'all');
    wp_enqueue_style('monblog-noscript', get_template_directory_uri() . '/assets/css/noscript.css', [''], '1.0', 'all');
    }


add_action('wp_enqueue_scripts','monblog_register_styles') ;

   
function monblog_register_scripts (){
    wp_enqueue_script('monblog-script', get_template_directory_uri() . '/assets/js/jquery.dropotron.min.js', ['jquery'], '1.0', true);
    wp_enqueue_script('monblog-scrolly', get_template_directory_uri() . '/assets/js/jquery.scrolly.min.js', ['jquery'], '1.0', true);
    wp_enqueue_script('monblog-scrollex', get_template_directory_uri() . '/assets/js/jquery.scrollex.min.js', ['jquery'], '1.0', true);
    wp_enqueue_script('monblog-browser', get_template_directory_uri() . '/assets/js/browser.min.js', ['jquery'], '1.0', true);
    wp_enqueue_script('monblog-breakpoints', get_template_directory_uri() . '/assets/js/breakpoints.min.js', ['jquery'], '1.0', true);
    wp_enqueue_script('monblog-util', get_template_directory_uri() . '/assets/js/util.js', ['jquery'], '1.0', true);
    wp_enqueue_script('monblog-main', get_template_directory_uri() . '/assets/js/main.js', ['jquery'], '1.0', true);
} 
add_action('wp_enqueue_scripts', 'monblog_register_scripts'); 


//Theme Options
add_theme_support('menus');


//Menus
register_nav_menus(
      array(
       'top-menu' => 'Top Menu Location',
       'mobile-menu' => 'Mobile Menu Location',
      )
);

?>