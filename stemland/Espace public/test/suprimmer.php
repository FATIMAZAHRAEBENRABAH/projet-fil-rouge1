<?php
    include "RealisationsManager.php";

if(isset($_GET['Id_realisations'])){

    // Trouver tous les employés depuis la base de données 
    $HotelsManager = new RealisationsManager();
    $Id_realisations = $_GET['Id_realisations'] ;
    $HotelsManager->Supprimer($Id_realisations);
        
    header('Location: index.php');
}
?>