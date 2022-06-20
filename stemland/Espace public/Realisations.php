<?php

class Realisations{
    private $Id_realisations;
    private $Titre;
    private $Image;
    private $Description;

    
    public function getId_realisations() {
        return $this->Id_realisations;
    }
    public function setId_realisations($Id_realisations) {
        $this->Id_realisations = $Id_realisations;
    }

    public function getTitre() {
        return $this->Titre;
    }
    public function setTitre($Titre) {
        $this->Titre = $Titre;
    }

    public function getImage() {
        return $this->Image;
    }
    public function setImage($Image) {
        $this->Image = $Image;
    }

    public function getDescription() {
        return $this->Description;
    }
    public function setDescription($Description) {
        $this->Description = $Description;
    }

}
     
?>