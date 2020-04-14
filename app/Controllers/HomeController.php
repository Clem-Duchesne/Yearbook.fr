<?php 
//
// FICHIER : HomeController.php
//
namespace App\Controllers;

use App\Models\Yearbook;

class HomeController extends Controller
{

  public function index()
  { 
    $yearbooks = Yearbook::getInstance()->getFinished();

    if(count($yearbooks) > 0){
      $length = 1;
    }
    else{
      $length = 0;
    }

    $this->twig->display(
      'public/index.html.twig',
      [
          'yearbooks' => $yearbooks,
          'length' => $length
      ]
    );
  }
}