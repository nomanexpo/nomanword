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
define( 'DB_NAME', 'nomanword_db' );

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
define( 'AUTH_KEY',         'o|lw,}>RbB}xx6.rj=`P )?fU<bU$lel/j|4ov%<NjK9>*b[aeGND -?8`dm.6C$' );
define( 'SECURE_AUTH_KEY',  'y8DN8pHL17f@GeqCIs:N!Bn}3m#~ @=JV%QR$0DOM_g{yFg2cTU9LGmmbU![Ri9s' );
define( 'LOGGED_IN_KEY',    'jcf==DaA|7n4TO*$y>con|GYO7B~^]4tWwB4(j+5XV|;mzq++T)u/d:&_/Vs%%7K' );
define( 'NONCE_KEY',        '4$wLCy%]HC/4$~rUvRB:u]d!F[ea>lwc:InF?Xj6Q^0T*b_8@^$~e2Xw|@Rd7r/E' );
define( 'AUTH_SALT',        '}F]I+}7nSaf+:V/;9DNzK-;JzdJ$gGxM?2/2MP_#aN?sB;SYn:g329s7G7VzRl7g' );
define( 'SECURE_AUTH_SALT', '{$U.1Pq^YO7Gw+[~yc#/=8Q7f:Pq!-Hw+$oA/CL{8GXI{Rnz1Z*_`Gh/KM?kAp6F' );
define( 'LOGGED_IN_SALT',   'csNY7b^a]<pDWl6t@;vR)^jN#C`;DkM->?k10yU@J^~CFkq9gY9>jssf;0mNYqC7' );
define( 'NONCE_SALT',       'MgZ~f3K$A{)d*]0xpyDTI[dN|H@7.IZoNe;_GI-!]e^R[yh6^c?v*7Ko&uo ?eVm' );

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
