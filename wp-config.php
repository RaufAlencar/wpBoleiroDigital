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
 * * Configurações do banco de dados
 * * Chaves secretas
 * * Prefixo do banco de dados
 * * ABSPATH
 *
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Configurações do banco de dados - Você pode pegar estas informações com o serviço de hospedagem ** //
/** O nome do banco de dados do WordPress */
define( 'DB_NAME', 'bdwpboleirodigital' );

/** Usuário do banco de dados MySQL */
define( 'DB_USER', 'root' );

/** Senha do banco de dados MySQL */
define( 'DB_PASSWORD', '' );

/** Nome do host do MySQL */
define( 'DB_HOST', 'localhost' );

/** Charset do banco de dados a ser usado na criação das tabelas. */
define( 'DB_CHARSET', 'utf8mb4' );

/** O tipo de Collate do banco de dados. Não altere isso se tiver dúvidas. */
define( 'DB_COLLATE', '' );

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
define( 'AUTH_KEY',         'dN^eSE[yo/SQ CRjFW|LmDB|[8HI{h4k$3!/Gb7RCY5*&;&Jq(R5@mjmhYH-X/rl' );
define( 'SECURE_AUTH_KEY',  '%*z`5}{9TNuf+^}l9(_WY-hVX7p,=7F%;11.Mro2iP,YGotQfI:Cj,z)/sG((Qa,' );
define( 'LOGGED_IN_KEY',    'Xr{%mKtR8PC7FcA#wi_b1KdG.RtGkTRmRt=4cV56+RNcP1FG3ZK)tKbP0>hHEi?@' );
define( 'NONCE_KEY',        ',,e9QS[x~2F[=777WGMTfTn)ZVWBzsLn^^oWdfP]QN+i,n($F^26BnEi?;;hk`tB' );
define( 'AUTH_SALT',        'Y2oMf3/ =#/V15x>Kk,X#?</-M4#8?ojl3M^,A{950h9i~s,^KrV}})}rC](Z{&1' );
define( 'SECURE_AUTH_SALT', 'vSlp49^oA&TKW/+c>ITl&N-($X;p[MBf@08ovO)[piRvx`PE6U&E2i2oR-TZrbw9' );
define( 'LOGGED_IN_SALT',   'Oz{Q:<a~;8F-T:I81[7v$Xhh,MOP62Yq<i3@BKIOS.AZF~{MkXtP[.8iZ5[9%5|V' );
define( 'NONCE_SALT',       '.O&{!V-RunpL(a%da2-!)Vb+0qAj,a_JDWn56*k|7CE8V!6<xysdh2;(q5u&Lb[.' );

/**#@-*/

/**
 * Prefixo da tabela do banco de dados do WordPress.
 *
 * Você pode ter várias instalações em um único banco de dados se você der
 * um prefixo único para cada um. Somente números, letras e sublinhados!
 */
$table_prefix = 'wp_';

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
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* Adicione valores personalizados entre esta linha até "Isto é tudo". */



/* Isto é tudo, pode parar de editar! :) */

/** Caminho absoluto para o diretório WordPress. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Configura as variáveis e arquivos do WordPress. */
require_once ABSPATH . 'wp-settings.php';
