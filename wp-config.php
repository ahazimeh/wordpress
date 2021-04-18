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
define( 'DB_USER', 'ali' );

/** MySQL database password */
define( 'DB_PASSWORD', 'JxSLRkdutW' );

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
define( 'AUTH_KEY',         'U4iU]c0|Y[7{yd(CLCDzH`WE3~B5dY51{!kAnxB9mB #Z;MD)}!!n{NXP|>Up]PH' );
define( 'SECURE_AUTH_KEY',  '/A+z-dm-nhwGRz.V,sLH|0;c#mV(R<Z?i)>yiTnSY(BP@1IF3}06&_tIrKo5G;O|' );
define( 'LOGGED_IN_KEY',    'Vt29FBUNApNua=?%E#{=i(4Mw-5dBJpNugAzw^D]zSlUYIwW5M/LtL$0f+N:Hytq' );
define( 'NONCE_KEY',        'Jb46|:XuSAPYp_|)6q+K>2o]KwHP&_qqn$r)#8<#t*R2HB_vBYZSz#`aaL_Zq&/~' );
define( 'AUTH_SALT',        'SC<JZY5=mA#g!R7Dmq0U[@~0{|aaYT[+WYTB,W@Po.zQwb5.H>f8a0ade8(@u.nX' );
define( 'SECURE_AUTH_SALT', '*ivJ?1}w@Q$azKf,e:_gk^OY{@OC]K$h-T[)&ijVCc;lBD$znu9YZck?k+S)C7o}' );
define( 'LOGGED_IN_SALT',   'uF8tCsK% O_w<-9DBrW@&-ct4cw~gK<r`-xAv0Bt<9u_8Fabh@EYN:|}z17$;4j8' );
define( 'NONCE_SALT',       '|M-ps7QN1|AJ[{$)KL!`8Ob3;f<JLnXTh^T1Fx=9,eCDo@/Q5/ep^=r}gVSPgan7' );

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
