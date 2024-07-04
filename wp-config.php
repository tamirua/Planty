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
define( 'DB_NAME', 'Planty' );

/** Utilisateur de la base de données MySQL. */
define( 'DB_USER', 'root' );

/** Mot de passe de la base de données MySQL. */
define( 'DB_PASSWORD', '' );

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
define( 'AUTH_KEY',         '-vR941ME,tqW8rB2+l!cFQ):ZQU_sAIa[%.u3k8C=RNl[L14_{}=U7[rA;a.H!]Z' );
define( 'SECURE_AUTH_KEY',  '&cIjn .VjM9>c#6|T)t .?Q2!vRLXQ=8=.[$H~mf1Gioy*xly$W4ZYnBYvaJ]e@e' );
define( 'LOGGED_IN_KEY',    'iPNnNxBu82JJ{>S-5VWj,EnYu+/d{C/,:^0`fYJ{Cvg}PPcEQn{TjwMDCC`||TuB' );
define( 'NONCE_KEY',        '^q*dY{<,mjj;kvg%|U ~_g^6=KzP@]eEURPkeK=WU-{| R[MT8:Eb)OG@LALk-OG' );
define( 'AUTH_SALT',        'dNk;2nJ!oo3?:|{}n+dKC7L,J)Ja=J.;@GVVB<f/=qjXUjq(EcD9j*x<OlTKHhL~' );
define( 'SECURE_AUTH_SALT', '`A;<b1R]4%%2Eg  .T.*RA8xp>+ANPJH)LjAO!W<4*>ZYaXvYV~M#@_Kr,21[xvD' );
define( 'LOGGED_IN_SALT',   '^~n&qH!J5No&`C]e2`,AmjYem^O6+%j@/NIAS<<CdT*EOY.F=yNvi}=Mg>Z:1*Cz' );
define( 'NONCE_SALT',       'L#)_ 5KsDeK7CE7lE4E+6aM|x8[So#]BsR~Toe?3xD_Jhw!T8K;=vva2G:V+(la>' );
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
