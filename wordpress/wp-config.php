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
define( 'DB_NAME', 'wpd' );

/** MySQL database username */
define( 'DB_USER', 'admin' );

/** MySQL database password */
define( 'DB_PASSWORD', '94adf12562ddf705fac955408231511f6896509f13236e78' );

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
define( 'AUTH_KEY',         '._zrb)?&U}`NX$|d?[7M,*Ap04C1qZ%c+vrDhYsKD^2%{}#Q<y%?xZPQ;e4&E?0d' );
define( 'SECURE_AUTH_KEY',  '{(jgI?q:gg-u#<WBF8@rf57m+fl :hCs)sXci h=zQ*0-@ud$*AVk3/U!hNHd^Av' );
define( 'LOGGED_IN_KEY',    'K,Z^4-3!QE4`;q[UeCcP6TW!Tnlk1z5! RUfO8BUkiG^J }uK>&HXB7h)(MJ`eiP' );
define( 'NONCE_KEY',        '$.hwR:m`FPO:5z]?`[S3-ER]?I#Cl?x8?&%zRAd{{6VIu)T0mgBg3`<.wyuUJ8Gx' );
define( 'AUTH_SALT',        'xKSx4Ji48q(l1{I%-lX/1]CN%AusfLLJ<HU)6lN=ZM*3*(Ajjr=E*j4[7s84)<dH' );
define( 'SECURE_AUTH_SALT', '[LipD ydma>J>Y87TbwCs_bu!zmxP9eiVpX!#VN,,sVAh%xDrbo>tA]C/7[(JK0h' );
define( 'LOGGED_IN_SALT',   '> s<M_^P_K$|82l_{5Bx>{]Tp&SouD:%}r,}D//m~f0~ S]:eU6+`Pkz!Zd1_>q#' );
define( 'NONCE_SALT',       'wR`0RIfrx;p8k:aRr>X%.Ym(QPaOx/s&`M})mKr:<S9MP;7b>_}OHJHVpNL>+a=;' );

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
