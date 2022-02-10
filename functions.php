<?php
function netflix_interface_carrega_arquivos(){
    wp_enqueue_style('style', get_template_directory_uri(). "/style.css");
    wp_enqueue_script('script', get_template_directory_uri(). "/script.js");
};
add_action('wp_enqueue_scripts','netflix_interface_carrega_arquivos');


function theme_support(){
    add_theme_support('title-tag');
    add_theme_support('custom-logo');

    register_nav_menu('primary', __('Menu Principal', 'Menu'));
};
add_action('after_setup_theme', 'theme_support');
?>