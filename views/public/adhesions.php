<?php
ob_start();
// var_dump($datasAdh); die;
?>

<div id="presInstall">
    <h2>Les adhésions proposées par le club <br/> sur une base de 30 semaines</h2>

    <div id="ad">
        <?php foreach($datasAdh as $d) { ?>
            <div class="adhesion">
                <p class="nomAdh"><?=stripslashes($d->getNom())?></p>
                <p class="programme"><?=stripslashes($d->getProgramme())?></p>
                <p class="prix"><?=$d->getPrix()?> €</p>
            </div>
        <?php } ?>
    </div>
</div> 

<?php 
define('ROOT',dirname(__DIR__));
$content = ob_get_clean();
require_once(ROOT.'./gabarit.php');
?>


