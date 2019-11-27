<?php
/**
 * Utilities
 *
 * Re-usable functions to help maintain a DRY/consistent codebase. For example time and date formatters
 */
namespace App\Utilities;

/**
 * Like WPs get_template_part() but lets you pass an array of data available in the template
 *
 * @note PHPCS has been muted for the following bad practices: No escaping for echo, include of $file
 *
 * @param  string $file       Path of file to include, relative to theme-folder/resources
 * @param  array  $data       Array of data which will be passed to the template partial as $data
 * @param  array  $cache_data Set to help with cache setting / and cache invalidation
 * @return void
 */
function get_template_part( $file, $data = array(), $cache_data = array() ) {

	$data = wp_parse_args( $data );
    $cache_data = wp_parse_args( $cache_data );

	if ( $cache_data ) {
		foreach ( $data as $key => $value ) {
			if ( is_scalar( $value ) || is_array( $value ) ) {
				$cache_data[$key] = $value;
			} else if ( is_object( $value ) && method_exists( $value, 'get_id' ) ) {
				$cache_data[$key] = call_user_func( 'get_id', $value );
			}
        }

        $cache = wp_cache_get( $file, wp_json_encode( $cache_data ) );

		if ( $cache !== false ) {
			if ( ! empty( $data['return'] ) ) {
                return $cache;
            }

			echo $cache; //phpcs:ignore

            return;
		}
	}

    $file_handle = $file;

    do_action( 'start_operation', 'hm_template_part::' . $file_handle );

    if ( file_exists( get_stylesheet_directory() . '/' . $file . '.php' ) ) {
        $file = get_stylesheet_directory() . '/' . $file . '.php';
    } elseif ( file_exists( get_template_directory() . '/' . $file . '.php' ) ) {
        $file = get_template_directory() . '/' . $file . '.php';
    }

    ob_start();
    $return = require( $file ); // phpcs:ignore
    $data = ob_get_clean();

	do_action( 'end_operation', 'hm_template_part::' . $file_handle );

    if ( $cache_data ) {
        wp_cache_set( $file, $data, wp_json_encode( $cache_data ), 3600 );
    }

    if ( ! empty( $data['return'] ) ) {
		if ( $return === false ) {
			return false;
        } else {
            return $data;
        }
    }

	echo $data; //phpcs:ignore
}

/**
 * Get asset depending on theme build state
 *
 * We have an NPM task runner to compress, minify, lint, and transpile our static assets.
 * During development we leave code as is and assets are loaded from theme-name/resources/assets.
 * Before our theme reaches production we run a `yarn run build:production` task, this minifies
 * all those assets, and hashes them and stores them in theme-name/resources/dist
 *
 * For example style.css becomes style87feadc.css, this helps with cache busting
 *
 * @param  string $asset
 * @return string/null
 */
function get_asset($asset) {
    if (is_string($asset)) :

        // Make sure our asset starts with a leading slash
        $asset = $asset[0] === '/' ? $asset : '/' . $asset;
        // The location of our built asset inventory if we have ran a build
        $assets_inventory = get_stylesheet_directory() . '/dist/mix-manifest.json';

        // If the asset file exists we have built assets
        if (file_exists($assets_inventory)) :
            // Within the assets file is key : value pair for each asset, lets grab the content
            //phpcs:disable
            $assets_inventory = file_get_contents($assets_inventory);
            //phpcs:enable

            if (is_string($assets_inventory)) :
                // Convert JSON to an associative array
                $assets_inventory = json_decode($assets_inventory, true);

                if (is_array($assets_inventory)) :
                    // Return the new compressed and minified asset name for inclusion
                    return isset($assets_inventory[$asset]) ?
                        get_stylesheet_directory_uri() . '/dist' . $assets_inventory[$asset] :
                        null;
                endif;
            endif;
        endif;
    endif;
}

/**
 * Safely echos the asset URL depending on if assets have been built
 *
 * @param  string $asset Relative path to the asset
 * @return void
 */
function the_asset($asset) {

    if (is_string($asset)) {
        echo esc_url(get_asset($asset));
    }
}

function get_link_by_slug($slug, $type = 'post'){
    $args = array(
        'post_type' => 'attachment',
        'name' => sanitize_title($slug),
        'posts_per_page' => 1
    );
    $_head = get_posts( $args );
    $header = $_head ? array_pop($_head) : null;
    return $header ? wp_get_attachment_url($header->ID) : '';
}
