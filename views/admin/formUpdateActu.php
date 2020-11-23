<?php
ob_start();
// var_dump($data[0]); die;
?>

<h1 class="h2 text-center mb-5 mt-5">Modification de l'article: <?=stripslashes($data[0]->getTitre());?></h1>

<div class="text-right">
    <a href="./index.php?action=actus" class="btn btn-secondary mr-5">Retour</a>
</div>

<div class="container">
    <div class="row justify-content-center">
        <div class="col-4">
            <form action="" method="post" enctype="multipart/form-data">
                <div class="form-group">
                    <label for="titre">Titre* :</label>
                    <input type="text" id="titre" name="titre" value="<?=stripslashes($data[0]->getTitre());?>" class="form-control">
                </div>
                <div class="form-group">
                    <label for="visuel">Visuel* :</label>
                    <div class="mb-1">
                        <img src="./assets/images/actus/<?=$data[0]->getVisuel();?>" alt="visuel" width=150>
                    </div>
                    <input type="file" id="visuel" name="visuel"  class="form-control">
                </div>
                <div class="form-group">
                    <label for="resume">Resumé* :</label>
                    <textarea type="text" id="resume" name="resume" rows="5" class="form-control"><?=stripslashes($data[0]->getResume());?></textarea>
                </div>
                <div class="form-group">
                    <label for="texte">Texte* :</label>
                    <textarea type="text" id="texte" name="texte" rows="8" class="form-control"><?=stripslashes($data[0]->getTexte());?></textarea>
                </div>
                <div class="form-group">
                    <label for="illu1">Illustration 1* :</label>
                    <div class="mb-1">
                        <img src="./assets/images/actus/<?=$data[0]->getIllu1();?>" alt="visuel" width=150>
                    </div>
                    <input type="file" id="illu1" name="illu1"  class="form-control">
                </div>
                <div class="form-group">
                    <label for="illu2">Illustration 2* :</label>
                    <div class="mb-1">
                        <img src="./assets/images/actus/<?=$data[0]->getIllu2();?>" alt="visuel" width=150>
                    </div>
                    <input type="file" id="illu2" name="illu2"  class="form-control">
                </div>
                <div class="form-group">
                    <label for="id_categorie">Catégorie d'actu* :</label>
                    <select name="id_categorie" id="id_categorie" class="form-control">
                        <option value="<?=$data[0]->getId_categorie();?>"><?=$data[0]->nom;?></option>
                        <?php foreach($categories as $cat){ ?>
                            <option value="<?=$cat->getId_categorie();?>"><?=$cat->getNom();?></option>
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