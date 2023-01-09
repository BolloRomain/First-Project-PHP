
<h2 class="right__title"><?= $dataArticle["titre"]; ?></h2>


<article class="post post--solo">
    
    <div class="post__meta">
        <img class="post__author-icon" src="<?= $dataArticle["image-auteur"]; ?>" alt="">
        <strong class="post__author"><?= $dataArticle["auteur"]; ?></strong>
        <time datetime="<?= $dataArticle["date-publication-en"]; ?>"><?= $dataArticle["date-de-publication"]; ?></time>
    </div>
    <p><?= $dataArticle["texte"]; ?></p>

    <a class="post__category post__category--color-<?= $dataArticle["categorie"]; ?>" href=""><?= $dataArticle["categorie"]; ?></a>
    <a href="index.php" class="post__link">Back to home</a>
</article>