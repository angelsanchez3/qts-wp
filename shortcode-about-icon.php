<?php

function add_icon($atts) {
    $template_uri = get_template_directory_uri();
    $default = array(
        'uri' => '#',
    );
    $a = shortcode_atts($default, $atts);
    return '<img src="' .  $template_uri . $a['uri'] . '" alt="" width="60" height="60" />';
}

add_shortcode('icon', 'add_icon');

?>