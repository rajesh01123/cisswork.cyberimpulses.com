<?php
/**
 * Plugin Name: Progetti Digital Homepage
 * Description: Provides the Progetti Digital Startup software-company homepage from version-controlled code.
 */

defined( 'ABSPATH' ) || exit;

/**
 * Keeps the WordPress brand aligned with the public-facing site identity.
 *
 * @return string
 */
function pds_brand_name() {
	return 'Progetti Digital Startup';
}
add_filter( 'pre_option_blogname', 'pds_brand_name' );

/**
 * Supplies a concise, consistent site description to WordPress and SEO tools.
 *
 * @return string
 */
function pds_brand_description() {
	return 'Progetti Digital Startup designs and builds custom software, web applications, mobile products, and digital experiences.';
}
add_filter( 'pre_option_blogdescription', 'pds_brand_description' );

/**
 * Maps branded utility-page paths without requiring additional database pages.
 *
 * @return string Empty when the current request is not a branded utility page.
 */
function pds_utility_page_from_request() {
	static $page = null;
	static $resolved = false;

	if ( $resolved ) {
		return $page;
	}

	$resolved  = true;
	$request   = wp_parse_url( $_SERVER['REQUEST_URI'] ?? '/', PHP_URL_PATH );
	$path      = trim( (string) $request, '/' );
	$home_path = trim( (string) wp_parse_url( home_url( '/' ), PHP_URL_PATH ), '/' );

	if ( '' !== $home_path && 0 === strpos( $path . '/', $home_path . '/' ) ) {
		$path = trim( substr( $path, strlen( $home_path ) ), '/' );
	}

	$routes = array(
		'terms'                => 'terms',
		'terms-conditions'     => 'terms',
		'terms-and-conditions' => 'terms',
		'privacy-policy'       => 'privacy',
		'contact'              => 'contact',
		'services'             => 'services',
		'process'              => 'process',
		'about'                => 'about',
		'blog'                 => 'blog',
		'careers'              => 'careers',
	);

	$page = $routes[ $path ] ?? '';

	return $page;
}

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
 * Serves the branded utility pages before WordPress renders an old page or a 404.
 *
 * @return void
 */
function pds_serve_utility_page() {
	$page = pds_utility_page_from_request();

	if ( '' === $page ) {
		return;
	}

	global $pds_utility_page;
	$pds_utility_page = $page;

	global $wp_query;
	$wp_query->is_404 = false;

	status_header( 200 );

	if ( 'contact' === $page ) {
		nocache_headers();
	}

	require WPMU_PLUGIN_DIR . '/templates/progetti-digital-utility.php';
	exit;
}
add_action( 'template_redirect', 'pds_serve_utility_page', 0 );

/**
 * Sets a meaningful browser title for the new home page.
 *
 * @param string $title Original document title.
 * @return string
 */
function pds_landing_page_title( $title ) {
	return pds_is_landing_page() ? 'Progetti Digital Startup | Software Development Company' : $title;
}
add_filter( 'pre_get_document_title', 'pds_landing_page_title', PHP_INT_MAX );

/**
 * Sets contextual browser titles for branded utility pages.
 *
 * @param string $title Original document title.
 * @return string
 */
function pds_utility_page_title( $title ) {
	$titles = array(
		'terms'   => 'Terms & Conditions',
		'privacy' => 'Privacy Policy',
		'contact' => 'Contact Us',
		'services' => 'Services',
		'process'  => 'Our Process',
		'about'    => 'About Us',
		'blog'    => 'Insights',
		'careers' => 'Careers',
	);
	$page   = pds_utility_page_from_request();

	return isset( $titles[ $page ] ) ? $titles[ $page ] . ' | Progetti Digital Startup' : $title;
}
add_filter( 'pre_get_document_title', 'pds_utility_page_title', PHP_INT_MAX );

/**
 * Returns the search-engine metadata for the branded templates.
 *
 * @return array<string, string>|null
 */
function pds_seo_context() {
	$page     = pds_utility_page_from_request();
	$site_url = home_url( '/' );
	$pages    = array(
		'terms'   => array( 'path' => 'terms-conditions/', 'title' => 'Terms & Conditions | Progetti Digital Startup', 'description' => 'Read the terms and conditions for working with Progetti Digital Startup.', 'type' => 'WebPage' ),
		'privacy' => array( 'path' => 'privacy-policy/', 'title' => 'Privacy Policy | Progetti Digital Startup', 'description' => 'Learn how Progetti Digital Startup collects, uses, and protects personal information.', 'type' => 'WebPage' ),
		'contact' => array( 'path' => 'contact/', 'title' => 'Contact Progetti Digital Startup | Start Your Software Project', 'description' => 'Contact Progetti Digital Startup to discuss custom software, web applications, mobile products, and digital transformation.', 'type' => 'ContactPage' ),
		'services' => array( 'path' => 'services/', 'title' => 'Software Development Services | Progetti Digital Startup', 'description' => 'Explore custom software, web application, mobile product, UI/UX, cloud automation, and product support services from Progetti Digital Startup.', 'type' => 'ServicePage' ),
		'process'  => array( 'path' => 'process/', 'title' => 'Our Software Delivery Process | Progetti Digital Startup', 'description' => 'See how Progetti Digital Startup takes digital products from discovery and planning through design, development, launch, and growth.', 'type' => 'WebPage' ),
		'about'    => array( 'path' => 'about/', 'title' => 'About Progetti Digital Startup', 'description' => 'Learn about the product-minded approach, values, and working principles behind Progetti Digital Startup.', 'type' => 'AboutPage' ),
		'blog'    => array( 'path' => 'blog/', 'title' => 'Software Development Insights | Progetti Digital Startup', 'description' => 'Practical insights on product strategy, custom software development, web applications, and digital growth.', 'type' => 'CollectionPage' ),
		'careers' => array( 'path' => 'careers/', 'title' => 'Careers | Progetti Digital Startup', 'description' => 'Explore careers at Progetti Digital Startup for people who care about software, design, and digital products.', 'type' => 'CollectionPage' ),
	);

	if ( isset( $pages[ $page ] ) ) {
		$context        = $pages[ $page ];
		$context['url'] = home_url( '/' . $context['path'] );

		return $context;
	}

	if ( pds_is_landing_page() ) {
		return array(
			'url'         => $site_url,
			'title'       => 'Progetti Digital Startup | Custom Software Development Company',
			'description' => 'Progetti Digital Startup builds custom software, web applications, mobile products, and digital experiences that help ambitious businesses move forward.',
			'type'        => 'WebSite',
		);
	}

	return null;
}

/**
 * Stops the page-builder SEO data from conflicting with branded template metadata.
 *
 * @return void
 */
function pds_prepare_custom_seo() {
	if ( null === pds_seo_context() ) {
		return;
	}

	remove_all_actions( 'surerank_print_meta' );
}
add_action( 'wp', 'pds_prepare_custom_seo', PHP_INT_MAX );

/**
 * Outputs canonical, social, and structured metadata for code-based pages.
 *
 * @return void
 */
function pds_print_seo_meta() {
	$context = pds_seo_context();

	if ( null === $context ) {
		return;
	}

	$logo_url = content_url( '/mu-plugins/assets/progetti-digital-startup-logo.png' );
	$schema   = array(
		'@context' => 'https://schema.org',
		'@graph'   => array(
			array(
				'@type'       => 'Organization',
				'@id'         => home_url( '/#organization' ),
				'name'        => pds_brand_name(),
				'url'         => home_url( '/' ),
				'logo'        => $logo_url,
				'description' => pds_brand_description(),
			),
			array(
				'@type'       => $context['type'],
				'@id'         => $context['url'] . '#webpage',
				'url'         => $context['url'],
				'name'        => $context['title'],
				'description' => $context['description'],
				'isPartOf'    => array( '@id' => home_url( '/#website' ) ),
				'publisher'   => array( '@id' => home_url( '/#organization' ) ),
			),
		),
	);

	if ( 'WebSite' === $context['type'] ) {
		$schema['@graph'][1]['@id'] = home_url( '/#website' );
	}

	echo '<meta name="description" content="' . esc_attr( $context['description'] ) . '">' . PHP_EOL;
	echo '<link rel="canonical" href="' . esc_url( $context['url'] ) . '">' . PHP_EOL;
	echo '<meta property="og:locale" content="en_US">' . PHP_EOL;
	echo '<meta property="og:type" content="website">' . PHP_EOL;
	echo '<meta property="og:title" content="' . esc_attr( $context['title'] ) . '">' . PHP_EOL;
	echo '<meta property="og:description" content="' . esc_attr( $context['description'] ) . '">' . PHP_EOL;
	echo '<meta property="og:url" content="' . esc_url( $context['url'] ) . '">' . PHP_EOL;
	echo '<meta property="og:site_name" content="' . esc_attr( pds_brand_name() ) . '">' . PHP_EOL;
	echo '<meta property="og:image" content="' . esc_url( $logo_url ) . '">' . PHP_EOL;
	echo '<meta name="twitter:card" content="summary_large_image">' . PHP_EOL;
	echo '<meta name="twitter:title" content="' . esc_attr( $context['title'] ) . '">' . PHP_EOL;
	echo '<meta name="twitter:description" content="' . esc_attr( $context['description'] ) . '">' . PHP_EOL;
	echo '<meta name="twitter:image" content="' . esc_url( $logo_url ) . '">' . PHP_EOL;
	echo '<script type="application/ld+json">' . wp_json_encode( $schema, JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE ) . '</script>' . PHP_EOL;
}
add_action( 'wp_head', 'pds_print_seo_meta', 1 );

/**
 * Enables rich search-result previews for branded template pages.
 *
 * @param array<string, string> $robots WordPress robot directives.
 * @return array<string, string>
 */
function pds_custom_page_robots( $robots ) {
	if ( null !== pds_seo_context() ) {
		$robots['max-image-preview'] = 'large';
		$robots['max-snippet']       = '-1';
		$robots['max-video-preview'] = '-1';
	}

	return $robots;
}
add_filter( 'wp_robots', 'pds_custom_page_robots' );

/**
 * Adds code-based public pages to a standalone XML sitemap listed in robots.txt.
 *
 * @param string $output Current robots.txt content.
 * @param bool   $public Whether the site is public.
 * @return string
 */
function pds_add_sitemap_to_robots( $output, $public ) {
	if ( ! $public ) {
		return $output;
	}

	$sitemap_url = home_url( '/progetti-pages-sitemap.xml' );

	return false !== strpos( $output, $sitemap_url ) ? $output : trim( $output ) . "\nSitemap: {$sitemap_url}\n";
}
add_filter( 'robots_txt', 'pds_add_sitemap_to_robots', 10, 2 );

/**
 * Checks whether the request targets the code-based public-pages sitemap.
 *
 * @return bool
 */
function pds_is_custom_sitemap_request() {
	$request   = trim( (string) wp_parse_url( $_SERVER['REQUEST_URI'] ?? '/', PHP_URL_PATH ), '/' );
	$home_path = trim( (string) wp_parse_url( home_url( '/' ), PHP_URL_PATH ), '/' );

	if ( '' !== $home_path && 0 === strpos( $request . '/', $home_path . '/' ) ) {
		$request = trim( substr( $request, strlen( $home_path ) ), '/' );
	}

	return 'progetti-pages-sitemap.xml' === $request;
}

/**
 * Serves the sitemap for virtual, code-based pages.
 *
 * @return void
 */
function pds_serve_custom_sitemap() {
	if ( ! pds_is_custom_sitemap_request() ) {
		return;
	}

	$paths   = array( '', 'services/', 'process/', 'about/', 'blog/', 'contact/', 'careers/', 'terms-conditions/', 'privacy-policy/' );
	$lastmod = gmdate( 'c', filemtime( __FILE__ ) );

	status_header( 200 );
	header( 'Content-Type: application/xml; charset=UTF-8' );
	echo '<?xml version="1.0" encoding="UTF-8"?>' . PHP_EOL;
	echo '<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9">' . PHP_EOL;

	foreach ( $paths as $path ) {
		echo "\t<url><loc>" . esc_xml( home_url( '/' . $path ) ) . "</loc><lastmod>{$lastmod}</lastmod></url>" . PHP_EOL;
	}

	echo '</urlset>';
	exit;
}
add_action( 'template_redirect', 'pds_serve_custom_sitemap', -1 );

/**
 * Checks whether the request targets the public robots.txt file.
 *
 * @return bool
 */
function pds_is_robots_request() {
	$request   = trim( (string) wp_parse_url( $_SERVER['REQUEST_URI'] ?? '/', PHP_URL_PATH ), '/' );
	$home_path = trim( (string) wp_parse_url( home_url( '/' ), PHP_URL_PATH ), '/' );

	if ( '' !== $home_path && 0 === strpos( $request . '/', $home_path . '/' ) ) {
		$request = trim( substr( $request, strlen( $home_path ) ), '/' );
	}

	return 'robots.txt' === $request;
}

/**
 * Provides a crawl-ready robots.txt response, including both XML sitemaps.
 *
 * @return void
 */
function pds_serve_robots() {
	if ( ! pds_is_robots_request() ) {
		return;
	}

	status_header( 200 );
	header( 'Content-Type: text/plain; charset=UTF-8' );
	echo "User-agent: *\n";
	echo "Allow: /\n";
	echo "Disallow: /wp-admin/\n";
	echo "Allow: /wp-admin/admin-ajax.php\n\n";
	echo 'Sitemap: ' . esc_url_raw( home_url( '/sitemap_index.xml' ) ) . "\n";
	echo 'Sitemap: ' . esc_url_raw( home_url( '/progetti-pages-sitemap.xml' ) ) . "\n";
	exit;
}
add_action( 'template_redirect', 'pds_serve_robots', -2 );

/**
 * Sends contact-form submissions to the configured WordPress administration email.
 *
 * @return void
 */
function pds_handle_contact_form() {
	$redirect = home_url( '/contact/' );
	$nonce    = isset( $_POST['pds_contact_nonce'] ) ? sanitize_text_field( wp_unslash( $_POST['pds_contact_nonce'] ) ) : '';

	if ( ! wp_verify_nonce( $nonce, 'pds_contact_form' ) ) {
		wp_safe_redirect( add_query_arg( 'pds_contact', 'error', $redirect ) );
		exit;
	}

	if ( ! empty( $_POST['company_website'] ) ) {
		wp_safe_redirect( add_query_arg( 'pds_contact', 'sent', $redirect ) );
		exit;
	}

	$name    = isset( $_POST['name'] ) ? sanitize_text_field( wp_unslash( $_POST['name'] ) ) : '';
	$email   = isset( $_POST['email'] ) ? sanitize_email( wp_unslash( $_POST['email'] ) ) : '';
	$company = isset( $_POST['company'] ) ? sanitize_text_field( wp_unslash( $_POST['company'] ) ) : '';
	$message = isset( $_POST['message'] ) ? sanitize_textarea_field( wp_unslash( $_POST['message'] ) ) : '';

	if ( '' === $name || ! is_email( $email ) || '' === $message ) {
		wp_safe_redirect( add_query_arg( 'pds_contact', 'invalid', $redirect ) );
		exit;
	}

	$subject = sprintf( 'New project enquiry from %s', $name );
	$body    = "Name: {$name}\nEmail: {$email}\nCompany: {$company}\n\nProject details:\n{$message}";
	$headers = array( sprintf( 'Reply-To: %s <%s>', $name, $email ) );
	$sent    = wp_mail( get_option( 'admin_email' ), $subject, $body, $headers );

	wp_safe_redirect( add_query_arg( 'pds_contact', $sent ? 'sent' : 'error', $redirect ) );
	exit;
}
add_action( 'admin_post_nopriv_pds_contact', 'pds_handle_contact_form' );
add_action( 'admin_post_pds_contact', 'pds_handle_contact_form' );
