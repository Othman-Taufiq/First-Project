<?php
    class CategoriesManager extends Model{

        private $categoriesTable = 'categories';

        function loadCategories(){
            try{
                $req = $this->getDatabase()->prepare("SELECT * FROM $this->categoriesTable");
                $req->execute();
                if ($req->rowCount()){
                    $categories = $req->fetchAll(PDO::FETCH_ASSOC);
                    return $categories;
                }
                $req->closeCursor();
            }catch(Exception $e){
                return array("error",  $e->getMessage());
            }
        }

        function adminAddCategorie(){
            
        }

        function adminDeleteCategorie(){

        }
    }
?>