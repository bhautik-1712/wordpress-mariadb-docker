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
define( 'DB_NAME', 'wordpress' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'p@ssw0rd' );

/** Database hostname */
define( 'DB_HOST', 'db' );

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
define( 'AUTH_KEY',         'iUg9_>X*`?CT&eR(hh&p.U.gt5!hcF~^~=Q]KI?_6wGfc/7v-fBDy(t$=j&Jh$>`' );
define( 'SECURE_AUTH_KEY',  'Z|;6Pa0^1d)O06oA@5(DzK%b&F,|>8B$6=bxMv<%F~Q]M]H46F3c?`%G=cM+BEgR' );
define( 'LOGGED_IN_KEY',    'XwMa1b47IYC{SydY=>|a/4+sXC3d;bw<c)zl++:Tq9|I)l_Ip}R:ObXiymV,>H[D' );
define( 'NONCE_KEY',        's.yy? M[Gi(^I:m HhtIfC5n=bIvz}&-N@pb~(Gsd$a*7:Gd<uZYH0nOCu01JH4D' );
define( 'AUTH_SALT',        ']6=]k33R45T@5D(%r9kH!jAdEw!0pTfH0|[Lsvmay0HFtURJOW`(^%OD`6k.({(4' );
define( 'SECURE_AUTH_SALT', '&04@F/V2PJ-ZER&?Ros;+^@<xaP@H8u&CgN+;M$Gj(aF^FoQV[aI>K_6:vJ:>rHB' );
define( 'LOGGED_IN_SALT',   '@HVL;.T|;ne2mp8<&e2;k<_Z`ftUQfWnAs(WJfXRu8*<&03jD2R?<WdPXWwO)``K' );
define( 'NONCE_SALT',       '=w(RaUg(MjXaP}e>/L8$,Cl(][&>0l]KAk.AN^e Z8(?P(qrJ:3LdT5DHK9G,T[>' );

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
