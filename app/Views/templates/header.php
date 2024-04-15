<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/styles.css"/>
    <title>Bibliothèque</title>
</head>
<body>
    <header>
        <h1>Esicad- Gestion de Bibliothèque</h1>
        <h2>Akashic Records</h2>
        <?php if (isset($loggedIn) && $loggedIn == true) : ?>
            <span>Bonjour, <?=esc($name) ?></span>
            <?php endif ?>
    </header>