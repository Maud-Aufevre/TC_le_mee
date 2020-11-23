<?php
ob_start();
// var_dump($data[0]); die;
?>

<h1 class="h2 text-center mb-5 mt-5">
Modification de l' <?=$data[0]->getNom();?> - <?=$data[0]->getCategorie();?> <?php if($data[0]->getSexe() == "0") {?> - H <?php }else {?> - F <?php } ?>
</h1>

<div class="text-right">
    <?php if($_GET['action']=='modif_eq_jeunes'){ ?>
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
                    <input type="text" id="nom" name="nom" value="<?=stripslashes($data[0]->getNom());?>" class="form-control">
                </div>
                <div class="form-group">
                    <p>Sexe* :</p>
                        <?php if($data[0]->getSexe() == "0") { ?>
                            <label class="radio-inline"><input type="radio" name="sexe" value="0" checked>H</label>
                            <label class="radio-inline"><input type="radio" value="1" name="sexe">F</label>
                        <?php } else { ?>
                            <label class="radio-inline"><input type="radio" name="sexe" value="0">H</label>
                            <label class="radio-inline"><input type="radio" value="1" name="sexe" checked>F</label>
                        <?php } ?>
                </div>
                <div class="form-group">
                    <label for="categorie">Catégorie* :</label>
                    <select class="form-control" id="categorie" name="categorie">
                        <option value="<?=$data[0]->getCategorie();?>"><?=$data[0]->getCategorie();?></option>
                        <?php if($_GET['action']=='modif_eq_jeunes'){ ?>
                            <option value="7/8">7/8</option>
                            <option value="9/10">9/10</option>
                            <option value="11/12">11/12</option>
                            <option value="13/14">13/14</option>
                            <option value="15/16">15/16</option>
                            <option value="17/18">17/18</option>
                        <?php }else{ ?>
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
                    <option value="<?=$data[0]->GetId_joueur1();?>"><?=$data[0]->prenom1;?> <?=$data[0]->nom1;?> - <?=$data[0]->classement1;?></option>
                        <?php if($_GET['action']=='modif_eq_jeunes'){ ?>
                            <?php foreach($joueurs as $joueur){ ?>
                                <?php if($joueur->age <= 18){ ?>
                                    <option value="<?=$joueur->getId_joueur();?>"><?=$joueur->getPrenom();?> <?=$joueur->getNom();?> - <?=$joueur->classement;?></option>
                                <?php }} ?>
                        <?php }else{ ?>
                            <?php foreach($joueurs as $joueur){ ?>
                                <option value="<?=$joueur->getId_joueur();?>"><?=$joueur->getPrenom();?> <?=$joueur->getNom();?> - <?=$joueur->classement;?></option>
                        <?php }} ?>
                    </select>
                </div>
                <div class="form-group">
                    <label for="j2">Joueur 2* :</label>
                    <select class="form-control" id="j2" name="j2">
                    <option value="<?=$data[0]->GetId_joueur2();?>"><?=$data[0]->prenom2;?> <?=$data[0]->nom2;?> - <?=$data[0]->classement2;?></option>
                        <?php if($_GET['action']=='modif_eq_jeunes'){ ?>
                            <?php foreach($joueurs as $joueur){ ?>
                                <?php if($joueur->age <= 18){ ?>
                                    <option value="<?=$joueur->getId_joueur();?>"><?=$joueur->getPrenom();?> <?=$joueur->getNom();?> - <?=$joueur->classement;?></option>
                                <?php } ?>
                            <?php } ?>
                        <?php }else{ ?>
                            <option value="<?=$joueur->getId_joueur();?>"><?=$joueur->getPrenom();?> <?=$joueur->getNom();?> - <?=$joueur->classement;?></option>
                        <?php } ?>
                    </select>
                </div>
                <div class="form-group">
                    <label for="j3">Joueur 3 :</label>
                    <select class="form-control" id="j3" name="j3">
                    <?php if($data[0]->getId_joueur3()) { ?>
                    <option value="<?=$data[0]->getId_joueur3();?>"><?=$data[0]->prenom3;?> <?=$data[0]->nom3;?> - <?=$data[0]->classement3;?></option>
                    <?php } else { ?>
                        <option value="">Pas de joueur 3</option>
                    <?php } ?> 
                        <?php if($_GET['action']=='modif_eq_jeunes'){ ?>
                            <?php foreach($joueurs as $joueur){ ?>
                                <?php if($joueur->age <= 18){ ?>
                                    <option value="<?=$joueur->getId_joueur();?>"><?=$joueur->getPrenom();?> <?=$joueur->getNom();?> - <?=$joueur->classement;?></option>
                                <?php } ?>
                            <?php } ?>
                        <?php }else{ ?>
                            <option value="<?=$joueur->getId_joueur();?>"><?=$joueur->getPrenom();?> <?=$joueur->getNom();?> - <?=$joueur->classement;?></option>
                        <?php } ?>
                    </select>
                </div>
                <div class="form-group">
                    <label for="j4">Joueur 4 :</label>
                    <select class="form-control" id="j4" name="j4">
                    <?php if($data[0]->getId_joueur4()) { ?>
                    <option value="<?=$data[0]->getId_joueur4();?>"><?=$data[0]->prenom4;?> <?=$data[0]->nom4;?> - <?=$data[0]->classement4;?></option>
                    <?php } else { ?>
                        <option value="">Pas de joueur 4</option>
                    <?php } ?> 
                        <?php if($_GET['action']=='modif_eq_jeunes'){ ?>
                            <?php foreach($joueurs as $joueur){ ?>
                                <?php if($joueur->age <= 18){ ?>
                                    <option value="<?=$joueur->getId_joueur();?>"><?=$joueur->getPrenom();?> <?=$joueur->getNom();?> - <?=$joueur->classement;?></option>
                                <?php } ?>
                            <?php } ?>
                        <?php }else{ ?>
                            <option value="<?=$joueur->getId_joueur();?>"><?=$joueur->getPrenom();?> <?=$joueur->getNom();?> - <?=$joueur->classement;?></option>
                        <?php } ?>
                    </select>
                </div>
                <div class="form-group">
                    <label for="j5">Joueur 5 :</label>
                    <select class="form-control" id="j5" name="j5">
                    <?php if($data[0]->getId_joueur5()) { ?>
                    <option value="<?=$data[0]->getId_joueur5();?>"><?=$data[0]->prenom5;?> <?=$data[0]->nom5;?> - <?=$data[0]->classement5;?></option>
                    <?php } else { ?>
                        <option value="">Pas de joueur 5</option>
                    <?php } ?> 
                        <?php if($_GET['action']=='modif_eq_jeunes'){ ?>
                            <?php foreach($joueurs as $joueur){ ?>
                                <?php if($joueur->age <= 18){ ?>
                                    <option value="<?=$joueur->getId_joueur();?>"><?=$joueur->getPrenom();?> <?=$joueur->getNom();?> - <?=$joueur->classement;?></option>
                                <?php } ?>
                            <?php } ?>
                        <?php }else{ ?>
                            <option value="<?=$joueur->getId_joueur();?>"><?=$joueur->getPrenom();?> <?=$joueur->getNom();?> - <?=$joueur->classement;?></option>
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