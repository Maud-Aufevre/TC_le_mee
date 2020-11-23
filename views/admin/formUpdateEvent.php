<?php
ob_start();
// var_dump($data); die;
?>

<h1 class="h2 text-center mb-5 mt-5">Modification de l'évènement: <?=$data[0]->getNom();?></h1>

<div class="text-right">
<?php if($_GET['action'] == 'modif_event_club') { ?>
    <a href="./index.php?action=car_event_club&id=1" class="btn btn-secondary mr-5">Retour</a>
<?php } else { ?>
    <a href="./index.php?action=car_event_tennis&id=2" class="btn btn-secondary mr-5">Retour</a>
<?php } ?>
</div>

<div class="container">
    <div class="row justify-content-center">
        <div class="col-4">
            <form action="" method="post" enctype="multipart/form-data">
                <div class="form-group">
                    <label for="nom">Nom de l'évènement* :</label>
                    <input type="text" id="nom" name="nom" value="<?=stripslashes($data[0]->getNom());?>" class="form-control">
                </div>
                <div class="form-group">
                    <label for="visuel">Visuel* :</label>
                    <div class="mb-1">
                    <?php if($_GET['action'] == 'modif_event_club') { ?>
                        <img src="./assets/images/events_club/<?=$data[0]->getVisuel();?>" alt="visuel" width=150>
                    <?php } else { ?>
                        <img src="./assets/images/events_tennis/<?=$data[0]->getVisuel();?>" alt="visuel" width=150>
                    <?php } ?>
                    </div>
                    <input type="File" id="visuel" name="visuel" class="form-control">
                </div>
                <div class="form-group">
                    <label for="date_debut">Date de début* :</label>
                    <input type="date" id="date_debut" name="date_debut" class="form-control" value="<?=$data[0]->getDate_debut();?>">
                </div>
                <div class="form-group">
                    <label for="date_fin">Date de fin* :</label>
                    <input type="date" id="date_fin" name="date_fin" class="form-control" value="<?=$data[0]->getDate_fin();?>">
                </div>
                <div class="form-group">
                    <label for="contenu">Contenu* :</label>
                    <textarea class="form-control" name="contenu" id="contenu" rows="15"><?=stripslashes($data[0]->getContenu());?></textarea>
                </div>
                <div class="form-group">
                    <label for="contact">Contact* :</label>
                    <textarea class="form-control" name="contact" id="contact" rows="7"><?=stripslashes($data[0]->getContact());?></textarea>
                </div>
                <p class="text-danger"><small>
                    ATTENTION: Les dates d'affichage des évènements ne doivent pas se superposer
                </small></p>
                <div class="form-group">
                    <label for="debut_affichage">Date de début d'affichage de l'évènement sur le site web* :</label>
                    <input type="date" id="debut_affichage" name="debut_affichage" class="form-control" value="<?=$data[0]->getDebut_affichage();?>">
                </div>
                <div class="form-group">
                <label for="fin_affichage">Date de fin d'affichage de l'évènement sur le site web* :</label>
                    <input type="date" id="fin_affichage" name="fin_affichage" class="form-control" value="<?=$data[0]->getFin_affichage();?>">
                </div>
                <button type="submit" name="modif" class="btn btn-warning btn-block">Modifier</button>
            </form>
        </div>
    </div>
</div>

<?php
$content = ob_get_clean();
require_once('./views/template.php');
?>