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
 * * Localized language
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
define( 'DB_USER', 'wpuser' );

/** Database password */
define( 'DB_PASSWORD', 'WD9gvq[Ut*dvjEtZ6yeM7s3E' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

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
define( 'AUTH_KEY',          ';N{9-+I1gy~CL*9V2v`]9xJ{Gvx1oX41$.5dG &M?) Qf.4Ctq!>0?[$4iWj|r=c' );
define( 'SECURE_AUTH_KEY',   'Fc}/8|`fO<_DDvBfI=g<5k,]ZWg_hRt+Nw.k>F_>PQ^XhbHk#(,lF NjuV:8Q[=n' );
define( 'LOGGED_IN_KEY',     '[o0n2>-ThnQ6gdo^_4vky2sA@0%8tT1bgA-4vx`b9g%uCJ-3aMpFZ`X/(6K-f++N' );
define( 'NONCE_KEY',         '[`>8,^<C1/acl$CPe85@xIJl8^rN/ReGov |.Venm!ik},=c< 4{^{Q4oBR}M+:t' );
define( 'AUTH_SALT',         '{N0:{vIj}#I4XEkG$y@Fk{t4mo# #x!5fL#ooSSi;oY!5H2E3yWBY[/*2!~ve*{o' );
define( 'SECURE_AUTH_SALT',  'W:@aj(Y96NC+T/x?Gl-pgua+(G:B<#DXe2B|#aTl+u_=sNc:/7dxK!_o1OfPr~k|' );
define( 'LOGGED_IN_SALT',    '#ojeFNu^B%[,HxcCQjc}mEYU~R2u9[FUs&s8dI[-0HCjG2;_MP2R{i;i%Gow)SSX' );
define( 'NONCE_SALT',        'P9b]UHIjVmrS%t?9mW&sR*?Bi[ECP:,v?@zD9?U?qjxMA{R@$mh~FFs*|4 23_nx' );
define( 'WP_CACHE_KEY_SALT', '&B54yq?!8;EC*5R*L%QH84CsI|}am5;N#9%Pz9B=i-6{+mZw{?I*IwkIRY_2J)::' );


/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';


/* Add any custom values between this line and the "stop editing" line. */



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
if ( ! defined( 'WP_DEBUG' ) ) {
	define( 'WP_DEBUG', false );
}

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
