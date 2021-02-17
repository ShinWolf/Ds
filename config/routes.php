<?php
    
function getPage($db){
    $lesPages['accueil'] = "accueilControleur";
    $lesPages['actu'] = "actuControleur";
    $contenu = $lesPages['accueil'];
    return $contenu;
}
?>