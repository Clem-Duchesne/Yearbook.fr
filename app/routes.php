<?php 
//
// FICHIER : routes.php
//

// --- la page d'accueil
$route->addRoute( 'GET',  '/',  'HomeController@index' );

// --- Login
$route->addRoute( 'GET',  '/login',  'AdminController@login' );
$route->addRoute( 'POST',  '/login',  'AdminController@loginCheck' );
$route->addRoute('GET', '/delog' , 'AdminController@delog');

// --- Super Administrateur

$route->addRoute( 'GET',  '/app/admin',  'AdminController@index' );
$route->addRoute('POST', '/app/admin/add' , 'AdminController@add');
$route->addRoute('GET', '/app/admin/delete/{id:[0-9]+}' , 'AdminController@delete');
$route->addRoute('GET', '/app/yearbook/init' , 'AdminController@yearbookInit');


// --- Configuration 
$route->addRoute( 'GET',  '/app/configuration',  'ConfigurationController@index' );
$route->addRoute( 'POST',  '/app/configuration/add',  'ConfigurationController@add' );


// -- Action Etudiant
$route->addRoute( 'GET',  '/app/configuration/editEtu/{id:[0-9]+}',  'ConfigurationController@editEtu' );
$route->addRoute( 'POST',  '/app/configuration/editEtu/{id:[0-9]+}',  'ConfigurationController@editEtuSave' );
$route->addRoute( 'GET',  '/app/configuration/deleteEtu/{id:[0-9]+}',  'ConfigurationController@deleteEtu' );


// -- Action Equipe
$route->addRoute( 'GET',  '/app/configuration/editEqui/{id:[0-9]+}',  'ConfigurationController@editEqui' );
$route->addRoute( 'POST',  '/app/configuration/editEqui/{id:[0-9]+}',  'ConfigurationController@editEquiSave' );
$route->addRoute( 'GET',  '/app/configuration/deleteEqui/{id:[0-9]+}',  'ConfigurationController@deleteEqui' );

// --- Choix
$route->addRoute( 'GET',  '/app/choix',  'ChoixController@index' );

$route->addRoute( 'POST',  '/app/choix/fond/add',  'ChoixController@addFond' );

$route->addRoute( 'GET',  '/app/choix/fond/delete/{id:[0-9]+}',  'ChoixController@deleteFond' );

$route->addRoute( 'POST',  '/app/choix/police/add',  'ChoixController@addPolice' );

// --- Etape 3
$route->addRoute( 'GET',  '/app/creation',  'CreationController@index' );
$route->addRoute( 'POST',  '/app/creation/add/image',  'CreationController@addImage' );
$route->addRoute('GET', '/app/creation/save', 'CreationController@save');
$route->addRoute('POST', '/app/creation/save/img', 'CreationController@saveImg');
$route->addRoute('POST', '/app/creation/save/background', 'CreationController@saveBg');


$route->addRoute('GET', '/app/creation/test', 'CreationController@test');


