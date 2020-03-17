<?php 
//
// FICHIER : AdminController.php
//
namespace App\Controllers;
use App\Models\Admin;

class AdminController extends Controller
{	
	public function index(){

		$admins = Admin::getInstance()->getAll();

		if(isset($_SESSION[ 'role' ]) && $_SESSION[ 'role' ] === 'root' ){
			$this->twig->display('/app/superadmin/index.html.twig', 
			[
				'admins' => $admins
			]);
		}
		else{
			redirect( '/app/configuration' );
		}
	}

	public function add()
	  { 
	    $_POST['password'] = Admin::getInstance()->encrypt($_POST['password']);

	    Admin::getInstance()->add($_POST);

	    redirect('/app/admin');
	  }

	public function delete($id){

		Admin::getInstance()->delete($id);

		redirect('/app/admin');
	}

	public function login()
	  {
	    if(!empty($_POST)){
	      extract($_POST);
	      isLogin();
	    }
	    else{
	      $this->twig->display(
	        'app/login.html.twig',[
	        ]
	      );
	    }
	  }

	  public function loginCheck()
	  {
	    extract($_POST);
		  //Vérification de la validité de l'identifiant et du mot de passe
	    if (Admin::getInstance()->isAdmin($name, $password) ) {

	       // ouvrir une session en mode ADMIN
	      $_SESSION['login']= true;

	      if($name === "root"){
	      	$_SESSION[ 'role' ] = 'root'; 
	      }
	      else{
	      	$_SESSION[ 'role' ] = 'admin'; 
	      }


	      // redirection vers la page d'édition
	      redirect( '/app/configuration' );
	    } 
	    else{
	    //Cas d'erreur
	    $message="Identifiant ou mot de passe incorrect";
	    $this->twig->display('app/login.html.twig',
	      [ 'message' => $message]
	    );
	  }

	}
	  public function delog()
	  {
	    //Fermeture de session et suppression des cookies
	    unset($_SESSION);
	    if(ini_get('session.use_cookies')){
	      $params = session_get_cookie_params();
	      setcookie(session_name(),'',time()-42000,
	        $params["path"], $params["domain"], $params["secure"], $params["httponly"]);
	    }
	    session_destroy();
	    redirect( '/' );
	  }

}