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
define( 'DB_NAME', 'test' );

/** Database username */
define( 'DB_USER', 'test' );

/** Database password */
define( 'DB_PASSWORD', '123456' );

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
define( 'AUTH_KEY',         'S^!qcet;pFyZwwx$~q[dAV_%MD#r-y7?8Uqx_rv%=C&F<VIrY0Zg%oF<WQJtc~i]' );
define( 'SECURE_AUTH_KEY',  '~9U%8TF?jkmPo`IG]MR1yP]M}rG>hD=(BT2j?zaYQ5X#~HqLikq%K};OTY%wS$zS' );
define( 'LOGGED_IN_KEY',    ')h;^NyO.&8edz/KyC7^=O-p&-5=Kn/P@(fP$*m!)>Y4*E~rJ7rzl]6_U3}o~t&XT' );
define( 'NONCE_KEY',        '&go8~Hxx|mBQHW3RDaYvLP}F~v:(9f1 <xA`z||*5O2GKk614#t6%A{5il-p)zt$' );
define( 'AUTH_SALT',        'gpJ6H~&Tuf-+eXxzzA yd#.gFWh)?gj&:xs+[+bgO`J@O]+UPcu?%ySSM&b.KnWq' );
define( 'SECURE_AUTH_SALT', '7w+u1p{Fei$s@1vBHs6Y<AgB0e,-qJgzIsveZ<[;t`d~tB6b1d|F_+2Wr<8WuW0>' );
define( 'LOGGED_IN_SALT',   'TwYjm^Q.O&nl|(|v{<vvEaD&Hn<BVUeH|EYU,$R!5lRmN^sV.Z*b=HvQ!u{$eP4h' );
define( 'NONCE_SALT',       '}VwE(+CD43ZhxUO+8U?V65V_-J5=3N$$i*5ov+jcej-/#L|(RB$ibmxLM1P[z;FU' );

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
