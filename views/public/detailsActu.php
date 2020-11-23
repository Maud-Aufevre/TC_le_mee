<?php
ob_start();
// var_dump($datasActus[0]); die;
?>

<div class="boutonRetour">
    <a class="retour" href="./index.php?action=actualites" class="btn btn-secondary mr-5">Retour aux actus</a>
</div>

<h2><?=stripslashes($datasActus[0]->getTitre())?></h2>

<div class="divImg">
    <img src="./assets/images/actus/<?=$datasActus[0]->getVisuel()?>" alt="photo de <?=stripslashes($datasActus[0]->getTitre())?>">
</div>

<div class="presInstall">
    <p><?=stripslashes($datasActus[0]->getResume())?></p>
    
    <div class="imgActu">
        <img src="./assets/images/actus/<?=$datasActus[0]->getIllu1()?>" class="imgBig" alt="terrains"  />            
    </div>
    
    <p><?=stripslashes($datasActus[0]->getTexte())?></p>
    
    <div class="imgActu">
        <img src="./assets/images/actus/<?=$datasActus[0]->getIllu2()?>" class="imgBig" alt="terrains"  />            
    </div>

    <div class="partage">
                    <p>Partagez cet article</p>

                    <!-- //Facebook -->
                    <a href="https://www.facebook.com/sharer/sharer.php?u=http://localhost/tc_le_mee/index.php?action=lire_actu&id=<?=$datasActus[0]->getId_article()?>" target="_blank"><img src="./assets/images/partage-fb.png" alt="Facebook" /></a>
 
                    <!-- Twitter -->
                    <a href="https://twitter.com/intent/tweet?url=http://localhost/tc_le_mee/index.php?action=lire_actu&id=<?=$datasActus[0]->getId_article()?>" target="_blank"><img src="./assets/images/partage-twitter.png" alt="Twitter" /></a>
                    
                    <!-- Email -->
                    <a href="mailto:info@example.com?&subject=&body=http://localhost/tc_le_mee/index.php?action=lire_actu&id=4 " target="_blank"><img src="./assets/images/partage-mail.png" alt="Email" /></a>
                    
                </div>

    <div class="boutonRetour">
        <a class="retour" href="./index.php?action=actualites" class="btn btn-secondary mr-5">Retour aux actus</a>
    </div>
</div>



<?php 
define('ROOT',dirname(__DIR__));
$content = ob_get_clean();
require_once(ROOT.'./gabarit.php');
?>