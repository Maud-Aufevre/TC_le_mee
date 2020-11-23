<?php
ob_start();
// var_dump($datas); die;
?>

<h1 class="h2 text-center mb-5 mt-5">Liste des actus</h1>
<div><a href="index.php?action=add_actu" class="btn btn-warning mb-3">Ajouter une actu</a></div>
<table class="table table-hover">
    <tbody>
        <?php foreach($datas as $data){ ?>
            <tr class="bg-white">
                <th colspan="2" class="text-center">Article <?=$data->getId_article(); ?> - <?=stripslashes($data->getTitre()); ?></th>
            </tr>
            <tr>
                <th>Visuel</th>
                <td><img src="./assets/images/actus/<?=$data->getVisuel(); ?>" alt="visuel article" width=150></td>
            </tr>
            <tr>
                <th>Date de parution</th>
                <td><?=$data->getDate_parution(); ?></td>
            </tr>
            <tr>
                <th>Résumé</th>
                <td><small><?=stripslashes($data->getResume()); ?><small></td>
            </tr>
            <tr>
                <th>Texte</th>
                <td><small><?=stripslashes($data->getTexte()); ?><small></td>
            </tr>
            <tr>
                <th>Illustration 1</th>
                <td><img src="./assets/images/actus/<?=$data->getIllu1(); ?>" alt="visuel article" width=150></td>
            </tr>
            <tr>
                <th>Illustration 2</th>
                <td><img src="./assets/images/actus/<?=$data->getIllu2(); ?>" alt="visuel article" width=150></td>
            </tr>
            <tr>
                <th>Catégorie d'actualité</th>
                <td><?=$data->nom ?></td>
            </tr>
            <tr>
                <td class="text-center" colspan="2">
                    <a class="btn btn-secondary" href="index.php?action=modif_actu&id=<?=$data->getId_article(); ?>"> 
                    <i class="fa fa-pencil-square-o" aria-hidden="true"></i></a>
                    <a class="btn btn-danger" href="index.php?action=delete_actu&id=<?=$data->getId_article();?>&visuel=<?=$data->getVisuel();?>&illu1=<?=$data->getIllu1();?>&illu2=<?=$data->getIllu2();?>"
                    onclick="return confirm('Etes-vous sûr de vouloir supprimer cet article ?')"> 
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