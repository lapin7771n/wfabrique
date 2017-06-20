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
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'wptest');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

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
define('AUTH_KEY',         'ABQb$UhGFx~!9yD{S+wth^S7`_JI8m[hB@.B^e96FN*%Ry4wp7hht3SDvy^10{on');
define('SECURE_AUTH_KEY',  '}ZLg i-E6qj]J?Et.=sG,H+Hsp`cx&ZdwQEB~Qd5:SW$M:i]@a.1wdL&`qAni`5)');
define('LOGGED_IN_KEY',    '?6v76]*8^-7I@T6#HI4=!u;Tcfg;CkSVG<iT@byk?3m`b&|9=XyJ+9<[zB|@,e5r');
define('NONCE_KEY',        'ze)bHT+m6mc4](nPdicZ0PP7%nZ%|>LJ|f7Zs2-7:LG5!^!(Q;nD=oV|$O^]gt#F');
define('AUTH_SALT',        ')AxFD-v>}PbHPk^.r`&<]$b9A88%EKi`;d1pzs-&c(xR&:eGv+5)<5LhsX56=SNb');
define('SECURE_AUTH_SALT', ')e C?N9b]l?cTzy4a2KJb{s%$_/nG[<7iF@Kglt,@nn`s|4B(qbAC>.tO(F0NSkJ');
define('LOGGED_IN_SALT',   'nFUWf-Wb ;BqU?bq1Ec&kW`.iZ#_D^BZ>l8}(tPu~vMDfO=>^c5P?[_=!c=Z?{cd');
define('NONCE_SALT',       'E>6lNF*P=z4x!~E}]I0D}6 <kYt:8#1I9>G@@v0`b @a@UaX}qW8I>1V-{zkL%86');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
