<?php
ob_start();
// var_dump($datasAdh); die;
// var_dump($_POST); die;
?>

<div id="presInstall">
    <h2>Contact</h2>

    <div id="formulaire">
    <h3>pour venir nous voir directement :</h3>
    <p>335, avenue du vercors <br/>77350 le mée sur seine</p>
    <h3>pour nous appeler (nous n'avons pas de secrétaire, il est plus facile de nous joindre par mail) :</h3>
    <p>01 64 37 66 98</p>
    <h3>par mail :</h3>
    <p><a href="mailto:contact@tc-le-mee.fr">contact@tc-le-mee.fr</a></p>

    <?php
        if(isset($error)){
            echo"<div class='error'>$error</div>";
        }else if(isset($succes)){
            echo"<div class='succes'>$succes</div>";
        }
    ?>
    
    <h3>ou remplissez directement ce formulaire :</h3>
        <form action="" method="post">
            <div class="champs">
                <label for="nom">nom* :</label>
                <input type="text" id="nom" name="nom" placeholder="" class="form-control">
            </div>
            <div class="champs">
                <label for="prenom">prénom* :</label>
                <input type="text" id="prenom" name="prenom" placeholder="" class="form-control">
            </div>
            <div class="champs">
                <label for="tel">téléphone* :</label>
                <input type="text" id="tel" name="tel" placeholder="" class="form-control">
            </div>
            <div class="champs">
                <label for="email">email* :</label>
                <input type="email" id="email" name="email" placeholder="" class="form-control">
            </div>
            <div class="champs">
                <label for="message">message* :</label>
                <textarea name="message" id="message" cols="" rows="10"></textarea>
            </div>
            <button type="submit" name="send" class="lien">Envoyer</button>
        </form>
    </div>
</div> 

<?php 
define('ROOT',dirname(__DIR__));
$content = ob_get_clean();
require_once(ROOT.'./gabarit.php');
?>