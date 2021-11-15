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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'local' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'root' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'J6GaM9Yn3awvNVHVSWW8fEvjWDLzfCakqN1ktbXFSDiAon6JLuDiuNqGnV7OgLDDlaSuAPk9l28reRnT11Xaag==');
define('SECURE_AUTH_KEY',  'VdpVSkD5DgJSNvecjkL6tQcDByviaYgwnci/s9N2viMEFy0YyGqvTQoe34RBHNEg27l5DX8UpYhFD12xOI7ouw==');
define('LOGGED_IN_KEY',    'gyLZAhDIlC/kdX+oKCqclbBe03xgGnaEOqK6dy5T8cu5Eqf2QdfG7G/FYXqqR5MUZnJQ6dB73i8eB2hZWAD5+g==');
define('NONCE_KEY',        'VbweId0g7A5V+qn2/YFHa7K+FPfscPK8kf8XSzFLg7Ef05gmS3MvwjNAeTn4ZEwwi2IeGUXNPADWvYEKEvv2cg==');
define('AUTH_SALT',        'Rl8zTralD7bPF0r7Ybfk/gALOpxnzXQzbqmWYirprLn2W00h5WXpt934cn5anJx3PWX+mFN1kNVjpSUDGqy8SA==');
define('SECURE_AUTH_SALT', '8+UeO6chCD51EXckd7UB0dud4wmBxGBdSXFhC8rDqJSIA5c0jwtwirkVBZwA96yZHcxWsgbqmox9g3D4wTywpw==');
define('LOGGED_IN_SALT',   'O1caUkxKWW2OubGL+ikFQQxNOVsoPzmhVGGEiW2oE8KeY554G2UgtzuwaxS/Dat5HMCu4vFcKTWzTUV//FGZGQ==');
define('NONCE_SALT',       'TEuTsnY/NRmM9JxSYA0Yrm9KZ4i6JFHmLyalC34G4m8DDAxxVHeA+/kyUmHM6i8XNt5fH9nnfvuFY4FCBQGuqA==');

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';




/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
