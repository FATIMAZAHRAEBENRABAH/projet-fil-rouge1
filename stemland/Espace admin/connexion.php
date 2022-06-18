<?php
//valider que tous les champs sont remplis
session_start();
if(isset($_POST['valider'])){
    if(!empty($_POST['name']) AND !empty($_POST['mdp'])){

    //rempler les champs
     $name_par_defaut = "admain";
     $mdp_par_defaut = "admain1234";

     $name_saisi = htmlspecialchars($_POST['name']);
     $mdp_saisi = htmlspecialchars($_POST['mdp']);

    //valider que tous les informations sont correctes
     if($name_saisi == $name_par_defaut AND $mdp_saisi == $mdp_par_defaut){
        $_SESSION['mdp'] = $mdp_saisi;
        header('location: index.php');
     }else{
        echo "Votre mot de passe ou name est incorrect";
     }

    }else{
        echo "Veuillez compléter tous les champ...";
    }
}


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Espace de connexion admin</title>

</head>
<body>
  <form method="POST" action="" align="center">
    <input type="text" name="name" autocomplete="off">
    <br>
    <input type="password" name="mdp">
    <br><br>
    <input type="submit" name="valider">
  </form>  
</body>
</html>