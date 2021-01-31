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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wordpress' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'orangebird051' );

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
define( 'AUTH_KEY',         '.CRKQ*vNnWt AHR?}n;mOR}B;-Y&a@X!vhj[#tZJTerECAdu-ShLuZAY;MnfJG/3' );
define( 'SECURE_AUTH_KEY',  'L]Zk6Zy `0:.iIh.7G?jhF<YA2k:`?2x]$|2N{Ygi&vFg;)T]N ;iv|;ARo.aPVU' );
define( 'LOGGED_IN_KEY',    '*uN%X`P?B{.p|1cbdTZPf*]{@[hUupKpq.f?l[_4wt!|FgWQ+$X[#dDwq=9iA?:!' );
define( 'NONCE_KEY',        '6TlENb*LRX [.F!n/=[kY Oo>tB/B0.0xz +g1(&@Nf:L6aa?A4ET+uUbpz];c&-' );
define( 'AUTH_SALT',        '`vt8xCo1;U[HG`-s{oV|^?)g%]_AWw}<yP}bQukI=$yn%v=hO4PeYJ<)klS{,F5.' );
define( 'SECURE_AUTH_SALT', '(;J@(nj*TCtk$BHxWEE?Q-HJB-Gg,5}V^kq{fxoI5,5JmX0HJr~>6rG`0E`$ffz0' );
define( 'LOGGED_IN_SALT',   '):8KPS-1X5I=s!Lz.f;z-oY:OQeeLeC4O]|lA_snFT6[lr>pX`*CWZj8m*9#U!:d' );
define( 'NONCE_SALT',       '!hFwr;%d|_gnj][|ZX8niIctG5wZ4 JhO:M7/vGvzrewGgi+WNL75ofQQeK5/d9y' );

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
 * visit the documentation.
 *
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
