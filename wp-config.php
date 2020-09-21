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
define( 'DB_NAME', 'wordpress' );

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
define( 'AUTH_KEY',         '5Z*rBG#Gj8ux7g|2yK<$WwWfF3et^PS0^wc<f~KG&7]2hQ&4CJ@rGOr#ursv0,4F' );
define( 'SECURE_AUTH_KEY',  'QTLog7u1OG76.=8l={)u0bt:|ez]/>UES&.&Xr~DR}A`y=AN%H2<->FLus)MN#Mt' );
define( 'LOGGED_IN_KEY',    '}IEKyOp5<psq.Pv:&&@74:>rv?sG4QtQq<2lkl.LfM h>PKn~L`4321RxfFvNw.H' );
define( 'NONCE_KEY',        's7i$M5THAs{C*/VpEfv|]QIeGQQ=t,M4]a *Y80du|pO-Xuwz:?IlhClx`~yP]c|' );
define( 'AUTH_SALT',        'hAf;d=YYah/j?e/t7dHj%g+QXcW~U`!hswGlghjx4[0B$S!vjohZ.VD(<1X;X;rp' );
define( 'SECURE_AUTH_SALT', '>FU%9rZ`E1iot)D*/7$]6j#4ZgF]&9Z5Kert).G@Fs*={2B^o=//pD:1]e+!W%G&' );
define( 'LOGGED_IN_SALT',   'm[(bo RMLvZ%T(AcT.M#CmcEp]M#=%<5O`@-[CjqE NDT~sv)oWU}8yy:t]kH>FS' );
define( 'NONCE_SALT',       'e_idS|;Nf(PONv*n8d&_:uCG(NdI$H,6g:wpc3RN3I&:f=iP>lKTMc~`Hl_^EBU:' );

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
