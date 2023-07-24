<?php
    class AnnonceManager extends Model{

        private $annoncesTable = 'annonces';
        private $categoriesAnnoTable = 'categories_annonces';
        private $photosTable = 'photos';

        function addAnnonce(){
            $titre = filter_var(htmlentities(ucfirst(strtolower($_POST["titre"]))));
            $description = filter_var(htmlentities(ucfirst(strtolower($_POST["description"]))));
            $dureePublication = filter_var(htmlentities($_POST["duree_publication"]));
            $prixVente = ($_POST["prix"]);
            $coutAnnonce = $prixVente * 2;
            $etat = filter_var($_POST["id_etat"]);
            $utilisateur = htmlentities($_SESSION["id"]);

            if($_SESSION["id"] && $_SESSION["is_login"]){
                try{
                    $sql = "INSERT INTO ".$this->annoncesTable."(titre, description, duree_de_publication, prix_vente, cout_annonce, id_etat, id_utilisateur) VALUES(:tiTre, :descri, :dureePublica, :prixVente, :coutAnno, :id_etat, :utilisateur)";
                    $req = $this->getDatabase()->prepare($sql);
                    $req->execute(['tiTre'=>$titre, 'descri'=>$description, 'dureePublica'=>$dureePublication,'prixVente'=>$prixVente,'coutAnno'=>$coutAnnonce, 'id_etat'=>$etat, 'utilisateur'=>$utilisateur]);
                    $newid= $this->getDatabase()->lastInsertId();

                    $this->AddPhotoAnnonce($newid); 
                    $this->AddCategorieAnnonce($newid); 
                    $req->closeCursor();

                    if ($req->rowCount()){
                        return array("success", "Annonce bien enregistré");
                    }else{
                        return array("error", "Probleme lors d'enregistrement de l'Annonce.");
                    }
                }catch(Exception $e){
                    return array("error",  $e->getMessage());
                }
            }else{ return array("error", "Tu dois être connecté pour pouvoir poster une annonce");}
        }

        function AddPhotoAnnonce($id){

            $cpt=0;
            foreach($_FILES['photos']['error'] as $k=>$v){
                if(is_uploaded_file($_FILES['photos']['tmp_name'][$k]) && $v == UPLOAD_ERR_OK) {
                    $path="asset/anno_images/".$_FILES['photos']['name'][$k];
                    move_uploaded_file($_FILES['photos']['tmp_name'][$k],$path);
                    try{
                        $sql = $this->getDatabase()->prepare("INSERT INTO $this->photosTable(url_photo, id_annonce) VALUES (:path, :id_annonce)");
                        $req= $sql->execute(['path'=>$path, 'id_annonce'=>$id]);
                        if($req) $cpt++;
                    } catch (Exception $e) {
                        return array("error",  $e->getMessage());;
                    }
                }else{ 
                    return array("error", "Probleme lors de l'ajoute de photos");
                }
            }
            return $cpt;
        }

        function AddCategorieAnnonce($id){   
            $idCategorie = filter_var($_POST["id_categorie"]); 
            try{
                $sql = "INSERT INTO $this->categoriesAnnoTable(id_annonce, id_categorie) VALUES (:id_anno, :id_catego)";
                $req = $this->getDatabase()->prepare($sql);
                $req->execute(['id_anno'=>$id, 'id_catego'=>$idCategorie]);
                
                if($req->rowCount()){
                    return array("success", "Annonce est bien enregistrée");
                }else{
                    return array("error", "Probleme lors d'enregistrement d'annonce");
                }

            } catch (Exception $e) {
                return array("error",  $e->getMessage());
            }
        }

        function displayAllAnnonces(){
            try{
                $sql = $this->getDatabase()->prepare( "SELECT * FROM $this->annoncesTable  AS a INNER JOIN photos AS p ON a.id = p.id_annonce LIMIT 20");
                $req= $sql->execute();
                $results = $sql->fetchAll();
                return $results;
            }catch(Exception $e){
                return array("error",  $e->getMessage());
            }
        }

        // function getUserAnnonces(){
        //     // $utilisateur = htmlentities($_SESSION["id"]);
        //     try{
        //         $sql = $this->getDatabase()->prepare("SELECT * FROM $this->annoncesTable  AS a INNER JOIN photos AS p ON a.id = p.id_annonce WHERE a.id_utilisateur = :utilisa");
        //         $req = $sql->execute(['utilisa' => $utilisateur]);
        //         $result = $sql->fetchAll();
        //         if($result){
        //             return $result;
        //         }else{
        //             return array("error", "Vous avez aucune Annonce postée");
        //         }
                
        //     }catch(Exception $e){
        //         return array("error", $e->getMessage());
        //     }
        // }
    }
?>