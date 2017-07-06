<?php
/**
 * A post.
 *
 * @package RacquetPress\Groundstrokes
 * @since   1.0.0
 * @author: marybaum
 * @link    http://racquetpress.com
 * @license GNU GPL 2.0+
 */
namespace RacquetPress\Groundstrokes\structure;

add_filter( 'genesis_author_box_gravatar_size', __NAMESPACE__ . '\setup_author_box_gravatar' );

/**
 * Change size of the Gravatar in the author box
 *
 * @since   1.0.0
 *
 * @param $size
 *
 * @return int
 */
function genesis_sample_author_box_gravatar( $size ) {

	return 90;

}