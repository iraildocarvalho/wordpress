<?php
/**
 * As configurações básicas do WordPress
 *
 * O script de criação wp-config.php usa esse arquivo durante a instalação.
 * Você não precisa usar o site, você pode copiar este arquivo
 * para "wp-config.php" e preencher os valores.
 *
 * Este arquivo contém as seguintes configurações:
 *
 * * Configurações do MySQL
 * * Chaves secretas
 * * Prefixo do banco de dados
 * * ABSPATH
 *
 * @link https://codex.wordpress.org/pt-br:Editando_wp-config.php
 *
 * @package WordPress
 */

// ** Configurações do MySQL - Você pode pegar estas informações com o serviço de hospedagem ** //
/** O nome do banco de dados do WordPress */
define( 'DB_NAME', 'romario' );

/** Usuário do banco de dados MySQL */
define( 'DB_USER', 'root' );

/** Senha do banco de dados MySQL */
define( 'DB_PASSWORD', '' );

/** Nome do host do MySQL */
define( 'DB_HOST', 'localhost' );

/** Charset do banco de dados a ser usado na criação das tabelas. */
define( 'DB_CHARSET', 'utf8mb4' );

/** O tipo de Collate do banco de dados. Não altere isso se tiver dúvidas. */
define('DB_COLLATE', '');

/**#@+
 * Chaves únicas de autenticação e salts.
 *
 * Altere cada chave para um frase única!
 * Você pode gerá-las
 * usando o {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org
 * secret-key service}
 * Você pode alterá-las a qualquer momento para invalidar quaisquer
 * cookies existentes. Isto irá forçar todos os
 * usuários a fazerem login novamente.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '2Yo^=j2[APsap,zqP8!X_dNGx7ok-6=]ToQ+ ;-@kh!>6>5{>V~{+t#ZnT b#.m)' );
define( 'SECURE_AUTH_KEY',  'tJ4N?/Six_!wL)(cGky6<J_&hfD+hb&o)as~5e{W?@+i#}3]^-UfQ`[I$Vw*[EKx' );
define( 'LOGGED_IN_KEY',    '@$5{C:W$G`7+./#]jd81d{-yafC,9=:c4`HWP<TR,HC%)6<}h8SLoDAqu([}K[CP' );
define( 'NONCE_KEY',        '4?Cm1 E@NS._r4JNc5V1Y0;*Io_y~JQLr9hX:}fc]35!;^<4Q?[f-7L*UH]sPE,t' );
define( 'AUTH_SALT',        '5N{C@=*4ap/:UC8AU:TOxdW8w:ncQFBWY^io_1^US F0qaxPl*;j,b,Ec;gy69N>' );
define( 'SECURE_AUTH_SALT', 'NRG9[j0fC{Irn:]wcDK7)a7;Rz5m->zom^FR/KF[$J#2EPK8NrSx^(L] J gs0[:' );
define( 'LOGGED_IN_SALT',   'GaxjN%uA;b@1__QwWg1FD6pOSO;]Y@dfp)53K@~gpN6Dz).{-1V!H}g;,}l}lBNT' );
define( 'NONCE_SALT',       '93<Cy!j#@&iz-P&_.Kks?pEnnRyZAL/1=bQYZoUaYYHtdoPU_{64Pu(q;y6;4_l^' );

/**#@-*/

/**
 * Prefixo da tabela do banco de dados do WordPress.
 *
 * Você pode ter várias instalações em um único banco de dados se você der
 * um prefixo único para cada um. Somente números, letras e sublinhados!
 */
$table_prefix = 'wp_romario';

/**
 * Para desenvolvedores: Modo de debug do WordPress.
 *
 * Altere isto para true para ativar a exibição de avisos
 * durante o desenvolvimento. É altamente recomendável que os
 * desenvolvedores de plugins e temas usem o WP_DEBUG
 * em seus ambientes de desenvolvimento.
 *
 * Para informações sobre outras constantes que podem ser utilizadas
 * para depuração, visite o Codex.
 *
 * @link https://codex.wordpress.org/pt-br:Depura%C3%A7%C3%A3o_no_WordPress
 */
define('WP_DEBUG', false);

/* Isto é tudo, pode parar de editar! :) */

/** Caminho absoluto para o diretório WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Configura as variáveis e arquivos do WordPress. */
require_once(ABSPATH . 'wp-settings.php');
