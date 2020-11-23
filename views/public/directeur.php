<?php
ob_start();
// var_dump($datasPeda); die;
?>

            <!-- DISCOURS DU DIRECTEUR -->

            <h2>La bonne gestion du club <br/> nous tient à coeur</h2>
    <div class="cat">
        <h3>Le mot du Directeur Sportif</h3>
        <img src="./assets/images/enseignants/<?= $datasDir[0]->getPhoto() ?>" alt="photo de <?= stripslashes($datasDir[0]->getPrenom()) ?> <?= stripslashes($datasDir[0]->getNom()) ?>">
        <p class="catTxt"><?= stripslashes($datasDir[0]->getDiscours()) ?></p>
        <p class="signature"><?= stripslashes($datasDir[0]->getPrenom()) ?> <?= stripslashes($datasDir[0]->getNom()) ?></p>
    </div>

<?php 
define('ROOT',dirname(__DIR__));
$content = ob_get_clean();
require_once(ROOT.'./gabarit.php');
?>