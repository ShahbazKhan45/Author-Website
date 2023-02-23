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
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'author' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

/** Database hostname */
define( 'DB_HOST', 'localhost/author-website/wp-confige-sample' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

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
define( 'AUTH_KEY',         'Z(b@S$m4Mkj.M#~s,J`dJKlsLo*]xPai?1]4{h3>+S;#3O`-g8hdO`Gp6zMa/:$#' );
define( 'SECURE_AUTH_KEY',  '$sAu*FB5v*/d?wS].FsP0,/{hJKp^]-v#wXbyy>S-vAnuKjqmexUhK(f4[6s/.Lr' );
define( 'LOGGED_IN_KEY',    'I5Ysf$aMeZXj=g`e58e+_H25FeR9JKG!/4jt)-?X&)z^[ u&|;`Zj;z{PJX-]=Me' );
define( 'NONCE_KEY',        '^1/k$61p|EB~+sh.?YK[SEXOe@( <ylG6+ld80EIu*h=Zs~}d4i:YAw-$2T9OaC$' );
define( 'AUTH_SALT',        '-sa6_@D!6zt#oFb-CA*we0Ic5ZsqrPMS+~}D4_X<1rW]B&[bR9N@0[W7hpo%?H+q' );
define( 'SECURE_AUTH_SALT', 'S&!i1oT#q`=X)NHmy*$W6JZjJr)c+>c&]+HF%7g,golme?-|vF0hlituayL~*!!)' );
define( 'LOGGED_IN_SALT',   'IX/))gWhb0$uXQ WlGEl1bS=jUf_4||.WVg[},KBS811cvxwAf3i#A^5pkZTv.!M' );
define( 'NONCE_SALT',       'e7O[Dqa{<g41Gp|| AyH hcQb)f}GQ@ecg--syLg%eNP(PT9yrZ](+ynW9b{v?5Z' );

/**#@-*/

/**
 * WordPress database table prefix.
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

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
