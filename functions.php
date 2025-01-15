<?php
/**
 * Theme Functions
 * 
 * @package starter
 */

add_filter('template_include', function ($template) {
    $template_name = basename($template);

    if (strpos($template_name, 'header-') === 0) {
        $custom_header = get_template_directory() . '/components/' . $template_name;

        if (file_exists($custom_header)) {
            return $custom_header;
        }
    }

    return $template;
});