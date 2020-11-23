<?php
ob_start();
// var_dump($data); die;
?>

<h1 class="text-center h3 mt-5">
Carrousel page d'accueil: onglet 
<?php if($_GET['action']=='car_event_club'){ ?>
"évènement club"
<?php }else if($_GET['action']=='car_event_tennis'){ ?>
"évènement tennis"
<?php }else if($_GET['action']=='car_ecole'){ ?>
"école de tennis"
<?php }else if($_GET['action']=='car_resa'){ ?>
"réservation de terrain"
<?php }else{ ?>
"actualités"
<?php } ?>
</h1>

<div class="carrousel">
    <img class="carrouselImg" src="./assets/images/carrousel/<?=$data[0]->getVisuel(); ?>" alt="visuel"/>
    <h2 class="carrouselTitre"><?=stripslashes($data[0]->getTitre()); ?></h2>
    <div class="row">
        <?php if($_GET['action']=='car_event_club'){ ?>
            <a class="btn btn-secondary offset-5 col-2 mt-3" href="index.php?action=modif_car_event_club&id=1&visuel=<?=$data[0]->getVisuel();?>"> 
            <i class="fa fa-pencil-square-o" aria-hidden="true"></i></a>
        <?php }else if($_GET['action']=='car_event_tennis'){ ?>
            <a class="btn btn-secondary offset-5 col-2 mt-3" href="index.php?action=modif_car_event_tennis&id=2&visuel=<?=$data[0]->getVisuel();?>"> 
            <i class="fa fa-pencil-square-o" aria-hidden="true"></i></a>
        <?php }else if($_GET['action']=='car_ecole'){ ?>
            <a class="btn btn-secondary offset-5 col-2 mt-3" href="index.php?action=modif_car_ecole&id=3&visuel=<?=$data[0]->getVisuel();?>"> 
            <i class="fa fa-pencil-square-o" aria-hidden="true"></i></a>
        <?php }else if($_GET['action']=='car_resa'){ ?>
            <a class="btn btn-secondary offset-5 col-2 mt-3" href="index.php?action=modif_car_resa&id=4&visuel=<?=$data[0]->getVisuel();?>"> 
            <i class="fa fa-pencil-square-o" aria-hidden="true"></i></a>
        <?php }else{ ?>
            <a class="btn btn-secondary offset-5 col-2 mt-3" href="index.php?action=modif_car_actus&id=5&visuel=<?=$data[0]->getVisuel();?>"> 
            <i class="fa fa-pencil-square-o" aria-hidden="true"></i></a>
        <?php } ?>
    </div>
</div>

<?php if($_GET['action']=='car_event_club' || $_GET['action']=='car_event_tennis'){ ?>

<?php if(isset($now)){ ?>
<h2 class="text-center h3 mt-5 mb-3">Evènement affiché en ce moment</h2>
<table class="table table-hover bg-white">
    <thead>
        <tr class="">
            <th>Id</th>
            <th>Nom</th>
            <th>Visuel</th>
            <th>Date début</th>
            <th>Date fin</th>
            <th>Début affichage</th>
            <th>Fin affichage</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td><?=$now[0]->getId_evenement(); ?></td>
            <td><?=stripslashes($now[0]->getNom()); ?></td>
            <?php if($_GET['action']=='car_event_club'){ ?>
                <td><img src="./assets/images/events_club/<?=$now[0]->getVisuel(); ?>" alt="visuel" width=50></td>
            <?php } else { ?>
                <td><img src="./assets/images/events_tennis/<?=$now[0]->getVisuel(); ?>" alt="visuel" width=50></td>
            <?php } ?>
            <td><?=$now[0]->getDate_debut(); ?></td>
            <td><?=$now[0]->getDate_fin(); ?></td>
            <td><?=$now[0]->getDebut_affichage(); ?></td>
            <td><?=$now[0]->getFin_affichage(); ?></td>
        </tr>
    </tbody>
</table>

<?php } ?>

<h2 class="text-center h3 mt-5 mb-3">Liste des évènements de la saison</h2>
<?php if($_GET['action']=='car_event_club'){ ?>
    <div><a href="index.php?action=add_event_club" class="btn btn-warning mb-3">Ajouter un évènement club</a></div>
<?php }else{ ?>
    <div><a href="index.php?action=add_event_tennis" class="btn btn-warning mb-3">Ajouter un évènement tennis</a></div>
<?php } ?>

<table class="table table-hover">
    <thead>
        <tr class="">
            <th>Id</th>
            <th>Nom</th>
            <th>Visuel</th>
            <th>Date début</th>
            <th>Date fin</th>
            <th>Début affichage</th>
            <th>Fin affichage</th>
            <th>Actions</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach($datas as $data){ ?>
        <tr>
            <td><?=$data->getId_evenement(); ?></td>
            <td><?=stripslashes($data->getNom()); ?></td>
            <?php if($_GET['action']=='car_event_club'){ ?>
            
                <td><img src="./assets/images/events_club/<?=$data->getVisuel(); ?>" alt="visuel" width=150></td>
            <?php } else { ?>
                <td><img src="./assets/images/events_tennis/<?=$data->getVisuel(); ?>" alt="visuel" width=150></td>
            <?php } ?>

            <td><?=$data->getDate_debut(); ?></td>
            <td><?=$data->getDate_fin(); ?></td>
            <td><?=$data->getDebut_affichage(); ?></td>
            <td><?=$data->getFin_affichage(); ?></td>
            <td class="m-0">
                <?php if($_GET['action']=='car_event_club'){ ?>
                <div class="justify-content-center">
                    <a class="btn btn-secondary col" href="index.php?action=modif_event_club&id=<?=$data->getId_evenement();?>&visuel=<?=$data->getVisuel();?>"> 
                    <i class="fa fa-pencil-square-o" aria-hidden="true"></i></a>
                    <a class="btn btn-danger col" href="index.php?action=delete_event_club&id=<?=$data->getId_evenement();?>&visuel=<?=$data->getVisuel();?>"
                    onclick="return confirm('Etes-vous sûr de vouloir supprimer cet évènement ?')"> 
                    <i class=" fa fa-trash"></i></a>
                </div>
                <?php } else { ?>
                <div class="justify-content-center">
                    <a class="btn btn-secondary col" href="index.php?action=modif_event_tennis&id=<?=$data->getId_evenement();?>&visuel=<?=$data->getVisuel();?>"> 
                    <i class="fa fa-pencil-square-o" aria-hidden="true"></i></a>
                    <a class="btn btn-danger col" href="index.php?action=delete_event_tennis&id=<?=$data->getId_evenement();?>&visuel=<?=$data->getVisuel();?>"
                    onclick="return confirm('Etes-vous sûr de vouloir supprimer cet évènement ?')"> 
                    <i class=" fa fa-trash"></i></a>
                </div>
                <?php } ?>
            </td>
        </tr>
        <?php } ?>
    </tbody>
</table>

<?php } ?>

<?php 
define('ROOT',dirname(__DIR__));
$content = ob_get_clean();
require_once(ROOT.'./template.php');
?>
