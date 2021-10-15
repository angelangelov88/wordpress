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
define( 'DB_NAME', 'angelang_wp' );

/** MySQL database username */
define( 'DB_USER', 'angelang_user' );

/** MySQL database password */
define( 'DB_PASSWORD', 'Q3LQFGQLue2HwNC' );

/** MySQL hostname */
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
define( 'AUTH_KEY',         ';t&AEfp<+r@?Ir#&gJaU3OS^bd;[e)#UcPTeHBz`oH*3(2F:&ie9h=w5;[EA ]!7' );
define( 'SECURE_AUTH_KEY',  '$$fNy_85Q{O6~J^lCoW[9lcOGm5_@IWBk4v-w3+8H *]-I=P]eFFqhQWi #J]d#>' );
define( 'LOGGED_IN_KEY',    '8~d#Y=B>Ba6vrXk>!=z6c:SqWV,_1Ires$?+T*`rKy#X2Zhf#sBGb+nVD83K>[LB' );
define( 'NONCE_KEY',        'B#:Bh$DRsAsYT@Jo?uvwhD_:tDBtL Y[K]I?!8|r;i:N#4jO@j2P1~4~&U7 !K[y' );
define( 'AUTH_SALT',        'Doyr99K}eO^0?>E$&+/|CwR}#mjd[seJG~dxi,uHF ^6ngI.gR?!`QVc9^U{IX;m' );
define( 'SECURE_AUTH_SALT', 'Z+8K+!C`]CuBl*w]tn&^O~I=;9{`Er(ju;5?8V[tm!(~6hakRW@K!%@Y UVYh-#y' );
define( 'LOGGED_IN_SALT',   '-Vqy >Dqe${dIVp:L?P.H%AS]~PNl7WF`Yz=& AV;lT3@SlrFypz8,8N SZL8#-C' );
define( 'NONCE_SALT',       'pc!nmPMwVSgc5h spIeLl~@YqL`^5Pq7Os3~$)XnR;)bs},}.?T11rYeNe+^uKx8' );

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

define( 'WP_MEMORY_LIMIT', '256M' );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
