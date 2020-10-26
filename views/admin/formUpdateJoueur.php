<?php
ob_start();
// var_dump($data); die;
?>

<h1 class="h2 text-center mb-5 mt-5">Modification du joueur : <?=$data[0]->getPrenom();?> <?=$data[0]->getNom();?></h1>

<div class="text-right">
    <a href="./index.php?action=comp_joueurs" class="btn btn-secondary mr-5">Retour</a>
</div>

<div class="container">
    <div class="row justify-content-center">
        <div class="col-4">
            <form action="" method="post" enctype="multipart/form-data">
                <div class="form-group">
                    <label for="nom">Nom* :</label>
                    <input type="text" id="nom" name="nom" value="<?=$data[0]->getNom();?>" class="form-control">
                </div>
                <div class="form-group">
                    <label for="prenom">Prénom* :</label>
                    <input type="text" id="prenom" name="prenom" value="<?=$data[0]->getPrenom();?>" class="form-control">
                </div>
                <div class="form-group">
                    <p>Sexe* :</p>
                    <?php if($data[0]->getSexe() == 0) { ?>
                    <label class="radio-inline"><input type="radio" name="sexe" value="H" checked>H</label>
                    <label class="radio-inline"><input type="radio" value="F" name="sexe">F</label>
                    <?php }else{ ?>
                        <label class="radio-inline"><input type="radio" name="sexe" value="H" checked>H</label>
                        <label class="radio-inline"><input type="radio" value="F" name="sexe">F</label>
                    <?php } ?>
                </div>
                <div class="form-group">
                    <label for="age">Date de naissance* :</label>
                    <input type="date" id="age" name="age" value="<?=$data[0]->getDate_naissance();?>" class="form-control">
                </div>
                <div class="form-group">
                    <label for="photo">Photo* :</label>
                    <div class="mb-1">
                        <img src="./assets/images/joueurs/<?=$data[0]->getPhoto();?>" alt="photo de <?=$data[0]->getPrenom();?> <?=$data[0]->getNom();?>" width=150>
                    </div>
                    <input type="File" id="photo" name="photo" class="form-control">
                </div>
                <div class="form-group">
                <label for="classement">Classement* :</label>
                    <select name="classement" id="classement" class="form-control">
                        <option value="<?=$data[0]->getId_classement();?>"><?=$data[0]->classement;?></option>
                        <?php foreach($classements as $class){ ?>
                            <option value="<?=$class->getId_classement();?>"><?=$class->getClassement();?></option>
                        <?php } ?>
                    </select>
                </div>
                <button type="submit" name="modif" class="btn btn-warning btn-block">Modifier</button>
            </form>
        </div>
    </div>
</div>

<?php
$content = ob_get_clean();
require_once('./views/template.php');
?>