<?php
    class Annonce extends Model{

        private $id;
        private $dateCreation;
        private $titre;
        private $description;
        private $dureePublication;
        private $prixVente;
        private $coutAnnonce;
        private $datevalidation;
        private $dateFinPublication;
        private $etat;
        private $utilisateur;
        private $dateVente;
        private $acheteur;

        // SETTER and GETTER for Annonce ID
        function setAnnonceId($id):void{
            $this->id = $id;
        }

        function getAnnonceId(){
            return $this->id;
        }

        // SETTER and GETTER for DateCreation
        function setDateCreation($dateCreation):void{
            $this->dateCreation = $dateCreation;
        }

        function getDateCreation(){
            return $this->dateCreation;
        }

        // SETTER and GETTER for Titre
        function setTitle($titre):void{
            $this->titre = $titre;
        }

        function getTitle(){
            return $this->titre;
        }

        // SETTER and GETTER for description
        function setDescription($description):void{
            $this->description = $description;
        }

        function getDescription(){
            return $this->description;
        }

        // SETTER and GETTER for dureePublication
        function setDureePublication($dureePublication):void{
            $this->dureePublication = $dureePublication;
        }

        function getDureePublication(){
            return $this->dureePublication;
        }

        // SETTER and GETTER for prixVente
        function setPrixVente($prixVente):void{
            $this->prixVente = $prixVente;
        }

        function getPrixVente(){
            return $this->prixVente;
        }

        // SETTER and GETTER for coutAnnonce
        function setCoutAnnonce($coutAnnonce):void{
            $this->coutAnnonce = $coutAnnonce;
        }

        function getCoutAnnonce(){
            return $this->coutAnnonce;
        }

        // SETTER and GETTER for datevalidation
        function setDatevalidation($datevalidation):void{
            $this->datevalidation = $datevalidation;
        }

        function getDatevalidation(){
            return $this->datevalidation;
        }

        // SETTER and GETTER for dateFinPublication
        function setDateFinPublication($dateFinPublication):void{
            $this->dateFinPublication = $dateFinPublication;
        }

        function getDateFinPublication(){
            return $this->dateFinPublication;
        }

        // SETTER and GETTER for etat
        function setEtat($etat):void{
            $this->etat = $etat;
        }

        function getEtat(){
            return $this->etat;
        }

        // SETTER and GETTER for utilisateur
        function setUtilisateur($utilisateur):void{
            $this->utilisateur = $utilisateur;
        }

        function getUtilisateur(){
            return $this->utilisateur;
        }

        // SETTER and GETTER for dateVente
        function setDateVente($dateVente):void{
            $this->dateVente = $dateVente;
        }

        function getDateVente(){
            return $this->dateVente;
        }

        // SETTER and GETTER for Acheteur
        function setAcheteur($acheteur):void{
            $this->acheteur = $acheteur;
        }

        function getAcheteur(){
            return $this->acheteur;
        }


    }













?>