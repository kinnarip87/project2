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

// ** MySQL settings ** //
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
define('AUTH_KEY',         'Y6oo+8iCsrukzuwwnMo6p+A0EAeRc6uezJ+5FSvXzEhdKd5nVtSeLq6AlCtsV22QcDYtruJHayn+pKfqeruduw==');
define('SECURE_AUTH_KEY',  '6X9Jajby7duv6BAjmxryEFNNoOuBAbGoaHldjoAN/isIMnfnziag5z6gnBSvGTEjytosNQYk3PLjzlgyAeBFnw==');
define('LOGGED_IN_KEY',    'F3wqrxPh0IiUJMcdjc1tbySkWAf5UNN4r2weQw/9dSRbmfAkirk4QCiB40+cptSGTTI3LZLIkB92iuXKjF3WHg==');
define('NONCE_KEY',        'h/h1JoTydH/1KFje1r9mlD1k/4juoVaNXqJjxchAFMaFwEaOE8FONrzrb30+ca9rTENcp17jCtqyaQDxssspGw==');
define('AUTH_SALT',        'oD63RYnxeQzQWy/pnCLuZFt3WLlmMstUhGIORTKpivrR4ovjpMwQgJziN28830pSTNmKzsx6o/lHhS7fO4CZcw==');
define('SECURE_AUTH_SALT', 'vw6JH9VG3N/bkiiceQKCQlTVPkqGYDFM5qHZHQ/epShxpQsOBaZKOW0jFACQE3K/xUAMWyqCJLf7avcc1XL82w==');
define('LOGGED_IN_SALT',   'LG5IoFuf2ds7GJ7gIFW9qMAhrA+yDIvWNUaLUVVf3ZaHkJkPtiqVrjxH8ZOq9i0rkz4ofPzPfQgz61WALv+3QA==');
define('NONCE_SALT',       'iP5EfqbCkgEQV76q7rBmNrNJuk40aZKAwpS9d2D7C0UtZ66JZfJRJByyf/bzaOBjBCiY9BeLfY2x4kOT/ubeZg==');

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';





/* Inserted by Local by Flywheel. See: http://codex.wordpress.org/Administration_Over_SSL#Using_a_Reverse_Proxy */
if (isset($_SERVER['HTTP_X_FORWARDED_PROTO']) && $_SERVER['HTTP_X_FORWARDED_PROTO'] === 'https') {
	$_SERVER['HTTPS'] = 'on';
}
/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) )
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
