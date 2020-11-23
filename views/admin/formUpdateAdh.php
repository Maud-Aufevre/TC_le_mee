<?php
ob_start();
?>

<h1 class="h2 text-center mb-5 mt-5">Modification de l'adhésion : <?=stripslashes($data[0]->getNom());?></h1>

<div class="text-right">
    <a href="./index.php?action=adhesions" class="btn btn-secondary mr-5">Retour</a>
</div>

<div class="container">
    <div class="row justify-content-center">
        <div class="col-4">
            <form action="" method="post" enctype="multipart/form-data">
                <div class="form-group">
                    <label for="nom">Nom* :</label>
                    <input type="text" id="nom" name="nom" value="<?=stripslashes($data[0]->getNom());?>" class="form-control">
                </div>
                <div class="form-group">
                    <label for="prog">Programme* :</label>
                    <textarea name="prog" id="prog" cols="30" rows="10" class="form-control"><?=stripslashes($data[0]->getProgramme());?></textarea>
                </div>
                <div class="form-group">
                    <label for="prix">Prix* :</label>
                    <input type="number" id="prix" name="prix" step="5" value="<?=$data[0]->getPrix();?>" class="form-control">
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