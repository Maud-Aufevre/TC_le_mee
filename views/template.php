<!DOCTYPE html>
<html lang="fr">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<meta name="Description" content="Plutôt quick ou terre battue? TC Le Mée, votre club de tennis au Mée sur Seine qui allie la qualité de l'enseignement et une ambiance familiale et détendue..."/>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
<link rel="stylesheet" href="./assets/css/admin.css">
<link rel="shortcut icon" href="./assets/images/favicon.ico" type="image/x-icon">
<title>TC le Mée</title>

</head>



<body>
<?php
   if (isset($_SESSION['Auth'])){
    //    var_dump('ok'); die;
      $displayMenu='block';
      $marginLeft=200;
   }
   else {
       $displayMenu='none';
       $marginLeft=0;
    } 

?>

    <nav style='display: <?=$displayMenu?>'>
        <div class="sidenav">
            <img id="logoAdmin" src="./assets/images/logo-tc-le-mee-2.png" width=150 alt=""> 
                
            <a href="index.php?action=logout"><i class="fa fa-sign-out" aria-hidden="true"></i> Déconnexion</a>

            
            <button class="dropdown-btn">
                Club
                <i class="fa fa-caret-down"></i>
            </button>
            <div class="dropdown-container">
                <a href="index.php?action=cl_bureau">Le bureau</a>
                <a href="index.php?action=cl_part">Les partenaires</a>
                
            </div>
            
            <button class="dropdown-btn">
                Enseignement
                <i class="fa fa-caret-down"></i>
            </button>
            <div class="dropdown-container">
                <a href="index.php?action=ens_equipe">Equipe pédagogique</a>
                
                
            </div>
            
            <a href="index.php?action=adhesions">Les adhésions</a>
            
            <button class="dropdown-btn">
                Compétition
                <i class="fa fa-caret-down"></i>
            </button>
            <div class="dropdown-container">
                <a href="index.php?action=comp_joueurs">Joueurs d'équipes</a>
                <a href="index.php?action=comp_jeunes">Equipes jeunes</a>
                <a href="index.php?action=comp_adultes">Equipes adultes</a>
                <a href="index.php?action=tournois">Tournois du club</a>
                
                
            </div>
            
            <a href="index.php?action=actus">Les actus</a>
            
            <a href="index.php?action=messages">Messages reçus</a>
            
            <button class="dropdown-btn">
            Caroussel
                <i class="fa fa-caret-down"></i>
            </button>
            <div class="dropdown-container">
                <a href="index.php?action=car_event_club&id=1">1) Evènement club du moment</a>
                <a href="index.php?action=car_event_tennis&id=2">2) Evènement tennis du moment</a>
                <a href="index.php?action=car_ecole&id=3">3) Ecole de tennis</a>
                <a href="index.php?action=car_resa&id=4">4) Je réserve mon terrain</a>
                <a href="index.php?action=car_actus&id=5">5) Les dernières actus<a>          
            </div>
        </div>
    </nav>

    <div class="main" style='margin-left: <?=$marginLeft?>'>
        <h1 class="text-center bg-secondary text-white">Administration</h1>
        <?=$content;?>
    </div>

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
<!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.0.0/jquery.min.js"></script> -->

<!-- jQuery Modal -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-modal/0.9.1/jquery.modal.min.js"></script>

<script src="./assets/js/admin.js"></script>
</body>
</html>