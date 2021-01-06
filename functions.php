<?php


    function loadimportantfiles(){

        

        // wp_enqueue_style('mainstyles', get_stylesheet_uri());
        wp_enqueue_style('fonts', '//fonts.googleapis.com/css2?family=Oxygen:wght@300;400;700&display=swap');
        wp_enqueue_style('fontawesome', '//pro.fontawesome.com/releases/v5.10.0/css/all.css');
     
       

        if (strstr($_SERVER['SERVER_NAME'], 'localhost')) {
            wp_enqueue_script('grupa-kontratak-website', 'http://localhost:3000/bundled.js', NULL, '1.0', true);
            // wp_enqueue_script('script', get_theme_file_uri('./js/scripts.js'), NULL, true);
            // wp_enqueue_script('hamburger', get_theme_file_uri('./js/hamburger.js'), NULL, true);
    
          } else {
            wp_enqueue_script('our-main-script', get_theme_file_uri('/wp-content/themes/grupa-kontratak-website/bundled-assets/scripts.c98bebe396b165d0087a.js'), NULL, '1.0', true);
            wp_enqueue_style('our-main-styles', get_theme_file_uri('/wp-content/themes/grupa-kontratak-website/bundled-assets/styles.c98bebe396b165d0087a.css'));
          }
        

  
   

   


    }


add_action('wp_enqueue_scripts', 'loadimportantfiles');

    function features(){
        register_nav_menus(
            array(
                'headermenu' => 'Menu Główne'
            )
            );

            add_theme_support('title-tag');
    }
    
    add_action('init', 'features');

?>