<?php
class Artist extends Entity{
	
	/**
     * Retourner tous les artistes de la base
     * @return array<Artist> tableau d'instances de Artist
    */
    public static function getAll()
    {
        $sql="SELECT * FROM artist " ;
        $resultat=MonPdo::getInstance()->query($sql);
        $lesArtist=$resultat->fetchAll(PDO::FETCH_CLASS|PDO::FETCH_PROPS_LATE,'Artist');
        return $lesArtist;
		throw new Exception("Problème dans l'execution de la requête.") ;
    }
	
	/**
     * ajoute un artiste dans la base
	 * @param string<nom> nom de l'artiste
     * @return array<Artist> tableau d'instances de Artist
    */
    public static function ajouterArtiste($nom)
    {
		$sql="insert into artist values('', :nom )" ;
        $resultat=MonPdo::getInstance()->prepare($sql);
        $resultat->bindParam(':nom', $nom);
        $resultat->execute();
		// ajouter la gestion des exceptions
    }
	
	//supprime un artiste dont on passe l'id en paramètre
    public static function supprimerArtist($id)
    {
		// a completer 
        $sql="delete from artist where id= :id " ;
        $resultat=MonPdo::getInstance()->prepare($sql);
        $resultat->bindParam(':id', $id);
        $resultat->execute();
		// ajouter la gestion des exceptions
    }


	// trouve un artiste grace à son id passé en paramètre
	// renvoie un objet Artiste
    public static function findById($id)
    {
        $sql="SELECT * FROM artist where id= ?" ;
        $resultat=MonPdo::getInstance()->prepare($sql); // prépare la requête
        $resultat->execute(array($id)); // applique le paramètre
        $leArtist=$resultat->fetchAll(PDO::FETCH_CLASS|PDO::FETCH_PROPS_LATE,"Artist"); // lit la ligne et renvoie un objet Artist
        return $leArtist[0];
		// ajouter la gestion des exceptions
    }
	
	// modifie un objet Artiste
    public static function modifierArtiste($id,$nom)
    {
		// a completer 
        $sql="update artist set nom= ? where id= ?" ;
        $resultat=MonPdo::getInstance()->prepare($sql); // prépare la requête
        $resultat->execute(array($nom,$id)); // applique le paramètre
    }
	
	/**
     * renvoie la liste des albums d'un artiste
     * @return array<Album> tableau d'instances de Album
    */
    public function getAlbums()
    {
        $sql="SELECT * FROM album where alb_art= ". $this->getId();
        $resultat=MonPdo::getInstance()->query($sql);
        $lesAlbums=$resultat->fetchAll(PDO::FETCH_CLASS|PDO::FETCH_PROPS_LATE,'Album');
        return $lesAlbums;
    }
}
