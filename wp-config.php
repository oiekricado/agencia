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
define( 'DB_NAME', 'agencia' );

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
define( 'AUTH_KEY',         'HqHSws6ol)i,|`kh.9Pqf7R[R$!M.Sx*Z_K3#1-hE(Id<oCKJyr6D8ek^MO9d$}t' );
define( 'SECURE_AUTH_KEY',  '3J^9s3@$vu+U?9zvaNSDgwRu0C9t~;9G3KFR5lSD>ewIcD0t&>SQ?MX|EJ9OvT8H' );
define( 'LOGGED_IN_KEY',    '$Llbd*Bx9d5+N?sn{~p}%YWfS20G`JmB{^h,Gt.oJ}k6irN+eP`-u9FA-L8+ZBtd' );
define( 'NONCE_KEY',        '0` G+#t{|89c|ac5safT,7Ld*~y]F&Jla h3GH+N;/jlL9C7NE`VSfVfO,`}J67H' );
define( 'AUTH_SALT',        'K%]F#2a6*9z8B: wvnnPg~j-7*|F8o?2|&br#^O7a~cXWYwM0/6Up*_Faa,jhCW=' );
define( 'SECURE_AUTH_SALT', 'i/4 2%EYb!csLpJ-,*NnmD)Dn`< &nqCz_~P`x;F[^F-Do^vaQBe<:)( <;{Xyu#' );
define( 'LOGGED_IN_SALT',   '2|t-B-0((GOG`31v+hJ_,1 h7tO`]z5*GDey )+B^#:FvIr@LL{Ug<%r@27toD=6' );
define( 'NONCE_SALT',       'tNn5YFf;sFUo+K8`hj]Hh{vx._#xb&iXy7L$ 2jC@0:++-qs86qbvS+gvU_g )PZ' );

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
