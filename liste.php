<?php
$serveurs = ["srv-web-01", "srv-bdd-01", "srv fichiers 01"];
foreach ($serveurs as $serveur){
    $valeurURL = urlencode($serveur);
    $texte = htmlspecialchars($serveur);

    echo '<a href="detail.php?nom=' . $valeurURL . '">' . $texte . '</a><br>';
}