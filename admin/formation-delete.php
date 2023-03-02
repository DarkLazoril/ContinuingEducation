<?php 
session_start();
  include_once('DB_connect.php');  
	//$userCin  should be replaced with $_SESSION['cin']
	$userCin=$_SESSION['cin'];
	
	$req1=$bdd->prepare('SELECT nom FROM professeur WHERE cin=?');
	$req1->execute(array($userCin));
	$data=$req1->fetch();
	$username=$data['nom'];
	$req1->closeCursor();
     // operation ajoute au table audit

	$operation=' Vous avez supprime Formation :  '.$_GET['type'].' '. $_GET['datedebut'].' '.$_GET['specialite'];

	$req2=$bdd->prepare('INSERT INTO audit (operation,user,username,date_op) VALUES(?,?,?,?) ');
	$req2->execute(array($operation,$userCin,$username,date('Y-m-d'))); 
	$req2->closeCursor();

	// insertion dans la table formation
	$req=$bdd->prepare('DELETE FROM formation WHERE TYPE=? AND DATE_DEBUT=? AND SPECIALITE=?');
	$req->execute(array($_GET['type'],
	                    $_GET['datedebut'],
	                    $_GET['specialite'] ));
	$req->closeCursor();

   if($_GET['type']=='dca')
	{
	header('location: liste-DCA.php ');
               exit;
     }
     else{
     header('location: liste-DCESS.php ');
         exit;
     }


	?>

