<?php
ob_start();
?>

<h1 class="h2 text-center mb-5 mt-5">
    Modification du <?=stripslashes($data[0]->getNom());?>
</h1>

<div class="text-right">
        <a href="./index.php?action=tournois" class="btn btn-secondary mr-5">Retour</a>
</div>

<div class="container">
    <div class="row justify-content-center">
        <div class="col-4">
            <form action="" method="post" enctype="multipart/form-data">
                <div class="form-group">
                    <label for="nom">Nom du tournoi* :</label>
                    <input type="text" id="nom" name="nom" value="<?=stripslashes($data[0]->getNom());?>" class="form-control">
                </div>
                
                <div class="form-group">
                    <label for="date_debut">Date de début* :</label>
                    <input type="date" id="date_debut" name="date_debut"  class="form-control" value="<?=$data[0]->getDate_debut();?>">
                </div>
                <div class="form-group">
                    <label for="date_fin">Date de fin* :</label>
                    <input type="date" id="date_fin" name="date_fin"  class="form-control" value="<?=$data[0]->getDate_fin();?>">
                </div>
                <div class="form-group">
                    <label for="disciplines">Disciplines* :</label>
                    <textarea name="disciplines" id="disciplines" rows="3" class="form-control"><?=stripslashes($data[0]->getDisciplines());?></textarea>
                </div>
                <div class="form-group">
                    <label for="class">Classements* :</label>
                    <textarea name="class" id="class" rows="3" class="form-control"><?=stripslashes($data[0]->getClassements());?></textarea>
                </div>
                <div class="form-group">
                    <label for="ta">Tarif adultes :</label>
                    <input type="number" id="ta" name="ta" value="<?=$data[0]->getTarif_adultes();?>" class="form-control">
                    <label for="ta">Tarif jeunes :</label>
                    <input type="number" id="tj" name="tj" value="<?=$data[0]->getTarif_jeunes();?>" class="form-control">
                </div>
                <div class="form-group">
                    <label for="ja">Juge arbitre* :</label>
                    <input type="text" id="ja" name="ja" value="<?=stripslashes($data[0]->getJuge_arbitre());?>" class="form-control">
                </div>
                <div class="form-group">
                    <label for="vainqueurs">Prix aux vainqueurs* :</label>
                    <input type="text" id="vainqueurs" name="vainqueurs" value="<?=stripslashes($data[0]->getPrix_vainqueurs());?>" class="form-control">
                </div>
                <div class="form-group">
                    <label for="finalistes">Prix aux finalistes* :</label>
                    <input type="text" id="finalistes" name="finalistes" value="<?=stripslashes($data[0]->getFinalistes());?>" class="form-control">
                </div>
                <div class="form-group">
                    <label for="demi">Prix aux demi-finalistes* :</label>
                    <input type="text" id="demi" name="demi" value="<?=stripslashes($data[0]->getPrix_demi_fin());?>" class="form-control">
                </div>
                <div class="form-group">
                    <label for="num">Numéro d'homologation* :</label>
                    <input type="text" id="num" name="num" value="<?=stripslashes($data[0]->getNum_homologation());?>" class="form-control">
                </div>
                <div class="form-group">
                    <label for="contact">Contact* :</label>
                    <textarea name="contact" id="contact" rows="3" class="form-control"><?=stripslashes($data[0]->getContact());?></textarea>
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