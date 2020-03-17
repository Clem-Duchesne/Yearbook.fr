<?php 
//
// FICHIER : HomeController.php
//
namespace App\Controllers;

class HomeController extends Controller
{

  public function index()
  { 
    $this->twig->display(
      'public/index.html.twig',[
      ]
    );
  }
}