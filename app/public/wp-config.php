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
define( 'AUTH_KEY',          '><vxD~^[M%{so=Q,fa5Du3bWfup4E;V^)*zbk,y9% I3i{i@DR&vTt6k/Z5Z5:}(' );
define( 'SECURE_AUTH_KEY',   ']o.%&`!+m~wIEtU00T/^HJGY|d02Fs|dvQ<&oibJ@.Mb3@.5&d:FO;|m0xW=:>MT' );
define( 'LOGGED_IN_KEY',     'z^b8Uuz(e/Q4W*IV50- :o- dj,mDZg:=Zp` []TUloD:K{-O1L[EL#@#he[@3fe' );
define( 'NONCE_KEY',         '^T^`C>^Rnz-=Dw$6J2:AG^AZcUtRBIS],A6`O@cb8vSIT;eEYaY|o$4%lGzflQEw' );
define( 'AUTH_SALT',         '<$gJ?_FnoS7y~+!X|lZqiu{J2W6]^?sgcZBf:y| n[W6%6+g1P96?Of2730_Sp+q' );
define( 'SECURE_AUTH_SALT',  ';/SDsP9H#y:K2kv7;N:TCyq0Uzrh[VO&HiIgyJ4e<p0pE~A2pq9%VlFQv!B7zv^5' );
define( 'LOGGED_IN_SALT',    '@p9)7|Y|#s{7&D@C=_:!Ev2~<@e+^a{$I~RmI9q[11-7=zRi|[N{[_n>)+:b]JL(' );
define( 'NONCE_SALT',        'L{dJT&rL8[S@/z1M<d>Bp8Z]._(Lr*RaZZ8+}zH@[0_*Y(-:-fArIu$jxj di#%{' );
define( 'WP_CACHE_KEY_SALT', 'qFJnJeH;&xvCx?ZR13+8S}T3*@&KWq|Px+C0 OBx:gVU6gAq&76:w<4*g&?x=(VF' );


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
