<?php
session_start();
 include('DB_connect.php');
 if(isset($_POST['valider']) )
{
	// traitement upload photo
	   $dest_dir="../uploads_photo/";
        $nom_file=$dest_dir.basename($_FILES['photo']['name']);
        $temp_name=$_FILES['photo']['tmp_name'];    

        if(!is_uploaded_file($temp_name))
          $i="can't upload the file";
     
        if(!move_uploaded_file($temp_name, $nom_file))
          $i="file can't be uploaded to the given destination";


	$req = $bdd->prepare('INSERT into professeur values(?,?,?,?,?,?,?,?,?,?,?,?,?)');
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
						$_POST['salaire']));
	$req->closeCursor();
	// recupeartin du form
	$req = $bdd->prepare('SELECT * from formation WHERE RESPONSABLE=?');
	$req->execute(array($_SESSION['cin']));
	$data2=$req->fetch();
	$req->closeCursor();
// insertion dan form_prof

	$req = $bdd->prepare('INSERT into prof_from values(?,?,?,?)');
	$req->execute(array($_POST['Cin'],$data2['DATE_DEBUT'],$data2['TYPE'],$data2['SPECIALITE']));
	$req->closeCursor();
	// association de login et mot de passe:
	 $pass=hash('md5', '123456');
        $req=$bdd->prepare('INSERT INTO authentification(login,mdp,profil,cin) VALUES(?,?,?,?)');
	   $req->execute(array($_POST['Nom'],$pass,'p',$_POST['Cin']));
		$req->closeCursor();
		//$userCin  should be replaced with $_SESSION['cin']
	$userCin=$_SESSION['cin'];
	
	$req1=$bdd->prepare('SELECT nom FROM professeur WHERE cin=?');
	$req1->execute(array($userCin));
	$data=$req1->fetch();
	$username=$data['nom'];
	$req1->closeCursor();
     // operation ajoute au table audit

	$operation=' a ajouter  professeur :  '.$_POST['Nom'].' '.$_POST['Prenom'];

	$req2=$bdd->prepare('INSERT INTO audit (operation,user,username,date_op) VALUES(?,?,?,?) ');
	$req2->execute(array($operation,$userCin,$username,date('Y-m-d'))); 
	$req2->closeCursor();

	header('Location: liste-Professeur.php');
	exit;

}

