<?php
ob_start();
// var_dump($datasCat); die;
?>

<div id="presInstall">
    <h2>Toutes les actualités du club</h2>
    <div id="actus">
        <?php $i=0; foreach($datasActus as $d) {  ?>
            <div class="actualite">
                <img class="catActu" src="./assets/images/actus/<?=$datasCat[$i]->getVisuel()?>" alt="">
                <h3 class="titreActu"><?=stripslashes($d->getTitre())?></h3>
                <p class="date_actu">Publiée le <?=date('d/m/Y', strtotime($d->getDate_parution()))?> à <?=date('H:i',strtotime($d->getDate_parution()))?></p>
                <img src="./assets/images/actus/<?=$d->getVisuel()?>" alt="photo de <?=stripslashes($d->getTitre())?>" title="<?=stripslashes($d->getTitre())?>" class="imgActualite">
                <p class="txtActu"><?=stripslashes($d->getResume())?></p>
                <div>
                    <a  class="lien" href="index.php?action=lire_actu&id=<?=$d->getId_article()?>">Lire plus</a>
                </div>
                <div class="partage">
                    <p>Partagez cet article</p>

                    <!-- //Facebook -->
                    <a target="_blank" title="Facebook" href="https://www.facebook.com/sharer/sharer.php?u=https://index.php?action=lire_actu&id=<?=$d->getId_article()?>" rel="nofollow" onclick="javascript:window.open(this.href, '', 'menubar=no,toolbar=no,resizable=yes,scrollbars=yes,height=500,width=700');return false;"><img src="./assets/images/partage-fb.png" alt="Facebook" /></a>
                    <!-- //Facebook -->
 
                    <!-- Twitter -->
                    <a target="_blank" title="Twitter" href="https://twitter.com/intent/tweet?url=https://index.php?action=lire_actu&id=<?=$d->getId_article()?>&text=" rel="nofollow" onclick="javascript:window.open(this.href, '', 'menubar=no,toolbar=no,resizable=yes,scrollbars=yes,height=400,width=700');return false;"><img src="./assets/images/partage-twitter.png" alt="Twitter" /></a>
                    <!-- //Twitter -->
                    
                    <!-- Mail -->
                    <a target="_blank" title="Google +" href="mailto:info@example.com?&subject=&body=https://index.php?action=lire_actu&id=<?=$d->getId_article()?> " rel="nofollow" onclick="javascript:window.open(this.href, '', 'menubar=no,toolbar=no,resizable=yes,scrollbars=yes,height=450,width=650');return false;"><img src="./assets/images/partage-mail.png" alt="Google Plus" /></a>
                    <!-- Mail -->
                    
                </div>
            </div>
        <?php $i++; } ?>
    </div>
</div> 

<?php 
define('ROOT',dirname(__DIR__));
$content = ob_get_clean();
require_once(ROOT.'./gabarit.php');
?>