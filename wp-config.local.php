<?php

/** The name of the database */
define('DB_NAME', 'ssk');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

/** MySQL hostname */
define('DB_HOST', 'localhost');

define('DB_CHARSET', 'utf8');

define('DB_COLLATE', '');

define('AUTH_KEY',         'wQ@&;A87t$~A>!*;N5=:R_%kB`DByC1DegElk*jioq*rrKn!W,7nPl93+KQzqt:1');
define('SECURE_AUTH_KEY',  'L5LF;?}+#tRU8KAx<)9j*151~KfD]izjn9nL0?4JN9Ldeg]T+5}#]=5G2e+$Kx(}');
define('LOGGED_IN_KEY',    'Po|>scj.=|f_G8AAzh~Bmfs<.pC1]|rl#]::fM0BAwjG(B1=e8fhS;O@GY@y~zv>');
define('NONCE_KEY',        'n!!~0piy<nt~`jV|i.1a{53il~fbv=T@_e0-E&{=,:d6@}>h!eVhR8za5]Ha<gs;');
define('AUTH_SALT',        '[(w4PNv{y{HtC+[<$>vIfCiPig4;n= i61T9;(XuWC3OA.RF3M%c}E6mn;:3LLnH');
define('SECURE_AUTH_SALT', 'L#|/-ctrD|]7xr$8Y;,!S]yRdH5u}O@I~F|AIas_$N;!!eE%koAVzZ <V$m&A@tE');
define('LOGGED_IN_SALT',   'NZ[cv3_CSf,Dp.Jg`m4m4x+|pjRif|[iDY*f;_(7n=fsfN_c}-3+:kNr|i~v9k+1');
define('NONCE_SALT',       '6-RWXaq5(fu([<d%FUU6I9/WT|K.{^_za)+GRTQ)pB>oN6|b`f/m*flkK4byXX<T');

$table_prefix  = 'wp_';


define('WPLANG', '');


define('WP_DEBUG', false);


if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');


require_once(ABSPATH . 'wp-settings.php');
