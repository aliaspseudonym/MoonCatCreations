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
define('DB_NAME', 'mooncatc_wp');

/** MySQL database username */
define('DB_USER', 'mooncatc_root');

/** MySQL database password */
define('DB_PASSWORD', 'Gadz00ks');

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
define('AUTH_KEY',         'etF1`3.]/ kJ:$>B>8rF/yV@/5+r[ppFYaxQv+.j,t3r6r0IWvZ>+u(&, DeYYr0');
define('SECURE_AUTH_KEY',  '.xD*+w13<8#*Q(kahi4tXViq0OEstG*@`9z?kOx]cv;w<]lzQM|5)p]#D-AOa#Ym');
define('LOGGED_IN_KEY',    '<)::xyYXzxmi+[;u5lJQ1h6]CS-}[7dx[#NoKQY%iVdN|5M&|j$EW+r=Da}|*]43');
define('NONCE_KEY',        '>9Bvb*.xU|jCv=yCIu+lNC80+0P!*|?*F<<!Lx[T;:Ld5n<@>@arBj>|nG 6&Y<2');
define('AUTH_SALT',        '#;wQ*o,#MvqD<)x; T#H^pr311K*WH-Y.Zk=ad{&K_/O+OK`SbK<MZy6|G@|T5^8');
define('SECURE_AUTH_SALT', '+W@=lkt!4>a!R9,|8q6y!zQ5JHHU=Znk$QjCV+~,@RoF^@=oqcW<,=|HC_|J$<ua');
define('LOGGED_IN_SALT',   '@%uu]-Q2z;qT}|90ibnWQ@&8t`yt+h|4SO-Em20D;_>j[u,}k4)}P~@EHsgV}}#R');
define('NONCE_SALT',       'Lm+Fu!A)|+Cv{K09-oQ.]o1QQwUud44MIm@G}JM}iSYXky!Ze0-hd}0Sv:|2at$]');

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
