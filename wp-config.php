<?php

/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the
 * installation. You don't have to use the web site, you can
 * copy this file to "wp-config.php" and fill in the values.
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
define('DB_NAME', 'dogtrainer');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

/* * #@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY', '!!.:IqD| a`hY7P2gNQzgQ8QcitmSvGx_]}7kQL:=J4j>GR){Ru5ZS|e+@`|Sna8');
define('SECURE_AUTH_KEY', 'v<1|IO1gjNkjP61=-<-~)!%A!FMAj004-?X@O}{wnX9nUna.14gAfyyQUOkKJ{R+');
define('LOGGED_IN_KEY', 'hQ*Fpyw*p&!l)d6$VKkv)|C@9t]<;{$r.@5+,lQ6]1%DMBbcu0,_-Q&vF,d!7i@h');
define('NONCE_KEY', 'CWTV`D]B/;_roaW7Ua_,Nt#d,f+;:b<{jymy-(7~2|}G0X<I[SP~:1R,FI{01cRc');
define('AUTH_SALT', 'y:OpNuVd7KEbXZ|.t_Wg}3?C_{ ?;k/o^nho6U;!+AW km1bGTAU7/WJWzih3]Ad');
define('SECURE_AUTH_SALT', ': 2c=.ysT~$KV1Q@#CTeh*aLeCuXt)Vc?pX8?G$DiC<u,yR$!*2)}2Zvt<0p7U^]');
define('LOGGED_IN_SALT', '&Q:/M;~:2sP7nZr]k%&)Z$uKg3Z1P4[HM rhoxBw(otU-`G3Hr!DxkWQt>m0Tn*{');
define('NONCE_SALT', 'ya#2/5k scZyT:yPA>]<<F?zpj0%]3(WXi:Sgvs+-@# x*$`u53L>@=+TDrAKM},');

/* * #@- */

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'dt_';

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
//define( 'WP_DEBUG', false );
ini_set('display_errors', 'Off');
ini_set('error_reporting', E_ALL);
define('WP_DEBUG', false);
define('WP_DEBUG_DISPLAY', false);

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if (!defined('ABSPATH')) {
    define('ABSPATH', __DIR__ . '/');
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
