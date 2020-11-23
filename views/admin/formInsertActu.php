<?php
ob_start();
?>

<h1 class="h2 text-center mb-5 mt-5">Ajout d'une actu</h1>

<div class="text-right">
    <a href="./index.php?action=actus" class="btn btn-secondary mr-5">Retour</a>
</div>

<div class="container">
    <div class="row justify-content-center">
        <div class="col-4">
            <?php
                if(isset($error)){
                    echo"<div class='alert alert-danger text-center'>$error</div>";
                }
            ?>
            <form action="" method="post" enctype="multipart/form-data">
                <div class="form-group">
                    <label for="titre">Titre* :</label>
                    <input type="text" id="titre" name="titre" placeholder="Saisir le titre de l'actu" class="form-control">
                </div>
                <div class="form-group">
                    <label for="visuel">Visuel (format paysage)* :</label>
                    <input type="file" id="visuel" name="visuel"  class="form-control">
                </div>
                <div class="form-group">
                    <label for="resume">Resumé* :</label>
                    <textarea type="text" id="resume" name="resume" rows="5" class="form-control">Texte visible sans cliquer</textarea>
                </div>
                <div class="form-group">
                    <label for="texte">Texte* :</label>
                    <textarea type="text" id="texte" name="texte" rows="8" class="form-control">Texte visible seulement si on clique sur l'article</textarea>
                </div>
                <div class="form-group">
                    <label for="illu1">Illustration 1* :</label>
                    <input type="file" id="illu1" name="illu1"  class="form-control">
                </div>
                <div class="form-group">
                    <label for="illu2">Illustration 2* :</label>
                    <input type="file" id="illu2" name="illu2"  class="form-control">
                </div>
                <div class="form-group">
                    <label for="id_categorie">Catégorie d'actu* :</label>
                    <select name="id_categorie" id="id_categorie" class="form-control">
                        <option hidden>Choisir la catégorie</option>
                        <?php foreach($categories as $cat){ ?>
                            <option value="<?=$cat->getId_categorie();?>"><?=$cat->getNom();?></option>
                        <?php } ?>
                    </select>
                </div>
                <button type="submit" name="ajout" class="btn btn-warning btn-block">Ajouter</button>
            </form>
        </div>
    </div>
</div>

<?php
$content = ob_get_clean();
require_once('./views/template.php');
?>