<?php
/**
 * La configuration de base de votre installation WordPress.
 *
 * Ce fichier contient les réglages de configuration suivants : réglages MySQL,
 * préfixe de table, clefs secrètes, langue utilisée, et ABSPATH.
 * Vous pouvez en savoir plus à leur sujet en allant sur 
 * {@link http://codex.wordpress.org/fr:Modifier_wp-config.php Modifier
 * wp-config.php}. C'est votre hébergeur qui doit vous donner vos
 * codes MySQL.
 *
 * Ce fichier est utilisé par le script de création de wp-config.php pendant
 * le processus d'installation. Vous n'avez pas à utiliser le site web, vous
 * pouvez simplement renommer ce fichier en "wp-config.php" et remplir les
 * valeurs.
 *
 * @package WordPress
 */

// ** Réglages MySQL - Votre hébergeur doit vous fournir ces informations. ** //
/** Nom de la base de données de WordPress. */
define('WP_CACHE', true); //Added by WP-Cache Manager
define( 'WPCACHEHOME', 'C:\wamp\www\myriade\wp-content\plugins\wp-super-cache/' ); //Added by WP-Cache Manager
define('DB_NAME', 'myriade');

/** Utilisateur de la base de données MySQL. */
define('DB_USER', 'root');

/** Mot de passe de la base de données MySQL. */
define('DB_PASSWORD', '');

/** Adresse de l'hébergement MySQL. */
define('DB_HOST', 'localhost');

/** Jeu de caractères à utiliser par la base de données lors de la création des tables. */
define('DB_CHARSET', 'utf8mb4');

/** Type de collation de la base de données. 
  * N'y touchez que si vous savez ce que vous faites. 
  */
define('DB_COLLATE', '');

/**#@+
 * Clefs uniques d'authentification et salage.
 *
 * Remplacez les valeurs par défaut par des phrases uniques !
 * Vous pouvez générer des phrases aléatoires en utilisant 
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ le service de clefs secrètes de WordPress.org}.
 * Vous pouvez modifier ces phrases à n'importe quel moment, afin d'invalider tous les cookies existants.
 * Cela forcera également tous les utilisateurs à se reconnecter.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'YZ}MM47yH`q+[FMdzJWM<WC{@R*%K:RXATS-b|}<&8$lW2|US{fgge,TLXLt[WP+');
define('SECURE_AUTH_KEY',  'x]Oc8,zPX|M4z>#+8+/3%lqt[-e#R6/$0DBtsy$Xw7/z)DP9K,e tuMC&pl|Z}FW');
define('LOGGED_IN_KEY',    'to*Ob@@asTRKUk#G_;}h^z#*{jf%}yg8%w[thG?G/j`QG8E<B+RvE~B2jOt?,%dJ');
define('NONCE_KEY',        '2*}f*66fAy*E&B^bqS[&AXTyUR;N[%RP{SnYXLxxLfw6m4)9}%mT,AITDX&gALm;');
define('AUTH_SALT',        '57|ppcw,b!2,h@:xD61T<l(wEc;{+EoZX5{7{gS#Zy MR_|v+WLi)-^!Rg!7?LAM');
define('SECURE_AUTH_SALT', 'tP&hY^usGj06~MWcFsxU&Lil:zA9@0vr|mJVZ~6x^.2XuWw.MVNufj8Dp]rP~m8D');
define('LOGGED_IN_SALT',   '77|0o,$RK)I4sJx|`]=?Hj|n_DQo#tYQC+lbkv[PjH-s{`9i>tDsYnPXvy%6MmbA');
define('NONCE_SALT',       'UG=g5-ai_SNmss9U|Un1-e{|vt!q_EJ(EPm=k*$0WpZ!},0!TV^c;n9ew8{J?SzS');
/**#@-*/

/**
 * Préfixe de base de données pour les tables de WordPress.
 *
 * Vous pouvez installer plusieurs WordPress sur une seule base de données
 * si vous leur donnez chacune un préfixe unique. 
 * N'utilisez que des chiffres, des lettres non-accentuées, et des caractères soulignés!
 */
$table_prefix  = 'wp_';

/** 
 * Pour les développeurs : le mode deboguage de WordPress.
 * 
 * En passant la valeur suivante à "true", vous activez l'affichage des
 * notifications d'erreurs pendant votre essais.
 * Il est fortemment recommandé que les développeurs d'extensions et
 * de thèmes se servent de WP_DEBUG dans leur environnement de 
 * développement.
 */ 
define('WP_DEBUG', false); 

/* C'est tout, ne touchez pas à ce qui suit ! Bon blogging ! */

/** Chemin absolu vers le dossier de WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Réglage des variables de WordPress et de ses fichiers inclus. */
require_once(ABSPATH . 'wp-settings.php');