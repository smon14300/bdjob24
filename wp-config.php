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
define( 'DB_NAME', 'test_db' );

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
define( 'AUTH_KEY',         'a8M*RM2T3,}2=/m%=Gb0bf^UgqEG$|N$|L4?w=AK6IOUz);e7++nz0ZdLyzbQ+fd' );
define( 'SECURE_AUTH_KEY',  'ebr_cRlNz$$=< @wY{@MF^:6/x54:i&xj2dHHdQ<.]:=Xhgz[U?w6RdCKL;KsUR<' );
define( 'LOGGED_IN_KEY',    'Ne]%S)JId2l`eP=KVA=pNV{;i_cFYj%hJmPPr.)EJ=U)i%3! IIV#:o<{O/xZ4/P' );
define( 'NONCE_KEY',        '+~j>&$zY;(2<|8]S1:W~qRLjd|>%AL.5^i~_w1q/S#2ZD$DlUc<=keXz`!3Y`fc=' );
define( 'AUTH_SALT',        'Z9$b.<&;*8[Z.0K9}eeql&zBNz=*$VWM$`4XbodD*9eZd4jZ6zt]4E^CI$<bL.gU' );
define( 'SECURE_AUTH_SALT', 'yz>b5G8|.[`q)>,oWT!R9jB%~r3CrdA.g- & )KUhIAp&X{GJ5[&Mrt*rjWB]46]' );
define( 'LOGGED_IN_SALT',   'y6{Bx.caU$RTG7WZ|W<9},/mESrGP}}`?>@I:E0$_i_{m`4r>8,>{t=21=;$JTJJ' );
define( 'NONCE_SALT',       'J-*TcwLt6w)}@4Y7nter:bg;UFBy$+;6d$HjK3A_Lq@^d=E:KDfqzGG>!Q! z_^m' );

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
