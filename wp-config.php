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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Configurações do MySQL - Você pode pegar estas informações com o serviço de hospedagem ** //
/** O nome do banco de dados do WordPress */
define( 'DB_NAME', 'wordpress' );

/** Usuário do banco de dados MySQL */
define( 'DB_USER', 'root' );

/** Senha do banco de dados MySQL */
define( 'DB_PASSWORD', 'akueru' );

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
define( 'AUTH_KEY',         'Ir- +Ksru$VyB`&, 0e_Yh0p8)yh>`rL@!RI.k1jJ4mgsugD!0GH2%Ey%&V=eo7o' );
define( 'SECURE_AUTH_KEY',  '3#e+9Cq4TL_#SYRkRZG,7[}V`FcPzMMqjNN5.zNW};2$$0ff3F`imRf{*[N:]{!h' );
define( 'LOGGED_IN_KEY',    'H-F1K^u:MXP;vSNG$A,6eq,Ea {`0U.#|lL6Nh;sRu4.^X>?[*IE;Ja]=lDeQ~cz' );
define( 'NONCE_KEY',        '/.=q2///*%(lU.ci>j*_%K&kI>!@UH*n<wzrqj#k2#*zF0%Ax]Wpl}of(7=,:(Id' );
define( 'AUTH_SALT',        '9JjG(<5tb6/KXBe$y/6X)Stv*3m<rnNB)L/uDxi4em)O9-d!HBN_{f]wW.hW61>i' );
define( 'SECURE_AUTH_SALT', 'JT8.3&=jnB;: ^1s;Y2Xc6HYET]4eT@]=W(pBR!x42<Z;/tJ>R6:n$DS|(m)YCLp' );
define( 'LOGGED_IN_SALT',   'Z`Hcth-6N.~-5P0<]g^ds6{!.}{U&Q<DogH?r}Qm=kHf8<BQq8b^^H`W!.Gj.E2d' );
define( 'NONCE_SALT',       'PHo;n%_m89%9Y,!FcKaShC(;tCf-A?Ck<fq5!a<:9ZkHzyY&s3yQU7cJ&B`5.Rqt' );

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
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
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
