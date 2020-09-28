 
 <?php
 include 'Etudiant.class.php';

  $etudiant = new Etudiant
  (

    $_POST['nom'],
    $_POST['faculté'],
    $_POST['numeroCarte']
    
   );

   echo 'NOM: ' . $etudiant->getNom() . '</br>';
   echo 'FACULTE: ' . $etudiant->getFac() . '</br>';
   echo 'Numero Carte : ' . $etudiant->getCarte() . '</br>';
   
 ?>
