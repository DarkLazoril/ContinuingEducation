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

	$operation=' a supprimer professeur :  '.$_GET['nom'].' '. $_GET['prenom'];

	$req2=$bdd->prepare('INSERT INTO audit (operation,user,username,date_op) VALUES(?,?,?,?) ');
	$req2->execute(array($operation,$userCin,$username,date('Y-m-d'))); 
	$req2->closeCursor();
  //
	$req1=$bdd->prepare('SELECT * from formation where RESPONSABLE=?');
	$req1->execute(array($_SESSION['cin']));
	$data777=$req1->fetch();
	$req1->closeCursor();
	
	// suppression de form_prof
	$req=$bdd->prepare('DELETE FROM prof_from WHERE CIN=? AND DATE_DEBUT=? AND TYPE=? AND SPECIALITE=? ');
	$req->execute(array($_GET['cin'],$data777['DATE_DEBUT'],$data777['TYPE'],$data777['SPECIALITE'] ));
	$req->closeCursor();
	//suppresion de la prof_module
		$req=$bdd->prepare('DELETE FROM prof_matiere WHERE CIN=? AND responsable=?');
	$req->execute(array($_GET['cin'],$_SESSION['cin'] ));
	$req->closeCursor();


       
     header('Location: liste-Professeur.php');
     exit;

	?>

