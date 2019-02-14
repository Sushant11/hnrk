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
define('DB_NAME', 'hnrkhvgrd');

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
define('AUTH_KEY',         'CRBO2[p!mEI mi_:6)+rHLb*_TidAFhsw{=@xa.wcy]p[qOC]t}rANi7aQ>TNV&*');
define('SECURE_AUTH_KEY',  'dAra$=Ao,O}J)bvP&3`1*sYd33!, PMvE=;R7bIr;7eHI:8m}Q?b%w&NSI)obU.D');
define('LOGGED_IN_KEY',    ':vGqF!C!}iq(7%-aps6X2Hc0!$tK&Ar;O,HW0ubAz3<K:0xJe).TbL;7hA I7+Tl');
define('NONCE_KEY',        '2IE1kR<U} nlIJ]WacqdIlhRqEH(i6,7Z+OX41*3vNo1.2{?m>@b=)t]6&N>ilV!');
define('AUTH_SALT',        'd=6#i$u{-X-mqev+7nE6kC6zdh_NU$)cJ+cj{FJROtDbC8Z^.IW!M`j|HbrT2<+M');
define('SECURE_AUTH_SALT', 'Dr^#D|7_)3yeN+* >[}U9hHfDNG.u@KmH>RUa7Z=92nq%N.N%j,M`_x6KFrpf(`#');
define('LOGGED_IN_SALT',   ' ?|(&Tyk*QnL+2A!Pl<%S2[.(.o!^?vGyznl41WB2;`Kca?u?|W7--9+%2_ BQ u');
define('NONCE_SALT',       't^B::=Q5@^nSw*dmqOxK%<1OjcHu65cv9ff{Rp/fnMr4Dq<J2$Sb6k|=j|;m@L)W');

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
