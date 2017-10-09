<?php
class Album extends Entity{
    private $annee;
    private $genre;
    private $artiste;

    public function getAnnee()
    {
        return $this->annee;
    }
    public function setAnnee($value)
    {
        if(!is_numeric($value))
        { throw new Exception("l'année doit être un nombre.");
        }
        $this->annee=$value;
    }

    public function getArtiste()
    {
        return $this->artiste;
    }
    public function setArtiste($value)
    {
        $this->artiste=$value;
    }

    public function getGenre()
    {
        return $this->genre;
    }
    public function setGenre($value)
    {
        $this->genre=$value;
    }
    public function __toString()
    {
        return "informations sur l'album : <br>". parent::__toString();
    }

    public static function getAll()
    {
        $sql="SELECT * FROM album " ;
        $resultat=MonPdo::getInstance()->query($sql);
        $lesAlbums=$resultat->fetchAll(PDO::FETCH_CLASS|PDO::FETCH_PROPS_LATE,'Album'); 
        return  $lesAlbums;
    }

    public static function ajouterAlbum($nom,$annee,$genre,$artist)
    {
        $monPdo = MonPdo::getInstance();
        $req = $monPdo->prepare("INSERT INTO ALBUM VALUES(null,:paramNom,:paramAnnee,:paramGenre,:paramArtist)");
        $req->bindParam(':paramNom',$nom);
        $req->bindParam(':paramAnnee',$annee);
        $req->bindParam(':paramGenre',$genre);
        $req->bindParam(':paramArtist',$artist);
        $req->execute();
        $Id = $monPdo->lastInsertId();
        echo ("L'album ".$nom." a été ajouté avec le numéro ".$Id."<br><br>");
        $monPdo == null;
    }
    public static function supprimerAlbum($id)
    {
        $monPdo = MonPdo::getInstance();
        $req = $monPdo->prepare("DELETE FROM ALBUM WHERE ID = :paramId");
        $req->bindParam(':paramId',$id);
        $req->execute();
        $monPdo == null;
    }
    public static function findById($id)
    {
        $sql = "SELECT * FROM ALBUM WHERE ID=".$id."";
        $monPdo = MonPdo::getInstance();
        $result = $monPdo->query($sql);
        while($lesObj = $result->fetch(PDO::FETCH_OBJ))
        {
            echo $lesObj->id." - ".$lesObj->nom." - ".$lesObj->annee." - ".$lesObj->genre."<br><br>";
        }
        $monPdo == null;
    }
    
}