
<?php
  require_once "inc/header.tpl.php";
  require_once "data.php";

?>
<h2 class="right__title">Latest News</h2>
<div class="posts">

  <?php foreach($tabArticles as $key => $tabArticle) { ?>

    <article class="post">
      <a href="" class="post__category post__category--color-<?= $tabArticle["categorie"]; ?>"><?= $tabArticle["categorie"]; ?></a>
      <h3><?= $tabArticle["titre"]; ?></h3>
      <div class="post__meta">
        <img class="post__author-icon" src="<?= $tabArticle["image-auteur"]; ?>" alt="">
        <strong class="post__author"><?= $tabArticle["auteur"]; ?></strong>
        <time datetime="<?= $tabArticle["date-publication-en"]; ?>"><?= $tabArticle["date-de-publication"]; ?></time>
      </div>
      <p><?= $tabArticle["texte"]; ?></p>
      <a href="article.php?postId=<?= $key ?>" class="post__link">Continue reading</a>
    </article>

  <?php } ?>
</div>

<?php
  require_once "inc/footer.tpl.php";
?>

