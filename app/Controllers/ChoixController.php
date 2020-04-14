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
    
    $_POST['html'] = str_replace('" rel="stylesheet">', '',$_POST['html']);
    $_POST['html'] = str_replace('<link href="', '', $_POST['html']);
    $_POST['fontname'] = str_replace("https://fonts.googleapis.com/css2?family=", '', $_POST['html']);
    if(strpos($_POST['fontname'], ':wght@')){
      for($i=1;$i<8;$i++){
        $char = ':wght@' . $i *100;
        if(strpos($_POST['fontname'], $char)){
          $_POST['fontname'] = str_replace($char, '', $_POST['fontname']);
        }
      }
    }
    $_POST['fontname'] = str_replace('&display=swap', '', $_POST['fontname']);
    $_POST['fontname'] = str_replace('+', ' ', $_POST['fontname']);
    $_POST['fontname_min'] = strtolower(str_replace(' ','',$_POST['fontname']));
    $_POST['content'] = str_replace('data:application/octet-stream;base64,', '', $_POST['content']);
    Police::getInstance()->addPolice($_POST);
    redirect( '/app/choix' );
  }
}