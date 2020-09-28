<?php

//inclusion de classe parent
include 'Mother.php';

class Fille extends Mere{

    //opérateur de résolution de porté "parent"
    public function getNOM()
    {
      parent::getNOM();
    }
  
}

$fille = new Fille('fatou','ndiaye');
echo $fille->getNOM();

