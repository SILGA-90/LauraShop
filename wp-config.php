<?php

/**
 * La configuration de base de votre installation WordPress.
 *
 * Ce fichier est utilisé par le script de création de wp-config.php pendant
 * le processus d’installation. Vous n’avez pas à utiliser le site web, vous
 * pouvez simplement renommer ce fichier en « wp-config.php » et remplir les
 * valeurs.
 *
 * Ce fichier contient les réglages de configuration suivants :
 *
 * Réglages MySQL
 * Préfixe de table
 * Clés secrètes
 * Langue utilisée
 * ABSPATH
 *
 * @link https://fr.wordpress.org/support/article/editing-wp-config-php/.
 *
 * @package WordPress
 */

// ** Réglages MySQL - Votre hébergeur doit vous fournir ces informations. ** //
/** Nom de la base de données de WordPress. */
define( 'DB_NAME', 'laurashop' );

/** Utilisateur de la base de données MySQL. */
define( 'DB_USER', 'root' );

/** Mot de passe de la base de données MySQL. */
define( 'DB_PASSWORD', '' );

/** Adresse de l’hébergement MySQL. */
define( 'DB_HOST', 'localhost' );

/** Jeu de caractères à utiliser par la base de données lors de la création des tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/**
 * Type de collation de la base de données.
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
define( 'AUTH_KEY',         'IMQvrXI{B2cmQn.{j!4b7;l7x`K -%tPv?A6ot7: hgz2,A=QVee{=xK@q)tDX8Q' );
define( 'SECURE_AUTH_KEY',  '8x>*@$a7}$pb;Oq.fm0(NzEB[.,0N}m+1:l0b3NzZIjn/+r|uz=3aZiazyv&:e8C' );
define( 'LOGGED_IN_KEY',    'x2Ue`UU#M T5PbLiqx-`u}Z4&Gn4%pL3Kmr,.!w|*%F4g}h?QN-c+{ NXiT-.^81' );
define( 'NONCE_KEY',        '@7d9Tl6ZN9lGoyg:f+7yL#NK0~c}23is&reTxdRGec89o/EWKzl|leAIad1wj55p' );
define( 'AUTH_SALT',        'utK5P$:tlwQpU0lLQHBUmu*C)pvsH|v4rV,1v;}Ay1l&`7N<J^5ZA3wF|f#iw7O#' );
define( 'SECURE_AUTH_SALT', 'kKJcJ$ bwZxa(O`-!iJrmP;i|a;jsZ-,W^X}+-ee!K%rOjUm{m _9A_.PXrF-suj' );
define( 'LOGGED_IN_SALT',   'T/)Vco3y^Oiql?T_tz=%zq{)MdI85b4Yo;raNEsAxHkug4s+Xq+TM==s}y=fEPVo' );
define( 'NONCE_SALT',       '!}7c3[i3>{(a>5AQxhDsOItK3:hVSb,|9l5JMjzYBM<<D{vWTyRm;{+>mD6:6KF5' );
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
 * Pour les développeurs : le mode déboguage de WordPress.
 *
 * En passant la valeur suivante à "true", vous activez l’affichage des
 * notifications d’erreurs pendant vos essais.
 * Il est fortement recommandé que les développeurs d’extensions et
 * de thèmes se servent de WP_DEBUG dans leur environnement de
 * développement.
 *
 * Pour plus d’information sur les autres constantes qui peuvent être utilisées
 * pour le déboguage, rendez-vous sur le Codex.
 *
 * @link https://fr.wordpress.org/support/article/debugging-in-wordpress/
 */
define('WP_DEBUG', false);

/* C’est tout, ne touchez pas à ce qui suit ! Bonne publication. */

/** Chemin absolu vers le dossier de WordPress. */
if (!defined('ABSPATH'))
  define('ABSPATH', dirname(__FILE__) . '/');

/** Réglage des variables de WordPress et de ses fichiers inclus. */
require_once(ABSPATH . 'wp-settings.php');
