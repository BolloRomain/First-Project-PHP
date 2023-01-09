<?php
    function getEpisodeById($episodeId) {
        $episode = [];
        require __DIR__ . "/../data.php";
        $episode = $dataEpisodes[$episodeId];
        return $episode;
    }
    function getCountEpisodes() {
        require __DIR__ . "/../data.php";
        return count($dataEpisodes);
    }

?>