<?php
include("../models/connect.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../style.css">
    <title>Document</title>
</head>
<nav>
    <img src="../images/adrar-classrooms-logo.png" class="logoNav">
    <a class="classrooms">Classrooms</a>
    <a href="view_pageAccueil.php">Accueil</a>
    <a href="view_pageFormation.php">Formations</a>
    <a>Administration</a>
    <img src="../images/loupe.svg" class="loupeNav">
    <p><?=$_SESSION['utilisateur']["utilisateur_nom"]?> <?=$_SESSION['utilisateur']["utilisateur_prenom"]?></p>
    <img src="../images/monCompte.png" class="imageMonCompte">
</nav>
<body>
    <section class="coursHaut">
        <p>Titre</p>
            <img src="../images/horloge.png">
            <p>Temps</p>
            <img src="../images/niveau.png">
            <p>Niveau</p>
            <img src="../images/imagePDF.png">
            <p>Date de publication/mise à jour</p>
    </section>    
    <section>

    </section>
</body>
</html>