<?php
ob_start();
// var_dump($datasAdh); die;
?>

<div id="presInstall">
    <h2>Compositions des équipes en cours <br/><br/>Nous mettrons à jour cette page dès que possible ...</h2>

</div> 

<?php 
define('ROOT',dirname(__DIR__));
$content = ob_get_clean();
require_once(ROOT.'./gabarit.php');
?>