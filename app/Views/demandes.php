<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Demande de Livre</title>
</head>
<body>
    <h2>Demande de Livre</h2>
    <form action="traitement_demande.php" method="post">
        <label for="nom">Nom :</label>
        <input type="text" id="nom" name="nom" required><br><br>

        <label for="email">Email :</label>
        <input type="email" id="email" name="email" required><br><br>

        <label for="titre_livre">Titre du Livre :</label>
        <input type="text" id="titre_livre" name="titre_livre" required><br><br>

        <label for="auteur">Auteur :</label>
        <input type="text" id="auteur" name="auteur" required><br><br>

        <label for="date_demande">Date de la Demande :</label>
        <input type="text" id="date_demande" name="date_demande" value="<?php echo date('Y-m-d'); ?>" readonly><br><br>

        <input type="submit" value="Demande">
    </form>
</body>
</html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gestion des demandes</title>
</head>
<body>
    <h1>Gestion des demandes</h1>

    <ul>
        <li><a href="demande.php">Effectuer une demande</a></li>
        <li><a href="emprunts.php">Gérer les emprunts</a></li>
        <li><a href="abonne.php">Gérer les abonnés</a></li>
    </ul>
</body>
</html>
