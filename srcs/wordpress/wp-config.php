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
 * * MySQL settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */

define( 'DB_NAME', getenv('MYSQL_DATABASE'));
#define( 'DB_NAME', 'MYSQL_DATABASE' );

/** MySQL database username */
define( 'DB_USER', getenv('MYSQL_USER'));

/** MySQL database password */
define( 'DB_PASSWORD', getenv('MYSQL_PASSWORD'));

/** MySQL hostname */
define( 'DB_HOST', 'mydb' );

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
define('AUTH_KEY',         '*.90mz4C z=YDs>lfpN%o)jYZl-tyo&x$kCm_N%+Vsqv,JsOOfs&CN$-R!/H~##5');
define('SECURE_AUTH_KEY',  '!-wG7iMUbwe^|sUa.pkWhUR_{]OJ 9y)-#Z_xcPgN~j<1my^|cQy#Qqd!JGAgaRg');
define('LOGGED_IN_KEY',    'ZF5(ArQH,+u!Y+g5uaPoIS4+l-{xiLnA+n&;j.%Hh?#&w6hDd5&5[|v]qnPf0lS/');
define('NONCE_KEY',        'Q!B_6=S_d>Pn!b?{(`z~Q:|>x|lBA+F=l+ K4|T<884<6/:c>JA<mtV?]H}N6$4|');
define('AUTH_SALT',        'MCfD^,<{epB#G0I>,g=mIvn`.E0H6L6{{6`N(](+ZpeCpL1<<^$rCLg4U5kV2,D$');
define('SECURE_AUTH_SALT', 'rATC/rI2:$-?Q.|lx+bz38r.F]EImF)f0WIC+|pm|O=;r?P_O9 G</Jv9@ps=8yj');
define('LOGGED_IN_SALT',   '-J#rMBud|hroTmUdh:M;M2^AqT6sw2~pR(xnL?|k+8a!bhuU.D7+,pX~i><S#|xZ');
define('NONCE_SALT',       '-LE8U+)e]DXCThp56 li&(/7Guo0gq#/f)K^%_&).Cuak-1V4#lx15g6*aXuQ%8`');

/* The WordPress database table prefix. */
$table_prefix = 'wp_';


/*The WP_DEBUG option controls the display of some errors and warnings.*/
define( 'WP_DEBUG', true );

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
        define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
