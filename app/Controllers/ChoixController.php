<?php 
//
// FICHIER : choixController.php
//
namespace App\Controllers;
use App\Models\Fond;
use App\Models\Police;

class ChoixController extends Controller
{

  public function index()
  { 
    $this->twig->display(
      'app/choix/index.html.twig',[
        'step' => 2, 
        //'police' => Police::getInstance()->getAll(),
        'fonds' => Fond::getInstance()->getMini(),
      ]
    );
  }

  public function addFond(){
    Fond::getInstance()->addWhitImage($_POST);
		redirect( '/app/choix' );
  }

  public function deleteFond($id){
    $datas = Fond::getInstance()->get($id);
  
    if(file_exists(ASSETS_APP_PATH.'/img/fond/mini/'.$datas['illustration_mini'])){
      unlink(ASSETS_APP_PATH.'/img/fond/mini/'.$datas['illustration_mini']);
    }
    if(file_exists(ASSETS_APP_PATH.'/img/fond/larg/'.$datas['illustration_larg'])){
      unlink(ASSETS_APP_PATH.'/img/fond/larg/'.$datas['illustration_larg']);
    }
    Fond::getInstance()->delete($id);
    redirect( '/app/choix' );
  }

  public function addPolice(){
    Police::getInstance()->add($_POST);
    redirect( '/app/choix' );
  }
}