<?php 
//
// FICHIER : ExportController.php
//
namespace App\Controllers;

use App\Models\Admin;
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

class ExportController extends Controller
{

  public function index()
  {
      if (isLogin()) {
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
              if ($cellule["data-image"] == null) {
                  $content[$i]['cellule'] = $cellule['data-style'];
                  $text = Texte::getInstance()->get($plcc[$i]['text_id']);
                  $content[$i]['text'] = $text['content'];
                  $font = explode(" ", $text['font']);
                  $content[$i]['content'] = $text['content'];
                  if (count($font) > 1) {
                      $content[$i]['font'] = $font[0] . " " . $font[2];
                  } else {
                      $content[$i]['font'] = $font[0];
                  }
              } else {
                  $content[$i]['cellule'] = $cellule['data-image'];
                  $image = Image::getInstance()->get($plcc[$i]['image_id']);
                  $content[$i]['image'] = $image['image_larg'];
              }
          }
          $pages = Page::getInstance()->getAll();
          $nPage = count($pages);
          for ($i = 0; $i < $nPage; $i++) {
              $fond = Fond::getInstance()->getOneLarg($pages[$i]['fond_id']);
              $pages[$i]['fond'] = $fond['illustration_larg'];
          }

          for ($i = 0;$i<$nPage;$i++) {
              for ($j = 0;$j < $n;$j++) {
                  if ($plcc[$j]['pages_id'] == $pages[$i]['id']) {
                      $layout_id = $plcc[$j]['layout_id'];
                      for ($k = 0; $k < $nLayout; $k++) {
                          if ($layout_id == $layouts[$k]['id']) {
                              $pages[$i]['layout'] = $layouts[$k]['css_id'];
                          }
                      }
                  } else {
                      $pages[$i]['layout'] = 'layout3';
                  }
              }
          }
    
          $this->twig->display(
              'app/export/index.html.twig',
              [
        'step' => 4,
        'polices' => Police::getInstance()->getAll(),
        'fonds' => Fond::getInstance()->getMini(),
        'images' => Image::getInstance()->getMini(),
        'etudiants' => Etudiant::getInstance()->getAll(),
        'equipes' => EquipeDepartement::getInstance()->getAll(),
        'pages' => $pages,
        'contents' => $content,
        //Codage json array to string for input
        'serialize_polices' => json_encode($polices)
      ]
          );
      }
  }

   public function export(){
    $_POST['file_pdf'] = str_replace('data:application/pdf;base64,', '', $_POST['file_pdf']);
    $pdf = base64_decode($_POST['file_pdf'], true);
    $year = Yearbook::getInstance()->getYearOfActif();
    $year = str_replace('/', '-', $year['anneePromotion']);
    $name = 'Yearbook'.$year .'.pdf';

    file_put_contents(ASSETS_PUBLIC_PATH . 'pdf/'.$name, $pdf);
    $data = ['lien_pdf' => $name];
    
    Yearbook::getInstance()->update($_SESSION['id_yearbook'],$data);
    
      Admin::getInstance()->delAll();
      Etudiant::getInstance()->delAll();
      Image::getInstance()->delAll();
      Texte::getInstance()->delAll();
      Page::getInstance()->delAll();
      Fond::getInstance()->delAll();
      
      $data = ['fini' => 1];
      Yearbook::getInstance()->update($_SESSION['id_yearbook'],$data);
      $_SESSION['login'] = false;
      redirect('/');
   }
}