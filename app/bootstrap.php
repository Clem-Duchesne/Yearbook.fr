<?php
session_start();
//
// FICHIER :  / app / bootstrap.php
//

// intégrer COMPOSER
require 'vendor/autoload.php';
// charger les fichiers des constantes de configuration
require 'Config/config.php';
// les fonctions d'usage
require 'Libs/functions.php';


///////////////////////////////////////////////
/// Intégration des composants ////////////////
///////////////////////////////////////////////

//1** Gestion/Affichage des erreurs
$whoops = new \Whoops\Run;
if (DEV_MODE) {
  $whoops->pushHandler(new \Whoops\Handler\PrettyPageHandler);
} else {
  // enregistrement des erreurs dans le fichier
  //   app\Storage\error.log
  $whoops->pushHandler(function ($exception, $inspector, $run) {
    $errorFile = STORAGE_PATH . 'error.log';
    $output = date("Y-m-d H:i:s") . ' L' . $exception->getLine() . ' ' .
      $exception->getFile() . ':: ' . $exception->getMessage() . "\n" .
      file_get_contents($errorFile);
    file_put_contents($errorFile, $output);
  });
}
$whoops->register();


//2** Les vues TWIG
// spécifier le dossier des templates TWIG
$loader = new Twig_Loader_Filesystem( APP_PATH . 'Views' );
// paramètres de configuration de twig
$twig = new Twig_Environment( $loader, array(
  // le dossier du cache TWIG
  'cache' => STORAGE_PATH . 'cache' . DS . 'twig',
  // si false, les variables qui n'existent pas ne déclenchent pas d'erreur
  'strict_variables ' => false,
  // possibilité de debug
  'debug' => true
));
// composants additionnels pour le debug
$twig->addExtension(new Twig_Extension_Debug());
// ajouter une fonction url
$twig->addFunction(
  new Twig_Function( 'url', function ( $sz ) {
    return ROOT . '/' . $sz;
  })
);
// ajouter une fonction asset public
$twig->addFunction(
  new Twig_Function( 'assetP', function ( $asset ) {
    return ROOT . '/assetsPublic/' . $asset;
  })
);
// ajouter une fonction asset app
$twig->addFunction(
  new Twig_Function( 'assetA', function ( $asset ) {
    return ROOT . '/assetsApp/' . $asset;
  })
);
//
// date francaise
//
$twig->addFunction(
  new Twig_Function('frdate',function ($sqlTimestamp){
    $timestamp = strtotime($sqlTimestamp);
	return date('d/m/Y', $timestamp);
  })
);

//
// heure francaise
//
$twig->addFunction(
  new Twig_Function('frtime',function ($sqlTimestamp){
    $timestamp = strtotime($sqlTimestamp);
	return date('H:i:s', $timestamp);
  })
);

//
// str_replace($toto, $what, $with) dans twig
//
$twig->addFunction(
  new Twig_Function('str_replace',function ($string, $search, $replace){
    $stringR = str_replace("$search","$replace","$string");
	return $stringR;
  })
);

//
// r($toto) dans twig
//
$twig->addFunction(
  new Twig_Function('r',function ($thing){
    $r = r($thing);
	return $r;
  })
);

$twig->addFunction(
  new Twig_Function('edit',function ($link){
    return ROOT . '/backoffice/' . $link . '/edit';
  })
);

//3** le routeur
require 'router.php';

