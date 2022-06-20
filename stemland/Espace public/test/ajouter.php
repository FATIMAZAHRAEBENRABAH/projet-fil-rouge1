<?php

include "RealisationsManager.php";
// include "Realisations.php";
// Trouver tous les employés depuis la base de données 
$RealisationsManager = new RealisationsManager();


if(!empty($_POST)){
	$realisations = new Realisations;
	
	$realisations->setTitre($_POST['Titre']);
	$realisations->setImage($_POST['Image']);
	$realisations->setDescription($_POST['Description']);
	$RealisationsManager->Ajouter($realisations);
	
	// Redirection vers la page index.php
	header("Location:index.php");
}


?>

<form action="" method="POST">                                                          
    Titre: <input type="text" name="Titre" >
	Image : <input type="text" name="Image" >
	Description: <input type=""  name="Description" >
   
<button type="submit">ajouter</button>
</form>