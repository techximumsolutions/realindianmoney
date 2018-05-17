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
define('DB_NAME', 'rim_dev');

/** MySQL database username */
define('DB_USER', 'rim_dev_user');

/** MySQL database password */
define('DB_PASSWORD', 'XLPBil0YK0jIluY3');

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
define('AUTH_KEY',         'h:x#]CCsBr[+id6c*.$D#=FfBJx^8o++Fm.R:*]W0yuDY%zQ5jH6nA4%LP!(l,-Z');
define('SECURE_AUTH_KEY',  '?:fPK:Z%NXYgN_*sQ,-a;GoXM;AUM[i1n2&>M[T_oxTpYmnRZC+Fct1%zRR9r)PQ');
define('LOGGED_IN_KEY',    '&sGfJn/:E&9VOr<MUu #<L&MS4[@~PNZ;E68m?y>j:2q#%`_)8D7M_`Ez+.!k)?J');
define('NONCE_KEY',        'F_Cy$xv~MbuD]pp*;CQP%3K(3d;$M!2C1R+@=L0vmbup,tr%]o4I>`7FnN1OG-X)');
define('AUTH_SALT',        'EX~huzec5Tpv);v]7*SfretjrMJm,}tp.|t!34@(bY7aG|F;i01#/2;;5: 1|a!Z');
define('SECURE_AUTH_SALT', 'e*5d+e[96b[9>*mJNNVR_5w=Z9S <LKM(~5~9FRHT=jzivT^F{$@iys1bh)S5 rM');
define('LOGGED_IN_SALT',   'SPUn65r;]SzjdA%p@lm5RZFN|;kbU_[O#MC|Rah)8y6C9ve%Ku[u,KA*Mci}U4)#');
define('NONCE_SALT',       ',MjyG}Fed4i+bWwkuX,@<zR!DH)iZO#zMguzU![RB+tYXoBPFj3CGOa>)r3A<(64');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'rim_';

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
