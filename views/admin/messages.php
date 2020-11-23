<?php
ob_start();
?>

<h1 class="h2 text-center mb-5 mt-5">Messages reçus via le formulaire de contact</h1>

<table class="table table-hover">
    <thead>
        <tr>
            <th>Id</th>
            <th>Reçu le</th>
            <th>Nom</th>
            <th>Prénom</th>
            <th>Actions</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach($datas as $data){ ?>
            <tr onclick="window.location='index.php?action=lire_message&id=<?=$data->getId_message(); ?>';" class="lu">
                <td class="bold"><?=$data->getId_message(); ?></td>
                <td class="bold"><?=$data->getDate_reception(); ?></td>
                <td class="bold"><?=stripslashes($data->getNom()); ?></td>
                <td class="bold"><?=stripslashes($data->getPrenom()); ?></td>
                <td>
                    <a class="btn btn-secondary visi" href="index.php?action=lire_message&id=<?=$data->getId_message(); ?>"> 
                    <i class="fa fa-eye" aria-hidden="true"></i></a>
                    <a class="btn btn-danger" href="index.php?action=delete_message&id=<?=$data->getId_message();?>"
                        onclick="return confirm('Etes-vous sûr de vouloir supprimer ce message ?')"> 
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