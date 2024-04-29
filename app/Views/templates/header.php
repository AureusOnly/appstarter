<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/styles.css"/>
    <title>Esicad - Gestion de Bibliothèque</title>
</head>

<body>
    <header>
        <h1>Esicad - Gestion de Bibliothèque</h1>
        <?php if (isset($loggedIn) && $loggedIn == true) : ?>
            <div class="logged-in-message">
                <span>Bonjour, <?= esc($name) ?></span>
            </div>
        <?php endif ?>
    </header>
