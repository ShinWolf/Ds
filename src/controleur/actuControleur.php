<?php

function actuControleur($twig){
    if (isset($_POST['btEnvoyer'])){
        $inputIdActu = $_POST['inputIdActu'];
        $inputTitre = $_POST['inputTitre'];
        $inputContenue = $_POST['Contenue'];
    }
    echo $twig->render('actu.html.twig', array());
}

?>