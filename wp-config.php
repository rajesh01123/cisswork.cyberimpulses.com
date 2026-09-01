<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the web site, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * Localized language
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'cyberimpulses-cisswork' );

/** Database username */
define( 'DB_USER', 'cyberimpulses-cisswork' );

/** Database password */
define( 'DB_PASSWORD', 'PoGWDVRlHWzR5qbhD1qh' );

/** Database hostname */
define( 'DB_HOST', '187.127.150.6:3306' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication unique keys and salts.
 *
 * Change these to different unique phrases! You can generate these using
 * the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}.
 *
 * You can change these at any point in time to invalidate all existing cookies.
 * This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',          'eaaTb+j6#M]~ia!XN2u]{pNw_l9YtZIz}aWscP(l-i+=^0uGX6te<=K@![_P*X3_' );
define( 'SECURE_AUTH_KEY',   '}H1fB@Wk&K?~t=cRk%Xc6ziFp+Us{EN;PGPe3lyN:a>*agm7Jy.yM(zGvoR#,Ez5' );
define( 'LOGGED_IN_KEY',     'As8:00$6:-ng7}n]N<|Xz?u>C+>x]+T1Oq _F`~(L|%`On3=-E0I9ni8DThZ.^8k' );
define( 'NONCE_KEY',         'oAd1glc%DJ3s+<)PDE.4`kl)Kmd@~A?;]~jt@pNZVYw7+_A.mEL7d)YM2{Hl~<fl' );
define( 'AUTH_SALT',         '%56VRKTt?MAz|5^{YK[+Pa+Cfx:; b ?pCXUn;N2/$tZ<I-:4([s9y*hSMbn?CLz' );
define( 'SECURE_AUTH_SALT',  '#skF:pIv+6%rmA$g)>7dBZVUfMk7@*an8$m;,Svv.0o{GSHkkP>qn3,+CpH,+Ab[' );
define( 'LOGGED_IN_SALT',    '[$/c0WI*n</[uXca?W2Pcu r,|U`ZMKX%xw7L3k($u?jZeAzdP(b7_b2Gt8I+zdE' );
define( 'NONCE_SALT',        'AqTJ-#W|49q#g*i_Y%!nRg|C}>yed+Z`*9w~C&(y?]$bZ%HP4UW$CF`y~/FW0b<1' );
define( 'WP_CACHE_KEY_SALT', '^?S+tQqmL=j*B^?*0#By,Lb0lv1-]0CUBANcKm^^MMXI[]5FUZrknfL<eX}WdC,.' );


/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';


/* Add any custom values between this line and the "stop editing" line. */



/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the documentation.
 *
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
if ( ! defined( 'WP_DEBUG' ) ) {
	define( 'WP_DEBUG', false );
}

define( 'FS_METHOD', 'direct' );
define( 'WP_DEBUG_DISPLAY', false );
define( 'WP_DEBUG_LOG', true );
define( 'CONCATENATE_SCRIPTS', false );
define( 'AUTOSAVE_INTERVAL', 600 );
define( 'WP_POST_REVISIONS', 5 );
define( 'EMPTY_TRASH_DAYS', 21 );

/* Use the appropriate site URL in local and live environments. */
$local_site_url = 'http://localhost/cisswork.cyberimpulses.com';
$live_site_url  = 'https://cisswork.cyberimpulses.com';
$wp_host = $_SERVER['HTTP_HOST'] ?? '';

if (
	$wp_host === 'localhost' ||
	$wp_host === '127.0.0.1' ||
	strpos( $wp_host, 'localhost:' ) === 0 ||
	strpos( $wp_host, '127.0.0.1:' ) === 0
) {
	define( 'WP_HOME', $local_site_url );
	define( 'WP_SITEURL', $local_site_url );
} else {
	define( 'WP_HOME', $live_site_url );
	define( 'WP_SITEURL', $live_site_url );
}

define( 'CISS_LOCAL_SITE_URL', $local_site_url );
define( 'CISS_LIVE_SITE_URL', $live_site_url );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
