<?php
/**
 * All WordPress filters for this theme
 *
 * Filters can change WordPress behaviour, when a filter is used it can be difficult to track down.
 * Putting filters in one file should help everyone digest
 *
 * TIP: Keep this file easy to digest by defining your filter function in helpers
 */
namespace App\Filters;

/**
 * Modify where WordPress looks for template files in the hierarchy
 *
 * As our theme has template files nested in resources/views/ we need to modify how WordPress
 * behaves by default and have it search these directories first
 */
array_map(
    function ($type) {

        add_filter("{$type}_template_hierarchy", 'App\\Helpers\\filter_templates');
    },
    ['index', '404', 'archive', 'author', 'category', 'tag', 'taxonomy', 'date', 'home',
    'frontpage', 'page', 'paged', 'search', 'single', 'singular', 'attachment', 'embed']
);

/**
 * Set ACF JSON save location
 */
// add_filter('acf/settings/save_json', function ( $path ) {
// 	$path = get_stylesheet_directory() . '/acf-json';
// 	return $path;
// });

/**
 * Set ACF JSON load location
 */
add_filter('acf/settings/load_json', function ( $paths ) {
	// remove original path (optional)
	unset( $paths[0] );
	// Load parent ACF
	$paths[] = get_template_directory() . '/acf-json';
	// Load child ACF
	$paths[] = get_stylesheet_directory() . '/acf-json';
	return $paths;
});

/**
 *  Set Gravity Forms to use <button> rather than <input type="submit" />
 */
add_filter('gform_submit_button', function ($button) {
	preg_match('/value=\'([^\']*)\'/', $button, $matches, PREG_OFFSET_CAPTURE);
	$value = $matches[1][0];
	return str_replace("/>", ">" . $value . "</button>", str_replace("<input", "<button", $button));
});

/**
 *  Gravity forms check dates must not be in the past
 */
add_filter('gform_field_validation', function ($result, $value, $form, $field) {
	if ($field->get_input_type() == 'date') {
		$date = \GFCommon::parse_date($value, 'dmy');
		$time = strtotime($date["year"] . "-" . $date["month"] . "-" . $date["day"]);
		$now = strtotime(date('Y-m-d'));
		if ($time < $now) {
			$result['is_valid'] = false;
			$result['message'] = 'Please enter a date in the future.';
		}
	}
	return $result;
}, 10, 4);


/**
 *  Add page/post slug to body class list
 */
add_filter('body_class', function ($classes) {
  global $post;
  if (isset($post)) {
      $classes[] = $post->post_type . '-' . $post->post_name;
  }
  return $classes;
});


add_filter('wp_revisions_to_keep', function ($num, $post) {
	$num = 5;
	return $num;

}, 10, 2 );


add_filter('upload_mimes', function ($mime_types){
	$mime_types['svg'] = 'image/svg+xml'; //Adding svg extension
	return $mime_types;
}, 1, 1);




/*
* Callback function to filter the MCE settings
*/
 
add_filter( 'tiny_mce_before_init', function ( $init_array ) {
	 
	$style_formats = array(
		array(  
			'title' => 'Heading Text', 
			'selector' => 'p',
			'classes' => 'heading-text',
		)
	);  

	$init_array['style_formats'] = wp_json_encode( $style_formats );  
		
	return $init_array;  
	
} ); 

/**
 * Removes buttons from the first row of the tiny mce editor
 */
add_filter( 'mce_buttons', function ( $buttons ) {
    $remove_buttons = array(
      	'formatselect', // format dropdown menu for <p>, headings, etc
         'bold',
        'italic',
        'strikethrough',
        'numlist',
        'blockquote',
        'hr', // horizontal line
        'alignleft',
        'aligncenter',
        'alignright',
        'link',
        'unlink',
        'wp_more', // read more link
        'spellchecker',
        'dfw', // distraction free writing mode
		'wp_adv', // kitchen sink toggle (if removed, kitchen sink will always display)
		'bullist',
    );
    foreach ( $buttons as $button_key => $button_value ) {
        if ( in_array( $button_value, $remove_buttons, true ) ) {
            unset( $buttons[ $button_key ] );
        }
    }
    return $buttons;
});

/**
 * Removes buttons from the second row of the tiny mce editor
 */
add_filter( 'mce_buttons_2', function ( $buttons ) {
    $remove_buttons = array(
    'hr', // horizontal line
    'strikethrough',
	'formatselect', // format dropdown menu for <p>, headings, etc
	'underline',
	'alignjustify',
	'forecolor', // text color
	'charmap', // special characters
	'outdent',
	'indent',
	'bullist',
	'pastetext',
	'removeformat',
	'wp_help',
	'undo',
	'redo',
    );
    foreach ( $buttons as $button_key => $button_value ) {
        if ( in_array( $button_value, $remove_buttons, true ) ) {
            unset( $buttons[ $button_key ] );
        }
    }
    return $buttons;
});
add_filter( 'mce_buttons', function( $buttons ) {
	array_push( $buttons, 
	'styleselect',
	'bullist',
	'pastetext',
	'removeformat',
	'wp_help',
	'undo',
	'redo',
	'nonbreaking'
	);
    return $buttons;
} );
