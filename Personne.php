<?php
class Personne {

   private $nom;
   private $prenom;
   private $age;

  

    public function getNom()
    {
      return $this->nom;
    }

    public function setNom($new_nom)
    {
     return $this->nom =  $new_nom;
    }

}

$modou  = new Personne();
 $modou->setNom('Modou ndiaye');
echo $modou->getNom();
