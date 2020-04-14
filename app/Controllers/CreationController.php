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
use App\Models\Layout;
use App\Models\Page;
use App\Models\Pages_layout_cellule_content;


class CreationController extends Controller
{

  public function index()
  {
    if(isLogin()){
      $polices = Police::getInstance()->getAll();
      $_SESSION['polices'] = $polices;

      $content = [];
      $plcc = Pages_layout_cellule_content::getInstance()->getAll();
      $layouts = Layout::getInstance()->getAll();
      $nLayout = count($layouts);
      $n = count($plcc);
      for ($i = 0; $i < $n; $i++) {
        $content[$i]['pages_id'] = $plcc[$i]['pages_id'];
        $layout = Layout::getInstance()->get($plcc[$i]['layout_id']);
        $cellule = Cellule::getInstance()->get($plcc[$i]['cellule_id']);

        $content[$i]['layout'] = $layout['css_id'];
        if ($cellule["data-image"] == NULL) {
          $content[$i]['cellule'] = $cellule['data-style'];
          $text = Texte::getInstance()->get($plcc[$i]['text_id']);
          $content[$i]['text'] = $text['content'];
          //$font = explode(" ", $text['font']);
          $content[$i]['content'] = $text['content'];
          //if (count($font) > 1) {
          //$content[$i]['font'] = $font[0] . " " . $font[1];
          //} else {
          $content[$i]['font'] = $text['font'];
          //}
        } else {
          $content[$i]['cellule'] = $cellule['data-image'];
          $image = Image::getInstance()->get($plcc[$i]['image_id']);
          $content[$i]['image'] = $image['image_mini'];
        }
      }
      $pages = Page::getInstance()->getAll();
      $nPage = count($pages);
      for ($i = 0; $i < $nPage; $i++) {
        $fond = Fond::getInstance()->getOneMini($pages[$i]['fond_id']);
        $pages[$i]['fond'] = $fond['illustration_mini'];
      }

      for ($i = 0; $i < $nPage; $i++) {
        for ($j = 0; $j < $n; $j++) {
          if ($plcc[$j]['pages_id'] == $pages[$i]['id']) {
            $layout_id = $plcc[$j]['layout_id'];
            $pages[$i]['touched'] = true;
            for ($k = 0; $k < $nLayout; $k++) {
              if ($layout_id == $layouts[$k]['id']) {
                $pages[$i]['layout'] = $layouts[$k]['css_id'];
              }
            }
          } else {
            $pages[$i]['layout'] = 'layout3';
          }
        }
        if($pages[$i]['fond'] != null){
          $pages[$i]['touched'] = true;
        }
      }
      
      $images = Image::getInstance()->getMini();
      $nbImages = count($images);
      for ($i = 0; $i < $nbImages; $i++) {
          for ($j = 0; $j < $n; $j++) {
              if ($plcc[$j]['image_id'] == $images[$i]['id']) {
                $images[$i]['used'] = true;
              }
          }
      }
      
      
      $this->twig->display(
        'app/creation/index.html.twig',
        [
          'step' => 3,
          'polices' => Police::getInstance()->getAll(),
          'fonds' => Fond::getInstance()->getMini(),
          'images' => $images,
          'etudiants' => Etudiant::getInstance()->getAll(),
          'equipes' => EquipeDepartement::getInstance()->getAll(),
          'pages' => $pages,
          'contents' => $content,
          'yearbook' => Yearbook::getInstance()->get($_SESSION['id_yearbook']),
          //Codage json array to string for input
          'serialize_polices' => json_encode($polices)
          /*
          'Yearbook' => Yearbook::getInstance()->getAll()
          */
        ]
      );
    }
  }
  public function addImage()
  {
    if(isLogin()){
      Image::getInstance()->addWithImage();
      $thisImageId = Image::getInstance()->getLastInsertId();
      Apparait::getInstance()->addAll($_POST, $thisImageId);
      redirect('/app/creation');
    }
  }

  public function deleteImage($id)
  {
    if(isLogin()){
      $datas = Fond::getInstance()->get($id);

      if (file_exists(ASSETS_APP_PATH . '/img/photo/mini/' . $datas['image_mini'])) {
        unlink(ASSETS_APP_PATH . '/img/photo/mini/' . $datas['image_mini']);
      }
      if (file_exists(ASSETS_APP_PATH . '/img/photo/larg/' . $datas['image_larg'])) {
        unlink(ASSETS_APP_PATH . '/img/photo/larg/' . $datas['image_larg']);
      }
      Image::getInstance()->delete($id);
      redirect('/app/creation');
    }
  }

  public function save()
  {
    if(isLogin()){
      $content = $_GET['content'];
      $font = $_GET['font'];
      $cellule = $_GET['data-style'];
      $layout = $_GET['layout'];
      $pages = $_GET['pages'];

      $datas_text = ['content' => $content, 'font' => $font, 'id_yearbook' => $_SESSION['id_yearbook']];
      $id_yearbook = $_SESSION['id_yearbook'];
      $cellule_id = Cellule::getInstance()->getId($cellule);
      $layout_id = Layout::getInstance()->getId($layout);
      $pages_id = Page::getInstance()->getId($pages);

      if (Pages_layout_cellule_content::getInstance()->getOne($cellule_id['id'], $id_yearbook, $layout_id['id'], $pages_id['id'])) {
        $id = Pages_layout_cellule_content::getInstance()->getTextId($cellule_id['id'],$id_yearbook, $layout_id['id'], $pages_id['id']);
        Texte::getInstance()->delete($id);
        Texte::getInstance()->add($datas_text);
        $text_id = Texte::getInstance()->getId($content);
        $new = ['cellule_id' => $cellule_id['id'], 'text_id' => $text_id['id'],'yearbook_id' => $id_yearbook, 'layout_id' => $layout_id['id'], 'pages_id' => $pages_id['id']];
        Pages_layout_cellule_content::getInstance()->add($new);

      } else {
        Texte::getInstance()->add($datas_text);
        $text_id = Texte::getInstance()->getId($content);
        $new = ['cellule_id' => $cellule_id['id'], 'text_id' => $text_id['id'],'yearbook_id' => $id_yearbook, 'layout_id' => $layout_id['id'], 'pages_id' => $pages_id['id']];
        Pages_layout_cellule_content::getInstance()->add($new);
      }
    }
  }

  public function saveImg()
  {
    if(isLogin()){
      $img = $_POST['img'];
      $page = $_POST['page'];
      $cellule = $_POST['cellule'];
      $layout = $_POST['layout'];
      $img = explode('/', $img);

      $n = count($img);
      for ($i = 0; $i <= $n; $i++) {
        if ($i == $n - 1) {
          $img = $img[$i];
        }
      }
      $id_yearbook = $_SESSION['id_yearbook'];
      $img_id = Image::getInstance()->getId($img);
      $cellule_id = Cellule::getInstance()->getIdImg($cellule);
      $layout_id = Layout::getInstance()->getId($layout);
      $page_id = Page::getInstance()->getId($page);

      $new = ['cellule_id' => $cellule_id['id'], 'yearbook_id' => $id_yearbook, 'image_id' => $img_id['id'], 'layout_id' => $layout_id['id'], 'pages_id' => $page_id['id']];

      if (Pages_layout_cellule_content::getInstance()->getOne($cellule_id['id'], $id_yearbook, $layout_id['id'], $page_id['id'])) {
        $id = Pages_layout_cellule_content::getInstance()->getImgId($cellule_id['id'], $id_yearbook, $layout_id['id'], $page_id['id']);
        Pages_layout_cellule_content::getInstance()->deleteWithImg($id, $id_yearbook, $cellule_id['id'],  $layout_id['id'], $page_id['id']);
        Pages_layout_cellule_content::getInstance()->add($new);
      } else {
        Pages_layout_cellule_content::getInstance()->add($new);
      }
    }
  }

  public function saveBg()
  {
    if(isLogin()){
        $fond = $_POST['fond'];
        $page = $_POST['page'];

        $fond = explode('/', $fond);
        $n = count($fond);

        for ($i = 0; $i <= $n; $i++) {
          if ($i == $n - 1) {
            $fond = $fond[$i];

            $fond_id = Fond::getInstance()->getId($fond);
            $page_id = Page::getInstance()->getId($page);

            if ($fond_id != false) {
              $datas = ['fond_id' => $fond_id['id']];

              Page::getInstance()->update($page_id['id'], $datas);
            }
          }
        }   
    }
  }

  public function removeImg(){
    if(isLogin()){
      $layout = $_POST['layout'];
      $page = $_POST['page'];
      $cellule = $_POST['cellule'];
      $id_yearbook = $_SESSION['id_yearbook'];
    
      $cellule_id = Cellule::getInstance()->getIdImg($cellule);
      $layout_id = Layout::getInstance()->getId($layout);
      $page_id = Page::getInstance()->getId($page);

      if (Pages_layout_cellule_content::getInstance()->getOne($cellule_id['id'], $id_yearbook, $layout_id['id'], $page_id['id'])) {
      Pages_layout_cellule_content::getInstance()->deleteWhereImg($cellule_id['id'], $layout_id['id'], $page_id['id']);
      }

      
    }
  }

  public function addPage(){
    $pages = Page::getInstance()->getAll();
    $nbPage = count($pages);
    $lastPage = $pages[$nbPage - 1];
    $lastPageNumber = explode("page", $pages[$nbPage - 1]["pages_number"])[1];
    $id_yearbook = $_SESSION['id_yearbook'];
    for($i = 1;$i<=2;$i++){
      $pageNumber = (int)$lastPageNumber + $i;
    
      $datas = ['pages_number' =>'page'.$pageNumber,'id_yearbook' => $id_yearbook];
      page::getInstance()->add($datas);
    }
    redirect( '/app/creation' );

  }
}
