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
define( 'DB_NAME', 'DnnMedia' );

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
define( 'AUTH_KEY',         '`Pp21tLgle3p{nG]6eY#Z7fA*fA%y@,Q#t.7-5^XxbN*xT*Bf+~L2,[@jnS.8.lm' );
define( 'SECURE_AUTH_KEY',  '@O.}@<6<Xh)w0uT$+{rG[t|$fQMO/F$y|j9T|KGI*bcVklJG./+480*U88[{GFit' );
define( 'LOGGED_IN_KEY',    '_nKE{($|PSmabFSffB=uZ:g]kB,}s<WCq;]CaZc:m{8pcAO2)svEc]&BTvHr*S9O' );
define( 'NONCE_KEY',        '?C<F#egs&#=_Tg>a9O[nSOGLZQ#k$CB<6czl.86l?i-Zj*G8#ZC~k^*$H5$3w2Ho' );
define( 'AUTH_SALT',        '%g*LS`j}n %kfGdt5Azfl}AMU|8$rcx!u m{!Mh,B7>=7xJj7Yl+@uWi- %UZ$5B' );
define( 'SECURE_AUTH_SALT', ';3Fz]w8%>zICn56Hw#M$I7W^gKo.>sLgj I>8UeXb0XR&]tTnCED0oR1ePh&L5-|' );
define( 'LOGGED_IN_SALT',   '? [dr4,.!TFY yd/!rE]}GBQji,2qvDnB7$i%]ExSF1Ok6x9*G_<*@%@t2Vd@NI}' );
define( 'NONCE_SALT',       'dbU~JO6 c=V,yal|JPE).+XyO,<Lr )+Gg#6LiMpjwwkeyKZ#8+XWXDCT7G:6<XZ' );

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
