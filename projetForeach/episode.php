<?php 
    $title = "Detail d'un épisode";
    require_once "./inc/header.tpl.php"; 
    require_once "utils/functions.php";
    
    $id = 1;
    if(isset($_GET["episodeId"]) && !empty($_GET["episodeId"]) && is_numeric($_GET["episodeId"]) && $_GET["episodeId"] > 0 && $_GET["episodeId"] < getCountEpisodes()) {
        $id = $_GET["episodeId"];
    }
    $dataEpisode = getEpisodeById($id);
    require_once "./inc/episode.tpl.php";
    require_once "./inc/footer.tpl.php"; 
?>