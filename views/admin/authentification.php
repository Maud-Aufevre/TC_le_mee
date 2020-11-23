<?php

ob_start();
?>

<div class="text-center mt-5">
    <img src="./assets/images/logo-tc-le-mee-2.png" alt="logo" width=180>
</div>
<h1 class="h2 text-center mt-5 mb-5"> <u>Connexion à l'administration</u></h1>
    <div class="row justify-content-center m-0">
        <div class="col-6">
            <?php
            // var_dump($error); die;
                if(isset($error)){
                    echo"<div class='alert alert-danger text-center'>$error</div>";
                }
            ?>
      
            <form method="post" action="">
                <div class="form-group">
                <label for="login">Login*: </label>
                <input type="text" id="login" name="login" placeholder="Entrer le login" class="form-control">
                </div>
                <div class="form-group">
                <label for="pass">Mot de passe*: </label>
                <input type="password" id="pass" name="pass" placeholder="Entrer le mot de passe" class="form-control">
                </div>
                <button type="submit" name="connexion" class="btn btn-secondary btn-block">Connexion</button>
            
            </form>
        </div>
    </div>


<?php
    $content = ob_get_clean();
    require_once('./views/template.php');
?>