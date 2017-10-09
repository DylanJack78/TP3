<?php
session_start();
require_once("modeles/monPdo.php");
require_once("function.inc.php");
require_once("modeles/entity.class.php");
require_once("modeles/Artist.class.php");
require_once("modeles/Album.class.php");

include("vues/v_entete.php") ;//bandeau en-tête
include("vues/v_menu.php") ;//menu

if(!isset($_REQUEST['uc']))  // si le contrôleur n'est pas défini (donc première venue sur le site
     $uc = 'accueil';        //on lui affecte accueil
else
	$uc = $_REQUEST['uc'];   //sinon on récupère le contrôleur

switch($uc) //suivant le contrôleur dans uc
{
	case 'accueil':
		include("vues/v_accueil.php");  //page d'accueil
		break;
		
	case 'Artistes' :                               //on va au contrôleur secondaire c_voirAlbums
		 include("controleurs/c_Artistes.php");
		 break; 
	 
	case 'Albums' :                               //on va au contrôleur secondaire c_voirAlbums
		 include("controleurs/c_Albums.php");
		 break;
}
include("vues/v_pied.php") ;// pied de site
?>



	
