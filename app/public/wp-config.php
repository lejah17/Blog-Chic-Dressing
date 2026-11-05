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
define('WP_CACHE', true);
define( 'WPCACHEHOME', '/Users/ljacq/Local Sites/chic-dressing/app/public/wp-content/plugins/wp-super-cache/' );
define( 'DB_NAME', 'local' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

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
define( 'AUTH_KEY',          'FM}09y?bP)MSAyN&paR*:j=x63_H}L-:f/!G2Y2{0n99^@] <+GAaZ83!AZaXp~:' );
define( 'SECURE_AUTH_KEY',   'K)4`/`408[L?5Z_2/A:jnjg67<y23 mBh`9-x5*@L8/<oYf*aAr{#e-7^O|ONWx|' );
define( 'LOGGED_IN_KEY',     '{M52XK7,(D4I8G2_>VClqn@hz2M hLTO+i<xHS?S;kXh?c^%R<d3<,= ;>2fR9FT' );
define( 'NONCE_KEY',         ']eT:/Q7^UDf@{`9#LnnOeBIM@dWo=o@|54OF$vBz57-=1[69ynx{l]F.697g$y?!' );
define( 'AUTH_SALT',         '*>)+crgl8 SuP+Ti}u8+7&E|8?y:ALOI=x~<F&_ Tc M!eXfw&!pB4GW/BHpb_B[' );
define( 'SECURE_AUTH_SALT',  'jr_nKz#BgDDKI5zhdh<$c:LPHgaa0`~u%z8MPh.Br^oL}:JV.0ne]l}LUClU2ssx' );
define( 'LOGGED_IN_SALT',    '|$iU9m5<|S=8haX;WkA;fX{9ja=f-,BgHS.R<TN@2H]Fjx5o+b98y=FdJLZTYg O' );
define( 'NONCE_SALT',        '1!f:+HOc_a@qou+3KF;^_2Ui8;yW4tG65=#4D<8Kuz7#posM`_l>_CE]4VwM)}pG' );
define( 'WP_CACHE_KEY_SALT', '@M;Vq[nviCNEVCezwq[c=ix&`D:] H3e9#2@00wnBZ0~HW3gLKo,*?0X6d)5mRDN' );


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

define( 'WP_ENVIRONMENT_TYPE', 'local' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
