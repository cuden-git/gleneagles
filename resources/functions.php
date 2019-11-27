<?php
/**
 * Functions Bootstrapper
 *
 * This is a code bootstrapper. All theme logic such as utilities, filters and setup
 * should be added to relevant logic files found in theme-name/app.
 *
 * TLDR; You shouldn't add to this file
 */

namespace App;

/**
 * Include our custom PHP logic files
 *
 * This helps keep the functions file clean and readable by logically grouping our code.
 * This functions file should therefore be kept minimal.
 */
array_map(
    function ($file) {
        // Prefix cust
        $file = "../app/{$file}.php";

        if (! locate_template($file, true, true)) :
            wp_die(
                sprintf(
                    '<h1>Error locating <code>%s</code> for inclusion.</h1> <br>Remove this
                    include from functions.php or add the file', esc_html( $file ) )
            );
        endif;
    },
    [
        'helpers',
        'utilities',
        'filters',
        'setup',
        'site-options',
        'custom-fncs'
    ]
);
