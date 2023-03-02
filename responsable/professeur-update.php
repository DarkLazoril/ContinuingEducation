<?php
session_start();
include_once('DB_connect.php');
if(isset($_POST['update']) )
{  
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

	// traitement upload photo
	   $dest_dir="../uploads_photo/";
        $nom_file=$dest_dir.basename($_FILES['photo']['name']);
        $temp_name=$_FILES['photo']['tmp_name'];    

        if(!is_uploaded_file($temp_name))
          $i="can't upload the file";
     
        if(!move_uploaded_file($temp_name, $nom_file))
          $i="file can't be uploaded to the given destination";
 

         	//$userCin  should be replaced with $_SESSION['cin']
	

	// insertion dans la table formation
	$req=$bdd->prepare('UPDATE professeur SET CIN=?,NOM=?,PRENOM=?,DATE_N=?,SEXE=?,EMAIL=?,ADRESSE=?,TEL=?,DEPART=?,PHOTO=?,LIEN_BLOG=?,BIOGRAPHIE=?,SALAIRE=? WHERE CIN=?');
	$req->execute(array($_POST['Cin'],
						$_POST['Nom'],
						$_POST['Prenom'],
						$_POST['sexe'],
						$_POST['ddn'],
						$_POST['Email'],
						$_POST['adrs'],
						$_POST['Tel'],
						$_POST['dept'],
						$nom_file,
						$_POST['lb'],
						$_POST['biog'],
						$_POST['salaire'],
						$_POST['Cin']
		                ));
	$req->closeCursor();


	header('Location: liste-Professeur.php');
      exit;
	}

