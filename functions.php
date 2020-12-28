<?php


    function loadimportantfiles(){

        wp_enqueue_style('mainstyles', get_stylesheet_uri());
        wp_enqueue_style('fonts', '//fonts.googleapis.com/css2?family=Oxygen:wght@300;400;700&display=swap');
        wp_enqueue_style('fontawesome', '//pro.fontawesome.com/releases/v5.10.0/css/all.css');
        wp_enqueue_script('scripts', get_theme_file_uri('./js/scripts.js'), NULL, true);

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