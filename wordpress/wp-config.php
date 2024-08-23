<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the website, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'alaa_wordpress' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication unique keys and salts.
 *
 * Change these to different unique phrases! You can generate these using
 * the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}.
 *
 * You can change these at any point in time to invalidate all existing cookies.
 * This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'v#wk1G]d}]Tyr_O+<qefM:R1p*)sS{)%(H-Sympl2_]Sc.,2DrI:K5]m|!$[T3RV' );
define( 'SECURE_AUTH_KEY',  '@t&/Mctew_mlh*D&YPb ({ITUDGg$z>[1!nY;/KjZx<o_cp4?jyz<(IDCgo^C0l ' );
define( 'LOGGED_IN_KEY',    '$KxE,Q=uT`~6 6co.-u^$t,E[lt[ |0gXj` Wb|7J<qXNj#EwM;z~1|55e]sy@JI' );
define( 'NONCE_KEY',        'rL+e>GG7p)K0lq0hoz97Q5q$[YR0_:r)#`eU~ED#[qpL:f3rjL-{e5#kO;@)=n8E' );
define( 'AUTH_SALT',        'okPMtEMNNfgG;=KvhPWei,4BmQo1/ut+)8 *%qO`np@7N#G<O9]g$6mEynM)Hi_h' );
define( 'SECURE_AUTH_SALT', 'He) n#(C,BqNhtd.EQ/I2+:~58CDbUs4_D{2DS+P_-XCwuTsp,jkEf_wVHVA?r?}' );
define( 'LOGGED_IN_SALT',   'bOj]D/[x&Jj^dbG{Z={A$YWPb~+..&wR`bnenL{.10%EN:Nk^bv>&w%U`m>Eb, 2' );
define( 'NONCE_SALT',       'jHRSfU6IJPdmp3wmb(Q/a#;*wppXQi|BG,YjZ v~y{tX?FPEh21_Qlbgy,NPTdNU' );

/**#@-*/

/**
 * WordPress database table prefix.
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
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
 */
define( 'WP_DEBUG', false );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
