<?php
ob_start();
?>

<h1 class="h2 text-center mb-5 mt-5">Liste des adhésions</h1>
<div><a href="index.php?action=add_adh" class="btn btn-warning mb-3">Ajouter une adhésion</a></div>
<table class="table table-hover mr-0 container">
    <thead>
        <tr>
            <th class="text-center">Id</th>
            <th class="text-center">Nom</th>
            <th class="text-center">Programme</th>
            <th class="text-center">Prix</th>
            <th class="text-center">Actions</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach($datas as $data){ ?>
        <tr>
            <td><?=stripslashes($data->getId_adhesion()); ?></td>
            <td><?=stripslashes($data->getNom()); ?></td>
            <td><small><?=stripslashes($data->getProgramme()); ?><small></td>
            <td><?=$data->getPrix(); ?>€</td>
            <td class="m-0">
                <div class="justify-content-center">
                    <a class="btn btn-secondary w-100 d-block" href="index.php?action=modif_adh&id=<?=$data->getId_adhesion(); ?>"> 
                        <i class="fa fa-pencil-square-o" aria-hidden="true"></i></a>
                </div>
                <div class="justify-content-center">
                    <a class="btn btn-danger w-100 d-block" href="index.php?action=delete_adh&id=<?=$data->getId_adhesion();?>"
                        onclick="return confirm('Etes-vous sûr de vouloir supprimer cette adhésion ?')"> 
                        <i class=" fa fa-trash"></i></a>
                </div>
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