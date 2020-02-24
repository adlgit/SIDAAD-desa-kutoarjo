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
define( 'DB_NAME', 'kutoarjo.desa.id' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'NR(fK{9UPQ!)Kyr2Hlvw;&7_J=BH3q3J3Xvd?&K|f~}gF_;{]YH>e;UNj@={%_)r' );
define( 'SECURE_AUTH_KEY',  'eMx3qvvwY[ _=DC$a65uOdezwp77/9-87-9U;H80ND$Zdl~8[:?Gal08#&UcKg$/' );
define( 'LOGGED_IN_KEY',    '7RCyHTC?NUT>~x #P<z- {1OS*K;U!_N.GJ/>jV6[&CDGX*2ur?4ie9B,Ywn;;Kw' );
define( 'NONCE_KEY',        '-yRBqn=TRzYcE6%1X[NUtn=MhobR:YT!-kCVA9L6P?Q -#w<=caFP2:4X;+d`>!8' );
define( 'AUTH_SALT',        'xPZ-!uK0AK{|[PH= NW36@Zgj)h/uva}x7;ka05#/D(oMFlles;>@L0>CVd7A?ih' );
define( 'SECURE_AUTH_SALT', '=?z4xYkXb[%F9K~;xZ=_}i|ws,Y+a!eNTg?j ];btZXsz~T]ow>nN1>s;|NEga`_' );
define( 'LOGGED_IN_SALT',   'U5DL +i blIz=%u}&-MCXwTdv@4yr~L`>. g|,W;l9pV~>UA*Og@F.ak-BeJDx,E' );
define( 'NONCE_SALT',       '|$?L6i4`S`C]>YM-R~2Ap[V5_jDRN`,~1b,)u0le3U1Na!qgy`e=J:@fqXp&;B #' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';

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
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
