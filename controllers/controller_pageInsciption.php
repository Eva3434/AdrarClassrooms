<?php
// On inclut notre connecteur à la base de données
include('../models/connect.php');
include('../views/view_pageInscription.php');

// On entre dans la boucle seulement lors de l’envoi du formulaire
if (!empty($_POST["form_inscription"])) {
    // On recherche si l'adresse email existe déjà en BDD
    $select = $db->prepare("SELECT utilisateur_email FROM utilisateurs WHERE utilisateur_email=:utilisateur_email;");
    $select->bindParam(":utilisateur_email", $_POST["form_email"]);
    $select->execute();
    if (empty($select->fetch(PDO::FETCH_COLUMN))) {

        if (isset($_FILES['form_image'])) {
            $extensions_ok = array('png', 'jpg');

            $tmpName = $_FILES['form_image']['tmp_name'];
            $name = $_FILES['form_image']['name'];
            $size = $_FILES['form_image']['size'];
            $error = $_FILES['form_image']['error'];

            $file_name = basename($_FILES['form_image']['name']);
            $accents = '/&([A-Za-z]{1,2})(grave|acute|circ|cedil|uml|lig);/';
            $string_encoded = htmlentities($file_name, ENT_NOQUOTES, 'UTF-8');
            $file_name = preg_replace($accents,'$1',$string_encoded);         

            
            if (!in_array(substr(strrchr($_FILES['form_image']['name'], '.'), 1), $extensions_ok)) {
                echo '<span style="color: red;">Extension non autorisée</span>';
            } else {
                $insert = $db->prepare("INSERT INTO utilisateurs(utilisateur_email, utilisateur_mot_de_passe,utilisateur_nom,utilisateur_prenom,utilisateur_image)
                                    VALUES(:utilisateur_mail, :utilisateur_mot_de_passe,:utilisateur_nom, :utilisateur_prenom, :utilisateur_image);");
                $insert->bindParam(":utilisateur_mail", $_POST['form_email']);
                $insert->bindParam(":utilisateur_mot_de_passe", $_POST['form_password']);
                $insert->bindParam(":utilisateur_nom", $_POST['form_nom']);
                $insert->bindParam(":utilisateur_prenom", $_POST['form_prenom']);
                $insert->bindParam(":utilisateur_image", $file_name);
                if ($insert->execute()) {
                    $fichier = move_uploaded_file($_FILES['form_image']['tmp_name'], "../imgsAvatar/" . $file_name);
                    // Si aucune erreur ne se produit, on propose de se connecter
                    die('<p style=”color: green;”>Inscription réussie.</p><a href="../views/view_index.php">Se connecter.</a>');
                }
                die('<p style=”color: red;”>Inscription échouée.</p><a href="../views/view_pageInscription.php">Réessayer.</a>');
            }
           
        }
    }
}

 

