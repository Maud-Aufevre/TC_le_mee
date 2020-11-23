<?php
ob_start();
// var_dump($datasBureau); die;
?>

<div id="presInstall">
    <h2>Les membres du bureau</h2>
    <div id="bureau">
        <?php foreach($datasBureau as $d) { ?>
            <div class="membre">
                <img src="./assets/images/bureau/<?=$d->getPhoto()?>" alt="photo de <?=$d->getPrenom()?> <?=$d->getNom()?>">
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


