<?php
ob_start();
?>

<h1 class="h2 text-center mb-5 mt-5">Ajout d'un enseignant</h1>

<div class="text-right">
    <a href="./index.php?action=ens_equipe" class="btn btn-secondary mr-5">Retour</a>
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
                    <label for="nom">Nom :</label>
                    <input type="text" id="nom" name="nom" placeholder="Saisir le nom de l'enseignant" class="form-control">
                </div>
                <div class="form-group">
                    <label for="prenom">Prénom :</label>
                    <input type="text" id="prenom" name="prenom" placeholder="Saisir le prénom de l'enseignant" class="form-control">
                </div>
                <div class="form-group">
                    <label for="fonction">Fonction :</label>
                    <input type="text" id="fonction" name="fonction" placeholder="Saisir sa fonction" class="form-control">
                </div>
                <div class="form-group">
                    <label for="photo">Photo :</label>
                    <input type="File" id="photo" name="photo" class="form-control">
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