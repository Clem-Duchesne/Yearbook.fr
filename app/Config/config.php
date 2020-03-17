<?php
//
// FICHIER : mmi-event-app/Config/config.php
//

// si machine=localhost alors on est en développement
if ( $_SERVER['SERVER_NAME'] === 'localhost' ) {
  include 'config.local.php';
  define( 'DEV_MODE', true );
} else {
  include 'config.prod.php';
  define( 'DEV_MODE', false );
}

/** séparateur entre dossiers */
define('DS', DIRECTORY_SEPARATOR);

/** Chemin absolu vers le dossier du projet. */
define('ROOT_PATH', realpath(__DIR__ . DS . '..' . DS . '..') . DS);

/** chemins absolus   
      o vers le dossier de l'application 
      o vers le dossier des stockages
      o vers le dossier des ressources
  */
define('APP_PATH', ROOT_PATH . 'app' . DS);
define( 'STORAGE_PATH', APP_PATH . 'Storage' . DS );
define('ASSETS_APP_PATH', ROOT_PATH . 'www' . DS . 'yearbook' . DS . 'assetsApp' . DS);
define('ASSETS_PUBLIC_PATH', ROOT_PATH . 'www' . DS . 'yearbook' . DS . 'assetsPublic' . DS);

define('ROOT_URL', str_replace('/index.php', '', $_SERVER['SCRIPT_NAME']));

/* URL complète de l'application en http:// ou https:// */
define('ROOT', (stripos($_SERVER['SERVER_PROTOCOL'], 'https') === false ? 'http' : 'https') .
                '://' . 
                $_SERVER['SERVER_NAME'] . 
                ':' .
                $_SERVER['SERVER_PORT'] .  ROOT_URL);


