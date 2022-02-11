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
define( 'DB_NAME', 'store_db' );

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
define( 'AUTH_KEY',         '&kKscliU63Odpp6n7H%pKUml/x-V]%wF{V4zDyc@&*><Ki{-C|Q^;s_JF Y.MvC=' );
define( 'SECURE_AUTH_KEY',  ':3L$9,QxDZim@LW86VJnRwBsbZzm:w,Z==u)#yuC[$r&[x{Y~<.x>$BF+bB].d4V' );
define( 'LOGGED_IN_KEY',    'CgaH_Km2 v!B`)<Oz9]ay,D39yR?-|$Y)^kJ=yxsSnwn:U2E0h+f8b633<TXSlv2' );
define( 'NONCE_KEY',        'jM28|Th%:,V+Mmtv`Lnz(a5>zbTr67vBr_x8%/6!Do:$mGk:0K#,IPsUk)9n=k&;' );
define( 'AUTH_SALT',        '@@hb iidB%cgf%$mBu/I&3}v)^xWB(%q<M%8^`8q:^hdBxb,GKAp7v^PdZk;Uz8!' );
define( 'SECURE_AUTH_SALT', 'ns0k0Y}}~SfD^*Gqz{9/x[Hj9F/CGphJFB[&fUlaR09N/4b1V}V&NEC~N_S%F[LW' );
define( 'LOGGED_IN_SALT',   'h+BWfff%%?W(Sef_:ChZo)m{,ZJx:hdYGngrq%$U0X-)99~rqwM&D(hT)mV%P-&R' );
define( 'NONCE_SALT',       'qY>PhDoR:b2_JK:!#<h6qB19;!QVaIkP8W oQ<y;UF7ji9Z&#glplUP=g^o/R?uM' );

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
