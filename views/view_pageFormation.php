<?php
include("../models/connect.php");
// var_dump($_SESSION);die;
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
    <img src="../imgsAvatar/<?=$_SESSION['utilisateur']["utilisateur_image"]?>"  class="imageMonCompte">
</nav>
<body class="bodyPageFormation">
    <p>Cours</p>
    <p>Langages</p>
    <article>
        <section class="cadreFormation">
            <div class="cadreCouleur1"><br></div>
            <div class="cadreDroite">
                <p class="coursCadre">COURS</p>
                <p>Titre</p>
                <img src="../images/niveau.png">
                <p>Niveau</p>
                <img src="../images/horloge.png">
                <p>Temps</p>
                <p>Synopsis</p>
            </div>
        </section>
        <section class="cadreFormation">
            <div class="cadreCouleur2"><br></div>
            <div class="cadreDroite">
                <p class="coursCadre">COURS</p>
                <p>Titre</p>
                <img src="../images/niveau.png">
                <p>Niveau</p>
                <img src="../images/horloge.png">
                <p>Temps</p>
                <p>Synopsis</p>
            </div>
        </section>
        <section class="cadreFormation">
            <div class="cadreCouleur3"><br></div>
            <div class="cadreDroite">
                <p class="coursCadre">COURS</p>
                <p>Titre</p>
                <img src="../images/niveau.png">
                <p>Niveau</p>
                <img src="../images/horloge.png">
                <p>Temps</p>
                <p>Synopsis</p>
            </div>
        </section>
        <section class="cadreFormation">
            <div class="cadreCouleur4"><br></div>
            <div class="cadreDroite">
                <p class="coursCadre">COURS</p>
                <p>Titre</p>
                <img src="../images/niveau.png">
                <p>Niveau</p>
                <img src="../images/horloge.png">
                <p>Temps</p>
                <p>Synopsis</p>
            </div>
        </section>
        <section class="cadreFormation">
            <div class="cadreCouleur5"><br></div>
            <div class="cadreDroite">
                <p class="coursCadre">COURS</p>
                <p>Titre</p>
                <img src="../images/niveau.png">
                <p>Niveau</p>
                <img src="../images/horloge.png">
                <p>Temps</p>
                <p>Synopsis</p>
            </div>
        </section>
    </article>
</body>
</html>