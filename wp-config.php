<?php
/** 
 * As configurações básicas do WordPress.
 *
 * Esse arquivo contém as seguintes configurações: configurações de MySQL, Prefixo de Tabelas,
 * Chaves secretas, Idioma do WordPress, e ABSPATH. Você pode encontrar mais informações
 * visitando {@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} Codex page. Você pode obter as configurações de MySQL de seu servidor de hospedagem.
 *
 * Esse arquivo é usado pelo script ed criação wp-config.php durante a
 * instalação. Você não precisa usar o site, você pode apenas salvar esse arquivo
 * como "wp-config.php" e preencher os valores.
 *
 * @package WordPress
 */
define('FS_METHOD','direct');
// ** Configurações do MySQL - Você pode pegar essas informações com o serviço de hospedagem ** //
/** O nome do banco de dados do WordPress */
define('DB_NAME', 'wordpress');

/** Usuário do banco de dados MySQL */
define('DB_USER', 'root');

/** Senha do banco de dados MySQL */
define('DB_PASSWORD', '123456');

/** nome do host do MySQL */
define('DB_HOST', 'localhost');

/** Conjunto de caracteres do banco de dados a ser usado na criação das tabelas. */
define('DB_CHARSET', 'utf8');

/** O tipo de collate do banco de dados. Não altere isso se tiver dúvidas. */
define('DB_COLLATE', '');

/**#@+
 * Chaves únicas de autenticação e salts.
 *
 * Altere cada chave para um frase única!
 * Você pode gerá-las usando o {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * Você pode alterá-las a qualquer momento para desvalidar quaisquer cookies existentes. Isto irá forçar todos os usuários a fazerem login novamente.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         '@^TO6waHYNJ$<e2QWY|&P>G-g|/Ek;4]4|Aj]5Q&o?_:P6BKu!]L.]aO^j XB=-P');
define('SECURE_AUTH_KEY',  '>Q77k9+@lvXDJMCz+Q+/j2cM+2]5p=!WFR=kwS5*X_l0i^HF]6}u(@&gwcA^&sXC');
define('LOGGED_IN_KEY',    'ArUD76|(=al{sM.~F>;Jk)e YJ<,M;`a=%[]|%QprB9HA6:dMCLca@WJ1P=c#97O');
define('NONCE_KEY',        'oK6F]?pAMAC[?P_w9:?`:*R~T=#3@$;6!-&Ov^569Yx+P8]C(.a,y$J{_}V.[K]f');
define('AUTH_SALT',        'c^{)&MYa|tFQ#0Pta?ZWA|wgJ-ZVZL]?6A-f`J&omNR3SW~N8(Q72#TF7^9NS@|*');
define('SECURE_AUTH_SALT', '+w/e0|`_n%U)7`0Vtb;fy`#UWNQ*Q;g/8d_4(/i=6C=:xBn-[eHN}V)Pc 8Q8=|t');
define('LOGGED_IN_SALT',   '-|a8iSU}4%kjl$IIU2Uoty&WF+gcqO>$H<;y-+*{]Z]:n3}_[-NDh0N|km0D$T2j');
define('NONCE_SALT',       'zUZ}w?-B8KDcc1(}+S0%47A6.c*upUIm6wW#l{^6>/F~f_7B/HuCXQ7Q&fS7~|K]');

/**#@-*/

/**
 * Prefixo da tabela do banco de dados do WordPress.
 *
 * Você pode ter várias instalações em um único banco de dados se você der para cada um um único
 * prefixo. Somente números, letras e sublinhados!
 */
$table_prefix  = 'wp_';

/**
 * O idioma localizado do WordPress é o inglês por padrão.
 *
 * Altere esta definição para localizar o WordPress. Um arquivo MO correspondente ao
 * idioma escolhido deve ser instalado em wp-content/languages. Por exemplo, instale
 * pt_BR.mo em wp-content/languages e altere WPLANG para 'pt_BR' para habilitar o suporte
 * ao português do Brasil.
 */
define('WPLANG', 'pt_BR');

/**
 * Para desenvolvedores: Modo debugging WordPress.
 *
 * altere isto para true para ativar a exibição de avisos durante o desenvolvimento.
 * é altamente recomendável que os desenvolvedores de plugins e temas usem o WP_DEBUG
 * em seus ambientes de desenvolvimento.
 */
define('WP_DEBUG', false);

/* Isto é tudo, pode parar de editar! :) */

/** Caminho absoluto para o diretório WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');
	
/** Configura as variáveis do WordPress e arquivos inclusos. */
require_once(ABSPATH . 'wp-settings.php');
