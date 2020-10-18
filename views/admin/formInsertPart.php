<?php
ob_start();
?>

<h1 class="h2 text-center mb-5 mt-5">Ajout d'un partenaire</h1>

<div class="text-right">
    <a href="./index.php?action=cl_part" class="btn btn-secondary mr-5">Retour</a>
</div>

<div class="container">
    <div class="row justify-content-center">
        <div class="col-4">
            <form action="" method="post" enctype="multipart/form-data">
                <div class="form-group">
                    <label for="nom">Nom :</label>
                    <input type="text" id="nom" name="nom" placeholder="Saisir le nom du partenaire" class="form-control">
                </div>
                <div class="form-group">
                    <label for="des">Description :</label>
                    <textarea name="des" id="des" cols="30" rows="10" class="form-control">Présenter le partenaire</textarea>
                </div>
                <div class="form-group">
                    <label for="logo">Logo :</label>
                    <input type="File" id="logo" name="logo" class="form-control">
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