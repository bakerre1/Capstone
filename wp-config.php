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
define('DB_NAME', 'bakerre1');

/** MySQL database username */
define('DB_USER', 'bakerre1');

/** MySQL database password */
define('DB_PASSWORD', '900537041');

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
define('AUTH_KEY',         '!=_:]WQEf&<Jy-jL1Ga.cg*hDJy%ux737$j`D>!-LZ+L^<-}jEHK+4DWLW`%bAaT');
define('SECURE_AUTH_KEY',  '`:n2Ie74C2c78[oQer4*%/ [}p0O[e+{ATR4#J3t<XzBY#CS.8Mi:gwXA$nzc4D>');
define('LOGGED_IN_KEY',    '`+(,*jnGTwyKcNS7;@c[imrk6#Xz:50G+h%z+ _20+OI>w$PqPd en*`34{1dbGB');
define('NONCE_KEY',        'RzI|s;Y`#x}:sCH`p>XRB)Atv#=918YK{G.!}FUC@wa9sOmR2,L(;.)>=]H]Vb)Z');
define('AUTH_SALT',        '2`MuXOi }Y?7@-OhQdPHOTu__IN#<yRdaa=KeRizjG=oY08T.YI(G~{-GG0ggs*`');
define('SECURE_AUTH_SALT', '6IEfwD_^<dRc3;W;S?Q^/D45W1+@6e.Zqn2fk><xZh%fZMZ)/w_a=BS1/H7nf_94');
define('LOGGED_IN_SALT',   'e{RPHny<Ll`;>f,+lyN23))Y2IGxV7n7O*z(~9YEl;|lW/xC5`E?CdPAwr,CPXFj');
define('NONCE_SALT',       '.>tdg?MZ|zMgz0o_5dZGX]*%o1F;A8LuO@!n+l7}5x5SHo<,;w/wGuLgz16T!gtu');

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

