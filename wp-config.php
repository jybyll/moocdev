<?php
/**
 * La configuration de base de votre installation WordPress.
 *
 * Le script de création wp-config.php utilise ce fichier lors de l'installation.
 * Vous n'avez pas à utiliser l'interface web, vous pouvez directement
 * renommer ce fichier en "wp-config.php" et remplir les variables à la main.
 * 
 * Ce fichier contient les configurations suivantes :
 * 
 * * réglages MySQL ;
 * * clefs secrètes ;
 * * préfixe de tables de la base de données ;
 * * ABSPATH.
 * 
 * @link https://codex.wordpress.org/Editing_wp-config.php 
 * 
 * @package WordPress
 */

// ** Réglages MySQL - Votre hébergeur doit vous fournir ces informations. ** //
/** Nom de la base de données de WordPress. */
define('DB_NAME', 'moocdev');

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
define('AUTH_KEY',         '[ GD?a$VoDV6m},|b^<:Yr{c4A3Ri.@s:RFa=|?F%QgM=nzH>KzNfR$C(^0 |./|');
define('SECURE_AUTH_KEY',  ']XSK!h19jah>W+4)Kl)vY{c<TOf2j/cHYvujS`).mz|ayI>qU,M/5]PWKOt_o!-w');
define('LOGGED_IN_KEY',    '@D]6h}A#a+]uQhi`5Ce<O3E~;23jQ]E8nacD1%5|~t_:twb5~:^UI|`r-Yf<ED=S');
define('NONCE_KEY',        'Gx+ykGUDy*24+[,(as*ECJn?6pM-RL!njE%%gvH`9:mW^dqH?0%:ESAY,zI-OzjL');
define('AUTH_SALT',        '`r*-YZ| 8+#@`UWnM&M~TZ|2PRo)1yX=<Q0EDP`@:1+=:aZ;-t@nFHu];}U;wHi*');
define('SECURE_AUTH_SALT', 'E9lCgW_<&inZ{bz|5NRV]:LZ1Vs{ipgy8=b;v|<]^*k?2m-7uW?BMU_D0`^K}3CL');
define('LOGGED_IN_SALT',   ']|JfP`N:HW2+jM1/&fH?H8mU],`I(veUY5AZP.t$? I^Gr]Jw;x#6!1mKBS>SRDu');
define('NONCE_SALT',       'wCc9:M;]%|-5dDZyjZ.B,ukDv3bH>|pLR^OQlG!nk*KHZt+5lVJ Cds>@w+kFpgt');
/**#@-*/

/**
 * Préfixe de base de données pour les tables de WordPress.
 *
 * Vous pouvez installer plusieurs WordPress sur une seule base de données
 * si vous leur donnez chacune un préfixe unique. 
 * N'utilisez que des chiffres, des lettres non-accentuées, et des caractères soulignés!
 */
$table_prefix  = 'md_';

/** 
 * Pour les développeurs : le mode déboguage de WordPress.
 * 
 * En passant la valeur suivante à "true", vous activez l'affichage des
 * notifications d'erreurs pendant votre essais.
 * Il est fortemment recommandé que les développeurs d'extensions et
 * de thèmes se servent de WP_DEBUG dans leur environnement de 
 * développement.
 * 
 * Pour obtenir plus d'information sur les constantes 
 * qui peuvent être utilisée pour le déboguage, consultez le Codex.
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