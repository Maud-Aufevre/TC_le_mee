<?php
ob_start();
?>

<h1 class="h2 text-center mb-5 mt-5">Message reçu le : <?= $data[0]->getDate_reception(); ?></h1>

<div class="text-right mb-5">
    <a href="./index.php?action=messages" class="btn btn-secondary mr-5">Retour</a>
</div>

<table class="table table-hover">
    <tbody class="container">
        <tr class="bg-white">
            <th colspan="2" class="text-center">de : <?=stripslashes($data[0]->getPrenom()); ?> <?=stripslashes($data[0]->getNom()); ?></th>
        </tr>
        <tr class="row">
            <th class="text-right col-4">Téléphone</th>
            <td class="col-8"><?=$data[0]->getTel(); ?></td>
        </tr>
        <tr class="row">
            <th class="text-right col-4">Email</th>
            <td class="col-8"><?=$data[0]->getEmail(); ?></td>
        </tr>
        <tr class="row">
            <th class="text-right col-4">Message</th>
            <td class="col-8"><?=stripslashes($data[0]->getMessage()); ?></td>
        </tr>
        <tr>
            <td colspan="2" class="text-center">
                <a class="btn btn-secondary" href="mailto:<?=$data[0]->getEmail(); ?>"> 
                <i class="fa fa-paper-plane" aria-hidden="true"></i> Envoyer un mail</a>
                <a class="btn btn-danger" href="index.php?action=delete_message&id=<?=$data[0]->getId_message();?>"
                onclick="return confirm('Etes-vous sûr de vouloir supprimer ce message ?')"> 
                <i class=" fa fa-trash"></i> Supprimer</a>
            </td>
        </tr>
    </tbody>
</table>

<?php 
define('ROOT',dirname(__DIR__));
$content = ob_get_clean();
require_once(ROOT.'./template.php');
?>