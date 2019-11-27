<?php
/**
 * Helpers
 *
 * Functions which can be shared across the codebase, for example in filters, utilities or setup
 */

namespace App\Helpers;

/**
 * Filter templates
 *
 * Used to modify the ${type}_template_hierarchy filter
 *
 * @param array $templates array of possible templates
 * @return array $return_value modified array of possible templates with custom paths
 */
function filter_templates($templates)
{

    // Allow us to modify the paths to look into (Woocommerce for example)
    $paths = apply_filters('app/filter_templates/paths', ['views', 'resources/views']);

    // Create paths regex pattern
    $paths_pattern = "#^(" . implode('|', $paths) . ")/#";

    // Setup some empty arrays for our returns
    $available_templates = [];
    $return_value = [];

    // Iterate through each template option creating a possibility of available templates
    foreach ($templates as $template) {
        $template = preg_replace('#\.?(php)?$#', '', ltrim($template));

        if (strpos($template, '/')) {
            $template = preg_replace($paths_pattern, '', $template);
        }

        $available_templates[] = $template;
    }

    // Iterate through the previously generated available template options and generate paths to filenames
    foreach ($available_templates as $available_template) {
        foreach ($paths as $path) {
            $return_value[] = $path . '/' . $available_template . '.php';
        }
        $return_value[] = $available_template . '.php';
    }

    return $return_value;
}
