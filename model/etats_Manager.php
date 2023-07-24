<?php
    class EtatsManager extends Model{

        private $etatsTable = 'etats';

        function loadEtats(){
            try{
                $req = $this->getDatabase()->prepare("SELECT * FROM $this->etatsTable");
                $req->execute();
                if ($req->rowCount()){
                    $etats = $req->fetchAll(PDO::FETCH_ASSOC);
                    return $etats;
                }
                $req->closeCursor();
            }catch(Exception $e){
                return array("error",  $e->getMessage());
            }
        }

        function adminAddEtat(){
            
        }

        function adminDeleteEtat(){

        }
    }
?>