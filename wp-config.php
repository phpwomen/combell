<?php

$_SERVER['HTTP_HOST'] = ! empty( $_SERVER['HTTP_HOST'] ) ? $_SERVER['HTTP_HOST'] : '';
$_SERVER['REQUEST_URI'] = ! empty( $_SERVER['REQUEST_URI'] ) ? $_SERVER['REQUEST_URI'] : '';

/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, WordPress Language, and ABSPATH. You can find more information
 * by visiting {@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

/**
 * Don't edit this file directly, instead, create a local-config.php file and add your database
 * settings and defines in there. This file contains the production settings
 */

include( dirname( __FILE__ ) . '/wp-config-local.php' );


/**
 * WordPress Localized Language, defaults to English.
 *
 * Change this to localize WordPress. A corresponding MO file for the chosen
 * language must be installed to wp-content/languages. For example, install
 * de_DE.mo to wp-content/languages and set WPLANG to 'de_DE' to enable German
 * language support.
 */
define( 'WPLANG', '' );

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 */
if ( defined( 'PW_DEV' ) && PW_DEV ) {

	if ( ! defined( 'WP_DEBUG' ) )
		define( 'WP_DEBUG', true );

	if ( ! defined( 'SAVEQUERIES' ) )
		define( 'SAVEQUERIES', true );

	if ( ! defined( 'SCRIPT_DEBUG' ) )
		define( 'SCRIPT_DEBUG', true );

} else {

	define( 'WP_DEBUG', false );

}

// Define Site URL: WordPress in a subdirectory.
if ( ! defined( 'WP_SITEURL' ) )
	define( 'WP_SITEURL', 'http://' . $_SERVER['HTTP_HOST'] . '/wordpress' );

// Define Home URL
if ( ! defined( 'WP_HOME' ) )
	define( 'WP_HOME', 'http://' . $_SERVER['HTTP_HOST'] );

// Define path & url for Content
define( 'WP_CONTENT_DIR', dirname( __FILE__ ) . '/content' );
define( 'WP_CONTENT_URL', WP_HOME . '/content' );

// Set path to MU Plugins.
define( 'WPMU_PLUGIN_DIR', dirname( __FILE__ ) . '/content/plugins-mu' );
define( 'WPMU_PLUGIN_URL', WP_HOME . '/content/plugins-mu' );

/* Multisite */
/*define( 'WP_ALLOW_MULTISITE', true );
define( 'MULTISITE', true );
define( 'SUBDOMAIN_INSTALL', true );
define( 'DOMAIN_CURRENT_SITE', $_SERVER['HTTP_HOST'] );
define( 'PATH_CURRENT_SITE', '/' );
define( 'SITE_ID_CURRENT_SITE', 1 );
define( 'BLOG_ID_CURRENT_SITE', 1 );
define( 'SUNRISE', 'on' );
*/
// Enable cache if not PW DEV and not already defined.
if ( ! defined( 'PW_DEV' ) || ! PW_DEV ) {
	if ( ! defined( 'WP_CACHE' ) ) {
		define('WP_CACHE', true);
	}
}

// Prevent editing of files & updating plugins through the admin.
// Allow if dev.
if ( ! defined( 'PW_DEV' ) || ( defined( 'PW_DEV' ) && ! PW_DEV ) ) {
	define( 'DISALLOW_FILE_EDIT', true );
	define( 'DISALLOW_FILE_MODS', true );
}

# Clean up image edits
if ( ! defined( 'IMAGE_EDIT_OVERWRITE' ) )
	define( 'IMAGE_EDIT_OVERWRITE', true );

# Enable all core updates, including minor and major
if ( ! defined( 'WP_AUTO_UPDATE_CORE' ) )
	define( 'WP_AUTO_UPDATE_CORE', true );

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) )
	define( 'ABSPATH', dirname(__FILE__) . '/' );

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
