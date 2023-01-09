
<?php
require_once "inc/header.tpl.php";
require_once "utils/functions.php";
$postId = 1;
if(isset($_GET["postId"]) && !empty($_GET["postId"])) {
    $postId = $_GET["postId"];
}
$dataArticle = getPostById($postId);

?>

<?php require_once "./inc/article.tpl.php"; ?>
<?php require_once "inc/footer.tpl.php"; ?>