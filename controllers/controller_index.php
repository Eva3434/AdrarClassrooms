
<?php
include('../models/connect.php');
include('../views/view_index.php');

// var_dump($_SESSION);die;

if (!empty($_POST["form_connexion"])) {
    $select = $db->prepare("SELECT * FROM utilisateurs WHERE utilisateur_email=:utilisateur_email AND utilisateur_mot_de_passe=:utilisateur_mot_de_passe;");
    $select->bindParam(":utilisateur_email", $_POST["form_email"]);
    $select->bindParam(":utilisateur_mot_de_passe", $_POST["form_password"]);
    $select->execute();
    // La fonction rowCount() permet de donner le nombre de lignes pour une requête
    if ($select->rowCount() === 1) {
        // On affecte les données de notre utilisateur dans notre super globale $_SESSION
        $_SESSION['utilisateur'] = $select->fetch(PDO::FETCH_ASSOC);
        // Le header permet d'effectuer une requête HTTP, la valeur Location permet la redirection vers un autre fichier
        header("Location: ../views/view_pageAccueil.php");
    } else {
        // La fonction unset permet de vider une variable, ici nous vidons les valeurs pour la clé “user”
        unset($_SESSION['utilisateur']);
    }
}
?>