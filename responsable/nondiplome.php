<?php 
session_start();
  include_once('DB_connect.php');  
	//$userCin  should be replaced with $_SESSION['cin']
	$userCin=$_SESSION['cin'];
	
if(isset( $_POST['send']))
{
     $reqn=$bdd->prepare("UPDATE etudiant_archive  SET diplome=? where CIN=? ");
     $reqn->execute(array(0,$_POST['cin']));
     
      $reqn->closeCursor();
                             
     
     header('Location: liste-archive.php');
     exit;

	}
	?>

