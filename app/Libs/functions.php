<?php
//
// FICHIER :  / Libs / functions.php
//
/**
Redirige vers une commande.
@param  string  la commande.
 */
function redirect( $url )
{
	header( 'Location: ' . ROOT . $url );
}

/**
 *  Retourne une date au format francais à partir d'une chaine timestamp SQL.
 * @param string  $sqlTimestamp le timestamp SQL.
 * @return string
 */
function getFRdate($sqlTimestamp)
{
	$timestamp = strtotime($sqlTimestamp);
	return date('d/m/Y', $timestamp);
}

/**
 *  Retourne une heure au format francais à partir d'une chaine timestamp SQL.
 * @param string  $sqlTimestamp le timestamp SQL.
 * @return string
 */
function getFRtime($sqlTimestamp)
{
	$timestamp = strtotime($sqlTimestamp);
	return date('H:i:s', $timestamp);
}

/**
  Indique si une session administrateur est ouverte.
  @return boolean.
 */
function isLogin()
{ 
   
    if(isset($_SESSION['login']) and $_SESSION['login'] == true){
        return true;
    }else{
        
        redirect( '/login' );
    }
}


//Recupere un chiffre qui augment d'un toutes les micro-sec
function microtime_float()
{
    list($usec, $sec) = explode(" ", microtime());
    return ((float)$usec + (float)$sec);
}

/**
Function de redim d'image
**/

function redimensionner_image($fichier, $nouvelle_taille) {

    //VARIABLE D'ERREUR
    global $error;

    //TAILLE EN PIXELS DE L'IMAGE REDIMENSIONNEE
    $hauteur = $nouvelle_taille;

    //TAILLE DE L'IMAGE ACTUELLE
    $taille = getimagesize($fichier);
	$largeur = ($hauteur*$taille[0])/$taille[1];
  //  r($largeur,$hauteur);die;
	//SI LE FICHIER EXISTE
    if ($taille) {
    
        //SI JPG
        if ($taille['mime']=='image/jpeg' ) {
            //OUVERTURE DE L'IMAGE ORIGINALE
            $img_big = imagecreatefromjpeg($fichier); 
            $img_new = imagecreate($largeur, $hauteur);
            
            //CREATION DE LA MINIATURE
            $img_petite = imagecreatetruecolor($largeur, $hauteur) or $img_petite = imagecreate($largeur, $hauteur );

			//COPIE DE L'IMAGE REDIMENSIONNEE
            imagecopyresized($img_petite,$img_big,0,0,0,0,$largeur, $hauteur,$taille[0],$taille[1]);
            imagejpeg($img_petite,$fichier);

        }
        
        //SI PNG
        else if ($taille['mime']=='image/png' ) {
            //OUVERTURE DE L'IMAGE ORIGINALE
            $img_big = imagecreatefrompng($fichier); // On ouvre l'image d'origine
            $img_new = imagecreate($largeur, $hauteur);
            
            //CREATION DE LA MINIATURE
            $img_petite = imagecreatetruecolor($largeur, $hauteur) OR $img_petite = imagecreate($largeur, $hauteur);

            //COPIE DE L'IMAGE REDIMENSIONNEE
            imagecopyresized($img_petite,$img_big,0,0,0,0,$largeur, $hauteur,$taille[0],$taille[1]);
            imagepng($img_petite,$fichier);

        }
    }
}

function Bpwd($password, $pwd)
{   
    //Comparaison entre mdp entré par l'utilisateur et encrypté et mdp de la bdd
    if(password_verify($password, $pwd))
    {
        return true;
    }
    else
    {
        return false;
    }
}


?>
