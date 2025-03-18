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
define( 'AUTH_KEY',          'm_uf]/Rp<(3!O+8enO2.iTWQ)KkkJLpihj[+(;:J!p({=s9hX[.D,b9gDxMl=Ey`' );
define( 'SECURE_AUTH_KEY',   'rP|;7y!N4OSf*GJ_;eud4T`rg]tA4V6N/onl~L{A,9.EBg^ho+x.0S3`FQ!n23hT' );
define( 'LOGGED_IN_KEY',     '7nNU2:Ox]vzQo0jsH*B*?zRK t]><*V,FNtu<ELM@/.?6q_#wNdKtL#y*[H2INmM' );
define( 'NONCE_KEY',         '8<87~,!h0{<c-qm0.gi~L2ErNV;mT{D0?Hp7{vI82`#rIW-zyp~Q4_StG1*BZ4}_' );
define( 'AUTH_SALT',         ' +^Ha9VW@x qG#PK nsNgYwKi(I{qOt }5A1<52IHU0t)k8.Xn*26Dq.6L3R__!n' );
define( 'SECURE_AUTH_SALT',  'xGq+aUx~D=L|Z8gY>dbonb?U63?0aOMc}{Q%x(],QI*:OjG%e-rcFd]_>3X^hjxd' );
define( 'LOGGED_IN_SALT',    'sAq= m[E!701$~k%f&<Mk]=6gANs[jtn&KQ0E`D(|,C7n5K^1k=f*uz<{g:BljA<' );
define( 'NONCE_SALT',        'Uob%!tc< L GwnkM0k+<dCu`bc=@Act5+wuRI.;g:1L?$g.s9[O$0kh<z9Z1!sod' );
define( 'WP_CACHE_KEY_SALT', 'X9:#3S/?neKi4SW8kQ-ts4ra250MtI%p@*{JErsVb6v^)DbFER Ymb$$@hpT3Ky>' );


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
