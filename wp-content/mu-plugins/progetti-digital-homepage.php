<?php
/**
 * Plugin Name: Progetti Digital Homepage
 * Description: Provides the Progetti Digital Startup software-company homepage from version-controlled code.
 */

defined( 'ABSPATH' ) || exit;

/**
 * Whether the current request is for the software-company landing page.
 *
 * @return bool
 */
function pds_is_landing_page() {
	return is_front_page() || is_page( 'home' );
}

/**
 * Uses the branded landing-page template without deleting the existing Elementor page.
 *
 * @param string $template WordPress' selected template.
 * @return string
 */
function pds_load_landing_page_template( $template ) {
	if ( is_admin() || ! pds_is_landing_page() ) {
		return $template;
	}

	$landing_template = WPMU_PLUGIN_DIR . '/templates/progetti-digital-home.php';

	return is_readable( $landing_template ) ? $landing_template : $template;
}
add_filter( 'template_include', 'pds_load_landing_page_template', 999 );

/**
 * Sets a meaningful browser title for the new home page.
 *
 * @param string $title Original document title.
 * @return string
 */
function pds_landing_page_title( $title ) {
	return pds_is_landing_page() ? 'Progetti Digital Startup | Software Development Company' : $title;
}
add_filter( 'pre_get_document_title', 'pds_landing_page_title' );
