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
define( 'AUTH_KEY',         'Nk0%F$KF;f:Hb?1Ffvz^;<TAf4J3-)kUCKqRklf*&f7}*nIl8s]Rja7bh7B=jkoG' );
define( 'SECURE_AUTH_KEY',  'Zq@m(qn?xoK_%O`jhV(x+O0`4(+vOM.Ek3[KM$/=PbY6.n8tVj`ONzt318(Md^a%' );
define( 'LOGGED_IN_KEY',    'Z{N}dVyU8{}YI=bgs_QiM.h,]2YcAN=]jq]{&}kR18om,Tp+0s:0Ih+,ohS^hgm(' );
define( 'NONCE_KEY',        'HL<[MHWHjJsnxoo9o4[KW@ujK.Lxw0w+XaxK(HdvqZPe66b0z|VhU6S#C]_;Xeed' );
define( 'AUTH_SALT',        'H?|m4+MPaJ65,69u*LGo=X_alse)p8>Ri$~w-H#]1V(!l5-~]^3rqXJg0|e8|1Z@' );
define( 'SECURE_AUTH_SALT', 'rD7Vxh^P-!@7tYsG}*1?+6Xs#eh. $PS(F]A(}*qQA`VnK$2p9_v&iv(RS(eG.kt' );
define( 'LOGGED_IN_SALT',   'K9 s|;S[)B@[p`~T*(b+u{bqjawqS3/#WbC1+hg%SW}5#TfVHo{kYc@=>7Ii?yDe' );
define( 'NONCE_SALT',       'Xqz`c%9OAt1D(suz+w-,<&&5J{w])XS(lQis6D6/-M6.<7ADN*V|KWeR-S*sO3[4' );

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
