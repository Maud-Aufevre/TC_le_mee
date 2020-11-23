<?php
ob_start();
?>

<h1 class="h2 text-center mb-5 mt-5">Ajout d'une adhésion</h1>

<div class="text-right">
    <a href="./index.php?action=adhesions" class="btn btn-secondary mr-5">Retour</a>
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
                    <input type="text" id="nom" name="nom" placeholder="Saisir l'intitulé de l'adhésion'" class="form-control">
                </div>
                <div class="form-group">
                    <label for="prog">Programme :</label>
                    <textarea name="prog" id="prog" cols="30" rows="10" class="form-control">Programme de l'année</textarea>
                </div>
                <div class="form-group">
                    <label for="prix">Prix :</label>
                    <input type="number" step="5" value="100" id="prix" name="prix" class="form-control">
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