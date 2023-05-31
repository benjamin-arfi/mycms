<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the
 * installation. You don't have to use the web site, you can
 * copy this file to "wp-config.php" and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * MySQL settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'benjamin-arfi_wordpress_e');

/** MySQL database username */
define('DB_USER', 'wordpress_d0');

/** MySQL database password */
define('DB_PASSWORD', '8C1c2HsD!w');

/** MySQL hostname */
define('DB_HOST', 'localhost:3306');

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
define('AUTH_KEY',         '9vJk%ovUMD8*Skvl6a4)pDej&f9^@RgO0rUM%fPYSmoF)%dU6lhP%H^qVvq!muyW');
define('SECURE_AUTH_KEY',  'YqqMo*W6F&31%tAF8JmY^qdrS%AGTwUQ((2tmqcUBq4p98j6*3%6a@R6RS62LXfU');
define('LOGGED_IN_KEY',    'PD7jfY2bjXLm671*D#)PaG2ge7eNHaTt9Jsg1Thj)SE(wlvgRMI!vnM88(CCR*Bu');
define('NONCE_KEY',        '&m0(s5pNaboCcPeEkw(yK4maxZ8XqVO8q^biCkRa^Wo&c@K7&tsckYR9oTRVrQe9');
define('AUTH_SALT',        'J*fiaLEO7MZ3)y@*YD4m#L5ou!Od4jmsAfFG7@cOqQeLt@jRkQWMb8Mxw2Jb9zhC');
define('SECURE_AUTH_SALT', '#R4z1cBGhB%DEpD)6oF1bycoPvkq@dEIXl*n#G!HrjKfh@#s8ULs!R*dOnZ&kGIw');
define('LOGGED_IN_SALT',   'x1JBlbe0P!S(%GvzxO15KRofKimxjmIVaP@mcbdDXxxx3MmmBuIvIv4BzUg5To6B');
define('NONCE_SALT',       '(zKU8paU)1wjdV^s9Uen8mWaEMvavA(knQ)J2iJ)V66@eV0@dKG!gTtCe68YemKe');
/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'UHieuy_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');

define( 'WP_ALLOW_MULTISITE', true );

define ('FS_METHOD', 'direct');
