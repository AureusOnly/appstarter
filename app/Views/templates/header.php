<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/styles.css"/>
    <title>Esicad - Gestion de Bibliothèque</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
        }

        header {
            background-color: #34495e;
            color: #ffffff;
            padding: 20px;
            text-align: center;
        }

        header h1 {
            margin: 0;
            font-size: 28px;
        }

        .logged-in-message {
            background-color: #2ecc71;
            color: #ffffff;
            padding: 10px 20px;
            border-radius: 5px;
            display: inline-block;
            margin-top: 10px;
            font-size: 18px;
            transition: background-color 0.3s;
        }

        .logged-in-message:hover {
            background-color: #27ae60;
        }
    </style>
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
