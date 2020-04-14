<?php 
//
// FICHIER :  / Controllers / Controller.php
//
namespace App\Controllers;
use App\Models\Yearbook;

class Controller {

  protected $twig;

  function __construct() 
  {
    global $twig;
    $this->twig = $twig;
    $_SESSION['id_yearbook'] = Yearbook::getInstance()->getActif()['id'];
  }
  
  
  
}
