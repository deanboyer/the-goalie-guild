<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, and ABSPATH. You can find more information by visiting
 * {@link https://codex.wordpress.org/Editing_wp-config.php Editing wp-config.php}
 * Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'tgg');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         '{~JtY!nLw/*+SuQY#w4!2(%-3Tp$_V!wW6.Q/L:<Jhh0%~(71ru<!?7uCvR53k7!');
define('SECURE_AUTH_KEY',  'sGtO0|NU5/dR&Lg~@us+(%OX>-)fxOTQ/-8U:o,G, yf23*B^43KBY;3oy)wL-Rn');
define('LOGGED_IN_KEY',    'L;`Nbg[gf--0GKu*QW-5*EB%a6 30a({qds-2wDqRp4Qtc{LI6y7i~IFt<#J=E3L');
define('NONCE_KEY',        '(JP:Gno05o]MnAdQ &8_~#=ZNpcG=0jmX;P|px;C!n+I7b%Y8fB!vJ$boXt{jTD_');
define('AUTH_SALT',        'cg|P81Q~6ph4K,H|9sssC1}BT@GC#3po-/XM>qlbEtw80]>5>C;?;iX^_FY-P9e|');
define('SECURE_AUTH_SALT', '*(0dEY${}*u-f^oPnR=G$r?(`.5Y;2%Vpi37OSA7e..{J-Gtt<Mf-Pf?[1&ZH(+`');
define('LOGGED_IN_SALT',   'QuKEo8B/+8|2I_l`9K@R74i_gsC:sb::t[_AEk/*3y?7XIdl_tqVM$Y_-5%/|-vx');
define('NONCE_SALT',       'T 8I*:vC+}Y-Ihv_ A|p>wtFQMSElEeZ=P?ynFr1A+ivak;J-i~Y=xHT@M8pYS;:');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
