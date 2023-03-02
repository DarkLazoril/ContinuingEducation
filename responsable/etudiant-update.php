<?php 
session_start();
include_once('DB_connect.php');
if(isset($_POST['update']))
{    
	// traitement upload photo
	   $dest_dir="../uploads_photo/";
        $nom_file=$dest_dir.basename($_FILES['photo']['name']);
        $temp_name=$_FILES['photo']['tmp_name'];    

        if(!is_uploaded_file($temp_name))
          $i="can't upload the file";
     
        if(!move_uploaded_file($temp_name, $nom_file))
          $i="file can't be uploaded to the given destination";

         	//$userCin  should be replaced with $_SESSION['cin']
	$userCin=$_SESSION['cin'];
	
	$req1=$bdd->prepare('SELECT nom FROM professeur WHERE cin=?');
	$req1->execute(array($userCin));
	$data=$req1->fetch();
	$username=$data['nom'];
	$req1->closeCursor();
     // operation ajoute au table audit

	$operation=' a mise a jour les information  du :  '.$_POST['nom'].' '. $_POST['prenom'];

	$req2=$bdd->prepare('INSERT INTO audit (operation,user,username,date_op) VALUES(?,?,?,?) ');
	$req2->execute(array($operation,$userCin,$username,date('Y-m-d'))); 
	$req2->closeCursor();

	// insertion dans la table formation
	$req=$bdd->prepare('UPDATE etudiant SET CNE=?,NOM=?,PRENOM=?,LIEU_N=?,DATE_N=?,SEXE=?,TYPE_BAC=?,DATE_BAC=?,TYPE_DIPLOME=?,date_diplome=?,EMAIL=?,ADRESSE=?,TEL=?,PHOTO=?,montant_for=?,montant_rest=? WHERE CIN=?');
	$req->execute(array($_POST['cne'],
		                $_POST['nom'],
		                $_POST['prenom'],
		                $_POST['ville'],
		                $_POST['naissance'],
		                $_POST['sexe'],
		                $_POST['bactype'],
		                $_POST['datebac'],
		                $_POST['diplome'],
		                $_POST['datediplome'],
		                $_POST['email'],
		                $_POST['adresse'],
		                $_POST['tel'],
		                $nom_file,
		                $_POST['montant'],
		                $_POST['montant_rest'],
		                $_POST['cin']
		                ));
	$req->closeCursor();

	
	header('location: liste-Etudiant.php');
      exit;
	}

