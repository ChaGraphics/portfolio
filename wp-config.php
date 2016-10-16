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
define('DB_NAME', 'chagraphpn12358');

/** Utilisateur de la base de données MySQL. */
define('DB_USER', 'chagraphpn12358');

/** Mot de passe de la base de données MySQL. */
define('DB_PASSWORD', 'PaScSm12358');

/** Adresse de l'hébergement MySQL. */
define('DB_HOST', 'chagraphpn12358.mysql.db');

/** Jeu de caractères à utiliser par la base de données lors de la création des tables. */
define('DB_CHARSET', 'utf8');

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
define('AUTH_KEY',         'avQLi4%6iWar(Q+QjRpF!tq}{Ik-D9P.eVbIh()**D{f#8Q6`(M_#<YQp<1?<];f');
define('SECURE_AUTH_KEY',  'mvos7LZwIECGfjqjr5+W`CJhZ|Ps1Z$n=7pU9ho_^4W=-44.`OTA0rN)eb!^sp`0');
define('LOGGED_IN_KEY',    'MS~VP8RI*|QSfF*08&]C7btG~h:w*ml{bbw+rqP4^8cIT(l2-[^9Taz6-IZ,mz6k');
define('NONCE_KEY',        'CD7cB}(eZj{T.&lcm%thPO8/9u 0n ahnKD/N2*<N]&*Mj1*<kI>VL8Z(%txdN|g');
define('AUTH_SALT',        'an.2,6;,VIL=uhBfGW<3ho@c`|O5~>B3qx<|}1X!vl|~)t1QgJ-KEPNtxDGq]0r{');
define('SECURE_AUTH_SALT', 'w-=<|,.5q(zKId[ea6c>aZd1-y=`T76sqg}Nbps}OTJ,<f4^o-wFA5+Rz#Oo;F=R');
define('LOGGED_IN_SALT',   'h9:F*jS#DlOF.8u*!v.|7_t S_=_A>>N^nTo]dSu5i_ta1U0NOEvu(D~R)IX|JBw');
define('NONCE_SALT',       'z.e9oa{(Vl$_X(;Dj`.9{BK/qB(a)Bp21$B[z%t[o@1?emJs}$,VA}=<};Qk-Dg!');
/**#@-*/

/**
 * Préfixe de base de données pour les tables de WordPress.
 *
 * Vous pouvez installer plusieurs WordPress sur une seule base de données
 * si vous leur donnez chacune un préfixe unique.
 * N'utilisez que des chiffres, des lettres non-accentuées, et des caractères soulignés!
 */
$table_prefix  = 'cha_graphics_';

/**
 * Pour les développeurs : le mode déboguage de WordPress.
 *
 * En passant la valeur suivante à "true", vous activez l'affichage des
 * notifications d'erreurs pendant vos essais.
 * Il est fortemment recommandé que les développeurs d'extensions et
 * de thèmes se servent de WP_DEBUG dans leur environnement de
 * développement.
 *
 * Pour plus d'information sur les autres constantes qui peuvent être utilisées
 * pour le déboguage, rendez-vous sur le Codex.
 * 
 * @link https://codex.wordpress.org/Debugging_in_WordPress 
 */
define('WP_DEBUG', false);

/* C'est tout, ne touchez pas à ce qui suit ! Bon blogging ! */

/** Chemin absolu vers le dossier de WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Réglage des variables de WordPress et de ses fichiers inclus. */
require_once(ABSPATH . 'wp-settings.php');