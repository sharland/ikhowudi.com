<?php
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

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'ikhowudi_llr44');

/** MySQL database username */
define('DB_USER', 'ikhowudi_llr44');

/** MySQL database password */
define('DB_PASSWORD', '4ovz4r2fcsjs14yc');

/** MySQL hostname */
define('DB_HOST', '10.168.1.49');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         '6vo14oqGt1VwrqAHGuphDJL6cVETgU2VLLU3Yv0DFFyUW5AvSnSCU6fdkQHULImZ');
define('SECURE_AUTH_KEY',  'VqXS8t44VqtecMvg7jw8Uh3XJ279NFNORRHA65CVXucTeGUBbyG9pxPmmCEMcS1j');
define('LOGGED_IN_KEY',    'zE8S4r2crAPll3A7NZJpLRK2gLlGSRsVl73msYK0p6jweGyR2O2jD9hGPeQQM06N');
define('NONCE_KEY',        '6HDLohSZs7WD2t18ayue7pWneYrLfWv4jg6K0VZ0ICDsdSyEP47VuGjlLPd8hLi3');
define('AUTH_SALT',        'reWB7wJeD9osAnlnsXX5bBL4TXccepBWsld27bt1bTJvsXaP8U51xo8OvGSajfo6');
define('SECURE_AUTH_SALT', 'uhrzBar7reNkEDq57qsFquSemFXKMFaTCEGZ84n5loPMUYS4ym6DqW8CGrR7xfms');
define('LOGGED_IN_SALT',   'yZ8MeVGgmfQYCuk28ExFGHOLnmagoDDQlfCy5jLCAsEgBxBHBO4rrs6yHRBZ39V4');
define('NONCE_SALT',       'Ew76LYCP2KYyfZCE5bA0qJA0FwRQTE1SVoZMGR8mgedCwsBcd3Wxpir0OeB2o5BH');

/**
 * Other customizations.
 */
define('FS_METHOD','direct');define('FS_CHMOD_DIR',0755);define('FS_CHMOD_FILE',0644);
define('WP_TEMP_DIR',dirname(__FILE__).'/wp-content/uploads');

/**
 * Turn off automatic updates since these are managed upstream.
 */
define('AUTOMATIC_UPDATER_DISABLED', true);


/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * WordPress Localized Language, defaults to English.
 *
 * Change this to localize WordPress. A corresponding MO file for the chosen
 * language must be installed to wp-content/languages. For example, install
 * de_DE.mo to wp-content/languages and set WPLANG to 'de_DE' to enable German
 * language support.
 */
define('WPLANG', '');

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
