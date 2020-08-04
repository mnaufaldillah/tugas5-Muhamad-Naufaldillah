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
define( 'DB_NAME', 'wordpress' );

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
define( 'AUTH_KEY',         '?TBX^+HA4fz;EaW%:p7>%+#rh6<SIArn[r-3C?vH/C3(,*qq;&W$*{g0Ju(y:U3r' );
define( 'SECURE_AUTH_KEY',  'vBjCV%p{$) *IJ>9Q(xJ9}4RD:b|V1TJpVs)w64}b!HSD]K] Qv1W7,[ft))M5|C' );
define( 'LOGGED_IN_KEY',    'Rp2(131Cc?Vh:D/+lv=^.=duQ^Vq}wU%nKAy`Vri:w>>(gRfgv=KPj7UGtg$zfaw' );
define( 'NONCE_KEY',        'A}B<:>KZIG9h.GQnnbAi~v]QF7j0,[Rx#2nM|F)DNcYiW)<.u+hUF:Chh`HY6lzv' );
define( 'AUTH_SALT',        'i]QlB.THb7j%%HYbNt@Lr/@)y+L)6RQG*k8$Hjr}k@.Oqo@.E~>J=ZeUFL/w:14]' );
define( 'SECURE_AUTH_SALT', '.7%ENTNGVMJ;xh}o;^%__Bi<-yM,*6sXP.#aDen+wSl#Q90Lrw`( sduY~k;$ nV' );
define( 'LOGGED_IN_SALT',   'pr.DD%}b cXd9bqhS(cnx0jh|2`R4?bu+QICz]WKL8Vs<K}CL6U$nm%TLe7(xY_J' );
define( 'NONCE_SALT',       'Vhs<=t^OT+`+H17#5trq_<?MnmS.9fsxx>29.6{A0O^yE~9tqT+%E239s[>J9@cy' );

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
