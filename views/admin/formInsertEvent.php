<?php
ob_start();
?>

<h1 class="h2 text-center mb-5 mt-5">Ajout d'un évènement club</h1>

<div class="text-right">
    <a href="./index.php?action=car_event_club&id=1" class="btn btn-secondary mr-5">Retour</a>
</div>

<div class="container">
    <div class="row justify-content-center">
        <div class="col-4">
            <?php
                if(isset($error)){
                    echo"<div class='alert alert-danger text-center'>$error</div>";
                }
            ?>
            <form action="" method="post" enctype="multipart/form-data">
                <div class="form-group">
                    <label for="nom">Nom de l'évènement* :</label>
                    <input type="text" id="nom" name="nom" placeholder="Saisir le nom de l'évènement" class="form-control">
                </div>
                <div class="form-group">
                    <label for="visuel">Visuel* :</label>
                    <input type="File" id="visuel" name="visuel" class="form-control">
                </div>
                <div class="form-group">
                    <label for="date_debut">Date de début* :</label>
                    <input type="date" id="date_debut" name="date_debut" class="form-control">
                </div>
                <div class="form-group">
                    <label for="date_fin">Date de fin* :</label>
                    <input type="date" id="date_fin" name="date_fin" class="form-control">
                </div>
                <div class="form-group">
                    <label for="contenu">Contenu* :</label>
                    <textarea class="form-control" name="contenu" id="contenu" rows="15">Descriptif de l'évènement</textarea>
                </div>
                <div class="form-group">
                    <label for="contact">Contact* :</label>
                    <textarea class="form-control" name="contact" id="contact" rows="7">Eléments de contact pour infos et inscriptions</textarea>
                </div>
                <p class="text-danger"><small>
                    ATTENTION: Les dates d'affichage des évènements ne doivent pas se superposer
                </small></p>
                <div class="form-group">
                    <label for="debut_affichage">Date de début d'affichage de l'évènement sur le site web* :</label>
                    <input type="date" id="debut_affichage" name="debut_affichage" class="form-control">
                </div>
                <div class="form-group">
                <label for="fin_affichage">Date de fin d'affichage de l'évènement sur le site web* :</label>
                    <input type="date" id="fin_affichage" name="fin_affichage" class="form-control">
                </div>
                <button type="submit" name="ajout" class="btn btn-warning btn-block">Ajouter</button>
            </form>
        </div>
    </div>
</div>

<?php
$content = ob_get_clean();
require_once('./views/template.php');
?>