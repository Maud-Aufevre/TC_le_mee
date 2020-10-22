<?php
ob_start();
?>

<h1 class="h2 text-center mb-5 mt-5">Liste des joueurs d'équipes</h1>
<div><a href="index.php?action=add_joueur" class="btn btn-warning mb-3">Ajouter un joueur</a></div>
<table class="table table-striped">
<h2 class="h3 text-center mb-5 mt-5">Hommes</h2>
    <thead>
        <tr class="">
            <th>Id</th>
            <th>Sexe</th>
            <th>Nom</th>
            <th>Prénom</th>
            <th>Date de naissance</th>
            <th>Photo</th>
            <th>Classement</th>
            <th>Actions</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach($datas as $data){ ?>
        <?php if($data->getSexe() == "0") { ?>
        <tr>
            <td><?=$data->getId_joueur(); ?></td>
            <td>
            <?php if($data->getSexe() == "0"){ ?>
            H
            <?php }else{ ?>
            F
            <?php } ?>
            </td>
            <td><?=$data->getNom(); ?></td>
            <td><?=$data->getPrenom(); ?></td>
            <td><?=$data->getDate_naissance(); ?></td>
            <td><img src="./assets/images/joueurs/<?=$data->getPhoto(); ?>" alt="photo de <?=$data->getPrenom(); ?> <?=$data->getNom(); ?>" width=150></td>
            <td><?=$data->classement; ?></td>
            <td>
                <a class="btn btn-secondary" href="index.php?action=modif_joueur&id=<?=$data->getId_joueur(); ?>"> 
                 <i class="fa fa-pencil-square-o" aria-hidden="true"></i></a>
                <a class="btn btn-danger" href="index.php?action=delete_joueur&id=<?=$data->getId_joueur();?>&photo=<?=$data->getPhoto();?>"
                 onclick="return confirm('Etes-vous sûr de vouloir supprimer ce joueur ?')"> 
                <i class=" fa fa-trash"></i></a>
            </td>
        </tr>
        <?php }} ?>
    </tbody>
</table>
<table class="table table-striped">
<h2 class="h3 text-center mb-5 mt-5">Femmes</h2>
    <thead>
        <tr class="">
            <th>Id</th>
            <th>Sexe</th>
            <th>Nom</th>
            <th>Prénom</th>
            <th>Date de naissance</th>
            <th>Photo</th>
            <th>Classement</th>
            <th>Actions</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach($datas as $data){ ?>
        <?php if($data->getSexe() == "1") { ?>
        <tr>
            <td><?=$data->getId_joueur(); ?></td>
            <td>
            <?php if($data->getSexe() == "0"){ ?>
            H
            <?php }else{ ?>
            F
            <?php } ?>
            </td>
            <td><?=$data->getNom(); ?></td>
            <td><?=$data->getPrenom(); ?></td>
            <td><?=$data->getDate_naissance(); ?></td>
            <td><img src="./assets/images/joueurs/<?=$data->getPhoto(); ?>" alt="photo de <?=$data->getPrenom(); ?> <?=$data->getNom(); ?>" width=150></td>
            <td><?=$data->classement; ?></td>
            <td>
                <a class="btn btn-secondary" href="index.php?action=modif_joueur&id=<?=$data->getId_joueur(); ?>"> 
                 <i class="fa fa-pencil-square-o" aria-hidden="true"></i></a>
                <a class="btn btn-danger" href="index.php?action=delete_joueur&id=<?=$data->getId_joueur();?>&photo=<?=$data->getPhoto();?>"
                 onclick="return confirm('Etes-vous sûr de vouloir supprimer ce joueur ?')"> 
                <i class=" fa fa-trash"></i></a>
            </td>
        </tr>
        <?php }} ?>
    </tbody>
</table>
<?php 
define('ROOT',dirname(__DIR__));
$content = ob_get_clean();
require_once(ROOT.'./template.php');
?>