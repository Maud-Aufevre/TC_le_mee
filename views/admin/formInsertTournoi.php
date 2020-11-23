<?php
ob_start();
?>

<h1 class="h2 text-center mb-5 mt-5">
        Ajout d'un tournoi
</h1>

<div class="text-right">
        <a href="./index.php?action=tournois" class="btn btn-secondary mr-5">Retour</a>
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
                    <label for="nom">Nom du tournoi* :</label>
                    <input type="text" id="nom" name="nom" placeholder="Saisir le nom du tournoi" class="form-control">
                </div>
                <div class="form-group">
                    <label for="date_debut">Date de début* :</label>
                    <input type="date" id="date_debut" name="date_debut"  class="form-control">
                </div>
                <div class="form-group">
                    <label for="date_fin">Date de fin* :</label>
                    <input type="date" id="date_fin" name="date_fin"  class="form-control">
                </div>
                <div class="form-group">
                    <label for="disciplines">Disciplines* :</label>
                    <textarea name="disciplines" id="disciplines" rows="3" class="form-control">Exemple: simple dames / simple messieurs</textarea>
                </div>
                <div class="form-group">
                    <label for="class">Classements* :</label>
                    <textarea name="class" id="class" rows="3" class="form-control">Exemple: open ou NC à 15/1</textarea>
                </div>
                <div class="form-group">
                    <label for="ta">Tarif adultes :</label>
                    <input type="number" id="ta" name="ta" value="20" class="form-control">
                    <label for="ta">Tarif jeunes :</label>
                    <input type="number" id="tj" name="tj" value="20" class="form-control">
                </div>
                <div class="form-group">
                    <label for="ja">Juge arbitre* :</label>
                    <input type="text" id="ja" name="ja" placeholder="Saisir le nom du juge arbitre" class="form-control">
                </div>
                <div class="form-group">
                    <label for="vainqueurs">Prix aux vainqueurs* :</label>
                    <input type="text" id="vainqueurs" name="vainqueurs" placeholder="Saisir le prix des vainqueurs" class="form-control">
                </div>
                <div class="form-group">
                    <label for="finalistes">Prix aux finalistes* :</label>
                    <input type="text" id="finalistes" name="finalistes" placeholder="Saisir le prix des finalistes" class="form-control">
                </div>
                <div class="form-group">
                    <label for="demi">Prix aux demi-finalistes* :</label>
                    <input type="text" id="demi" name="demi" placeholder="Saisir 0 si pas de prix" class="form-control">
                </div>
                <div class="form-group">
                    <label for="num">Numéro d'homologation* :</label>
                    <input type="text" id="num" name="num" placeholder="Saisir le numéro d'homologation" class="form-control">
                </div>
                <div class="form-group">
                    <label for="contact">Contact* :</label>
                    <textarea name="contact" id="contact" rows="3" class="form-control">Saisir nom(s) prénom(s) téléphone(s) adresse(s) mail de contact</textarea>
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