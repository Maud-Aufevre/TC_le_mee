<?php
ob_start();
// var_dump($datasAdh); die;
?>

<div id="presInstall">
    <h2>En raison de la situation sanitaire et des incertitudes, <br/><br/>Nous programmerons des tournois au club dès que le contexte le permettra ...</h2>

</div> 

<?php 
define('ROOT',dirname(__DIR__));
$content = ob_get_clean();
require_once(ROOT.'./gabarit.php');
?>