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

	$operation=' a supprimer Etudiant :  '.$_GET['nom'].' '. $_GET['prenom'];

	$req2=$bdd->prepare('INSERT INTO audit (operation,user,username,date_op) VALUES(?,?,?,?) ');
	$req2->execute(array($operation,$userCin,$username,date('Y-m-d'))); 
	$req2->closeCursor();

	// delete dans la table formation
	$req=$bdd->prepare('DELETE FROM etudiant WHERE CIN=?');
	$req->execute(array($_GET['cin'] ));
	$req->closeCursor();
	// delete dans la table fecheance
	$req=$bdd->prepare('DELETE FROM echeance WHERE cin=?');
	$req->execute(array($_GET['cin'] ));
	$req->closeCursor();
	// delete dans la table demande attaes
	$req=$bdd->prepare('DELETE FROM demande_attestation WHERE cin=?');
	$req->execute(array($_GET['cin'] ));
	$req->closeCursor();
    // num paiemets 

	$req=$bdd->prepare('SELECT num_paiement FROM paiement WHERE cin=?');
	$req->execute(array($_GET['cin'] ));
	while($data=$req->fetch())
	{
		// delete from prise enchareg
	$req1=$bdd->prepare('DELETE FROM prise_en_charge WHERE num_paiement=?');
	$req1->execute(array($data['num_paiement'] ));
	$req1->closeCursor();
	// delete from prise enchareg
	$req2=$bdd->prepare('DELETE FROM cheque WHERE num_paiement=?');
	$req2->execute(array($data['num_paiement'] ));
	$req2->closeCursor();
	
	}
	$req->closeCursor();

	$req1=$bdd->prepare('DELETE FROM paiement WHERE cin=?');
	$req1->execute(array($_GET['cin'] ));
	$req1->closeCursor();
	
    // delete from authentification
       $req=$bdd->prepare('DELETE FROM authentification WHERE cin=?)');
	   $req->execute(array($_POST['cin']));
		$req->closeCursor();
  

     header('location: liste-Etudiant.php');
      exit;

	?>

