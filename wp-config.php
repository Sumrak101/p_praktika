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
define( 'DB_NAME', 'p_praktika' );

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
define( 'AUTH_KEY',         'ugS`HwKDw,%`gP(+[)zYI-S3ULK[<Mf,(7q+cP(2cSiq*@+*l]6G<8Pg%<RBBl39' );
define( 'SECURE_AUTH_KEY',  '(KXPP5lx*b/%sdN$}8Y:QEG;9ur/9&1%g r}KA7%{d6~pQyUp(]N=pOEzbae7`,L' );
define( 'LOGGED_IN_KEY',    '?/n<<L4ril{A;d<{v,/lWi$6}C:(-*A3.-9bjQoIp2RXJ%^&i?z2SL#pC1K-3eod' );
define( 'NONCE_KEY',        'n&?ouX&0EAiZYc4LvE|nfOjCvg!~sD#FiH~&usSD|*~]{Sw#_:vDJ(P]YR8]o=!o' );
define( 'AUTH_SALT',        '2(/eDshGK#1m!=sj(J/TLO}V;:/.GxF#~?U[L~nR$wTj|D0d.)1(VdQ&C&(I7RU^' );
define( 'SECURE_AUTH_SALT', '!q]hJAF=1-$68.`xR*Ae`lfr6i%7<:^laO!WczAk3 [G+Bj9QkHiU#sxp3A_NU2x' );
define( 'LOGGED_IN_SALT',   'l(_UtfIur26Ke0>)|&zFr,p$@9]F<Gc2fQV|f?r_rJQ-p+}nk$2;6KdaUL4]sM9[' );
define( 'NONCE_SALT',       '`562~*#.tjawPbr{>VIcY]]KR.#stXLf/hN=ZOB|7 ||3r|GSqd7]Iad}J?H6SfF' );

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
