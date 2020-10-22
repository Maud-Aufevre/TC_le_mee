<?php
ob_start();
?>

<h1 class="h2 text-center mb-5 mt-5">Ajout d'un joueur</h1>

<div class="text-right">
    <a href="./index.php?action=comp_joueurs" class="btn btn-secondary mr-5">Retour</a>
</div>

<div class="container">
    <div class="row justify-content-center">
        <div class="col-4">
            <form action="" method="post" enctype="multipart/form-data">
                <div class="form-group">
                    <label for="nom">Nom* :</label>
                    <input type="text" id="nom" name="nom" placeholder="Saisir le nom de l'enseignant" class="form-control">
                </div>
                <div class="form-group">
                    <label for="prenom">Prénom* :</label>
                    <input type="text" id="prenom" name="prenom" placeholder="Saisir le prénom de l'enseignant" class="form-control">
                </div>
                <div class="form-group">
                    <p>Sexe* :</p>
                    <label class="radio-inline"><input type="radio" name="sexe" value="H" checked>H</label>
                    <label class="radio-inline"><input type="radio" value="F" name="sexe">F</label>
                </div>
                <div class="form-group">
                    <label for="age">Date de naissance* :</label>
                    <input type="date" id="age" name="age" placeholder="Sa date de naissance (YYYY-MM-DD)" class="form-control">
                </div>
                <div class="form-group">
                    <label for="photo">Photo* :</label>
                    <input type="File" id="photo" name="photo" class="form-control">
                </div>
                <div class="form-group">
                    <label for="classement">Classement* :</label>
                    <select name="classement" id="classement" class="form-control">
                        <option hidden>Son classement</option>
                        <?php foreach($classements as $class){ ?>
                            <option value="<?=$class->getId_classement();?>"><?=$class->getClassement();?></option>
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