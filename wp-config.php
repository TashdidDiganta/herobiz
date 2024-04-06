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
define( 'DB_NAME', 'herobiz' );

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
define( 'AUTH_KEY',         'm2ckxiOj}>xu&u0]%,(eW8G0!i~?mUE9UDttY8|6>-<8wfC-{m+rvpddi+sLg]EP' );
define( 'SECURE_AUTH_KEY',  'ub~7]0p-]JuYS%P4fzs}h3bM]1 E[)zm:ig+Z91-7~9i0q)l*x>. n`>o%)sSvh5' );
define( 'LOGGED_IN_KEY',    'Qe`m+kycD|1jplLi2{> L+ 6E|st9PXCL[YeZI4Px_rdOOX   2JI0u!0=Rx`Y{(' );
define( 'NONCE_KEY',        'xXIINc=>7i?NJ,~O)}y4P89GeUr9W<(()79f?&.<<i^`xLz$1t[ct[0MM}}r {8I' );
define( 'AUTH_SALT',        'C@i, Le8JltyJ>~&(0^Vo+Y8%v%a4Z-ljg):B_2X=Z~GZI,O*v38O#0 &<cTyw3$' );
define( 'SECURE_AUTH_SALT', '7$0UaF[YUfK#?/<aEvK:^lv.<etexnJXC%2NLqVU]>T[ml7s3cbOpRU,eO%hVf$;' );
define( 'LOGGED_IN_SALT',   '.wtb#DCvmG!V6)cs}VzX{5PAwPK?:d |dHOTXvRxHCyetSfEBY_qJ~1B<ycZxS(V' );
define( 'NONCE_SALT',       'u^O7!Yj7rYlnU+vT}.(~?m9/[s+C$kJP0t)^c[,pUGK:/Z!V@L7sA+46Sa([I!L@' );

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
define( 'WP_DEBUG', true );
define( 'FS_METHOD', 'direct' );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
