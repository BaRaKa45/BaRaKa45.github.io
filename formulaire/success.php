<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Success</title>
</head>
<body>
    <h1>RESULTAT DU FORMULAIRE</h1>
    <div>
        <p>Nom du client :<?php echo $_GET['user_name']; ?></p>
        <p>Mail: <?php echo $_GET['user_email']; ?></p>
        <p>Téléphone: <?php echo $_GET['user_phone']; ?></p>
        <p>Requète: <?php echo $_GET['user_sexe']; ?></p>
        <p>Message: <?php echo $_GET['user_message']; ?></p>
    </div>
</body>
</html>