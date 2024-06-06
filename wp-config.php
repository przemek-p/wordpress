<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the website, you can copy this file to "wp-config.php"
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
define( 'AUTH_KEY',         'l u;FC|9l-r+Zv7pH}GK6#BByRwu9S=XnbP]}.ktk|pID&?q7JY+cVBz3jpL$vXe' );
define( 'SECURE_AUTH_KEY',  'jIdgY-Sr2KgU/Kvt(F4#= G`8N}JA_a}Xe),~l!s{kJ=%d18U1[n yr> 6LJSJ)=' );
define( 'LOGGED_IN_KEY',    '7&A1gfwn]AE;MZ5FBG`}@#vY256g<S wo=*{}2x=@<?r(+z=}i|Wq4>L#ojk[P!%' );
define( 'NONCE_KEY',        'OOrlaF~^U&zbb6Sm)/p1Bi ~LMSdbN-{f({;|0>JKW}N2&:?Xv8lcKup,Y9D3`DU' );
define( 'AUTH_SALT',        '0dcG)N8}3/0,6$rWAdkJcI$PaFsW.hLA`*P3-.2x[K$= 6o^n%913CW33K-[:BgF' );
define( 'SECURE_AUTH_SALT', 'm^24+byhs~MBYI+?7Zxax[Qsae>zK$+Q|.LsTkTVyq{h.@w})Zb9c.wKhf-/$DMt' );
define( 'LOGGED_IN_SALT',   '`1We} W6C)92lh[Ip^25O>7zkts[|}NY8Mm&0}>~0l.O|Uld{hwrc5L*9qpvpDly' );
define( 'NONCE_SALT',       '_qU*TeRxd>d6~B$2sbLI^R@F Z0$pNt^~(N7Hj5$Unr}UopQFDeHT}b|+Ll6qonD' );

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
