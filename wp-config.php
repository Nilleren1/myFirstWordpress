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
define( 'AUTH_KEY',         '*]`@UW:bgP:,N1wK#RfiEvNdd6ewi04~Sf(X&^GpzK%?>]prry8wJQM;A Pm@v?)' );
define( 'SECURE_AUTH_KEY',  'E8Gr?nBRO9f1>C~j*f>`umRE@$B&Wtw-:}sKna&7r?H=#1T@pBGletuVHGWGM[[)' );
define( 'LOGGED_IN_KEY',    'zDhB>/5 ?_VWTszEz~w3|{}6$4@yz&Jz_f`x0>W c@]x8tRAMtWLGH4X*@~7f73I' );
define( 'NONCE_KEY',        'B-yEXhX->rWA0LqcAdhZh,`d]oa3}3]WIoIwPX[qRABWaUarmOd>n/qK*C_)+45$' );
define( 'AUTH_SALT',        'qm}]b)==8q&5g.Cfi>Rmh $S*&UE>|5RV%2_ozz}%hn9>zMp_dS;#N?wm!z]q<:Z' );
define( 'SECURE_AUTH_SALT', '#s^jNl1yBomO3{!ApSy0p^S77P3cp_WS_|!hI7&+1$lhU<dC)*3m4sejNGTN;eCo' );
define( 'LOGGED_IN_SALT',   '8aF@QXQ@%dN+l?_;P~i$Z]Rca7~$.fZvMO3#vh|8dV?HbeT:cfz:bx~{K$3??A-;' );
define( 'NONCE_SALT',       '9n.]a5.)VB%EG8I2i&Iftbs?%*Pd9Jy:ADFk8gA:xBOC5}JN{v<hkrPqD@8aasZ}' );

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
