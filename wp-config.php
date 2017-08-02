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
define('DB_NAME', 'widerfunnel');

/** MySQL database username */
define('DB_USER', 'widerfunnel');

/** MySQL database password */
define('DB_PASSWORD', 'EoirRTTFCGkuDFjo');

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
define('AUTH_KEY',         'j lDpFwVdfjS0wHu@hnI^+G<lOOMH*%r9n|kOLd#{kumjH: 4.*4O?tUf4]tcE;q');
define('SECURE_AUTH_KEY',  'CY6&L~)Ah=>?~tX4lpTS4K9:WdEq5q8HBa#Kry8hHjIU{;Ze.TmsWEMzZvhvuX8/');
define('LOGGED_IN_KEY',    '&?*?G^S$2R~,D#>Z}Aud@>Yw.JJNfK=JEKl`iX#-xdw&GbllY&p?]@pC9DEoIhE~');
define('NONCE_KEY',        'q&m8D `Aewkk u|=,|)<i?rK0hG1b68;Q7N?DM2a$,`SRH9}jt~Eei)22LItFgW8');
define('AUTH_SALT',        'p]YY(_*Ao*2*1*n7oM&BQ-s9&rBgGw1:47L!s:a%OVL,ZIM{<GU.BPob,?}JFup;');
define('SECURE_AUTH_SALT', 'Vw-t<nui.?Iz=m,jEcXs38UG=ID`|-?9v!s/4T=1kF0srbJpW<K0MkFN(|2vP-3p');
define('LOGGED_IN_SALT',   'gJ:g| DgW6_+{!SO^|pUKX1tHyz~(9JoaKvAEl/>goM{3h^T*]k`n1xeriV3^KJm');
define('NONCE_SALT',       'gr 5!@*,@U,Q>f~N,fP!fRkwxXxGks7%dVW_O&|Z]]is{Oz&cRsWPN0(CIqWf[Z`');

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
