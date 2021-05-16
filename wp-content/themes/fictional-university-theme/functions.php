<?php

function university_files() {
    // wp_enqueue_script('main-universtiy-js',get_theme_file_uri('/js/scripts-bundled.js'),NULL,'1.0',true);
    
    wp_enqueue_style('custom-google-fonts','//fonts.googleapis.com/css?family=Roboto+Condensed:300,300i,400,400i,700,700i|Roboto:100,300,400,400i,700,700i');
    wp_enqueue_style('font-awsome','//maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css');
    // error_log($_SERVER['SERVER_NAME']);
    if(strstr($_SERVER['SERVER_NAME'],'127.0.0.1')){
        error_log('a');
        wp_enqueue_script('main-universtiy-js','http://localhost:3000/bundled.js',NULL,'1.0',true);
    }else{
        error_log('b');
        wp_enqueue_script('our-vendors-js',get_theme_file_uri('/bundled-assets/vendors~scripts.8c97d901916ad616a264.js'),NULL,'1.0',true);
        wp_enqueue_script('main-universtiy-js',get_theme_file_uri('/bundled-assets/scripts.bc49dbb23afb98cfc0f7.js'),NULL,'1.0',true);
        wp_enqueue_style('our-main-styles',get_theme_file_uri('/bundled-assets/styles.bc49dbb23afb98cfc0f7.css'));
    }
    
    // wp_enqueue_style('university_main_styles',get_stylesheet_uri());
}
add_action('wp_enqueue_scripts','university_files');
function university_features(){
    register_nav_menu('headerMenuLocation', 'header Menu Location');
    register_nav_menu('footerLocationOne', 'Footer Location One');
    register_nav_menu('footerLocationTwo', 'Footer Location Two');
    
    add_theme_support('title-tag');// to enable a feature for the theme
}
add_action('after_setup_theme','university_features');

function university_adjust_queries($query){
    $today = date('Ymd');
    if(!is_admin() && is_post_type_archive('event') && $query->is_main_query()){
        $query->set('meta_key','event_date');
        $query->set('orderby','meta_value_num');
        $query->set('order','ASC');
        $query->set('meta_query',array(
            array(
              'key' => 'event_date',
              'compare' => '>=',
              'value' => $today,
              'type' => 'numeric'
            ),
          )
        );

    }
}

add_action('pre_get_posts','university_adjust_queries');