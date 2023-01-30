
<?php
    include('../models/connect.php');
    include('../views/view_pageAccueil.php');

    if(empty($_SESSION["utilisateur"])) {        
  // Permet de détruire la session PHP courante ainsi que toutes les données rattachées
        session_destroy();
        header("Location: ../views/view_index.php");
    }
?>