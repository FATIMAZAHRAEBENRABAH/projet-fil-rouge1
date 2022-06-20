<?php

include "RealisationsManager.php";
$RealisationsManager = new RealisationsManager();
//afficher dans input
if(isset($_GET['Id_realisations'])){
    $afficherValue = $RealisationsManager->edit($_GET['Id_realisations']);
}
// modifier les donnes
if(!empty($_POST)){
     
    $Id_realisations = $_GET['Id_realisations'];
    $Titre=  $_POST['Titre'];
	$Image = $_POST['Image'];
    $Description= $_POST['Description'];
	
    $RealisationsManager->Modifier($Id_realisations,$Titre,$Image,$Description);
    header('Location: index.php');
}
?>

<body>
<form action="" method="POST">                                                          

    Titre: <input type="text" value="<?php echo $afficherValue->getTitre() ?>" name="Titre" >
	Image : <input type="text "value=" <?= $afficherValue->getImage() ?>" name="Image" >
	Description: <input type="" value=" <?= $afficherValue->getDescription() ?> " name="Description" >

<button type="submit">modifier</button>
</form>
</body>
