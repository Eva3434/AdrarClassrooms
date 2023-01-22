<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Sofia+Sans:wght@200&family=Space+Mono&family=Tourney:wght@300&display=swap" rel="stylesheet">
</head>

<body>
    <article class="pageConnexion">
        <section class="connexionGauche">
            <div class="formADRAR">ADRAR Classroom</div>
            <div class="formBienvenue">Bienvenue</div>
            <form action="" method="post">
                <label>Saisir votre e-mail : </label>
                <input name='mail' type='text'/>
                <label>Saisir votre mot de passe : </label>
                <input name='pass' type='text'/>         
                <input type="submit" value="Connexion">
                <input type="submit" value="Connexion avec Google">
            </form>
        </section>
        <section class="connexionDroite">
            <div class="connexionCommentaire">Exemple de commentaire</div> 
            <div class="connexionCommentaire">Exemple de commentaire</div>        
        </section>
    </article>    
</body>
</html>

<?php
        if(isset($_POST['mail']) && isset($_POST['pass'])){
           $mail = $_POST['mail'];
           $pass = $_POST['pass'];
        //    echo "$mail $pass";
        }
    
?>