<?php
ob_start();
?>

<h1 class="h2 text-center mb-5 mt-5">
    <?php if($_GET['action']=='add_eq_jeunes'){ ?>
        Ajout d'une équipe jeune
    <?php }else{ ?>
        Ajout d'une équipe adulte
    <?php } ?>
</h1>

<div class="text-right">
    <?php if($_GET['action']=='add_eq_jeunes'){ ?>
        <a href="./index.php?action=comp_jeunes" class="btn btn-secondary mr-5">Retour</a>
    <?php }else{ ?>
        <a href="./index.php?action=comp_adultes" class="btn btn-secondary mr-5">Retour</a>
        <?php } ?>
</div>

<div class="container">
    <div class="row justify-content-center">
        <div class="col-4">
            <form action="" method="post" enctype="multipart/form-data">
                <div class="form-group">
                    <label for="nom">Nom* :</label>
                    <input type="text" id="nom" name="nom" placeholder="Saisir le nom de l'équipe" class="form-control">
                </div>
                <div class="form-group">
                    <p>Sexe* :</p>
                        <label class="radio-inline"><input type="radio" name="sexe" value="H" checked>H</label>
                        <label class="radio-inline"><input type="radio" value="F" name="sexe">F</label>
                </div>
                <div class="form-group">
                    <label for="categorie">Catégorie* :</label>
                    <select class="form-control" id="categorie" name="categorie">
                        <?php if($_GET['action']=='add_eq_jeunes'){ ?>
                            <option value="">Choisir la catégorie</option>
                            <option value="7/8">7/8</option>
                            <option value="9/10">9/10</option>
                            <option value="11/12">11/12</option>
                            <option value="13/14">13/14</option>
                            <option value="15/16">15/16</option>
                            <option value="17/18">17/18</option>
                        <?php }else{ ?>
                            <option value="">Choisir la catégorie</option>
                            <option value="senior">Senior</option>
                            <option value="+35">+35</option>
                            <option value="+45">+45</option>
                            <option value="+55">+55</option>
                        <?php } ?>
                    </select>
                </div>
                <div class="form-group">
                    <label for="j1">Joueur 1* :</label>
                    <select class="form-control" id="j1" name="j1">
                            <option value="">Choisir un joueur</option>
                        <?php if($_GET['action']=='add_eq_jeunes'){ ?>
                            <?php foreach($joueurs as $joueur){ ?>
                                <?php if($joueur->age <= 18){ ?>
                                    <option value="<?=$joueur->getId_joueur();?>"><?=$joueur->getPrenom();?> <?=$joueur->getPrenom();?> - <?=$joueur->classement;?></option>
                                <?php }} ?>
                        <?php }else{ ?>
                            <?php foreach($joueurs as $joueur){ ?>
                                <option value="<?=$joueur->getId_joueur();?>"><?=$joueur->getPrenom();?> <?=$joueur->getPrenom();?> - <?=$joueur->classement;?></option>
                        <?php }} ?>
                    </select>
                </div>
                <div class="form-group">
                    <label for="j2">Joueur 2* :</label>
                    <select class="form-control" id="j2" name="j2">
                            <option value="">Choisir un joueur</option>
                        <?php if($_GET['action']=='add_eq_jeunes'){ ?>
                            <?php foreach($joueurs as $joueur){ ?>
                                <?php if($joueur->age <= 18){ ?>
                                    <option value="<?=$joueur->getId_joueur();?>"><?=$joueur->getPrenom();?> <?=$joueur->getPrenom();?> - <?=$joueur->classement;?></option>
                                <?php } ?>
                            <?php } ?>
                        <?php }else{ ?>
                            <?php foreach($joueurs as $joueur){ ?>
                                <option value="<?=$joueur->getId_joueur();?>"><?=$joueur->getPrenom();?> <?=$joueur->getPrenom();?> - <?=$joueur->classement;?></option>
                        <?php }} ?>
                    </select>
                </div>
                <div class="form-group">
                    <label for="j3">Joueur 3 :</label>
                    <select class="form-control" id="j3" name="j3">
                            <option value="">Choisir un joueur</option>
                        <?php if($_GET['action']=='add_eq_jeunes'){ ?>
                            <?php foreach($joueurs as $joueur){ ?>
                                <?php if($joueur->age <= 18){ ?>
                                    <option value="<?=$joueur->getId_joueur();?>"><?=$joueur->getPrenom();?> <?=$joueur->getPrenom();?> - <?=$joueur->classement;?></option>
                                <?php } ?>
                            <?php } ?>
                        <?php }else{ ?>
                            <?php foreach($joueurs as $joueur){ ?>
                                <option value="<?=$joueur->getId_joueur();?>"><?=$joueur->getPrenom();?> <?=$joueur->getPrenom();?> - <?=$joueur->classement;?></option>
                        <?php }} ?>
                    </select>
                </div>
                <div class="form-group">
                    <label for="j4">Joueur 4 :</label>
                    <select class="form-control" id="j4" name="j4">
                            <option value="">Choisir un joueur</option>
                        <?php if($_GET['action']=='add_eq_jeunes'){ ?>
                            <?php foreach($joueurs as $joueur){ ?>
                                <?php if($joueur->age <= 18){ ?>
                                    <option value="<?=$joueur->getId_joueur();?>"><?=$joueur->getPrenom();?> <?=$joueur->getPrenom();?> - <?=$joueur->classement;?></option>
                                <?php } ?>
                            <?php } ?>
                        <?php }else{ ?>
                            <?php foreach($joueurs as $joueur){ ?>
                                <option value="<?=$joueur->getId_joueur();?>"><?=$joueur->getPrenom();?> <?=$joueur->getPrenom();?> - <?=$joueur->classement;?></option>
                        <?php }} ?>
                    </select>
                </div>
                <div class="form-group">
                    <label for="j5">Joueur 5 :</label>
                    <select class="form-control" id="j5" name="j5">
                            <option value="">Choisir un joueur</option>
                        <?php if($_GET['action']=='add_eq_jeunes'){ ?>
                            <?php foreach($joueurs as $joueur){ ?>
                                <?php if($joueur->age <= 18){ ?>
                                    <option value="<?=$joueur->getId_joueur();?>"><?=$joueur->getPrenom();?> <?=$joueur->getPrenom();?> - <?=$joueur->classement;?></option>
                                <?php } ?>
                            <?php } ?>
                        <?php }else{ ?>
                            <?php foreach($joueurs as $joueur){ ?>
                                <option value="<?=$joueur->getId_joueur();?>"><?=$joueur->getPrenom();?> <?=$joueur->getPrenom();?> - <?=$joueur->classement;?></option>
                        <?php }} ?>
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