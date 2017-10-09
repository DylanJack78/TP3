<?php
$action = $_REQUEST['action']; //récupération de l'action
//echo "action:".$action;
switch($action)
{ 
	case 'all': //pour afficher tous les albums
		{
			$lesAlbums=Album::getAll(); //on fait appel  à la méthode d"accès aux données de la classe Album
			include("/vues/v_albums.php");//puis on affiche la vue qui utilise les données
			break;
		}
	case 'artiste': //on vient de choisir un artiste on est repassé par index
		{
		//on fait appel à la méthode getAlbums d'Artist avec le numéro d'artiste
		//on inclut la vue v_albArt qui affiche les albums
		$Artiste=Artist::findById($_REQUEST['numart']); // recherche l'artiste
		$lesAlbums=$Artiste->getAlbums();
		include("/vues/v_albumsPourArtiste.php");//puis on affiche la vue qui utilise les données
		break;
		}
	
	default:echo "rien";
	}
	?>
