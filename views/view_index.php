<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Sofia+Sans:wght@200&family=Space+Mono&family=Tourney:wght@300&display=swap" rel="stylesheet">
</head>

<body>
    <article class="pageConnexion">
        <section class="connexionGauche">
            <div class="formADRAR">ADRAR Classroom</div>
            <div class="formBienvenue">Bienvenue</div>
            <form action="../controllers/controller_index.php" method="post">
                <input type="hidden" name="form_connexion" value="1">
                <label for="form_email">Email:</label>
                <input type="text" name="form_email" id="form_email">
                <label for="form_password">Mot de passe:</label>
                <input type="password" name="form_password" id="form_password">
                <input type="submit" value="Connexion">
                <p> ou continuer avec </p>
                <input type="submit" value="Connexion avec Google">
            </form>

        </section>
        <section class="connexionDroite">
            <div class="connexionCommentaire">« J'étais musicien indépendant, mais la COVID a tout stoppé. On m’a parlé d’ADRAR Classrooms, ça m'a ouvert des opportunités professionnelles insoupçonnées. »</div>
            <div class="connexionNomCommentaire">Alexandre - Développeur Full-Stack Junior</div>
            <img src="../images/imagePageConnexion.png">
        </section>
    </article>
</body>

</html>
