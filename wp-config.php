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
define( 'DB_NAME', 'wordpress' );

/** MySQL database username */
define( 'DB_USER', 'khardy' );

/** MySQL database password */
define( 'DB_PASSWORD', 'D1x1estate!' );

/** MySQL hostname */
define( 'DB_HOST', '144.38.206.40' );

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
define( 'AUTH_KEY',         'T?-4=t^l2[!/v|kH[,{3(:)W@,%t%g,b5xNf{(QDDq:dLq:&.d|J/0;/DOZUkl>[' );
define( 'SECURE_AUTH_KEY',  '>Ilb}e}gW~r8;=Zb,Zis4(!EF?|G9wh @z%+HjwSabgtjC^lRc&WxX*hv&(wIS:E' );
define( 'LOGGED_IN_KEY',    '@v.%Rd,o`2JNYPH>gH]y`(kYmet-F,9D].#1L28*f,Yh}+}mY8;NQ$+N}db=DVk(' );
define( 'NONCE_KEY',        'O=l?C.=m%y:>(`0%Ep>_ AZe{#_F=ps f.j]0. ]8w#43CsJuAcyg,*#w!:wSa=x' );
define( 'AUTH_SALT',        'faavILfop]Ou2pK1AaFN%CwKWk:^$_vn!^)VYVRGTnA+1[1d (XQSbm>v!?Ew=W#' );
define( 'SECURE_AUTH_SALT', '<vztwV%?XN~)`Q!;]1e1_}H6]-zw]Q4`[m>3/Cb#UsTOfk#KzzE z;ap8F+0.7R%' );
define( 'LOGGED_IN_SALT',   'BUk}7h59fxx#XO|lm#1TVx+i7^n_Z7h! z3x7whddFT~jVM]%e@!uBSalL=BwCP9' );
define( 'NONCE_SALT',       '#9Qe;PG`keD(P8`Y?h$61zI,^jfqEELJGSa6-uoWoPqrvR%]2!G0Yq,&~[1|r[vR' );

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
