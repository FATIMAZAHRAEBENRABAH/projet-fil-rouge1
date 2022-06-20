<?php

class Devis{
    private $Id_devis;
    private $Nom;
    private $Prenom;
    private $Email;
    private $Tel;
    private $Description;

    public function getId_devis() {
        return $this->Id_devis;
    }
    public function setId_devis($id_devis) {
        $this->Id_devis = $id_devis;
    }

    public function getNom() {
        return $this->Nom;
    }
    public function setNom($nom) {
        $this->Nom = $nom;
    }

    public function getPrenom() {
        return $this->Prenom;
    }
    public function setPrenom($prenom) {
        $this->Prenom = $prenom;
    }

    public function getEmail() {
        return $this->Email;
    }
    public function setEmail($email) {
        $this->Email = $email;
    }
    public function getTel() {
        return $this->Tel;
    }
    public function setTel($tel) {
        $this->Tel = $tel;
    }
    public function getDescription() {
        return $this->Description;
    }
    public function setDescription($description) {
        $this->Description = $description;
    }

}
     
?>