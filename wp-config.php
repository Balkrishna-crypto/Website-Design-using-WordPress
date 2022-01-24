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
define( 'DB_NAME', 'codesmasher' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
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
define( 'AUTH_KEY',         '2wW}1?d@aPtd]d3pD,@O=XO|0%<yKeo0]*Tr4bkBu5Pi!0!YE |+ONDwxnQQ6bC&' );
define( 'SECURE_AUTH_KEY',  'Gbs$t7G/_G`vnl}@o?4]-R@)IM0LRK59?=DkKQt!ESE8m<S`bRDcL2Mu ,#0dMW[' );
define( 'LOGGED_IN_KEY',    '_)x3qSa=GK-Pt3V^~.HnZ2dC{i/X~6}bL$/++?-CIzD^6+CRkQWA29ov^pg4*%k6' );
define( 'NONCE_KEY',        '#my#nv0Mzr#0-]+]TwjpV Q{,m-lYP}+wdx$%=ea3][mP3PrO Xk~_~TLwH3`Y?$' );
define( 'AUTH_SALT',        'cBU,^JW4a!)&JLD*t7D^_trg(Fy@We!qeY:uHY[<[M$,az89XT>zroJzJh4;Tz+n' );
define( 'SECURE_AUTH_SALT', 'UMV:ixw?$DY3k(%*/j|BC:W-bh$qI9j#>!<I0~m7_3Ycr]yF][z5&on>1selnv&C' );
define( 'LOGGED_IN_SALT',   'HE_R&bEQx1mkaWMPv{l`0xUC2x{gt&rKJDO/y]S.xEcM)? m*Ys(;]4u^a%.!<(x' );
define( 'NONCE_SALT',       '5!gX*-jK YbUDj:mmfvIOu7$_y];m{Egnf0_u9K#_IV~kMyVAScM:~zx}xCwnNC^' );

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
