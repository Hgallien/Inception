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
define('AUTH_KEY',         'E=nH/$|aU/ZAI+*|s`LU/`D}Z|I!`vL|QPJ-5xk{7><?H{;=ITP#vy|+DVu&.y@j');
define('SECURE_AUTH_KEY',  'nXg^Sf-BY^u8wiPTA,?N4v-s/-zXd@Tw|3Af0)2z]:.W>ltwY7l.lJ[`=9ojTyfp');
define('LOGGED_IN_KEY',    'FqJ^{-G+P;SC3:{Z],R-cYWPR@b0oMV;6J[k6Ws-Yc+nm^eioVB!k5mx ab|i%je');
define('NONCE_KEY',        '=I;Gk##iz0lQ!@C[^G;j/G/I`F;T,4.-l(fFoV6~hZ3=|wYu7*x`6j6r_2D~&^fc');
define('AUTH_SALT',        '.rv+Rkkwj8,TqmtW*3C+)Cq2l4p(JQ_$U-yLc& :|oW6AB^fro%mOif:oWq{FKjE');
define('SECURE_AUTH_SALT', '{(zt!vX@IdTRm;oUASW:}kf$#*)r*n<oD(JpZ]9?em%t2o+|po{~pV;0lF.Xp>Zk');
define('LOGGED_IN_SALT',   '+<>}0x{hism+fYfo9S3M*tKP.zW8vkzJ1Cav*/F|a0%<`fBFo}u60CEdqmT!bo,x');
define('NONCE_SALT',       'r,e*e+&scW!!}@J2){6ceO&~Z_>[0/|j(2<|f)}oa!+m541/PD!#Vip+1jjt4l6M');

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