
<?php
 session_start();
//header('Location:profil-eleve.php');
 include_once('etudiant-class.php');
  $etudiant=new Etudiant( $_SESSION["cin"]);
 $etudiant->demander_attestation();
 header('Location: index.php');
 exit;
 ?>



