<?php
/**
 * La configuration de base de votre installation WordPress.
 *
 * Ce fichier contient les réglages de configuration suivants : réglages MySQL,
 * préfixe de table, clés secrètes, langue utilisée, et ABSPATH.
 * Vous pouvez en savoir plus à leur sujet en allant sur
 * {@link https://fr.wordpress.org/support/article/editing-wp-config-php/ Modifier
 * wp-config.php}. C’est votre hébergeur qui doit vous donner vos
 * codes MySQL.
 *
 * Ce fichier est utilisé par le script de création de wp-config.php pendant
 * le processus d’installation. Vous n’avez pas à utiliser le site web, vous
 * pouvez simplement renommer ce fichier en "wp-config.php" et remplir les
 * valeurs.
 *
 * @link https://fr.wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Réglages MySQL - Votre hébergeur doit vous fournir ces informations. ** //
/** Nom de la base de données de WordPress. */
define( 'DB_NAME', 'planty' );

/** Utilisateur de la base de données MySQL. */
define( 'DB_USER', 'root' );

/** Mot de passe de la base de données MySQL. */
define( 'DB_PASSWORD', 'root' );

/** Adresse de l’hébergement MySQL. */
define( 'DB_HOST', 'localhost' );

/** Jeu de caractères à utiliser par la base de données lors de la création des tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** Type de collation de la base de données.
  * N’y touchez que si vous savez ce que vous faites.
  */
define('DB_COLLATE', '');

/**#@+
 * Clés uniques d’authentification et salage.
 *
 * Remplacez les valeurs par défaut par des phrases uniques !
 * Vous pouvez générer des phrases aléatoires en utilisant
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ le service de clés secrètes de WordPress.org}.
 * Vous pouvez modifier ces phrases à n’importe quel moment, afin d’invalider tous les cookies existants.
 * Cela forcera également tous les utilisateurs à se reconnecter.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'j)=5IDB9H0/yX6u!p8=JwOu@IEoq(Fn>O^H7ojfR<fB;h5h<p5r:Ye/bq dc,eGq' );
define( 'SECURE_AUTH_KEY',  '^{QxVY}07]!:kbt=VM-^C@jW0 y5(d5eo?rG|bksm?>(?39*h-LWS`LE~ZT.GVd(' );
define( 'LOGGED_IN_KEY',    ' $q/t#/JH7Dp7aix[M~|`oy.`>nym1gqlRqzaXeM_6[ovljp;Dl;>An]L_=T5ra$' );
define( 'NONCE_KEY',        'sc.]}/<iwKRvyJD6>Fg<]7YFsIbd&,P.fU|!fFB!Mq*&~v-3ou$b2YT?/YFHnr4,' );
define( 'AUTH_SALT',        '}fK>8(QhNAS|^GQQE,RP2k`F|-EfaA)f,{y>6r[a0NM*U7?_n!i4*|v[o>Kb,jEu' );
define( 'SECURE_AUTH_SALT', 'p,|P8rY_tg=H=IojB|MSel#_d4k5Nf^-c0x]ECnv)s-M{cD)x}<.S|f]wqN^g~UI' );
define( 'LOGGED_IN_SALT',   'i&u~|XSqRKwjP8MAnv>_vQ8.aRn_+|T*`K}7ckH{)ssBP4s{s^kpp#Ue=6#(Z59D' );
define( 'NONCE_SALT',       'jvZ{EDIq4n{)FFW5o}hcM0E,`+~6n!*o^QdjD}nBp@d<Sk8*uw<NOS6(!#][L%{O' );
/**#@-*/

/**
 * Préfixe de base de données pour les tables de WordPress.
 *
 * Vous pouvez installer plusieurs WordPress sur une seule base de données
 * si vous leur donnez chacune un préfixe unique.
 * N’utilisez que des chiffres, des lettres non-accentuées, et des caractères soulignés !
 */
$table_prefix = 'wp_';

/**
 * Pour les développeurs et développeuses : le mode déboguage de WordPress.
 *
 * En passant la valeur suivante à "true", vous activez l’affichage des
 * notifications d’erreurs pendant vos essais.
 * Il est fortement recommandé que les développeurs et développeuses d’extensions et
 * de thèmes se servent de WP_DEBUG dans leur environnement de
 * développement.
 *
 * Pour plus d’information sur les autres constantes qui peuvent être utilisées
 * pour le déboguage, rendez-vous sur la documentation.
 *
 * @link https://fr.wordpress.org/support/article/debugging-in-wordpress/
 */
define('WP_DEBUG', false);

/* C’est tout, ne touchez pas à ce qui suit ! Bonne publication. */

/** Chemin absolu vers le dossier de WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Réglage des variables de WordPress et de ses fichiers inclus. */
require_once(ABSPATH . 'wp-settings.php');
