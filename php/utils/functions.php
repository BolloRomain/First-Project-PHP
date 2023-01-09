<?php

    // Fonctions en PHP pour le projet

    // $dataArticle = $tabArticles[2];

    // Quel nom on pourrait donner à notre fonction ?
    // numéroArticle ? un paramètre
    // Le retour correspond à un article

    function getPostById($postId) {

        // retour attendu ? l'article
        $post = [];

        // Le problème c'est que pour les inclusions, PHP ne se base pas sur le fichier courant, mais sur le fichier appelé par le navigateur
        // Ici functions.php n'est pas appelé par le navigateur mais appelé par article1.php
        // Pour éviter ça, on va introduire un nouveau mot-clé
        // root => __DIR__

        // La valeur de __DIR__ va être le dossier utils
        // car c'est le dossier du fichier PHP que je suis
        // en train d'executer
        //var_dump(__DIR__);

        // ------------
        // Le mot-clé __DIR__ est prévu pour automatiquement contenir le chemin absolu du répertoire dans lequel se situe le fichier actuel.
        // ------------

        // Comment je vais faire pour récupérer un article ?
        require_once(__DIR__ . "/../data.php");

        $post = $tabArticles[$postId];

        // Premier avantage : le chemin des data est centralisé dans une fonction. Du coup, si je change le chemin, je n'aurai qu'à le changer une seule fois dans ce fichier, du coup je gagne en manipulations.
        // Deuxieme avantage : Si j'effectue une logique de code sur l'article avant d'afficher mes résultats, je centralise ma logique dans une seule fonction (=> à un seul endroit)

        return $post;
    }

?>