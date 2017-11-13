<?php
/**
 * Comments.
 *
 * @package RacquetPress\Groundstrokes
 * @since   1.0.0
 * @author: marybaum
 * @link    http://racquetpress.com
 * @license GNU GPL 2.0+
 */

/*********************
 *  STRUCTURE/COMMENTS
 *********************/

add_filter( 'genesis_comment_list_args', __NAMESPACE__ .'\setup_comments_gravatar' );

/**
 * Change size of the Gravatar in the entry comments.
 *
 * @since 1.0.0
 *
 * @param $args
 *
 * @return int
 */
function genesis_sample_comments_gravatar( $args ) {

	$args['avatar_size'] = 60;

	return $args;

}