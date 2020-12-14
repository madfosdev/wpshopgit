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
define( 'DB_NAME', 'wpshop' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '7gT]eT3)erAkn,+%$y;GRN3+*WpB`@+}RF,-}tOnzzNy/^@VB&D3TG^ g<vb2GIp' );
define( 'SECURE_AUTH_KEY',  '0L?fQL_cdde0fIW9#Jhl4e.~!Q972UWy53`.J=T%H?GR_;>mE<T5PTggiL4{iEv,' );
define( 'LOGGED_IN_KEY',    'UCX=CmiV:;TN/OcE]6*zrM*R,@|-ZF6*x2Yj%%$M<79d)835Xz>h B`*1~AAU]^I' );
define( 'NONCE_KEY',        'AYLIwq8r#}M?kmy.-0ywivh3-l$>|p@[$}xT+cwx06,2UGJ4DXF:+< i>//hY7Y/' );
define( 'AUTH_SALT',        'TK;>WQ-*CXHD#Kxyv% 8d9n(TZwF$)rIk4-:U?WaM=LjtX6g8@w9TY}^XU5A]b.h' );
define( 'SECURE_AUTH_SALT', '{<uGsI*?R,i06;h>kG>68DP)LgRTBg2`~|98&QCh=.4F?M}G0f/+1[srA80&|owJ' );
define( 'LOGGED_IN_SALT',   'HUFb;On4N3T9jwMZ@@M7N=1Nq2J<Z}v>4Q7[;TB>mn=uJz|_k9/f]=a,9oO]!#wB' );
define( 'NONCE_SALT',       'ztLUN`J*zQ;W!YQHoopo3i(i2Ez0$bQ9XKn;_/`{%tAe7hC7VHAbCvszaX<ea-HO' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the documentation.
 *
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
