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
define( 'AUTH_KEY',          'fO]t+3sLM1RCI*UzC]Zfz b`s]zx:1su&WuiHWZ$8(_>G?zOMqWkjdX9<#{`x=$:' );
define( 'SECURE_AUTH_KEY',   'qLG{];i2Vc`ae_&%w8fV<?,[Zrt~:,KV^~+grEyj^jN;}F[z$!E[MkQpenx?WoPV' );
define( 'LOGGED_IN_KEY',     'ii[Vf~Q`X9F7DvJ;Xd9fsrdt$F7)A15wwXbkW0Kc8b5R3*LMcrvJ0fL0=~Z[|g M' );
define( 'NONCE_KEY',         'cjVgG|uMk8q1T|h_LvGsb{Dk1jPP[@|AKX@RVa])I!UXAI,eDU)q1=RbMh:c1/,^' );
define( 'AUTH_SALT',         ']E}6%3.&<!q~Niq3Pv<ul+.0eP?`s9JM@TL5RG8IX-rO8I%,;bS|O.^vM/E2/aAv' );
define( 'SECURE_AUTH_SALT',  'pw$aZeH_>~)Ub.lP@-rM^;oG,%lGX@DjPfKFI~Yb=@DN[!24y%BLG}./p0R$y}nU' );
define( 'LOGGED_IN_SALT',    'F-wJu{t*Uh4cf.&L945c)U5~B>CwvnPC_x#WB)I(rHc%|t)0!HrP+*c*Je; 5&SM' );
define( 'NONCE_SALT',        's}(g+Zq1)lE%-fzV#PS3-$f[UpxQ*_q(NJaLeN_|#Ybv5&s)F+T^%Z/Kn?7k=*hk' );
define( 'WP_CACHE_KEY_SALT', '4D>En jY%_P4=d cE3t#otYH`V{ KOwg(-tpOo3X+~39{?&2$7&rH0H^3R!X*c73' );


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
define('WP_HOME', 'http://portfoliomasugod.local/');
define('WP_SITEURL', 'http://portfoliomasugod.local/');
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
