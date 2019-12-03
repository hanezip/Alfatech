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
define('REVISR_GIT_PATH', ''); // Added by Revisr
define( 'DB_NAME', 'alfatechenterprises' );

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
define( 'AUTH_KEY',         'I ;E>7w$.+R!(NG;7:8Mnobtq%8xfhPB`Rx[vFz)JGOnq2h+o}m;rA?$_Ce9O|Rx' );
define( 'SECURE_AUTH_KEY',  '2bQgl0j^:Ka0deNJZ^L)2dJ`~BcLjX59qbCft),~lUsk5C0Z3+(:c}<[P-;s8?|N' );
define( 'LOGGED_IN_KEY',    '|ThlrzV2}r:(gi{{v;{ZkC,Ok;MhlX#b#i;P;RA^ui94SFFgbZZlN-+Hk]+R_:K0' );
define( 'NONCE_KEY',        'r}cbt*3XHzR6+`:nT2H_YWiLht%ISjh&NXq;-*6yaa8.Z;||r@ne|De*w0gK]aFU' );
define( 'AUTH_SALT',        'fd?X`JotyGy3iRbOq_7n|l02--<(E9~|WeF<xC(}Od&`1=eS**YZxx5(w-D{&JLr' );
define( 'SECURE_AUTH_SALT', 'fD-F.P6(U1<c[wmPvXTk_`vM0.JKA;p2pC*}TApUvTKnlom$Nzf$d>:X{:8w/YFA' );
define( 'LOGGED_IN_SALT',   'D*x;_@UYSXV4hfnJErGKx*5Iqf0{oW+v]:GDy_:(tDRjAg-bBMj1)GD7cK&5=s87' );
define( 'NONCE_SALT',       '-R[X*6NG_|(j_ +c_3&K{KdJBS^4%kCT+E/Q2^@w >_1dg]N^I:$]@nLuC@!m>jU' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'alfatech_table_';

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
