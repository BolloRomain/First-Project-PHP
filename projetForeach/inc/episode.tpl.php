

<h1>Detail de l'épisode numéro <?= $id ?></h1>
<main>
    <episode>
        <h5><?= $dataEpisode["numero"] ?></h5>
        <p><?= $dataEpisode["titre"] ?></p>
    </episode>
    <div>
    <?= $dataEpisode["contenu"] ?>
    </div>
    <a href="index.php">Retour à la page Home</a>
</main>