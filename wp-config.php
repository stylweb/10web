<?php
/**
 * A configuração de base do WordPress
 *
 * Este ficheiro define os seguintes parâmetros: MySQL settings, Table Prefix,
 * Secret Keys, WordPress Language, e ABSPATH. Pode obter mais informação
 * visitando {@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} no Codex. As definições de MySQL são-lhe fornecidas pelo seu serviço de alojamento.
 *
 * Este ficheiro é usado para criar o script  wp-config.php, durante
 * a instalação, mas não tem que usar essa funcionalidade se não quiser.
 * Salve este ficheiro como "wp-config.php" e preencha os valores.
 *
 * @package WordPress
 */

// ** Definições de MySQL - obtenha estes dados do seu serviço de alojamento** //
/** O nome da base de dados do WordPress */
define('DB_NAME', 'dezweb');

/** O nome do utilizador de MySQL */
define('DB_USER', 'root');

/** A password do utilizador de MySQL  */
define('DB_PASSWORD', '');

/** O nome do serviddor de  MySQL  */
define('DB_HOST', '127.0.0.1');

/** O "Database Charset" a usar na criação das tabelas. */
define('DB_CHARSET', 'utf8mb4');

/** O "Database Collate type". Se tem dúvidas não mude. */
define('DB_COLLATE', '');

/**#@+
 * Chaves Únicas de Autenticação.
 *
 * Mude para frases únicas e diferentes!
 * Pode gerar frases automáticamente em {@link https://api.wordpress.org/secret-key/1.1/salt/ Serviço de chaves secretas de WordPress.org}
 * Pode mudar estes valores em qualquer altura para invalidar todos os cookies existentes o que terá como resultado obrigar todos os utilizadores a voltarem a fazer login
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'n|x=d``O%WS)yX-Vi|<e:e e_+3^i$+_ET7i):GnUq?W%;HVMC*f:N<`+x}@-- +');
define('SECURE_AUTH_KEY',  'vo/q{yjJ_OjwX,7@,Gs[]5FSgBos.~MXN|+P`xt89s_3./ef>XN|,NW}PQ}cq(]k');
define('LOGGED_IN_KEY',    'U/3[D[b;QS/Jk.Ipx.G~Ig_~y8U~T4`X!SrwT`)y%|{@<%v6yN5b6C[AoFG,IHvA');
define('NONCE_KEY',        'x*nfy/EXA*KEL9?K7~o4gl_+-!-$ffZ7n{0mQfvIv,)J3<_}!zZ43.cHn@z|C<rv');
define('AUTH_SALT',        '||pF/XRBo0GaqWh)$gWSQWVp4-8#Uyu{W-<yTbQh3oVN}Q0A~uoQ9~er1mk)(P;5');
define('SECURE_AUTH_SALT', 'Qp5MCk$<w</{+U)e/MvH6:Wqyhunn8sB|$ JOF<2W5qR2m}Z>+iH[}B-KKRsCV^5');
define('LOGGED_IN_SALT',   'AB7#:9ou^nFY|TKne~!*7,W7+zi8eWBK<X)AH-3+`&;Z*{|S^T!JEje<x5xjtO6W');
define('NONCE_SALT',       'Ob3h<-[QH=hlBC7$oH$umRo@elnKXFTZ_z;}h*H[8B2{m|ed]^e[,+{8VKm;rU0u');

/**#@-*/

/**
 * Prefixo das tabelas de WordPress.
 *
 * Pode suportar múltiplas instalações numa só base de dados, ao dar a cada
 * instalação um prefixo único. Só algarismos, letras e underscores, por favor!
 */
$table_prefix  = 'wp_';

/**
 * Para developers: WordPress em modo debugging.
 *
 * Mude isto para true para mostrar avisos enquanto estiver a testar.
 * É vivamente recomendado aos autores de temas e plugins usarem WP_DEBUG
 * no seu ambiente de desenvolvimento.
 */
define('WP_DEBUG', false);

/* E é tudo. Pare de editar! */

/** Caminho absoluto para a pasta do WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Define as variáveis do WordPress e ficheiros a incluir. */
require_once(ABSPATH . 'wp-settings.php');

