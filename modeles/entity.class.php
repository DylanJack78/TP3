<?php
abstract class Entity{
    protected $id;
    protected $nom;

    public function getId()
    {
        return $this->id;
    }
    public function setId($value)
    {
        $this->id=$value;
    }

    public function getNom()
    {
        return $this->nom;
    }
    public function setNom($value)
    {
        $this->nom=$value;
    }

    public function __toString()
    {
        return "id : ". $this->id. " - nom : ".$this->nom ;
    }

    public function __construct($id=null,$nom=null)
    {
        if($id!=null && $nom!=null)
        {
            $this->setId($id);
            $this->setNom($nom);
        }
    }

}