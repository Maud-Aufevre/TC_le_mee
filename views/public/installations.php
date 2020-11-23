<?php
ob_start();
?>

    <h2>Nos infrastructures</h2>

    <div class="divImg">
        <img src="./assets/images/installations/installations-1.jpg" alt="installations">
    </div>

    <div class="presInstall">
        <h3>Entre quick et terre battue ...</h3>
        <p>
            Implanté sur plus de 2 hectares, à l’entrée de la ville, dans le prolongement de l’hippodrome et du Golf, le Tennis Club vous séduira :
            <br/>
            Par la qualité et le choix de ses infrastructures, (terrains en dur, en terre battue, couverts et extérieurs, deux grands parkings), accès aux personnes à mobilité réduite.
            <br/>
            Un Club House typique de la belle époque rénové début 2017.
            Un bar et un restaurant avec terrasse ombragée.
            <br/>
            Plus grand Club de Savoie labellisé « Club Référent », c’est l’assurance pour tous de pratiquer un Tennis de loisir et/ou de compétition. Le T.C/Aix, un club où il fait bon jouer et progresser.
        </p>
    </div>
    

    <div class="imgBloc">
            <img src="./assets/images/installations/installations-3.jpg" class="imgBig" id="big" alt="terrains"  />
            <div>
                <img class="imgSmall" src="./assets/images/installations/installations-club-house-2.jpg" alt="club house" width="50px"/>
                <img class="imgSmall" src="./assets/images/installations/installations-3.jpg" alt="terrains" height="50px"/>
                <img class="imgSmall" src="./assets/images/installations/parking.jpg" alt="parking" width="50px"/>
                <img class="imgSmall" src="./assets/images/installations/installations-1.jpg" alt="terrains" height="50px"/>
                <img class="imgSmall" src="./assets/images/installations/installations-mini-tennis.jpg" alt="mini tennis" width="50px"/>
                <img class="imgSmall" src="./assets/images/installations/installations-club-house.jpg" alt="club house" height="50px"/>
                <img class="imgSmall" src="./assets/images/installations/installations-salle-musculation.jpg" alt="salle de musculation" width="50px"/>
            </div>
    </div>
       

<?php 
define('ROOT',dirname(__DIR__));
$content = ob_get_clean();
require_once(ROOT.'./gabarit.php');
?>


