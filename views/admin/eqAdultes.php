<?php
ob_start();
?>

<h1 class="h2 text-center mb-5 mt-5">Liste des équipes adultes</h1>
<div><a href="index.php?action=add_eq_adultes" class="btn btn-warning mb-3">Ajouter une équipe</a></div>
<table class="table table-hover">
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
            <td><?=stripslashes($data->getNom()); ?></td>
            <td>
                <?php if($data->getSexe() == 0){ ?>
                H
                <?php }else{ ?>
                F
                <?php } ?>
            </td>
            <td><?=$data->getCategorie(); ?></td>
            <td>
                <a href="#ex1" rel="modal:open" class="text-dark">
                    <?=$data->nom1; ?>
                </a>

                <!-- modal -->
                <div id="ex1" class="modal bg-white">
                    <p class="display-4 text-center"><?=$data->prenom1;?> <?=$data->nom1;?></p>
                    <p class="h6 text-center">Date de naissance : <?=$data->date_naissance1;?></p>
                    <p class="h4 text-center mt-4">Classement : <?=$data->classement1;?></p>
                    <div class="text-center mt-5">
                    <a href="#" rel="modal:close" class="btn btn-secondary ">Fermer</a>
                    </div>
                </div>
            </td>
            <td>
                <a href="#ex2" rel="modal:open" class="text-dark">
                    <?=$data->nom2; ?>
                </a>

                <!-- modal -->
                <div id="ex2" class="modal bg-white">
                    <p class="display-4 text-center"><?=$data->prenom2;?> <?=$data->nom2;?></p>
                    <p class="h6 text-center">Date de naissance : <?=$data->date_naissance2;?></p>
                    <p class="h4 text-center mt-4"><?=$data->classement2;?></p>
                    <div class="text-center mt-5">
                    <a href="#" rel="modal:close" class="btn btn-secondary ">Fermer</a>
                    </div>
                </div>
            </td>
            <?php if(isset($id_joueur3)){ ?>
            <td>
                <a href="#ex3" rel="modal:open" class="text-dark">
                    <?=$data->nom3; ?>
                </a>

                <!-- modal -->
                <div id="ex3" class="modal bg-white">
                    <p class="display-4 text-center"><?=$data->prenom3;?> <?=$data->nom3;?></p>
                    <p class="h6 text-center">Date de naissance : <?=$data->date_naissance3;?></p>
                    <p class="h4 text-center mt-4"><?=$data->classement3;?></p>
                    <div class="text-center mt-5">
                    <a href="#" rel="modal:close" class="btn btn-secondary ">Fermer</a>
                    </div>
                </div>
            </td>
            <?php }else{ ?>
                <td>Pas de joueur 3</td>
            <?php } ?>   
            <?php if(isset($id_joueur4)){ ?>
            <td>
                <a href="#ex4" rel="modal:open" class="text-dark">
                    <?=$data->nom4; ?>
                </a>

                <!-- modal -->
                <div id="ex4" class="modal bg-white">
                    <p class="display-4 text-center"><?=$data->prenom4;?> <?=$data->nom4;?></p>
                    <p class="h6 text-center">Date de naissance : <?=$data->date_naissance4;?></p>
                    <p class="h4 text-center mt-4"><?=$data->classement4;?></p>
                    <div class="text-center mt-5">
                    <a href="#" rel="modal:close" class="btn btn-secondary ">Fermer</a>
                    </div>
                </div>
            </td>
            <?php }else{ ?>
                <td>Pas de joueur 4</td>
            <?php } ?> 
            <?php if(isset($id_joueur5)){ ?>
            <td>
                <a href="#ex5" rel="modal:open" class="text-dark">
                    <?=$data->nom5; ?>
                </a>

                <!-- modal -->
                <div id="ex5" class="modal bg-white">
                    <p class="display-4 text-center"><?=$data->prenom5;?> <?=$data->nom5;?></p>
                    <p class="h6 text-center">Date de naissance : <?=$data->date_naissance5;?></p>
                    <p class="h4 text-center mt-4"><?=$data->classement5;?></p>
                    <div class="text-center mt-5">
                    <a href="#" rel="modal:close" class="btn btn-secondary ">Fermer</a>
                    </div>
                </div>
            </td>
            <?php }else{ ?>
                <td>Pas de joueur 5</td>
            <?php } ?> 
            <td>
                <a class="btn btn-secondary" href="index.php?action=modif_eq_adultes&id=<?=$data->getId_equipe(); ?>"> 
                 <i class="fa fa-pencil-square-o" aria-hidden="true"></i></a>
                <a class="btn btn-danger" href="index.php?action=delete_eq_adultes&id=<?=$data->getId_equipe();?>"
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