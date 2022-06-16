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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'testLub' );

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
define( 'AUTH_KEY',         '&5=t-}`c>4fO8vn9+Jqn[)FAt*|Z|8 5->U.Mdo6(zIH8T08^B BG@jNEu?Yq6o7' );
define( 'SECURE_AUTH_KEY',  'NZ8K89bmxUnPg6nCRQ,NIBEU}Fni4BDN`#Gibv3|9?UgbzTm%6i%j71d^V#g3 QQ' );
define( 'LOGGED_IN_KEY',    '5d]5;0u hM:9i*Lw= t9MHyY._Aw5OP~uYYet6u4fXwvu?$v6aNwYr:pZTxao~%k' );
define( 'NONCE_KEY',        '&-%GuBft,3?wR8Gcm!Sb#`0ahYwT->iyI^(27RmF%:+iIw6Z-k6eRY^71~WEWyt$' );
define( 'AUTH_SALT',        '|IyeA*ELOWds{d6<eWfO1D9{g;,FCU c.)@_D-&{F UUPZay5n@!21RGot7Wpr!`' );
define( 'SECURE_AUTH_SALT', '35qg]V.8$.g^kD4s]g<kf,-b+s]j2pY`(]+=K<FgU1=zD`:^d;L}HaN%;)JxYr7m' );
define( 'LOGGED_IN_SALT',   'eVz1aumQy5Wnnwz8l&RodT=h}y+eK&pwgk=uq[Rmt;ZqxbDhu-]BJW~(Vo&c}l{I' );
define( 'NONCE_SALT',       '|+7wB}nY(0H.#0Xuxiw:IY+q8{}A~vEBm*b63BrQvE0^D0%gHfzc`oxo<kWJs~fG' );

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
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
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
