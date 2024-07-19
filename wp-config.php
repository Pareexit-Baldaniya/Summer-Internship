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
define( 'AUTH_KEY',         'ZI*WjDRalpa-N}~aYridlY%VH?d]#fZogpPOFn36Ay]zHt{XoLT^8F*`Uc;68_<J' );
define( 'SECURE_AUTH_KEY',  'k37xA;0uZgPK  O#wyTS.2+Rs E{Rn~>0cHE]b^RI=Xz8=r /XM#/ 6FgwUN>0j(' );
define( 'LOGGED_IN_KEY',    'YHi+K1aIzs|quH2+1`/C-v@OU)>QyB12rkRM{.Hy0 `hwifp1aen;vc$i3k+kfw%' );
define( 'NONCE_KEY',        '=rXXvs!#TNRQ#}^q!uqyk6AJ1bJdE:SVB!=2^yV|/p?82a&&Y :zk{ZI_)U}S[Ge' );
define( 'AUTH_SALT',        ':(^s<%XQq66>b&BNbh8zJWQ7+1/mhr*wgcU2Yo}L8U9&[}Z5Mgvl8<4d5Y;[yBZD' );
define( 'SECURE_AUTH_SALT', '2;WgyL1l5ys1FZ[.B|EJK2`Fz>nf6n7X4c&{|U:f]<&-pdLWtSiyP3F2mNr-S@4C' );
define( 'LOGGED_IN_SALT',   'gyQm0k-dcMHe@)h%gwy5r2VdOTeX)2P.& &)#jKzxCW[~d+|9V] o`SiW.<__>Br' );
define( 'NONCE_SALT',       ')D #topLf*2u4[CC@jx<e0Csi-d>?e>KR(!rVQvO~(9#ILXW!MUA,A088Pq+XT*@' );

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
