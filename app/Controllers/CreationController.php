<?php 
//
// FICHIER : choixController.php
//
namespace App\Controllers;

use App\Models\Apparait;
use App\Models\Fond;
use App\Models\EquipeDepartement;
use App\Models\Etudiant;
use App\Models\Yearbook;
use App\Models\Police;
use App\models\Image;
use App\Models\Texte;
use App\Models\Cellule;
Use App\Models\Layout;
use App\Models\Page;
use App\Models\Pages_layout_cellule_content;


class CreationController extends Controller
{

  public function index()
  { 
    $polices = Police::getInstance()->getAll();
    $_SESSION['polices'] = $polices;

    $content = [];
    $plcc = Pages_layout_cellule_content::getInstance()->getAll();
    $layouts = Layout::getInstance()->getAll();
    $nLayout = count($layouts);
    $n = count($plcc);
    for($i = 0; $i < $n; $i++){
      $content[$i]['pages_id'] = $plcc[$i]['pages_id'];
      $layout = Layout::getInstance()->get($plcc[$i]['layout_id']);
      $cellule = Cellule::getInstance()->get($plcc[$i]['cellule_id']);
      
      $content[$i]['layout'] = $layout['css_id'];
      if($cellule["data-image"] == NULL){
        $content[$i]['cellule'] = $cellule['data-style'];
        $text = Texte::getInstance()->get($plcc[$i]['text_id']);
        $content[$i]['text'] = $text['content'];
      }
      else{
        $content[$i]['cellule'] = $cellule['data-image'];
        $image = Image::getInstance()->get($plcc[$i]['image_id']);
        $content[$i]['image'] = $image['image_mini'];
      }
      
    }
    $pages = Page::getInstance()->getAll();
    $nPage = count($pages);
    for($i = 0; $i < $nPage; $i++){
      $fond = Fond::getInstance()->getOneMini($pages[$i]['fond_id']);
      $pages[$i]['fond'] = $fond['illustration_mini'];
    }

    for($i = 0;$i<$nPage;$i++){
      for($j = 0;$j < $n;$j++){
        if($plcc[$j]['pages_id'] == $pages[$i]['id']){
          $layout_id = $plcc[$j]['layout_id'];
          for($k = 0; $k < $nLayout; $k++){
            if($layout_id == $layouts[$k]['id']){
              $pages[$i]['layout'] = $layouts[$k]['css_id'];
            }
          }
        }else{
          $pages[$i]['layout'] = 'layout3';
        }
      }
    }

    
    $this->twig->display(
      'app/creation/index.html.twig',[
        'step' => 3, 
        'polices' => Police::getInstance()->getAll(),
        'fonds' => Fond::getInstance()->getMini(),
        'images' => Image::getInstance()->getMini(),
        'etudiants' => Etudiant::getInstance()->getAll(),
        'equipes' => EquipeDepartement::getInstance()->getAll(),
        'pages' => $pages,
        'contents' => $content,
        //Codage json array to string for input
        'serialize_polices' => json_encode($polices)
        /*
        'Yearbook' => Yearbook::getInstance()->getAll()
        */
      ]
    );
  }

  public function addImage(){
    Image::getInstance()->addWithImage();
    $thisImageId = Image::getInstance()->getLastInsertId();
    Apparait::getInstance()->addAll($_POST, $thisImageId);
		redirect( '/app/creation' );
  }

  public function deleteImage($id){
    $datas = Fond::getInstance()->get($id);
  
    if(file_exists(ASSETS_APP_PATH.'/img/photo/mini/'.$datas['image_mini'])){
      unlink(ASSETS_APP_PATH.'/img/photo/mini/'.$datas['image_mini']);
    }
    if(file_exists(ASSETS_APP_PATH.'/img/photo/larg/'.$datas['image_larg'])){
      unlink(ASSETS_APP_PATH.'/img/photo/larg/'.$datas['image_larg']);
    }
    Image::getInstance()->delete($id);
    redirect( '/app/creation' );
  }

  public function save(){
    $content = $_GET['content'];
    $font = $_GET['font'];
    $cellule = $_GET['data-style'];
    $layout = $_GET['layout'];
    $pages = $_GET['pages'];

    $datas_text = ['content' => $content, 'font' => $font];

    $cellule_id = Cellule::getInstance()->getId($cellule);
    $layout_id = Layout::getInstance()->getId($layout);
    $pages_id = Page::getInstance()->getId($pages);
    
    if(Pages_layout_cellule_content::getInstance()->getOne($cellule_id['id'], $layout_id['id'], $pages_id['id'])){
      $id = Pages_layout_cellule_content::getInstance()->getTextId($cellule_id['id'], $layout_id['id'], $pages_id['id']);
      Texte::getInstance()->update($id, $datas_text);
    }
    else{
      Texte::getInstance()->add($datas_text);
      $text_id = Texte::getInstance()->getId($content);
      $new = ['cellule_id' => $cellule_id['id'], 'text_id' => $text_id['id'], 'layout_id' => $layout_id['id'], 'pages_id' => $pages_id['id'] ];
      Pages_layout_cellule_content::getInstance()->add($new);
    }

  }

  public function saveImg(){
    $img = $_POST['img'];
    $page = $_POST['page'];
    $cellule = $_POST['cellule'];
    $layout = $_POST['layout'];

    $img = explode('/', $img);
    
    $n = count($img);
    for($i = 0; $i <= $n; $i++){
      if($i == $n -1){
        $img = $img[$i];
      }
    }

    $img_id = Image::getInstance()->getId($img);
    $cellule_id = Cellule::getInstance()->getIdImg($cellule);
    $layout_id = Layout::getInstance()->getId($layout);
    $page_id = Page::getInstance()->getId($page);

    $new = ['cellule_id' => $cellule_id['id'], 'image_id' => $img_id['id'], 'layout_id' => $layout_id['id'], 'pages_id' => $page_id['id'] ];
 
    if(Pages_layout_cellule_content::getInstance()->getOne($cellule_id['id'], $layout_id['id'], $page_id['id'])){
      $id = Pages_layout_cellule_content::getInstance()->getImgId($cellule_id['id'], $layout_id['id'], $page_id['id']);
      Pages_layout_cellule_content::getInstance()->deleteWithImg($id, $cellule_id['id'], $layout_id['id'], $page_id['id']);
      Pages_layout_cellule_content::getInstance()->add($new);
    }
    else{
      Pages_layout_cellule_content::getInstance()->add($new);
    }

  }

  public function saveBg(){
    $fond = $_POST['fond'];
    $page = $_POST['page'];

    $fond = explode('/', $fond);
    $n = count($fond);
    
    for($i = 0; $i <= $n; $i++){
      if($i == $n - 1){
        $fond = $fond[$i];

        $fond_id = Fond::getInstance()->getId($fond);
        $page_id = Page::getInstance()->getId($page);

        if($fond_id != false){
          $datas = ['fond_id' => $fond_id['id']];

          Page::getInstance()->update($page_id['id'], $datas);
        }

      }
    }
   
   header( 'Content-Type: application/json' );
	    echo json_encode([
        $fond
	]);

  }
}
