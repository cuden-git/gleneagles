<?php
/**
 * Extend WordPress search to include custom fields
 *
 * https://adambalee.com
 */
/**
 * Join posts and postmeta tables
 *
 * http://codex.wordpress.org/Plugin_API/Filter_Reference/posts_join
 */
function cf_search_join( $join ) {
    global $wpdb;
    if ( is_search() || (!empty($_SERVER[ 'REQUEST_URI' ]) && strpos(sanitize_text_field($_SERVER[ 'REQUEST_URI' ]), '/wp-json/') !== false)) {   
        $join .=' LEFT JOIN '.$wpdb->postmeta. ' ON '. $wpdb->posts . '.ID = ' . $wpdb->postmeta . '.post_id ';
    }
    return $join;
}
add_filter('posts_join', 'cf_search_join' );
/**
 * Modify the search query with posts_where
 *
 * http://codex.wordpress.org/Plugin_API/Filter_Reference/posts_where
 */
function cf_search_where( $where ) {
    global $wpdb;
    if ( is_search() || (!empty($_SERVER[ 'REQUEST_URI' ]) && strpos(sanitize_text_field($_SERVER[ 'REQUEST_URI' ]), '/wp-json/') !== false)) { 
        $where = preg_replace("/\(\s*".$wpdb->posts.".post_title\s+LIKE\s*(\'[^\']+\')\s*\)/","(".$wpdb->posts.".post_title LIKE $1) OR (".$wpdb->postmeta.".meta_value LIKE $1)", $where );
    }
    return $where;
}
add_filter( 'posts_where', 'cf_search_where' );


/**
 * Prevent duplicates
 *
 * http://codex.wordpress.org/Plugin_API/Filter_Reference/posts_distinct
 */
function cf_search_distinct( $where ) {

    if ( is_search() || (!empty($_SERVER[ 'REQUEST_URI' ]) && strpos(sanitize_text_field($_SERVER[ 'REQUEST_URI' ]), '/wp-json/') !== false)) { 
        return "DISTINCT";
    }
    return $where;
}
add_filter( 'posts_distinct', 'cf_search_distinct' );

function search_rest_endpoint ( $params ){

    $query = new WP_Query( array( 
        's' => urldecode($params['search_term']),
        'posts_per_page' => $params['posts_per_page'],
        'offset' => $params['offset']
        ) );
    $results_arr = [];

    for($i = 0; $i < count($query->posts); ++$i) {
        $results_arr[$i]['title'] = htmlspecialchars_decode($query->posts[$i]->post_title);
        $results_arr[$i]['url'] = get_permalink($query->posts[$i]->ID);
    }
    return $results_arr;
}

add_action( 'rest_api_init', function () {
    register_rest_route( 'site-search/v1', '/search-term/(?P<posts_per_page>.+)/(?P<offset>\d+)/(?P<search_term>.+)',array(
         'methods'  => 'GET',
         'callback' => 'search_rest_endpoint'
    ));
} );