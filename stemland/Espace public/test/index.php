<?php
    include "RealisationsManager.php";
    // Trouver tous les employés depuis la base de données 
    $realisationsManager = new RealisationsManager();
    $data = $realisationsManager->afficher_realisations();
?>


<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>stremland</title>
</head>
<body>
    <div>
        <a href="ajouter.php">Ajouter un employé</a>
        <table>
            <tr>
                <th>Titre</th>
                <th>Image</th>
                <th>Description</th>
                <th></th>
            </tr>
            <?php
                    foreach($data as $value){
            ?>

            <tr>
                <td><?= $value->getTitre() ?></td>
                <td><?= $value->getImage() ?></td>
                <td><?= $value->getDescription() ?></td>
                <td>
                     <a href="suprimmer.php?Id_realisations=<?php echo $value->getId_realisations() ?>">Supprime</a>
                </td>
            </tr>
            <?php }?>
        </table>
    </div>
</body>
</html>