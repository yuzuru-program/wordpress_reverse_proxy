<?php

define('DB_NAME', 'wordpress');
define('DB_USER', 'wordpress');
define('DB_PASSWORD', 'wordpress');
define('DB_HOST', 'mysql:3306');
define('DB_CHARSET', 'utf8');
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
define('AUTH_KEY',         'D6*1#x,kl!-:B:n(k!)iC-~3q7y|T^KfD*-J w.,oRV3`!}J{-7x_y>e:vG(.7/j');
define('SECURE_AUTH_KEY',  'HDojHySuQ&Max -~pbO?!J4FmLzm|RA9&8x^*1!hziSca4N7r@(Nn5NP`P;j&u6m');
define('LOGGED_IN_KEY',    'PU,m!g|QjhvS4-VL3+Jo;c{q~B9XLpPj#zps+lMbA=aDe8juZ`~?s8A~}<7%Q*qC');
define('NONCE_KEY',        'vY)O<45tt1!+(9~nU[EG1vaMd@eSOBX0;T}EJh/z,v?vO+6,[}KN)ihh0OinpB_[');
define('AUTH_SALT',        '6,s.il5J@Avu!`?RWSXYmds3ol{U6Vm ~aiok#BnIIyi:A;uq_tAl|tLmNtq0oUC');
define('SECURE_AUTH_SALT', 'GY,at_oWY_C*TJ:t&0|5a;W;@8ZQPm^?(O#(K=zE}-BfU_u8ra=s=bcN!-XkD0(+');
define('LOGGED_IN_SALT',   'xQjQA(3 `Lo,-3II<.e[Dq9-h)7?#;$wN,BXF@#cttlxKi+=7w}&J5P+|BCA,$J>');
define('NONCE_SALT',       'GRvI@||-`7?lOSQTAK5^R+ADz:067[o5r~~lqc-w-Xn}6-wcI6[f9A[pwKJrI?il');

$table_prefix = 'wp_';

define('WP_DEBUG', false);

// プラグイン使えるようにする
define('FS_METHOD', 'direct');

/* Absolute path to the WordPress directory. */
if (!defined('ABSPATH')) {
    define('ABSPATH', dirname(__FILE__).'/');
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH.'wp-settings.php';
