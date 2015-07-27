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
define('DB_NAME', 'fredericlesca');

/** Utilisateur de la base de données MySQL. */
define('DB_USER', 'fredericlesca');

/** Mot de passe de la base de données MySQL. */
define('DB_PASSWORD', 'fredericlesca33');

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
define('AUTH_KEY',         '&d$46IFq_v<%{$s7+n0 Wi_W_Jt+V=SBEE1E_|>en7}}7S>:z@P6g+V8dO0xr6OB');
define('SECURE_AUTH_KEY',  '$Hziw0r,x&V0lye29GuKl+:WdLz:7:0^U_-Ps:_{sVUV+(Mtyp6MQ7*hE@lJ/Yjk');
define('LOGGED_IN_KEY',    '];lBXJ5u}BrZ||$&0-|[0}[9Q:pM41]UN|g+j ?^`_hevoP9YiM86v@y>GaS=:3D');
define('NONCE_KEY',        'Mk<TZf&,Vy-#ZAr!X+K!WmlAdimOG2ls~?|@BX9M[Yk#_K+/0T$ArdVpF[!%U#yN');
define('AUTH_SALT',        '|FPvNl|p%(d#6Ea/5|y#-D0lT/v82&2H+MFB.C!H.$i-8X$PgD,Cblj1~Xl)XFi*');
define('SECURE_AUTH_SALT', ';|7l{YlOlCl;EnaAq)f|ve8$Hbg9)kq|(W?pT n)lA-z!3Z)~SPjV:Lz|R&S~|W>');
define('LOGGED_IN_SALT',   'Sn&7<jv-|-/Y!|V+?#IMLX+w[/M B,l^t~$b&uvdg=j^G+kn%&|`:DRy_!F6.*34');
define('NONCE_SALT',       'mSEoBS<TQl4M+(z,9&6EX`&^v;qGN,{cf|r>h5[cOoM!TmOiMC|@OGg2/(K+z3v^');
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