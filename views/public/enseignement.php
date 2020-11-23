<?php
ob_start();
// var_dump($datasPeda); die;
?>

<div id="presInstall">
    <h2>L'équipe pédagogique</h2>

    <div class="divImg">
        <img src="./assets/images/enseignants/equipe-pedagogique.jpg" alt="installations">
    </div>

    <div id="peda">
        <?php foreach($datasPeda as $d) { ?>
            <div class="enseignant">
                <img src="./assets/images/enseignants/<?=$d->getPhoto()?>" alt="photo de <?=$d->getPrenom()?> <?=$d->getNom()?>">
                <p class="nomMembre"><?=stripslashes($d->getPrenom())?> <?=$d->getNom()?></p>
                <p class="fonctionMembre"><?=stripslashes($d->getFonction())?></p>
            </div>
        <?php } ?>
    </div>
</div> 

<?php 
define('ROOT',dirname(__DIR__));
$content = ob_get_clean();
require_once(ROOT.'./gabarit.php');
?>


