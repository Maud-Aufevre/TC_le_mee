<?php
ob_start();
?>

<h1 class="h2 text-center mb-5 mt-5">
Modification du bandeau :
<?php if($_GET['action']=='modif_car_event_club'){ ?>
évènement club
<?php }else if($_GET['action']=='modif_car_event_tennis'){ ?>
évènement tennis
<?php }else if($_GET['action']=='modif_car_ecole'){ ?>
école de tennis
<?php }else if($_GET['action']=='modif_car_resa'){ ?>
réservation de terrain
<?php }else{ ?>
actualités
<?php } ?>

</h1>

<div class="text-right">
    <?php if($_GET['action']=='modif_car_event_club'){ ?>
        <a href="./index.php?action=car_event_club&id=1" class="btn btn-secondary mr-5">Retour</a>
    <?php }else if($_GET['action']=='modif_car_event_tennis'){ ?>
        <a href="./index.php?action=car_event_tennis&id=2" class="btn btn-secondary mr-5">Retour</a>
    <?php }else if($_GET['action']=='modif_car_ecole'){ ?>
        <a href="./index.php?action=car_ecole&id=3" class="btn btn-secondary mr-5">Retour</a>
    <?php }else if($_GET['action']=='modif_car_resa'){ ?>
        <a href="./index.php?action=car_resa&id=4" class="btn btn-secondary mr-5">Retour</a>
    <?php }else{ ?>
        <a href="./index.php?action=car_actus&id=5" class="btn btn-secondary mr-5">Retour</a>
    <?php } ?>
</div>

<div class="container">
    <div class="row justify-content-center">
        <div class="col-4">
            <form action="" method="post" enctype="multipart/form-data">
                <div class="form-group">
                    <label for="titre">Titre du bandeau* :</label>
                    <input type="text" id="titre" name="titre" value="<?=stripslashes($data[0]->getTitre());?>" class="form-control">
                </div>
                <div class="form-group">
                    <label for="visuel">Visuel* :</label>
                    <div class="mb-1">
                        <img src="./assets/images/carrousel/<?=$data[0]->getVisuel();?>" alt="visuel" width=300>
                    </div>
                    <input type="File" id="visuel" name="visuel" class="form-control">
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