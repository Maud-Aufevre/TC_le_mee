<?php
ob_start();
?>

<h1 class="h2 text-center mb-5 mt-5">Liste des enseignants</h1>
<div><a href="index.php?action=add_ens" class="btn btn-warning mb-3">Ajouter un enseignant</a></div>
<table class="table table-hover">
    <thead>
        <tr class="">
            <th>Id</th>
            <th>Nom</th>
            <th>Prénom</th>
            <th>Fonction</th>
            <th>Photo</th>
            <th>Actions</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach($datas as $data){ ?>
        <tr>
            <td><?=$data->getId_ens(); ?></td>
            <td><?=stripslashes($data->getNom()); ?></td>
            <td><?=stripslashes($data->getPrenom()); ?></td>
            <td><?=stripslashes($data->getFonction()); ?></td>
            <td><img src="./assets/images/enseignants/<?=$data->getPhoto(); ?>" alt="photo de <?=$data->getPrenom(); ?> <?=$data->getNom(); ?>" width=150></td>
            <td>
                <a class="btn btn-secondary" href="index.php?action=modif_ens&id=<?=$data->getId_ens(); ?>"> 
                 <i class="fa fa-pencil-square-o" aria-hidden="true"></i></a>
                <a class="btn btn-danger" href="index.php?action=delete_ens&id=<?=$data->getId_ens();?>&photo=<?=$data->getPhoto();?>"
                 onclick="return confirm('Etes-vous sûr de vouloir supprimer cet enseignant ?')"> 
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