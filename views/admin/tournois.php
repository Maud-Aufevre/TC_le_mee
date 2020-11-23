<?php
ob_start();
?>

<h1 class="h2 text-center mb-5 mt-5">Liste des tournois du club</h1>
<div><a href="index.php?action=add_tournoi" class="btn btn-warning mb-3">Ajouter un tournoi</a></div>

<table class="table table-hover">
    <tbody>
        <?php foreach($datas as $data){ ?>
                <tr class="bg-white">
                        <th colspan="2" class="text-center"><?=stripslashes($data->getNom()); ?></th>
                </tr>
                <tr>
                    <th class="text-right">Id</th>
                    <td><?=$data->getId_tournoi(); ?></td>
                </tr>
                <tr>
                    <th class="text-right">Date de début</th>
                    <td><small><?=$data->getDate_debut(); ?><small></td>
                </tr>
                <tr>
                    <th class="text-right">Date de fin</th>
                    <td><small><?=$data->getDate_fin(); ?><small></td>
                </tr>
                <tr>
                    <th class="text-right">Disciplines</th>
                    <td><small><?=stripslashes($data->getDisciplines()); ?><small></td>
                </tr>
                <tr>
                    <th class="text-right">Classements</th>
                    <td><small><?=stripslashes($data->getClassements()); ?><small></td>
                </tr>
                <tr>
                    <th class="text-right">Tarif adultes</th>
                    <td><?=$data->getTarif_adultes(); ?>€</td>
                </tr>
                <tr>
                    <th class="text-right">Tarif jeunes</th>
                    <td><?=$data->getTarif_jeunes(); ?>€</td>
                </tr>
                <tr>
                    <th class="text-right">Juge arbitre</th>
                    <td><?=stripslashes($data->getJuge_arbitre()); ?></td>
                </tr>
                <tr>
                    <th class="text-right">Prix vainqueurs</th>
                    <td><?=stripslashes($data->getPrix_vainqueurs()); ?></td>
                </tr>
                <tr>
                    <th class="text-right">Prix finalistes</th>
                    <td><?=stripslashes($data->getFinalistes()); ?></td>
                </tr>
                <tr>
                    <th class="text-right">Prix demi-finalistes</th>
                    <td><?=stripslashes($data->getPrix_demi_fin()); ?></td>
                </tr>
                <tr>
                    <th class="text-right">Numéro d'homologation</th>
                    <td><?=stripslashes($data->getNum_homologation()); ?></td>
                </tr>
                <tr>
                    <th class="text-right">Contact</th>
                    <td><small><?=stripslashes($data->getContact()); ?></small></td>
                </tr>
                <tr>
                    <td colspan="2" class="text-center">
                        <a class="btn btn-secondary" href="index.php?action=modif_tournoi&id=<?=$data->getId_tournoi(); ?>"> 
                        <i class="fa fa-pencil-square-o" aria-hidden="true"></i></a>
                        <a class="btn btn-danger" href="index.php?action=delete_tournoi&id=<?=$data->getId_tournoi();?>"
                        onclick="return confirm('Etes-vous sûr de vouloir supprimer ce tournoi ?')"> 
                        <i class=" fa fa-trash"></i></a>
                    </td>
                </tr>
        <?php } ?>
    </tbody>
</table>


<?php 
define('ROOT',dirname(__DIR__));
$content = ob_get_clean();
require_once(ROOT.'./template.php');
?>