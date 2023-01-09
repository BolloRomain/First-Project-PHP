<?php
  require_once "inc/header.tpl.php";
?>
<h2 class="right__title">Nous contacter</h2>
<div class="posts">
  <div class="post post--solo">
    <p class="single">
      <?php
        var_dump($_POST);
        if(isset($_POST)) {
          echo "Votre formulaire a bien été envoyé !";
          if(isset($_POST['nom'])) {
            $nom = $_POST['nom'];
            echo "Le champs nom existe bien<br>"; 
          } else {
            echo "Le champs nom n'existe pas<br>"; 
          }

          if(!empty($_POST["nom"])) {
            $nom = $_POST['nom'];
            echo "Le champs NOM est bien rempli avec la valeur $nom<br>";
          } else {
            echo "Le champs NOM est vide<br>";
          }
          if(isset($_POST['nom']) && !empty($_POST["nom"])) {
          }
        }
        require_once "./inc/form.contact.post.tpl.php";
      ?>
    </p>
    <a href="./index.php" class="post__link">back to home</a>
  </div>
</div>
<?php
  require_once "inc/footer.tpl.php";
?>
