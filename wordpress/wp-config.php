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
define( 'DB_NAME', 'rootsofunity_wordpress' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

/** Database hostname */
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
define( 'AUTH_KEY',         '{P=whYVi+EVk{?sF@WLeU9/j 9G:^cH1%yId~*MjQ)+eSvS;<}H(hc6[nEKKc8pE' );
define( 'SECURE_AUTH_KEY',  'Cb)aq-&N?d[`*GN^g9CF{s8Z>u[Ic@n1at] p*3gz,NtRy{LXk3()M<#W]TN(VXI' );
define( 'LOGGED_IN_KEY',    '^B[0e=L9eTO)cZ|36*/#W88@c5RD]If(`&%;;ouuQQ:V#3&KiUycd2_DwB!J/VrG' );
define( 'NONCE_KEY',        'f<e-CdCzPs0x6PmoOn]BvYaZ6^[#{0.?7+4ME~q_6!3nX@(u(@iptIz7q[F2h~u~' );
define( 'AUTH_SALT',        'l*<*Au>KM N6Tz-Qp6F|tEFQh[JGk$~b(C_U1_/?0<F,9(>fPD@#Viuk0|?>YINb' );
define( 'SECURE_AUTH_SALT', '<AdmkqbtIQY)l!1#RMB Ho5Fm*+QFOg<}}9%v/aJ-#b*`,[c,uF!9VW3eRjiGC,[' );
define( 'LOGGED_IN_SALT',   'X^nyT2x{Z,$rv^&8Xid05<d- iV|C $a~m;gomjcxW>2(sVEfj@MPV7<beaK.2J<' );
define( 'NONCE_SALT',       'J9eNs8uhv6Q*KE?~_xGqqh}T}Vub2>xGDy@zRD``4;l4KSIClCh}NL~ChMf]ge#i' );

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
