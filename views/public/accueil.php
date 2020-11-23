<?php
ob_start();
// var_dump($datasPart); die;
?>

            <!-- CARROUSEL -->

<header>
    <h1 style="display: none">Tennis club du Mée sur Seine</h1>
    <!-- <div id="getCarrousel1" class="car" style="display:none;">
        <a href="#">
            <div class="image">
                <img class="carrousel" id="carrousel1" src="./assets/images/carrousel/<?= $datasCar[0]->getVisuel() ?>" alt="carrousel">
            </div>
            <p class="titreCar" id="titreCar1"><?= stripslashes($datasCar[0]->getTitre()) ?></p>
        </a>
    </div>
    <div id="getCarrousel2" class="car"  style="display:none;">
        <a href="#">
            <div class="image">
                <img class="carrousel" id="carrousel2" src="./assets/images/carrousel/<?= $datasCar[1]->getVisuel() ?>" alt="carrousel">
            </div>
            <p class="titreCar" id="titreCar2"><?= stripslashes($datasCar[1]->getTitre()) ?></p>
        </a>
    </div> -->
    <div id="getCarrousel3" class="car"  style="display:none;">
        <a href="index.php?action=ecole">
            <div class="image">
                <img class="carrousel" id="carrousel3" src="./assets/images/carrousel/<?= $datasCar[2]->getVisuel() ?>" alt="carrousel">
            </div>
            <p class="titreCar" id="titreCar3"><?= stripslashes($datasCar[2]->getTitre()) ?></p>
        </a>
    </div>
    <div id="getCarrousel4" class="car"  style="display:none;">
        <a href="https://auth.fft.fr/auth/realms/master/protocol/openid-connect/auth?client_id=FED_MET&response_type=code&scope=openid&redirect_uri=https://tenup.fft.fr/user-auth/process" target="_blank" >
            <div class="image">
                <img class="carrousel" id="carrousel4" src="./assets/images/carrousel/<?= $datasCar[3]->getVisuel() ?>" alt="carrousel">
            </div>
            <p class="titreCar" id="titreCar4"><?= stripslashes($datasCar[3]->getTitre()) ?></p>
        </a>
    </div>
    <div id="getCarrousel5" class="car"  style="display:none;">
        <a href="index.php?action=actualites">
            <img class="carrousel" id="carrousel5" src="./assets/images/carrousel/<?= $datasCar[4]->getVisuel() ?>" alt="carrousel">
            <p class="titreCar" id="titreCar5"><?= stripslashes($datasCar[4]->getTitre()) ?></p>
        </a>
    </div>

            <!-- BALLES CARROUSEL -->

    <div id="vignettes">
        <!-- <div class="balle" id="balle1"></div>
        <div class="balle" id="balle2"></div> -->
        <div class="balle" id="balle3"></div>
        <div class="balle" id="balle4"></div>
        <div class="balle" id="balle5"></div>
    </div>
</header> 
<main>

            <!-- DISCOURS DU PRESIDENT -->

    <h2>Bienvenu au tennis club <br/> du Mée sur Seine</h2>
    <div class="cat">
        <h3>Le mot du Président</h3>
        <img src="./assets/images/bureau/<?= $dataDiscours[0]->getPhoto() ?>" alt="">
        <p class="catTxt"><?= stripslashes($dataDiscours[0]->getDiscours()) ?></p>
        <p class="signature"><?= stripslashes($dataDiscours[0]->getPrenom()) ?> <?= stripslashes($dataDiscours[0]->getNom()) ?></p>
    </div>

            <!-- LIENS TENUP PRATIQUES -->

    <h2>Pour progresser,<br/> il faut pratiquer !!</h2>
    <div class="cat">
        <h3>Ten'up, un site simple à utiliser</h3>
        <img src="./assets/images/tenup.jpg" alt="ten'up">
        <p>Une fois votre compte créé, vous pouvez librement :</p>
        <ul>
            <li>Consulter votre palmarès et simuler votre classement</li>
            <li>Réserver un terrain du club</li>
            <li>Consulter les tournois à venir et vous y inscrire</li>
            <li>Consulter les fiches des joueurs et joueuses qui vous intéressent</li>
        </ul>
        <div class="btn">
            <a href="https://auth.fft.fr/auth/realms/master/protocol/openid-connect/auth?client_id=FED_MET&response_type=code&scope=openid&redirect_uri=https://tenup.fft.fr/user-auth/process" class="lien" target="_blank">Connectez-vous !</a>
        </div>
    </div>


            <!-- LIENS PARTENAIRES -->

    <h2>Nos partenaires</h2>
    <div class="catPart">
        <h3>Ils aiment le sport, ils nous font confiance ...</h3>
        <!-- <img src="./assets/images/tenup.jpg" alt="ten'up"> -->
        
        <div id="partenaires">
        <?php foreach($datasPart as $d) { ?>
        <div class="part">
            <a href="https://<?= $d->getSite_web() ?>" target="_blank">
                <img src="./assets/images/partenaires/<?= $d->getLogo() ?>" class="partLogo" alt="logo de <?= $d->getNom() ?>"/>
            </a>
            <div class="partNom">
                <a href="https://<?= $d->getSite_web() ?>" target="_blank">
                    <?= $d->getNom() ?>
                </a>
            </div>
        </div>
        <?php } ?>
        </div>
        <p id="merci">... Merci à eux !</p>
    </div>


</main>         



<?php 
define('ROOT',dirname(__DIR__));
$content = ob_get_clean();
require_once(ROOT.'./gabarit.php');
?>


