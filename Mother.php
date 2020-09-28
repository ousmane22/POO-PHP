<?php

class Mere{
 
protected $nom;
protected $prenom;
protected $payé = 0 ;
public const PAYEMENT = 20000;


  public function __construct($nom , $prenom)
  {
     $this->nom = $nom;
     $this->prenom = $prenom;
  }

  public function getNOM()
  {
     echo "Le nom est : ".$this->nom;
  }

  public function APAYER()
  {
       if($this->payé == self::PAYEMENT)
       {
         echo 'Merci vous avez payé votre loyer';
       }

       if($this->payé == 0)
       {
        echo 'Avertissement!! vous devez payer un montant de '.self::PAYEMENT;
       }
  }

}

$payement =  new Mere('Fatou','diop');
echo $payement->APAYER();