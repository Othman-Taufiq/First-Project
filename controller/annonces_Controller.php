<?php

if($_SERVER["REQUEST_METHOD"] === "POST"){
    if(!empty($_POST["action"])){

        // AJOUTE ANNONCE
        if($_POST["action"]== "ajoute_annonce"){
            if(!empty($_FILES["photos"]) && !empty($_POST["titre"]) && !empty($_POST["description"]) && !empty($_POST["id_categorie"]) && !empty($_POST["id_categorie"]) && !empty($_POST["id_etat"]) && !empty($_POST["prix"])){
               
                $newAnno = new AnnonceManager;
                $notification= $newAnno->addAnnonce();
                if($notification[0]== "success"){
                    header('Location:?p=logged');
                }
            }
        }


    }
}

//Display Annonces on the logged User Page
$anno = new AnnonceManager;
$annonces = $anno->displayAllAnnonces();



//Display User Annonces on the userAnnonces page
// $uanno = new AnnonceManager;
// $userAnnonces = $uanno->getUserAnnonces();
?>