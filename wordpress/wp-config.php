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
<<<<<<< HEAD
define('DB_NAME', 'pets');
=======
define('DB_NAME', 'realtors');
>>>>>>> e9d95b901f023c3e8128d99f1861956c3fa67888

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
<<<<<<< HEAD
define('DB_CHARSET', 'utf8mb4');
=======
define('DB_CHARSET', 'utf8');
>>>>>>> e9d95b901f023c3e8128d99f1861956c3fa67888

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
<<<<<<< HEAD
define('AUTH_KEY',         'nDuZ)cutj-JJm<Gl6lDzc-[A]$&I`}LfZ{:!Ds92]^Z);czmF@-tztjVI5`oVP:;');
define('SECURE_AUTH_KEY',  '|X(0g~+/Y$=/IMYFQK(b&tPJ58tXl<;E=;{$#;)3/.t?O1Sm@3*ykd?N`h.f~!&F');
define('LOGGED_IN_KEY',    'n7bY]U=XlKmPLuv:WX1pN.t~?INBR%V!cYJtWKd`3|/CVkHJlI>gKe%dY[4.}+#4');
define('NONCE_KEY',        'xjx=lLiOrW;S<W3kN>)aQxyFiV^030jGB}qRr%E.rCi 8jmjR[,t/p3:;6OCYa{M');
define('AUTH_SALT',        'ke<d7n~+.I.Oq;C+~Shg=nvkJwiZu+J3zfux,5mgpPA} yCn3~[r0r.!Y]EC5Q$r');
define('SECURE_AUTH_SALT', 'NJA!8W:8%,JA&=w)m.QB=>g8rbdl$aVV[l</ZE1TAu8Lkrl^@za&[?aQ_r>#kH~F');
define('LOGGED_IN_SALT',   'O,@I*UDz4+AlUZ-krc^;.~y+nUxBK/qU|0n|sf%VL1=p`^e|}FOH[vONr)@%h@jA');
define('NONCE_SALT',       'Z@9.Rol;kDkssx77KC.ZBD|@9aW3L*nNAnWuQArA.$h~iOlOBB&}>F;QU_!Pt[IJ');
=======
define('AUTH_KEY',         'put your unique phrase here');
define('SECURE_AUTH_KEY',  'put your unique phrase here');
define('LOGGED_IN_KEY',    'put your unique phrase here');
define('NONCE_KEY',        'put your unique phrase here');
define('AUTH_SALT',        'put your unique phrase here');
define('SECURE_AUTH_SALT', 'put your unique phrase here');
define('LOGGED_IN_SALT',   'put your unique phrase here');
define('NONCE_SALT',       'put your unique phrase here');
>>>>>>> e9d95b901f023c3e8128d99f1861956c3fa67888

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
