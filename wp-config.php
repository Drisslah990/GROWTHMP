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
define( 'DB_NAME', 'wordpress' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

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
define( 'AUTH_KEY',         'xO}(xp1)c?.Bc:X.VU&;eeu2<d%;(nknMKX~Xi{g]QjfN?gw:*x2 >e2r%YG:GF3' );
define( 'SECURE_AUTH_KEY',  'u@$DhQ+ Q79`Rw8z@znqSvYJK,SwwPo7&$GvfyrKAafXD1)u@c-LI::[Vca6*;Q+' );
define( 'LOGGED_IN_KEY',    ']RO~kbphx/m2YG87ohnuebv+bf<kP,+JOq,J=D;j{xstk{pawt!HNt4=}h re(_|' );
define( 'NONCE_KEY',        ';w(Aq6#<5a_Z4ONvE3IQ]&rZ,-f-sKI`io2(MC?~lp@N;Ppen_ib0BuD~c*W^GlD' );
define( 'AUTH_SALT',        'hch+r34!Mi{rtGnf8/8+-@x:#t1F9M<R_tSjLmDa.Yz=QQ>St59:&M,xm@qFWy9)' );
define( 'SECURE_AUTH_SALT', 'Fj|{Sr+{pC(+4{E8{D4];Q:YnpSrR44BjI=0te|!=_RL)]MfuE3lYy8]4%%!;:tZ' );
define( 'LOGGED_IN_SALT',   'eBSSdW~-MFLE$ xwv5J{j)&;t>sVXaA+&;Z8+N[`#-ry@ktn?y0{V<T[<wz]2j4,' );
define( 'NONCE_SALT',       '0A3Je^jO(2=UE}Gq=7]HK=QmRzO/G9c-;4`Scac#NNFh]VQODsA2.eCSh0[_fnI4' );

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
