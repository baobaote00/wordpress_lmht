<?php
/**
 * @ chèn bootstrap
 */
wp_enqueue_style('theme-bootstrap','https://stackpatah.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css');
wp_enqueue_style('theme-main','https://lienminh.garena.vn//templates/lmht_2013/css/main.css');
wp_enqueue_style('theme-lolt','https://lienminh.garena.vn//templates/lmht_2013/css/lolt.style.css');
wp_enqueue_style('theme-lol-kit','https://lienminh.garena.vn//templates/lmht_2013/css/lol-kit.css');
function nhomn_styles(){
    wp_register_style("main-style", get_template_directory_uri(), './style.css', 'all');
    wp_enqueue_style( 'main-style' );
}

add_action( 'wp_enqueue_scripts','nhomn_styles' );

if (!function_exists('nhomn_theme_setup')) {
    function nhomn_theme_setup(){
        add_theme_support('post-formats',
            array(
                'video',
                'image',
                'audio',
                'gallery'
            )    
        );
        register_nav_menu('primary-menu', __('Primary Menu','nhomn'));
        $sidebar = array(
            'name' => __('Main Sidebar','nhomn'),
            'id' => 'main-sidebar',
            'description' => 'Main sidebar for nhomn theme',
            'class' => 'main-sidebar',
            'before_title' => '<h3 class="widgettile">',
            'after_sidebar' => '</h3>'
        );
        register_sidebar($sidebar);
    }
    add_action( 'init', 'nhomn_theme_setup' );
} else {
    
}
