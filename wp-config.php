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
define( 'DB_NAME', 'Wordpress' );

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
define( 'AUTH_KEY',         'sn2Q<t9}}G?GFPU5!#:2dtFad4_u>|:mKn[EJBB?kJa$5sEN9Cc=~/}1rWjwv~^L' );
define( 'SECURE_AUTH_KEY',  'ATG>$j@mps+B3A m-eL5pNmIt V3J~=wlFcalR7Lx!D5;3Vx}N4Sd+FA{zmcNrUt' );
define( 'LOGGED_IN_KEY',    'B>[)/m?ZiJh>HL=l[l>#EmW2dJ]MRWH`U=6p{WXmY(xGE>brLWAY&Wvr7V`SZ1:t' );
define( 'NONCE_KEY',        'SRZV;1z!5B^#w-$ZR]c}EvI81mI<rt!%Oj>B,90($l{f*Ey.:>xm61Km$LOHK3|#' );
define( 'AUTH_SALT',        'BU]mi&A=p7{K2^_G2&Tm>|03>RyA/QT#a4X{Gx;-V~#W/&liIjGp=eH9}>`p@:Ia' );
define( 'SECURE_AUTH_SALT', '=a#~I>,s#MQO[$}$X4Qh7=*,3UV.G)N/uSyo^5q*+#6+e{ b;6!S@GYsc!!I$97 ' );
define( 'LOGGED_IN_SALT',   '&fr~Wf|<nD5hcHct]7}U&B!$nZ^.9+2<^CRTS:pT}T1_uJ{H3.7teDvp[E$a|3BL' );
define( 'NONCE_SALT',       '0u964yADBHoTxNAamYJ{w?6TP^|RKzg0M(wMq]kG-$R;$Q$hGT9JmD9yL#aZ@;[M' );

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
