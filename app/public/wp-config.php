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
define( 'AUTH_KEY',          ']4&jbvqIs GL+TqQ^:|q8xddJ(nI8V4e/ivq)r10xyjJEOMZ^vHL;(yTvz$Z9ufe' );
define( 'SECURE_AUTH_KEY',   'qldN6 tlkIzvNpAB$6 -Xo$H<Ts{swIFLL>eYw6>6C4kbO#YxAsR+-EF:VIZEmv)' );
define( 'LOGGED_IN_KEY',     '6uq27^qN RZ_<{O6A<sAjW~}7LX@]7[.aU&cNs;;d4:zb!k6}&nEZaM?E^D2%u*f' );
define( 'NONCE_KEY',         'Y!^Rtl`+dOC5kNt<%>Vs:[vyND)h=l(sA*#LD+oUJ4%< iuJ^(<,koAKWumzPm3 ' );
define( 'AUTH_SALT',         'KIlT0*Xj*ywpf|F{H,M#-[H8NS{T /E~tq]YVG4!&GuU5?_N3rh`-~z wQp+N4nR' );
define( 'SECURE_AUTH_SALT',  '4h:3uyy{Fi4JARb=qI3Y6TQq#3W].*~pG|8Tm1c#T*$-Eh@!t=s[=tA7d*#vNLH_' );
define( 'LOGGED_IN_SALT',    '{!aAn5?92t`!w`e,XMaNj[J#{f]`<oZ)2[jm-[5PLHh$k{*{$@*o9&u_`;VZ*~eA' );
define( 'NONCE_SALT',        '$mCBwvA-g2?iS%[1/sg[eo1ou[~Gi`o5~]E9`-.or<u)C.f,o@R~w^Z`Y]ZFC7ew' );
define( 'WP_CACHE_KEY_SALT', 'xALb.u~_f^R..iN]h}8D+}H7U_HK+l2~Q%SA7LaQN#u6c~k/maO1)T<g`Pa%p9i=' );


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
