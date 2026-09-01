<?php
/**
 * Plugin Name: CISS Environment Upload URLs
 * Description: Serves upload URLs from the URL for the current environment without changing the shared database.
 */

defined( 'ABSPATH' ) || exit;

/**
 * Checks whether this request is being served from the local installation.
 *
 * @return bool
 */
function ciss_is_local_environment() {
	$host = $_SERVER['HTTP_HOST'] ?? '';

	return 'localhost' === $host ||
		'127.0.0.1' === $host ||
		0 === strpos( $host, 'localhost:' ) ||
		0 === strpos( $host, '127.0.0.1:' );
}

/**
 * Returns the site URL that applies to the current request.
 *
 * @return string
 */
function ciss_environment_site_url() {
	return ciss_is_local_environment()
		? 'http://localhost/cisswork.cyberimpulses.com'
		: 'https://cisswork.cyberimpulses.com';
}

/* Keep URLs environment-specific even though the wp_options table is shared. */
add_filter( 'pre_option_home', 'ciss_environment_site_url' );
add_filter( 'pre_option_siteurl', 'ciss_environment_site_url' );

/**
 * Replaces known local/live upload bases with the base URL for this request.
 *
 * @param string $value HTML, a URL, or a srcset value.
 * @return string
 */
function ciss_rewrite_environment_upload_urls( $value ) {
	if ( ! is_string( $value ) || false === strpos( $value, '/wp-content/uploads/' ) ) {
		return $value;
	}

	$current_upload_base = trailingslashit( ciss_environment_site_url() . '/wp-content/uploads' );
	$known_upload_bases  = array(
		trailingslashit( 'http://localhost/cisswork.cyberimpulses.com/wp-content/uploads' ),
		trailingslashit( 'https://cisswork.cyberimpulses.com/wp-content/uploads' ),
	);

	return str_replace( array_unique( $known_upload_bases ), $current_upload_base, $value );
}

/**
 * Rewrites attachment URLs that WordPress and themes generate dynamically.
 *
 * @param string $url Attachment URL.
 * @return string
 */
function ciss_rewrite_environment_attachment_url( $url ) {
	return ciss_rewrite_environment_upload_urls( $url );
}
add_filter( 'wp_get_attachment_url', 'ciss_rewrite_environment_attachment_url', PHP_INT_MAX );

/**
 * Rewrites URLs in image attributes such as src and srcset.
 *
 * @param array $attributes Image attributes.
 * @return array
 */
function ciss_rewrite_environment_image_attributes( $attributes ) {
	foreach ( array( 'src', 'srcset', 'data-src', 'data-srcset' ) as $attribute ) {
		if ( isset( $attributes[ $attribute ] ) ) {
			$attributes[ $attribute ] = ciss_rewrite_environment_upload_urls( $attributes[ $attribute ] );
		}
	}

	return $attributes;
}
add_filter( 'wp_get_attachment_image_attributes', 'ciss_rewrite_environment_image_attributes', PHP_INT_MAX );

/**
 * Rewrites URLs in calculated responsive-image sources.
 *
 * @param array $sources Responsive-image source candidates.
 * @return array
 */
function ciss_rewrite_environment_srcset( $sources ) {
	foreach ( $sources as $size => $source ) {
		if ( isset( $source['url'] ) ) {
			$sources[ $size ]['url'] = ciss_rewrite_environment_upload_urls( $source['url'] );
		}
	}

	return $sources;
}
add_filter( 'wp_calculate_image_srcset', 'ciss_rewrite_environment_srcset', PHP_INT_MAX );

/* Covers upload URLs stored directly in normal post content and Elementor data. */
add_filter( 'the_content', 'ciss_rewrite_environment_upload_urls', PHP_INT_MAX );
add_filter( 'elementor/frontend/the_content', 'ciss_rewrite_environment_upload_urls', PHP_INT_MAX );
