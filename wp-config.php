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
define( 'WP_HOME', 'https://aryan.rtd.squareops.co.in' );
define( 'WP_SITEURL', 'https://aryan.rtd.squareops.co.in' );
if (strpos($_SERVER['HTTP_X_FORWARDED_PROTO'], 'https') !== false)
$_SERVER['HTTPS']='on';

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'database_name_here' );

/** Database username */
define( 'DB_USER', 'username_here' );

/** Database password */
define( 'DB_PASSWORD', 'password_here' );

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
define('AUTH_KEY',         'am.v5MuyV2Qx{ $G,x!dX5Q`-F.||.:n$S-{KlH&|UR3s+?W/,bkkV3#%D;w1i(Q');
define('SECURE_AUTH_KEY',  '%Lkjj?7gxZK57U@AekSbVjRFgxlZwOgzJ)F]#@.3fc?[VC-;l_LY+he!/Az$^VYv');
define('LOGGED_IN_KEY',    'O,4gn&d?-*X<VEz%P|2`SQXE`<>C}<6ldgtv=Y~OP)V{(nT2t@o8wdc4yk=+@gLF');
define('NONCE_KEY',        '#%aO0!)6]!K0`[wl9qpa~FC}I4Tt9ztO;X[0`uXszWO/@<1y~C5Ct9;h5k~$XFii');
define('AUTH_SALT',        'eLcrDrXz:zR?3,FandWxWWf2)JpB89Y!KR62i%YUg]3SC,U:!_69U|jShpC*#>}y');
define('SECURE_AUTH_SALT', 'Vn/G?A?f39&sP{ofT=hxRx7~!i2_tYnhu0|:B5V5=hTMpiirQ&xY==ulA%mK_i;4');
define('LOGGED_IN_SALT',   '?N=`aYw>{?E&!Mtu]eLc<SAq4<v(|oka3~V p>+w[Z*=Qu^0s`PT!`D]n0p-qZ~C');
define('NONCE_SALT',       '}%|-xO#r-6/_BG}<$5ttsH+TdX}U9yP&an{lN|!gl]I?n|,ud=v%_s~<&H!,)Ucf');

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
