<?php
ob_start();
?>

<h1 class="h2 text-center mb-5 mt-5">Liste des équipes jeunes</h1>
<div><a href="index.php?action=add_eq_jeunes" class="btn btn-warning mb-3">Ajouter une équipe</a></div>
<table class="table table-striped">
    <thead>
        <tr class="">
            <th>Id</th>
            <th>Equipe</th>
            <th>Sexe</th>
            <th>Catégorie</th>
            <th>Joueur 1</th>
            <th>Joueur 2</th>
            <th>Joueur 3</th>
            <th>Joueur 4</th>
            <th>Joueur 5</th>
            <th>Actions</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach($datas as $data){ ?>
        <tr>
            <td><?=$data->getId_equipe(); ?></td>
            <td><?=$data->getNom(); ?></td>
            <td>
                <?php if($data->getSexe() == 0){ ?>
                H
                <?php }else{ ?>
                F
                <?php } ?>
            </td>
            <td><?=$data->getCategorie(); ?></td>
            <td><?=$data->nom1; ?></td>
            <td><?=$data->nom2; ?></td>
            <?php if(isset($id_joueur3)){ ?>
            <td><?=$data->nom3; ?></td>
            <?php }else{ ?>
                <td>Pas de joueur 3</td>
            <?php } ?>   
            <?php if(isset($id_joueur4)){ ?>
            <td><?=$data->nom4; ?></td>
            <?php }else{ ?>
                <td>Pas de joueur 4</td>
            <?php } ?> 
            <?php if(isset($id_joueur5)){ ?>
            <td><?=$data->nom5; ?></td>
            <?php }else{ ?>
                <td>Pas de joueur 5</td>
            <?php } ?> 
            <td>
                <a class="btn btn-secondary" href="index.php?action=modif_eq_jeunes&id=<?=$data->getId_equipe(); ?>"> 
                 <i class="fa fa-pencil-square-o" aria-hidden="true"></i></a>
                <a class="btn btn-danger" href="index.php?action=delete_eq_jeunes&id=<?=$data->getId_equipe();?>"
                 onclick="return confirm('Etes-vous sûr de vouloir supprimer cette équipe ?')"> 
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