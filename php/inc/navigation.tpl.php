<?php
    $navigation = [
        "Plan de site" => "./plan_de_site.php",
        "Mentions légales" => "./mentions_legales.php",
        "Contact" => "./contact.php"
    ]
?>

<nav>
    <ul class="left__nav">
    <?php foreach($navigation as $nomSite => $lien) : ?>
        <li class="left__nav-item"><a href="<?= $lien; ?>" class="left__nav-link"><?= $nomSite; ?></a></li>
    <?php endforeach ?>
    </ul>
</nav>