<?php
ob_start();
?>

<h1 class="h2 text-center mb-5 mt-5">Modification du membre : <?=$data[0]->getPrenom();?> <?=$data[0]->getNom();?></h1>

<div class="text-right">
    <a href="./index.php?action=cl_bureau" class="btn btn-secondary mr-5">Retour</a>
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
                    <label for="fonction">Fonction* :</label>
                    <input type="text" id="fonction" name="fonction" value="<?=$data[0]->getFonction();?>" class="form-control">
                </div>
                <div class="form-group">
                    <label for="photo">Photo* :</label>
                    <div class="mb-1">
                        <img src="./assets/images/bureau/<?=$data[0]->getPhoto();?>" alt="photo de <?=$data[0]->getPrenom();?> <?=$data[0]->getNom();?>" width=150>
                    </div>
                    <input type="File" id="photo" name="photo" class="form-control">
                </div>
                <div class="form-group">
                    <label for="discours">Discours (uniquement pour le président) :</label>
                    <textarea name="discours" id="discours" cols="30" rows="10" class="form-control"><?=$data[0]->getDiscours();?></textarea>
                </div>
                <button type="submit" name="modif" class="btn btn-warning btn-block ">Modifier</button>

            </form>
        </div>
    </div>
</div>

<?php
$content = ob_get_clean();
require_once('./views/template.php');
?>