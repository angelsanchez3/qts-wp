<?php

function qts_setup() {
    wp_enqueue_style('google-fonts', 'https://fonts.googleapis.com/css?family=Hind%3A300%2Cregular%2C500%2C600%2C700&#038;subset=latin%2Clatin-ext%2Cdevanagari&#038;ver=4.9.7');
    wp_enqueue_style('style-core', get_theme_file_uri('/css/style-core.css'));
    wp_enqueue_style('rftr-style-custom', get_theme_file_uri('/css/rftr-style-custom.css'));
    wp_enqueue_style('goodlayers-core-style', get_theme_file_uri('/plugins/goodlayers-core/plugins/combine/style.css'));
    wp_enqueue_style('goodlayers-core-css-builder', get_theme_file_uri('/plugins/goodlayers-core/include/css/page-builder.css'));

    wp_enqueue_style('custom-style', get_theme_file_uri('/css/custom.css'), NULL, microtime());
    
    wp_enqueue_script('jquery', get_theme_file_uri('/js/jquery/jquery.js'), NULL, microtime(), true);
    wp_enqueue_script('jquery-migrate-min', get_theme_file_uri('/js/jquery/jquery-migrate.min.js'), NULL, microtime(), true);
    wp_enqueue_script('jquery-themepunch', get_theme_file_uri('/plugins/revslider/public/assets/js/jquery.themepunch.tools.min.js'), NULL, microtime(), true);
    wp_enqueue_script('jquery-themepunch-min', get_theme_file_uri('/plugins/revslider/public/assets/js/jquery.themepunch.revolution.min.js'), NULL, microtime(), true);
    wp_enqueue_script('jquery-ui-effect', get_theme_file_uri('/js/jquery/ui/effect.min.js'), NULL, microtime(), true);

    wp_enqueue_script('script', get_theme_file_uri('/js/script.js'), NULL, false, true);

    wp_enqueue_script('goodlayers-core-script', get_theme_file_uri('/plugins/goodlayers-core/plugins/combine/script.js'), NULL, false, true);
    wp_enqueue_script('goodlayers-core-js-builder', get_theme_file_uri('/plugins/goodlayers-core/include/js/page-builder.js'), NULL, false, true);

    wp_enqueue_script('revslider-slideanims', get_theme_file_uri('/plugins/revslider/public/assets/js/extensions/revolution.extension.slideanims.min.js'), NULL, false, true);
    wp_enqueue_script('revslider-layeranimation', get_theme_file_uri('/plugins/revslider/public/assets/js/extensions/revolution.extension.layeranimation.min.js'), NULL, false, true);
    wp_enqueue_script('revslider-kenburn', get_theme_file_uri('/plugins/revslider/public/assets/js/extensions/revolution.extension.kenburn.min.js'), NULL, false, true);
    wp_enqueue_script('revslider-navigation', get_theme_file_uri('/plugins/revslider/public/assets/js/extensions/revolution.extension.navigation.min.js'), NULL, false, true);
    wp_enqueue_script('revslider-parallax', get_theme_file_uri('/plugins/revslider/public/assets/js/extensions/revolution.extension.parallax.min.js'), NULL, false, true);
    wp_enqueue_script('revslider-actions', get_theme_file_uri('/plugins/revslider/public/assets/js/extensions/revolution.extension.actions.min.js'), NULL, false, true);

    wp_enqueue_script('inline', get_theme_file_uri('/js/inline.js'), NULL, false, true);
}

add_action('wp_enqueue_scripts', 'qts_setup');

// adding theme support
function qts_init()
{
    add_theme_support('post-thumbnails');
    add_theme_support('title-tag');
    add_theme_support(
        'html5',
        array('comment-list', 'comment-form', 'search-form')
    );
}

add_action('after_setup_theme', 'qts_init');