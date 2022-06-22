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
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

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
define( 'AUTH_KEY',         '[&+*%;xc%nx$G-dx<H+ouPLKxd~yVw!;m#B>P B Y*8H1N#$fRB<{N1HT6y/L`Vi' );
define( 'SECURE_AUTH_KEY',  '5Q1WCd1#8qh:NDG+#Qqr%Hs`K/Z3Q_&JbIW`r8z+ATL>?-tF~ n`+ <3gQS*z@KX' );
define( 'LOGGED_IN_KEY',    '{pD6cpo0=RGQ>U (:@C_Zz,{1B#o-vY.>i 0{[Qpy{*<5W<vBKJ`lCIW#0RfevhF' );
define( 'NONCE_KEY',        'A{{8ff2hU$J)rXX6TMqc6|c(3aMGA{17WRgP@ m<W@ojREuv(@B=1y(Nh.n# ^SJ' );
define( 'AUTH_SALT',        'A-{| IjGkfjYp)gQUk@n89Zie(yS}lwTO{`~wv!$)V) PgQMruMtneo>L@,9N!s4' );
define( 'SECURE_AUTH_SALT', '9v>FpcOWU%&]^mdFFb* kZ$Y>mpmTC}aHoBd(Ci//<dLae{sBXkab.|L!UlsyEZ#' );
define( 'LOGGED_IN_SALT',   '9>%1>yB+RAr%n*d{Q1i^jKs0C]oj?~brB]^Yo1,EXb~654q{leL,/`>zr[L8,uv,' );
define( 'NONCE_SALT',       '|>9-6&H([em6>m_@aQ~T?&9#kxV`=&q)l?3<<p;!5ZoRK9ddmQ`s?JKqC{L7qyZx' );

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
