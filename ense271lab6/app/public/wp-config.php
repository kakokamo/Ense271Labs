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
define( 'AUTH_KEY',          '+p|P|F@EUQLbZWg0s~w/t.X#/S5P#Hv-}Tuu<Cg2O>KXgD+wHzD/FB;oqXn5Nvm ' );
define( 'SECURE_AUTH_KEY',   'bvV;j<C- !g$A2#U3x$wz/W@$;U.u^vuK`8y&I4Pnx_@oVSN:ZO]bV<z]SI[$L8i' );
define( 'LOGGED_IN_KEY',     'RZsQH_Klg263U)gLLdIe192MCrqN2B$$7r>VNv,#Y?S]L{P}ff@8>G;D;>e2B~@9' );
define( 'NONCE_KEY',         'p`iux)/`X/FswEiKNd}c]Zf}FJ[|B,Z,Dwtz<RA3{q:la`dBy%ql_R|%q$cEAKoV' );
define( 'AUTH_SALT',         ']Pr.lD^.C[^2Sq>Gv`wps-$f],n$j}WU%=djavVnCype %K&Y]0#cqMRbiJbmLg(' );
define( 'SECURE_AUTH_SALT',  '=RnW.z~pI$yDS#@y-&npJho-{7gHoCC.cy4v !vT^k:o!M9C]}p;U!q(p~w<DL w' );
define( 'LOGGED_IN_SALT',    'JphgJ.S!H!86`283nG4lZuXaD^g:pL.&p#mS m9{}O&2u2bG%<{mzhvz=m3Z>oe]' );
define( 'NONCE_SALT',        'fWMP@7Gp3Kr2fVRrEGVB^u-<_5`fm=rN5OT|VgCA3%_Vb0u&nca4]^%+M`JpNCEk' );
define( 'WP_CACHE_KEY_SALT', 'n22OqZoC/4v_4L:qcB!yqWE+tTa]JiDiUVYmN{S{+}`|!H?QK]m)9TJi}D>X2j0k' );


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
