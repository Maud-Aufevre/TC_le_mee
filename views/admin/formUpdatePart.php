<?php
ob_start();
?>

<h1 class="h2 text-center mb-5 mt-5">Modification du partenaire : <?=$data[0]->getNom();?></h1>

<div class="text-right">
    <a href="./index.php?action=cl_part" class="btn btn-secondary mr-5">Retour</a>
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
                    <label for="logo">Logo* :</label>
                    <div class="mb-1">
                        <img src="./assets/images/partenaires/<?=$data[0]->getLogo();?>" alt="logo de <?=$data[0]->getNom();?>" width=150>
                    </div>
                    <input type="File" id="logo" name="logo" class="form-control">
                </div>
                <div class="form-group">
                    <label for="des">Description* :</label>
                    <textarea name="des" id="" cols="30" rows="10" class="form-control"><?=$data[0]->getDescription();?></textarea>
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