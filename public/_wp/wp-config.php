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
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'admin_app' );

/** Database username */
define( 'DB_USER', 'sail' );

/** Database password */
define( 'DB_PASSWORD', 'password' );

/** Database hostname */
define( 'DB_HOST', 'mysql' );

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
define( 'AUTH_KEY',         'M)5#MI=R,55|RF?A,r(Ub^tty?IRHPTdi;QuW/}CDagFNETyyv<V0jhGrmBW&ce6' );
define( 'SECURE_AUTH_KEY',  ']I $b2Y<*u@n]X@z;*X|-W21j;eNK<g+q(c=&a+&(B8=?we y=fc&0fvE`3g?7eS' );
define( 'LOGGED_IN_KEY',    'pd.rFg>mVI,u~I=kbDZ>V3OVbaNo=V:K,xL%!G/RcQ} hisX(AS_Mq-9KP;JSxq*' );
define( 'NONCE_KEY',        '[UC-Ji~h:F5gBRZ@9LVuapRXa@IQt/Oq_f9qddf^G=Q*x-BU@9s=MILe&aC[N:~2' );
define( 'AUTH_SALT',        '-1X_ONE!of1m9F0K7;qLR)!.!@hjVCaTK5<]HZL#du<)wL#:AfzeIDGqApVw^v^a' );
define( 'SECURE_AUTH_SALT', '#)G3]Ng``7SLqsU!g.qpyMFny:HW?]o(6p8lnH)D;*[*+F_dS_i<x8R+b}y~>A.I' );
define( 'LOGGED_IN_SALT',   '^>Bs<c`o^A8v*{ (dCGd*6A5fnaGv_Sc`]#=$4]ULE,Flf9L_RU<,|j;.%PVKZ:j' );
define( 'NONCE_SALT',       'MXBg5o#d[9KPi/v]DE[4b@ Hixv[C9.J&4WV&j@I2CR@lww[ LAiaOEG4N`Q8_r7' );

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
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
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
