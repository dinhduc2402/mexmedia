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
define( 'DB_NAME', 'db_mexmedia' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

/** Database hostname */
define( 'DB_HOST', 'localhost:3307' );

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
define('AUTH_KEY',         'mLB]40WG29jw;/^y:}+./l+5=xY[HgxOo;8.m}7,U~4F@p Vz*X:ks3qI-Uq8M9C');
define('SECURE_AUTH_KEY',  '^bAdBA# -m}UlzcnALU|4r}u&Ua:Tj:-#hj;?}3/xG]{&om#q4Es#&1A<dsTXs}|');
define('LOGGED_IN_KEY',    'KU0R|lVTR-,;&$KAd ZHbid-6sAAjuXaN},kGx!G4u+oV+E@8]$a;dL6y9=6HQv|');
define('NONCE_KEY',        '2Omw>cp3N=*]q=l_b+|}qMPFCa80oiU{n+o7|m+%*IZVlwHTH|>m.dG,cb|->Y)l');
define('AUTH_SALT',        '}mW{ Y)[9SZIX<6z{1z+WC]-cH3-,!JhyuQT~ Bm`F@!G9K~>Ik,;Y@j w><KExR');
define('SECURE_AUTH_SALT', '+I-s^8M}%Ng{E&bx+oZ^_WUN-~em`&i6*_,:5h<zztL;S8vs7y a;[#M>Gom,HB5');
define('LOGGED_IN_SALT',   'mp7tVQVf0zNqHv(wLUzx5Y&>}hCan?M@7-[SN!W0dthpPfQlaS 7@#68]D{QrRoy');
define('NONCE_SALT',       'wb_nI<O/G6cKYs<%vA)qb@PRKwAI=?^6B;]8|@ZbyL|$<W=:&i{U|kqn*B`IgzhB');

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
