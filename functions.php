<?php

function qts_setup()
{
    wp_enqueue_style('google-fonts', 'https://fonts.googleapis.com/css?family=Hind%3A300%2Cregular%2C500%2C600%2C700&#038;subset=latin%2Clatin-ext%2Cdevanagari&#038;ver=4.9.7');
    wp_enqueue_style('style-core', get_theme_file_uri('/css/style-core.css'));
    wp_enqueue_style('rftr-style-custom', get_theme_file_uri('/css/rftr-style-custom.css'));
    wp_enqueue_style('goodlayers-core-style', get_theme_file_uri('/plugins/goodlayers-core/plugins/combine/style.css'));
    wp_enqueue_style('goodlayers-core-css-builder', get_theme_file_uri('/plugins/goodlayers-core/include/css/page-builder.css'));
    wp_enqueue_style('revslider-css-settings', get_theme_file_uri('/plugins/revslider/public/assets/css/settings.css'));

    wp_enqueue_style('custom-style', get_theme_file_uri('/css/custom.css'), NULL, microtime());

    wp_enqueue_script('custom-script', get_theme_file_uri('/js/custom.js'), NULL, false, true);

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

// services post type
function qts_custom_post_type()
{
    register_post_type(
        'service',
        array(
            'rewrite' => array('slug' => 'services', 'with_front' => false),
            'labels' => array(
                'name' => 'Services',
                'singular_name' => 'Service',
                'add_new_item' => 'Add New Service',
                'edit_item' => 'Edit Service'
            ),
            'menu_icon' => 'dashicons-admin-page',
            'public' => true,
            'has_archive' => false,
            'supports' => array(
                'title', 'thumbnail', 'editor', 'excerpt'
            )
        )
    );
}

add_action('init', 'qts_custom_post_type');

// remove image from the_content
function strip_images($content) {
    if (is_singular(array('service', 'post', 'page'))) {
        return preg_replace('/<img[^>]+./','',$content);
    }
}

add_filter('the_content', 'strip_images',2);

// custom console log
function console_log($output, $with_script_tags = true) {
    $js_code = 'console.log(' . json_encode($output, JSON_HEX_TAG) . ');';

    if ($with_script_tags) {
        $js_code = '<script>' . $js_code . '</script>';
    }
    echo $js_code;
}

// search filters
function search_filter($query) {
    if ($query->is_search()) {
        $query->set('post_type', array('post'));
    }
}

add_filter('pre_get_posts', 'search_filter');

// shortcodes
include('shortcode-about-icon.php');