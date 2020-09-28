<?php
class Etudiant{
   private $nom;
   private $faculté;
   private $numeroCarte;

   public function __construct($nom ,$faculté ,$numeroCarte)
   {
     $this->nom = $nom;
     $this->faculté = $faculté;
     $this->numeroCarte = $numeroCarte;
   }

     public function getNom()
     {
      return $this->nom;
     }

      public function getFac()
      {
       return $this->faculté;
      }

      public function getCarte()
      {
       return $this->numeroCarte;
      }
}

//  $serigne = new Etudiant('Ndiaye Serigne','Lettre','201790944');
//  echo $serigne->getNom().' est  étudiant en  fac ' 
//  .$serigne->getFac().',son numéro carte est :'
//  .$serigne->getCarte();

