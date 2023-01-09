<?php require_once "./inc/header.tpl.php" ?>
<h1>Affichage des épisodes de la saison 2 du socle PHP</h1>
<main>
    <?php
        require "data.php";
    ?>

    <?php foreach($dataEpisodes as $idEpisode => $dataEpisode) : ?>
        <episode>
            <a href="episode.php?episodeId=<?= $idEpisode; ?>"><h5><?= $dataEpisode["numero"]; ?></h5></a>
            <p><?= $dataEpisode["titre"]; ?></p>
        </episode>
    <?php endforeach ?>
</main>
<?php require_once "./inc/footer.tpl.php" ?>
