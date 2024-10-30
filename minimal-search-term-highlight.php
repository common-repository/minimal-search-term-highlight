<?php
/*
Plugin Name: Minimal Search Term Highlight
Plugin URI: http://wordpress.org/plugins/minimal-search-term-highlight
Description: Ultra-minimalist plugin to highlight search results.
Author: Michael J. Jarrett
Version: 1.0.1
Author URI: http://m.jarrett.ch
License: GPL2
License URI: https://www.gnu.org/licenses/gpl-2.0.html
*/

// Exit if accessed directly
defined('ABSPATH') or die();

/**
* Append the current search query to the permalink in search mode.
*/
if (!function_exists('mjj_append_search_query')) {
    function mjj_append_search_query($permalink) {
    	if (is_search()) {
    		$permalink = add_query_arg('s', get_search_query(), $permalink);
    	}
    	return $permalink;
    }
}

/**
 * Highlight a term in the given subject.
 */
if (!function_exists('mjj_highlight')) {
    function mjj_highlight($term, $subject) {
        $terms = array_unique(explode(" ", $term));
        foreach ($terms as $term) {
            $subject = preg_replace('/(' . preg_quote($term) . ')/i', "<mark>$1</mark>", $subject);
        }
        return $subject;
    }
}

/**
 * Highlight the current search term in the given text.
 */
if (!function_exists('mjj_highlight_search_term')) {
    function mjj_highlight_search_term($text) {
	    if (in_the_loop() && isset($_GET['s'])) {
		    $text = mjj_highlight($_GET['s'], $text);
	    }
	    return $text;
    }
}

// Register filters for search term highlighting
add_filter('the_content', 'mjj_highlight_search_term', 10, 1);
add_filter('the_title',   'mjj_highlight_search_term', 10, 1);
add_filter('the_excerpt', 'mjj_highlight_search_term', 10, 1);
add_filter('the_permalink', 'mjj_append_search_query', 10, 1);

?>