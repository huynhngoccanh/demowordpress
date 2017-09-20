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
define('DB_NAME', 'wordpress');

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

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'QR*=TJz%NESjL%%nyMp$ Cz0s.%rJ)^Fi+//,xR;4y3n?v8!xgo?`_j  * 2=vjg');
define('SECURE_AUTH_KEY',  'kocB{lV?.X0b#$==1<[QI-gq:$`nYGvNM;hk7n1ObY_e77~USQXKTDsbjNKK-y>h');
define('LOGGED_IN_KEY',    '>Kf-N?aqe1<JL)?c`,4LOzvN`f<8g>sA_-<v RJq4Lx8nQ8D58GME%W3#<MQ$6(7');
define('NONCE_KEY',        'bk6Ma7k}1k!dRN~*`I&!^YrLpC^i]<=pXuxQJi^;(FZUndaV$AvCF&~y=5y*%g-(');
define('AUTH_SALT',        'mgSDuUltc)]o/<=KxZZ!glhV0)]+A0JD1)Gf5H?R)@uU}~BIfev[s@ew7r6.>c%5');
define('SECURE_AUTH_SALT', 'Lz,@Elw2HCO*kC^[(Y)(T`=W}9Baq<un+0-h-6aja1DRBZ%_^,uv|g{)t4&[vpo8');
define('LOGGED_IN_SALT',   'N|yZ/U-.A2Eu#LT`JKXvvAEUS`3QU>X?Ty4kn+M55n-Ks:Y!Dd+u7ZuH@7!-Hh](');
define('NONCE_SALT',       '/9[MS`G#Np`IrP5El#Jm]9niKvd$sGLlbw4w%jGc1ROSV Z#$q F8a;{Fa~dLd4+');

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
define('WP_DEBUG', true);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
