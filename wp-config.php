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
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wordpress_office_event' );

/** Database username */
define( 'DB_USER', 'officer' );

/** Database password */
define( 'DB_PASSWORD', 'password09' );

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
define( 'AUTH_KEY',         'PTa0Gh.&SL%CAsgg)Tew(0/H>C2K9eHF%N(1x= PZ/@023i&LOA=54$yn_?/Wn~x' );
define( 'SECURE_AUTH_KEY',  'K!lac;Jw%?=N (*I,x#rZ_{}ykYo, wJX#k,cJc-kXkhc&642MFb0.RtUbQ4LXWd' );
define( 'LOGGED_IN_KEY',    'uM/NY-_F}s9bUAq;mINn;$AziZ0T/.0[Dx=yhW[v9{Y0+1~_o(AX9J74=0q/,Y(C' );
define( 'NONCE_KEY',        '5@e;iLTMYhREn<#<e}3ImhA1M6O#r>srTt:t)f03^sJ2g:?B*m4I{siFNYP_^bt*' );
define( 'AUTH_SALT',        'Gao y9xv9QZ8s;Vey/f!t@}Q5tCg:wuakPtwbiwZdD EkI6jd89[91`1*[ _>axx' );
define( 'SECURE_AUTH_SALT', 'Q4Iy^J<A1j~t8-MZ9)*56Y}$o3?D wm, 5Ji%?vJ,?bCa)V`nAF*gk$4Y*W(ESZM' );
define( 'LOGGED_IN_SALT',   'L2VjkYjzk&,[G(j~PWycoN-:,v6dTW]#u|a2@p)[%Q:u%2<Gz3`%1cZ2v|kgYDTF' );
define( 'NONCE_SALT',       '2sJj!^^0dxRG==JuHk2vOgv`BC)[a&Gevk-%bS9y?e;uS}:pf$_| ae2TE*EelT2' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 *
 * At the installation time, database tables are created with the specified prefix.
 * Changing this value after WordPress is installed will make your site think
 * it has not been installed.
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/#table-prefix
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
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
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
