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
define( 'DB_NAME', 'dev-axelmatus' );

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
define( 'AUTH_KEY',         '*z{H~5Lc>hcWR|jz!D;iWrxe,@-@iX4j/QY1+=VV>:(93%un-|C<KEer2{i`MmXu' );
define( 'SECURE_AUTH_KEY',  '8u)XtrLplO]w/ijS!N1wGQt-l YD}C#jxbU]&LJE^:awzfzEfvPaw!CS )jl~ZE{' );
define( 'LOGGED_IN_KEY',    'A4[cO8/!!N*+L98Xa6w|pb`6g>bh[0IWq5LP/;f6:3fr6qI@#WPZk68nCD1|)@[G' );
define( 'NONCE_KEY',        'kNe;.i>,pVLG`o~wWlC=xG7-:77EUx:vp (~)?uc^!A`%^X+<v@r_k470_B_vP7c' );
define( 'AUTH_SALT',        'Lo&x^gvGSfv9HERnc$F~0wa=nL `<>m3ZRcr2Yy0zLW5AaTq}?ZbeTN/FW1!Mr3{' );
define( 'SECURE_AUTH_SALT', 'L`EhDTTxXX=w]@tSQ`+FW79qe`f4fqj(YIzK4qz]mb)uPALK!(%)}teHm2OyXil7' );
define( 'LOGGED_IN_SALT',   '|v=Jon%YJ/AOY(yEePRc}oZu2&6f=,NNl?cw xCH+r2e:g&a;ca(RGh99j~&/|]2' );
define( 'NONCE_SALT',       'RA}K?MHf%=@}1$ R)pu>3Uv#Sg*)LC3@]Y]Dv2b2d>^o=%3IYU&)n:WWk9BY|s-Y' );

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
