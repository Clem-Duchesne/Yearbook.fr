<?php 
//
// FICHIER : configurationController.php
//
namespace App\Controllers;
use App\Models\Etudiant;
use App\Models\EquipeDepartement;
class ConfigurationController extends Controller
{

  public function index()
  { 
    $this->twig->display(
      'app/configuration/index.html.twig',[
        'step' => 1, 
        'etudiants' => Etudiant::getInstance()->getAll(),
        'equipes' => EquipeDepartement::getInstance()->getAll(),
      ]
    );
  }

  public function add()
  {
    if($_POST['statut'] == "etudiant"){
      unset($_POST['statut']);
      $_POST['id_yearbook'] = $_SESSION['id_yearbook'];
      Etudiant::getInstance()->add($_POST);
    }else{
      unset($_POST['statut']);
      EquipeDepartement::getInstance()->add($_POST);
    }

    redirect('/app/configuration');
  
  }

  public function editEtu($id)
  {
    $this->twig->display(
      'app/configuration/edit.html.twig',[
        'step' => 1, 
        'personne' => Etudiant::getInstance()->get($id),
        'statut' => 'etu',
        'etudiants' => Etudiant::getInstance()->getAll(),
        'equipes' => EquipeDepartement::getInstance()->getAll(),
      ]
    );
  }

  public function editEtuSave($id){
    if($_POST['statut'] == "etudiant"){
      unset($_POST['statut']);
      Etudiant::getInstance()->update($id, $_POST);
    }else{
      unset($_POST['statut']);
      Etudiant::getInstance()->delete($id);
      EquipeDepartement::getInstance()->add($_POST);
    }
    redirect('/app/configuration');
  }

  public function deleteEtu($id){
    
    Etudiant::getInstance()->delete($id);
    redirect('/app/configuration');
  }

  public function editEqui($id)
  {
    $this->twig->display(
      'app/configuration/edit.html.twig',[
        'step' => 1, 
        'personne' => EquipeDepartement::getInstance()->get($id),
        'statut' => 'equi',
        'etudiants' => Etudiant::getInstance()->getAll(),
        'equipes' => EquipeDepartement::getInstance()->getAll(),
      ]
    );
  }

  public function editEquiSave($id){
    if($_POST['statut'] == "equipe"){
      unset($_POST['statut']);
      EquipeDepartement::getInstance()->update($id, $_POST);
    }else{
      unset($_POST['statut']);
      EquipeDepartement::getInstance()->delete($id);
      Etudiant::getInstance()->add($_POST);
    }
    redirect('/app/configuration');
  }

  public function deleteEqui($id){
    
    EquipeDepartement::getInstance()->delete($id);
    redirect('/app/configuration');
  }
}