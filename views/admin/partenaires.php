<?php
ob_start();
?>

<h1 class="h2 text-center mb-5 mt-5">Liste des partenaires</h1>
<div><a href="index.php?action=add_part" class="btn btn-warning mb-3">Ajouter un partenaire</a></div>
<table class="table table-striped">
    <thead>
        <tr class="">
            <th>Id</th>
            <th>Nom</th>
            <th>Logo</th>
            <th>Description</th>
            <th>Actions</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach($datas as $data){ ?>
        <tr>
            <td><?=$data->getId_partenaire(); ?></td>
            <td><?=$data->getNom(); ?></td>
            <td><img src="./assets/images/partenaires/<?=$data->getLogo(); ?>" alt="photo de <?=$data->getNom(); ?>" width=150></td>
            <td><small><?=$data->getDescription(); ?><small></td>
            <td class="row">
                <a class="btn btn-secondary col" href="index.php?action=modif_part&id=<?=$data->getId_partenaire(); ?>"> 
                 <i class="fa fa-pencil-square-o" aria-hidden="true"></i></a>
                <a class="btn btn-danger col" href="index.php?action=delete_part&id=<?=$data->getId_partenaire();?>&logo=<?=$data->getLogo();?>"
                 onclick="return confirm('Etes-vous sûr de vouloir supprimer ce partenaire ?')"> 
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