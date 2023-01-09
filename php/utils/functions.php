<?php

    function getPostById($postId) {

        $post = [];

        require_once(__DIR__ . "/../data.php");

        $post = $tabArticles[$postId];

        return $post;
    }

?>
