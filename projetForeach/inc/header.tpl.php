<?php
    $suiteTitre = "";
    if(isset($title)) {
        $suiteTitre = $title;
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Projet O'Clock - Affichage de la saison 2 - <?= $suiteTitre ?></title>
</head>
<body>
    <nav>
        <ul>
            <li><a href="index.php">Fichier d'index</a>
            <li><a href="episode1.php">Détail épisode 1</a>
        </ul>
    </nav>